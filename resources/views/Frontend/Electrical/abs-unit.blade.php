@extends('layouts.frontend')
@section('title')
    ABS Unit | Spare Part Zone
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
                            <li class="breadcrumb__content--menu__items"><span>ABS Unit </span></li>
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
                            <img class="about__thumb--img border-radius-5" src="/frontend/my_img/Main/abs_unit.jpg"
                                alt="about-thumb">
                        </div>

                    </div>
                    <div style="text-align: center; margin-top: 190px;">
                        <a class="contact__form--btn primary__btn" href="tel:+1 (855) 581-5811">
                            <span><i class="fas fa-phone" style="margin-right: 8px;"></i>Call Us – We’re Here 24/7</span>
                        </a>
                    </div>
                </div>

                <!-- Right Side Content -->
                <div class="col-lg-6 mt-5">
                    <div class="about__content">
                        <span class="about__content--subtitle text__secondary mb-20">ABS Units Precision Braking, Maximum
                            Safety</span>
                        <h2 class="about__content--maintitle mb-25">ABS Unit</h2>
                        <p class="about__content--desc mb-20">Stay in control when it matters most with our premium
                            selection of ABS (Anti-lock Braking System) units. These advanced systems prevent wheel lock-up
                            during sudden braking, helping you steer and stop safely especially in slippery or emergency
                            conditions. At Spare Part Zone, we offer high-quality OEM and aftermarket ABS units that meet
                            or exceed factory standards. Whether you're replacing a faulty module or upgrading for
                            performance, our ABS units are tested for durability, compatibility, and performance.
                        </p>

                        <!-- Features with Font Awesome Icons -->
                        @include('Frontend.box')

                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        .about__thumb {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 70% !important;
            width: 100%;
            overflow: hidden;
        }
    </style>



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
                                    <button class="faq__accordion--btn accordion__items--button">What is an ABS unit and how
                                        does it work?
                                        <svg class="accordion__items--button__icon" xmlns="http://www.w3.org/2000/svg"
                                            width="20.355" height="13.394" viewBox="0 0 512 512">
                                            <path
                                                d="M98 190.06l139.78 163.12a24 24 0 0036.44 0L414 190.06c13.34-15.57 2.28-39.62-18.22-39.62h-279.6c-20.5 0-31.56 24.05-18.18 39.62z"
                                                fill="currentColor" />
                                        </svg>
                                    </button>
                                </h3>
                                <div class="accordion__items--body">
                                    <p class="accordion__items--body__desc">An ABS unit prevents your wheels from locking up
                                        during hard braking by rapidly pulsing the brakes, allowing you to maintain steering
                                        control and avoid skidding.</p>
                                </div>
                            </div>
                            <div class="accordion__items">
                                <h3 class="accordion__items--title">
                                    <button class="faq__accordion--btn accordion__items--button">How do I know if my ABS
                                        unit needs replacing?
                                        <svg class="accordion__items--button__icon" xmlns="http://www.w3.org/2000/svg"
                                            width="20.355" height="13.394" viewBox="0 0 512 512">
                                            <path
                                                d="M98 190.06l139.78 163.12a24 24 0 0036.44 0L414 190.06c13.34-15.57 2.28-39.62-18.22-39.62h-279.6c-20.5 0-31.56 24.05-18.18 39.62z"
                                                fill="currentColor" />
                                        </svg>
                                    </button>
                                </h3>
                                <div class="accordion__items--body">
                                    <p class="accordion__items--body__desc">Common signs include the ABS warning light on
                                        your dashboard, reduced braking performance, or unusual brake pedal behavior. A
                                        diagnostic scan can confirm the issue.
                                    </p>
                                </div>
                            </div>
                            <div class="accordion__items">
                                <h3 class="accordion__items--title">
                                    <button class="faq__accordion--btn accordion__items--button">Are your ABS units
                                        compatible with my vehicle?
                                        <svg class="accordion__items--button__icon" xmlns="http://www.w3.org/2000/svg"
                                            width="20.355" height="13.394" viewBox="0 0 512 512">
                                            <path
                                                d="M98 190.06l139.78 163.12a24 24 0 0036.44 0L414 190.06c13.34-15.57 2.28-39.62-18.22-39.62h-279.6c-20.5 0-31.56 24.05-18.18 39.62z"
                                                fill="currentColor" />
                                        </svg>
                                    </button>
                                </h3>
                                <div class="accordion__items--body">
                                    <p class="accordion__items--body__desc">Yes, we offer ABS units for a wide range of
                                        makes and models. Use our vehicle lookup tool to ensure you get the exact fit for
                                        your car.
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- End Right Column -->
            </div>
        </div>
    </section>


    @include('Frontend.relatedproduct', ['currentSlug' => 'abs_unit'])
@endsection
