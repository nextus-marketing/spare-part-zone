@extends('layouts.frontend')

@section('title')
    {{ $blog->meta_title }}
@endsection

@section('meta_description')
    {{ $blog->meta_description }}
@endsection

@section('content')

@section('structured_data')
<script type="application/ld+json">
    {
    "@context": "https://schema.org",
    "@graph": [
        {
        "@type": "BlogPosting",
        "mainEntityOfPage": {
            "@type": "WebPage",
            "@id": "{{ url()->current() }}"
        },
        "headline": "{{ addslashes($blog->meta_title ?? $blog->title) }}",
        "description": "{{ addslashes(strip_tags($blog->meta_description ?? Str::limit($blog->content ?? '', 150))) }}",
        "author": {
            "@type": "Person",
            "name": "{{ addslashes($blog->author_name ?? 'Admin') }}"
        },
        "publisher": {
            "@type": "Organization",
            "name": "Spare Part Zone",
            "logo": {
            "@type": "ImageObject",
            "url": "{{ url('/frontend/my_img/logo/new_logo.svg') }}"
            }
        },
        "datePublished": "{{ $blog->created_at->toIso8601String() }}",
        "dateModified": "{{ $blog->updated_at->toIso8601String() }}"
        }
        @if(!empty($blog->faqs) && count($blog->faqs) > 0)
        ,
        {
        "@type": "FAQPage",
        "mainEntity": [
            @foreach($blog->faqs as $faq)
            {
            "@type": "Question",
            "name": "{{ addslashes($faq['question']) }}",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "{{ addslashes(strip_tags($faq['answer'])) }}"
            }
            }@if(!$loop->last),@endif
            @endforeach
        ]
        }
        @endif
    ]
    }
</script>
@endsection

<style>
    /* ================= BLOG CONTENT BASE ================= */
    .blog__details--content {
        font-size: 16px;
        color: #333;
        line-height: 1.7;
    }

    /* ================= HEADINGS (FIXED ORDER & SIZE) ================= */
    .blog__details--content h1 {
        font-size: 38px;
        margin: 32px 0 16px;
        font-weight: 700;
        line-height: 40px;
    }
    .blog__details--content h2 {
        font-size: 32px;
        margin: 35px 0 15px;
        font-weight: 600;
        line-height: 40px;
    }
    .blog__details--content h3 {
        font-size: 26px;
        margin: 20px 0 12px;
        font-weight: 600;
        line-height: 40px;
    }
    .blog__details--content h4 {
        font-size: 22px;
        margin: 22px 0 10px;
        font-weight: 600;
    }
    .blog__details--content h5 {
        font-size: 20px;
        margin: 20px 0 8px;
        font-weight: 600;
    }
    .blog__details--content h6 {
        font-size: 20px;
        margin: 18px 0 6px;
        font-weight: 600;
        color: #0f2453;
    }

    span {
        display: inline-block;
        transition: var(--transition);
        line-height: 20px;
    }

    /* ================= PARAGRAPH ================= */
    .blog__details--content p {
        margin: 0 0 10px;
    }

    /* ================= LISTS (FORCED FIX) ================= */
    .blog__details--content ul {
        list-style-type: disc !important;
        list-style-position: outside !important;
        padding-left: 28px !important;
        margin-top: 16px !important;
        margin-bottom: 20px !important;
    }

    .blog__details--content li {
        display: list-item !important;
        margin-bottom: 10px !important;
        line-height: 1.7 !important;;
        list-style-type: disc;
    }


    /* ================= IMAGE ================= */
    .blog__details--content .image-container {
        text-align: center;
        margin: 24px 0;
    }

    .blog__details--content .image-container img {
        max-width: 100%;
        height: auto;
        border-radius: 8px;
    }

    .blog__details--content .image-container .caption {
        font-size: 14px;
        color: #777;
        margin-top: 6px;
        font-style: italic;
    }

    /* ================= TABLE ================= */
    .blog__details--content table.editor-table {
        width: 100%;
        border-collapse: collapse;
        margin: 24px 0;
    }

    .blog__details--content table.editor-table td,
    .blog__details--content table.editor-table th {
        border: 1px solid #ddd;
        padding: 10px;
        font-size: 15px;
    }

    .blog__details--content table.editor-table tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    .blog__details--content hr {
        margin: 32px 0;
        border: none;
        border-top: 1px solid #ddd;
    }

    /* ================= LINKS ================= */
    .blog__details--content a {
        color: #ff4e21;
        text-decoration: underline;
    }
    .blog__details--content a:hover {
        color: #0056b3;
    }

    .blog-img { 
        width: 900px;
        height: 494px;
        object-fit: cover;
        border-radius: 10px;
    }

    /* Mobile */
    @media (max-width: 768px) {
        .blog-img {
            width: 100%;
            height: 220px;
        }
    }

    .blog__details--content .image-container .caption {
        font-size: 14px;
        color: #777;
        margin-top: 6px;
        font-style: italic;
        display: none;
    }
</style>

<!-- Breadcrumb -->
<section class="breadcrumb__section breadcrumb__bg">
    <div class="container">
        <div class="row row-cols-1">
            <div class="col">
                <div class="breadcrumb__content text-center">
                    <h1 class="breadcrumb__content--title mb-25">{{ $blog->title }}</h1>
                    <ul class="breadcrumb__content--menu d-flex justify-content-center">
                        <li class="breadcrumb__content--menu__items"><a href="/">Home</a></li>
                        <li class="breadcrumb__content--menu__items"><a href="/blogs">Blog</a></li>
                        <li class="breadcrumb__content--menu__items"><span>{{ $blog->title }}</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Blog Main Section -->
<section class="blog__details--section section--padding">
    <div class="container">
        <div class="row">

            <!-- LEFT SIDE — BLOG CONTENT -->
            <div class="col-xl-8 col-lg-8">
                <div class="blog__details--wrapper">
                    <div class="entry__blog">
                        <div class="blog__post--header mb-3">
                            <p class="blog__post--meta">
                                Posted by :
                                <a href="{{ url('/') }}" target="_blank" rel="noopener noreferrer">
                                    {{ $blog->author }}
                                </a>
                                / On :
                                {{ \Carbon\Carbon::parse($blog->publish_date)->timezone('Asia/Kolkata')->format('d M Y') }}
                            </p>
                        </div>
                        <div class="blog__thumbnail mb-3">
                            <img src="{{ asset(Storage::url($blog->photo)) }}"
                                alt="blog-img"
                                class="blog-img">
                        </div>


                        <div class="blog__details--content">
                            <h2 class="blog__details--content__subtitle mb-3"></h2>

                                @php
                                $description = json_decode($blog->description, true);

                                function _s($v) {
                                    return is_null($v) ? '' : $v;
                                }

                                if (!empty($description['blocks'])) {
                                    foreach ($description['blocks'] as $d) {
                                        $type = $d['type'];
                                        $data = $d['data'];

                                        switch ($type) {
                                            case 'header':
                                                $level = intval($data['level']);
                                                echo "<h{$level}>{$data['text']}</h{$level}>";
                                                break;

                                            case 'paragraph':
                                                echo "<p>{$data['text']}</p>";
                                                break;

                                            case 'raw':
                                                echo $data['html'] ?? '';
                                                break;

                                            case 'delimiter':
                                                echo "<hr>";
                                                break;

                                            case 'image':
                                            if (!empty($d['data']['file']['url'])) {
                                                $url = htmlspecialchars($d['data']['file']['url']);
                                                $caption = $d['data']['caption'] ?? '';
                                                $align = $d['data']['alignment'] ?? 'center';
                                                echo "<div class='image-container {$align}'><img src='{$url}' alt='".strip_tags($caption)."'>";
                                                if ($caption) echo "<p class='caption'>{$caption}</p>";
                                                echo "</div>";
                                            }
                                            break;

                                            case 'image':
                                                $url = $data['file']['url'] ?? $data['url'] ?? '';
                                                $caption = $data['caption'] ?? '';
                                                echo "<div class='image-container'><img src='{$url}' alt='{$caption}'>";
                                                if ($caption) echo "<p class='caption'>{$caption}</p>";
                                                echo "</div>";
                                                break;

                                            case 'list':
                                                $style = $data['style'];
                                                $items = $data['items'];
                                                if ($style == 'ordered') echo "<ol>";
                                                else echo "<ul>";

                                                foreach ($items as $i) {
                                                    $text = is_array($i) ? ($i['content'] ?? $i['text']) : $i;
                                                    echo "<li>{$text}</li>";
                                                }

                                                echo ($style == 'ordered') ? "</ol>" : "</ul>";
                                                break;

                                            case 'table':
                                                echo "<table class='editor-table'>";
                                                foreach ($data['content'] as $row) {
                                                    echo "<tr>";
                                                    foreach ($row as $cell) echo "<td>{$cell}</td>";
                                                    echo "</tr>";
                                                }
                                                echo "</table>";
                                                break;
                                        }
                                    }
                                }
                                @endphp

                        </div>
                    </div>
                </div>
            </div>

            <!-- RIGHT SIDE — SIDEBAR -->
            <div class="col-xl-4 col-lg-4">
                <div class="blog__sidebar--widget left widget__area">
                    <div class="single__widget widget__bg">
                        <h2 class="widget__title h3">Related Article</h2>
                        <div class="widget__post--article">
                            @foreach($latestBlogs as $latest)
                                <div class="post__article--items d-flex align-items-center">
                                    <div class="post__article--thumbnail">
                                        <a href="{{ route('blogs.details', $latest->slug) }}">
                                            <img class="post__article--thumbnail__img"
                                                 src="{{ asset(Storage::url($latest->photo)) }}"
                                                 alt="article-img">
                                        </a>
                                    </div>
                                    <div class="post__article--content">
                                        <h3 class="post__article--content__title">
                                            <a href="{{ route('blogs.details', $latest->slug) }}">
                                                {{ Str::words($latest->title, 5, '...') }}
                                            </a>
                                        </h3>
                                        <span class="meta__deta">{{ $latest->publish_date }}</span>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        document
            .querySelectorAll(".blog__details--content a")
            .forEach(function (link) {
                link.setAttribute("target", "_blank");
                link.setAttribute("rel", "noopener noreferrer");
            });
    });
</script>

@endsection

