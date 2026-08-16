@extends('layouts.frontend')
@section('title') Terms & Conditions | Spare Part Zone @endsection

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
                            <span>Terms & Conditions</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ================= Terms & Conditions ================= -->
<section class="privacy__policy--section section--padding">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <!-- Intro -->
                <div class="privacy__policy--content">
                    <h2 class="privacy__policy--content__title">Terms & Conditions</h2>
                    <p class="privacy__policy--content__desc">
                        These Terms & Conditions govern your access to and use of the
                        <strong>Spare Part Zone</strong> website and services.
                        By accessing or using our website, you agree to comply with these Terms.
                    </p>
                </div>

                <!-- Terms List -->
                <div class="privacy__policy--content section_2">

                    <h3 class="privacy__policy--content__subtitle">1. Acceptance of Terms</h3>
                    <p class="privacy__policy--content__desc">
                        By using this website, you agree to be bound by these Terms and our Privacy Policy.
                        If you do not agree, please discontinue use of our website and services.
                    </p>

                    <h3 class="privacy__policy--content__subtitle">2. Eligibility</h3>
                    <p class="privacy__policy--content__desc">
                        You must be at least <strong>18 years old</strong> or the legal age of majority
                        in your jurisdiction to place an order or use our services.
                    </p>

                    <h3 class="privacy__policy--content__subtitle">3. Product Information</h3>
                    <p class="privacy__policy--content__desc">
                        We strive to ensure accuracy in product descriptions, images, and pricing.
                        However, errors may occur and we reserve the right to correct them without prior notice.
                    </p>

                    <h3 class="privacy__policy--content__subtitle">4. Orders & Payments</h3>
                    <p class="privacy__policy--content__desc">
                        All orders are subject to availability and acceptance.
                        Payments must be completed in full at the time of purchase.
                        Prices may change without notice.
                    </p>

                    <h3 class="privacy__policy--content__subtitle">5. Shipping & Delivery</h3>
                    <p class="privacy__policy--content__desc">
                        Shipping timelines are estimates and may vary due to location,
                        courier delays, or unforeseen circumstances.
                        We are not responsible for delays beyond our control.
                    </p>

                    <h3 class="privacy__policy--content__subtitle">6. Returns & Refunds</h3>
                    <p class="privacy__policy--content__desc">
                        Products may be returned within <strong>15 days</strong> of delivery if unused
                        and in original packaging. Electrical and custom-made items are non-returnable.
                        Refunds are processed within 7–10 business days.
                    </p>

                    <h3 class="privacy__policy--content__subtitle">7. User Accounts</h3>
                    <p class="privacy__policy--content__desc">
                        You are responsible for maintaining the confidentiality of your account credentials.
                        Any activity conducted under your account is your responsibility.
                    </p>

                    <h3 class="privacy__policy--content__subtitle">8. Intellectual Property</h3>
                    <p class="privacy__policy--content__desc">
                        All website content, including text, graphics, logos, and images,
                        is the intellectual property of Spare Part Zone and protected by law.
                        Unauthorized use is strictly prohibited.
                    </p>

                    <h3 class="privacy__policy--content__subtitle">9. Limitation of Liability</h3>
                    <p class="privacy__policy--content__desc">
                        Spare Part Zone shall not be liable for any indirect, incidental,
                        or consequential damages resulting from the use of our website or products.
                    </p>

                    <h3 class="privacy__policy--content__subtitle">10. Changes to Terms</h3>
                    <p class="privacy__policy--content__desc">
                        We reserve the right to update these Terms at any time.
                        Continued use of the website constitutes acceptance of the revised Terms.
                    </p>

                    <h3 class="privacy__policy--content__subtitle">11. Governing Law</h3>
                    <p class="privacy__policy--content__desc">
                        These Terms shall be governed by and interpreted in accordance
                        with the laws of your applicable jurisdiction.
                    </p>

                    <h3 class="privacy__policy--content__subtitle">12. Contact Information</h3>
                    <p class="privacy__policy--content__desc">
                        If you have any questions regarding these Terms,
                        please contact us at
                        <a href="mailto:support@sparepartzone.com">support@sparepartzone.com</a>.
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
    .privacy__policy--content {
        margin-bottom: 35px;
    }

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

    /* Links */
    .privacy__policy--content a {
        color: #ff4e21;
        font-weight: 500;
        text-decoration: none;
    }

    .privacy__policy--content a:hover {
        text-decoration: underline;
    }

    /* Spacing helper */
    .section_2 {
        padding-top: 10px;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .privacy__policy--section {
            padding: 40px 0;
        }

        .privacy__policy--content__title {
            font-size: 22px;
        }

        .privacy__policy--content__desc {
            font-size: 14px;
        }
    }
</style>

@endsection
