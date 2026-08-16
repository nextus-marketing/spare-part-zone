@extends('layouts.frontend')
@section('title') Return Policy | Spare Part Zone @endsection

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
                            <span>Return Policy</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ================= Return Policy ================= -->
<section class="privacy__policy--section section--padding">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <!-- Intro -->
                <div class="privacy__policy--content">
                    <h2 class="privacy__policy--content__title">Return Policy</h2>
                    <p class="privacy__policy--content__desc">
                       If you receive a damaged or incorrect item, please notify us immediately. <b>DO NOT SEND THE PART BACK</b> without contacting us first. The return of the part is the customer’s responsibility and must be completed as follows:
                    </p>
                </div>

                <!-- Order Processing -->
                <div class="privacy__policy--content section_2">
                    <h3 class="privacy__policy--content__subtitle">1. Return Period and Process:</h3>
                    <ul class="privacy__policy--content__list">
                        <li>Items can be returned within 15 days (about 2 weeks) of delivery, based on the tracking number. It may take up to 25 days (about 3 and a half weeks) for a part to reach us once returned.</li>
                        <li>After we receive the part at our fulfillment center, allow up to seven business days for the refund to appear in your account.</li>
                        <li>Single items from a set cannot be returned individually.</li>
                        <li>Refunds will be applied to the original method of payment. If the original credit card is unavailable, store credit will be issued, which can be used for future purchases with <b>Business Accounting Corp DBA Autovehicleparts.</b></li>
                        <li>Items that are damaged upon return may be denied a refund or exchange.</li>
                    </ul>
                </div>

                <div class="privacy__policy--content section_2">
                    <h3 class="privacy__policy--content__subtitle">2. Return Request and Shipping:</h3>
                    <ul class="privacy__policy--content__list">
                        <li>When your return request is accepted, we will send an email to your registered email address with the subject line <b>“Return Assistance from Business Accounting Corp DBA Autovehicleparts.”</b></li>
                        <li>Ensure you ship the return by the date specified in this email to avoid delays or issues with the refund process.</li>
                        <li>Depending on the seller’s policy, you will either receive a return shipping label from the seller or be asked to purchase one directly from a carrier.</li>
                        <li>The seller pays for return shipping if they offer a free returns policy or if the item was damaged or faulty. The customer pays for return shipping if returning the item due to a change of mind, provided the seller’s return policy states that buyers are responsible for return shipping.</li>
                        <li>Use a carrier that provides tracking and upload the details to the return request.</li>
                    </ul>
                </div>

                <div class="privacy__policy--content section_2">
                    <h3 class="privacy__policy--content__subtitle">3. Return Address and Refunds:</h3>
                    <ul class="privacy__policy--content__list">
                        <li>The latest date to ship the return will be shown in an email sent to the buyer, as well as within the return request. If the buyer does not ship the return by the specified date, we may close the return request.</li>
                        <li>The return address will be provided at the conclusion of the contract and upon receipt of the RMA. Items returned to <b>Business Accounting Corp DBA Autovehicleparts</b> will be redirected to the correct address specified in the RMA instructions at your expense.</li>
                        <li>A refund will be issued as soon as we receive the goods. NO OPERATING COSTS are covered for any parts sold by Business <b>Accounting Corp DBA Autovehicleparts.</b></li>
                        <li>If the part is found to be defective, we will first attempt to replace it. If a replacement cannot be sent, a full refund of the total sale will be issued. Goods must reach us before the warranty expires to be eligible for a refund. Return shipping charges are non-refundable.</li>
                    </ul>
                </div>

                <div class="privacy__policy--content">
                    <p class="privacy__policy--content__desc">
                      For returns due to reasons other than those specified above (e.g., incorrect part ordered by the customer, part no longer needed), a 30% restocking fee and the original shipping cost may be deducted from the refund. Please consult with a mechanical specialist before ordering to ensure the correct part is selected. We strive to send the correct parts. Items returned after the warranty period has expired are non-refundable.
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
        line-height: 1.7 !important;
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
