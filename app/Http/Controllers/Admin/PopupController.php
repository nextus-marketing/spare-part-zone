<?php

namespace App\Http\Controllers\Admin;

use App\Models\Popup;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class PopupController extends Controller
{
    public function index()
    {
        return view('Admin.Popups.index');
    }

    public function data(Request $request)
    {
        $query = Popup::where('id', '!=', 0)->orderBy('created_at', 'desc');

        return DataTables::eloquent($query)
            ->editColumn('datetime', function ($popup) {
                return \Carbon\Carbon::parse($popup->created_at)
                    ->setTimezone('Asia/Kolkata')
                    ->format('d-m-Y || h:i A');
            })
            ->editColumn('full_name', function ($popup) {
                return $popup->full_name;
            })
            ->editColumn('zip', function ($popup) {
                return $popup->zip;
            })
            ->editColumn('email', function ($popup) {
                return $popup->email;
            })
            ->editColumn('mobile', function ($popup) {
                return $popup->mobile;
            })
            ->editColumn('part_name', function ($popup) {
                return $popup->part_name;
            })
            ->addColumn('action', function ($popup) {
                $show = '<a href="' . route('admin.popups.show', ['popup' => $popup->route_key]) . '" class="badge bg-info fs-1 modal-one-btn" data-entity="popups" data-title="Popup" data-route-key="' . $popup->route_key . '"><i class="fa fa-eye"></i></a>';
                return $show;
            })
             ->editColumn('ip_address', function ($enquiry) {
                return $enquiry->ip_address ?? 'NA';
            })
            ->addIndexColumn()
            ->rawColumns(['datetime', 'full_name', 'zip', 'email', 'mobile', 'part_name', 'status', 'action'])
            ->setRowId('id')
            ->make(true);
        }

    public function list()
    {
        $popups = Popup::all();
        return response()->json([
            'status' => 'success',
            'list' => $popups
        ], 200);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Popup $popup)
    {
        return view('Admin.Popups.show', compact('popup'));
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}