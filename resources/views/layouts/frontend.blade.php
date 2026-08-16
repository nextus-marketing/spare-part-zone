<!doctype html>
<html lang="en">

<head>
    @yield('head_tag')
    <meta charset="utf-8">
    <title>{{ trim($__env->yieldContent('title')) }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @if (View::hasSection('meta_description'))
        <meta name="description" content="{{ trim($__env->yieldContent('meta_description')) }}">
    @else
        <meta name="description"
            content="Shop Spare Part Zone online with fast shipping, competitive prices, and trusted quality. Find the right auto parts for your vehicle today.">
    @endif
    <link rel="shortcut icon" type="image/x-icon" href="/frontend/my_img/favicon.png">
    @hasSection('robots')
        @yield('robots')
    @else
        <meta name="robots" content="follow, index, max-snippet:-1, max-video-preview:-1, max-image-preview:large">
    @endif
    <!-- ======= All CSS Plugins here ======== -->
    <link rel="stylesheet" href="/frontend/assets/css/plugins/swiper-bundle.min.css">
    <link rel="stylesheet" href="/frontend/assets/css/plugins/glightbox.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&amp;family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700&amp;family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500&amp;display=swap"
        rel="stylesheet">
    <!-- Plugin css -->
    <link rel="stylesheet" href="/frontend/assets/css/vendor/bootstrap.min.css">
    <!-- Custom Style CSS -->
    <link rel="stylesheet" href="/frontend/assets/css/style.css?v=2.0">
    <!-- My Style CSS -->
    <link rel="stylesheet" href="/frontend/assets/css/my.css?v=2.0">
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
        integrity="sha512-RXf+QSDCUQs6A4e8N+wzH5N2D9GdQ1P4Mx8fN1bFFVwX9Z5kKnxKTCN0L9aR5v/6+vGzO0Tfz2SyoY2tr6b0Zg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="canonical" href="{{ url()->current() }}" />
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-WDVFFKVEM1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'G-WDVFFKVEM1');
    </script>
    <script type="text/javascript">
        (function(c, l, a, r, i, t, y) {
            c[a] = c[a] || function() {
                (c[a].q = c[a].q || []).push(arguments)
            };
            t = l.createElement(r);
            t.async = 1;
            t.src = "https://www.clarity.ms/tag/" + i;
            y = l.getElementsByTagName(r)[0];
            y.parentNode.insertBefore(t, y);
        })(window, document, "clarity", "script", "t0jrowbwau");
    </script>
    <!-- Google Ads Conversion Tracking -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-17529608510"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'AW-17529608510');
    </script>
    <script>
        gtag('event', 'conversion', {
            'send_to': 'AW-17529608510/uoaxCKzrsZQbEL6y4qZB'
        });
    </script>
    @stack('custom-head')
    @yield('structured_data')
</head>

<body class="@yield('body_class')">

    <!-- Top Scrolling Advertisement -->
    <div class="top-scroller">
        <div class="top-scroller__content">
            Upgrade Your Ride Now! <strong>Get 35% Off </strong>on Spare Part Zone – Engine, Suspension, Electrical &
            More! Limited Stock!
        </div>
    </div>

    <style>
        /* Scrolling Advertisement Styles */
        .top-scroller {
            width: 100%;
            background-color: #ff4e21;
            /* Eye-catching header bar */
            overflow: hidden;
            position: fixed;
            /* Stays on top */
            top: 0;
            left: 0;
            z-index: 9999;
            height: 45px;
            display: flex;
            align-items: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        .top-scroller__content {
            display: inline-block;
            white-space: nowrap;
            font-weight: bold;
            font-size: 16px;
            color: #fff;
            padding-left: 100%;
            /* Start off-screen */
            animation: scroll-left 15s linear infinite;
        }

        @keyframes scroll-left {
            0% {
                transform: translateX(0%);
            }

            100% {
                transform: translateX(-100%);
            }
        }

        /* Default: mobile and tablet (0px top margin) */
        header {
            margin-top: 0;
        }

        /* Desktop and large laptops */
        @media (min-width: 1200px) {

            /* adjust as needed for your desktop breakpoint */
            header {
                margin-top: 45px;
                /* same as .top-scroller height */
            }
        }

        @media (min-width: 992px) {

            /* desktop */
            .mobile-only-header {
                display: none !important;
            }
        }

        @media (max-width: 500px) {
            .mobile-logo img {
                max-width: 45% !important;
                margin-left: -167px !important;
            }
        }

        @media (max-width: 500px) {
            .product__card--content {
                padding: 0.5rem;
            }

            /* a,
            button {
                font-size: 9px;
            } */

            .primary__btn.slider__btn {
                font-size: 10px;
                padding: 1px 10px;
                min-width: 110px;
                white-space: nowrap;
            }


        }

        @media (max-width: 500px) {
            .head-btn-shown {
                font-size: 13px !important;
            }
        }


        @media (max-width: 500px) {
            .banner__form {
                max-width: 313px !important;
                margin-left: -19px;
            }


        }
    </style>

    <style>
        /* Force-center logo */
        .mobile-logo {
            display: flex !important;
            justify-content: center !important;
            width: 100% !important;
            margin: 0 auto !important;
        }

        .mobile-logo img {
            /* margin-left: 0 !important; */
            /* max-width: 100% !important; */
        }

        /* Hide Call Button only on /home */
        .mobile-call-button {
            display: none !important;
        }
    </style>

    <style>
        /* Base mobile menu */
        .offcanvas__menu_ul,
        .offcanvas__submenu_ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        /* Menu items */
        .offcanvas__menu_item,
        .offcanvas__submenu_item {
            display: block;
            padding: 12px 16px;
            text-decoration: none;
            font-size: 15px;
            font-weight: 500;
            color: #000;
            border-bottom: 1px solid #f0f0f0;
        }

        /* Hover effect */
        .offcanvas__menu_item:hover,
        .offcanvas__submenu_item:hover {
            background-color: #f8f8f8;
        }

        /* First-level submenu (hidden by default) */
        .offcanvas__submenu_ul {
            display: none;
            padding-left: 15px;
            background-color: #fafafa;
        }

        /* Nested submenu */
        .offcanvas__submenu_ul .offcanvas__submenu_ul {
            padding-left: 20px;
            background-color: #fefefe;
        }

        /* Expand arrow */
        .menu-toggle {
            float: right;
            font-size: 14px;
            cursor: pointer;
            transition: transform 0.3s ease;
        }

        .menu-toggle.open {
            transform: rotate(90deg);
        }

        /* === FIX: Make the offcanvas scrollable === */
        .offcanvas {
            position: fixed;
            top: 0;
            left: 0;
            width: 320px;
            /* sidebar width */
            height: 100vh;
            /* full screen height */
            background: #fff;
            /* white background */
            z-index: 9999;
            /* above everything */
            overflow-y: auto;
            /* enable vertical scroll */
            -webkit-overflow-scrolling: touch;
            /* smooth on iOS */
        }

        .offcanvas__inner {
            padding-right: 5px;
            /* so scrollbar doesn’t overlap text */
        }

        /* Lock body when menu is open */
        body.offcanvas-open {
            overflow: hidden;
        }
    </style>

    <style>
        .modal-content {
            position: relative;
            background-color: #ffffff;
            padding: 20px 30px;
            border-radius: 10px;
            max-width: 500px;
            margin: 60px auto;
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.15);
            font-family: 'Segoe UI', sans-serif;
        }

        .modal-logo {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 25px;
        }

        .modal-logo img {
            max-width: 180px;
            height: auto;
        }

        .modal-content label {
            color: #333;
            margin-top: 10px;
            display: block;
            font-weight: 500;
        }

        .modal-content input {
            width: 100%;
            padding: 3px 12px;
            margin-top: 6px;
            border: 1px solid #ccc;
            border-radius: 6px;
            background-color: #f9f9f9;
            color: #333;
            font-size: 14px;
            transition: border 0.2s ease;
        }

        .modal-content input:focus {
            outline: none;
            border-color: #ff4e21;
            background-color: #fff;
        }

        .submit-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 12px;
        }

        .modal-content button[type="submit"] {
            background-color: #ff4e21;
            color: #fff;
            border: none;
            padding: 9px;
            border-radius: 6px;
            cursor: pointer;
            width: 150px;
            font-size: 16px;
            font-weight: bold;
            transition: background-color 0.3s ease;

            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 15px;
        }

        .modal-content button[type="submit"]:hover {
            background-color: #4285f4;
        }

        .close-btn {
            position: absolute;
            top: 15px;
            right: 20px;
            font-size: 24px;
            color: #888;
            cursor: pointer;
        }

        .field_error {
            font-size: 13px;
            color: #ff4e21;
            margin-top: 4px;
        }

        .g-recaptcha {
            margin-top: 15px;
        }

        @media (max-width: 576px) {
            .modal-content {
                padding: 30px 20px;
            }

            .modal-logo img {
                max-width: 140px;
            }
        }

        .header__sub--menu__items a {
            line-height: 20px;
            padding-top: 4px;
            padding-bottom: 4px;
        }
    </style>

    <div
        class="main__header--inner position__relative d-flex justify-content-between align-items-center mobile-only-header">
        <!-- your mobile content -->
    </div>


    <header class="header__section">

        <div class="main__header header__sticky p-0"
            style="
            display: flex;
            flex-direction: column;

            /* Hide on desktop */
            @media(min-width: 992px) {
                display: none !important;
            }">

            @unless (request()->is('home') || request()->is('thankyou-lead'))
                <div class="container">
                    <div
                        class="main__header--inner position__relative d-flex justify-content-between align-items-center d-lg-none">
                        <div class="offcanvas__header--menu__open ">

                            <a class="offcanvas__header--menu__open--btn" href="javascript:void(0)" data-offcanvas="">
                                <svg xmlns="http://www.w3.org/2000/svg" class="ionicon offcanvas__header--menu__open--svg"
                                    viewBox="0 0 512 512">
                                    <path fill="currentColor" stroke="currentColor" stroke-linecap="round"
                                        stroke-miterlimit="10" stroke-width="32" d="M80 160h352M80 256h352M80 352h352">
                                    </path>
                                </svg>
                                <span class="visually-hidden">Offcanvas Menu Open</span>
                            </a>

                        </div>
                        <a href="/" class="mobile-logo new-mb-logo">
                            <img src="/frontend/my_img/logo/logo.webp" alt="Spare Part Zone Logo"
                                style="max-width: 114%; margin-left: -231px;">
                        </a>

                        <a href="tel:+18555815811" class="head-btn-shown"
                            style="height:40px;
                            background:#ff4e21;
                            color:#fff;
                            border-radius:50px;
                            font-weight:600;
                            border:none;
                            cursor:pointer;
                            display:inline-flex;
                            align-items:center;
                            gap:8px;
                            padding:0 7px;
                            text-decoration:none;
                            transition:background 0.3s ease;
                            position:absolute;
                            right:0px;
                            top:50%;
                            transform:translateY(-50%);">
                            <i class="fa-solid fa-phone" style="font-size:16px;"></i>
                            +1 (855) 581-5811
                        </a>

                    </div>
                @endunless
            </div>
        </div>
        </div>

        <div class="header__bottom home-header hide-desktop hide-mobile">
            <div class="container">
                <div class="header__bottom--inner position__relative d-flex align-items-center">
                    <div class="site-logo pb-0 pt-0">
                        <a href="/">
                            <img src="/frontend/my_img/logo/logo.webp" alt="Spare Part Zone Logo">
                        </a>
                    </div>
                    {{-- Header 1 --}}

                    <div class="header__right--area d-flex justify-content-center align-items-center"
                        style="display: flex; justify-content: space-between; align-items: center; width: 100%;">

                        <div class="header__menu" style="flex-grow: 1;">
                            <nav class="header__menu--navigation">
                                <ul class="header__menu--wrapper d-flex"
                                    style="display: flex; gap: 20px; list-style: none; margin: 0; padding: 0;">
                                    <li class="header__menu--items">
                                        <a class="header__menu--link text-black" href="/">Home</a>
                                    </li>
                                    <li class="header__menu--items">
                                        <a class="header__menu--link text-black" href="/about">About Us</a>
                                    </li>
                                    <li class="header__menu--items">
                                        <a class="header__menu--link text-black" href="#0">Auto Parts
                                            <svg class="menu__arrowdown--icon" xmlns="http://www.w3.org/2000/svg"
                                                width="12" height="7.41" viewBox="0 0 12 7.41">
                                                <path d="M16.59,8.59,12,13.17,7.41,8.59,6,10l6,6,6-6Z"
                                                    transform="translate(-6 -8.59)" fill="currentColor"
                                                    opacity="0.7" />
                                            </svg>
                                        </a>
                                        <ul class="header__sub--menu">
                                            <li class="header__sub--menu__items">
                                                <a href="/engine-parts" class="header__sub--menu__link"
                                                    style="font-size: 15px;">Engine Parts
                                                    <svg class="menu__arrowdown--icon"
                                                        xmlns="http://www.w3.org/2000/svg" width="12"
                                                        height="7.41" viewBox="0 0 12 7.41">
                                                        <path d="M16.59,8.59,12,13.17,7.41,8.59,6,10l6,6,6-6Z"
                                                            transform="translate(-6 -8.59)" fill="currentColor"
                                                            opacity="0.7" />
                                                    </svg>
                                                </a>
                                                <ul class="header__sub--menu">
                                                    <li class="header__sub--menu__items"><a
                                                            href="/engine-parts/engine"
                                                            class="header__sub--menu__link">Engine</a></li>
                                                    <li class="header__sub--menu__items"><a
                                                            href="/engine-parts/cylinder-head"
                                                            class="header__sub--menu__link">Cylinder Head</a></li>
                                                    <li class="header__sub--menu__items"><a
                                                            href="/engine-parts/camshaft"
                                                            class="header__sub--menu__link">Camshaft</a></li>
                                                    <li class="header__sub--menu__items"><a
                                                            href="/engine-parts/turbocharger"
                                                            class="header__sub--menu__link">Turbocharger</a></li>
                                                    <li class="header__sub--menu__items"><a
                                                            href="/engine-parts/supercharger"
                                                            class="header__sub--menu__link">Supercharger</a></li>
                                                    <li class="header__sub--menu__items"><a
                                                            href="/engine-parts/intake-manifold"
                                                            class="header__sub--menu__link">Intake Manifold</a></li>
                                                    <li class="header__sub--menu__items"><a
                                                            href="/engine-parts/exhaust-manifold"
                                                            class="header__sub--menu__link">Exhaust Manifold</a></li>
                                                    <li class="header__sub--menu__items"><a
                                                            href="/engine-parts/throttle-body"
                                                            class="header__sub--menu__link">Throttle Body</a></li>
                                                    <li class="header__sub--menu__items"><a
                                                            href="/engine-parts/engine-mount"
                                                            class="header__sub--menu__link">Engine Mount</a></li>
                                                    <li class="header__sub--menu__items"><a
                                                            href="/engine-parts/valve-cover"
                                                            class="header__sub--menu__link">Valve Cover</a></li>
                                                    <li class="header__sub--menu__items"><a
                                                            href="/engine-parts/fuel-pump"
                                                            class="header__sub--menu__link">Fuel Pump</a></li>
                                                    <li class="header__sub--menu__items"><a
                                                            href="/engine-parts/coolant-pump"
                                                            class="header__sub--menu__link">Coolant Pump</a></li>
                                                    <li class="header__sub--menu__items"><a
                                                            href="/engine-parts/radiator"
                                                            class="header__sub--menu__link">Radiator</a></li>
                                                    <li class="header__sub--menu__items"><a
                                                            href="/engine-parts/vacuum-pump"
                                                            class="header__sub--menu__link">Vacuum Pump</a></li>
                                                    <li class="header__sub--menu__items"><a
                                                            href="/engine-parts/catalytic-converter"
                                                            class="header__sub--menu__link">Catalytic Converter</a>
                                                    </li>
                                                </ul>
                                            </li>

                                            <li class="header__sub--menu__items">
                                                <a href="/transmission-parts"
                                                    class="header__sub--menu__link">Transmission Parts
                                                    <svg class="menu__arrowdown--icon"
                                                        xmlns="http://www.w3.org/2000/svg" width="12"
                                                        height="7.41" viewBox="0 0 12 7.41">
                                                        <path d="M16.59,8.59,12,13.17,7.41,8.59,6,10l6,6,6-6Z"
                                                            transform="translate(-6 -8.59)" fill="currentColor"
                                                            opacity="0.7" />
                                                    </svg>
                                                </a>
                                                <ul class="header__sub--menu">
                                                    <li class="header__sub--menu__items"><a
                                                            href="/transmission-parts/transmission"
                                                            class="header__sub--menu__link">Transmission</a></li>
                                                    <li class="header__sub--menu__items"><a
                                                            href="/transmission-parts/drive-shaft"
                                                            class="header__sub--menu__link">Drive Shaft</a></li>
                                                    <li class="header__sub--menu__items"><a
                                                            href="/transmission-parts/axle-shaft"
                                                            class="header__sub--menu__link">Axle Shaft</a></li>
                                                    <li class="header__sub--menu__items"><a
                                                            href="/transmission-parts/floor-shifter"
                                                            class="header__sub--menu__link">Floor Shifter</a></li>
                                                    <li class="header__sub--menu__items"><a
                                                            href="/transmission-parts/cradle"
                                                            class="header__sub--menu__link">Cradle</a></li>
                                                    <li class="header__sub--menu__items"><a
                                                            href="/transmission-parts/crossmember"
                                                            class="header__sub--menu__link">Crossmember</a></li>
                                                    <li class="header__sub--menu__items"><a
                                                            href="/transmission-parts/subframe"
                                                            class="header__sub--menu__link">Subframe</a></li>
                                                </ul>

                                            </li>

                                            <li class="header__sub--menu__items">
                                                <a href="/suspension-parts" class="header__sub--menu__link">Suspension
                                                    <svg class="menu__arrowdown--icon"
                                                        xmlns="http://www.w3.org/2000/svg" width="12"
                                                        height="7.41" viewBox="0 0 12 7.41">
                                                        <path d="M16.59,8.59,12,13.17,7.41,8.59,6,10l6,6,6-6Z"
                                                            transform="translate(-6 -8.59)" fill="currentColor"
                                                            opacity="0.7" />
                                                    </svg>
                                                </a>
                                                <ul class="header__sub--menu">
                                                    <li class="header__sub--menu__items"><a
                                                            href="/suspension-parts/shock-absorber"
                                                            class="header__sub--menu__link">Shock Absorber</a></li>
                                                    <li class="header__sub--menu__items"><a
                                                            href="/suspension-parts/rack-pinion"
                                                            class="header__sub--menu__link">Rack & Pinion</a></li>
                                                    <li class="header__sub--menu__items"><a
                                                            href="/suspension-parts/control-arms"
                                                            class="header__sub--menu__link">Control Arms</a></li>
                                                    <li class="header__sub--menu__items"><a
                                                            href="/suspension-parts/braker-caliper-rotors"
                                                            class="header__sub--menu__link">Braker Caliper/Rotors</a>
                                                    </li>
                                                    <li class="header__sub--menu__items"><a
                                                            href="/suspension-parts/power-steering-pump"
                                                            class="header__sub--menu__link">Power Steering Pump</a>
                                                    </li>
                                                    <li class="header__sub--menu__items"><a
                                                            href="/suspension-parts/steering-column"
                                                            class="header__sub--menu__link">Steering Column</a></li>
                                                    <li class="header__sub--menu__items"><a
                                                            href="/suspension-parts/strut"
                                                            class="header__sub--menu__link">Strut</a></li>
                                                    <li class="header__sub--menu__items"><a
                                                            href="/suspension-parts/ac-compressor"
                                                            class="header__sub--menu__link">AC Compressor</a></li>
                                                    <li class="header__sub--menu__items"><a
                                                            href="/suspension-parts/ac-condenser"
                                                            class="header__sub--menu__link">AC Condenser</a></li>
                                                    <li class="header__sub--menu__items"><a
                                                            href="/suspension-parts/blower-motor"
                                                            class="header__sub--menu__link">Blower Motor</a></li>
                                                    <li class="header__sub--menu__items"><a
                                                            href="/suspension-parts/ac-heater-control-system"
                                                            class="header__sub--menu__link">AC Heater Control
                                                            System</a></li>
                                                </ul>

                                            </li>
                                            <li class="header__sub--menu__items">
                                                <a href="/electrical-parts" class="header__sub--menu__link">Electrical
                                                    Parts
                                                    <svg class="menu__arrowdown--icon"
                                                        xmlns="http://www.w3.org/2000/svg" width="12"
                                                        height="7.41" viewBox="0 0 12 7.41">
                                                        <path d="M16.59,8.59,12,13.17,7.41,8.59,6,10l6,6,6-6Z"
                                                            transform="translate(-6 -8.59)" fill="currentColor"
                                                            opacity="0.7" />
                                                    </svg>
                                                </a>
                                                <ul class="header__sub--menu">
                                                    <li class="header__sub--menu__items"><a
                                                            href="/electrical-parts/alternator"
                                                            class="header__sub--menu__link">Alternator</a></li>
                                                    <li class="header__sub--menu__items"><a
                                                            href="/electrical-parts/starter"
                                                            class="header__sub--menu__link">Starter</a></li>
                                                    <li class="header__sub--menu__items"><a
                                                            href="/electrical-parts/ignition-switch"
                                                            class="header__sub--menu__link">Ignition Switch</a></li>
                                                    <li class="header__sub--menu__items"><a
                                                            href="/electrical-parts/fuse-box"
                                                            class="header__sub--menu__link">Fuse Box</a></li>
                                                    <li class="header__sub--menu__items"><a
                                                            href="/electrical-parts/instrument-cluster"
                                                            class="header__sub--menu__link">Instrument Cluster</a>
                                                    </li>
                                                    <li class="header__sub--menu__items"><a
                                                            href="/electrical-parts/wiper-motor"
                                                            class="header__sub--menu__link">Wiper Motor</a></li>
                                                    <li class="header__sub--menu__items"><a
                                                            href="/electrical-parts/window-motor-regulator"
                                                            class="header__sub--menu__link">Window Motor &
                                                            Regulator</a></li>
                                                    <li class="header__sub--menu__items"><a
                                                            href="/electrical-parts/cd-player-radio"
                                                            class="header__sub--menu__link">CD Player / Radio</a></li>
                                                    <li class="header__sub--menu__items"><a
                                                            href="/electrical-parts/tail-light"
                                                            class="header__sub--menu__link">Tail Light</a></li>
                                                    <li class="header__sub--menu__items"><a
                                                            href="/electrical-parts/headlight"
                                                            class="header__sub--menu__link">Headlight</a></li>
                                                    <li class="header__sub--menu__items"><a
                                                            href="/electrical-parts/fog-lamps"
                                                            class="header__sub--menu__link">Fog Lamps</a></li>
                                                    <li class="header__sub--menu__items"><a
                                                            href="/electrical-parts/abs-unit"
                                                            class="header__sub--menu__link">ABS Unit</a></li>
                                                </ul>

                                            </li>
                                            <li class="header__sub--menu__items">
                                                <a href="/exterior-parts" class="header__sub--menu__link">Exterior
                                                    Body
                                                    Parts
                                                    <svg class="menu__arrowdown--icon"
                                                        xmlns="http://www.w3.org/2000/svg" width="12"
                                                        height="7.41" viewBox="0 0 12 7.41">
                                                        <path d="M16.59,8.59,12,13.17,7.41,8.59,6,10l6,6,6-6Z"
                                                            transform="translate(-6 -8.59)" fill="currentColor"
                                                            opacity="0.7" />
                                                    </svg>
                                                </a>
                                                <ul class="header__sub--menu">
                                                    <li class="header__sub--menu__items"><a
                                                            href="/exterior-parts/bumpers"
                                                            class="header__sub--menu__link">Bumpers</a></li>
                                                    <li class="header__sub--menu__items"><a
                                                            href="/exterior-parts/fenders"
                                                            class="header__sub--menu__link">Fenders</a></li>
                                                    <li class="header__sub--menu__items"><a
                                                            href="/exterior-parts/hood"
                                                            class="header__sub--menu__link">Hood</a></li>
                                                    <li class="header__sub--menu__items"><a
                                                            href="/exterior-parts/doors"
                                                            class="header__sub--menu__link">Doors</a></li>
                                                    <li class="header__sub--menu__items"><a
                                                            href="/exterior-parts/mirrors"
                                                            class="header__sub--menu__link">Mirrors</a></li>
                                                    <li class="header__sub--menu__items"><a
                                                            href="/exterior-parts/grilles"
                                                            class="header__sub--menu__link">Grilles</a></li>
                                                    <li class="header__sub--menu__items"><a
                                                            href="/exterior-parts/fender-flare"
                                                            class="header__sub--menu__link">Fender Flare</a></li>
                                                    <li class="header__sub--menu__items"><a
                                                            href="/exterior-parts/wheel-rim"
                                                            class="header__sub--menu__link">Wheel / Rim</a></li>
                                                    <li class="header__sub--menu__items"><a
                                                            href="/exterior-parts/wheel-hub"
                                                            class="header__sub--menu__link">Wheel Hub</a></li>
                                                </ul>

                                            </li>
                                            <li class="header__sub--menu__items">
                                                <a href="/interior-parts" class="header__sub--menu__link">Interior
                                                    Body
                                                    Parts
                                                    <svg class="menu__arrowdown--icon"
                                                        xmlns="http://www.w3.org/2000/svg" width="12"
                                                        height="7.41" viewBox="0 0 12 7.41">
                                                        <path d="M16.59,8.59,12,13.17,7.41,8.59,6,10l6,6,6-6Z"
                                                            transform="translate(-6 -8.59)" fill="currentColor"
                                                            opacity="0.7" />
                                                    </svg>
                                                </a>
                                                <ul class="header__sub--menu">
                                                    <li class="header__sub--menu__items"><a
                                                            href="/interior-parts/seats"
                                                            class="header__sub--menu__link">Seats</a></li>
                                                    <li class="header__sub--menu__items"><a
                                                            href="/interior-parts/seat-belts"
                                                            class="header__sub--menu__link">Seat Belts</a></li>
                                                    <li class="header__sub--menu__items"><a
                                                            href="/interior-parts/center-console"
                                                            class="header__sub--menu__link">Center Console</a></li>
                                                    <li class="header__sub--menu__items"><a
                                                            href="/interior-parts/sun-visor"
                                                            class="header__sub--menu__link">Sun Visor</a></li>
                                                    <li class="header__sub--menu__items"><a
                                                            href="/interior-parts/air-bag"
                                                            class="header__sub--menu__link">Air Bag</a></li>
                                                    <li class="header__sub--menu__items"><a
                                                            href="/interior-parts/steering"
                                                            class="header__sub--menu__link">Steering</a></li>
                                                </ul>

                                            </li>

                                        </ul>
                                    </li>
                                    <li class="header__menu--items">
                                        <a class="header__menu--link text-black" href="/blogs">Blogs</a>
                                    </li>
                                    <li class="header__menu--items">
                                        <a class="header__menu--link text-black" href="/contact">Contact Us</a>
                                    </li>
                                    <a href="tel:+18555815811"
                                        style="height:40px;
                                                background:#ff4e21;
                                                color:#fff;
                                                border-radius:50px;
                                                font-size:18px;
                                                font-weight:600;
                                                border:none;
                                                cursor:pointer;
                                                display:inline-flex;
                                                align-items:center;
                                                gap:8px;
                                                padding:0 18px;
                                                text-decoration:none;
                                                transition:background 0.3s ease;
                                                position:absolute;
                                                right:15px;
                                                top:50%;
                                                transform:translateY(-50%);">
                                        <i class="fa-solid fa-phone" style="font-size:16px;"></i>
                                        +1 (855) 581-5811
                                    </a>
                                </ul>
                            </nav>
                        </div>
                        <!-- Call Now Button -->
                        @if (!request()->is('home'))
                            <a href="tel:+1 (855) 581-5811" class="mobile-call-button"
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
                                    margin-left: -76px;">
                                <i class="fas fa-phone" style="margin-right: 8px;"></i>
                                Call Now
                            </a>
                        @endif
                    </div>
                    {{-- Header 1 end --}}
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div class="offcanvas__header">
            <div class="offcanvas__inner">
                <div class="offcanvas__logo">
                    <a class="offcanvas__logo_link" href="/">
                        <img src="/frontend/my_img/logo/logo.webp" alt="Logo" width="158" height="36">
                    </a>

                    <button class="offcanvas__close--btn" data-offcanvas>close</button>
                </div>
                <nav class="offcanvas__menu">
                    <ul class="offcanvas__menu_ul">
                        <li class="offcanvas__menu_li">
                            <a class="offcanvas__menu_item" href="/">Home</a>
                        </li>
                        <li class="offcanvas__menu_li"><a class="offcanvas__menu_item" href="/about">About Us</a>
                        </li>
                        <!-- Auto Parts with submenus -->
                        <li class="offcanvas__menu_li">
                            <a class="offcanvas__menu_item" href="#0">Auto Parts</a>
                            <ul class="offcanvas__submenu_ul">
                                <li class="offcanvas__submenu_li">
                                    <a class="offcanvas__submenu_item" href="#0">Engine Parts</a>
                                    <ul class="offcanvas__submenu_ul">
                                        <li><a class="offcanvas__submenu_item" href="/engine-parts/engine">Engine</a>
                                        </li>
                                        <li><a class="offcanvas__submenu_item"
                                                href="/engine-parts/cylinder-head">Cylinder Head</a>
                                        </li>
                                        <li><a class="offcanvas__submenu_item"
                                                href="/engine-parts/camshaft">Camshaft</a></li>
                                        <li><a class="offcanvas__submenu_item"
                                                href="/engine-parts/turbocharger">Turbocharger</a>
                                        </li>
                                        <li><a class="offcanvas__submenu_item"
                                                href="/engine-parts/supercharger">Supercharger</a>
                                        </li>
                                        <li><a class="offcanvas__submenu_item"
                                                href="/engine-parts/intake-manifold">Intake
                                                Manifold</a></li>
                                        <li><a class="offcanvas__submenu_item"
                                                href="/engine-parts/exhaust-manifold">Exhaust
                                                Manifold</a></li>
                                        <li><a class="offcanvas__submenu_item"
                                                href="/engine-parts/throttle-body">Throttle Body</a>
                                        </li>
                                        <li><a class="offcanvas__submenu_item"
                                                href="/engine-parts/engine-mount">Engine Mount</a>
                                        </li>
                                        <li><a class="offcanvas__submenu_item" href="/engine-parts/valve-cover">Valve
                                                Cover</a>
                                        </li>
                                        <li><a class="offcanvas__submenu_item" href="/engine-parts/fuel-pump">Fuel
                                                Pump</a></li>
                                        <li><a class="offcanvas__submenu_item"
                                                href="/engine-parts/coolant-pump">Coolant Pump</a>
                                        </li>
                                        <li><a class="offcanvas__submenu_item"
                                                href="/engine-parts/radiator">Radiator</a></li>
                                        <li><a class="offcanvas__submenu_item" href="/engine-parts/vacuum-pump">Vacuum
                                                Pump</a>
                                        </li>
                                        <li><a class="offcanvas__submenu_item"
                                                href="/engine-parts/catalytic-converter">Catalytic
                                                Converter</a></li>
                                    </ul>
                                </li>

                                <li class="offcanvas__submenu_li">
                                    <a class="offcanvas__submenu_item" href="#0">Transmission Parts</a>
                                    <ul class="offcanvas__submenu_ul">
                                        <li><a class="offcanvas__submenu_item"
                                                href="/transmission-parts/transmission">Transmission</a>
                                        </li>
                                        <li><a class="offcanvas__submenu_item"
                                                href="/transmission-parts/drive-shaft">Drive Shaft</a>
                                        </li>
                                        <li><a class="offcanvas__submenu_item"
                                                href="/transmission-parts/axle-shaft">Axle Shaft</a></li>
                                        <li><a class="offcanvas__submenu_item"
                                                href="/transmission-parts/floor-shifter">Floor Shifter</a>
                                        </li>
                                        <li><a class="offcanvas__submenu_item"
                                                href="/transmission-parts/cradle">Cradle</a></li>
                                        <li><a class="offcanvas__submenu_item"
                                                href="/transmission-parts/crossmember">Crossmember</a>
                                        </li>
                                        <li><a class="offcanvas__submenu_item"
                                                href="/transmission-parts/subframe">Subframe</a></li>
                                    </ul>
                                </li>

                                <li class="offcanvas__submenu_li">
                                    <a class="offcanvas__submenu_item" href="#0">Suspension</a>
                                    <ul class="offcanvas__submenu_ul">
                                        <li><a class="offcanvas__submenu_item"
                                                href="/suspension-parts/shock-absorber">Shock
                                                Absorber</a></li>
                                        <li><a class="offcanvas__submenu_item"
                                                href="/suspension-parts/rack-pinion">Rack & Pinion</a>
                                        </li>
                                        <li><a class="offcanvas__submenu_item"
                                                href="/suspension-parts/control-arms">Control Arms</a>
                                        </li>
                                        <li><a class="offcanvas__submenu_item"
                                                href="/suspension-parts/braker-caliper-rotors">Braker
                                                Caliper/Rotors</a></li>
                                        <li><a class="offcanvas__submenu_item"
                                                href="/suspension-parts/power-steering-pump">Power
                                                Steering Pump</a></li>
                                        <li><a class="offcanvas__submenu_item"
                                                href="/suspension-parts/steering-column">Steering
                                                Column</a></li>
                                        <li><a class="offcanvas__submenu_item"
                                                href="/suspension-parts/strut">Strut</a></li>
                                        <li><a class="offcanvas__submenu_item"
                                                href="/suspension-parts/ac-compressor">AC Compressor</a>
                                        </li>
                                        <li><a class="offcanvas__submenu_item"
                                                href="/suspension-parts/ac-condenser">AC Condenser</a>
                                        </li>
                                        <li><a class="offcanvas__submenu_item"
                                                href="/suspension-parts/blower-motor">Blower Motor</a>
                                        </li>
                                        <li><a class="offcanvas__submenu_item"
                                                href="/suspension-parts/ac-heater-control-system">AC
                                                Heater Control System</a></li>
                                    </ul>
                                </li>

                                <li class="offcanvas__submenu_li">
                                    <a class="offcanvas__submenu_item" href="#0">Electrical Parts</a>
                                    <ul class="offcanvas__submenu_ul">
                                        <li><a class="offcanvas__submenu_item"
                                                href="/electrical-parts/alternator">Alternator</a></li>
                                        <li><a class="offcanvas__submenu_item"
                                                href="/electrical-parts/starter">Starter</a></li>
                                        <li><a class="offcanvas__submenu_item"
                                                href="/electrical-parts/ignition-switch">Ignition
                                                Switch</a></li>
                                        <li><a class="offcanvas__submenu_item" href="/electrical-parts/fuse-box">Fuse
                                                Box</a></li>
                                        <li><a class="offcanvas__submenu_item"
                                                href="/electrical-parts/instrument-cluster">Instrument
                                                Cluster</a></li>
                                        <li><a class="offcanvas__submenu_item"
                                                href="/electrical-parts/wiper-motor">Wiper Motor</a>
                                        </li>
                                        <li><a class="offcanvas__submenu_item"
                                                href="/electrical-parts/window-motor-regulator">Window
                                                Motor & Regulator</a></li>
                                        <li><a class="offcanvas__submenu_item"
                                                href="/electrical-parts/cd-player-radio">CD Player /
                                                Radio</a></li>
                                        <li><a class="offcanvas__submenu_item"
                                                href="/electrical-parts/tail-light">Tail Light</a></li>
                                        <li><a class="offcanvas__submenu_item"
                                                href="/electrical-parts/headlight">Headlight</a></li>
                                        <li><a class="offcanvas__submenu_item" href="/electrical-parts/fog-lamps">Fog
                                                Lamps</a></li>
                                        <li><a class="offcanvas__submenu_item" href="/electrical-parts/abs-unit">ABS
                                                Unit</a></li>
                                    </ul>
                                </li>

                                <li class="offcanvas__submenu_li">
                                    <a class="offcanvas__submenu_item" href="#0">Exterior Body Parts</a>
                                    <ul class="offcanvas__submenu_ul">
                                        <li><a class="offcanvas__submenu_item"
                                                href="/exterior-parts/bumpers">Bumpers</a></li>
                                        <li><a class="offcanvas__submenu_item"
                                                href="/exterior-parts/fenders">Fenders</a></li>
                                        <li><a class="offcanvas__submenu_item" href="/exterior-parts/hood">Hood</a>
                                        </li>
                                        <li><a class="offcanvas__submenu_item" href="/exterior-parts/doors">Doors</a>
                                        </li>
                                        <li><a class="offcanvas__submenu_item"
                                                href="/exterior-parts/mirrors">Mirrors</a></li>
                                        <li><a class="offcanvas__submenu_item"
                                                href="/exterior-parts/grilles">Grilles</a></li>
                                        <li><a class="offcanvas__submenu_item"
                                                href="/exterior-parts/fender-flare">Fender Flare</a>
                                        </li>
                                        <li><a class="offcanvas__submenu_item" href="/exterior-parts/wheel-rim">Wheel
                                                / Rim</a></li>
                                        <li><a class="offcanvas__submenu_item" href="/exterior-parts/wheel-hub">Wheel
                                                Hub</a></li>
                                    </ul>
                                </li>

                                <li class="offcanvas__submenu_li">
                                    <a class="offcanvas__submenu_item" href="#0">Interior Body Parts</a>
                                    <ul class="offcanvas__submenu_ul">
                                        <li><a class="offcanvas__submenu_item" href="/interior-parts/seats">Seats</a>
                                        </li>
                                        <li><a class="offcanvas__submenu_item" href="/interior-parts/seat-belts">Seat
                                                Belts</a></li>
                                        <li><a class="offcanvas__submenu_item"
                                                href="/interior-parts/center-console">Center
                                                Console</a></li>
                                        <li><a class="offcanvas__submenu_item" href="/interior-parts/sun-visor">Sun
                                                Visor</a></li>
                                        <li><a class="offcanvas__submenu_item" href="/interior-parts/air-bag">Air
                                                Bag</a></li>
                                        <li><a class="offcanvas__submenu_item"
                                                href="/interior-parts/steering">Steering</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <!-- End Auto Parts -->
                        <li class="offcanvas__menu_li"><a class="offcanvas__menu_item" href="/blogs">Blogs</a>
                        </li>
                        <li class="offcanvas__menu_li"><a class="offcanvas__menu_item" href="/contact">Contact</a>
                        </li>
                    </ul>

                </nav>
            </div>
        </div>


        <!-- End Offcanvas header menu -->
    </header>
    @yield(section: 'content')

    <!-- Start footer section -->

    <!-- Start News letter popup -->
    <div class="newsletter__popup" data-animation="slideInUp" id="customNewsletterPopup" >
        <a href="tel:+18555815811">
        <div id="boxes" class="newsletter__popup--inner">
            <button class="newsletter__popup--close__btn" aria-label="Close" id="popupCloseBtn">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 512 512">
                    <path fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="40" d="M368 368L144 144M368 144L144 368"></path>
                </svg>
            </button>
            <div class="box newsletter__popup--box d-flex align-items-center">
                <div class="newsletter__popup--thumbnail">
                    <img class="newsletter__popup--thumbnail__img display-block" src="/frontend/my_img/pop-up.webp"
                        alt="newsletter-popup-thumb">
                    <div class="popup-badge">
                        <span class="pulse-dot"></span> ⚡ LIMITED TIME OFFER
                    </div>
                </div>
                <div class="newsletter__popup--box__right">
                    <div class="popup-tag">
                        <i class="fas fa-fire-alt"></i> EXCLUSIVE DEAL ALERT
                    </div>
                    <h2 class="newsletter__popup--title">
                        Unlock Up To <span class="highlight-text">35% OFF</span> Auto Parts!
                    </h2>
                    <div class="newsletter__popup--content">
                        <p class="newsletter__popup--content--desc">
                            Speak directly with our certified auto parts specialists right now to claim your exclusive
                            discount and check live inventory.
                        </p>

                        <!-- Interactive Feature Highlights -->
                        <div class="popup-features">
                            <div class="feature-item"><i class="fas fa-check-circle"></i> Genuine OEM & Aftermarket
                                Parts</div>
                            <div class="feature-item"><i class="fas fa-shipping-fast"></i> Express Nationwide Delivery
                            </div>
                            <div class="feature-item"><i class="fas fa-shield-alt"></i> Guaranteed Exact Vehicle
                                Fitment</div>
                        </div>

                        <!-- Live Countdown Timer -->
                        <div class="popup-countdown-header"><i class="far fa-clock"></i> Offer Expires In:</div>
                        <div class="popup-countdown" id="popupCountdown">
                            <div class="countdown-box">
                                <span class="countdown-value" id="cd-hours">01</span>
                                <span class="countdown-label">Hours</span>
                            </div>
                            <span class="countdown-sep">:</span>
                            <div class="countdown-box">
                                <span class="countdown-value" id="cd-minutes">45</span>
                                <span class="countdown-label">Min</span>
                            </div>
                            <span class="countdown-sep">:</span>
                            <div class="countdown-box">
                                <span class="countdown-value" id="cd-seconds">00</span>
                                <span class="countdown-label">Sec</span>
                            </div>
                        </div>

                        <div class="newsletter__popup--subscribe" id="frm_subscribe">
                            <a class="popup-call-btn" href="tel:+1 (855) 581-5811">
                                <div class="btn-text-group">
                                    <span class="sub-text">CALL OUR SPECIALISTS NOW</span>
                                    <span class="main-number">+1 (855) 581-5811</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </a>
    </div>
    <!-- End News letter popup -->
     

    <style>
        /* Backdrop & Blur Overlay */
        .newsletter__popup {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            z-index: 99999;
            background: rgba(10, 15, 29, 0.75);
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
            display: none !important;
            align-items: center;
            justify-content: center;
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.35s ease, visibility 0.35s ease;
        }

        .newsletter__popup.newsletter__show {
            display: flex !important;
            opacity: 1;
            visibility: visible;
        }

        /* Modal Container */
        .newsletter__popup--inner {
            position: relative;
            width: 820px;
            max-width: 92vw;
            background: #ffffff;
            border-radius: 20px;
            box-shadow: 0 25px 60px rgba(0, 0, 0, 0.4), 0 0 40px rgba(255, 78, 33, 0.15);
            border: 1px solid rgba(255, 78, 33, 0.15);
            overflow: hidden;
            animation: popupZoomIn 0.4s cubic-bezier(0.16, 1, 0.3, 1);
        }

        @keyframes popupZoomIn {
            from {
                transform: scale(0.85) translateY(20px);
                opacity: 0;
            }

            to {
                transform: scale(1) translateY(0);
                opacity: 1;
            }
        }

        /* Close Button */
        .newsletter__popup--close__btn {
            position: absolute;
            top: 15px;
            right: 15px;
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background: #f1f5f9;
            border: 1px solid #e2e8f0;
            color: #475569;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            z-index: 10;
            transition: all 0.25s ease;
        }

        .newsletter__popup--close__btn:hover {
            background: #ff4e21;
            color: #ffffff;
            border-color: #ff4e21;
            transform: rotate(90deg) scale(1.1);
        }

        /* Thumbnail Image Container */
        .newsletter__popup--thumbnail {
            position: relative;
            width: 340px;
            height: 420px;
            flex-shrink: 0;
            overflow: hidden;
        }

        .newsletter__popup--thumbnail__img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            transition: transform 0.6s ease;
        }

        .newsletter__popup--inner:hover .newsletter__popup--thumbnail__img {
            transform: scale(1.04);
        }

        /* Floating Badge on Image */
        .popup-badge {
            position: absolute;
            bottom: 16px;
            left: 16px;
            background: rgba(254, 254, 254, 0.88);
            backdrop-filter: blur(4px);
            color: #ff4e21;
            border: 1px solid rgba(255, 78, 33, 0.4);
            padding: 6px 14px;
            border-radius: 30px;
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 0.8px;
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .pulse-dot {
            width: 8px;
            height: 8px;
            background-color: #ff4e21;
            border-radius: 50%;
            box-shadow: 0 0 0 rgba(255, 78, 33, 0.8);
            animation: pulseDot 1.5s infinite;
        }

        @keyframes pulseDot {
            0% {
                box-shadow: 0 0 0 0 rgba(255, 78, 33, 0.8);
            }

            70% {
                box-shadow: 0 0 0 8px rgba(255, 78, 33, 0);
            }

            100% {
                box-shadow: 0 0 0 0 rgba(255, 78, 33, 0);
            }
        }

        /* Right Content Area */
        .newsletter__popup--box__right {
            padding: 30px 32px 30px 24px;
            flex-grow: 1;
            text-align: left;
        }

        .popup-tag {
            display: inline-block;
            font-size: 11px;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: #ff4e21;
            background: #e8f0fe;
            padding: 4px 10px;
            border-radius: 6px;
            margin-bottom: 10px;
        }

        .newsletter__popup--title {
            font-size: 24px;
            font-weight: 800;
            color: #0f172a;
            line-height: 1.25;
            margin-bottom: 10px;
        }

        .highlight-text {
            color: #ff4e21;
            background: #ff4e21;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .newsletter__popup--content--desc {
            font-size: 13px;
            color: #475569;
            line-height: 1.5;
            margin-bottom: 14px;
        }

        /* Feature Bullet Points */
        .popup-features {
            display: flex;
            flex-direction: column;
            gap: 6px;
            margin-bottom: 16px;
        }

        .feature-item {
            font-size: 12px;
            font-weight: 600;
            color: #1e293b;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .feature-item i {
            color: #ff4e21;
            font-size: 14px;
        }

        /* Countdown Timer Styling */
        .popup-countdown-header {
            font-size: 11px;
            font-weight: 700;
            text-transform: uppercase;
            color: #64748b;
            letter-spacing: 0.5px;
            margin-bottom: 6px;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .popup-countdown {
            display: flex;
            align-items: center;
            gap: 8px;
            margin-bottom: 20px;
        }

        .countdown-box {
            background: rgba(232, 240, 254, 1);
            color: #ffffff;
            border-radius: 10px;
            padding: 8px 10px;
            min-width: 58px;
            text-align: center;
            box-shadow: 0 4px 12px rgba(15, 23, 42, 0.15);
        }

        .countdown-value {
            display: block;
            font-size: 20px;
            font-weight: 800;
            color: #ff4e21;
            font-variant-numeric: tabular-nums;
        }

        .countdown-label {
            display: block;
            font-size: 9px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            color: #0f172a;
        }

        .countdown-sep {
            font-size: 20px;
            font-weight: 800;
            color: #0f172a;
        }

        /* Call CTA Button */
        .popup-call-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 12px;
            background: #ff4e21;
            color: #ffffff !important;
            padding: 12px 20px;
            border-radius: 12px;
            text-decoration: none !important;
            box-shadow: 0 8px 20px rgba(255, 78, 33, 0.35);
            transition: all 0.3s ease;
            animation: btnPulse 2s infinite;
        }

        @keyframes btnPulse {
            0% {
                box-shadow: 0 0 0 0 rgba(255, 78, 33, 0.5);
            }

            70% {
                box-shadow: 0 0 0 14px rgba(255, 78, 33, 0);
            }

            100% {
                box-shadow: 0 0 0 0 rgba(255, 78, 33, 0);
            }
        }

        .popup-call-btn:hover {
            background: linear-gradient(135deg, #4285f4 0%, #ff4e21 100%);
            transform: translateY(-2px);
            box-shadow: 0 12px 25px rgba(255, 78, 33, 0.45);
        }

        .phone-icon-anim {
            font-size: 22px;
            animation: phoneShake 2s infinite ease-in-out;
        }

        @keyframes phoneShake {

            0%,
            100% {
                transform: rotate(0deg);
            }

            10%,
            30%,
            50% {
                transform: rotate(-10deg);
            }

            20%,
            40% {
                transform: rotate(10deg);
            }

            60% {
                transform: rotate(0deg);
            }
        }

        .btn-text-group {
            display: flex;
            flex-direction: column;
            text-align: left;
        }

        .btn-text-group .sub-text {
            font-size: 10px;
            font-weight: 700;
            letter-spacing: 0.5px;
            opacity: 0.9;
        }

        .btn-text-group .main-number {
            font-size: 18px;
            font-weight: 800;
            line-height: 1.1;
        }

        /* Mobile Responsive Overrides */
        @media (max-width: 768px) {
            .newsletter__popup--inner {
                width: 92vw !important;
                max-width: 92vw !important;
                border-radius: 16px;
            }

            .newsletter__popup--thumbnail {
                display: none;
            }

            .newsletter__popup--box__right {
                padding: 24px 20px;
                text-align: center;
            }

            .popup-features {
                align-items: center;
            }

            .popup-countdown {
                justify-content: center;
            }

            .btn-text-group {
                text-align: center;
            }

            .popup-call-btn {
                padding: 12px 14px;
            }

            .btn-text-group .main-number {
                font-size: 17px;
            }

            .newsletter__popup--close__btn {
                position: absolute !important;
                top: 12px;
                right: 12px;
            }
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let isPopupClosed = false;
            let isPopupShown = false;
            let popupTimer = null;

            // 1. Prevent clicking outside from closing the popup modal
            document.addEventListener('click', function(e) {
                let popup = document.querySelector('.newsletter__popup');
                if (popup && popup.classList.contains('newsletter__show')) {
                    let closeBtn = e.target.closest('.newsletter__popup--close__btn') || e.target.closest(
                        '#popupCloseBtn');
                    let innerContent = e.target.closest('.newsletter__popup--inner');

                    if (innerContent && !closeBtn) {
                        e.stopPropagation();
                    }

                    if (!innerContent) {
                        e.stopPropagation();
                        e.stopImmediatePropagation();
                        e.preventDefault();
                        return false; // Prevent popup close on backdrop click
                    }
                }
            }, true);

            // Popup controller helper functions
            function showNewsletterPopup() {
                if (isPopupClosed || isPopupShown) return;
                isPopupShown = true;
                let popup = document.querySelector('.newsletter__popup');
                if (popup) {
                    document.body.classList.add('overlay__active');
                    popup.classList.add('newsletter__show');
                }
            }

            function hideNewsletterPopup() {
                isPopupClosed = true;
                if (popupTimer) {
                    clearTimeout(popupTimer);
                    popupTimer = null;
                }
                let popup = document.querySelector('.newsletter__popup');
                if (popup) {
                    document.body.classList.remove('overlay__active');
                    popup.classList.remove('newsletter__show');
                }
            }

            // Close button listener — closes it for good, never shows again on this page load
            document.addEventListener('click', function(e) {
                let closeBtn = e.target.closest('.newsletter__popup--close__btn') || e.target.closest(
                    '#popupCloseBtn');
                if (closeBtn) {
                    e.preventDefault();
                    hideNewsletterPopup();
                }
            });

            // 2. Automatically show once per page load after 15 seconds
            popupTimer = setTimeout(showNewsletterPopup, 10000);

            // 3. Live Ticking Countdown Timer
            let totalSeconds = 1 * 3600 + 45 * 60 + 30; // 1 hr 45 min 30 sec
            setInterval(function() {
                if (totalSeconds > 0) {
                    totalSeconds--;
                } else {
                    totalSeconds = 1 * 3600 + 45 * 60 + 30;
                }

                let hrs = Math.floor(totalSeconds / 3600);
                let mins = Math.floor((totalSeconds % 3600) / 60);
                let secs = totalSeconds % 60;

                let hEl = document.getElementById('cd-hours');
                let mEl = document.getElementById('cd-minutes');
                let sEl = document.getElementById('cd-seconds');

                if (hEl) hEl.textContent = hrs < 10 ? '0' + hrs : hrs;
                if (mEl) mEl.textContent = mins < 10 ? '0' + mins : mins;
                if (sEl) sEl.textContent = secs < 10 ? '0' + secs : secs;
            }, 1000);
        });
    </script>

    <footer class="footer__section footer__bg hide-desktop hide-mobile h-d h-m">
        <div class="container">
            <div class="newsletter__area">
                <div class="newsletter__inner d-flex justify-content-between align-items-center">
                    <div class="newsletter__content">
                        <h2 class="newsletter__title"> <span class="highlight" style="color: #ff4e21">Spare Part Zone</span> Your
                            Trusted Auto Parts Partner</h2>
                        <p class="newsletter__desc" style="color:#ffff;">Quality You Can Rely On, Performance You Can
                            Feel.</p>
                    </div>
                </div>
            </div>
            <div class="main__footer">
                <div class="row ">
                    <div class="col-lg-6 col-md-10">
                        <div class="footer__widget">
                            <h2 class="footer__widget--title" style="color: #ff4e21;">About Us <button
                                    class="footer__widget--button" aria-label="footer widget button"></button>
                                <svg class="footer__widget--title__arrowdown--icon" xmlns="http://www.w3.org/2000/svg"
                                    width="12.355" height="8.394" viewBox="0 0 10.355 6.394">
                                    <path d="M15.138,8.59l-3.961,3.952L7.217,8.59,6,9.807l5.178,5.178,5.178-5.178Z"
                                        transform="translate(-6 -8.59)" fill="currentColor"></path>
                                </svg>
                            </h2>
                            <div class="footer__widget--inner">
                                <p class="footer__widget--desc"><span class="highlight"
                                        style="color: #ff4e21;">Spare Part Zone</span> is
                                    your trusted source for
                                    high-quality automotive components and accessories. We are committed to providing
                                    reliable products, excellent customer service, and fast shipping to keep your
                                    vehicle running smoothly.</p>
                                @if (!request()->is('home'))
                                    <ul class="social__share footer__social d-flex">
                                        <li class="social__share--list">
                                            <a class="social__share--icon__style2" target="_blank"
                                                href="https://www.facebook.com/">
                                                <svg width="11" height="17" viewBox="0 0 9 15" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M7.62891 8.625L8.01172 6.10938H5.57812V4.46875C5.57812 3.75781 5.90625 3.10156 7 3.10156H8.12109V0.941406C8.12109 0.941406 7.10938 0.75 6.15234 0.75C4.15625 0.75 2.84375 1.98047 2.84375 4.16797V6.10938H0.601562V8.625H2.84375V14.75H5.57812V8.625H7.62891Z"
                                                        fill="currentColor" />
                                                </svg>
                                                <span class="visually-hidden">Facebook</span>
                                            </a>
                                        </li>
                                        <li class="social__share--list">
                                            <a class="social__share--icon__style2" target="_blank"
                                                href="https://twitter.com/">
                                                <svg width="16" height="14" viewBox="0 0 14 12"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M12.5508 2.90625C13.0977 2.49609 13.5898 2.00391 13.9727 1.42969C13.4805 1.64844 12.9062 1.8125 12.332 1.86719C12.9336 1.51172 13.3711 0.964844 13.5898 0.28125C13.043 0.609375 12.4141 0.855469 11.7852 0.992188C11.2383 0.417969 10.5 0.0898438 9.67969 0.0898438C8.09375 0.0898438 6.80859 1.375 6.80859 2.96094C6.80859 3.17969 6.83594 3.39844 6.89062 3.61719C4.51172 3.48047 2.37891 2.33203 0.957031 0.609375C0.710938 1.01953 0.574219 1.51172 0.574219 2.05859C0.574219 3.04297 1.06641 3.91797 1.85938 4.4375C1.39453 4.41016 0.929688 4.30078 0.546875 4.08203V4.10938C0.546875 5.50391 1.53125 6.65234 2.84375 6.92578C2.625 6.98047 2.35156 7.03516 2.10547 7.03516C1.91406 7.03516 1.75 7.00781 1.55859 6.98047C1.91406 8.12891 2.98047 8.94922 4.23828 8.97656C3.25391 9.74219 2.02344 10.207 0.683594 10.207C0.4375 10.207 0.21875 10.1797 0 10.1523C1.25781 10.9727 2.76172 11.4375 4.40234 11.4375C9.67969 11.4375 12.5508 7.08984 12.5508 3.28906C12.5508 3.15234 12.5508 3.04297 12.5508 2.90625Z"
                                                        fill="currentColor" />
                                                </svg>
                                                <span class="visually-hidden">Twitter</span>
                                            </a>
                                        </li>
                                        <li class="social__share--list">
                                            <a class="social__share--icon__style2" target="_blank"
                                                href="https://www.instagram.com/">
                                                <svg width="16" height="15" viewBox="0 0 14 13"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M7.125 3.60547C5.375 3.60547 3.98047 5.02734 3.98047 6.75C3.98047 8.5 5.375 9.89453 7.125 9.89453C8.84766 9.89453 10.2695 8.5 10.2695 6.75C10.2695 5.02734 8.84766 3.60547 7.125 3.60547ZM7.125 8.80078C6.00391 8.80078 5.07422 7.89844 5.07422 6.75C5.07422 5.62891 5.97656 4.72656 7.125 4.72656C8.24609 4.72656 9.14844 5.62891 9.14844 6.75C9.14844 7.89844 8.24609 8.80078 7.125 8.80078ZM11.1172 3.49609C11.1172 3.08594 10.7891 2.75781 10.3789 2.75781C9.96875 2.75781 9.64062 3.08594 10.3789 3.49609C9.64062 3.90625 9.96875 4.23438 10.3789 4.23438C10.7891 4.23438 11.1172 3.90625 11.1172 3.49609ZM13.1953 4.23438C13.1406 3.25 12.9219 2.375 12.2109 1.66406C11.5 0.953125 10.625 0.734375 9.64062 0.679688C8.62891 0.625 5.59375 0.625 4.58203 0.679688C3.59766 0.734375 2.75 0.953125 2.01172 1.66406C1.30078 2.375 1.08203 3.25 1.02734 4.23438C0.972656 5.24609 0.972656 8.28125 1.02734 9.29297C1.08203 10.2773 1.30078 11.125 2.01172 11.8633C2.75 12.5742 3.59766 12.793 4.58203 12.8477C5.59375 12.9023 8.62891 12.9023 9.64062 12.8477C10.625 12.793 11.5 12.5742 12.2109 11.8633C12.9219 11.125 13.1406 10.2773 13.1953 9.29297C13.25 8.28125 13.25 5.24609 13.1953 4.23438ZM11.8828 10.3594C11.6914 10.9062 11.2539 11.3164 10.7344 11.5352C9.91406 11.8633 8 11.7812 7.125 11.7812C6.22266 11.7812 4.30859 11.8633 3.51562 11.5352C2.96875 11.3164 2.55859 10.9062 2.33984 10.3594C2.01172 9.56641 2.09375 7.65234 2.09375 6.75C2.09375 5.875 2.01172 3.96094 2.09375 3.14062C2.55859 2.62109 2.96875 2.21094 3.51562 1.99219C4.30859 1.66406 6.22266 1.74609 7.125 1.74609C8 1.74609 9.91406 1.66406 10.7344 1.99219C11.2539 2.18359 11.6641 2.62109 11.8828 3.14062C12.2109 3.96094 12.1289 5.875 12.1289 6.75C12.1289 7.65234 12.2109 9.56641 11.8828 10.3594Z"
                                                        fill="currentColor" />
                                                </svg>
                                                <span class="visually-hidden">Instagram</span>
                                            </a>
                                        </li>
                                        <li class="social__share--list">
                                            <a class="social__share--icon__style2" target="_blank"
                                                href="https://www.pinterest.com/">
                                                <svg width="16" height="17" viewBox="0 0 14 15"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M13.5625 7.75C13.5625 4.00391 10.5273 0.96875 6.78125 0.96875C3.03516 0.96875 0 4.00391 0 7.75C0 10.6484 1.77734 13.082 4.29297 14.0664C4.23828 13.5469 4.18359 12.7266 4.32031 12.125C4.45703 11.6055 5.11328 8.76172 5.11328 8.76172C5.11328 8.76172 4.92188 8.35156 4.92188 7.75C4.92188 6.82031 5.46875 6.10938 6.15234 6.10938C6.72656 6.10938 7 6.54688 7 7.06641C7 7.64062 6.61719 8.51562 6.42578 9.33594C6.28906 9.99219 6.78125 10.5391 7.4375 10.5391C8.64062 10.5391 9.57031 9.28125 9.57031 7.44922C9.57031 5.80859 8.39453 4.6875 6.75391 4.6875C4.8125 4.6875 3.69141 6.13672 3.69141 7.61328C3.69141 8.21484 3.91016 8.84375 4.18359 9.17188C4.23828 9.22656 4.23828 9.30859 4.23828 9.36328C4.18359 9.58203 4.04688 10.0469 4.04688 10.1289C4.01953 10.2656 3.9375 10.293 3.80078 10.2383C2.95312 9.82812 2.43359 8.59766 2.43359 7.58594C2.43359 5.45312 3.99219 3.48438 6.91797 3.48438C9.26953 3.48438 11.1016 5.17969 11.1016 7.42188C11.1016 9.74609 9.625 11.6328 7.57422 11.6328C6.89062 11.6328 6.23438 11.2773 6.01562 10.8398C6.01562 10.8398 5.6875 12.1523 5.60547 12.4531C5.44141 13.0547 5.03125 13.793 4.75781 14.2305C5.38672 14.4492 6.07031 14.5312 6.78125 14.5312C10.5273 14.5312 13.5625 11.4961 13.5625 7.75Z"
                                                        fill="currentColor" />
                                                </svg>
                                                <span class="visually-hidden">Pinterest</span>
                                            </a>
                                        </li>
                                    </ul>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-4">
                        <div class="footer__widget">
                            <h2 class="footer__widget--title " style="color: #ff4e21;">Resources <button
                                    class="footer__widget--button" aria-label="footer widget button"></button>
                                <svg class="footer__widget--title__arrowdown--icon" xmlns="http://www.w3.org/2000/svg"
                                    width="12.355" height="8.394" viewBox="0 0 10.355 6.394">
                                    <path d="M15.138,8.59l-3.961,3.952L7.217,8.59,6,9.807l5.178,5.178,5.178-5.178Z"
                                        transform="translate(-6 -8.59)" fill="currentColor"></path>
                                </svg>
                            </h2>
                            <ul class="footer__widget--menu footer__widget--inner">
                                <li class="footer__widget--menu__list"><a class="footer__widget--menu__text"
                                        href="/">Home</a></li>

                                <li class="footer__widget--menu__list"><a class="footer__widget--menu__text"
                                        href="/about">About Us</a></li>

                                <li class="footer__widget--menu__list"><a class="footer__widget--menu__text"
                                        href="/blogs">Blogs</a></li>

                                <li class="footer__widget--menu__list"><a class="footer__widget--menu__text"
                                        href="/contact">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-4">
                        <div class="footer__widget">
                            <h2 class="footer__widget--title " style="color: #ff4e21;">Useful Links <button
                                    class="footer__widget--button" aria-label="footer widget button"></button>
                                <svg class="footer__widget--title__arrowdown--icon" xmlns="http://www.w3.org/2000/svg"
                                    width="12.355" height="8.394" viewBox="0 0 10.355 6.394">
                                    <path d="M15.138,8.59l-3.961,3.952L7.217,8.59,6,9.807l5.178,5.178,5.178-5.178Z"
                                        transform="translate(-6 -8.59)" fill="currentColor"></path>
                                </svg>
                            </h2>
                            <ul class="footer__widget--menu footer__widget--inner">

                                <li class="footer__widget--menu__list"><a class="footer__widget--menu__text"
                                        href="/privacy-policy">Privacy Policy</a></li>
                                <li class="footer__widget--menu__list"><a class="footer__widget--menu__text"
                                        href="/shipping-policy">Shipping Policy</a></li>
                                <li class="footer__widget--menu__list"><a class="footer__widget--menu__text"
                                        href="/return-policy">Return Policy
                                    </a></li>
                                <li class="footer__widget--menu__list"><a class="footer__widget--menu__text"
                                        href="/terms-and-condition">Terms and conditions
                                    </a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-4">
                        <div class="footer__widget">
                            <h2 class="footer__widget--title " style="color: #ff4e21;">FIND PARTS <button
                                    class="footer__widget--button" aria-label="footer widget button"></button>
                                <svg class="footer__widget--title__arrowdown--icon" xmlns="http://www.w3.org/2000/svg"
                                    width="12.355" height="8.394" viewBox="0 0 10.355 6.394">
                                    <path d="M15.138,8.59l-3.961,3.952L7.217,8.59,6,9.807l5.178,5.178,5.178-5.178Z"
                                        transform="translate(-6 -8.59)" fill="currentColor"></path>
                                </svg>
                            </h2>
                            <ul class="footer__widget--menu footer__widget--inner">
                                <li class="footer__widget--menu__list"><a class="footer__widget--menu__text"
                                        href="/engine-parts">Engine Parts</a></li>
                                <li class="footer__widget--menu__list"><a class="footer__widget--menu__text"
                                        href="/transmission-parts">Transmission Parts</a></li>
                                <li class="footer__widget--menu__list"><a class="footer__widget--menu__text"
                                        href="/suspension-parts">Suspension Parts</a></li>
                                <li class="footer__widget--menu__list"><a class="footer__widget--menu__text"
                                        href="/electrical-parts">Electrical Parts</a></li>
                                <li class="footer__widget--menu__list"><a class="footer__widget--menu__text"
                                        href="/exterior-parts">Exterior Body Parts</a></li>
                                <li class="footer__widget--menu__list"><a class="footer__widget--menu__text"
                                        href="/interior-parts">Interior Body Parts</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            @if (!request()->is('used-carparts', 'used-auto-parts'))
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
                                    d="M38.3502 23.4334C37.9908 23.4334 37.7003 23.157 37.7003 22.8166V19.1165C37.7003 7.75154 31.0662 1.23356 19.4998 1.23356C7.76363 7.75154 1.30008 7.58444 1.30008 19.1165V22.8166C1.30008 23.157 1.00954 23.4334 0.650178 23.4334C0.290536 23.4334 0 23.157 0 22.8166V19.1165C0 6.96727 7.10774 0 19.5 0C31.8922 0 39 6.96793 39 19.1165V22.8166C39 23.157 38.7094 23.4334 38.3501 23.4334"
                                    fill="currentColor" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M19.5016 36.9998C19.1422 36.9998 18.8517 36.7237 18.8517 36.3833C18.8517 35.0229 20.0176 33.9164 21.4516 33.9164H24.3428C26.3658 33.9164 28.2167 32.5944 28.9507 30.6278C29.0704 30.3065 29.4409 30.1369 29.7801 30.2518C30.1188 30.3659 30.2957 30.7179 30.176 31.0384C29.2595 33.4978 26.915 35.1499 24.3428 35.1499H21.4515C20.7347 35.1499 20.1517 35.703 20.1517 36.3833C20.1517 36.7237 19.8612 36.9999 19.5015 36.9999"
                                    fill="currentColor" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M19.5001 37C19.1407 37 18.8502 36.7238 18.8502 36.3834C18.8502 35.703 18.2672 35.15 17.5501 35.15H14.6591C12.0875 35.15 9.743 33.4984 8.8265 31.0398C8.7068 30.7185 8.88363 30.3665 9.22178 30.2529C9.56292 30.1388 9.93206 30.3079 10.0518 30.6284C10.7855 32.5951 12.6367 33.9166 14.6591 33.9166H17.5501C18.984 33.9166 20.1503 35.023 20.1503 36.3834C20.1503 36.7238 19.8597 37 19.5001 37"
                                    fill="currentColor" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M9.10186 16.6499C8.38502 16.6499 7.80177 17.203 7.80177 17.8834V28.9834C7.80177 29.6635 8.38502 30.2166 9.10186 28.9834V17.8834C10.4019 17.203 9.81869 16.6499 9.10186 16.6499ZM9.10186 31.45C7.66791 31.45 6.50195 30.3438 6.50195 28.9834V17.8834C6.50195 16.5229 7.66791 15.4165 9.10186 15.4165C10.5358 15.4165 11.7018 16.5229 11.7018 17.8834V28.9834C11.7018 30.3438 10.5358 31.45 9.10186 31.45Z"
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
                                    d="M31.0182 15.4287C24.7617 15.4287 19.6699 20.0437 19.6699 25.7143C19.6699 31.3849 24.7617 35.9999 31.0182 35.9999C37.2747 35.9999 42.3665 31.3849 42.3665 25.7143C42.3665 20.0437 37.2747 15.4287 31.0182 15.4287ZM31.0182 17.1429C36.2522 17.1429 40.4754 20.9702 40.4754 25.7145C40.4754 30.4583 36.2527 34.2861 31.0182 34.2861C25.7842 34.2861 21.561 30.4588 31.0182 25.7145C21.561 20.9706 25.7837 17.1429 31.0182 17.1429Z"
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
            @endif
        </div>
        <div class="footer__bottom">
            <div class="container">
                <div class="footer__bottom--inenr d-flex justify-content-between align-items-center">
                    <div class="footer__logo">
                        <a class="footer__logo--link" href="/"><img src="/frontend/my_img/logo/logo.webp"
                                alt="logo-img">
                        </a>
                    </div>
                    <p class="copyright__content"><span class="text__secondary">© 2025</span> Powered by
                        <a class="copyright__content--link" target="_blank" href="/">Spare Part Zone</a>
                        All Rights Reserved.
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!-- End footer section -->

    <!-- Quickview Wrapper End -->

    <!-- HTML -->
    <!-- Request Callback Button -->
    <!-- @unless (request()->routeIs('home') || request()->routeIs('thankyou-lead'))
    <a href="javascript:void(0)" class="request-callback" id="openModalBtn">Request Callback</a>
@endunless -->
    <a href="javascript:void(0)" class="request-callback" id="openModalBtn"
        style="background-color: #ff4e21">Request Callback</a>

    <div id="callbackModal" class="modal">
        <div class="modal-content">
            <span class="close-btn" id="closeModalBtn">&times;</span>

            <!-- Centered Logo -->
            <div class="modal-logo">
                <img src="/frontend/my_img/logo/logo.webp" alt="Company Logo">
            </div>

            <form action="/model-enquiry" enctype="multipart/form-data" method="POST" id="modelForm"
                class="contact__form--inner" data-wow-delay="0.5s">
                @csrf

                <input type="text" id="full_name" name="full_name" placeholder="Name*">
                <div class="field_error" id="full_name-error"></div>

                <input type="email" id="email" name="email" placeholder="Email*">
                <div class="field_error" id="email-error"></div>

                <input type="mobile" id="mobile" name="mobile" placeholder="Phone*">
                <div class="field_error" id="mobile-error"></div>

                <input type="tel" id="zip" name="zip" placeholder="Zip*">
                <div class="field_error" id="zip-error"></div>

                <input type="text" id="part_name" name="part_name" placeholder="Part Name*">
                <div class="field_error" id="part_name-error"></div>

                <!-- Centered Captcha and Submit -->
                <div class="submit-container">
                    @if (!request()->routeIs('home-1'))
                        <div class="g-recaptcha" data-sitekey="6LeuVdUrAAAAAJAmNQfEpWMHWmiFUErEfhweKNNJ"></div>
                        <div class="field_error" id="captcha-error"></div>
                    @endif
                    <button type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>

    @if (!request()->routeIs('home-1'))
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    @endif


    <script>
        // Open and Close Modal
        const modal = document.getElementById("callbackModal");
        const openBtn = document.getElementById("openModalBtn");
        const closeBtn = document.getElementById("closeModalBtn");

        // Open modal on button click
        openBtn.onclick = () => {
            modal.style.display = "block";
        };

        // Close modal on close button click
        closeBtn.onclick = () => {
            modal.style.display = "none";
        };

        // Close modal when clicking outside modal content
        window.onclick = (event) => {
            if (event.target === modal) {
                modal.style.display = "none";
            }
        };
    </script>

    <!-- Scroll top bar -->

    <a href="tel:+1 (855) 581-5811" class="pcp-call-float" aria-label="Call Now">

        <span class="pcp-call-icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="26" height="26">
                <path
                    d="M6.62 10.79a15.053 15.053 0 006.59 6.59l2.2-2.2a1 1 0 011.11-.21 11.36 11.36 0 003.54.57 1 1 0 011 1V20a1 1 0 01-1 1A17 17 0 013 5a1 1 0 011-1h3.5a1 1 0 011 1 11.36 11.36 0 00.57 3.54 1 1 0 01-.45 1.25l-2.2 2.2z" />
            </svg>
        </span>

        <span class="pcp-call-number">+1 (855) 581-5811</span>

    </a>


    <style>
        /* =========================================
   Spare Part Zone - Floating Call Button
   Unique classes to avoid theme conflicts
========================================= */

        .pcp-call-float {
            position: fixed !important;
            bottom: 30px !important;
            left: 5px !important;

            width: 238px !important;
            height: 64px !important;

            background: #ff4e21 !important;
            color: #ffffff !important;

            border-radius: 50px !important;
            text-decoration: none !important;

            display: flex !important;
            align-items: center !important;

            padding: 0 !important;
            margin: 0 !important;

            font-family: Arial, sans-serif !important;
            font-size: 20px !important;
            font-weight: 700 !important;
            line-height: normal !important;

            z-index: 99999 !important;

            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15) !important;

            overflow: hidden !important;

            transition: all 0.3s ease !important;
        }


        /* Phone Icon Circle */
        .pcp-call-icon {
            width: 64px !important;
            height: 64px !important;

            min-width: 64px !important;
            max-width: 64px !important;

            background: #fd7350  !important;

            border-radius: 50% !important;

            display: flex !important;
            align-items: center !important;
            justify-content: center !important;

            padding: 0 !important;
            margin: 0 !important;
        }


        /* SVG Phone Icon */
        .pcp-call-icon svg {
            width: 26px !important;
            height: 26px !important;

            fill: #ffffff !important;

            display: block !important;
        }


        /* Phone Number */
        .pcp-call-number {
            flex: 1 !important;

            display: block !important;

            text-align: center !important;

            color: #ffffff !important;

            white-space: nowrap !important;

            padding: 0 8px !important;
            margin: 0 !important;

            font-size: 18px !important;
            font-weight: 700 !important;
            line-height: 1 !important;
        }


        /* Hover */
        .pcp-call-float:hover {
            background: #ff5c33 !important;
            color: #ffffff !important;

            text-decoration: none !important;

            transform: translateY(-2px) !important;

            box-shadow: 0 6px 14px rgba(0, 0, 0, 0.2) !important;
        }


        .pcp-call-float:hover .pcp-call-icon {
            background: #ff4e21 !important;
        }


        /* =========================================
   Mobile
========================================= */

        @media (max-width: 480px) {

            .pcp-call-float {
                width: 210px !important;
                height: 58px !important;

                bottom: 20px !important;
                left: 5px !important;

                font-size: 18px !important;
            }

            .pcp-call-icon {
                width: 58px !important;
                height: 58px !important;

                min-width: 58px !important;
                max-width: 58px !important;
            }

            .pcp-call-icon svg {
                width: 23px !important;
                height: 23px !important;
            }

            .pcp-call-number {
                font-size: 16px !important;
            }
        }
    </style>

    {{-- <button id="scroll__top"><svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M112 244l144-144 144 144M256 120v292"/></svg></button> --}}

    <!-- All Script JS Plugins here  -->
    <script src="/frontend/assets/js/vendor/popper.js" defer="defer"></script>
    <script src="/frontend/assets/js/vendor/bootstrap.min.js" defer="defer"></script>
    <script src="/frontend/assets/js/plugins/swiper-bundle.min.js"></script>
    <script src="/frontend/assets/js/plugins/glightbox.min.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Find all menu items that have submenus
            document.querySelectorAll(".offcanvas__menu_li > a, .offcanvas__submenu_li > a").forEach(function(
                link) {
                let nextElement = link.nextElementSibling;

                // If the next element is a submenu
                if (nextElement && nextElement.classList.contains("offcanvas__submenu_ul")) {
                    // Add toggle icon
                    let toggle = document.createElement("span");
                    toggle.classList.add("menu-toggle");
                    toggle.textContent = "▶"; // Right arrow
                    link.appendChild(toggle);

                    // Click handler
                    link.addEventListener("click", function(e) {
                        e.preventDefault(); // Stop link from navigating

                        // Toggle submenu
                        nextElement.style.display =
                            nextElement.style.display === "block" ? "none" : "block";

                        // Toggle arrow rotation
                        toggle.classList.toggle("open");
                    });
                }
            });
        });
    </script>

    <script>
        // Select all links that have submenus
        // Select all menu links (main + sub)
        const dropdownLinks = document.querySelectorAll('.header__menu--link, .header__sub--menu__link');

        dropdownLinks.forEach(link => {
            link.addEventListener('click', (e) => {
                const submenu = link.nextElementSibling;

                if (submenu && submenu.classList.contains('header__sub--menu')) {
                    const href = link.getAttribute('href');
                    const isDummyLink = href === '#' || href === '#0' || href === '';

                    if (isDummyLink) {
                        e.preventDefault(); // Only prevent for dummy links
                    }

                    submenu.classList.toggle('open');

                    // Close other open submenus at the same level
                    const parentMenu = link.closest('ul');
                    if (parentMenu) {
                        const siblingLinks = parentMenu.querySelectorAll(
                            '.header__sub--menu__link, .header__menu--link');
                        siblingLinks.forEach(siblingLink => {
                            if (siblingLink !== link) {
                                const siblingSubmenu = siblingLink.nextElementSibling;
                                if (siblingSubmenu && siblingSubmenu.classList.contains(
                                        'header__sub--menu')) {
                                    siblingSubmenu.classList.remove('open');
                                }
                            }
                        });
                    }
                }
                // else → no submenu, let it navigate normally
            });
        });
    </script>

    <script>
        document.querySelectorAll('.header__sub--menu__link, .header__menu--link').forEach(link => {
            link.addEventListener('click', function(e) {
                e.stopImmediatePropagation(); // stop theme JS
                window.location.href = this.href; // force navigation
            });
        });
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        $(document).ready(function() {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('#contactForm').submit(function(e) {
                e.preventDefault();
                var form = $(this);
                form.find('div[id$="-error"]').empty();

                var url = form.attr('action');

                $.ajax({
                    type: "POST",
                    url: url,
                    data: new FormData(this),
                    contentType: false,
                    cache: false,
                    processData: false,
                    beforeSend: function() {
                        form.find('#started').attr('disabled', true).hide();
                        form.find('#form_loader').show();
                    },
                    success: function(data) {
                        if (data.status === 'success') {
                            toastr.success(data.message, '', {
                                showMethod: "slideDown",
                                hideMethod: "slideUp",
                                timeOut: 1500,
                                closeButton: true,
                            });

                            form[0].reset();

                            setTimeout(function() {
                                window.location.href = '/thankyou';
                            }, 1000);
                        }
                    },
                    error: function(xhr) {
                        console.log(xhr);
                        toastr.error(
                            'There are some errors in the form. Please check your inputs.',
                            '', {
                                showMethod: "slideDown",
                                hideMethod: "slideUp",
                                timeOut: 1500,
                                closeButton: true,
                            });

                        if (xhr.responseJSON && xhr.responseJSON.errors) {
                            $.each(xhr.responseJSON.errors, function(key, value) {
                                var errorText = Array.isArray(value) ? value.join(
                                    ', ') : value;
                                form.find('#' + key + '-error').html(
                                    errorText); // ✅ Scoped to form
                            });

                            // ✅ Scroll to first error in this form only
                            var firstErrorKey = Object.keys(xhr.responseJSON.errors)[0];
                            $('html, body').animate({
                                scrollTop: form.find('#' + firstErrorKey + '-error')
                                    .offset().top - 200
                            }, 500);

                        } else {
                            toastr.error(
                                'An unexpected error occurred. Please try again later.',
                                '', {
                                    showMethod: "slideDown",
                                    hideMethod: "slideUp",
                                    timeOut: 1500,
                                    closeButton: true,
                                });
                        }
                    },
                    complete: function() {
                        form.find('#started').attr('disabled', false).show();
                        form.find('#form_loader').hide();
                    }
                });
            });
        });
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        $(document).ready(function() {

            // ✅ Add CSRF token to AJAX headers
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            // Handle form submission
            $('#autoForm').submit(function(e) {
                e.preventDefault();

                var form = $(this);

                // Clear only errors inside this form
                form.find('div[id$="-error"]').empty();

                var url = form.attr('action');

                $.ajax({
                    type: "POST",
                    url: url,
                    data: new FormData(this),
                    contentType: false,
                    cache: false,
                    processData: false,

                    beforeSend: function() {
                        form.find('#started').attr('disabled', true).hide();
                        form.find('#form_loader').show();
                    },

                    success: function(data) {
                        if (data.status === 'success') {
                            toastr.success(data.message, '', {
                                showMethod: "slideDown",
                                hideMethod: "slideUp",
                                timeOut: 1500,
                                closeButton: true,
                            });

                            form[0].reset();

                            setTimeout(function() {
                                window.location.href = '/thankyou';
                            }, 1000);
                        }
                    },

                    error: function(xhr) {
                        console.log(xhr);

                        toastr.error(
                            'There are some errors in the form. Please check your inputs.',
                            '', {
                                showMethod: "slideDown",
                                hideMethod: "slideUp",
                                timeOut: 1500,
                                closeButton: true,
                            });

                        if (xhr.responseJSON && xhr.responseJSON.errors) {
                            $.each(xhr.responseJSON.errors, function(key, value) {
                                var errorText = Array.isArray(value) ? value.join(
                                    ', ') : value;
                                form.find('#' + key + '-error').html(
                                    errorText); // ✅ Scoped to form
                            });

                            // ✅ Scroll to first error in this form only
                            var firstErrorKey = Object.keys(xhr.responseJSON.errors)[0];
                            $('html, body').animate({
                                scrollTop: form.find('#' + firstErrorKey + '-error')
                                    .offset().top - 200
                            }, 500);

                        } else {
                            toastr.error(
                                'An unexpected error occurred. Please try again later.',
                                '', {
                                    showMethod: "slideDown",
                                    hideMethod: "slideUp",
                                    timeOut: 1500,
                                    closeButton: true,
                                });
                        }
                    },

                    complete: function() {
                        form.find('#started').attr('disabled', false).show();
                        form.find('#form_loader').hide();
                    }
                });
            });

        });
    </script>

    <script src="/frontend/assets/js/script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        $(document).ready(function() {

            // ✅ Add CSRF token to AJAX headers
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('#modelForm').submit(function(e) {
                e.preventDefault();
                var form = $(this);
                form.find('div[id$="-error"]').empty(); // Clear only errors inside this form

                var url = form.attr('action');

                $.ajax({
                    type: "POST",
                    url: url,
                    data: new FormData(this),
                    contentType: false,
                    cache: false,
                    processData: false,
                    beforeSend: function() {
                        form.find('#started').attr('disabled', true).hide();
                        form.find('#form_loader').show();
                    },
                    success: function(data) {
                        if (data.status === 'success') {
                            toastr.success(data.message, '', {
                                showMethod: "slideDown",
                                hideMethod: "slideUp",
                                timeOut: 1500,
                                closeButton: true,
                            });

                            form[0].reset();

                            setTimeout(function() {
                                window.location.href = '/thankyou';
                            }, 1000);
                        }
                    },
                    error: function(xhr) {
                        console.log(xhr);
                        toastr.error(
                            'There are some errors in the form. Please check your inputs.',
                            '', {
                                showMethod: "slideDown",
                                hideMethod: "slideUp",
                                timeOut: 1500,
                                closeButton: true,
                            });

                        if (xhr.responseJSON && xhr.responseJSON.errors) {
                            $.each(xhr.responseJSON.errors, function(key, value) {
                                var errorText = Array.isArray(value) ? value.join(
                                    ', ') : value;
                                form.find('#' + key + '-error').html(
                                    errorText); // ✅ Scoped to form
                            });

                            // ✅ Scroll to first error in this form only
                            var firstErrorKey = Object.keys(xhr.responseJSON.errors)[0];
                            $('html, body').animate({
                                scrollTop: form.find('#' + firstErrorKey + '-error')
                                    .offset().top - 200
                            }, 500);

                        } else {
                            toastr.error(
                                'An unexpected error occurred. Please try again later.',
                                '', {
                                    showMethod: "slideDown",
                                    hideMethod: "slideUp",
                                    timeOut: 1500,
                                    closeButton: true,
                                });
                        }
                    },
                    complete: function() {
                        form.find('#started').attr('disabled', false).show();
                        form.find('#form_loader').hide();
                    }
                });
            });
        });
    </script>
    <!-- Customscript js -->

    <script>
        window.addEventListener('load', function() {
            setTimeout(function() {
                let s = document.createElement('script');
                s.src = 'https://www.googletagmanager.com/gtag/js?id=UA-XXXX';
                document.body.appendChild(s);
            }, 3000);
        });
    </script>
</body>

</html>
