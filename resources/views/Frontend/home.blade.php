@extends('layouts.frontend')
@section('title')
    Shop Spare Part Zone Online | Fast, Reliable, Affordable
@endsection
@section('content')
    <script type="application/ld+json">{"@context": "https://schema.org","@type": "Organization","name": "Spare Part Zone","url": "https://sparepartzone.com/","logo": "https://sparepartzone.com/frontend/my_img/logo/new_logo.svg",
        "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "+1 (855) 581-5811",
            "contactType": "sales",
            "areaServed": "US",
            "availableLanguage": "en"
        }}
    </script>

    <!-- Swiper CSS -->
    <style>
        .search__filter--inner {
            background: linear-gradient(to right, #FAEEF2, #F1F3FB);
            padding: 2rem 2rem;
            border-radius: 5px;
        }

        @media (max-width: 767px) {
            .site-logo img {
                display: none;
            }
        }
    </style>

    <!-- Form Row Style -->
    <style>
        @media (max-width: 500px) {

            a,
            button {
                font-size: 11px;
            }
        }


        /* Default styles (mobile first) */
        .banner__form {
            margin-right: 0;
            /* or whatever you want for mobile */
        }

        @media (max-width: 500px) {
            .banner__form {
                max-width: 313px !important;
                margin-left: -19px;
            }
        }

        /* Desktop styles */
        @media (min-width: 992px) {
            .banner__form {
                margin-right: 50px;
            }
        }

        .form-row-inline {
            display: flex;
            gap: 12px;
            margin-bottom: 12px;
        }

        .form-row-inline>div {
            flex: 1;
        }

        .inline-input {
            width: 100%;
            padding: 10px 12px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 14px;
            box-sizing: border-box;
        }
    </style>

    <style>
        /* Style the select box */
        .inline-input {
            width: 100%;
            padding: 10px 12px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 14px;
            box-sizing: border-box;
            color: #7a6d6d;
            /* Default text color */
        }

        /* Style the placeholder option */
        .inline-input .placeholder {
            color: #999;
            /* Gray color */
        }
    </style>


    <style>
        .contact__form--input {
            width: 100%;
            padding: 6px;
            margin-bottom: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .form-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            flex-direction: column;
        }

        .form-row {
            display: flex;
            gap: 10px;
            margin-bottom: 0px;
        }

        .contact__form--input {
            flex: 1;
            padding: 6px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        @media (max-width: 768px) {
            .hero__slider--items__style3 {
                flex-direction: column;
                text-align: center;
                padding: 20px 15px;
            }
        }

        @media (max-width: 768px) {
            .hero__slider--items__style3 {
                flex-direction: column;
                text-align: center;
                padding: 20px 30px;
            }
        }

        @media only screen and (min-width: 992px) {
            .primary__btn {
                font-size: 1.5rem;
                line-height: 4.2rem;
                height: 4.2rem;
                padding: 0 1.2rem;
            }
        }
    </style>

    <style>
        .form-grid {
            display: grid !important;
            grid-template-columns: 1fr !important;
            gap: 15px !important;

        }

        /* On desktop show 4 fields in a row */
        @media (min-width: 992px) {
            .form-grid {
                grid-template-columns: repeat(4, 1fr) !important;
                gap: 20px !important;
            }
        }
    </style>

    <style>
        /* Set fixed image size for desktop */
        .newsletter__popup--thumbnail {
            width: 330px;
            height: 410px;
            flex-shrink: 0;
            overflow: hidden;
            border-radius: 10px;
        }

        .newsletter__popup--thumbnail__img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        /* Responsive adjustments */
        @media only screen and (max-width: 768px) {
            .newsletter__popup--inner {
                min-height: 30vh !important;
                display: flex;
                flex-direction: column;
                justify-content: center;
                padding: 20px;
            }

            .newsletter__popup--box {
                flex-direction: column;
                text-align: center;
            }

            /* Hide image on mobile */
            .newsletter__popup--thumbnail {
                display: none;
            }

            .newsletter__popup--box__right {
                width: 100%;
            }
        }
    </style>

    <style>
        .stock-title {
            font-size: 28px;
            font-weight: 700;
            color: #ff4e21;
            display: block;
        }

        .form-steps {
            display: flex;
            gap: 12px;
            margin-bottom: 20px;
        }

        .step {
            display: flex;
            align-items: center;
            gap: 6px;
            color: #999;
            font-weight: 500;
        }

        .step span {
            width: 22px;
            height: 22px;
            border-radius: 50%;
            border: 1px solid #ccc;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 12px;
        }

        .step.active {
            color: #ff4e21;
            font-weight: 600;
        }

        .step.active span {
            background: #ff4e21;
            color: #fff;
            border-color: #ff4e21;
        }
    </style>

    <style>
        .how-we-work {
            background: #fafafa;
        }

        /* Card styling */
        .work-card {
            background: #fff;
            border-radius: 14px;
            padding: 35px 25px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.06);
            transition: all 0.35s ease;
            position: relative;
            overflow: hidden;
        }

        .work-card::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            height: 4px;
            width: 0;
            background: #ff4e21;
            transition: width 0.35s ease;
        }

        .work-card:hover::before {
            width: 100%;
        }

        .work-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 18px 40px rgba(255, 78, 33, 0.18);
        }

        /* Icon */
        .icon-box {
            width: 70px;
            height: 70px;
            margin: 0 auto 20px;
            border-radius: 50%;
            background: rgba(255, 78, 33, 0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.35s ease;
        }

        .icon-box i {
            font-size: 28px;
            color: #ff4e21;
        }

        .work-card:hover .icon-box {
            background: #ff4e21;
        }

        .work-card:hover .icon-box i {
            color: #fff;
        }

        /* Text */
        .work-card h5 {
            font-weight: 700;
            color: #ff4e21;
            margin-bottom: 10px;
        }

        .work-card p {
            color: #555;
            font-size: 0.95rem;
            line-height: 1.6;
        }

        /* Mobile tweaks */
        @media (max-width: 576px) {
            .work-card {
                padding: 30px 20px;
            }
        }
    </style>


    <style>
        .banner,
        .hero,
        .banner-wrapper {
            position: relative;
            min-height: 100vh;
        }

        /* ===============================
                Banner Form – Base (Mobile / Tablet)
                ================================ */
        .banner__form {
            background: #ffffff;
            padding: 14px 22px;
            border-radius: 14px;
            width: 100%;
            max-width: 550px;
            box-shadow: 0 10px 26px rgba(0, 0, 0, 0.08);
            z-index: 10;
            position: relative;
            margin: 55px auto 0;
        }

        /* ===============================
                    Parent must be relative
                    ================================ */
        .hero__slider--items__style3 {
            position: relative;
        }

        /* ===============================
                    Laptop Screens (1024px – 1365px)
                    ================================ */
        /* Laptop Screens (1024px – 1365px) */
        @media only screen and (min-width: 1024px) and (max-width: 1365px) {
            .banner__form {
                position: absolute;
                right: 60px;
                /* increase space from the right a bit */
                top: 40%;
                /* simpler centering */
                transform: translateY(-50%);
                max-width: 500px;
                /* slightly larger than before */
                width: 90%;
                /* ensures it scales a bit on smaller laptops */
            }
        }


        /* ===============================
                    Desktop Screens (1366px+)
                    ================================ */
        @media only screen and (min-width: 1366px) {
            .banner__form {
                position: absolute;
                right: 120px;
                top: 40%;
                transform: translateY(-50%);
                max-width: 550px;
            }
        }


        .form-row-label input,
        .form-row-label select {
            height: 38px;
            /* smaller height */
            padding: 0 10px;
            font-size: 13px;
        }

        .inline-textarea {
            height: 70px;
            font-size: 13px;
            margin-bottom: 12px;
        }

        @media (max-width: 768px) {
            .banner__form {
                position: static;
                transform: none;
                margin: -10px auto;
            }
        }


        /* Title */
        .form-title {
            text-align: center;
            font-size: 22px;
            font-weight: 600;
            margin-bottom: 4px;
        }

        .form-subtitle {
            text-align: center;
            font-size: 18px !important;
            color: #2d2929;
            margin-bottom: 5px;
        }

        /* Steps */
        .form-steps {
            display: flex;
            justify-content: center;
            gap: 24px;
            margin-bottom: 22px;
        }

        .step {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 13px;
            color: #9ca3af;
        }

        .step span {
            width: 22px;
            height: 22px;
            border-radius: 50%;
            background: #e5e7eb;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 12px;
        }

        .step.active {
            color: #ff4e21;
            font-weight: 600;
        }

        .step.active span {
            background: #ff4e21;
            color: #fff;
        }

        .form-row-label {
            display: grid;
            grid-template-columns: 120px 1fr;
            align-items: center;
            gap: 5px;
            /* margin-bottom: 6px; */
        }

        .form-row-label label {
            font-size: 15px;
            font-weight: 500;
            color: #111827;
            text-align: left;
        }

        /* Inputs */
        .form-row-label input,
        .form-row-label select {
            height: 35px;
            padding: 0 12px;
            font-size: 14px;
            border-radius: 8px;
            border: 1px solid #d1d5db;
            width: 100%;
        }

        .form-row-label input:focus,
        .form-row-label select:focus {
            border-color: #ff4e21;
            box-shadow: 0 0 0 2px rgba(6, 95, 91, 0.15);
            outline: none;
        }

        /* Textarea */
        .inline-textarea {
            width: 100%;
            height: 90px;
            padding: 10px 12px;
            font-size: 14px;
            border-radius: 8px;
            border: 1px solid #d1d5db;
            margin-bottom: 16px;
            resize: none;
        }

        /* Required */
        .required {
            color: #ff4e21;
            margin-right: 4px;
        }

        /* Button */

        /* Mobile */
        @media (max-width: 480px) {
            .form-row-label {
                grid-template-columns: 1fr;
            }

            .form-row-label label {
                margin-bottom: 4px;
            }
        }

        form label {
            display: block;
            margin-top: -2px;
            font-weight: 600;
        }

        /* 📱 Mobile View UNO Reverse */
        /* @media (max-width: 767px) {
                            .hero__slider--items__style3 {
                                flex-direction: column;
                                align-items: stretch;
                            }

                            
                            .banner__form {
                                order: 1;
                                margin: 15px auto;
                                width: 100%;
                                max-width: 100%;
                            }

                        
                            .slider__content {
                                order: 2;
                                margin-top: 20px;
                                text-align: center;
                            }

                            .hero__tags {
                                display: grid;
                                grid-template-columns: 1fr;
                                gap: 10px;
                            }
                        } */
        #form {
            scroll-margin-top: 100px;
        }

        /* Laptop screens */
        @media only screen and (min-width: 1024px) and (max-width: 1365px) {
            .slider__maintitle.style3 {
                font-size: 44px;
                line-height: 5.2rem;
                color: #ffffff;
            }
        }

        /* Desktop screens */
        @media only screen and (min-width: 1366px) {
            .slider__maintitle.style3 {
                font-size: 50px;
                line-height: 5rem;
                color: #ffffff;
            }
        }


        .counterup__banner--section {
            padding: 80px 0;
        }

        .counter-card {
            background: #ffffff;
            border-radius: 16px;
            padding: 40px 20px;
            box-shadow: 0 12px 35px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
            height: 100%;
        }

        .counter-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 45px rgba(0, 0, 0, 0.12);
        }

        .counterup__number {
            display: block;
            font-size: 48px;
            font-weight: 800;
            color: #ff4e21;
            margin-bottom: 12px;
        }

        .counter-title {
            font-size: 16px;
            font-weight: 600;
            color: #333;
            line-height: 1.4;
        }

        .counterup__number::after {
            content: "+";
            font-size: 24px;
            margin-left: 2px;
        }

        .category-card {
            position: relative;
            height: 280px;
            border-radius: 20px;
            overflow: hidden;
            background-size: 110%;
            background-position: center;
            background-repeat: no-repeat;
            transition: background-size 0.6s ease;
        }

        /* Zoom effect */
        .category-card:hover {
            background-size: 120%;
        }

        /* Dark overlay */
        .category-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(rgba(0, 0, 0, 0.65),
                    rgba(0, 0, 0, 0.85));
            color: #fff;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 40px;
        }

        /* Title */
        .category-overlay h3 {
            font-size: 26px;
            font-weight: 800;
            margin-bottom: 12px;
            letter-spacing: 1px;
        }

        /* Text */
        .category-overlay p {
            font-size: 14px;
            line-height: 1.6;
            color: #d1d5db;
            max-width: 90%;
            margin-bottom: 20px;
        }

        /* Button */
        .category-btn {
            display: inline-block;
            background: #ff4e21;
            color: #fff;
            padding: 10px 28px;
            border-radius: 30px;
            font-weight: 600;
            font-size: 20px;
            text-decoration: none;
            width: fit-content;
            transition: all 0.3s ease;
        }

        .category-btn:hover {
            background: #9c0505;
            color: #fff;
        }

        /* CALL US SECTION */
        .call-us-section {
            background: linear-gradient(135deg, #f8d7da, #fdebec);
            padding: 80px 0;
        }

        .call-card {
            background: #ffffff;
            border-radius: 16px;
            padding: 50px 30px;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.08);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .call-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 25px 55px rgba(0, 0, 0, 0.12);
        }

        .call-title {
            font-size: 36px;
            font-weight: 800;
            letter-spacing: 2px;
            color: #ff4e21;
        }

        .call-subtitle {
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 30px;
            color: #333;
        }

        /* Buttons */
        .call-buttons {
            display: flex;
            gap: 20px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .call-btn {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 18px 22px;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s ease;
            border-radius: 50px;
            font-size: 22px;
        }

        /* PRIMARY BUTTON */
        .call-btn-primary {
            background: #ff4e21;
            color: #ffffff;
        }

        .call-btn-primary i {
            color: #ffffff;
        }

        .call-btn-primary:hover {
            background: #d90000;
            /* darker red for contrast */
            color: #ffffff;
            /* force text color */
            transform: scale(1.05);
        }

        .call-btn-primary:hover i {
            color: #ffffff;
            /* force icon color */
        }

        /* OUTLINE BUTTON */
        .call-btn-outline {
            border: 2px dashed #ff4e21;
            color: #ff4e21;
            background: transparent;
        }

        .call-btn-outline i {
            color: #ff4e21;
        }

        .call-btn-outline:hover {
            background: #ff4e21;
            color: #ffffff;
            transform: scale(1.05);
        }

        .call-btn-outline:hover i {
            color: #ffffff;
        }

        /* Phone icon pulse */
        .pulse-icon {
            animation: pulse 1.6s infinite;
        }

        @keyframes pulse {
            0% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.15);
            }

            100% {
                transform: scale(1);
            }
        }

        /* Mobile */
        @media (max-width: 576px) {
            .call-title {
                font-size: 28px;
                line-height: 35px;
            }

            .call-subtitle {
                font-size: 18px;
            }
        }

        /* Laptop screens */
        @media only screen and (min-width: 1024px) and (max-width: 1365px) {
            .hero__slider--items__style3 {
                height: 500px;
            }
        }

        /* Desktop screens */
        @media only screen and (min-width: 1366px) {
            .hero__slider--items__style3 {
                height: 580px;
            }
        }


        /* Hide on mobile devices */
        @media (max-width: 767px) {
            .no-mob {
                display: none !important;
            }
        }

        /* Hide on laptop and desktop */
        @media (min-width: 768px) {
            .no-desktop {
                display: none !important;
            }
        }
    </style>


    <style>
        /* Title reorder without HTML change */


        /* Optional polish */
        .stock-badge {
            color: #22c55e;
            font-weight: 600;
            margin-right: 6px;
        }

        /* Tablets */
        @media (max-width: 992px) {
            form button {
                width: 100%;
            }
        }

        /* Mobile */
        @media (max-width: 576px) {
            form button {
                width: 100%;
            }
        }



        @media only screen and (min-width: 1366px) {
            .slider__content.style3 {
                margin-left: 20px !important;
            }
        }

        @media (min-width: 1200px) {
            .slider__content.style3 {
                margin-left: 45px !important;
            }
        }
    </style>

    <style>
        .call-btn {
            display: inline-flex;
            align-items: center;
            gap: 2px;
            background: #ff4e21;
            color: #fff;
            padding: 10px 18px;
            border-radius: 999px;
            font-weight: 600;
            font-size: 24px;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .call-btn i {

            padding: 8px;
            border-radius: 50%;
            font-size: 14px;
        }

        .call-btn:hover {
            background: rgb(0, 0, 0);
            transform: translateY(-1px);
            color: #ffffff;
        }

        /* Hide on mobile (show on desktop) */
        .d-n-mob {
            display: inline-flex;
        }

        @media (max-width: 768px) {
            .d-n-mob {
                display: none;
            }
        }


        /* Hide on desktop/laptop (show on mobile) */
        .d-n-desktop {
            display: none;
        }

        @media (max-width: 768px) {
            .d-n-desktop {
                display: inline-flex;
            }
        }

        .new-btn {
            display: inline-block;
            background-color: #ff4e21;
            /* strong red */
            color: #ffffff;
            border: none;
            border-radius: 6px;
            width: 50%;
            padding: 6px 8px;
            font-size: clamp(14px, 2vw, 16px);
            font-weight: 600;
            font-family: inherit;

            cursor: pointer;
            transition: all 0.25s ease;
            white-space: nowrap;
        }

        /* Hover effect (desktop/laptop) */
        .new-btn:hover {
            background-color: #a80000;
            transform: translateY(-1px);
        }

        /* Active / click */
        .new-btn:active {
            transform: translateY(0);
        }

        /* Mobile refinement */
        @media (max-width: 576px) {
            .new-btn {
                width: 90%;
                padding: 8px;
                font-size: 15px;
            }
        }
    </style>

    <main class="main__content_wrapper">
        <!-- Start slider section -->

        <section class="hero__slider--section slider__section--bg3" style="padding: 0; margin: 0;">
            <div class="hero__slider--inner noninteractive-slider swiper">
                <div class="hero__slider--wrapper swiper-wrapper">
                    <!-- Slider 1 -->
                    <div class="swiper-slide"
                        style="background: url('/frontend/my_img/banner/banner-16.webp') no-repeat center center / cover;">
                        <!-- <div class="site-logo" style="margin-top:30px; margin-left:20px; ">
                                    <a href="/home">
                                        <img src="/frontend/my_img/logo/new_logo.svg" alt="Spare Part Zone Logo">
                                    </a>
                                </div> -->

                        <div class="hero__slider--items__style3 d-flex align-items-center justify-content-between">
                            <div class="slider__content style3 container" style="margin-left: 0;">
                                <span class="slider__subtitle style3">SHOP THE VERY BEST</span>
                                <h1 class="slider__maintitle style3 h2" style="color:#ffffff;">
                                    WELCOME TO <br> <span class="highlight" style="color: #ff4e21;">Spare Part Zone</span>
                                </h1>
                                <p class="slider__desc style3" style="color: white;">Find The Perfect Part Fast & Easy</p>

                                <a class="call-btn openPopup d-n-mob" href="tel:+18555815811">
                                    <i class="fa-solid fa-headset"></i>
                                    +1 (855) 581-5811
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
        </section>

        <!-- End search filter section -->
        <!-- End slider section -->

        <!-- Start categories section -->
        <section class="categories__section section--padding pt-0 desktop-only pt-5">
            <div class="container">
                <div class="row mb--n25">
                    <div class="col-lg-2 col-md-4 col-sm-4 col-6 mb-25">
                        <div class="categories__card text-center">
                            <a class="categories__card--link" href="/engine-parts">
                                <i class="fa-solid fa-cogs"></i>
                                <h2 class="categories__title">Engine Parts</h2>
                                <span class="categories__subtitle">(15 items)</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-4 col-6 mb-25">
                        <div class="categories__card text-center">
                            <a class="categories__card--link" href="/transmission-parts">
                                <i class="fas fa-car-side"></i>

                                <h2 class="categories__title">Transmission Parts </h2>
                                <span class="categories__subtitle">(7 items)</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-4 col-6 mb-25">
                        <div class="categories__card text-center">
                            <a class="categories__card--link" href="/suspension-parts">
                                <i class="fa-solid fa-tools"></i>
                                <h2 class="categories__title">Suspension Parts</h2>
                                <span class="categories__subtitle">(11 items)</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-4 col-6 mb-25">
                        <div class="categories__card text-center">
                            <a class="categories__card--link" href="/electrical-parts">
                                <span class="categories__icon">
                                    <i class="fas fa-bolt"></i>
                                </span>
                                <h2 class="categories__title">Electrical Parts</h2>
                                <span class="categories__subtitle">(12 items)</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-4 col-6 mb-25">
                        <div class="categories__card text-center">
                            <a class="categories__card--link" href="/exterior-parts">
                                <span class="categories__icon">
                                    <i class="fa-solid fa-car"></i>
                                </span>
                                <h2 class="categories__title">Exterior Body Parts</h2>
                                <span class="categories__subtitle">(9 items)</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-4 col-6 mb-25">
                        <div class="categories__card text-center">
                            <a class="categories__card--link" href="/interior-parts">
                                <span class="categories__icon">
                                    <i class="fas fa-door-closed"></i>
                                </span>
                                <h2 class="categories__title">Interior Body Parts</h2>
                                <span class="categories__subtitle">(6 items)</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End categories section -->

        <!-- Start banner section -->
        <section class="banner__section section--padding pt-5">
            <div class="container">
                <div class="row  mb--n30">
                    <div class="col-lg-6 col-md-6 mb-30">
                        <div class="banner__items position__relative">
                            <a class="banner__thumbnail display-block" href="tel:+1 (855) 581-5811"><img
                                    class="banner__thumbnail--img banner__max--height"
                                    src="/frontend/assets/img/banner/banner1.webp" alt="banner-img">
                                <div class="banner__content">
                                    {{-- <span class="banner__content--subtitle text__secondary">Toyota Combo</span> --}}
                                    <h2 class="banner__content--title"><span class="banner__content--title__inner">CAR
                                            PARTS</span>
                                        </br>COLLECTION</h2>

                                    <a href="tel:+1 (855) 581-5811"
                                        style="
                                            display: flex;
                                            align-items: center;
                                            justify-content: center;
                                            background-color: #ff4e21;
                                            color: white;
                                            padding: 5px 15px;
                                            border-radius: 25px;
                                            text-decoration: none;
                                            font-weight: bold;
                                            margin-left: auto;
                                        ">
                                        <i class="fas fa-phone" style="margin-right: 8px;"></i>
                                        Enquire Now
                                    </a>
                                </div>
                                {{-- <span class="banner__badge">25% <br> off</span> --}}
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 mb-30">
                        <div class="banner__items position__relative">
                            <a class="banner__thumbnail display-block" href="tel:+1 (855) 581-5811"><img
                                    class="banner__thumbnail--img banner__max--height"
                                    src="/frontend/assets/img/banner/banner2.webp" alt="banner-img">
                                <div class="banner__content right">
                                    {{-- <span class="banner__badge--style2">20% Off</span> --}}
                                    <h2 class="banner__content--title">BODY PARTS <br> FOR ANY <span
                                            class="banner__content--title__inner"> VEHICLE </span></h2>
                                    <a href="tel:+1 (855) 581-5811"
                                        style="
                                            display: flex;
                                            align-items: center;
                                            justify-content: center;
                                            background-color: #ff4e21;
                                            color: white;
                                            padding: 5px 15px;
                                            border-radius: 25px;
                                            text-decoration: none;
                                            font-weight: bold;
                                            margin-left: auto;
                                        ">
                                        <i class="fas fa-phone" style="margin-right: 8px;"></i>
                                        Enquire Now
                                    </a>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Start product section -->

        <section class="product__section section--padding  pt-0">
            <div class="container">
                <div class="section__heading section__heading--flex border-bottom mb-30">
                    <h2 class="section__heading--maintitle w-100">Today's <span>Top Choice</span></h2>
                </div>

                <div class="product__section--inner pb-15 product__swiper--activation swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <article class="product__card">
                                <div class="product__card--thumbnail">
                                    <a class="product__card--thumbnail__link display-block"
                                        href="/engine-parts/turbocharger">
                                        <img src="/frontend/my_img/top/turbo-large.jpg" alt="product-img">

                                    </a>


                                </div>
                                <div class="product__card--content">

                                    <h3 class="product__card--title" style="text-align: center"><a
                                            href="/engine-parts/turbocharger">Turbo
                                            Charger </a></h3>
                                    <div class="mt-3" style="display: flex; justify-content: center;">
                                        <a class="primary__btn slider__btn" href="tel:+1 (855) 581-5811">
                                            <i class="fas fa-phone" style="margin-right: 8px;"></i>
                                            Enquire Now
                                        </a>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="swiper-slide">
                            <article class="product__card">
                                <div class="product__card--thumbnail">
                                    <a class="product__card--thumbnail__link display-block"
                                        href="/electrical-parts/alternator">
                                        <img src="/frontend/my_img/top/altenator.jpg" alt="product-img">
                                    </a>
                                </div>
                                <div class="product__card--content">

                                    <h3 class="product__card--title" style="text-align: center"><a
                                            href="/electrical-parts/alternator">Alternator</a></h3>
                                    <div class="mt-3" style="display: flex; justify-content: center;">
                                        <a class="primary__btn slider__btn" href="tel:+1 (855) 581-5811">
                                            <i class="fas fa-phone" style="margin-right: 8px;"></i>
                                            Enquire Now
                                        </a>
                                    </div>
                                </div>
                            </article>
                        </div>

                        <div class="swiper-slide">
                            <article class="product__card">
                                <div class="product__card--thumbnail">
                                    <a class="product__card--thumbnail__link display-block"
                                        href="/exterior-parts/wheel-rim">
                                        <img src="/frontend/my_img/top/wheel_rim.webp" alt="product-img">
                                    </a>
                                </div>
                                <div class="product__card--content">

                                    <h3 class="product__card--title" style="text-align: center"><a
                                            href="/exterior-parts/wheel-rim">Wheel
                                            Rim </a></h3>
                                    <div class="mt-3" style="display: flex; justify-content: center;">
                                        <a class="primary__btn slider__btn" href="tel:+1 (855) 581-5811">
                                            <i class="fas fa-phone" style="margin-right: 8px;"></i>
                                            Enquire Now
                                        </a>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="swiper-slide">
                            <article class="product__card">
                                <div class="product__card--thumbnail">
                                    <a class="product__card--thumbnail__link display-block"
                                        href="/electrical-parts/headlight">
                                        <img src="/frontend/my_img/top/car-headlights.webp" alt="product-img">
                                    </a>
                                </div>
                                <div class="product__card--content">

                                    <h3 class="product__card--title" style="text-align: center"><a
                                            href="/electrical-parts/headlight">Car
                                            Headlight </a></h3>
                                    <div class="mt-3" style="display: flex; justify-content: center;">
                                        <a class="primary__btn slider__btn" href="tel:+1 (855) 581-5811">
                                            <i class="fas fa-phone" style="margin-right: 8px;"></i>
                                            Enquire Now
                                        </a>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div class="swiper__nav--btn swiper-button-next">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class=" -chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                    <div class="swiper__nav--btn swiper-button-prev">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class=" -chevron-left">
                            <polyline points="15 18 9 12 15 6"></polyline>
                        </svg>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-light py-4">
            <div class="container">
                <div class="scrolling-wrapper">
                    <div class="scrolling-track d-flex align-items-center">
                        <!-- Brand Logos 1 to 16 -->
                        @for ($i = 1; $i <= 25; $i++)
                            <div class="brand-item">
                                <img src="/frontend/my_img/brand/{{ $i }}.webp" class="brand-logo"
                                    alt="Brand {{ $i }}">
                            </div>
                        @endfor

                        <!-- Duplicate for smooth scrolling -->
                        @for ($i = 1; $i <= 25; $i++)
                            <div class="brand-item">
                                <img src="/frontend/my_img/brand/{{ $i }}.webp" class="brand-logo"
                                    alt="Brand {{ $i }}">
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </section>

        </br>
        </br>

        <!-- Start product section -->
        <section class="product__section section--padding  pt-0">
            <div class="container">
                <div class="section__heading section__heading--flex border-bottom mb-30 ">
                    <h2 class="section__heading--maintitle">Popular <span>Products</span></h2>

                    <ul class="nav tab__btn--wrapper justify-content-end" role="tablist" style="margin-top: 10px;">
                        <li class="tab__btn--item" role="presentation">
                            <button class="tab__btn--link active" data-bs-toggle="tab" data-bs-target="#bestseller"
                                type="button" role="tab" aria-selected="true">Best Seller</button>
                        </li>
                        <li class="tab__btn--item" role="presentation">
                            <button class="tab__btn--link" data-bs-toggle="tab" data-bs-target="#new" type="button"
                                role="tab" aria-selected="false">New Arrivals</button>
                        </li>
                    </ul>
                </div>

                <div class="product__section--inner">
                    <div class="row row-md-reverse">

                        <div class="col-lg-12">
                            <div class="tab-content" id="nav-tabContent">
                                <div id="bestseller" class="tab-pane fade show active" role="tabpanel">
                                    <div class="product__wrapper">
                                        <div class="row mb--n30">
                                            <div class="col-lg-3 col-md-4 col-sm-6 col-6 custom-col mb-30">
                                                <article class="product__card">
                                                    <div class="product__card--thumbnail">
                                                        <a class="product__card--thumbnail__link display-block"
                                                            href="/transmission-parts/axle-shaft">
                                                            <img src="/frontend/my_img/top/axle-shaft.webp"
                                                                alt="product-img">
                                                        </a>
                                                    </div>
                                                    <div class="product__card--content">
                                                        <h3 class="product__card--title" style="text-align: center"><a
                                                                href="/transmission-parts/axle-shaft">Axle Shaft</a></h3>
                                                        <div class="mt-3"
                                                            style="display: flex; justify-content: center;">
                                                            <a class="primary__btn slider__btn"
                                                                href="tel:+1 (855) 581-5811">
                                                                <i class="fas fa-phone" style="margin-right: 8px;"></i>
                                                                Enquire Now
                                                            </a>
                                                        </div>
                                                    </div>
                                                </article>
                                            </div>
                                            <div class="col-lg-3 col-md-4 col-sm-6 col-6 custom-col mb-30">
                                                <article class="product__card">
                                                    <div class="product__card--thumbnail">
                                                        <a class="product__card--thumbnail__link display-block"
                                                            href="/suspension-parts/ac-compressor">
                                                            <img src="/frontend/my_img/top/ac_compressor.webp"
                                                                alt="product-img">
                                                        </a>
                                                    </div>
                                                    <div class="product__card--content">
                                                        <h3 class="product__card--title" style="text-align: center"><a
                                                                href="/suspension-parts/ac-compressor">AC Compressor</a>
                                                        </h3>
                                                        <div class="mt-3"
                                                            style="display: flex; justify-content: center;">
                                                            <a class="primary__btn slider__btn"
                                                                href="tel:+1 (855) 581-5811">
                                                                <i class="fas fa-phone" style="margin-right: 8px;"></i>
                                                                Enquire Now
                                                            </a>
                                                        </div>
                                                    </div>
                                                </article>
                                            </div>
                                            <div class="col-lg-3 col-md-4 col-sm-6 col-6 custom-col mb-30">
                                                <article class="product__card">
                                                    <div class="product__card--thumbnail">
                                                        <a class="product__card--thumbnail__link display-block"
                                                            href="/electrical-parts/starter">
                                                            <img src="/frontend/my_img/top/starter.webp"
                                                                alt="product-img">
                                                        </a>

                                                    </div>
                                                    <div class="product__card--content">

                                                        <h3 class="product__card--title" style="text-align: center"><a
                                                                href="/electrical-parts/starter">Car Starter</a></h3>
                                                        <div class="mt-3"
                                                            style="display: flex; justify-content: center;">
                                                            <a class="primary__btn slider__btn"
                                                                href="tel:+1 (855) 581-5811">
                                                                <i class="fas fa-phone" style="margin-right: 8px;"></i>
                                                                Enquire Now
                                                            </a>
                                                        </div>
                                                    </div>
                                                </article>
                                            </div>
                                            <div class="col-lg-3 col-md-4 col-sm-6 col-6 custom-col mb-30">
                                                <article class="product__card">
                                                    <div class="product__card--thumbnail">
                                                        <a class="product__card--thumbnail__link display-block"
                                                            href="/engine-parts/intake-manifold">
                                                            <img src="/frontend/my_img/top/intake_manifold.webp"
                                                                alt="product-img">

                                                        </a>

                                                    </div>
                                                    <div class="product__card--content">

                                                        <h3 class="product__card--title" style="text-align: center"><a
                                                                href="/engine-parts/intake-manifold">Intake Manifold</a>
                                                        </h3>
                                                        <div class="mt-3"
                                                            style="display: flex; justify-content: center;">
                                                            <a class="primary__btn slider__btn"
                                                                href="tel:+1 (855) 581-5811">
                                                                <i class="fas fa-phone" style="margin-right: 8px;"></i>
                                                                Enquire Now
                                                            </a>
                                                        </div>
                                                    </div>
                                                </article>
                                            </div>
                                            <div class="col-lg-3 col-md-4 col-sm-6 col-6 custom-col mb-30">
                                                <article class="product__card">
                                                    <div class="product__card--thumbnail">
                                                        <a class="product__card--thumbnail__link display-block"
                                                            href="/electrical-parts/abs-unit">
                                                            <img src="/frontend/my_img/top/abs.webp" alt="product-img">

                                                        </a>

                                                    </div>
                                                    <div class="product__card--content">

                                                        <h3 class="product__card--title" style="text-align: center"><a
                                                                href="/electrical-parts/abs-unit">ABS Unit</a></h3>
                                                        <div class="mt-3"
                                                            style="display: flex; justify-content: center;">
                                                            <a class="primary__btn slider__btn"
                                                                href="tel:+1 (855) 581-5811">
                                                                <i class="fas fa-phone" style="margin-right: 8px;"></i>
                                                                Enquire Now
                                                            </a>
                                                        </div>
                                                    </div>
                                                </article>
                                            </div>
                                            <div class="col-lg-3 col-md-4 col-sm-6 col-6 custom-col mb-30">
                                                <article class="product__card">
                                                    <div class="product__card--thumbnail">
                                                        <a class="product__card--thumbnail__link display-block"
                                                            href="/engine-parts/catalytic-converter">
                                                            <img src="/frontend/my_img/top/catlic_convertor.webp"
                                                                alt="product-img">

                                                        </a>

                                                    </div>
                                                    <div class="product__card--content">

                                                        <h3 class="product__card--title" style="text-align: center"><a
                                                                href="/engine-parts/catalytic-converter">Catalytic
                                                                Converter</a></h3>
                                                        <div class="mt-3"
                                                            style="display: flex; justify-content: center;">
                                                            <a class="primary__btn slider__btn"
                                                                href="tel:+1 (855) 581-5811">
                                                                <i class="fas fa-phone" style="margin-right: 8px;"></i>
                                                                Enquire Now
                                                            </a>
                                                        </div>
                                                    </div>
                                                </article>
                                            </div>
                                            <div class="col-lg-3 col-md-4 col-sm-6 col-6 custom-col mb-30">
                                                <article class="product__card">
                                                    <div class="product__card--thumbnail">
                                                        <a class="product__card--thumbnail__link display-block"
                                                            href="/engine-parts/coolant-pump">
                                                            <img src="/frontend/my_img/top/collant_pump.webp"
                                                                alt="product-img">

                                                        </a>

                                                    </div>
                                                    <div class="product__card--content">

                                                        <h3 class="product__card--title" style="text-align: center"><a
                                                                href="/engine-parts/coolant-pump">Coolant Pump</a></h3>
                                                        <div class="mt-3"
                                                            style="display: flex; justify-content: center;">
                                                            <a class="primary__btn slider__btn"
                                                                href="tel:+1 (855) 581-5811">
                                                                <i class="fas fa-phone" style="margin-right: 8px;"></i>
                                                                Enquire Now
                                                            </a>
                                                        </div>
                                                    </div>
                                                </article>
                                            </div>
                                            <div class="col-lg-3 col-md-4 col-sm-6 col-6 custom-col mb-30">
                                                <article class="product__card">
                                                    <div class="product__card--thumbnail">
                                                        <a class="product__card--thumbnail__link display-block"
                                                            href="/suspension-parts/steering-column">
                                                            <img src="/frontend/my_img/top/steering_colum.webp"
                                                                alt="product-img">

                                                        </a>

                                                    </div>
                                                    <div class="product__card--content">

                                                        <h3 class="product__card--title" style="text-align: center"><a
                                                                href="/suspension-parts/steering-column">Steering
                                                                Column</a></h3>
                                                        <div class="mt-3"
                                                            style="display: flex; justify-content: center;">
                                                            <a class="primary__btn slider__btn"
                                                                href="tel:+1 (855) 581-5811">
                                                                <i class="fas fa-phone" style="margin-right: 8px;"></i>
                                                                Enquire Now
                                                            </a>
                                                        </div>
                                                    </div>
                                                </article>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="new" class="tab-pane fade" role="tabpanel">
                                    <div class="product__wrapper">
                                        <div class="row mb--n30">
                                            <div class="col-lg-3 col-md-4 col-sm-6 col-6 custom-col mb-30">
                                                <article class="product__card">
                                                    <div class="product__card--thumbnail">
                                                        <a class="product__card--thumbnail__link display-block"
                                                            href="/interior-parts/steering">
                                                            <img src="/frontend/my_img/top/steering.jpg"
                                                                alt="product-img">

                                                        </a>

                                                    </div>
                                                    <div class="product__card--content">

                                                        <h3 class="product__card--title" style="text-align: center"><a
                                                                href="/interior-parts/steering">Car Steering</a></h3>
                                                        <div class="mt-3"
                                                            style="display: flex; justify-content: center;">
                                                            <a class="primary__btn slider__btn"
                                                                href="tel:+1 (855) 581-5811">
                                                                <i class="fas fa-phone" style="margin-right: 8px;"></i>
                                                                Enquire Now
                                                            </a>
                                                        </div>
                                                    </div>
                                                </article>
                                            </div>
                                            <div class="col-lg-3 col-md-4 col-sm-6 col-6 custom-col mb-30">
                                                <article class="product__card">
                                                    <div class="product__card--thumbnail">
                                                        <a class="product__card--thumbnail__link display-block"
                                                            href="/suspension-parts/rack-pinion">
                                                            <img src="/frontend/my_img/top/rack.jpg" alt="product-img">

                                                        </a>

                                                    </div>
                                                    <div class="product__card--content">

                                                        <h3 class="product__card--title" style="text-align: center"><a
                                                                href="/suspension-parts/rack-pinion">Rack & Pinion</a></h3>
                                                        <div class="mt-3"
                                                            style="display: flex; justify-content: center;">
                                                            <a class="primary__btn slider__btn"
                                                                href="tel:+1 (855) 581-5811">
                                                                <i class="fas fa-phone" style="margin-right: 8px;"></i>
                                                                Enquire Now
                                                            </a>
                                                        </div>
                                                    </div>
                                                </article>
                                            </div>
                                            <div class="col-lg-3 col-md-4 col-sm-6 col-6 custom-col mb-30">
                                                <article class="product__card">
                                                    <div class="product__card--thumbnail">
                                                        <a class="product__card--thumbnail__link display-block"
                                                            href="/exterior-parts/doors">
                                                            <img src="/frontend/my_img/top/car_door.jpg"
                                                                alt="product-img">

                                                        </a>

                                                    </div>
                                                    <div class="product__card--content">

                                                        <h3 class="product__card--title" style="text-align: center"><a
                                                                href="/exterior-parts/doors">Car Door</a></h3>
                                                        <div class="mt-3"
                                                            style="display: flex; justify-content: center;">
                                                            <a class="primary__btn slider__btn"
                                                                href="tel:+1 (855) 581-5811">
                                                                <i class="fas fa-phone" style="margin-right: 8px;"></i>
                                                                Enquire Now
                                                            </a>
                                                        </div>
                                                    </div>
                                                </article>
                                            </div>
                                            <div class="col-lg-3 col-md-4 col-sm-6 col-6 custom-col mb-30">
                                                <article class="product__card">
                                                    <div class="product__card--thumbnail">
                                                        <a class="product__card--thumbnail__link display-block"
                                                            href="/electrical-parts/wiper-motor">
                                                            <img src="/frontend/my_img/top/wiper_motor.jpg"
                                                                alt="product-img">

                                                        </a>

                                                    </div>
                                                    <div class="product__card--content">

                                                        <h3 class="product__card--title" style="text-align: center"><a
                                                                href="/electrical-parts/wiper-motor">Wiper Motor</a></h3>
                                                        <div class="mt-3"
                                                            style="display: flex; justify-content: center;">
                                                            <a class="primary__btn slider__btn"
                                                                href="tel:+1 (855) 581-5811">
                                                                <i class="fas fa-phone" style="margin-right: 8px;"></i>
                                                                Enquire Now
                                                            </a>
                                                        </div>
                                                    </div>
                                                </article>
                                            </div>
                                            <div class="col-lg-3 col-md-4 col-sm-6 col-6 custom-col mb-30">
                                                <article class="product__card">
                                                    <div class="product__card--thumbnail">
                                                        <a class="product__card--thumbnail__link display-block"
                                                            href="/engine-parts/radiator">
                                                            <img src="/frontend/my_img/top/radiator.jpg"
                                                                alt="product-img">

                                                        </a>

                                                    </div>
                                                    <div class="product__card--content">

                                                        <h3 class="product__card--title" style="text-align: center"><a
                                                                href="/engine-parts/radiator">Radiator</a></h3>
                                                        <div class="mt-3"
                                                            style="display: flex; justify-content: center;">
                                                            <a class="primary__btn slider__btn"
                                                                href="tel:+1 (855) 581-5811">
                                                                <i class="fas fa-phone" style="margin-right: 8px;"></i>
                                                                Enquire Now
                                                            </a>
                                                        </div>
                                                    </div>
                                                </article>
                                            </div>
                                            <div class="col-lg-3 col-md-4 col-sm-6 col-6 custom-col mb-30">
                                                <article class="product__card">
                                                    <div class="product__card--thumbnail">
                                                        <a class="product__card--thumbnail__link display-block"
                                                            href="/engine-parts/throttle-body">
                                                            <img src="/frontend/my_img/top/throttle_body.jpg"
                                                                alt="product-img">

                                                        </a>

                                                    </div>
                                                    <div class="product__card--content">

                                                        <h3 class="product__card--title" style="text-align: center"><a
                                                                href="/engine-parts/throttle-body">Throttle Body</a></h3>
                                                        <div class="mt-3"
                                                            style="display: flex; justify-content: center;">
                                                            <a class="primary__btn slider__btn"
                                                                href="tel:+1 (855) 581-5811">
                                                                <i class="fas fa-phone" style="margin-right: 8px;"></i>
                                                                Enquire Now
                                                            </a>
                                                        </div>
                                                    </div>
                                                </article>
                                            </div>
                                            <div class="col-lg-3 col-md-4 col-sm-6 col-6 custom-col mb-30">
                                                <article class="product__card">
                                                    <div class="product__card--thumbnail">
                                                        <a class="product__card--thumbnail__link display-block"
                                                            href="/transmission-parts/subframe">
                                                            <img src="/frontend/my_img/top/subframe.jpg"
                                                                alt="product-img">

                                                        </a>

                                                    </div>
                                                    <div class="product__card--content">

                                                        <h3 class="product__card--title" style="text-align: center"><a
                                                                href="/transmission-parts/subframe">Subframe</a></h3>
                                                        <div class="mt-3"
                                                            style="display: flex; justify-content: center;">
                                                            <a class="primary__btn slider__btn"
                                                                href="tel:+1 (855) 581-5811">
                                                                <i class="fas fa-phone" style="margin-right: 8px;"></i>
                                                                Enquire Now
                                                            </a>
                                                        </div>
                                                    </div>
                                                </article>
                                            </div>
                                            <div class="col-lg-3 col-md-4 col-sm-6 col-6 custom-col mb-30">
                                                <article class="product__card">
                                                    <div class="product__card--thumbnail">
                                                        <a class="product__card--thumbnail__link display-block"
                                                            href="/exterior-parts/fenders">
                                                            <img src="/frontend/my_img/top/fender.jpg" alt="product-img">

                                                        </a>

                                                    </div>
                                                    <div class="product__card--content">

                                                        <h3 class="product__card--title" style="text-align: center"><a
                                                                href="/exterior-parts/fenders">Fender</a></h3>
                                                        <div class="mt-3"
                                                            style="display: flex; justify-content: center;">
                                                            <a class="primary__btn slider__btn"
                                                                href="tel:+1 (855) 581-5811">
                                                                <i class="fas fa-phone" style="margin-right: 8px;"></i>
                                                                Enquire Now
                                                            </a>
                                                        </div>
                                                    </div>
                                                </article>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End product section -->

        <!-- Start product section -->
        <section class="product__section section--padding pt-0">
            <div class="container">
                <div class="section__heading section__heading--flex border-bottom d-flex mb-30">
                    <h2 class="section__heading--maintitle">Top Sale <span>Products</span></h2>
                </div>
                <div class="product__section--inner">
                    <div class="row">
                        <div class="col-lg-9 col-md-8">
                            <div class="product__wrapper">
                                <div class="row">
                                    <div class="col-lg-4 col-md-6 col-sm-6 col-6 custom-col mb-30">
                                        <article class="product__card">
                                            <div class="product__card--thumbnail">
                                                <a class="product__card--thumbnail__link display-block"
                                                    href="/interior-parts/center-console">
                                                    <img class="/center-console"
                                                        src="/frontend/my_img/top/center_console.webp" alt="product-img">
                                                </a>
                                            </div>
                                            <div class="product__card--content">

                                                <h3 class="product__card--title" style="text-align: center"><a
                                                        href="/interior-parts/center-console">Center Console </a></h3>
                                                <div class="mt-5" style="display: flex; justify-content: center;">
                                                    <a class="primary__btn slider__btn" href="tel:+1 (855) 581-5811">
                                                        <i class="fas fa-phone" style="margin-right: 8px;"></i>
                                                        Enquire Now
                                                    </a>
                                                </div>

                                            </div>
                                        </article>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-6 col-6 custom-col mb-30">
                                        <article class="product__card">
                                            <div class="product__card--thumbnail">
                                                <a class="product__card--thumbnail__link display-block"
                                                    href="/electrical-parts/tail-light">
                                                    <img class="/tail_light" src="/frontend/my_img/top/tail_light.webp"
                                                        alt="product-img">

                                                </a>

                                            </div>
                                            <div class="product__card--content">

                                                <h3 class="product__card--title" style="text-align: center"><a
                                                        href="/electrical-parts/tail-light">Tail Light</a></h3>
                                                <div class="mt-5" style="display: flex; justify-content: center;">
                                                    <a class="primary__btn slider__btn" href="tel:+1 (855) 581-5811">
                                                        <i class="fas fa-phone" style="margin-right: 8px;"></i>
                                                        Enquire Now
                                                    </a>
                                                </div>

                                            </div>
                                        </article>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-6 col-6 custom-col mb-30">
                                        <article class="product__card">
                                            <div class="product__card--thumbnail">
                                                <a class="product__card--thumbnail__link display-block"
                                                    href="/interior-parts/sun-visor">
                                                    <img class="/interior-parts/sun-visor"
                                                        src="/frontend/my_img/top/sun_visor.jpg" alt="product-img">
                                                </a>

                                            </div>
                                            <div class="product__card--content">

                                                <h3 class="product__card--title" style="text-align: center"><a
                                                        href="/interior-parts/sun-visor">Sun Visor</a></h3>
                                                <div class="mt-5" style="display: flex; justify-content: center;">
                                                    <a class="primary__btn slider__btn" href="tel:+1 (855) 581-5811">
                                                        <i class="fas fa-phone" style="margin-right: 8px;"></i>
                                                        Enquire Now
                                                    </a>
                                                </div>

                                            </div>
                                        </article>
                                    </div>


                                    <div class="col-lg-4 col-md-6 col-sm-6 col-6 custom-col mb-30 d-block d-lg-none">
                                        <article class="product__card">
                                            <div class="product__card--thumbnail">
                                                <a class="product__card--thumbnail__link display-block"
                                                    href="/vacuum_pump">
                                                    <img class="/vacuum_pump" src="/frontend/my_img/vacuum_pump.webp"
                                                        alt="product-img">
                                                </a>
                                            </div>
                                            <div class="product__card--content">
                                                <h3 class="product__card--title" style="text-align: center">
                                                    <a href="/vacuum_pump">Vacuum Pump</a>
                                                </h3>
                                                </br>
                                                <div style="display: flex; justify-content: center;">
                                                    <a class="primary__btn slider__btn" href="tel:+1 (855) 581-5811">
                                                        <i class="fas fa-phone" style="margin-right: 8px;"></i>
                                                        Enquire Now
                                                    </a>
                                                </div>
                                            </div>
                                        </article>
                                    </div>



                                </div>
                                <div class="row  mb--n30">
                                    <div class="col-lg-6 col-md-6 mb-30">
                                        <div class="banner__items position__relative">
                                            <a class="banner__thumbnail display-block" href="tel:+1 (855) 581-5811"><img
                                                    class="banner__thumbnail--img banner__max--height"
                                                    src="/frontend/assets/img/banner/banner5.webp" alt="banner-img">
                                                <div class="banner__content style__right">
                                                    <span class="banner__content--subtitle text-white">Engine Items
                                                        For</span>
                                                    <h2 class="banner__content--title"><span
                                                            class="banner__content--title__inner">PREMIUM</span> CLASS
                                                    </h2>

                                                    <a href="tel:+1 (855) 581-5811"
                                                        style="
                                                            display: flex;
                                                            align-items: center;
                                                            justify-content: center;
                                                            background-color: #ff4e21;
                                                            color: white;
                                                            padding: 5px 15px;
                                                            border-radius: 25px;
                                                            text-decoration: none;
                                                            font-weight: bold;
                                                            margin-left: auto;
                                                        ">
                                                        <i class="fas fa-phone" style="margin-right: 8px;"></i>
                                                        Enquire Now
                                                    </a>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 mb-30">
                                        <div class="banner__items position__relative">
                                            <a class="banner__thumbnail display-block" href="tel:+1 (855) 581-5811"><img
                                                    class="banner__thumbnail--img banner__max--height"
                                                    src="/frontend/assets/img/banner/banner6.webp" alt="banner-img">
                                                <div class="banner__content style__right">
                                                    <span class="banner__badge--style2">New</span>
                                                    <h2 class="banner__content--title"> Premium Car light</h2>

                                                    <a href="tel:+1 (855) 581-5811"
                                                        style="
                                                                display: flex;
                                                                align-items: center;
                                                                justify-content: center;
                                                                background-color: #ff4e21;
                                                                color: white;
                                                                padding: 5px 15px;
                                                                border-radius: 25px;
                                                                text-decoration: none;
                                                                font-weight: bold;
                                                                margin-left: auto;
                                                            ">
                                                        <i class="fas fa-phone" style="margin-right: 8px;"></i>
                                                        Enquire Now
                                                    </a>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4">
                            <div class="banner__sidebar position__relative">
                                <a class="banner__thumbnail display-block" href="tel:+1 (855) 581-5811"><img
                                        class="banner__thumbnail--img" src="/frontend/assets/img/banner/image4.webp"
                                        alt="banner-img">
                                    <div class="banner__content style__top">
                                        <span class="banner__content--subtitle text__secondary">New arrivals</span>
                                        <h2 class="banner__content--title" style="font-size: 3.5rem; line-height: 4rem;">
                                            Best <br> <span class="banner__content--title__inner">Car</span> Exhust</h2>

                                        <a href="tel:+1 (855) 581-5811"
                                            style="
                                                    display: flex;
                                                    align-items: center;
                                                    justify-content: center;
                                                    background-color: #ff4e21;
                                                    color: white;
                                                    padding: 5px 15px;
                                                    border-radius: 25px;
                                                    text-decoration: none;
                                                    font-weight: bold;
                                                    margin-left: auto;
                                                ">
                                            <i class="fas fa-phone" style="margin-right: 8px;"></i>
                                            Get In Touch
                                        </a>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End product section -->


        <section class="faq__section section--padding pt-0">
            <div class="container">
                <div class="faq__section--inner">
                    <div class="face__step one " id="accordionExample">
                        <div class="section__heading border-bottom mb-30 ">
                            <h2 class="section__heading--maintitle-text" style="margin-left: 35px !important;"> Frequently
                                Asked Questions</h2>
                        </div>


                        <div class="row">
                            <div class="col-lg-6">
                                <div class="accordion__container">
                                    <div class="accordion__items">
                                        <h3 class="accordion__items--title">
                                            <button class="faq__accordion--btn accordion__items--button">What types of car
                                                parts do you offer?
                                                <svg class="accordion__items--button__icon"
                                                    xmlns="http://www.w3.org/2000/svg" width="20.355" height="13.394"
                                                    viewBox="0 0 512 512">
                                                    <path
                                                        d="M98 190.06l139.78 163.12a24 24 0 0036.44 0L414 190.06c13.34-15.57 2.28-39.62-18.22-39.62h-279.6c-20.5 0-31.56 24.05-18.18 39.62z"
                                                        fill="currentColor" />
                                                </svg>
                                            </button>
                                        </h3>
                                        <div class="accordion__items--body">
                                            <p class="accordion__items--body__desc">We offer a wide range of premium car
                                                parts including engine components, transmission parts, suspension systems,
                                                braking parts, and accessories for all makes and models of cars and
                                                SUVs.</p>
                                        </div>
                                    </div>
                                    <div class="accordion__items">
                                        <h3 class="accordion__items--title">
                                            <button class="faq__accordion--btn accordion__items--button">How can I be sure
                                                the parts will fit my vehicle?
                                                <svg class="accordion__items--button__icon"
                                                    xmlns="http://www.w3.org/2000/svg" width="20.355" height="13.394"
                                                    viewBox="0 0 512 512">
                                                    <path
                                                        d="M98 190.06l139.78 163.12a24 24 0 0036.44 0L414 190.06c13.34-15.57 2.28-39.62-18.22-39.62h-279.6c-20.5 0-31.56 24.05-18.18 39.62z"
                                                        fill="currentColor" />
                                                </svg>
                                            </button>
                                        </h3>
                                        <div class="accordion__items--body">
                                            <p class="accordion__items--body__desc">You can enter your vehicle’s make,
                                                model, and year on our website to find compatible parts. If you’re unsure,
                                                our customer service team is always available to help verify fitment.</p>
                                        </div>
                                    </div>
                                    <div class="accordion__items">
                                        <h3 class="accordion__items--title">
                                            <button class="faq__accordion--btn accordion__items--button">What is your
                                                shipping policy?
                                                <svg class="accordion__items--button__icon"
                                                    xmlns="http://www.w3.org/2000/svg" width="20.355" height="13.394"
                                                    viewBox="0 0 512 512">
                                                    <path
                                                        d="M98 190.06l139.78 163.12a24 24 0 0036.44 0L414 190.06c13.34-15.57 2.28-39.62-18.22-39.62h-279.6c-20.5 0-31.56 24.05-18.18 39.62z"
                                                        fill="currentColor" />
                                                </svg>
                                            </button>
                                        </h3>
                                        <div class="accordion__items--body">
                                            <p class="accordion__items--body__desc">We offer fast and reliable shipping
                                                across the country. Shipping costs and estimated delivery times are provided
                                                at checkout. We work with trusted carriers to ensure your parts arrive
                                                safely.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="accordion__container">
                                    <div class="accordion__items">
                                        <h3 class="accordion__items--title">
                                            <button class="faq__accordion--btn accordion__items--button"> Can I return a
                                                part if it doesn’t fit or is defective?
                                                <svg class="accordion__items--button__icon"
                                                    xmlns="http://www.w3.org/2000/svg" width="20.355" height="13.394"
                                                    viewBox="0 0 512 512">
                                                    <path
                                                        d="M98 190.06l139.78 163.12a24 24 0 0036.44 0L414 190.06c13.34-15.57 2.28-39.62-18.22-39.62h-279.6c-20.5 0-31.56 24.05-18.18 39.62z"
                                                        fill="currentColor" />
                                                </svg>
                                            </button>
                                        </h3>
                                        <div class="accordion__items--body">
                                            <p class="accordion__items--body__desc">Yes! We have a 15-day return policy
                                                for unused parts in their original packaging. Certain items like electrical
                                                components or special orders may not be returnable. Please contact us to
                                                initiate a return.</p>
                                        </div>
                                    </div>
                                    <div class="accordion__items">
                                        <h3 class="accordion__items--title">
                                            <button class="faq__accordion--btn accordion__items--button">How do I track my
                                                order?
                                                <svg class="accordion__items--button__icon"
                                                    xmlns="http://www.w3.org/2000/svg" width="20.355" height="13.394"
                                                    viewBox="0 0 512 512">
                                                    <path
                                                        d="M98 190.06l139.78 163.12a24 24 0 0036.44 0L414 190.06c13.34-15.57 2.28-39.62-18.22-39.62h-279.6c-20.5 0-31.56 24.05-18.18 39.62z"
                                                        fill="currentColor" />
                                                </svg>
                                            </button>
                                        </h3>
                                        <div class="accordion__items--body">
                                            <p class="accordion__items--body__desc">Once your order ships, you will
                                                receive a tracking number via email. You can use this number on the
                                                carrier’s website to track your package in real time.</p>
                                        </div>
                                    </div>
                                    <div class="accordion__items">
                                        <h3 class="accordion__items--title">
                                            <button class="faq__accordion--btn accordion__items--button"> Do you offer any
                                                warranty on your products?
                                                <svg class="accordion__items--button__icon"
                                                    xmlns="http://www.w3.org/2000/svg" width="20.355" height="13.394"
                                                    viewBox="0 0 512 512">
                                                    <path
                                                        d="M98 190.06l139.78 163.12a24 24 0 0036.44 0L414 190.06c13.34-15.57 2.28-39.62-18.22-39.62h-279.6c-20.5 0-31.56 24.05-18.18 39.62z"
                                                        fill="currentColor" />
                                                </svg>
                                            </button>
                                        </h3>
                                        <div class="accordion__items--body">
                                            <p class="accordion__items--body__desc">Yes, many of our parts come with
                                                manufacturer warranties. Specific warranty details are provided on each
                                                product page. If you have any warranty-related questions, please reach out
                                                to our support team.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="blog__section section--padding pt-0">
            <div class="container">
                <div class="section__heading border-bottom mb-30 ">
                    <h2 class="section__heading--maintitle">Testimonials</h2>
                </div>
                <div class="blog__section--inner blog__swiper--activation swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="blog__card">
                                <div class="blog__card--content">
                                    <p>"I was really impressed with the fast shipping and the quality of
                                        the
                                        parts. The installation was straightforward, and everything fit perfectly. Customer
                                        support was super helpful when I had questions. I’ll definitely order from here
                                        again!"
                                    </p>
                                    <div class="blog__card--footer d-flex justify-content-between align-items-center">
                                        <span class="blog__card--meta">By: Stacy</span>
                                        <ul class="rating testimonial__rating d-flex justify-content-center">
                                            <li class="rating__list">
                                                <span class="rating__icon">
                                                    <svg width="14" height="13" viewBox="0 0 14 13"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                            </li>
                                            <li class="rating__list">
                                                <span class="rating__icon">
                                                    <svg width="14" height="13" viewBox="0 0 14 13"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                            </li>
                                            <li class="rating__list">
                                                <span class="rating__icon">
                                                    <svg width="14" height="13" viewBox="0 0 14 13"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                            </li>
                                            <li class="rating__list">
                                                <span class="rating__icon">
                                                    <svg width="14" height="13" viewBox="0 0 14 13"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                            </li>
                                            <li class="rating__list">
                                                <span class="rating__icon">
                                                    <svg width="14" height="13" viewBox="0 0 14 13"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="blog__card">
                                <div class="blog__card--content">

                                    <p>"Great experience from start to finish! The website was easy to
                                        navigate, and I found exactly what I needed. The parts arrived quickly and were in
                                        excellent condition. Highly recommend for anyone looking for reliable auto parts."
                                    </p>
                                    <div class="blog__card--footer d-flex justify-content-between align-items-center">
                                        <span class="blog__card--meta">By: Alex</span>
                                        <ul class="rating testimonial__rating d-flex justify-content-center">
                                            <li class="rating__list">
                                                <span class="rating__icon">
                                                    <svg width="14" height="13" viewBox="0 0 14 13"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                            </li>
                                            <li class="rating__list">
                                                <span class="rating__icon">
                                                    <svg width="14" height="13" viewBox="0 0 14 13"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                            </li>
                                            <li class="rating__list">
                                                <span class="rating__icon">
                                                    <svg width="14" height="13" viewBox="0 0 14 13"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                            </li>
                                            <li class="rating__list">
                                                <span class="rating__icon">
                                                    <svg width="14" height="13" viewBox="0 0 14 13"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                            </li>
                                            <li class="rating__list">
                                                <span class="rating__icon">
                                                    <svg width="14" height="13" viewBox="0 0 14 13"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="blog__card">
                                <div class="blog__card--content">

                                    <p>"I needed a replacement part urgently, and this store didn’t
                                        disappoint. The delivery was fast, and the part was genuine and high-quality. It
                                        saved me a lot of time and hassle. Customer service was responsive, friendly and
                                        available 24*7 for all your needs."</p>
                                    <div class="blog__card--footer d-flex justify-content-between align-items-center">
                                        <span class="blog__card--meta">By: Rasalina</span>
                                        <ul class="rating testimonial__rating d-flex justify-content-center">
                                            <li class="rating__list">
                                                <span class="rating__icon">
                                                    <svg width="14" height="13" viewBox="0 0 14 13"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                            </li>
                                            <li class="rating__list">
                                                <span class="rating__icon">
                                                    <svg width="14" height="13" viewBox="0 0 14 13"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                            </li>
                                            <li class="rating__list">
                                                <span class="rating__icon">
                                                    <svg width="14" height="13" viewBox="0 0 14 13"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                            </li>
                                            <li class="rating__list">
                                                <span class="rating__icon">
                                                    <svg width="14" height="13" viewBox="0 0 14 13"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                            </li>
                                            <li class="rating__list">
                                                <span class="rating__icon">
                                                    <svg width="14" height="13" viewBox="0 0 14 13"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="swiper__nav--btn swiper-button-next">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class=" -chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                    <div class="swiper__nav--btn swiper-button-prev">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class=" -chevron-left">
                            <polyline points="15 18 9 12 15 6"></polyline>
                        </svg>
                    </div>
                </div>
            </div>
        </section>

        <style>
            p,
            .p {
                margin-bottom: -0.5rem;
            }
        </style>


    </main>

    <!-- Start News letter popup -->
    <!-- <div class="newsletter__popup" data-animation="slideInUp">
            <div id="boxes" class="newsletter__popup--inner">
                <button class="newsletter__popup--close__btn" aria-label="Close">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 512 512">
                        <path fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="32" d="M368 368L144 144M368 144L144 368"></path>
                    </svg>
                </button>
                <div class="box newsletter__popup--box d-flex align-items-center">
                    <div class="newsletter__popup--thumbnail">
                        <img class="newsletter__popup--thumbnail__img display-block" src="/frontend/my_img/pop-up.webp"
                            alt="newsletter-popup-thumb">
                    </div>
                    <div class="newsletter__popup--box__right">
                        <h2 class="newsletter__popup--title">
                            <i class="fas fa-bolt" style="color: #ff6b00; margin-right: 5px;"></i>
                            Flash Deal Alert!
                            <i class="fas fa-bolt" style="color: #ff6b00; margin-left: 5px;"></i>
                        </h2>
                        <div class="newsletter__popup--content">
                            <label class="newsletter__popup--content--desc" style="color: black">
                                Don’t miss out! Get <strong>genuine auto parts at up to 35% OFF</strong> today. Limited stock available—act fast before it’s gone!
                            </label>
                            <div class="newsletter__popup--subscribe" id="frm_subscribe">
                                <div style="text-align: center; margin-top: 20px;">
                                    <a class="contact__form--btn primary__btn" href="tel:+1 (855) 581-5811">
                                        <span>
                                            <i class="fas fa-phone" style="margin-right: 8px;"></i>
                                            Call Now +1 (855) 581-5811
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    <!-- End News letter popup -->


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        $(document).ready(function() {

            // Global CSRF Token
            $.ajaxSetup({
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
                }
            });

            // Target ALL forms — not only one
            $(".leadForm").submit(function(e) {
                e.preventDefault();

                var form = $(this);
                form.find('div[id$="-error"]').empty();

                $.ajax({
                    type: "POST",
                    url: form.attr("action"),
                    data: new FormData(this),
                    contentType: false,
                    processData: false,
                    cache: false,

                    beforeSend: function() {
                        form.find("#started").attr("disabled", true).hide();
                        form.find("#form_loader").show();
                    },

                    success: function(data) {

                        // SUCCESS — redirect
                        if (data.status === "success") {

                            toastr.success(data.message);

                            form[0].reset();

                            // Reset reCAPTCHA for this form (if present)
                            if (typeof grecaptcha !== "undefined") {
                                grecaptcha.reset();
                            }

                            setTimeout(function() {
                                window.location.href = "/thankyou";
                            }, 800);

                        } else {

                            // FAILED — show error, no redirect
                            toastr.error(data.message);

                            if (typeof grecaptcha !== "undefined") {
                                grecaptcha.reset();
                            }
                        }
                    },

                    error: function(xhr) {

                        toastr.error("There are some errors. Please check your inputs.");

                        if (xhr.responseJSON && xhr.responseJSON.errors) {

                            $.each(xhr.responseJSON.errors, function(key, value) {
                                form.find("#" + key + "-error").html(value[0]);
                            });

                            // Scroll directly to this form's first error
                            var firstKey = Object.keys(xhr.responseJSON.errors)[0];
                            var target = form.find("#" + firstKey + "-error");

                            $("html, body").animate({
                                scrollTop: target.offset().top - 200
                            }, 500);
                        }

                        // reset captcha
                        if (typeof grecaptcha !== "undefined") {
                            grecaptcha.reset();
                        }
                    },

                    complete: function() {
                        form.find("#started").attr("disabled", false).show();
                        form.find("#form_loader").hide();
                    }
                });
            });
        });
    </script>

    {{-- 
    <script>
        let swiperInstance;

        function initSwiper() {
            if (window.innerWidth > 767) {
                swiperInstance = new Swiper('.product__section--inner', {
                    slidesPerView: 4,
                    spaceBetween: 30,
                    navigation: {
                        nextEl: '.swiper-button-next',
                        prevEl: '.swiper-button-prev',
                    },
                });
            } else {
                if (swiperInstance && swiperInstance.destroy) {
                    swiperInstance.destroy(true, true);
                }
            }
        }

        window.addEventListener('load', initSwiper);
        window.addEventListener('resize', initSwiper);

    </script> 
    --}}

    <script>
        let recaptchaLoaded = false;

        function loadRecaptcha() {
            if (recaptchaLoaded) return;

            recaptchaLoaded = true;

            const script = document.createElement('script');
            script.src = 'https://www.google.com/recaptcha/api.js';
            script.async = true;
            script.defer = true;
            document.body.appendChild(script);
        }

        // Load when user interacts with form
        document.addEventListener('focusin', function(e) {
            if (e.target.closest('#contactForm')) {
                loadRecaptcha();
            }
        });

        // Fallback: load before submit
        document.getElementById('contactForm')?.addEventListener('submit', function() {
            loadRecaptcha();
        });
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {

            const nextBtn = document.getElementById('nextBtn');
            const extraFields = document.getElementById('extraFields');
            const step1Fields = document.getElementById('step1Fields');
            const title = document.getElementById('dynamicTitle');
            const subtitle = document.getElementById('dynamicSubtitle');

            const step1Inputs = [
                'vehicle_year',
                'make',
                'vehicle_model',
                'part_name'
            ];

            function validateStep1() {
                let valid = true;

                step1Inputs.forEach(id => {
                    const field = document.getElementById(id);
                    const error = document.getElementById(`${id}-error`);

                    if (!field.value.trim()) {
                        valid = false;
                        error.innerText = 'This field is required';
                    } else {
                        error.innerText = '';
                    }
                });

                return valid;
            }

            function updateTitle() {
                const year = document.getElementById('vehicle_year').value;
                const make = document.getElementById('make').value;
                const model = document.getElementById('vehicle_model').value;
                const part = document.getElementById('part_name').value;

                /* BIG TEXT */
                title.innerHTML = `
                    <span class="stock-title">
                        ✔ We Have Your Part In Stock!
                    </span>
                `;

                /* SMALL TEXT */
                subtitle.innerHTML = `
                    <span class="vehicle-info">
                        ${year} ${make} ${model} ${part}
                    </span>
                `;
            }

            nextBtn.addEventListener('click', function() {
                if (!validateStep1()) return;

                updateTitle();

                step1Fields.style.display = 'none';
                extraFields.style.display = 'block';
            });

        });
    </script>

    <script>
        const yearSelect = document.getElementById('vehicle_year');

        for (let year = 2026; year >= 1952; year--) {
            const option = document.createElement('option');
            option.value = year;
            option.textContent = year;
            yearSelect.appendChild(option);
        }
    </script>

    <script>
        const carModels = {
            "Audi": ["A1", "A2", "A3", "A4", "A5", "A6", "A7", "A8", "Q2", "Q3", "Q4", "Q5", "Q6", "Q7", "Q8", "TT",
                "R8", "e-tron", "e-tron GT", "RS3", "RS4", "RS5", "RS6", "RS7", "RS Q3", "RS Q8", "50", "80", "90",
                "100", "200", "V8", "Coupe", "Cabriolet", "Other"
            ],

            "BMW": ["3 Series", "5 Series", "6 Series", "7 Series", "8 Series", "1 Series", "2 Series", "4 Series",
                "X1", "X2", "X3", "X4", "X5", "X6", "X7", "XM", "Z3", "Z4", "i3", "i4", "i5", "i7", "i8", "iX",
                "M2", "M3", "M4", "M5", "M6", "M8", "M X3", "M X5", "M X6", "M X7", "Other"
            ],

            "Honda": ["City", "Amaze", "Jazz", "Brio", "Civic", "Accord", "CR-Z", "WR-V", "BR-V", "HR-V", "CR-V",
                "Pilot", "Passport", "Ridgeline", "Odyssey"
            ],

            "Toyota": ["Etios", "Yaris", "Corolla", "Camry", "Avalon", "Prius", "Supra", "86", "GR86", "MR2", "Celica",
                "RAV4", "Urban Cruiser", "Corolla Cross", "Highlander", "Fortuner", "Land Cruiser", "Hilux",
                "Tacoma", "Tundra", "Other"
            ],

            "Tesla": ["Roadster", "Model S", "Model 3", "Model X", "Model Y", "Cybertruck", "Semi", "Other"],

            "Mercedes-Benz": ["A-Class", "B-Class", "CLA", "CLS", "C-Class", "E-Class", "S-Class", "G-Class", "GLA",
                "GLB", "GLC", "GLE", "GLS", "SL", "SLC", "AMG GT", "Other"
            ],

            "Ford": ["Figo", "Aspire", "Fiesta", "Focus", "Fusion", "Taurus", "Mustang", "GT", "EcoSport", "Escape",
                "Edge", "Explorer", "Expedition", "Bronco", "Endeavour", "Everest", "Ranger", "F-150", "Other"
            ],

            "Chevrolet": ["Spark", "Beat", "Cruze", "Malibu", "Impala", "Camaro", "Corvette", "Trax", "Equinox",
                "Blazer", "Traverse", "Tahoe", "Suburban", "Colorado", "Silverado", "Other"
            ],

            "Hyundai": ["Santro", "i10", "Grand i10", "i20", "Elantra", "Verna", "Accent", "Sonata", "Azera", "Aura",
                "Venue", "Creta", "Alcazar", "Kona", "Tucson", "Santa Fe", "Palisade", "Other"
            ],

            "Kia": ["Picanto", "Rio", "Forte", "Cerato", "Optima", "K5", "Stinger", "Carens", "Sonet", "Seltos",
                "Sportage", "Sorento", "Telluride", "Carnival", "Other"
            ],

            "Volkswagen": ["Polo", "Vento", "Virtus", "Jetta", "Passat", "Arteon", "Beetle", "Golf", "Scirocco",
                "Taigun", "Tiguan", "Touareg", "Atlas"
            ],

            "Porsche": ["356", "914", "924", "928", "944", "968", "Boxster", "Cayman", "718 Boxster", "718 Cayman",
                "911", "918 Spyder", "Carrera GT", "Panamera", "Macan", "Cayenne", "Taycan", "Other"
            ],

            "Acura": ["Legend", "CL", "EL", "CSX", "RSX", "Integra", "TSX", "ILX", "TL", "TLX", "RL", "RLX", "NSX",
                "ZDX", "RDX", "MDX", "SLX"
            ],

            "Alfa Romeo": ["4C", "8C Competizione", "Giulia", "Giulietta", "MiTo", "Stelvio", "Tonale", "Brera",
                "Spider", "159", "156", "164", "166", "GT", "GTV", "GTV6", "Alfasud", "Alfetta", "Montreal", "Other"
            ],

            "AMC": ["Ambassador", "AMX", "Concord", "Eagle", "Gremlin", "Hornet", "Javelin", "Marlin", "Matador",
                "Pacer", "Rambler", "Spirit", "Other"
            ],

            "Aston Martin": ["DB2", "DB4", "DB5", "DB6", "DB7", "DB9", "DB11", "DB12", "DBX", "Lagonda", "One-77",
                "Rapide", "V8 Vantage", "V12 Vantage", "Vanquish", "Virage", "Vulcan", "Valhalla", "Victor", "Other"
            ],

            "Avanti": ["Avanti II", "Convertible", "Coupe", "Sedan", "Other"],

            "Bentley": ["Arnage", "Azure", "Bentayga", "Brooklands", "Continental", "Continental Flying Spur",
                "Continental GT", "Continental GTC", "Flying Spur", "Mulsanne", "Turbo R", "Turbo S", "Other"
            ],

            "Buick": ["Century", "Electra", "Enclave", "Encore", "Envision", "LaCrosse", "LeSabre", "Lucerne",
                "Park Avenue", "Rainier", "Regal", "Rendezvous", "Riviera", "Roadmaster", "Skylark", "Verano",
                "Other"
            ],

            "Cadillac": ["ATS", "Brougham", "CT4", "CT5", "CT6", "CTS", "DeVille", "DTS", "Eldorado", "Escalade",
                "Fleetwood", "Seville", "SRX", "STS", "XLR", "XT4", "XT5", "XT6", "Other"
            ],

            "Chrysler": ["200", "300", "300C", "Aspen", "Cirrus", "Concorde", "Crossfire", "Fifth Avenue", "Imperial",
                "LeBaron", "New Yorker", "Pacifica", "PT Cruiser", "Sebring", "Town & Country", "Voyager", "Other"
            ],

            "Daewoo": ["Espero", "Kalos", "Lacetti", "Lanos", "Leganza", "Magnus", "Matiz", "Nubira", "Prince", "Racer",
                "Rezzo", "Tico", "Other"
            ],

            "Daihatsu": ["Applause", "Charade", "Copen", "Cuore", "Feroza", "Hijet", "Matera", "Mira", "Rocky",
                "Sirion", "Terios", "YRV", "Other"
            ],

            "Datsun": ["1200", "1600", "2000", "210", "240Z", "260Z", "280Z", "510", "620", "720", "B210", "Bluebird",
                "Pickup", "Other"
            ],

            "DeLorean": ["DMC-12", "Other"],

            "Dodge": ["Avenger", "Caliber", "Caravan", "Challenger", "Charger", "Dakota", "Dart", "Durango",
                "Grand Caravan", "Intrepid", "Journey", "Magnum", "Neon", "Nitro", "Ram", "Stealth", "Stratus",
                "Viper", "Other"
            ],

            "Eagle": ["Premier", "Summit", "Talon", "Vision", "Other"],

            "Ferrari": ["208", "246 Dino", "250", "275", "288 GTO", "308", "328", "348", "360", "365", "400", "412",
                "456", "458", "488", "512", "550", "575M", "599", "612 Scaglietti", "California", "Daytona", "Enzo",
                "F12berlinetta", "F355", "F40", "F50", "FF", "GTC4Lusso", "LaFerrari", "Mondial", "Portofino",
                "Roma", "SF90 Stradale", "Testarossa", "Other"
            ],

            "FIAT": ["124 Spider", "500", "500L", "500X", "Albea", "Brava", "Bravo", "Croma", "Doblo", "Ducato",
                "Fiorino", "Linea", "Multipla", "Palio", "Panda", "Punto", "Qubo", "Sedici", "Stilo", "Tipo", "Uno",
                "Other"
            ],

            "Fikser": ["Karma", "Other"],

            "Freightliner": ["Cascadia", "Century", "Columbia", "Coronado", "FLD", "M2", "Sprinter", "Other"],

            "GEO": ["Metro", "Prizm", "Storm", "Tracker", "Other"],

            "GMC": ["Acadia", "Canyon", "Envoy", "Jimmy", "Savana", "Sierra", "Sonoma", "Terrain", "TopKick", "Yukon",
                "Yukon XL", "Other"
            ],

            "HUMMER": ["H1", "H2", "H3", "EV", "Other"],

            "Infiniti": ["EX", "FX", "G", "I", "J", "M", "Q30", "Q40", "Q45", "Q50", "Q60", "Q70", "QX30", "QX4",
                "QX50", "QX56", "QX60", "QX70", "QX80", "Other"
            ],

            "Isuzu": ["Amigo", "Ascender", "Axiom", "Hombre", "i-280", "i-290", "i-350", "i-370", "Impulse", "Oasis",
                "Rodeo", "Stylus", "Trooper", "VehiCROSS", "Other"
            ],

            "Jeep": ["Cherokee", "Comanche", "Commander", "Compass", "Grand Cherokee", "Gladiator", "Liberty",
                "Patriot", "Renegade", "Scrambler", "Wagoneer", "Wrangler", "Other"
            ],

            "Jaguar": ["E-Type", "F-Pace", "F-Type", "I-Pace", "Mark 2", "S-Type", "XE", "XF", "XJ", "XJR", "XK", "XK8",
                "XKR", "Other"
            ],

            "Lamborghini": ["Aventador", "Countach", "Diablo", "Gallardo", "Huracan", "LM002", "Murcielago", "Reventon",
                "Sian", "Urus", "Other"
            ],

            "Lancia": ["Beta", "Delta", "Dedra", "Flavia", "Fulvia", "Gamma", "Kappa", "Lybra", "Musa", "Stratos",
                "Thema", "Ypsilon", "Other"
            ],

            "Land Rover": ["Defender", "Discovery", "Discovery Sport", "Freelander", "Range Rover",
                "Range Rover Evoque", "Range Rover Sport", "Range Rover Velar", "Other"
            ],

            "Lexus": ["CT", "ES", "GS", "GX", "HS", "IS", "LC", "LS", "LX", "NX", "RC", "RX", "SC", "UX", "Other"],

            "Lincoln": ["Aviator", "Continental", "Corsair", "Mark LT", "MKC", "MKS", "MKT", "MKX", "MKZ", "Navigator",
                "Town Car", "Zephyr", "Other"
            ],

            "Lotus": ["Elan", "Elise", "Esprit", "Evora", "Europa", "Exige", "M100", "Type 62", "Type 75", "Type 79",
                "Other"
            ],

            "Maserati": ["222", "3200 GT", "Biturbo", "Coupe", "Ghibli", "GranTurismo", "GranSport", "MC12",
                "Quattroporte", "Shamal", "Spyder", "430", "Other"
            ],

            "Mazda": ["3", "5", "6", "323", "626", "929", "B-Series", "CX-3", "CX-30", "CX-5", "CX-7", "CX-9", "MX-3",
                "MX-5 Miata", "MX-6", "RX-7", "RX-8", "Tribute", "Other"
            ],

            "Maybach": ["57", "62", "57S", "62S", "Landaulet", "Exelero", "Other"],

            "McLaren": ["12C", "13S", "540C", "570S", "600LT", "620R", "650S", "675LT", "720S", "765LT", "F1", "P1",
                "Senna", "Speedtail", "Other"
            ],

            "Mini": ["Clubman", "Cooper", "Cooper S", "Countryman", "Paceman", "Convertible", "John Cooper Works",
                "Other"
            ],

            "Mercury": ["Capri", "Cougar", "Grand Marquis", "Mariner", "Marauder", "Milan", "Monterey", "Mountaineer",
                "Mystique", "Sable", "Tracer", "Topaz", "Villager", "Other"
            ],

            "Mitsubishi": ["3000GT", "Eclipse", "Endeavor", "Galant", "i-MiEV", "Lancer", "Lancer Evolution", "L200",
                "Mirage", "Montero", "Outlander", "Outlander Sport", "Pajero", "Raider", "Sigma", "Starion", "Other"
            ],

            "Oldsmobile": ["Achieva", "Alero", "Aurora", "Bravada", "Cutlass", "Cutlass Ciera", "Cutlass Supreme",
                "Intrigue", "Ninety-Eight", "Silhouette", "Toronado", "Vista Cruiser", "Other"
            ],

            "Peugeot": ["104", "106", "107", "108", "205", "206", "207", "208", "3008", "305", "306", "307", "308",
                "309", "4007", "406", "407", "5008", "508", "605", "607", "806", "807", "RCZ", "Other"
            ],

            "Plymouth": ["Acclaim", "Barracuda", "Breeze", "Caravelle", "Champ", "Colt", "Duster", "Fury", "Horizon",
                "Laser", "Neon", "Prowler", "Reliant", "Sundance", "Voyager", "Other"
            ],

            "Pontiac": ["Aztek", "Bonneville", "Catalina", "Firebird", "Grand Am", "Grand Prix", "GTO", "Montana",
                "Phoenix", "Solstice", "Sunfire", "Tempest", "Torrent", "Vibe", "Trans Sport", "Ventura", "Other"
            ],

            "Renault": ["4", "5", "6", "8", "9", "10", "11", "12", "14", "15", "16", "17", "18", "19", "20", "21",
                "Clio", "Espace", "Fluence", "Kadjar", "Kangoo", "Laguna", "Megane", "Scenic", "Twingo", "Twizy",
                "Zoé", "Other"
            ],

            "Rolls-Royce": ["Corniche", "Cullinan", "Dawn", "Ghost", "Phantom", "Silver Cloud", "Silver Dawn",
                "Silver Seraph", "Silver Shadow", "Silver Spirit", "Wraith", "Other"
            ],

            "Saab": ["9-2X", "9-3", "9-4X", "9-5", "9-7X", "900", "9000", "Sonett", "Other"],

            "Saturn": ["Astra", "Aura", "Ion", "L-Series", "Outlook", "Relay", "S-Series", "Sky", "VUE", "Other"],

            "Scion": ["FR-S", "iA", "iM", "iQ", "tC", "xA", "xB", "xD", "Other"],

            "Smart": ["Fortwo", "Forfour", "Roadster", "Cabrio", "Other"],

            "SRT": ["Charger", "Challenger", "Viper", "Other"],

            "Sterling": ["825", "827", "Other"],

            "Subaru": ["BRZ", "Baja", "Crosstrek", "Forester", "Impreza", "Justy", "Legacy", "Loyale", "Outback", "SVX",
                "Tribeca", "WRX", "WRX STI", "Other"
            ],

            "Suzuki": ["Aerio", "Alto", "Baleno", "Celerio", "Grand Vitara", "Ignis", "Kizashi", "Samurai", "Sidekick",
                "Swift", "SX4", "Vitara", "XL7", "Other"
            ],

            "Triumph": ["Bonneville", "Cabriolet", "Daytona", "Dolomite", "Herald", "Spitfire", "Stag", "TR2", "TR3",
                "TR4", "TR5", "TR6", "TR7", "TR8", "Other"
            ],

            "Volvo": ["240", "244", "245", "260", "262", "340", "360", "440", "460", "480", "740", "760", "780", "850",
                "940", "960", "C30", "C70", "S40", "S60", "S70", "S80", "S90", "V40", "V50", "V60", "V70", "V90",
                "XC40", "XC60", "XC70", "XC90", "Other"
            ],

            "Yugo": ["GV", "GVX", "GVX Plus", "Koral", "Other"],
            // 👉 keep adding more here
        };

        document.getElementById('make').addEventListener('change', function() {
            const modelSelect = document.getElementById('vehicle_model');
            const make = this.value;

            modelSelect.innerHTML = '<option value="">Select Model</option>';
            modelSelect.disabled = true;

            if (carModels[make]) {
                carModels[make].forEach(model => {
                    const option = document.createElement('option');
                    option.value = model;
                    option.textContent = model;
                    modelSelect.appendChild(option);
                });
                modelSelect.disabled = false;
            }
        });
    </script>
@endsection
