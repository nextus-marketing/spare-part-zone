@extends('layouts.frontend')

@section('title')
    About Us | Spare Part Zone
@endsection

@section('content')

<style>
    .counterup__banner--inner {
        padding: 3rem 0;
        gap: 2.5rem;
    }

    .about__thumb img {
        max-width: 100%;
        height: auto;
        object-fit: cover;
        border-radius: 5px;
    }
</style>

<main class="main__content_wrapper">

    <!-- Breadcrumb Section -->
    <section class="breadcrumb__section breadcrumb__bg">
        <div class="container">
            <div class="row row-cols-1">
                <div class="col">
                    <div class="breadcrumb__content text-center">
                        <ul class="breadcrumb__content--menu d-flex justify-content-center">
                            <li class="breadcrumb__content--menu__items">
                                <a href="/">Home</a>
                            </li>
                            <li class="breadcrumb__content--menu__items">
                                <span>About Us</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End breadcrumb section -->

    <!-- About Section -->
    <section class="about__section section--padding mb-95">
        <div class="container">
            <div class="row">
                <!-- About Image -->
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="about__thumb d-flex">
                        <div class="about__thumb--items">
                            <img
                                src="/frontend/my_img/img-about.png"
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
                            Largest automotive market place all over the world.
                        </h2>

                        <p class="about__content--desc mb-20">
                            Spare Part Zone is your go-to online destination for high-quality auto parts
                            and accessories. We proudly offer a wide selection of products for all makes
                            and models of cars, trucks, and SUVs.
                        </p>

                        <p class="about__content--desc mb-25">
                            We’re committed to delivering an exceptional shopping experience. Our website
                            is user-friendly and easy to navigate, making it simple to find the exact part
                            you need. Our dedicated customer support team is always ready to help.
                        </p>

                        <p class="about__content--desc mb-25">
                            At Spare Part Zone, we stand for quality, reliability, and service. If you're
                            searching for a dependable source for your vehicle’s parts and accessories,
                            look no further than Spare Part Zone.
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

    <!-- Counter Section -->
    <div class="counterup__banner--section counterup__banner__bg2 mb-10"
        id="funfactId">
        <div class="container">
            <div class="row row-cols-2 row-cols-lg-4 g-4 justify-content-center text-center">

                <div class="col">
                    <div class="counterup__items">
                        <h2 class="counterup__title">Products in Stock</h2>
                        <span class="counterup__number js-counter" data-count="50000">0</span>
                    </div>
                </div>

                <div class="col">
                    <div class="counterup__items">
                        <h2 class="counterup__title">Happy Customers</h2>
                        <span class="counterup__number js-counter" data-count="100000">0</span>
                    </div>
                </div>

                <div class="col">
                    <div class="counterup__items">
                        <h2 class="counterup__title">Parts Categories</h2>
                        <span class="counterup__number js-counter" data-count="150">0</span>
                    </div>
                </div>

                <div class="col">
                    <div class="counterup__items">
                        <h2 class="counterup__title">Total Experience</h2>
                        <span class="counterup__number js-counter" data-count="10">0</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End counter section -->

</main>

<!-- Schema Markup -->
<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "Spare Part Zone",
        "url": "https://sparepartzone.com/",
        "logo": "https://sparepartzone.com/frontend/my_img/logo/new_logo.svg",
        "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "+18883707485",
            "contactType": "sales",
            "areaServed": "US",
            "availableLanguage": "en"
        }
    }
</script>

@endsection
