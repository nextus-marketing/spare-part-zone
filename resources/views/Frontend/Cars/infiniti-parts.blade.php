@extends('layouts.frontend')

@section('title')
    Infiniti Parts & Accessories | Spare Part Zone
@endsection

@section('content')


<section class="breadcrumb__section breadcrumb__bg">
        <div class="container">
            <div class="row row-cols-1">
                <div class="col">
                    <div class="breadcrumb__content text-center">
                        <ul class="breadcrumb__content--menu d-flex justify-content-center">
                            <li class="breadcrumb__content--menu__items"><a href="/">Home</a></li>
                            <li class="breadcrumb__content--menu__items"><span>Infiniti Parts</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

   <!-- About Section -->
    <section class="about__section section--padding mb-95">
        <div class="container">
            <div class="row">
                <!-- About Image -->
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="about__thumb d-flex">
                        <div class="about__thumb--items">
                            <img
                                src="/frontend/my_img/Cars/infiniti.jpg"
                                alt="about-thumb"
                                class="about__thumb--img img-fluid"
                            >
                        </div>
                    </div>
                </div>

                <!-- About Content -->
                <div class="col-lg-6">
                    <div class="about__content">
                        <span class="about__content--subtitle text__secondary mb-1">
                            Welcome To Spare Part Zone.
                        </span>

                        <h2 class="about__content--maintitle" style="margin-bottom: 4px;">
                            Genuine OEM & Performance Infiniti Auto Parts
                        </h2>

                        <p class="about__content--desc mb-20">
                            Spare Part Zone is your trusted source for premium OEM and replacement Infiniti auto parts and performance accessories. From luxury performance sedans like the Q50 and Q60 to versatile crossover SUVs like the QX50, QX60, and flagship QX80, we provide high-grade parts designed to meet rigorous standards.
                        </p>

                        <p class="about__content--desc mb-25">
                            Our catalog includes potent VR30DDTT twin-turbo and VQ37VHR V6 engines, precision automatic transmissions, sport suspension components, Brembo brake assemblies, and intelligent electronics, ensuring your Infiniti retains its distinctive blend of performance and luxury.
                        </p>

                        <p class="about__content--desc mb-25">
                            Whether you are replacing vital mechanical units or refreshing your vehicle's interior and exterior, Spare Part Zone offers competitive prices, nationwide delivery, and dedicated customer service.
                        </p>
                    </div>

                    <!-- Call Button -->
                    <div class="text-center mt-4">
                        <a href="tel:+1 (855) 581-5811"
                            class="contact__form--btn primary__btn">
                            <span>
                                <i class="fas fa-phone me-2"></i>
                                24/7 Customer Support
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End about section -->

    <!-- Start product section -->
        <section class="product__section section--padding  pt-0">
            <div class="container">
                <div class="section__heading section__heading--flex border-bottom mb-30 ">
                    <h2 class="section__heading--maintitle">Popular <span>Infiniti Parts</span></h2>

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

        <section class="container py-5 journey-section">
    <div class="text-center mb-5">
        <h2 class="journey-heading" style="color:#ff4e21;">HOW WE WORK</h2>
        <p class="journey-subheading">Your journey to getting your Infiniti back on the road!</p>
    </div>

    <div class="journey-scroll-wrapper">
        <div class="journey-track">

            <!-- Card 1 -->
            <div class="journey-card">
                <div class="journey-icon-box">
                    <i class="fa-solid fa-file-lines"></i>
                </div>
                <span class="journey-step-tag">Step 1</span>
                <h3>Request a Quote</h3>
            </div>

            <!-- Card 2 -->
            <div class="journey-card">
                <div class="journey-icon-box">
                    <i class="fa-solid fa-headset"></i>
                </div>
                <span class="journey-step-tag">Step 2</span>
                <h3>Sales Assistance</h3>
            </div>

            <!-- Card 3 -->
            <div class="journey-card">
                <div class="journey-icon-box">
                    <i class="fa-solid fa-lock"></i>
                </div>
                <span class="journey-step-tag">Step 3</span>
                <h3>Secured Payment</h3>
            </div>

            <!-- Card 4 -->
            <div class="journey-card">
                <div class="journey-icon-box">
                    <i class="fa-solid fa-truck-fast"></i>
                </div>
                <span class="journey-step-tag">Step 4</span>
                <h3>Order Shipment</h3>
            </div>

            <!-- Card 5 -->
            <div class="journey-card">
                <div class="journey-icon-box">
                    <i class="fa-solid fa-screwdriver-wrench"></i>
                </div>
                <span class="journey-step-tag">Step 5</span>
                <h3>Installation Support</h3>
            </div>

            <!-- Card 6 -->
            <div class="journey-card">
                <div class="journey-icon-box">
                    <i class="fa-solid fa-box-open"></i>
                </div>
                <span class="journey-step-tag">Step 6</span>
                <h3>After-Sale Support</h3>
            </div>

        </div>
    </div>
</section>

<style>
    .journey-section {
        background: #fff;
    }

    .journey-heading {
        font-weight: 800;
        font-size: 2.8rem;
        margin-bottom: 10px;
    }

    .journey-subheading {
        color: #6b7280;
        font-size: 17px;
        margin-bottom: 0;
    }

    /* Desktop / tablet: normal responsive grid */
    .journey-scroll-wrapper {
        width: 100%;
    }

    .journey-track {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 24px;
    }

    .journey-card {
        background: #fff;
        border: 1px solid #eee;
        border-radius: 16px;
        padding: 30px 22px;
        text-align: center;
        box-shadow: 0 10px 30px rgba(0,0,0,0.06);
        transition: all 0.3s ease;
    }

    .journey-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 18px 40px rgba(255, 78, 33,0.15);
        border-color: #ff4e21;
    }

    .journey-icon-box {
        width: 66px;
        height: 66px;
        margin: 0 auto 16px;
        border-radius: 50%;
        background: rgba(255, 78, 33,0.08);
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
    }

    .journey-icon-box i {
        font-size: 26px;
        color: #ff4e21;
        transition: all 0.3s ease;
    }

    .journey-card:hover .journey-icon-box {
        background: #ff4e21;
    }

    .journey-card:hover .journey-icon-box i {
        color: #fff;
    }

    .journey-step-tag {
        display: block;
        font-size: 12px;
        font-weight: 700;
        letter-spacing: 0.5px;
        text-transform: uppercase;
        color: #ff4e21;
        margin-bottom: 6px;
    }

    .journey-card h3 {
        font-size: 18px;
        font-weight: 700;
        color: #111827;
        margin: 0;
    }

    /* Tablet: 2 columns */
    @media (max-width: 991px) {
        .journey-track {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    /* Mobile: horizontal scroll carousel */
    @media (max-width: 576px) {
        .journey-heading {
            font-size: 2rem;
        }

        .journey-scroll-wrapper {
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
            scrollbar-width: none;
            padding-bottom: 10px;
        }

        .journey-scroll-wrapper::-webkit-scrollbar {
            display: none;
        }

        .journey-track {
            display: flex;
            gap: 16px;
            grid-template-columns: unset;
            scroll-snap-type: x mandatory;
            padding: 4px 4px 8px;
        }

        .journey-card {
            flex: 0 0 78%;
            scroll-snap-align: start;
            padding: 26px 20px;
        }

        .journey-card:hover {
            transform: none;
        }
    }
</style>

<section class="faq__section section--padding pt-0">
    <div class="container">
        <div class="faq__section--inner">

            <div class="face__step one" id="accordionExample">

                <!-- Section Heading -->
                <div class="section__heading border-bottom mb-30">
                    <h2 class="section__heading--maintitle-text"
                        style="margin-left: 35px !important;">
                        Frequently Asked Questions
                    </h2>
                </div>


                <div class="row">

                    <!-- ================= LEFT COLUMN ================= -->
                    <div class="col-lg-6">
                        <div class="accordion__container">

                            <!-- FAQ 1 -->
                            <div class="accordion__items">
                                 <h3 class="accordion__items--title">
                                     <button class="faq__accordion--btn accordion__items--button">
                                         What types of Infiniti auto parts do you offer?

                                         <svg class="accordion__items--button__icon"
                                             xmlns="http://www.w3.org/2000/svg"
                                             width="20.355"
                                             height="13.394"
                                             viewBox="0 0 512 512">
                                             <path
                                                 d="M98 190.06l139.78 163.12a24 24 0 0036.44 0L414 190.06c13.34-15.57 2.28-39.62-18.22-39.62h-279.6c-20.5 0-31.56 24.05-18.18 39.62z"
                                                 fill="currentColor" />
                                         </svg>
                                     </button>
                                 </h3>

                                 <div class="accordion__items--body">
                                     <p class="accordion__items--body__desc">
                                         We supply a comprehensive inventory of genuine OEM and certified replacement parts for Infiniti models. Our selection encompasses twin-turbo 3.0L and 3.7L V6 engines, automatic transmissions, AWD transfer cases, drive shafts, adaptive suspension assemblies, LED headlights, and steering components.
                                     </p>
                                 </div>
                            </div>


                            <!-- FAQ 2 -->
                            <div class="accordion__items">
                                <h3 class="accordion__items--title">
                                    <button class="faq__accordion--btn accordion__items--button">
                                        How do I find the right part for my Infiniti?

                                        <svg class="accordion__items--button__icon"
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="20.355"
                                            height="13.394"
                                            viewBox="0 0 512 512">
                                            <path
                                                d="M98 190.06l139.78 163.12a24 24 0 0036.44 0L414 190.06c13.34-15.57 2.28-39.62-18.22-39.62h-279.6c-20.5 0-31.56 24.05-18.18 39.62z"
                                                fill="currentColor" />
                                        </svg>
                                    </button>
                                </h3>

                                <div class="accordion__items--body">
                                    <p class="accordion__items--body__desc">
                                        Select your Infiniti’s model year, exact model (such as Q50, Q60, QX60, or QX80), trim package, and drivetrain (RWD or Intelligent AWD). You can also look up parts via factory part number or get in touch with our luxury parts specialists.
                                    </p>
                                </div>
                            </div>


                            <!-- FAQ 3 -->
                            <div class="accordion__items">
                                <h3 class="accordion__items--title">
                                    <button class="faq__accordion--btn accordion__items--button">
                                        How can I verify that a part will fit my Infiniti?

                                        <svg class="accordion__items--button__icon"
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="20.355"
                                            height="13.394"
                                            viewBox="0 0 512 512">
                                            <path
                                                d="M98 190.06l139.78 163.12a24 24 0 0036.44 0L414 190.06c13.34-15.57 2.28-39.62-18.22-39.62h-279.6c-20.5 0-31.56 24.05-18.18 39.62z"
                                                fill="currentColor" />
                                        </svg>
                                    </button>
                                </h3>

                                <div class="accordion__items--body">
                                    <p class="accordion__items--body__desc">
                                        Provide your vehicle's 17-digit VIN at checkout or to our support representatives. We check Infiniti dealership parts databases to guarantee full compatibility with your specific vehicle options and chassis generation.
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>


                    <!-- ================= RIGHT COLUMN ================= -->
                    <div class="col-lg-6">
                        <div class="accordion__container">

                            <!-- FAQ 4 -->
                            <div class="accordion__items">
                                <h3 class="accordion__items--title">
                                    <button class="faq__accordion--btn accordion__items--button">
                                        What shipping options are available for Infiniti parts?

                                        <svg class="accordion__items--button__icon"
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="20.355"
                                            height="13.394"
                                            viewBox="0 0 512 512">
                                            <path
                                                d="M98 190.06l139.78 163.12a24 24 0 0036.44 0L414 190.06c13.34-15.57 2.28-39.62-18.22-39.62h-279.6c-20.5 0-31.56 24.05-18.18 39.62z"
                                                fill="currentColor" />
                                        </svg>
                                    </button>
                                </h3>

                                <div class="accordion__items--body">
                                    <p class="accordion__items--body__desc">
                                        We provide fast and reliable shipping across the nationwide United States. Small and mid-size Infiniti parts ship directly via premium parcel carriers, while heavy components such as V6 engines and automatic transmissions are secured onto custom freight pallets with residential liftgate delivery.
                                    </p>
                                </div>
                            </div>


                            <!-- FAQ 5 -->
                            <div class="accordion__items">
                                <h3 class="accordion__items--title">
                                    <button class="faq__accordion--btn accordion__items--button">
                                        What is your return policy on Infiniti parts?

                                        <svg class="accordion__items--button__icon"
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="20.355"
                                            height="13.394"
                                            viewBox="0 0 512 512">
                                            <path
                                                d="M98 190.06l139.78 163.12a24 24 0 0036.44 0L414 190.06c13.34-15.57 2.28-39.62-18.22-39.62h-279.6c-20.5 0-31.56 24.05-18.18 39.62z"
                                                fill="currentColor" />
                                        </svg>
                                    </button>
                                </h3>

                                <div class="accordion__items--body">
                                    <p class="accordion__items--body__desc">
                                        All eligible Infiniti auto parts are protected by our 30-day return policy. If your order arrives damaged or is not the correct fit for your luxury vehicle, simply contact our dedicated customer support team for an immediate return authorization and replacement or full refund.
                                    </p>
                                </div>
                            </div>


                            <!-- FAQ 6 -->
                            <div class="accordion__items">
                                <h3 class="accordion__items--title">
                                    <button class="faq__accordion--btn accordion__items--button">
                                        Do your Infiniti auto parts come with a warranty?

                                        <svg class="accordion__items--button__icon"
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="20.355"
                                            height="13.394"
                                            viewBox="0 0 512 512">
                                            <path
                                                d="M98 190.06l139.78 163.12a24 24 0 0036.44 0L414 190.06c13.34-15.57 2.28-39.62-18.22-39.62h-279.6c-20.5-15.57-2.28-39.62-18.22-39.62z"
                                                fill="currentColor" />
                                        </svg>
                                    </button>
                                </h3>

                                <div class="accordion__items--body">
                                    <p class="accordion__items--body__desc">
                                        Yes, our OEM and tested replacement Infiniti parts are backed by dependable standard warranty protection. Extended warranty options are also available on major powertrain units like engines, turbochargers, and transmissions.
                                    </p>
                                </div>
                            </div>

                        </div>
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

        <style>
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
                            background: #d90000; /* darker red for contrast */
                            color: #ffffff;      /* force text color */
                            transform: scale(1.05);
                        }

                        .call-btn-primary:hover i {
                            color: #ffffff;      /* force icon color */
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
        </style>

@endsection
