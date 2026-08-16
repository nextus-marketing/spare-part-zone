@extends('layouts.admin')
@section('title') Dashboard @endsection
@section('content')
<div class="row g-4 dashboard-stats">

    <div class="col-xl-3 col-md-6">
        <div class="stat-box">
            <div class="stat-left">
                <p class="stat-title">Contact Enquiries</p>
                <h2 class="stat-count">{{ $enquiries }}</h2>
            </div>
            <div class="stat-icon bg-warning">
                <i class="ti ti-message"></i>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6">
        <div class="stat-box">
            <div class="stat-left">
                <p class="stat-title">Auto Parts</p>
                <h2 class="stat-count">{{ $auto_enquiries }}</h2>
            </div>
            <div class="stat-icon bg-primary">
                <i class="ti ti-car"></i>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6">
        <div class="stat-box">
            <div class="stat-left">
                <p class="stat-title">Callbacks</p>
                <h2 class="stat-count">{{ $callbacks }}</h2>
            </div>
            <div class="stat-icon bg-danger">
                <i class="ti ti-phone-call"></i>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6">
        <div class="stat-box">
            <div class="stat-left">
                <p class="stat-title">Blogs</p>
                <h2 class="stat-count">{{ $blogs }}</h2>
            </div>
            <div class="stat-icon bg-success">
                <i class="ti ti-news"></i>
            </div>
        </div>
    </div>

</div>


<style>
    .dashboard-stats {
        margin-top: 10px;
    }

    .stat-box {
        background: #ffffff;
        border-radius: 16px;
        padding: 22px 24px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        border: 1px solid #f0f0f0;
        transition: all 0.25s ease;
    }

    .stat-box:hover {
        box-shadow: 0 10px 28px rgba(0,0,0,0.08);
        transform: translateY(-4px);
    }

    .stat-left {
        display: flex;
        flex-direction: column;
    }

    .stat-title {
        font-size: 14px;
        font-weight: 500;
        color: #6b7280;
        margin-bottom: 6px;
    }

    .stat-count {
        font-size: 34px;
        font-weight: 700;
        color: #111827;
        margin: 0;
    }

    .stat-icon {
        width: 46px;
        height: 46px;
        border-radius: 14px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #fff;
        font-size: 20px;
    }

</style>

@endsection