@extends('layouts.frontend')
@section('title')
    Alternator | Spare Part Zone
@endsection
@section('robots')
    <meta name="robots" content="follow, noindex, max-snippet:-1, max-video-preview:-1, max-image-preview:large">
@endsection
@section('content')

    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
 
 <style>
    .header__menu--link {
    font-size: 15px !important;
    display: none;
    }
    
    @media (max-width: 767px) {
            .head-btn-shown {
                font-size: 18px !important;
            }
        }
        @media (max-width: 500px) {
            .head-btn-shown {
                font-size: 18px !important;
            }
        }
        @media (max-width: 500px) {
            .mobile-logo img {
                max-width: 45% !important;
                margin-left: -235px !important;
            }
        }
    @media (max-width: 768px) {
    .a-s {
        display: none;
    }
    }

    @media (max-width: 500px) {
    .a-s {
        display: none;
    }
    }

    form button {
        margin-top: 20px;
        background-color: #ff4e21;
        color: white;
        border: none;
        padding: 5px 20px;
        font-weight: bold;
        cursor: pointer;
        border-radius: 5px;
        width: 40%;
        text-align: center;
        border-radius: 50px;
        }
         .offcanvas__header--menu__open--btn {
        display: none !important;
        }

        @media (max-width: 767px) {
            .h-m {
                display: none !important;
            }
        }
        @media (min-width: 1025px) {
            .h-d {
                display: none !important;
            }
        }
        form input, form textarea {
        width: 100%;
        padding: 3px;
        margin-top: 0px;
        box-sizing: border-box;
        border-radius: 5px;
        border: 1px solid #ccc;
        resize: vertical;
        }
        /* Mobile screens only (up to 767px) */
            @media only screen and (max-width: 767px) {
                .form-row-label label {
                    font-size: 15px;
                    font-weight: 500;
                    color: #111827;
                    text-align: start;
                }
            }

        @media only screen and (min-width: 992px) {
        .about__content--subtitle {
            font-size: 2rem;
            line-height: 2.4rem;
        }
        }

        @media (max-width: 576px) {
            .primary__btn.slider__btn {
                font-size: 20px !important;
                padding: 2px 10px;
                min-width: 110px;
                white-space: nowrap;
                margin-top: 14px !important;
                 margin-bottom: 13px;
            }
        }
        /*  */

        .request-callback{
            display:none;
        }
       


        @media (max-width: 767px) {

        .shipping__inner {
            display: flex !important;
            flex-direction: column !important;
            gap: 10px;
        }

        .shipping__items {
            display: flex !important;
            flex-direction: row !important;
            align-items: center !important;
            flex-wrap: nowrap !important;
            width: 100%;
        }

        .shipping__icon {
            min-width: 40px !important;
            max-width: 40px !important;
            display: flex !important;
            align-items: center !important;
            justify-content: center !important;
            flex-shrink: 0 !important;
        }

        .shipping__icon img {
            width: 30px !important;
            height: auto !important;
        }

        .shipping__content {
            display: flex !important;
            flex-direction: column !important;
            justify-content: center !important;
            margin-left: 10px !important;
            flex: 1 !important;
        }

        .shipping__content--title,
        .shipping__content--desc {
            white-space: nowrap !important;
        }
        }


        @media only screen and (min-width: 768px) {
        .section--padding {
            padding-top: 4rem;
            padding-bottom: 6rem;
        }
        }
        @media only screen and (min-width: 1200px) {
        .slider__desc.style3 {
            font-size: 2rem;
            margin-bottom: 18px;
        }
        }

        .inline-input {
            width: 100%;
            padding: 10px 12px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 14px;
            box-sizing: border-box;
        }
        /* Style the select box */
        .inline-input {
            width: 100%;
            padding: 10px 12px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 14px;
            box-sizing: border-box;
            color: #7a6d6d; /* Default text color */
        }

        /* Style the placeholder option */
        .inline-input .placeholder {
            color: #999; /* Gray color */
        }

    
        @media (max-width: 768px) {
            .hero__slider--items__style3 {
                flex-direction: column;
                text-align: center;
                padding: 30px 30px;
            }
        }

        @media only screen and (min-width: 992px) {
        .primary__btn {
            font-size: 1.5rem;
            line-height: 4.2rem;
            height: 4.2rem;
            padding: 2px 2rem;
        }
        }
        
        p,
        .p {
            margin-bottom: -0.5rem;
        }

        
            .call-button {
            display: inline-block;
            background: #ff4e21;
            color: #fff;
            font-weight: 600;
            padding: 10px 16px;
            border-radius: 6px;
            text-decoration: none;
            cursor: pointer;
            transition: 0.3s;
            }

            a:hover {
                text-decoration: none;
                color: #000000;
            }

</style>

<style>

        /* Laptop screens */
        @media only screen and (min-width: 1024px) and (max-width: 1365px) {
            .slider__content.style3 {
                margin-left: 50px !important;
            }
        }

        /* Desktop screens */
        @media only screen and (min-width: 1366px) {
            .slider__content.style3 {
                margin-left: 50px !important;
            }
        }

            .hero__tags {
            margin-top: 25px;
            gap: 12px;              /* spacing between cards */
            max-width: 490px;
            }

            .hero__tag {
                background: rgba(255, 255, 255, 0.12);
                border: 1px solid rgba(255,255,255,0.2);
                color: #fff;
                padding: 14px 16px;
                border-radius: 10px;
                font-size: 18px;
                font-weight: 500;
                display: flex;
                align-items: center;
                gap: 10px;
            }

            .hero__tag img {
                width: 18px;
                height: 18px;
                flex-shrink: 0;
            }

            #step-1, #step-2 {
                transition: all 0.4s ease;
            }
            .custom-link {
            color: #ff4e21; /* Red text */
            border-bottom: 1px dotted red; /* Dotted border under text */
            text-decoration: none; /* Remove default underline */
            }

            /* Optional: hover effect */
            .custom-link:hover {
                color: #4285f4;
                border-bottom-color: #4285f4;
            }

            /* Laptop screens */
        @media only screen and (min-width: 1024px) and (max-width: 1365px) {
            .categories__card--style3 {
                width: 14%;
            }
        }

        /* Desktop screens */
        @media only screen and (min-width: 1366px) {
            .categories__card--style3 {
                width: 10%;
            }
        }
</style>

<style>
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
            box-shadow: 0 10px 30px rgba(0,0,0,0.06);
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
            box-shadow: 0 18px 40px rgba(255, 78, 33,0.18);
        }

        /* Icon */
        .icon-box {
            width: 70px;
            height: 70px;
            margin: 0 auto 20px;
            border-radius: 50%;
            background: rgba(255, 78, 33,0.1);
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

        .categories__card--link:hover {
            background-color: #fcfcfc;
            color: #fff;
        }
            
        /* ===============================
        Banner Form – Base (Mobile / Tablet)
        ================================ */
            .banner__form {
                background: #ffffff;
                padding: 14px 22px;
                border-radius: 14px;
                width: 100%;
                max-width: 550px !important;
                box-shadow: 0 10px 26px rgba(0,0,0,0.08);
                z-index: 10;
                position: relative;
                margin: 24px auto 0;
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
                    right: 60px; /* increase space from the right a bit */
                    top: 42%;    /* simpler centering */
                    transform: translateY(-50%);
                    max-width: 500px; /* slightly larger than before */
                    width: 90%;   /* ensures it scales a bit on smaller laptops */
                }
            }


            /* ===============================
            Desktop Screens (1366px+)
            ================================ */
            @media only screen and (min-width: 1366px) {
                .banner__form {
                    position: absolute;
                    right: 120px;
                    top: 42%;
                    transform: translateY(-50%);
                    max-width: 550px;
                }
            }


                    .form-row-label input,
                    .form-row-label select {
                        height: 38px;           /* smaller height */
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
                    margin-bottom: 6px;
                }

                .form-subtitle {
                    text-align: center;
                    font-size: 13px;
                    color: #6b7280;
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
                    box-shadow: 0 0 0 2px rgba(6,95,91,0.15);
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
                .primary__btn {
                    /* width: 100%; */
                    height: 46px;
                    background: #ff4e21;
                    color: #fff;
                    border-radius: 50px;
                    font-size: 25px;
                    font-weight: 600;
                    border: none;
                    padding: 2px 2rem;
                    cursor: pointer;
                    transition: background 0.3s ease;
                }


                .primary__btn:hover {
                    background: #050404;
                }

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
                        font-size: 50px;
                        line-height: 4.2rem;
                        color: #ffffff;
                    }
                }

                /* Desktop screens */
                @media only screen and (min-width: 1366px) {
                    .slider__maintitle.style3 {
                        font-size: 55px;
                        line-height: 6rem;
                        color: #ffffff;
                    }
                }

                @media only screen and (min-width: 992px) {
                    .slider__maintitle.style3 {
                        font-size: 5rem !important;
                        line-height: 5.5rem !important;
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
                    background: linear-gradient(
                        rgba(0,0,0,0.65),
                        rgba(0,0,0,0.85)
                    );
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
                        box-shadow: 0 15px 40px rgba(0,0,0,0.08);
                        transition: transform 0.3s ease, box-shadow 0.3s ease;
                    }

                    .call-card:hover {
                        transform: translateY(-6px);
                        box-shadow: 0 25px 55px rgba(0,0,0,0.12);
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

                  

                /* Phone icon pulse */
                .pulse-icon {
                    animation: pulse 1.6s infinite;
                }

                @keyframes pulse {
                    0% { transform: scale(1); }
                    50% { transform: scale(1.15); }
                    100% { transform: scale(1); }
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
                    height: 580px;
                }
            }

            /* Desktop screens */
            @media only screen and (min-width: 1366px) {
                .hero__slider--items__style3 {
                    height: 580px;
                }
            }


            .swiper-slide {
                position: relative;
            }

            .swiper-slide::before {
                content: "";
                position: absolute;
                inset: 0;
                background: rgba(0, 0, 0, 0.45); /* adjust darkness */
                z-index: 1;
            }

            /* keep slide content above overlay */
            .swiper-slide > * {
                position: relative;
                z-index: 2;
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
    .fixed-size-img {
        width: 500px;
        height: 500px;
        object-fit: cover;
    }
</style>

<style>
    /* .main-img{
        margin-left: 53px;
    } */
    /* Mobile */
    /* @media (max-width: 768px) {
        .main-img {
            margin-left: 33px;
        }
    } */
    /* @media (max-width: 480px) {
        .main-img {
            margin-left: 33px;
        }
    } */
    .section--padding {
    padding-top: 4rem;
    padding-bottom: 0rem;
    }
</style>

<style>
                    /* Wrapper */
        .call-btn-wrapper {
            width: 100%;
            display: flex;
            justify-content: center;
            margin: 20px 0;
            margin-left: 280px;
            margin-top: -17px;
        }

        /* Button */
        .call-btn-mobile {
            background-color: #ff4e21; /* red */
            color: #ffffff;
            font-size: 18px;
            font-weight: 600;
            padding: 10px 28px;
            border-radius: 50px;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            transition: all 0.3s ease;
        }

        /* Hover */
        .call-btn-mobile:hover {
            background-color: #000000;
            color: #f7ebeb;
        }

        /* ✅ MOBILE FIX */
        @media (max-width: 767px) {
            .call-btn-wrapper {
                margin-left: 0;        /* 🔥 reset */
                margin-top: 10px;
                justify-content: center;
                padding: 0 15px;
                bottom: 0px;    
            }

            .call-btn-mobile {
                width: 100%;
                max-width: 250px;
                justify-content: center;
                font-size: 21px;
                padding: 14px 20px;
                height:45px;
            }
        }

        

        @media (max-width: 576px) {
            h3, .h3 {
                font-size: 1.5rem !important;
                line-height: 3.4rem;
            }
        }

        @media (max-width: 500px) {
            h3, .h3 {
                font-size: 1.8rem !important;
                line-height: 4.4rem;
            }
            h2, .h2 {
                font-size: 1.7rem;
                line-height: 3.4rem !important;
            }
        }

        .footer__widget--title {
            line-height: 2.6rem;
            margin-bottom: 2rem;
            color: #ff4e21;
            font-size: 22px !important;
        }


</style>

<!-- Responsive Text Scaling -->
<style>
    @media (max-width: 768px) {
        h2 {
            font-size: 32px !important;
        }
        p {
            font-size: 15px !important;
        }
    }

    /* Mobile Only */
    @media (max-width: 767px) {
        .img-fluid {
            max-width: 86%;
            height: auto;
            margin-top:30px;
        }
    }
</style>

<style>
        /* HERO IMAGE FIX */
    .main-img {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100%;
    }

    .about__thumb--img {
        max-width: 100%;
        max-height: 400px !important;   /* controls visual size */
        width: auto;
        height: auto;
        object-fit: contain;
    }

    /* Better balance on large screens */
    @media (min-width: 992px) {
        .about__thumb--img {
            max-height: 400px !important;
            margin-top: -28px !important;
        }
    }

    /* Smaller screens */
    @media (max-width: 768px) {
        .about__thumb--img {
            max-height: 260px !important;
        }
    }

</style>

<Style>
    .call-btn {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    height: 46px;
    background: #ff4e21;
    color: #ffffff;

    padding: 7px 26px;
    border-radius: 50px;

    font-size: 25px;
    font-weight: 600;
    text-decoration: none;

    transition: all 0.3s ease;
    }

    
    .call-btn:hover {
        background: #4285f4;
        color: #ffffff;
        transform: translateY(-2px);
    }

    @media (max-width: 768px) {
    .call-btn {
        font-size: 20px;
        padding: 16px 30px;   /* optional, looks better with bigger text */
         margin-bottom: 20px;
    }

    }

</Style>
    
<main  style="font-family: 'Manrope', sans-serif;">

        <section class="hero__slider--section slider__section--bg3 p-0 m-0">

            <div class="hero__slider--inner noninteractive-slider swiper">
                <div class="hero__slider--wrapper swiper-wrapper">

                    <!-- Slider 1 -->
                    <div class="swiper-slide"
                        style="background: url('/frontend/my_img/used-parts/background.png') no-repeat center center / cover;">

                        <div class="container">
                            <div class="row align-items-center">

                                <!-- LEFT CONTENT -->
                                <div class="col-lg-6 col-md-6 col-12 order-2 order-md-1">
                                    <div class="slider__content style3 ">
                                       
                                        <h1 class="slider__maintitle style3 h2" style="color:#ffffff;">
                                            <span class="highlight">Search Our Massive</span> <br>
                                            Online Database for Alternator
                                        </h1>

                                        <p class="slider__desc style3 text-white">
                                            Call Our Parts Counter For A Quote
                                        </p>

                                        <!-- <a class="primary__btn slider__btn openPopup mb-10"
                                        href="tel:+18555815811">
                                            <i class="fa-solid fa-headset me-2"></i>
                                            +1 (855) 581-5811
                                        </a> -->

                                        <a class="call-btn slider__btn openPopup mb-10" href="tel:+18555815811">
                                            <i class="fa-solid fa-headset"></i>
                                            +1 (855) 581-5811
                                        </a>
                                    </div>
                                </div>

                                

                                <!-- RIGHT IMAGE -->
                                <div class="col-lg-6 col-md-6 col-12 text-center order-1 order-md-2">
                                    <div class="about__thumb--items main-img">
                                        <img class="about__thumb--img img-fluid"
                                            src="/frontend/my_img/used-parts/alternators.png"
                                            alt="Used Auto Parts">
                                    </div>
                                    </br>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </section>


        <section class="shipping__section section--padding">
            <div class="container">
                <div class="shipping__inner mb-0 style2 d-flex">
                    
                    <div class="shipping__items style2 d-flex align-items-center">
                        <div class="shipping__icon">  
                            <img src="/frontend/assets/img/other/shipping2.webp" alt="icon-img">
                        </div>
                        <div class="shipping__content">
                            <h2 class="shipping__content--title h3">Support 24/7</h2>
                            <p class="shipping__content--desc">Contact us 24 hours a day</p>
                        </div>
                    </div>
                    <div class="shipping__items style2 d-flex align-items-center">
                        <div class="shipping__icon">  
                            <img src="/frontend/assets/img/other/shipping1.webp" alt="icon-img">
                        </div>
                        <div class="shipping__content">
                            <h2 class="shipping__content--title h3">Free Shipping</h2>
                            <p class="shipping__content--desc">Free shipping over $100</p>
                        </div>
                    </div>
                    <div class="shipping__items style2 d-flex align-items-center">
                        <div class="shipping__icon">  
                            <img src="/frontend/assets/img/other/shipping3.webp" alt="icon-img">
                        </div>
                        <div class="shipping__content">
                            <h2 class="shipping__content--title h3">100% Money Back</h2>
                            <p class="shipping__content--desc">You have 15 days to Return</p>
                        </div>
                    </div>
                    <div class="shipping__items style2 d-flex align-items-center">
                        <div class="shipping__icon">  
                            <img src="/frontend/assets/img/other/shipping4.webp" alt="icon-img">
                        </div>
                        <div class="shipping__content">
                            <h2 class="shipping__content--title h3">Payment Secure</h2>
                            <p class="shipping__content--desc">We ensure secure payment</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <section style="background:#ffffff; padding-top:30px; padding-bottom-15px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <div style="
                        font-size:15px;
                        font-weight:600;
                        letter-spacing:2px;
                        text-transform:uppercase;
                        color:#f7232a;
                        margin-bottom:10px;
                        text-align:center;">
                       <b>High-Performance Alternators for Reliable Power Delivery</b>
                    </div>

                    <h2 style="
                        font-size:42px;
                        font-weight:700;
                        color:#111;
                        margin-bottom:20px;
                        text-align:center;">
                       Alternator
                    </h2>
                      
                    <p style="
                        margin:0 auto 50px;
                        font-size:16px;
                        line-height:1.8;
                        color:#666;">
                        At <b>Spare Part Zone</b>, we recognize that a dependable <b>Alternator</b> is essential for your vehicle’s electrical system. This unit converts mechanical energy from the engine into electrical power, keeping the battery charged and supplying consistent voltage to vital components such as lighting, infotainment, ignition, and onboard electronics.
                        </br>
                       Signs of a failing alternator can include dim or flickering headlights, battery warning lights on the dashboard, difficulty starting, electrical malfunctions, or unusual grinding or whining sounds from the engine bay. When these symptoms appear, timely replacement is critical to prevent unexpected breakdowns. Every alternator in our inventory undergoes thorough inspection for output performance, bearing condition, internal regulator operation, and overall build quality to ensure dependable and long-term service.
                        </br>
                        We offer premium-grade replacement alternators designed to deliver stable charging performance and optimal efficiency without exceeding your budget. Whether you’re handling a personal repair project, managing workshop jobs, or maintaining commercial vehicles, our components are built for exact fitment and consistent electrical output.
                        </br>
                        Browse our selection to locate the right alternator for your specific make and model. Confirm technical details, ensure compatibility, and benefit from prompt, secure shipping. Keeping your vehicle’s charging system in peak condition is simple and economical with Spare Part Zone.
                    </p>

                </div>
            </div>

            <div class="row" style="margin-top:10px;">

                <!-- CARD 1 -->
                <div class="col-md-6" style="margin-bottom:20px;">
                    <div style="
                        background:#e1dddd;
                        padding:35px 30px;
                        border-radius:12px;
                        text-align:center;
                        transition:0.35s ease;
                        height:100%;
                        box-shadow:0 5px 15px rgba(0,0,0,0.04);"
                        
                        onmouseover="this.style.transform='translateY(-6px)';this.style.boxShadow='0 15px 35px rgba(0,0,0,0.08)';this.style.background='#ffffff';"
                        onmouseout="this.style.transform='translateY(0px)';this.style.boxShadow='0 5px 15px rgba(0,0,0,0.04)';this.style.background='#e1dddd';">

                        <div style="
                            width:70px;
                            height:70px;
                            margin:0 auto 18px;
                            border-radius:50%;
                            background:#c80000;
                            display:flex;
                            align-items:center;
                            justify-content:center;
                            color:white;
                            font-size:28px;">
                            <i class="fas fa-cogs"></i>
                        </div>

                        <h5 style="font-weight:600; margin-bottom:12px; color:#111;">
                            Up to 1 Year Warranty
                        </h5>

                        <p style="font-size:14px; color:#666; line-height:1.7;">
                            All our parts come with up to a 1-year warranty from the date of purchase.
                            We proudly stand behind the quality and reliability of every part we sell.
                        </p>

                        <div style="margin-top:18px; font-size:18px; color:#888;">
                            <i class="fas fa-check-circle" style="margin:0 8px;"></i>
                            <i class="fas fa-tools" style="margin:0 8px;"></i>
                            <i class="fas fa-certificate" style="margin:0 8px;"></i>
                        </div>
                    </div>
                </div>

                <!-- CARD 2 -->
                <div class="col-md-6" style="margin-bottom:20px;">
                    <div style="
                        background:#e1dddd;
                        padding:35px 30px;
                        border-radius:12px;
                        text-align:center;
                        transition:0.35s ease;
                        height:100%;
                        box-shadow:0 5px 15px rgba(0,0,0,0.04);"

                        onmouseover="this.style.transform='translateY(-6px)';this.style.boxShadow='0 15px 35px rgba(0,0,0,0.08)';this.style.background='#ffffff';"
                        onmouseout="this.style.transform='translateY(0px)';this.style.boxShadow='0 5px 15px rgba(0,0,0,0.04)';this.style.background='#e1dddd';">

                        <div style="
                            width:70px;
                            height:70px;
                            margin:0 auto 18px;
                            border-radius:50%;
                            background:#c80000;
                            display:flex;
                            align-items:center;
                            justify-content:center;
                            color:white;
                            font-size:28px;">
                            <i class="fas fa-truck"></i>
                        </div>

                        <h5 style="font-weight:600; margin-bottom:12px; color:#111;">
                            Fast Shipping
                        </h5>

                        <p style="font-size:14px; color:#666; line-height:1.7;">
                            Spare Part Zone offers fast shipping and liftgate options on every part we sell.
                            We ship anywhere across the 48 continental US states.
                        </p>

                        <div style="margin-top:18px; font-size:18px; color:#888;">
                            <i class="fas fa-shipping-fast" style="margin:0 8px;"></i>
                            <i class="fas fa-truck-loading" style="margin:0 8px;"></i>
                            <i class="fas fa-globe-americas" style="margin:0 8px;"></i>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="call-us-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <div class="call-card">

                            <h2 class="call-title mb-3">CALL US</h2>

                            <h3 class="call-subtitle">
                                FOR A FREE CONSULTATION TODAY!
                            </h3>

                            <div class="call-buttons">
                                <a href="tel:+18555815811" class="call-btn call-btn-primary">
                                    <i class="fa-solid fa-phone pulse-icon"></i>
                                    +1 (855) 581-5811
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <section class="section--padding">
        <div class="container">
            <div class="row align-items-start">
                <!-- Right: FAQ -->
                <div class="col-lg-12 mt-5">
                    <div class="faq__section--inner">
                        <h2 class="mb-4 text-center" style="font-size: 35px;">Frequently Asked Questions</h2>
                        </br>
                        <div class="accordion__container">
                            <div class="accordion__items">
                                <h3 class="accordion__items--title">
                                    <button class="faq__accordion--btn accordion__items--button">What does an alternator do
                                        in a car?
                                        <svg class="accordion__items--button__icon" xmlns="http://www.w3.org/2000/svg"
                                            width="20.355" height="13.394" viewBox="0 0 512 512">
                                            <path
                                                d="M98 190.06l139.78 163.12a24 24 0 0036.44 0L414 190.06c13.34-15.57 2.28-39.62-18.22-39.62h-279.6c-20.5 0-31.56 24.05-18.18 39.62z"
                                                fill="currentColor" />
                                        </svg>
                                    </button>
                                </h3>
                                <div class="accordion__items--body">
                                    <p class="accordion__items--body__desc"> The alternator charges your car's battery and
                                        powers the electrical system while the engine is running, keeping everything from
                                        your lights to your radio functioning.</p>
                                </div>
                            </div>
                            <div class="accordion__items">
                                <h3 class="accordion__items--title">
                                    <button class="faq__accordion--btn accordion__items--button">How can I tell if my
                                        alternator is going bad?
                                        <svg class="accordion__items--button__icon" xmlns="http://www.w3.org/2000/svg"
                                            width="20.355" height="13.394" viewBox="0 0 512 512">
                                            <path
                                                d="M98 190.06l139.78 163.12a24 24 0 0036.44 0L414 190.06c13.34-15.57 2.28-39.62-18.22-39.62h-279.6c-20.5 0-31.56 24.05-18.18 39.62z"
                                                fill="currentColor" />
                                        </svg>
                                    </button>
                                </h3>
                                <div class="accordion__items--body">
                                    <p class="accordion__items--body__desc">Common signs include dimming headlights, warning
                                        lights on the dashboard (like the battery light), electrical failures, or a dead
                                        battery even after charging.
                                    </p>
                                </div>
                            </div>
                            <div class="accordion__items">
                                <h3 class="accordion__items--title">
                                    <button class="faq__accordion--btn accordion__items--button"> Are your alternators brand
                                        new or remanufactured?
                                        <svg class="accordion__items--button__icon" xmlns="http://www.w3.org/2000/svg"
                                            width="20.355" height="13.394" viewBox="0 0 512 512">
                                            <path
                                                d="M98 190.06l139.78 163.12a24 24 0 0036.44 0L414 190.06c13.34-15.57 2.28-39.62-18.22-39.62h-279.6c-20.5 0-31.56 24.05-18.18 39.62z"
                                                fill="currentColor" />
                                        </svg>
                                    </button>
                                </h3>
                                <div class="accordion__items--body">
                                    <p class="accordion__items--body__desc">We offer 100% brand-new alternators for optimal
                                        performance and reliability. No core return is needed.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('Frontend.relatedusedproducttwo', ['currentSlug' => 'car-alternator'])

    <section class="call-us-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <div class="call-card">

                            <h2 class="call-title mb-3">STILL HAVE QUESTION?</h2>

                            <h3 class="call-subtitle">
                                Feel free to call us, and our customer service team will be delighted to assist you. Contact us anytime at our Toll-Free number:
                            </h3>

                            <div class="call-buttons">
                                <a href="tel:+18555815811" class="call-btn call-btn-primary">
                                    <i class="fa-solid fa-phone pulse-icon"></i>
                                    +1 (855) 581-5811
                                </a>

                                
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

    <footer class="footer__section footer__bg hide-desktop hide-mobile">
        <div class="container">
            <!-- <div class="newsletter__area">
                <div class="newsletter__inner d-flex justify-content-between align-items-center">
                    <div class="newsletter__content">
                        <h2 class="newsletter__title"> <span class="highlight">Spare Part Zone</span> Your
                            Trusted Auto Parts Partner</h2>
                        <p class="newsletter__desc" style="color:#ffff;">Quality You Can Rely On, Performance You Can Feel.</p>
                    </div>
                </div>
            </div> -->
            <div class="main__footer">
                <div class="row ">
                    <div class="col-lg-8 col-md-10">
                        <div class="footer__widget a-s">
                            <h2 class="footer__widget--title mt-3">About Us</h2>
                            <p class="footer__widget--desc"><span class="highlight">Spare Part Zone</span> is your trusted source for
                                    high-quality automotive components and accessories. We are committed to providing
                                    reliable products, excellent customer service, and fast shipping to keep your
                                    vehicle running smoothly.
                            </p>
                            
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 mt-3">
                        <div class="footer__widget">
                            <h2 class="footer__widget--title mt-3">Resources 
                            </h2>
                            <ul class="footer__widget--menu">
                                
                                <li class="footer__widget--menu__list"><a class="footer__widget--menu__text"
                                        href="/used-carparts/autoparts">Auto Parts</a></li>
                                <li class="footer__widget--menu__list"><a class="footer__widget--menu__text"
                                        href="/carparts-return-policy">Return Policy</a></li>
                                <!-- <li class="footer__widget--menu__list"><a class="footer__widget--menu__text"
                                        href="#0">Privacy Policy</a></li> -->
                                <li class="footer__widget--menu__list"><a class="footer__widget--menu__text"
                                        href="/carparts-shipping-policy">Shipping Policy</a></li>
                                <!-- <li class="footer__widget--menu__list"><a class="footer__widget--menu__text"
                                        href="#0">Terms and conditions
                                    </a></li> -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="shipping__inner d-flex">
                <div class="shipping__items d-flex align-items-center">
                    <div class="shipping__icon text-white">
                        <svg width="38" height="35" viewBox="0 0 38 35" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M0 10.4315V14.4875C0 15.435 0.781458 16.2008 1.73129 16.2008H3.27884V32.3184C3.27884 33.7058 4.42779 34.8352 5.82973 34.8429H32.0509C33.4528 34.8429 34.594 33.7058 34.6018 32.3184V16.1938H36.1493C37.0991 16.1938 37.8806 15.4281 37.8806 14.4805V10.4245C37.8806 9.47692 37.0991 8.71112 36.1493 8.71112H28.42C29.3544 7.84699 29.9214 6.6871 30.021 5.42094C30.1281 4.07921 29.6994 2.77522 28.8182 1.75943C27.9373 0.736001 26.7041 0.114302 25.348 0.0159745C23.9922 -0.0900256 22.6746 0.334271 21.6481 1.20635C19.9476 2.6468 18.7067 4.8755 17.8332 6.98294C17.1361 5.40604 16.1786 3.7914 14.8995 2.70738C13.1069 1.19115 10.4028 1.39583 8.87062 3.17736C8.12764 4.03385 7.76754 5.13315 7.85957 6.2553C7.9362 7.18001 8.304 8.03689 8.90907 8.71917H1.73901C0.781536 8.71917 0.00772156 9.48492 7.87486e-05 10.4325L0 10.4315ZM1.83065 14.3888V10.5226H11.7206C11.7588 10.5302 11.8049 10.5302 11.8431 10.5302C11.889 10.5302 11.9274 10.5302 11.9733 10.5226H25.1796C25.2178 10.5302 25.2562 10.5302 25.2944 10.5302C25.3326 10.5302 25.3633 10.5302 25.4015 10.5226H36.0415V14.3888H33.6975H33.6744H4.18971H4.16663H1.83029H1.83065ZM32.7706 32.3177C32.7706 32.7118 32.4413 33.0378 32.043 33.0378H22.8732V16.1927H32.7703L32.7706 32.3177ZM16.8295 16.1931H21.0427V33.0382H16.8295V16.1931ZM14.9985 33.0382H5.82871C5.43044 33.0382 5.10111 32.7123 5.10111 32.3181V16.1936H14.9982L14.9985 33.0382ZM13.635 4.018C13.6581 4.03323 13.6809 4.05577 13.6963 4.071C15.0293 5.2004 15.9714 7.16413 16.561 8.71055H12.0185C11.4824 8.46048 10.9767 8.14187 10.5172 7.76299C9.4753 6.91376 9.32205 5.37498 10.1801 4.34391C11.0456 3.32048 12.5931 3.16882 13.635 4.018L13.635 4.018ZM19.112 8.71845C19.8322 6.73982 21.0655 4.08654 22.8272 2.58551C24.1983 1.43326 26.259 1.59256 27.4233 2.9495C28.5876 4.29886 28.4266 6.33808 27.0632 7.49797C26.4658 7.98319 25.8068 8.40015 25.102 8.72609H19.1116L19.112 8.71845Z"
                                fill="currentColor" />
                        </svg>
                    </div>
                    <div class="shipping__content">
                        <h2 class="shipping__content--title text-white h3">Free Shipping</h2>
                        <p class="shipping__content--desc">Free shipping over $100</p>
                    </div>
                </div>
                <div class="shipping__items d-flex align-items-center">
                    <div class="shipping__icon text-white">
                        <svg width="39" height="37" viewBox="0 0 39 37" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M34.4506 19.1161C34.0912 19.1161 33.8007 18.84 33.8007 18.4995V16.6495C33.8007 10.0795 27.5195 4.93302 19.5002 4.93302C11.4809 4.93302 5.20048 10.0797 5.20048 16.6495V18.4995C5.20048 18.84 4.90993 19.1161 4.55057 19.1161C4.19093 19.1161 3.90039 18.84 3.90039 18.4995V16.6495C3.90039 9.38758 10.7529 3.69946 19.5004 3.69946C28.2482 3.69946 35.1004 9.38758 35.1004 16.6495V18.4995C35.1004 18.84 34.8098 19.1161 34.4505 19.1161"
                                fill="currentColor" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M6.50032 19.1436C3.66377 19.381 1.30023 21.1391 1.30023 23.1249C1.30023 25.1104 3.66377 26.8686 6.50032 27.106V19.1436ZM7.15023 28.3665C3.27419 28.3665 0 25.9657 0 23.1249C0 20.2838 3.27405 17.8831 7.15023 17.8831C7.5096 17.8831 7.80013 18.1595 7.80013 18.4999V27.7499C7.80013 28.0904 7.50959 28.3665 7.15023 28.3665V28.3665Z"
                                fill="currentColor" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M38.3502 23.4334C37.9908 23.4334 37.7003 23.157 37.7003 22.8166V19.1165C37.7003 7.75154 31.0662 1.23356 19.4998 1.23356C7.76363 1.23356 1.30008 7.58444 1.30008 19.1165V22.8166C1.30008 23.157 1.00954 23.4334 0.650178 23.4334C0.290536 23.4334 0 23.157 0 22.8166V19.1165C0 6.96727 7.10774 0 19.5 0C31.8922 0 39 6.96793 39 19.1165V22.8166C39 23.157 38.7094 23.4334 38.3501 23.4334"
                                fill="currentColor" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M19.5016 36.9998C19.1422 36.9998 18.8517 36.7237 18.8517 36.3833C18.8517 35.0229 20.0176 33.9164 21.4516 33.9164H24.3428C26.3658 33.9164 28.2167 32.5944 28.9507 30.6278C29.0704 30.3065 29.4409 30.1369 29.7801 30.2518C30.1188 30.3659 30.2957 30.7179 30.176 31.0384C29.2595 33.4978 26.915 35.1499 24.3428 35.1499H21.4515C20.7347 35.1499 20.1517 35.703 20.1517 36.3833C20.1517 36.7237 19.8612 36.9999 19.5015 36.9999"
                                fill="currentColor" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M19.5001 37C19.1407 37 18.8502 36.7238 18.8502 36.3834C18.8502 35.703 18.2672 35.15 17.5501 35.15H14.6591C12.0875 35.15 9.743 33.4984 8.8265 31.0398C8.7068 30.7185 8.88363 30.3665 9.22178 30.2529C9.56292 30.1388 9.93206 30.3079 10.0518 30.6284C10.7855 32.5951 12.6367 33.9166 14.6591 33.9166H17.5501C18.984 33.9166 20.1503 35.023 20.1503 36.3834C20.1503 36.7238 19.8597 37 19.5001 37"
                                fill="currentColor" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M9.10186 16.6499C8.38502 16.6499 7.80177 17.203 7.80177 17.8834V28.9834C7.80177 29.6635 8.38502 30.2166 9.10186 30.2166C9.81869 30.2166 10.4019 29.6635 10.4019 28.9834V17.8834C10.4019 17.203 9.81869 16.6499 9.10186 16.6499ZM9.10186 31.45C7.66791 31.45 6.50195 30.3438 6.50195 28.9834V17.8834C6.50195 16.5229 7.66791 15.4165 9.10186 15.4165C10.5358 15.4165 11.7018 16.5229 11.7018 17.8834V28.9834C11.7018 30.3438 10.5358 31.45 9.10186 31.45Z"
                                fill="currentColor" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M32.5013 19.1435V27.1058C35.3378 26.8683 37.7013 25.1102 37.7013 23.1247C37.7013 21.1389 35.3378 19.3808 32.5013 19.1433V19.1435ZM31.8513 28.3663C31.4917 28.3663 31.2012 28.0901 31.2012 27.7497V18.4997C31.2012 18.1592 31.4917 17.8828 31.8513 17.8828C35.7271 17.8828 39.0009 20.2836 39.0009 23.1247C39.0009 25.9655 35.7268 28.3663 31.8513 28.3663"
                                fill="currentColor" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M29.901 16.6499C29.1839 16.6499 28.6009 17.203 28.6009 17.8834V28.9834C28.6009 29.6635 29.1839 30.2166 29.901 30.2166C30.6178 30.2166 31.2008 29.6635 31.2008 28.9834V17.8834C31.2008 17.203 30.6178 16.6499 29.901 16.6499ZM29.901 31.45C28.467 31.45 27.3008 30.3438 27.3008 28.9834V17.8834C27.3008 16.5229 28.467 15.4165 29.901 15.4165C31.3346 15.4165 32.5009 16.5229 32.5009 17.8834V28.9834C32.5009 30.3438 31.3346 31.45 29.901 31.45Z"
                                fill="currentColor" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M19.4979 18.4998C16.6309 18.4998 14.2981 20.7129 14.2981 23.4332C14.2981 26.1533 16.6309 28.3664 19.4979 28.3664C22.3653 28.3664 24.698 26.1533 24.698 23.4332C24.698 20.7129 22.3653 18.4998 19.4979 18.4998ZM19.4979 29.5998C15.9138 29.5998 12.998 26.8333 12.998 23.4332C12.998 20.0328 15.9138 17.2664 19.4979 17.2664C23.0821 17.2664 25.9981 20.0328 25.9981 23.4332C25.9981 26.8333 23.0821 29.5998 19.4979 29.5998Z"
                                fill="currentColor" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M19.5018 18.4998C18.7063 18.4998 17.5518 20.4221 17.5518 23.4332C17.5518 26.4444 18.7063 28.3664 19.5018 28.3664C20.2975 28.3664 21.4518 26.4444 21.4518 23.4332C21.4518 20.4221 20.2975 18.4998 19.5018 18.4998ZM19.5018 29.5998C17.6486 29.5998 16.252 26.9487 16.252 23.4332C16.252 19.9175 17.6486 17.2664 19.5018 17.2664C21.3549 17.2664 22.7519 19.9175 22.7519 23.4332C22.7519 26.9487 21.3549 29.5998 19.5018 29.5998Z"
                                fill="currentColor" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M25.3479 24.0498H13.648C13.2886 24.0498 12.998 23.7737 12.998 23.4332C12.998 23.0928 13.2886 22.8164 13.648 22.8164H25.3479C25.7076 22.8164 25.9981 23.0928 25.9981 23.4332C25.9981 23.7737 25.7076 24.0498 25.3479 24.0498Z"
                                fill="currentColor" />
                        </svg>
                    </div>
                    <div class="shipping__content">
                        <h2 class="shipping__content--title text-white h3">Support 24/7</h2>
                        <p class="shipping__content--desc">Contact us 24 hours a day</p>
                    </div>
                </div>
                <div class="shipping__items d-flex align-items-center">
                    <div class="shipping__icon text-white">
                        <svg width="43" height="36" viewBox="0 0 43 36" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M4.53678 0.000286987C2.45745 0.000286987 0.753906 1.5443 0.753906 3.42892V25.7142C0.753906 27.5988 2.45745 29.1428 4.53678 29.1428H17.1318C17.3825 29.1428 17.6229 29.0524 17.8002 28.8917C17.9778 28.731 18.0772 28.5129 18.0772 28.2856C18.0772 28.0583 17.9778 27.8402 17.8002 27.6795C17.6229 27.5187 17.3825 27.4283 17.1318 27.4283H4.53678C3.47255 27.4283 2.6455 26.6787 2.6455 25.7142V6.00033H12.1027V13.7145H12.1024C12.1027 14.0609 12.3332 14.3735 12.6862 14.506C13.0396 14.6386 13.4462 14.5654 13.7169 14.3203L16.831 11.4978L19.9452 14.3203C20.2156 14.5654 20.6222 14.6386 20.9755 14.506C21.3289 14.3734 21.5594 14.0609 21.5594 13.7145V6.00033H31.0166V12.9446V12.9443C31.0166 13.1716 31.116 13.3897 31.2933 13.5504C31.471 13.7111 31.7113 13.8015 31.9621 13.8015C32.2128 13.8015 32.4535 13.7111 32.6308 13.5504C32.8081 13.3897 32.9079 13.1716 32.9079 12.9443V3.42864C32.9079 1.54402 31.2043 0 29.125 0L4.53678 0.000286987ZM4.53678 1.71446H12.1022V4.28586H2.64583V3.42892C2.64583 2.46435 3.47288 1.71475 4.5371 1.71475L4.53678 1.71446ZM13.994 1.71446H19.6681V11.6452L17.4998 9.67993H17.4995C17.1303 9.3453 16.5315 9.3453 16.1623 9.67993L13.994 11.6455L13.994 1.71446ZM21.5594 1.71446H29.1248C30.189 1.71446 31.0161 2.46406 31.0161 3.42863V4.28586H21.5589L21.5594 1.71446Z"
                                fill="currentColor" />
                            <path
                                d="M6.42781 19.7144C5.90568 19.7144 5.48234 20.0983 5.48234 20.5716C5.48234 20.7989 5.58176 21.017 5.75908 21.1777C5.93671 21.3384 6.17704 21.4288 6.42782 21.4288H12.102C12.3527 21.4288 12.5934 21.3384 12.7707 21.1777C12.948 21.017 13.0478 20.7989 13.0478 20.5716C13.0478 20.3443 12.948 20.1262 12.7707 19.9655C12.5934 19.8048 12.3527 19.7144 12.102 19.7144H6.42781Z"
                                fill="currentColor" />
                            <path
                                d="M6.42781 23.1431C5.90568 23.1431 5.48234 23.5268 5.48234 24.0003C5.48234 24.2276 5.58176 24.4454 5.75908 24.6064C5.93671 24.7671 6.17704 24.8572 6.42782 24.8572H14.939C15.1898 24.8572 15.4305 24.7671 15.6078 24.6064C15.7851 24.4454 15.8848 24.2276 15.8848 24.0003C15.8848 23.773 15.7851 23.5549 15.6078 23.3942C15.4305 23.2335 15.1898 23.1431 14.939 23.1431H6.42781Z"
                                fill="currentColor" />
                            <path
                                d="M15.8854 20.5716C15.8854 20.7989 15.7857 21.017 15.6084 21.1777C15.431 21.3384 15.1904 21.4288 14.9396 21.4288C14.4175 21.4288 13.9941 21.0448 13.9941 20.5716C13.9941 20.0983 14.4175 19.7144 14.9396 19.7144C15.1904 19.7144 15.431 19.8048 15.6084 19.9655C15.7857 20.1262 15.8854 20.3443 15.8854 20.5716Z"
                                fill="currentColor" />
                            <path
                                d="M31.0182 15.4287C24.7617 15.4287 19.6699 20.0437 19.6699 25.7143C19.6699 31.3849 24.7617 35.9999 31.0182 35.9999C37.2747 35.9999 42.3665 31.3849 42.3665 25.7143C42.3665 20.0437 37.2747 15.4287 31.0182 15.4287ZM31.0182 17.1429C36.2522 17.1429 40.4754 20.9702 40.4754 25.7145C40.4754 30.4583 36.2527 34.2861 31.0182 34.2861C25.7842 34.2861 21.561 30.4588 21.561 25.7145C21.561 20.9706 25.7837 17.1429 31.0182 17.1429Z"
                                fill="currentColor" />
                            <path
                                d="M28.3654 20.8229L25.7886 23.1616C25.4194 23.4962 25.4194 24.0389 25.7886 24.3735L28.3654 26.7122C28.7346 27.0468 29.3333 27.0468 29.7026 26.7122C30.0724 26.3778 30.073 25.8354 29.7045 25.5003L28.816 24.695H33.3319C34.6855 24.695 35.7459 25.6573 35.7459 26.8864C35.7459 28.1155 34.6855 29.0778 33.3319 29.0778H27.235C26.7129 29.0778 26.2892 29.4615 26.2892 29.935C26.2892 30.4083 26.7125 30.7923 27.235 30.7923H33.3322C35.7019 30.7923 37.6375 29.035 37.6375 26.8867C37.6375 24.7383 35.7016 22.9811 33.3322 22.9811H28.6608L29.7045 22.0352C30.073 21.7 30.0724 21.1573 29.7026 20.8232C29.2805 20.4576 28.728 20.5021 28.3654 20.8232V20.8229Z"
                                fill="currentColor" />
                        </svg>
                    </div>
                    <div class="shipping__content">
                        <h2 class="shipping__content--title text-white h3">100% Money Back</h2>
                        <p class="shipping__content--desc">You have 15 days to Return</p>
                    </div>
                </div>
                <div class="shipping__items d-flex align-items-center">
                    <div class="shipping__icon text-white">
                        <svg width="28" height="33" viewBox="0 0 28 33" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M13.9418 19.3345C12.9838 19.3466 12.0694 19.6922 11.3955 20.2974C10.7218 20.9024 10.3429 21.7181 10.3399 22.569C10.3371 23.4196 10.7108 24.2376 11.3807 24.8459V26.2996C11.3807 27.1301 11.8795 27.8975 12.6895 28.3128C13.4998 28.7278 14.4977 28.7278 15.3078 28.3128C16.1178 27.8975 16.6169 27.1301 16.6169 26.2996V24.8459C17.292 24.2291 17.6632 23.3993 17.6496 22.5392C17.6356 21.6793 17.2379 20.8592 16.5435 20.2596C15.8488 19.66 14.9145 19.3296 13.946 19.3416L13.9418 19.3345ZM14.7526 23.5072C14.445 23.7034 14.2626 24.0192 14.2631 24.3557V26.2857C14.2631 26.4172 14.1429 26.5239 13.9948 26.5239C13.8465 26.5239 13.7266 26.4172 13.7266 26.2857V24.3695C13.7268 24.0333 13.5446 23.7173 13.237 23.521C12.957 23.3234 12.7797 23.033 12.7453 22.7167C12.7109 22.4004 12.8229 22.0853 13.0551 21.8437C13.2873 21.6021 13.62 21.4544 13.9771 21.4348H13.9968C14.3618 21.4406 14.7073 21.5818 14.9497 21.8246C15.1917 22.0671 15.3083 22.3888 15.2709 22.7111C15.2335 23.0337 15.0455 23.3274 14.7527 23.521L14.7526 23.5072Z"
                                fill="currentColor" />
                            <path
                                d="M13.9961 0.000558845C11.1916 0.000558845 8.50207 0.989734 6.51933 2.75044C4.53631 4.51115 3.42224 6.89914 3.42224 9.38902V13.2348C2.56092 13.3204 1.76512 13.6848 1.18731 14.2581C0.609256 14.8316 0.289622 15.574 0.289062 16.3437V29.8705C0.289062 30.7005 0.660322 31.4966 1.32145 32.0834C1.98256 32.6703 2.87891 33 3.81374 33H24.1398C25.0746 33 25.9713 32.6704 26.6324 32.0834C27.2932 31.4966 27.6647 30.7005 27.6647 29.8705V16.3437C27.6642 15.574 27.3446 14.8315 26.7665 14.2581C26.1884 13.6848 25.3929 13.3204 24.5316 13.2348V9.37158C24.5264 6.89069 23.4153 4.51214 21.4413 2.75597C19.4672 0.999855 16.7908 0.00925217 13.9966 0L13.9961 0.000558845ZM13.9961 2.08708V2.08684C16.174 2.09144 18.2608 2.86278 19.7992 4.23179C21.3372 5.6008 22.201 7.45564 22.201 9.38934V13.2145L5.77179 13.2143V9.3891V9.38934C5.77179 7.45253 6.63836 5.59521 8.18072 4.22576C9.72315 2.85626 11.8149 2.0869 13.9963 2.0869L13.9961 2.08708ZM25.3341 16.3441V29.8709V29.8707C25.3341 30.1474 25.2103 30.4125 24.9899 30.6083C24.7694 30.804 24.4708 30.9139 24.1591 30.9139H3.81347C3.50204 30.9139 3.20317 30.804 2.9827 30.6083C2.76252 30.4125 2.63876 30.1474 2.63876 29.8707V16.3439C2.63876 16.0671 2.76251 15.8017 2.9827 15.6062C3.20316 15.4105 3.50203 15.3006 3.81347 15.3006H24.1395C24.4545 15.296 24.7585 15.4037 24.9831 15.5999C25.2076 15.7962 25.3341 16.0642 25.3341 16.3438L25.3341 16.3441Z"
                                fill="currentColor" />
                        </svg>
                    </div>
                    <div class="shipping__content">
                        <h2 class="shipping__content--title text-white h3">Payment Secure</h2>
                        <p class="shipping__content--desc">We ensure secure payment</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__bottom">
            <div class="container">
                <div class="footer__bottom--inenr d-flex justify-content-between align-items-center">
                    <div class="footer__logo">
                        <a class="footer__logo--link" href="/used-carparts"><img src="/frontend/my_img/logo/new_logo.svg"
                                alt="logo-img"></a>
                    </div>
                    <p class="copyright__content"><span class="text__secondary">© 2025</span> Powered by <a
                            class="copyright__content--link" target="_blank" href="/used-carparts">Spare Part Zone</a>
                        All Rights Reserved.
                    </p>
                </div>
            </div>
        </div>
    </footer>
</main>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        $(document).ready(function () {

            // Global CSRF Token
            $.ajaxSetup({
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
                }
            });

            // Target ALL forms — not only one
            $(".leadForm").submit(function (e) {
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

                    beforeSend: function () {
                        form.find("#started").attr("disabled", true).hide();
                        form.find("#form_loader").show();
                    },

                    success: function (data) {

                        // SUCCESS — redirect
                        if (data.status === "success") {

                            toastr.success(data.message);

                            form[0].reset();

                            // Reset reCAPTCHA for this form (if present)
                            if (typeof grecaptcha !== "undefined") {
                                grecaptcha.reset();
                            }

                            setTimeout(function () {
                                window.location.href = "/thankyou-success";
                            }, 800);

                        } else {

                            // FAILED — show error, no redirect
                            toastr.error(data.message);

                            if (typeof grecaptcha !== "undefined") {
                                grecaptcha.reset();
                            }
                        }
                    },

                    error: function (xhr) {

                        toastr.error("There are some errors. Please check your inputs.");

                        if (xhr.responseJSON && xhr.responseJSON.errors) {

                            $.each(xhr.responseJSON.errors, function (key, value) {
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

                    complete: function () {
                        form.find("#started").attr("disabled", false).show();
                        form.find("#form_loader").hide();
                    }
                });
            });
        });
    </script>

    <script>
            document.addEventListener("DOMContentLoaded", function () {

                const step1 = document.getElementById('step-1');
                const step2 = document.getElementById('step-2');

                const stepIndicator1 = document.getElementById('stepIndicator1');
                const stepIndicator2 = document.getElementById('stepIndicator2');

                const nextBtn = document.getElementById('nextBtn');

                // Step 1 validation
                function validateStep1() {
                    const requiredFields = [
                        'vehicle_year',
                        'make',
                        'vehicle_model',
                        'part_name',
                    ];

                    let isValid = true;

                    requiredFields.forEach(name => {
                        const field = document.querySelector(`[name="${name}"]`);
                        const errorDiv = document.getElementById(`${name}-error`);

                        if (!field || !field.value.trim()) {
                            isValid = false;
                            if (errorDiv) errorDiv.innerText = 'This field is required';
                        } else {
                            if (errorDiv) errorDiv.innerText = '';
                        }
                    });

                    return isValid;
                }

                // Show Step 1
                function showStep1() {
                    step1.style.display = 'block';
                    step2.style.display = 'none';

                    stepIndicator1.classList.add('active');
                    stepIndicator2.classList.remove('active');
                }

                // Show Step 2
                function showStep2() {
                    step1.style.display = 'none';
                    step2.style.display = 'block';

                    stepIndicator1.classList.remove('active');
                    stepIndicator2.classList.add('active');
                }

                // Next button click
                if (nextBtn) {
                    nextBtn.addEventListener('click', function () {
                        if (!validateStep1()) return;
                        showStep2();
                    });
                }

                // Step indicator 1 click (always allow)
                stepIndicator1.addEventListener('click', function () {
                    showStep1();
                });

                // Step indicator 2 click (validate first)
                stepIndicator2.addEventListener('click', function () {
                    if (!validateStep1()) return;
                    showStep2();
                });

            });
    </script>

     <script>
        document.addEventListener("DOMContentLoaded", function () {
            const logoLink = document.querySelector(".site-logo a");

            if (!logoLink) return;

            logoLink.addEventListener("click", function (e) {
                const currentPath = window.location.pathname.replace(/\/$/, "");

                // If inside used-carparts pages
                if (currentPath.startsWith("/used-carparts")) {
                    e.preventDefault();

                    window.location.href = "/used-carparts";
                }
            });
        });
</script>



@endsection

