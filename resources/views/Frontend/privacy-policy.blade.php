@extends('layouts.frontend')
@section('title') Privacy Policy | Spare Part Zone @endsection

@section('content')

<style>
    /* ===== Privacy Policy Wrapper ===== */
    .privacy__policy--section {
        background: #ffffff;
        padding: 60px 0;
    }

    .privacy__policy--content {
        margin-bottom: 40px;
    }

    /* ===== Headings ===== */
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
        margin: 20px 0 10px;
    }

    /* ===== Paragraphs ===== */
    .privacy__policy--content__desc {
        font-size: 15px;
        line-height: 1.8;
        color: #555;
        margin-bottom: 15px;
    }

    /* ===== Bullet List Styling ===== */
    .privacy__policy--content__list {
        list-style: none;
        padding-left: 0;
        margin-top: 15px;
    }

    .privacy__policy--content__list li {
        position: relative;
        padding-left: 28px;
        margin-bottom: 12px;
        font-size: 15px !important;
        line-height: 1.7 !important;
        color: #444;
    }

    /* Custom bullet */
    .privacy__policy--content__list li::before {
        content: "✔";
        position: absolute;
        left: 0;
        top: 2px;
        color: #ff4e21; /* red accent */
        font-size: 14px;
        font-weight: bold;
    }

    /* Bold text inside lists */
    .privacy__policy--content__list strong {
        color: #111;
    }

    /* ===== Links ===== */
    .privacy__policy--content a {
        color: #ff4e21;
        text-decoration: none;
        font-weight: 500;
    }

    .privacy__policy--content a:hover {
        text-decoration: underline;
    }

    /* ===== Section Spacing ===== */
    .section_2 {
        padding-top: 10px;
    }

    .section_3 {
        padding-top: 30px;
    }

    /* ===== Mobile Responsive ===== */
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
<!-- Breadcrumb -->
 
<section class="breadcrumb__section breadcrumb__bg">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb__content text-center">
                    <ul class="breadcrumb__content--menu d-flex justify-content-center">
                        <li class="breadcrumb__content--menu__items">
                            <a href="/">Home</a>
                        </li>
                        <li class="breadcrumb__content--menu__items">
                            <span>Privacy Policy</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Privacy Policy -->
<section class="privacy__policy--section section--padding">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <!-- Introduction -->
                <div class="privacy__policy--content">
                    <h2 class="privacy__policy--content__title">Privacy Policy</h2>
                    <p class="privacy__policy--content__desc">
                        At <strong>Spare Part Zone</strong>, we respect your privacy and are committed to protecting your personal information.
                        This Privacy Policy explains how we collect, use, store, and protect your data when you visit or purchase from our website.
                    </p>
                </div>

                <!-- Data Collection -->
                <div class="privacy__policy--content section_2">
                    <h3 class="privacy__policy--content__title">Information We Collect</h3>

                    <ul class="privacy__policy--content__list">
                        <li>
                            <strong>Personal Information:</strong>
                            Name, email address, phone number, billing address, and shipping address when placing an order.
                        </li>
                        <li>
                            <strong>Payment Information:</strong>
                            Payment is securely processed through trusted payment gateways. We do not store card details.
                        </li>
                        <li>
                            <strong>Technical Data:</strong>
                            IP address, browser type, device information, and site usage data.
                        </li>
                        <li>
                            <strong>Cookies:</strong>
                            Used to improve site performance, remember preferences, and enhance user experience.
                        </li>
                    </ul>
                </div>

                <!-- Data Usage -->
                <div class="privacy__policy--content section_2">
                    <h3 class="privacy__policy--content__title">How We Use Your Information</h3>
                    <ul class="privacy__policy--content__list">
                        <li>To process and deliver your orders</li>
                        <li>To provide customer support and respond to inquiries</li>
                        <li>To improve our website and services</li>
                        <li>To send order updates and promotional offers (with consent)</li>
                        <li>To prevent fraud and ensure platform security</li>
                    </ul>
                </div>

                <!-- Data Sharing -->
                <div class="privacy__policy--content section_2">
                    <h3 class="privacy__policy--content__title">Data Sharing & Security</h3>
                    <ul class="privacy__policy--content__list">
                        <li>We share data only with trusted service providers such as payment processors and shipping partners</li>
                        <li>Your data is never sold or rented to third parties</li>
                        <li>We implement industry-standard security measures to protect your information</li>
                    </ul>
                </div>

                <!-- Data Retention -->
                <div class="privacy__policy--content section_2">
                    <h3 class="privacy__policy--content__title">Data Retention</h3>
                    <p class="privacy__policy--content__desc">
                        We retain your information only as long as necessary for legal, accounting, warranty,
                        and operational purposes unless deletion is requested.
                    </p>
                </div>

                <!-- User Rights -->
                <div class="privacy__policy--content section_2">
                    <h3 class="privacy__policy--content__title">Your Rights</h3>
                    <ul class="privacy__policy--content__list">
                        <li>Request access to your personal data</li>
                        <li>Request correction of incorrect information</li>
                        <li>Request deletion of your data</li>
                        <li>Withdraw marketing consent at any time</li>
                    </ul>
                    <p class="privacy__policy--content__desc">
                        Contact us at
                        <a href="mailto:support@sparepartzone.com">support@sparepartzone.com</a>
                        to exercise your rights.
                    </p>
                </div>

                <!-- Terms & Conditions -->
                <div class="privacy__policy--content section_3">
                    <h2 class="privacy__policy--content__title">Terms & Conditions</h2>
                    <p class="privacy__policy--content__desc">
                        These Terms & Conditions govern your use of the Spare Part Zone website and services.
                    </p>
                </div>

                <div class="privacy__policy--content section_2">
                    <ul class="privacy__policy--content__list">
                        <li>
                            <strong>Acceptance of Terms:</strong>
                            By accessing this website, you agree to comply with these Terms and our Privacy Policy.
                        </li>
                        <li>
                            <strong>Product Information:</strong>
                            Product descriptions, pricing, and availability may change without notice.
                        </li>
                        <li>
                            <strong>Orders & Payments:</strong>
                            Orders are confirmed only after successful payment. Accurate billing details are required.
                        </li>
                        <li>
                            <strong>Shipping & Returns:</strong>
                            30-day return policy applies. Electrical and custom-made parts are non-returnable.
                        </li>
                        <li>
                            <strong>User Account:</strong>
                            You are responsible for maintaining the confidentiality of your login credentials.
                        </li>
                        <li>
                            <strong>Limitation of Liability:</strong>
                            Spare Part Zone is not responsible for indirect or consequential damages.
                        </li>
                        <li>
                            <strong>Changes to Terms:</strong>
                            We reserve the right to update these Terms at any time.
                        </li>
                        <li>
                            <strong>Contact Information:</strong>
                            For questions, email us at
                            <a href="mailto:support@sparepartzone.com">support@sparepartzone.com</a>.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
