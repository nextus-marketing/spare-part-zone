@extends('layouts.frontend')
@section('title')
    Tail Light | Spare Part Zone
@endsection
@section('content')
    <style>
        .fixed-size-img {
            width: 500px;
            height: 500px;
            object-fit: cover;
        }
    </style>
    <section class="breadcrumb__section breadcrumb__bg">
        <div class="container">
            <div class="row row-cols-1">
                <div class="col">
                    <div class="breadcrumb__content text-center">
                        <ul class="breadcrumb__content--menu d-flex justify-content-center">
                            <li class="breadcrumb__content--menu__items"><a href="/">Home</a></li>
                            <li class="breadcrumb__content--menu__items"><a href="/electrical-parts">Electrical Parts</a></li>
                            <li class="breadcrumb__content--menu__items"><span>Tail Light </span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about__section section--padding mb-95">
        <div class="container">
            <div class="row">
                <!-- Left Side Images -->
                <div class="col-lg-6">
                    <div class="about__thumb d-flex">
                        <div class="about__thumb--items">
                            <img class="about__thumb--img border-radius-5" src="/frontend/my_img/Main/tail_light.jpg"
                                alt="about-thumb">
                        </div>

                    </div>
                    <div style="text-align: center; margin-top: 110px;">
                        <a class="contact__form--btn primary__btn" href="tel:+1 (855) 581-5811">
                            <span><i class="fas fa-phone" style="margin-right: 8px;"></i>Call Us – We’re Here 24/7</span>
                        </a>
                    </div>
                </div>

                <!-- Right Side Content -->
                <div class="col-lg-6 mt-5">
                    <div class="about__content">
                        <span class="about__content--subtitle text__secondary mb-20">Tail Lights That Turn Heads Safety
                            Meets Style</span>
                        <h2 class="about__content--maintitle mb-25">Tail Light</h2>
                        <p class="about__content--desc mb-20">Upgrade your vehicle’s rear lighting with our premium
                            selection of tail lights designed for safety, durability, and sleek design. Whether you’re
                            replacing a damaged light or upgrading to LED tail lights for a more modern look, we have the
                            perfect fit for your make and model. Our tail lights offer high visibility, weather resistance,
                            and plug-and-play installation, making them ideal for everyday drivers and car enthusiasts
                            alike.
                        </p>

                        <!-- Features with Font Awesome Icons -->
                        @include('Frontend.box')

                    </div>
                </div>
            </div>
        </div>
    </section>




    <section class="section--padding">
        <div class="container">
            <div class="row align-items-start">
                <!-- Left: Form -->
                <div class="col-lg-6 mb-4">
                    <div class="p-4 border rounded shadow-sm bg-white">
                        @include('Frontend.enquiry-form')
                    </div>
                </div>

                <!-- Right: FAQ -->
                <div class="col-lg-6">
                    <div class="faq__section--inner">
                        <h2 class="face__step--title h3 mb-4 text-center">Frequently Asked Questions</h2>
                        <div class="accordion__container">
                            <div class="accordion__items">
                                <h3 class="accordion__items--title">
                                    <button class="faq__accordion--btn accordion__items--button">Are your tail lights
                                        compatible with my car model?
                                        <svg class="accordion__items--button__icon" xmlns="http://www.w3.org/2000/svg"
                                            width="20.355" height="13.394" viewBox="0 0 512 512">
                                            <path
                                                d="M98 190.06l139.78 163.12a24 24 0 0036.44 0L414 190.06c13.34-15.57 2.28-39.62-18.22-39.62h-279.6c-20.5 0-31.56 24.05-18.18 39.62z"
                                                fill="currentColor" />
                                        </svg>
                                    </button>
                                </h3>
                                <div class="accordion__items--body">
                                    <p class="accordion__items--body__desc">Yes, we stock tail lights for a wide range of
                                        vehicle makes and models. Just enter your vehicle details on the product page to
                                        ensure a perfect fit.</p>
                                </div>
                            </div>
                            <div class="accordion__items">
                                <h3 class="accordion__items--title">
                                    <button class="faq__accordion--btn accordion__items--button">Do you offer LED tail
                                        lights?
                                        <svg class="accordion__items--button__icon" xmlns="http://www.w3.org/2000/svg"
                                            width="20.355" height="13.394" viewBox="0 0 512 512">
                                            <path
                                                d="M98 190.06l139.78 163.12a24 24 0 0036.44 0L414 190.06c13.34-15.57 2.28-39.62-18.22-39.62h-279.6c-20.5 0-31.56 24.05-18.18 39.62z"
                                                fill="currentColor" />
                                        </svg>
                                    </button>
                                </h3>
                                <div class="accordion__items--body">
                                    <p class="accordion__items--body__desc">Absolutely! We offer both traditional halogen
                                        and advanced LED tail lights. LED options provide brighter illumination, faster
                                        response times, and longer life.
                                    </p>
                                </div>
                            </div>
                            <div class="accordion__items">
                                <h3 class="accordion__items--title">
                                    <button class="faq__accordion--btn accordion__items--button">Are these tail lights easy
                                        to install?
                                        <svg class="accordion__items--button__icon" xmlns="http://www.w3.org/2000/svg"
                                            width="20.355" height="13.394" viewBox="0 0 512 512">
                                            <path
                                                d="M98 190.06l139.78 163.12a24 24 0 0036.44 0L414 190.06c13.34-15.57 2.28-39.62-18.22-39.62h-279.6c-20.5 0-31.56 24.05-18.18 39.62z"
                                                fill="currentColor" />
                                        </svg>
                                    </button>
                                </h3>
                                <div class="accordion__items--body">
                                    <p class="accordion__items--body__desc">Most of our tail lights come with a
                                        plug-and-play design, allowing for simple installation without professional help.
                                        Installation guides are available for many models.
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- End Right Column -->
            </div>
        </div>
    </section>




    @include('Frontend.relatedproduct', ['currentSlug' => 'tail_light'])
@endsection
