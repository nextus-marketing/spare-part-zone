@extends('layouts.frontend')
@section('title') Shipping Policy | Spare Part Zone @endsection

@section('content')

<!-- ================= Breadcrumb ================= -->
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
                            <span>Shipping Policy</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ================= Shipping Policy ================= -->
<section class="privacy__policy--section section--padding">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <!-- Intro -->
                <div class="privacy__policy--content">
                    <h2 class="privacy__policy--content__title">Shipping Policy</h2>
                    <p class="privacy__policy--content__desc">
                        At <strong>Spare Part Zone</strong>, we aim to deliver your orders quickly, securely,
                        and efficiently. Please review the details below regarding order processing, delivery timelines,
                        and shipping support.
                    </p>
                </div>

                <!-- Order Processing -->
                <div class="privacy__policy--content section_2">
                    <h3 class="privacy__policy--content__subtitle">Order Processing</h3>
                    <p class="privacy__policy--content__desc">
                        Orders are processed within <strong>1–2 business days</strong> after payment confirmation.
                        Orders placed on weekends or public holidays are processed on the next business day.
                    </p>
                </div>

                <!-- Shipping Methods -->
                <div class="privacy__policy--content section_2">
                    <h3 class="privacy__policy--content__subtitle">Shipping Methods & Delivery Time</h3>
                    <ul class="privacy__policy--content__list">
                        <li><strong>Standard Shipping:</strong> 5–7 business days</li>
                        <li><strong>Express Shipping:</strong> 2–3 business days</li>
                        <li><strong>Local Delivery (if available):</strong> 1–2 business days</li>
                    </ul>
                </div>

                <!-- Shipping Rates -->
                <div class="privacy__policy--content section_2">
                    <h3 class="privacy__policy--content__subtitle">Shipping Rates</h3>
                    <p class="privacy__policy--content__desc">
                        Shipping charges are calculated at checkout based on delivery location, package weight,
                        and selected shipping method. Free shipping offers may be available on selected products.
                    </p>
                </div>

                <!-- Tracking -->
                <div class="privacy__policy--content section_2">
                    <h3 class="privacy__policy--content__subtitle">Order Tracking</h3>
                    <p class="privacy__policy--content__desc">
                        Once your order is shipped, you will receive a confirmation email with tracking information.
                        You can track your shipment anytime using the provided link.
                    </p>
                </div>

                <!-- Restrictions -->
                <div class="privacy__policy--content section_2">
                    <h3 class="privacy__policy--content__subtitle">Shipping Restrictions</h3>
                    <p class="privacy__policy--content__desc">
                        We ship within approved service regions only.
                        Certain oversized, hazardous, or custom-made items may have delivery restrictions.
                        Please contact us for international shipping inquiries.
                    </p>
                </div>

                <!-- Delays -->
                <div class="privacy__policy--content section_2">
                    <h3 class="privacy__policy--content__subtitle">Delivery Delays</h3>
                    <p class="privacy__policy--content__desc">
                        While we strive for timely delivery, delays may occur due to weather conditions,
                        courier service disruptions, or high order volumes.
                    </p>
                </div>

                <!-- Damaged -->
                <div class="privacy__policy--content section_2">
                    <h3 class="privacy__policy--content__subtitle">Damaged or Lost Packages</h3>
                    <p class="privacy__policy--content__desc">
                        If your package is damaged or lost during transit, please contact us within
                        <strong>48 hours</strong> at
                        <a href="mailto:support@sparepartzone.com">support@sparepartzone.com</a>.
                        Our support team will assist you promptly.
                    </p>
                </div>

                <!-- Contact -->
                <div class="privacy__policy--content section_2">
                    <h3 class="privacy__policy--content__subtitle">Contact Us</h3>
                    <p class="privacy__policy--content__desc">
                        For any shipping-related questions, contact us at
                        <a href="mailto:support@sparepartzone.com">support@sparepartzone.com</a>
                        or call
                        <a href="tel:+1 (855) 581-5811">+1 (855) 581-5811</a>.
                    </p>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- ================= CSS ================= -->
<style>
    /* Section */
    .privacy__policy--section {
        background: #ffffff;
        padding: 60px 0;
    }

    /* Content spacing */
    /* .privacy__policy--content {
        margin-bottom: 35px;
    } */

    /* Titles */
    .privacy__policy--content__title {
        font-size: 28px;
        font-weight: 700;
        color: #111;
        margin-bottom: 20px;
        padding-bottom: 10px;
        border-bottom: 2px solid #e5e5e5;
    }

    .privacy__policy--content__subtitle {
        font-size: 18px;
        font-weight: 600;
        color: #222;
        margin-bottom: 12px;
    }

    /* Text */
    .privacy__policy--content__desc {
        font-size: 15px;
        line-height: 1.8;
        color: #555;
    }

    /* Bullet list */
    .privacy__policy--content__list {
        list-style: none;
        padding-left: 0;
        margin-top: 15px;
    }

    .privacy__policy--content__list li {
        position: relative;
        padding-left: 28px;
        margin-bottom: 12px;
        font-size: 15px;
        line-height: 1.7;
        color: #444;
    }

    .privacy__policy--content__list li::before {
        content: "✔";
        position: absolute;
        left: 0;
        top: 2px;
        color: #ff4e21;
        font-weight: bold;
    }

    /* Links */
    .privacy__policy--content a {
        color: #ff4e21;
        font-weight: 500;
        text-decoration: none;
    }

    .privacy__policy--content a:hover {
        text-decoration: underline;
    }

    /* Spacing helpers */
    /* .section_2 {
        padding-top: 10px;
    } */

    /* Responsive */
    @media (max-width: 768px) {
        .privacy__policy--section {
            padding: 40px 0;
        }

        .privacy__policy--content__title {
            font-size: 22px;
        }

        .privacy__policy--content__desc,
        .privacy__policy--content__list li {
            font-size: 14px;
        }
    }
</style>

@endsection
