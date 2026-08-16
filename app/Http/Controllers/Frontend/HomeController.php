<?php

namespace App\Http\Controllers\Frontend;
use App\Mail\Thankyou;
use App\Models\Enquiry;
use App\Models\BlogVisitor;
use App\Models\Blog;
use App\Rules\CustomCaptcha;
use App\Models\AutoEnquiry;
use App\Models\Popup;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{

public function index()
{
    $blogs = Blog::where('status', 'ACTIVE')
        ->withCount('visitors')
        ->orderBy('publish_date', 'desc')
        ->paginate(9); // Only 9 blogs per page

    return view('Frontend.blogs', compact('blogs')); // folder name must be lowercase
}
   
    public function blog_details(Request $request, $slug)
{
    $blog = Blog::withCount('visitors')
        ->where('slug', $slug)
        ->where('status', 'ACTIVE')
        ->firstOrFail();

    // Track unique visitor by IP
    BlogVisitor::firstOrCreate([
        'blog_id'   => $blog->id,
        'ip_address'=> $request->ip(),
    ]);

    // Decode Editor.js content
    $description = json_decode($blog->description, true);
    $htmlContent = '';
    $faqs = [];
    $pendingQuestion = null;

    if (!empty($description['blocks']) && is_array($description['blocks'])) {
        foreach ($description['blocks'] as $block) {

            switch ($block['type']) {

                /* ---------- HEADER ---------- */
                case 'header':
                    $level = $block['data']['level'] ?? 2;
                    $text  = $block['data']['text'] ?? '';
                    $htmlContent .= "<h{$level}>{$text}</h{$level}>";

                    // Detect FAQ question
                    if (preg_match('/^Q[.:]?\s*(.+)/i', strip_tags($text), $m)) {
                        $pendingQuestion = trim($m[1]);
                    }
                    break;

                /* ---------- PARAGRAPH ---------- */
                case 'paragraph':
                    $text = $block['data']['text'] ?? '';
                    $htmlContent .= "<p>{$text}</p>";

                    // Capture FAQ answer
                    if ($pendingQuestion) {
                        $faqs[] = [
                            'question' => $pendingQuestion,
                            'answer'   => trim(strip_tags($text)),
                        ];
                        $pendingQuestion = null;
                    }
                    break;

                /* ---------- LIST ---------- */
                case 'list':
                    $items = $block['data']['items'] ?? [];
                    $style = $block['data']['style'] ?? 'unordered';

                    if ($style === 'ordered') {
                        $htmlContent .= '<ol>';
                        foreach ($items as $item) {
                            $htmlContent .= "<li>{$item['content']}</li>";
                        }
                        $htmlContent .= '</ol>';
                    }
                    elseif ($style === 'checklist') {
                        $htmlContent .= "<ul class='checklist'>";
                        foreach ($items as $item) {
                            $checked = !empty($item['meta']['checked']) ? 'checked' : '';
                            $htmlContent .= "<li><input type='checkbox' disabled {$checked}> {$item['content']}</li>";
                        }
                        $htmlContent .= '</ul>';
                    }
                    else {
                        $htmlContent .= '<ul>';
                        foreach ($items as $item) {
                            $htmlContent .= "<li>{$item['content']}</li>";
                        }
                        $htmlContent .= '</ul>';
                    }

                    // Capture list as FAQ answer
                    if ($pendingQuestion && !empty($items)) {
                        $answer = implode(' ', array_map(
                            fn($i) => strip_tags($i['content'] ?? ''),
                            $items
                        ));

                        $faqs[] = [
                            'question' => $pendingQuestion,
                            'answer'   => $answer,
                        ];
                        $pendingQuestion = null;
                    }
                    break;

                /* ---------- IMAGE ---------- */
                case 'image':
                    if (!empty($block['data']['file']['url'])) {
                        $url     = htmlspecialchars($block['data']['file']['url']);
                        $caption = $block['data']['caption'] ?? '';
                        $align   = $block['data']['alignment'] ?? 'center';

                        $htmlContent .= "<div class='image-container {$align}'>
                                            <img src='{$url}' alt='" . strip_tags($caption) . "'>";
                        if ($caption) {
                            $htmlContent .= "<p class='caption'>{$caption}</p>";
                        }
                        $htmlContent .= "</div>";
                    }

                    // Close pending FAQ safely
                    $pendingQuestion = null;
                    break;

                /* ---------- TABLE ---------- */
                case 'table':
                    if (!empty($block['data']['content'])) {
                        $htmlContent .= '<div class="editor-table-wrapper"><table class="editor-table">';
                        foreach ($block['data']['content'] as $row) {
                            $htmlContent .= '<tr>';
                            foreach ($row as $cell) {
                                $htmlContent .= "<td>{$cell}</td>";
                            }
                            $htmlContent .= '</tr>';
                        }
                        $htmlContent .= '</table></div>';
                    }

                    $pendingQuestion = null;
                    break;

                /* ---------- DELIMITER ---------- */
                case 'delimiter':
                    $htmlContent .= '<hr>';
                    $pendingQuestion = null;
                    break;

                /* ---------- LINK ---------- */
                case 'linkTool':
                    if (!empty($block['data']['link'])) {
                        $href = htmlspecialchars($block['data']['link']);
                        $text = $block['data']['meta']['title'] ?? $href;
                        $htmlContent .= "<a href='{$href}' target='_blank'>{$text}</a>";
                    }
                    break;
            }
        }
    }

    // Attach FAQs for Schema
    $blog->faqs = $faqs;

    // Latest blogs
    $latestBlogs = Blog::where('status', 'ACTIVE')
        ->where('slug', '!=', $slug)
        ->orderBy('publish_date', 'desc')
        ->take(5)
        ->get();

    return view('Frontend.blog-details', compact('blog', 'htmlContent', 'latestBlogs'));
}

public function contactEnquiry(Request $request)
{
    $rules = [
        'full_name' => 'required',
        'subject' => 'required',
        'email' => 'required|email',
        'mobile' => 'required|digits:10',
    ];
    $messages = [
        'full_name.required' => 'Your Full Name is required',
        'subject.required' => 'Your Subject is required',
        'email.required' => 'Email is required',
        'email.email' => 'Email should be a valid email',
        'mobile.required' => 'The mobile number field is required.',
        'mobile.digits' => 'The mobile number must be exactly 10 digits.',
    ];
    $request->validate($rules, $messages);

    // Save enquiry
    $enquiry = new Enquiry();
    $enquiry->full_name = $request->full_name;
    $enquiry->subject = $request->subject;
    $enquiry->mobile = $request->mobile;
    $enquiry->email = $request->email;
    $enquiry->message = $request->message;
    $enquiry->ip_address = $request->ip();
    $enquiry->save();

    try {
        Mail::to('support@sparepartzone.com')->send(new ContactMail($enquiry));
        Mail::to($request->email)->send(new Thankyou($enquiry));
    } catch (\Throwable $e) {
        Log::error("Mail send error in contactEnquiry: " . $e->getMessage());
    }

    return response()->json(['status' => 'success', 'message' => 'Enquiry Sent Successfully']);
}

    public function autoEnquiry(Request $request)
    {
    // Validation rules — remove custom captcha validation, add 'g-recaptcha-response' instead
    $rules = [
        'full_name' => 'required',
        'email' => 'required|email',
        'mobile' => 'required|digits:10',
        // 'zip' => 'required',
        'vehicle_model' => 'required',
        'vehicle_year' => 'required',
        'make' => 'required',
        'g-recaptcha-response' => 'required',  // Google reCAPTCHA field
    ];

    $messages = [
        'full_name.required' => 'Your Full Name is required',
        'email.required' => 'Email is required',
        'email.email' => 'Email should be a valid email',
        'mobile.required' => 'The mobile number field is required.',
        'mobile.digits' => 'The mobile number must be exactly 10 digits.',
        // 'zip.required' => 'Zip is required',
        'vehicle_model.required' => 'Vehicle Model is required',
        'vehicle_year.required' => 'Vehicle Year is required',
        'part_name.required' => 'Part name is required',
        'make.required' => 'Make is required',
        'g-recaptcha-response.required' => 'Please complete the captcha.',
    ];

    // Only validate part_name if not provided
    if (!$request->filled('part_name')) {
        $rules['part_name'] = 'required';
    }

    // Validate inputs
    $request->validate($rules, $messages);

    // Verify Google reCAPTCHA
    $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
        'secret' => env('RECAPTCHA_SECRET_KEY'),
        'response' => $request->input('g-recaptcha-response'),
        'remoteip' => $request->ip(),
    ]);

    $responseBody = $response->json();

    if (!isset($responseBody['success']) || !$responseBody['success']) {
        return response()->json(['status' => 'error', 'message' => 'Captcha verification failed. Please try again.'], 422);
    }

    // Save enquiry
    $enquiry = new AutoEnquiry();
    $enquiry->full_name = $request->full_name;
    $enquiry->mobile = $request->mobile;
    $enquiry->email = $request->email;
    $enquiry->zip = $request->zip;
    $enquiry->vehicle_year = $request->vehicle_year;
    $enquiry->vehicle_model = $request->vehicle_model;
    $enquiry->part_name = $request->part_name; // hidden or user input
    $enquiry->make = $request->make;
    $enquiry->ip_address = $request->ip();
    $enquiry->save();

    // Send mails
    try {
        Mail::to('support@sparepartzone.com')->send(new ContactMail($enquiry));
        Mail::to($request->email)->send(new Thankyou($enquiry));
    } catch (\Throwable $e) {
        Log::error("Mail send error in autoEnquiry: " . $e->getMessage());
    }

    return response()->json(['status' => 'success', 'message' => 'Enquiry Sent Successfully']);
}

    public function modelEnquiry(Request $request)
{
    // Validation rules with Google reCAPTCHA instead of custom captcha
    $rules = [
        'full_name' => 'required',
        'zip' => 'required|numeric',
        'email' => 'required|email',
        'mobile' => 'required|digits:10',
        'part_name' => 'required',
        'g-recaptcha-response' => 'required',  // Add reCAPTCHA validation
    ];

    $messages = [
        'full_name.required' => 'Your Full Name is required',
        'zip.required' => 'Your Zip is required',
        'zip.numeric' => 'The Zip must contain only numbers.', 
        'part_name.required' => 'Part name is required',
        'email.required' => 'Email is required',
        'email.email' => 'Email should be a valid email',
        'mobile.required' => 'The mobile number field is required.',
        'mobile.digits' => 'The mobile number must be exactly 10 digits.',
        'g-recaptcha-response.required' => 'Please complete the captcha.',  // reCAPTCHA error message
    ];

    $request->validate($rules, $messages);

    // Verify Google reCAPTCHA
    $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
        'secret' => env('RECAPTCHA_SECRET_KEY'),
        'response' => $request->input('g-recaptcha-response'),
        'remoteip' => $request->ip(),
    ]);

    $responseBody = $response->json();

    if (!isset($responseBody['success']) || !$responseBody['success']) {
        return response()->json([
            'status' => 'error',
            'message' => 'Captcha verification failed. Please try again.'
        ], 422);
    }

    // Save enquiry
    $enquiry = new Popup();
    $enquiry->full_name = $request->full_name;
    $enquiry->zip = $request->zip;
    $enquiry->mobile = $request->mobile;
    $enquiry->email = $request->email;
    $enquiry->part_name = $request->part_name;
    $enquiry->ip_address = $request->ip();
    $enquiry->save();

    try {
        Mail::to('support@sparepartzone.com')->send(new ContactMail($enquiry));
        Mail::to($request->email)->send(new Thankyou($enquiry));
    } catch (\Throwable $e) {
        Log::error("Mail send error in modelEnquiry: " . $e->getMessage());
    }

    return response()->json(['status' => 'success', 'message' => 'Enquiry Sent Successfully']);
}

    public function leadEnquiry(Request $request)
{
    $rules = [
        'full_name' => 'required',
        'email' => 'required|email',
        'mobile' => 'required|digits:10',
        'vehicle_model' => 'required',
        'vehicle_year' => 'required',
        'make' => 'required',
        'zip' => 'required',
    ];

    $messages = [
        'full_name.required' => 'Your Full Name is required',
        'email.required' => 'Email is required',
        'email.email' => 'Email should be a valid email',
        'mobile.required' => 'The mobile number field is required.',
        'mobile.digits' => 'The mobile number must be exactly 10 digits.',
        'zip.required' => 'Zip is required',
        'vehicle_model.required' => 'Vehicle Model is required',
        'vehicle_year.required' => 'Vehicle Year is required',
        'part_name.required' => 'Part name is required',
        'make.required' => 'Vehicle Make is required',
    ];

    // Only validate part_name if not provided
    if (!$request->filled('part_name')) {
        $rules['part_name'] = 'required';
    }

    // Validate inputs
    $request->validate($rules, $messages);

    // Save enquiry
    $enquiry = new AutoEnquiry();
    $enquiry->full_name = $request->full_name;
    $enquiry->mobile = $request->mobile;
    $enquiry->email = $request->email;
    $enquiry->zip = $request->zip;
    $enquiry->vehicle_year = $request->vehicle_year;
    $enquiry->vehicle_model = $request->vehicle_model;
    $enquiry->part_name = $request->part_name; // hidden or user input
    $enquiry->vin = $request->vin;
    $enquiry->purchase_time = $request->purchase_time;
    $enquiry->notes = $request->notes;
    $enquiry->make = $request->make;
    $enquiry->form_name = $request->form_name;
    $enquiry->ip_address = $request->ip();
    $enquiry->save();

    // Send mails
    try {
        Mail::to('support@sparepartzone.com')->send(new ContactMail($enquiry));
        Mail::to($request->email)->send(new Thankyou($enquiry));
    } catch (\Throwable $e) {
        Log::error("Mail send error in leadEnquiry: " . $e->getMessage());
    }

    return response()->json(['status' => 'success', 'message' => 'Enquiry Sent Successfully']);
}

}