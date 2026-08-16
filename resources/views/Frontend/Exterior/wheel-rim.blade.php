@extends('layouts.frontend')
@section('title')
    Wheel Rim | Spare Part Zone
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
                            <li class="breadcrumb__content--menu__items"><a href="/exterior-parts">Exterior Parts</a></li>
                            <li class="breadcrumb__content--menu__items"><span>Wheel Rim </span></li>
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
                            <img class="about__thumb--img border-radius-5" src="/frontend/my_img/Main/wheel_rim.jpg"
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
                        <span class="about__content--subtitle text__secondary mb-20">Premium Alloy and Steel Wheel Rims
                            Performance Meets Style</span>
                        <h2 class="about__content--maintitle mb-25">Wheel Rim</h2>
                        <p class="about__content--desc mb-20">At Spare Part Zone, our collection of high-quality wheel
                            rims is designed to transform your vehicle’s look and performance. Whether you’re after sleek
                            alloy rims for a modern aesthetic or heavy-duty steel rims for maximum durability, we’ve got you
                            covered. Our rims are precision-engineered for perfect fitment, improved handling, and enhanced
                            road grip. Available in a variety of finishes and designs, they not only boost your car’s style
                            but also ensure safe, stable rides in all conditions. Upgrade your vehicle’s personality and
                            performance with our premium wheel rims today.
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
                                    <button class="faq__accordion--btn accordion__items--button">What is the difference
                                        between alloy and steel rims?
                                        <svg class="accordion__items--button__icon" xmlns="http://www.w3.org/2000/svg"
                                            width="20.355" height="13.394" viewBox="0 0 512 512">
                                            <path
                                                d="M98 190.06l139.78 163.12a24 24 0 0036.44 0L414 190.06c13.34-15.57 2.28-39.62-18.22-39.62h-279.6c-20.5 0-31.56 24.05-18.18 39.62z"
                                                fill="currentColor" />
                                        </svg>
                                    </button>
                                </h3>
                                <div class="accordion__items--body">
                                    <p class="accordion__items--body__desc">Alloy rims are lightweight, stylish, and
                                        improve handling, while steel rims are heavier but offer maximum durability and
                                        are ideal for rugged conditions.</p>
                                </div>
                            </div>
                            <div class="accordion__items">
                                <h3 class="accordion__items--title">
                                    <button class="faq__accordion--btn accordion__items--button">How do I choose the
                                        right size wheel rims?
                                        <svg class="accordion__items--button__icon" xmlns="http://www.w3.org/2000/svg"
                                            width="20.355" height="13.394" viewBox="0 0 512 512">
                                            <path
                                                d="M98 190.06l139.78 163.12a24 24 0 0036.44 0L414 190.06c13.34-15.57 2.28-39.62-18.22-39.62h-279.6c-20.5 0-31.56 24.05-18.18 39.62z"
                                                fill="currentColor" />
                                        </svg>
                                    </button>
                                </h3>
                                <div class="accordion__items--body">
                                    <p class="accordion__items--body__desc">You should select rims that match your
                                        vehicle’s specifications for diameter, width, and bolt pattern. Refer to your
                                        car’s manual or consult our fitment guide to ensure the perfect match.
                                    </p>
                                </div>
                            </div>
                            <div class="accordion__items">
                                <h3 class="accordion__items--title">
                                    <button class="faq__accordion--btn accordion__items--button">Do new wheel rims
                                        improve performance?
                                        <svg class="accordion__items--button__icon" xmlns="http://www.w3.org/2000/svg"
                                            width="20.355" height="13.394" viewBox="0 0 512 512">
                                            <path
                                                d="M98 190.06l139.78 163.12a24 24 0 0036.44 0L414 190.06c13.34-15.57 2.28-39.62-18.22-39.62h-279.6c-20.5 0-31.56 24.05-18.18 39.62z"
                                                fill="currentColor" />
                                        </svg>
                                    </button>
                                </h3>
                                <div class="accordion__items--body">
                                    <p class="accordion__items--body__desc">Yes. High-quality rims can enhance
                                        handling, braking, and fuel efficiency, while also improving the overall
                                        appearance of your vehicle.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- End Right Column -->
            </div>
        </div>
    </section>


    @include('Frontend.relatedproduct', ['currentSlug' => 'wheel_rim'])
@endsection
