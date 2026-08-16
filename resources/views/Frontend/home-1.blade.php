@extends('layouts.frontend')
@section('title')
    Shop Spare Part Zone Online | Fast, Reliable, Affordable
@endsection
@section('head_tag')
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5F9B5LVG');</script>
<!-- End Google Tag Manager -->
@endsection
@section('content')
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5F9B5LVG"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<style>
    /* Mobile */
    @media (max-width: 768px) {
    .main__header--inner {
        height: 43px;
    }
    }
    @media (max-width: 767px) {
    .offcanvas__header--menu__open--btn {
        display: none !important;
    }
    }
    @media (max-width: 767px) {
        .offcanvas__header--menu__open--btn,
        .site-logo {
            display: none !important;
        }
    }
    @media (max-width: 767px) {
        .hide-mobile {
            display: none !important;
        }
    }
    @media (min-width: 1025px) {
        .hide-desktop {
            display: none !important;
        }
    }

    @media (min-width: 992px) {  /* Desktop */
        .banner__form {
            margin-right: 50px !important;
            width: 500px;
        }
    }

    @media (max-width: 991px) {  /* Mobile & Tablet */
        .banner__form {
            margin-right: 0 !important;
        }
    }

    @media only screen and (min-width: 1366px) {
        .hero__slider--items__style3 {
            height: 520px;
        }
    }

    .css-1yzzujv {
        display:none !important;
    }
    @media only screen and (min-width: 1200px) {
        .contact__info {
            width: 46rem;
            padding: 2rem 6rem;
        }
    }

    .form-row-inline {
        display: flex;
        gap: 12px;
        margin-bottom: 12px;
    }
    .form-row-inline > div {
        flex: 1;
    }
    .inline-input {
        width: 100%;
        padding: 10px 12px;
        border: 1px solid #ccc;
        border-radius: 6px;
        font-size: 14px;
        box-sizing: border-box;
    }
    /* Style the select box */
    .inline-input {
        width: 100%;
        padding: 10px 12px;
        border: 1px solid #ccc;
        border-radius: 6px;
        font-size: 14px;
        box-sizing: border-box;
        color: #7a6d6d; /* Default text color */
    }

    /* Style the placeholder option */
    .inline-input .placeholder {
        color: #999; /* Gray color */
    }

     .contact__form--input {
    width: 100%;
    padding: 6px;
    /* margin-bottom: 2rem; */
    border: 1px solid #ccc;
    border-radius: 4px;
    }

    .form-grid {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    flex-direction: column;
    }
    .form-row {
    display: flex;
    gap: 10px;
    margin-bottom: 0px;
    }



    @media (max-width: 768px) {
    .hero__slider--items__style3 {
        flex-direction: column;
        text-align: center;
        padding: 20px 15px;
    }
    }

    @media (max-width: 768px) {
        .hero__slider--items__style3 {
            flex-direction: column;
            text-align: center;
            padding: 20px 30px;
        }
    }

    @media only screen and (min-width: 992px) {
        .primary__btn {
            font-size: 1.5rem;
            line-height: 4.2rem;
            height: 4.2rem;
            padding: 0 1.2rem;
        }
    }

     .form-grid {
        display: grid !important;
        grid-template-columns: 1fr !important;
        gap: 15px !important;

    }

    /* On desktop show 4 fields in a row */
    @media (min-width: 992px) {
        .form-grid {
            grid-template-columns: repeat(4, 1fr) !important;
            gap: 20px !important;
        }
    }

     p,
    .p {
        margin-bottom: -0.5rem;
    }

       /* Overlay */
        .sale-popup {
        position: fixed;
        inset: 0;
        background: rgba(0,0,0,0.6);
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 99999;
        animation: fadeIn 0.4s ease;
        }

        /* Popup Box */
        .sale-popup-inner {
        display: flex;
        background: #fff;
        border-radius: 14px;
        overflow: hidden;
        box-shadow: 0 10px 25px rgba(0,0,0,0.25);
        max-width: 650px;
        width: 90%;
        position: relative;
        animation: slideUp 0.4s ease;
        }

        /* Close Button */
        .sale-close {
        position: absolute;
        top: 12px;
        right: 18px;
        font-size: 26px;
        color: #333;
        background: none;
        border: none;
        cursor: pointer;
        transition: 0.3s;
        }
        .sale-close:hover { color: #ff3b3b; }

        /* Left Section */
        .sale-left {
        background: #ff4e21;
        ;
        flex: 1 1 45%;
        padding: 40px 30px;
        text-align: left;
        display: flex;
        justify-content: center;
        align-items: center;
        }
        .sale-left h2 {
        font-size: 3.8rem;
        line-height: 1.2;
        font-weight: 900;
        color: #ffff;
        letter-spacing: -1px;
        }
        .sale-left span {
        color: transparent;
        -webkit-text-stroke: 1px #ffff;
        margin-left: 8px;
        }

        /* Right Section */
        .sale-right {
        flex: 1 1 55%;
        background: #ede8ff;
        padding: 50px 35px;
        text-align: center;
        }
        .sale-percent {
        font-size: 5.8rem;
        font-weight: 900;
        color: #000;
        margin: 0;
        line-height: 1.2;
        }
        .sale-text {
        margin-top: 6px;
        font-weight: 600;
        color: #555;
        letter-spacing: 0.5px;
        }

        /* Form */
        .sale-form {
        margin-top: 20px;
        display: flex;
        gap: 8px;
        justify-content: center;
        align-items: center;
        }
        .sale-form input {
        padding: 10px 14px;
        border: 2px solid #c3b8ff;
        border-radius: 6px;
        outline: none;
        font-size: 0.95rem;
        width: 60%;
        background: #fff;
        }
        .sale-form button {
        background: #ff4e21;;
        color: #fff;
        font-weight: 600;
        border: none;
        padding: 10px 16px;
        border-radius: 6px;
        cursor: pointer;
        transition: 0.3s;
        }


        .call-button {
        display: inline-block;
        background: #ff4e21;
        color: #fff;
        font-weight: 600;
        padding: 10px 16px;
        border-radius: 6px;
        text-decoration: none;
        cursor: pointer;
        transition: 0.3s;
        }

        a:hover {
            text-decoration: none;
            color: #000000;
        }

        /* Animations */
        @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
        }
        @keyframes slideUp {
        from { transform: translateY(40px); opacity: 0; }
        to { transform: translateY(0); opacity: 1; }
        }

        /* Responsive */
        @media (max-width: 600px) {
        .sale-popup-inner {
            flex-direction: column;
            text-align: center;
        }
        .sale-left {
            padding: 25px;
        }
        .sale-right {
            padding: 30px 20px;
        }
        .sale-form {
            flex-direction: column;
        }
        .sale-form input {
            width: 100%;
        }
        .sale-form button {
            width: 100%;
        }
        }

           /* Popup Overlay */
    .popup-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0,0,0,0.6);
        display: none;
        justify-content: center;
        align-items: center;
        z-index: 99999;
    }

    /* Popup Box */
    .popup-box {
        background: #fff;
        padding: 15px;
        border-radius: 10px;
        width: 90%;
        max-width: 550px;
        position: relative;
        animation: fadeIn 0.3s ease;
    }

    /* Close Button */
    .popup-close {
        position: absolute;
        right: 12px;
        top: 12px;
        font-size: 24px;
        cursor: pointer;
        color: #333;
    }

    @keyframes fadeIn {
    from { opacity: 0; transform: scale(0.9); }
    to { opacity: 1; transform: scale(1); }
    }

    @media (max-width: 768px) {
        .quote-btn-wrapper {
            display: none !important;
        }
    }

    .modal-logo {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-bottom: 5px;
    }
</style>

    <main class="main__content_wrapper">
        <!-- Start slider section -->
        <!-- Swiper CSS -->
 

        <section class="hero__slider--section slider__section--bg3" style="padding: 0; margin: 0;">
            
            <div class="hero__slider--inner noninteractive-slider swiper">
                
                <div class="hero__slider--wrapper swiper-wrapper">

                <!-- Slider 1 -->
                <div class="swiper-slide"
                    style="background: url('/frontend/my_img/banner/banner-6.webp') no-repeat center center / cover;">
                    <div class="site-logo" style="margin-top:30px; margin-left:20px; ">
                        <a href="/home">
                            <img src="/frontend/my_img/logo/new_logo.svg" alt="Spare Part Zone Logo">
                        </a>
                    </div>
                            
                    <div class="hero__slider--items__style3 d-flex align-items-center justify-content-between">
                    <div class="slider__content style3 container" style="margin-left: 0;">
                        <span class="slider__subtitle style3">The Right Parts. The Right Price.</span>
                        <h1 class="slider__maintitle style3 text__secondary h2">
                        One-Stop Shop for  <br> Spare Part Zone
                        </h1>
                        <p class="slider__desc style3" style="color: white;">Shop confidently with guaranteed-fit components </br> for every make and model.</p>
                        <a class="primary__btn slider__btn openPopup" href="">
                        <i class="fa-regular fa-message"  style="margin-right: 8px;"></i> Get A Quote
                        </a>
                    </div>

                    <!-- 📦 START: FORM IN BANNER -->
                        <div class="banner__form" style="background: white; padding: 25px; border-radius: 8px; max-width: 450px; margin-right: 50px;">
                        <h3 style="text-align: center;">Request a Part Today</h3>
                        </br>
                        <form action="/lead-enquiry" enctype="multipart/form-data" method="POST" 
                            class="leadForm contact__form--inner" data-wow-delay="0.5s"
                            style="max-width: 450px; margin: 0 auto;">

                            @csrf

                            <input type="hidden" value="Home Page lead" id="form_name" name="form_name">
                            <!-- Row 1 -->
                            <div class="form-row-inline">
                                <div>
                                    <input type="text" name="full_name" placeholder="Your Name*" class="inline-input" />
                                    <div class="field_error" id="full_name-error" style="color:#ff4e21; font-size:12px;"></div>
                                </div>

                                <div>
                                    <input type="text" name="mobile" placeholder="Phone Number*" class="inline-input" />
                                    <div class="field_error" id="mobile-error" style="color:#ff4e21; font-size:12px;"></div>
                                </div>
                            </div>

                            <!-- Row 2 -->
                            <div class="form-row-inline">
                                <div>
                                    <input type="text" name="email" placeholder="Email*" class="inline-input" />
                                    <div class="field_error" id="email-error" style="color:#ff4e21; font-size:12px;"></div>
                                </div>

                                <div>
                                    <input type="text" name="zip" placeholder="Zip*" class="inline-input" />
                                    <div class="field_error" id="zip-error" style="color:#ff4e21; font-size:12px;"></div>
                                </div>
                            </div>

                            <!-- Row 3 -->
                            <div class="form-row-inline">
                                <div>
                                    <select name="vehicle_year" class="inline-input">
                                        <option value="" disabled selected>Vehicle Year*</option>
                                        <option value="2026">2026</option>
                                        <option value="2025">2025</option>
                                        <option value="2024">2024</option>
                                        <option value="2023">2023</option>
                                        <option value="2022">2022</option>
                                        <option value="2021">2021</option>
                                        <option value="2020">2020</option>
                                        <option value="2019">2019</option>
                                        <option value="2018">2018</option>
                                        <option value="2017">2017</option>
                                        <option value="2016">2016</option>
                                        <option value="2015">2015</option>
                                        <option value="2014">2014</option>
                                        <option value="2013">2013</option>
                                        <option value="2012">2012</option>
                                        <option value="2011">2011</option>
                                        <option value="2010">2010</option>
                                        <option value="2009">2009</option>
                                        <option value="2008">2008</option>
                                        <option value="2007">2007</option>
                                        <option value="2006">2006</option>
                                        <option value="2005">2005</option>
                                        <option value="2004">2004</option>
                                        <option value="2003">2003</option>
                                        <option value="2002">2002</option>
                                        <option value="2001">2001</option>
                                        <option value="2000">2000</option>
                                        <option value="1999">1999</option>
                                        <option value="1998">1998</option>
                                        <option value="1997">1997</option>
                                        <option value="1996">1996</option>
                                        <option value="1995">1995</option>
                                        <option value="1994">1994</option>
                                        <option value="1993">1993</option>
                                        <option value="1992">1992</option>
                                        <option value="1991">1991</option>
                                        <option value="1990">1990</option>
                                        <option value="1989">1989</option>
                                        <option value="1988">1988</option>
                                        <option value="1987">1987</option>
                                        <option value="1986">1986</option>
                                        <option value="1985">1985</option>
                                        <option value="1984">1984</option>
                                        <option value="1983">1983</option>
                                        <option value="1982">1982</option>
                                        <option value="1981">1981</option>
                                        <option value="1980">1980</option>
                                        <option value="1979">1979</option>
                                        <option value="1978">1978</option>
                                        <option value="1977">1977</option>
                                        <option value="1976">1976</option>
                                        <option value="1975">1975</option>
                                        <option value="1974">1974</option>
                                        <option value="1973">1973</option>
                                        <option value="1972">1972</option>
                                        <option value="1971">1971</option>
                                        <option value="1970">1970</option>
                                        <option value="1969">1969</option>
                                        <option value="1968">1968</option>
                                        <option value="1967">1967</option>
                                        <option value="1966">1966</option>
                                        <option value="1965">1965</option>
                                        <option value="1964">1964</option>
                                        <option value="1963">1963</option>
                                        <option value="1962">1962</option>
                                        <option value="1961">1961</option>
                                        <option value="1960">1960</option>
                                        <option value="1959">1959</option>
                                        <option value="1958">1958</option>
                                        <option value="1957">1957</option>
                                        <option value="1956">1956</option>
                                        <option value="1955">1955</option>
                                        <option value="1954">1954</option>
                                        <option value="1953">1953</option>
                                        <option value="1952">1952</option>
                                    </select>
                                    <div class="field_error" id="vehicle_year-error" style="color:#ff4e21; font-size:12px;"></div>
                                </div>

                                <div> 
                                    <select name="make" class="inline-input placeholder-gray">
                                        <option value="" disabled selected class="placeholder">Vehicle Make*</option>
                                        <option value="Acura">Acura</option>
                                        <option value="Alfa Romeo">Alfa Romeo</option>
                                        <option value="AMC">AMC</option>
                                        <option value="Aston Martin">Aston Martin</option>
                                        <option value="Audi">Audi</option>
                                        <option value="Avanti">Avanti</option>
                                        <option value="BMW">BMW</option>
                                        <option value="Bentley">Bentley</option>
                                        <option value="Buick">Buick</option>
                                        <option value="Cadillac">Cadillac</option>
                                        <option value="Chevrolet">Chevrolet</option>
                                        <option value="Chrysler">Chrysler</option>
                                        <option value="Daewoo">Daewoo</option>
                                        <option value="Daihatsu">Daihatsu</option>
                                        <option value="Datsun">Datsun</option>
                                        <option value="DeLorean">DeLorean</option>
                                        <option value="Dodge">Dodge</option>
                                        <option value="Eagle">Eagle</option>
                                        <option value="Ferrari">Ferrari</option>
                                        <option value="FIAT">FIAT</option>
                                        <option value="Fikser">Fikser</option>
                                        <option value="Ford">Ford</option>
                                        <option value="Freightliner">Freightliner</option>
                                        <option value="GEO">GEO</option>
                                        <option value="GMC">GMC</option>
                                        <option value="Honda">Honda</option>
                                        <option value="HUMMER">HUMMER</option>
                                        <option value="Hyundai">Hyundai</option>
                                        <option value="Infiniti">Infiniti</option>
                                        <option value="Isuzu">Isuzu</option>
                                        <option value="Jeep">Jeep</option>
                                        <option value="Jaguar">Jaguar</option>
                                        <option value="Kia">Kia</option>
                                        <option value="Lamborghini">Lamborghini</option>
                                        <option value="Lancia">Lancia</option>
                                        <option value="Land Rover">Land Rover</option>
                                        <option value="Lexus">Lexus</option>
                                        <option value="Lincoln">Lincoln</option>
                                        <option value="Lotus">Lotus</option>
                                        <option value="Maserati">Maserati</option>
                                        <option value="Mazda">Mazda</option>
                                        <option value="Maybach">Maybach</option>
                                        <option value="McLaren">McLaren</option>
                                        <option value="Mercedes-Benz">Mercedes-Benz</option>
                                        <option value="Mercury">Mercury</option>
                                        <option value="Mini">Mini</option>
                                        <option value="Mitsubishi">Mitsubishi</option>
                                        <option value="Oldsmobile">Oldsmobile</option>
                                        <option value="Peugeot">Peugeot</option>
                                        <option value="Plymouth">Plymouth</option>
                                        <option value="Pontiac">Pontiac</option>
                                        <option value="Porsche">Porsche</option>
                                        <option value="Renault">Renault</option>
                                        <option value="Rolls-Royce">Rolls-Royce</option>
                                        <option value="Rover">Rover</option>
                                        <option value="Saab">Saab</option>
                                        <option value="Saturn">Saturn</option>
                                        <option value="Scion">Scion</option>
                                        <option value="Smart">Smart</option>
                                        <option value="SRT">SRT</option>
                                        <option value="Sterling">Sterling</option>
                                        <option value="Subaru">Subaru</option>
                                        <option value="Suzuki">Suzuki</option>
                                        <option value="Tesla">Tesla</option>
                                        <option value="Toyota">Toyota</option>
                                        <option value="Triumph">Triumph</option>
                                        <option value="Volkswagen">Volkswagen</option>
                                        <option value="Volvo">Volvo</option>
                                        <option value="Yugo">Yugo</option>
                                    </select>
                                    <div class="field_error" id="make-error" style="color:#ff4e21; font-size:12px;"></div>
                                </div>
                            </div>

                            <!-- Row 4 -->
                            <div class="form-row-inline">
                                <div>
                                    <input type="text" name="vehicle_model" placeholder="Vehicle Model*" class="inline-input" />
                                    <div class="field_error" id="vehicle_model-error" style="color:#ff4e21; font-size:12px;"></div>
                                </div>

                                <div>
                                    <input type="text" name="part_name" placeholder="Part Name*" class="inline-input" />
                                    <div class="field_error" id="part_name-error" style="color:#ff4e21; font-size:12px;"></div>
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <div style="text-align: center;">
                                <button type="submit" class="primary__btn contact__form--btn">
                                    <span>Inquire Now</span>
                                </button>
                            </div>
                        </form>
                        </div>
                    <!-- 📦 END: FORM IN BANNER -->
                    </div>
                </div>
                </div>
            </div>
        </section>

        <!-- Start banner section -->
        <section class="banner__section section--padding pt-5">
            <div class="container">
                <div class="row  mb--n30">
                    <div class="col-lg-6 col-md-6 mb-30">
                        <div class="banner__items position__relative">
                            <a class="banner__thumbnail display-block" href="tel:+1 (855) 581-5811"><img
                                    class="banner__thumbnail--img banner__max--height"
                                    src="/frontend/assets/img/banner/banner1.webp" alt="banner-img">
                                <div class="banner__content">
                                    {{-- <span class="banner__content--subtitle text__secondary">Toyota Combo</span> --}}
                                    <h2 class="banner__content--title"><span class="banner__content--title__inner">CAR
                                            PARTS</span>
                                        </br>COLLECTION</h2>
                                </div>
                                {{-- <span class="banner__badge">25% <br> off</span> --}}
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 mb-30">
                        <div class="banner__items position__relative">
                            <a class="banner__thumbnail display-block" href="tel:+1 (855) 581-5811"><img
                                    class="banner__thumbnail--img banner__max--height"
                                    src="/frontend/assets/img/banner/banner2.webp" alt="banner-img">
                                <div class="banner__content right">
                                    {{-- <span class="banner__badge--style2">20% Off</span> --}}
                                    <h2 class="banner__content--title">BODY PARTS <br> FOR ANY <span
                                            class="banner__content--title__inner"> VEHICLE </span></h2>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Start product section -->

        <section class="product__section section--padding  pt-0">
            <div class="container">
                <div class="section__heading section__heading--flex border-bottom mb-30">
                    <h2 class="section__heading--maintitle w-100">Today's <span>Top Choice</span></h2>
                </div>

                <div class="product__section--inner pb-15 product__swiper--activation swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <article class="product__card">
                                <div class="product__card--thumbnail">
                                    <a class="product__card--thumbnail__link display-block" href="/engine-parts/turbocharger">
                                        <img src="/frontend/my_img/top/turbo-large.jpg" alt="product-img">

                                    </a>


                                </div>
                                <div class="product__card--content">

                                    <h3 class="product__card--title" style="text-align: center"><a
                                            href="/engine-parts/turbocharger">Turbo
                                            Charger </a></h3>
                                    </br>
                                    <div style="display: flex; justify-content: center;">
                                        
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="swiper-slide">
                            <article class="product__card">
                                <div class="product__card--thumbnail">
                                    <a class="product__card--thumbnail__link display-block" href="/electrical-parts/alternator">
                                        <img src="/frontend/my_img/top/altenator.jpg" alt="product-img">

                                    </a>


                                </div>
                                <div class="product__card--content">

                                    <h3 class="product__card--title" style="text-align: center"><a
                                            href="/electrical-parts/alternator">Alternator</a></h3>
                                    </br>
                                    <div style="display: flex; justify-content: center;">
                                        <!-- <a class="primary__btn slider__btn" href="tel:+1 (855) 581-5811">
                                            <i class="fas fa-phone" style="margin-right: 8px;"></i>
                                            Enquire Now
                                        </a> -->
                                    </div>
                                </div>
                            </article>
                        </div>

                        <div class="swiper-slide">
                            <article class="product__card">
                                <div class="product__card--thumbnail">
                                    <a class="product__card--thumbnail__link display-block" href="/exterior-parts/wheel-rim">
                                        <img src="/frontend/my_img/top/wheel_rim.webp" alt="product-img">
                                    </a>
                                </div>
                                <div class="product__card--content">

                                    <h3 class="product__card--title" style="text-align: center"><a
                                            href="/exterior-parts/wheel-rim">Wheel
                                            Rim </a></h3>
                                    </br>
                                    <div style="display: flex; justify-content: center;">
                                        <!-- <a class="primary__btn slider__btn" href="tel:+1 (855) 581-5811">
                                            <i class="fas fa-phone" style="margin-right: 8px;"></i>
                                            Enquire Now
                                        </a> -->
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="swiper-slide">
                            <article class="product__card">
                                <div class="product__card--thumbnail">
                                    <a class="product__card--thumbnail__link display-block" href="/electrical-parts/headlight">
                                        <img src="/frontend/my_img/top/car-headlights.webp"
                                            alt="product-img">
                                    </a>


                                </div>
                                <div class="product__card--content">

                                    <h3 class="product__card--title" style="text-align: center"><a href="/electrical-parts/headlight">Car
                                            Headlight </a></h3>
                                    </br>
                                    <div style="display: flex; justify-content: center;">
                                        <!-- <a class="primary__btn slider__btn" href="tel:+1 (855) 581-5811">
                                            <i class="fas fa-phone" style="margin-right: 8px;"></i>
                                            Enquire Now
                                        </a> -->
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div class="swiper__nav--btn swiper-button-next">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class=" -chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                    <div class="swiper__nav--btn swiper-button-prev">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class=" -chevron-left">
                            <polyline points="15 18 9 12 15 6"></polyline>
                        </svg>
                    </div>
                </div>
                 <div style="text-align: center;">
                    <a class="primary__btn slider__btn openPopup" href="" 
                    style="display: inline-flex; align-items: center; justify-content: center;">
                        <i class="fas fa-clipboard-check" style="margin-right: 8px;"></i>
                        Get My Custom Quote
                    </a>
                </div>

            </div>
        </section>

        <section class="bg-light py-4">
            <div class="container">
                <div class="scrolling-wrapper">
                    <div class="scrolling-track d-flex align-items-center">
                        <!-- Brand Logos 1 to 16 -->
                        @for ($i = 1; $i <= 25; $i++)
                            <div class="brand-item">
                                <img src="/frontend/my_img/brand/{{ $i }}.webp" class="brand-logo"
                                    alt="Brand {{ $i }}">
                            </div>
                        @endfor

                        <!-- Duplicate for smooth scrolling -->
                        @for ($i = 1; $i <= 25; $i++)
                            <div class="brand-item">
                                <img src="/frontend/my_img/brand/{{ $i }}.webp" class="brand-logo"
                                    alt="Brand {{ $i }}">
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </section>

        </br>
        </br>

        <!-- Start product section -->
        <section class="product__section section--padding  pt-0">
            <div class="container">
                <div class="section__heading section__heading--flex border-bottom mb-30 ">
                    <h2 class="section__heading--maintitle">Popular <span>Products</span></h2>

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
                                                        </br>
                                                        <div
                                                            style="display: flex; justify-content: center;">
                                                        </div>
                                                    </div>
                                                </article>
                                            </div>
                                            <div class="col-lg-3 col-md-4 col-sm-6 col-6 custom-col mb-30">
                                                <article class="product__card">
                                                    <div class="product__card--thumbnail">
                                                        <a class="product__card--thumbnail__link display-block"
                                                            href="/suspension-parts/ac-compressor">
                                                            <img
                                                                src="/frontend/my_img/top/ac_compressor.webp"
                                                                alt="product-img">

                                                        </a>

                                                    </div>
                                                    <div class="product__card--content">

                                                        <h3 class="product__card--title" style="text-align: center"><a
                                                                href="/suspension-parts/ac-compressor">AC Compressor</a></h3>
                                                        </br>
                                                        <div
                                                            style="display: flex; justify-content: center;">
                                                            <!-- <a class="primary__btn slider__btn" href="tel:+1 (855) 581-5811">
                                                                <i class="fas fa-phone" style="margin-right: 8px;"></i>
                                                                Enquire Now
                                                            </a> -->
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
                                                        </br>
                                                        <div
                                                            style="display: flex; justify-content: center;">
                                                            <!-- <a class="primary__btn slider__btn" href="tel:+1 (855) 581-5811">
                                                                <i class="fas fa-phone" style="margin-right: 8px;"></i>
                                                                Enquire Now
                                                            </a> -->
                                                        </div>
                                                    </div>
                                                </article>
                                            </div>
                                            <div class="col-lg-3 col-md-4 col-sm-6 col-6 custom-col mb-30">
                                                <article class="product__card">
                                                    <div class="product__card--thumbnail">
                                                        <a class="product__card--thumbnail__link display-block"
                                                            href="/engine-parts/intake-manifold">
                                                            <img
                                                                src="/frontend/my_img/top/intake_manifold.webp"
                                                                alt="product-img">

                                                        </a>

                                                    </div>
                                                    <div class="product__card--content">

                                                        <h3 class="product__card--title" style="text-align: center"><a
                                                                href="/engine-parts/intake-manifold">Intake Manifold</a></h3>
                                                        </br>
                                                        <div
                                                            style="display: flex; justify-content: center;">
                                                            <!-- <a class="primary__btn slider__btn" href="tel:+1 (855) 581-5811">
                                                                <i class="fas fa-phone" style="margin-right: 8px;"></i>
                                                                Enquire Now
                                                            </a> -->
                                                        </div>
                                                    </div>
                                                </article>
                                            </div>
                                            <div class="col-lg-3 col-md-4 col-sm-6 col-6 custom-col mb-30">
                                                <article class="product__card">
                                                    <div class="product__card--thumbnail">
                                                        <a class="product__card--thumbnail__link display-block"
                                                            href="/electrical-parts/abs-unit">
                                                            <img src="/frontend/my_img/top/abs.webp"
                                                                alt="product-img">

                                                        </a>

                                                    </div>
                                                    <div class="product__card--content">

                                                        <h3 class="product__card--title" style="text-align: center"><a
                                                                href="/electrical-parts/abs-unit">ABS Unit</a></h3>
                                                        </br>
                                                        <div
                                                            style="display: flex; justify-content: center;">
                                                            <!-- <a class="primary__btn slider__btn" href="tel:+1 (855) 581-5811">
                                                                <i class="fas fa-phone" style="margin-right: 8px;"></i>
                                                                Enquire Now
                                                            </a> -->
                                                        </div>
                                                    </div>
                                                </article>
                                            </div>
                                            <div class="col-lg-3 col-md-4 col-sm-6 col-6 custom-col mb-30">
                                                <article class="product__card">
                                                    <div class="product__card--thumbnail">
                                                        <a class="product__card--thumbnail__link display-block"
                                                            href="/engine-parts/catalytic-converter">
                                                            <img
                                                                src="/frontend/my_img/top/catlic_convertor.webp"
                                                                alt="product-img">

                                                        </a>

                                                    </div>
                                                    <div class="product__card--content">

                                                        <h3 class="product__card--title" style="text-align: center"><a
                                                                href="/engine-parts/catalytic-converter">Catalytic Converter</a></h3>
                                                        </br>
                                                        <div
                                                            style="display: flex; justify-content: center;">
                                                            <!-- <a class="primary__btn slider__btn" href="tel:+1 (855) 581-5811">
                                                                <i class="fas fa-phone" style="margin-right: 8px;"></i>
                                                                Enquire Now
                                                            </a> -->
                                                        </div>
                                                    </div>
                                                </article>
                                            </div>
                                            <div class="col-lg-3 col-md-4 col-sm-6 col-6 custom-col mb-30">
                                                <article class="product__card">
                                                    <div class="product__card--thumbnail">
                                                        <a class="product__card--thumbnail__link display-block"
                                                            href="/engine-parts/coolant-pump">
                                                            <img
                                                                src="/frontend/my_img/top/collant_pump.webp"
                                                                alt="product-img">

                                                        </a>

                                                    </div>
                                                    <div class="product__card--content">

                                                        <h3 class="product__card--title" style="text-align: center"><a
                                                                href="/engine-parts/coolant-pump">Coolant Pump</a></h3>
                                                        </br>
                                                        <div
                                                            style="display: flex; justify-content: center;">
                                                            <!-- <a class="primary__btn slider__btn" href="tel:+1 (855) 581-5811">
                                                                <i class="fas fa-phone" style="margin-right: 8px;"></i>
                                                                Enquire Now
                                                            </a> -->
                                                        </div>
                                                    </div>
                                                </article>
                                            </div>
                                            <div class="col-lg-3 col-md-4 col-sm-6 col-6 custom-col mb-30">
                                                <article class="product__card">
                                                    <div class="product__card--thumbnail">
                                                        <a class="product__card--thumbnail__link display-block"
                                                            href="/suspension-parts/steering-column">
                                                            <img
                                                                src="/frontend/my_img/top/steering_colum.webp"
                                                                alt="product-img">

                                                        </a>

                                                    </div>
                                                    <div class="product__card--content">

                                                        <h3 class="product__card--title" style="text-align: center"><a
                                                                href="/suspension-parts/steering-column">Steering Column</a></h3>
                                                        </br>
                                                        <div
                                                            style="display: flex; justify-content: center;">
                                                            <!-- <a class="primary__btn slider__btn" href="tel:+1 (855) 581-5811">
                                                                <i class="fas fa-phone" style="margin-right: 8px;"></i>
                                                                Enquire Now
                                                            </a> -->
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
                                                        </br>
                                                        <div
                                                            style="display: flex; justify-content: center;">
                                                            <!-- <a class="primary__btn slider__btn" href="tel:+1 (855) 581-5811">
                                                                <i class="fas fa-phone" style="margin-right: 8px;"></i>
                                                                Enquire Now
                                                            </a> -->
                                                        </div>
                                                    </div>
                                                </article>
                                            </div>
                                            <div class="col-lg-3 col-md-4 col-sm-6 col-6 custom-col mb-30">
                                                <article class="product__card">
                                                    <div class="product__card--thumbnail">
                                                        <a class="product__card--thumbnail__link display-block"
                                                            href="/suspension-parts/rack-pinion">
                                                            <img src="/frontend/my_img/top/rack.jpg"
                                                                alt="product-img">

                                                        </a>

                                                    </div>
                                                    <div class="product__card--content">

                                                        <h3 class="product__card--title" style="text-align: center"><a
                                                                href="/suspension-parts/rack-pinion">Rack & Pinion</a></h3>
                                                        </br>
                                                        <div
                                                            style="display: flex; justify-content: center;">
                                                            <!-- <a class="primary__btn slider__btn" href="tel:+1 (855) 581-5811">
                                                                <i class="fas fa-phone" style="margin-right: 8px;"></i>
                                                                Enquire Now
                                                            </a> -->
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
                                                        </br>
                                                        <div
                                                            style="display: flex; justify-content: center;">
                                                            <!-- <a class="primary__btn slider__btn" href="tel:+1 (855) 581-5811">
                                                                <i class="fas fa-phone" style="margin-right: 8px;"></i>
                                                                Enquire Now
                                                            </a> -->
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
                                                        </br>
                                                        <div
                                                            style="display: flex; justify-content: center;">
                                                            <!-- <a class="primary__btn slider__btn" href="tel:+1 (855) 581-5811">
                                                                <i class="fas fa-phone" style="margin-right: 8px;"></i>
                                                                Enquire Now
                                                            </a> -->
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
                                                        </br>
                                                        <div
                                                            style="display: flex; justify-content: center;">
                                                            <!-- <a class="primary__btn slider__btn" href="tel:+1 (855) 581-5811">
                                                                <i class="fas fa-phone" style="margin-right: 8px;"></i>
                                                                Enquire Now
                                                            </a> -->
                                                        </div>
                                                    </div>
                                                </article>
                                            </div>
                                            <div class="col-lg-3 col-md-4 col-sm-6 col-6 custom-col mb-30">
                                                <article class="product__card">
                                                    <div class="product__card--thumbnail">
                                                        <a class="product__card--thumbnail__link display-block"
                                                            href="/engine-parts/throttle-body">
                                                            <img
                                                                src="/frontend/my_img/top/throttle_body.jpg"
                                                                alt="product-img">
                                                        </a>
                                                    </div>
                                                    <div class="product__card--content">

                                                        <h3 class="product__card--title" style="text-align: center"><a
                                                                href="/engine-parts/throttle-body">Throttle Body</a></h3>
                                                        </br>
                                                        <div
                                                            style="display: flex; justify-content: center;">
                                                            <!-- <a class="primary__btn slider__btn" href="tel:+1 (855) 581-5811">
                                                                <i class="fas fa-phone" style="margin-right: 8px;"></i>
                                                                Enquire Now
                                                            </a> -->
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
                                                        </br>
                                                        <div
                                                            style="display: flex; justify-content: center;">
                                                            <!-- <a class="primary__btn slider__btn" href="tel:+1 (855) 581-5811">
                                                                <i class="fas fa-phone" style="margin-right: 8px;"></i>
                                                                Enquire Now
                                                            </a> -->
                                                        </div>
                                                    </div>
                                                </article>
                                            </div>
                                            <div class="col-lg-3 col-md-4 col-sm-6 col-6 custom-col mb-30">
                                                <article class="product__card">
                                                    <div class="product__card--thumbnail">
                                                        <a class="product__card--thumbnail__link display-block"
                                                            href="/exterior-parts/fenders">
                                                            <img src="/frontend/my_img/top/fender.jpg"
                                                                alt="product-img">
                                                        </a>
                                                    </div>
                                                    <div class="product__card--content">

                                                        <h3 class="product__card--title" style="text-align: center"><a
                                                                href="/exterior-parts/fenders">Fender</a></h3>
                                                        </br>
                                                        <div
                                                            style="display: flex; justify-content: center;">
                                                            <!-- <a class="primary__btn slider__btn" href="tel:+1 (855) 581-5811">
                                                                <i class="fas fa-phone" style="margin-right: 8px;"></i>
                                                                Enquire Now
                                                            </a> -->
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
                <div style="text-align: center;" class="mt-5">
                    <a class="primary__btn slider__btn openPopup" href="" 
                    style="display: inline-flex; align-items: center; justify-content: center;">
                        <i class="fas fa-clipboard-check" style="margin-right: 8px;"></i>
                        Get My Custom Quote
                    </a>
                </div>
        </section>
        <!-- End product section -->

        <!-- Start product section -->
        <section class="product__section section--padding pt-0">
            <div class="container">
                <div class="section__heading section__heading--flex border-bottom d-flex mb-30">
                    <h2 class="section__heading--maintitle">Top Sale <span>Products</span></h2>
                </div>
                <div class="product__section--inner">
                    <div class="row">
                        <div class="col-lg-9 col-md-8">
                            <div class="product__wrapper">
                                <div class="row">
                                    <div class="col-lg-4 col-md-6 col-sm-6 col-6 custom-col mb-20">
                                        <article class="product__card">
                                            <div class="product__card--thumbnail">
                                                <a class="product__card--thumbnail__link display-block"
                                                    href="/interior-parts/center-console">
                                                    <img class="/center-console"
                                                        src="/frontend/my_img/top/center_console.webp" alt="product-img">
                                                </a>
                                            </div>
                                            <div class="product__card--content">
                                                <h3 class="product__card--title" style="text-align: center"><a
                                                        href="/interior-parts/center-console">Center Console </a></h3>
                                                </br>
                                                <div style="display: flex; justify-content: center;">
                                                    <!-- <a class="primary__btn slider__btn" href="tel:+1 (855) 581-5811">
                                                        <i class="fas fa-phone" style="margin-right: 8px;"></i>
                                                        Enquire Now
                                                    </a> -->
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-6 col-6 custom-col mb-20">
                                        <article class="product__card">
                                            <div class="product__card--thumbnail">
                                                <a class="product__card--thumbnail__link display-block"
                                                    href="/electrical-parts/tail-light">
                                                    <img class="/tail_light" src="/frontend/my_img/top/tail_light.webp"
                                                        alt="product-img">
                                                </a>
                                            </div>
                                            <div class="product__card--content">

                                                <h3 class="product__card--title" style="text-align: center"><a
                                                        href="/electrical-parts/tail-light">Tail Light</a></h3>
                                                </br>
                                                <div style="display: flex; justify-content: center;">
                                                    <!-- <a class="primary__btn slider__btn" href="tel:+1 (855) 581-5811">
                                                        <i class="fas fa-phone" style="margin-right: 8px;"></i>
                                                        Enquire Now
                                                    </a> -->
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-6 col-6 custom-col mb-20">
                                        <article class="product__card">
                                            <div class="product__card--thumbnail">
                                                <a class="product__card--thumbnail__link display-block" href="/interior-parts/sun-visor">
                                                    <img class="/interior-parts/sun-visor" src="/frontend/my_img/top/sun_visor.jpg"
                                                        alt="product-img">
                                                </a>
                                            </div>
                                            <div class="product__card--content">
                                                <h3 class="product__card--title" style="text-align: center"><a
                                                        href="/interior-parts/sun-visor">Sun Visor</a></h3>
                                                </br>
                                                <div style="display: flex; justify-content: center;">
                                                    <!-- <a class="primary__btn slider__btn" href="tel:+1 (855) 581-5811">
                                                        <i class="fas fa-phone" style="margin-right: 8px;"></i>
                                                        Enquire Now
                                                    </a> -->
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="quote-btn-wrapper mb-3" style="text-align: center;">
                                        <a class="primary__btn slider__btn openPopup" href="" 
                                        style="display: inline-flex; align-items: center; justify-content: center;">
                                            <i class="fas fa-clipboard-check" style="margin-right: 8px;"></i>
                                            Get My Custom Quote
                                        </a>                                    
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-6 col-6 custom-col mb-30 d-block d-lg-none">
                                        <article class="product__card">
                                            <div class="product__card--thumbnail">
                                                <a class="product__card--thumbnail__link display-block"
                                                    href="/vacuum_pump">
                                                    <img class="/vacuum_pump" src="/frontend/my_img/vacuum_pump.webp"
                                                        alt="product-img">
                                                </a>
                                            </div>
                                            <div class="product__card--content">
                                                <h3 class="product__card--title" style="text-align: center">
                                                    <a href="/vacuum_pump">Vacuum Pump</a>
                                                </h3>
                                                </br>
                                                <div style="display: flex; justify-content: center;">
                                                    <!-- <a class="primary__btn slider__btn" href="tel:+1 (855) 581-5811">
                                                        <i class="fas fa-phone" style="margin-right: 8px;"></i>
                                                        Enquire Now
                                                    </a> -->
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                                <div class="row  mb-n30">
                                    <div class="col-lg-6 col-md-6 mb-30">
                                        <div class="banner__items position__relative">
                                            <a class="banner__thumbnail display-block" href="tel:+1 (855) 581-5811"><img
                                                    class="banner__thumbnail--img banner__max--height"
                                                    src="/frontend/assets/img/banner/banner5.webp" alt="banner-img">
                                                <div class="banner__content style__right">
                                                    <span class="banner__content--subtitle text-white">Engine Items
                                                        For</span>
                                                    <h2 class="banner__content--title"><span
                                                            class="banner__content--title__inner">PREMIUM</span> CLASS
                                                    </h2>
                                                    <!-- <a href="tel:+1 (855) 581-5811"
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
                                                                margin-left: auto;
                                                            ">
                                                        <i class="fas fa-phone" style="margin-right: 8px;"></i>
                                                        Enquire Now
                                                    </a> -->
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 mb-30">
                                        <div class="banner__items position__relative">
                                            <a class="banner__thumbnail display-block" href="tel:+1 (855) 581-5811"><img
                                                    class="banner__thumbnail--img banner__max--height"
                                                    src="/frontend/assets/img/banner/banner6.webp" alt="banner-img">
                                                <div class="banner__content style__right">
                                                    <span class="banner__badge--style2">New</span>
                                                    <h2 class="banner__content--title"> Premium Car light</h2>

                                                    <!-- <a href="tel:+1 (855) 581-5811"
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
                                                            margin-left: auto;
                                                        ">
                                                        <i class="fas fa-phone" style="margin-right: 8px;"></i>
                                                        Enquire Now
                                                    </a> -->
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4">
                            <div class="banner__sidebar position__relative">
                                <a class="banner__thumbnail display-block" href="tel:+1 (855) 581-5811"><img
                                        class="banner__thumbnail--img" src="/frontend/assets/img/banner/image4.webp"
                                        alt="banner-img">
                                    <div class="banner__content style__top">
                                        <span class="banner__content--subtitle text__secondary">New arrivals</span>
                                        <h2 class="banner__content--title" style="font-size: 3.5rem; line-height: 4rem;">
                                        Best <br> <span class="banner__content--title__inner">Car</span> Exhust</h2>
                                        <!-- <a href="tel:+1 (855) 581-5811"
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
                                                    margin-left: auto;
                                                ">
                                            <i class="fas fa-phone" style="margin-right: 8px;"></i>
                                            Get In Touch
                                        </a> -->
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End product section -->

        <section class="faq__section section--padding pt-0">
            <div class="container">
                <div class="faq__section--inner">
                    <div class="face__step one " id="accordionExample">
                        <div class="section__heading border-bottom mb-30 ">
                            <h2 class="section__heading--maintitle-text" style="margin-left: 35px !important;"> Frequently
                                Asked Questions</h2>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="accordion__container">
                                    <div class="accordion__items">
                                        <h3 class="accordion__items--title">
                                            <button class="faq__accordion--btn accordion__items--button">What types of car
                                                parts do you offer?
                                                <svg class="accordion__items--button__icon"
                                                    xmlns="http://www.w3.org/2000/svg" width="20.355" height="13.394"
                                                    viewBox="0 0 512 512">
                                                    <path
                                                        d="M98 190.06l139.78 163.12a24 24 0 0036.44 0L414 190.06c13.34-15.57 2.28-39.62-18.22-39.62h-279.6c-20.5 0-31.56 24.05-18.18 39.62z"
                                                        fill="currentColor" />
                                                </svg>
                                            </button>
                                        </h3>
                                        <div class="accordion__items--body">
                                            <p class="accordion__items--body__desc">We offer a wide range of premium car
                                                parts including engine components, transmission parts, suspension systems,
                                                braking parts, and accessories for all makes and models of cars and
                                                SUVs.</p>
                                        </div>
                                    </div>
                                    <div class="accordion__items">
                                        <h3 class="accordion__items--title">
                                            <button class="faq__accordion--btn accordion__items--button">How can I be sure
                                                the parts will fit my vehicle?
                                                <svg class="accordion__items--button__icon"
                                                    xmlns="http://www.w3.org/2000/svg" width="20.355" height="13.394"
                                                    viewBox="0 0 512 512">
                                                    <path
                                                        d="M98 190.06l139.78 163.12a24 24 0 0036.44 0L414 190.06c13.34-15.57 2.28-39.62-18.22-39.62h-279.6c-20.5 0-31.56 24.05-18.18 39.62z"
                                                        fill="currentColor" />
                                                </svg>
                                            </button>
                                        </h3>
                                        <div class="accordion__items--body">
                                            <p class="accordion__items--body__desc">You can enter your vehicle’s make,
                                                model, and year on our website to find compatible parts. If you’re unsure,
                                                our customer service team is always available to help verify fitment.</p>
                                        </div>
                                    </div>
                                    <div class="accordion__items">
                                        <h3 class="accordion__items--title">
                                            <button class="faq__accordion--btn accordion__items--button">What is your
                                                shipping policy?
                                                <svg class="accordion__items--button__icon"
                                                    xmlns="http://www.w3.org/2000/svg" width="20.355" height="13.394"
                                                    viewBox="0 0 512 512">
                                                    <path
                                                        d="M98 190.06l139.78 163.12a24 24 0 0036.44 0L414 190.06c13.34-15.57 2.28-39.62-18.22-39.62h-279.6c-20.5 0-31.56 24.05-18.18 39.62z"
                                                        fill="currentColor" />
                                                </svg>
                                            </button>
                                        </h3>
                                        <div class="accordion__items--body">
                                            <p class="accordion__items--body__desc">We offer fast and reliable shipping
                                                across the country. Shipping costs and estimated delivery times are provided
                                                at checkout. We work with trusted carriers to ensure your parts arrive
                                                safely.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="accordion__container">
                                    <div class="accordion__items">
                                        <h3 class="accordion__items--title">
                                            <button class="faq__accordion--btn accordion__items--button"> Can I return a
                                                part if it doesn’t fit or is defective?
                                                <svg class="accordion__items--button__icon"
                                                    xmlns="http://www.w3.org/2000/svg" width="20.355" height="13.394"
                                                    viewBox="0 0 512 512">
                                                    <path
                                                        d="M98 190.06l139.78 163.12a24 24 0 0036.44 0L414 190.06c13.34-15.57 2.28-39.62-18.22-39.62h-279.6c-20.5 0-31.56 24.05-18.18 39.62z"
                                                        fill="currentColor" />
                                                </svg>
                                            </button>
                                        </h3>
                                        <div class="accordion__items--body">
                                            <p class="accordion__items--body__desc">Yes! We have a 30-day return policy
                                                for unused parts in their original packaging. Certain items like electrical
                                                components or special orders may not be returnable. Please contact us to
                                                initiate a return.</p>
                                        </div>
                                    </div>
                                    <div class="accordion__items">
                                        <h3 class="accordion__items--title">
                                            <button class="faq__accordion--btn accordion__items--button">How do I track my
                                                order?
                                                <svg class="accordion__items--button__icon"
                                                    xmlns="http://www.w3.org/2000/svg" width="20.355" height="13.394"
                                                    viewBox="0 0 512 512">
                                                    <path
                                                        d="M98 190.06l139.78 163.12a24 24 0 0036.44 0L414 190.06c13.34-15.57 2.28-39.62-18.22-39.62h-279.6c-20.5 0-31.56 24.05-18.18 39.62z"
                                                        fill="currentColor" />
                                                </svg>
                                            </button>
                                        </h3>
                                        <div class="accordion__items--body">
                                            <p class="accordion__items--body__desc">Once your order ships, you will
                                                receive a tracking number via email. You can use this number on the
                                                carrier’s website to track your package in real time.</p>
                                        </div>
                                    </div>
                                    <div class="accordion__items">
                                        <h3 class="accordion__items--title">
                                            <button class="faq__accordion--btn accordion__items--button"> Do you offer any
                                                warranty on your products?
                                                <svg class="accordion__items--button__icon"
                                                    xmlns="http://www.w3.org/2000/svg" width="20.355" height="13.394"
                                                    viewBox="0 0 512 512">
                                                    <path
                                                        d="M98 190.06l139.78 163.12a24 24 0 0036.44 0L414 190.06c13.34-15.57 2.28-39.62-18.22-39.62h-279.6c-20.5 0-31.56 24.05-18.18 39.62z"
                                                        fill="currentColor" />
                                                </svg>
                                            </button>
                                        </h3>
                                        <div class="accordion__items--body">
                                            <p class="accordion__items--body__desc">Yes, many of our parts come with
                                                manufacturer warranties. Specific warranty details are provided on each
                                                product page. If you have any warranty-related questions, please reach out
                                                to our support team.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        
        <section class="blog__section section--padding pt-0">
            <div class="container">
                <div class="section__heading border-bottom mb-30 ">
                    <h2 class="section__heading--maintitle">Testimonials</h2>
                </div>
                <div class="blog__section--inner blog__swiper--activation swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="blog__card">
                                <div class="blog__card--content">

                                    <p>"I was really impressed with the fast shipping and the quality of
                                        the
                                        parts. The installation was straightforward, and everything fit perfectly. Customer
                                        support was super helpful when I had questions. I’ll definitely order from here
                                        again!"</p>
                                    <div class="blog__card--footer d-flex justify-content-between align-items-center">
                                        <span class="blog__card--meta">By: Stacy</span>
                                        <ul class="rating testimonial__rating d-flex justify-content-center">
                                            <li class="rating__list">
                                                <span class="rating__icon">
                                                    <svg width="14" height="13" viewBox="0 0 14 13"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                            </li>
                                            <li class="rating__list">
                                                <span class="rating__icon">
                                                    <svg width="14" height="13" viewBox="0 0 14 13"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                            </li>
                                            <li class="rating__list">
                                                <span class="rating__icon">
                                                    <svg width="14" height="13" viewBox="0 0 14 13"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                            </li>
                                            <li class="rating__list">
                                                <span class="rating__icon">
                                                    <svg width="14" height="13" viewBox="0 0 14 13"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                            </li>
                                            <li class="rating__list">
                                                <span class="rating__icon">
                                                    <svg width="14" height="13" viewBox="0 0 14 13"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="blog__card">
                                <div class="blog__card--content">

                                    <p>"Great experience from start to finish! The website was easy to
                                        navigate, and I found exactly what I needed. The parts arrived quickly and were in
                                        excellent condition. Highly recommend for anyone looking for reliable auto parts."
                                    </p>
                                    <div class="blog__card--footer d-flex justify-content-between align-items-center">
                                        <span class="blog__card--meta">By: Alex</span>
                                        <ul class="rating testimonial__rating d-flex justify-content-center">
                                            <li class="rating__list">
                                                <span class="rating__icon">
                                                    <svg width="14" height="13" viewBox="0 0 14 13"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                            </li>
                                            <li class="rating__list">
                                                <span class="rating__icon">
                                                    <svg width="14" height="13" viewBox="0 0 14 13"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                            </li>
                                            <li class="rating__list">
                                                <span class="rating__icon">
                                                    <svg width="14" height="13" viewBox="0 0 14 13"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                            </li>
                                            <li class="rating__list">
                                                <span class="rating__icon">
                                                    <svg width="14" height="13" viewBox="0 0 14 13"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                            </li>
                                            <li class="rating__list">
                                                <span class="rating__icon">
                                                    <svg width="14" height="13" viewBox="0 0 14 13"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z"
                                                            fill="currentColor"/>
                                                    </svg> 
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="blog__card">
                                <div class="blog__card--content">

                                    <p>"I needed a replacement part urgently, and this store didn’t
                                        disappoint. The delivery was fast, and the part was genuine and high-quality. It
                                        saved me a lot of time and hassle. Customer service was responsive, friendly and
                                        available 24*7 for all your needs."</p>
                                    <div class="blog__card--footer d-flex justify-content-between align-items-center">
                                        <span class="blog__card--meta">By: Rasalina</span>
                                        <ul class="rating testimonial__rating d-flex justify-content-center">
                                            <li class="rating__list">
                                                <span class="rating__icon">
                                                    <svg width="14" height="13" viewBox="0 0 14 13"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                            </li>
                                            <li class="rating__list">
                                                <span class="rating__icon">
                                                    <svg width="14" height="13" viewBox="0 0 14 13"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                            </li>
                                            <li class="rating__list">
                                                <span class="rating__icon">
                                                    <svg width="14" height="13" viewBox="0 0 14 13"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                            </li>
                                            <li class="rating__list">
                                                <span class="rating__icon">
                                                    <svg width="14" height="13" viewBox="0 0 14 13"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                            </li>
                                            <li class="rating__list">
                                                <span class="rating__icon">
                                                    <svg width="14" height="13" viewBox="0 0 14 13"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper__nav--btn swiper-button-next">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class=" -chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                    <div class="swiper__nav--btn swiper-button-prev">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class=" -chevron-left">
                            <polyline points="15 18 9 12 15 6"></polyline>
                        </svg>
                    </div>
                </div>
            </div>
        </section>

        <section class="contact__section section--padding pt-0">
            <div class="container">
                <div class="contact__section--heading text-center mb-40">
                    <h2 class="contact__section--heading__maintitle">Get In Touch</h2>
                    <p class="contact__section--heading__desc">
                        Have questions or need assistance? Our friendly support team is ready to help you with anything you need.
                    </p>
                </div>

                <div class="main__contact--area position__relative">
                    <!-- Contact Form -->
                    <div class="contact__form">
                        <h3 class="contact__form--title mb-30">Get The Best Deal</h3>

                        <form action="/lead-enquiry" enctype="multipart/form-data" method="POST" class="leadForm"
                            class="contact__form--inner" data-wow-delay="0.5s">
                            @csrf
                            <input type="hidden" value="Home Page lead" id="form_name" name="form_name">
                            <div class="row">
                                <!-- Full Name -->
                                <div class="col-lg-6 col-md-6">
                                    <div class="contact__form--list">
                                        <input class="contact__form--input" name="full_name" id="full_name"
                                            placeholder="Your Full Name" type="text" value="{{ old('full_name') }}">
                                        <div class="field_error" id="full_name-error" style="color:#ff4e21;"></div>
                                    </div>
                                </div>

                                <!-- Phone -->
                                <div class="col-lg-6 col-md-6">
                                    <div class="contact__form--list">
                                        <input class="contact__form--input" name="mobile" id="mobile"
                                            placeholder="Phone number" type="text" value="{{ old('mobile') }}">
                                        <div class="field_error" id="mobile-error" style="color:#ff4e21;"></div>
                                    </div>
                                </div>

                                <!-- Email -->
                                <div class="col-lg-6 col-md-6">
                                    <div class="contact__form--list">
                                        <input class="contact__form--input" name="email" id="email" placeholder="Email"
                                            type="text" value="{{ old('email') }}">
                                        <div class="field_error" id="email-error" style="color:#ff4e21;"></div>
                                    </div>
                                </div>

                                <!-- Zip -->
                                <div class="col-lg-6 col-md-6">
                                    <div class="contact__form--list">
                                        <input class="contact__form--input" name="zip" id="zip" placeholder="Zip"
                                            type="text" value="{{ old('zip') }}">
                                        <div class="field_error" id="zip-error" style="color:#ff4e21;"></div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <select name="vehicle_year" class="contact__form--input">
                                        <option value="">Vehicle Year*</option>
                                        <!-- years list kept same -->
                                        @for ($i = 2026; $i >= 1952; $i--)
                                        <option value="{{ $i }}">{{ $i }}</option>
                                        @endfor
                                    </select>
                                    <div class="field_error" id="vehicle_year-error" style="color:#ff4e21;"></div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <select id="make" name="make" class="contact__form--input">
                                            <option value="">Select Vehicle Make*</option>
                                            <option value="Acura">Acura</option>
                                            <option value="Alfa Romeo">Alfa Romeo</option>
                                            <option value="AMC">AMC</option>
                                            <option value="AstonMartin">Aston Martin</option>
                                            <option value="Audi">Audi</option>
                                            <option value="Avanti">Avanti</option>
                                            <option value="BMW">BMW</option>
                                            <option value="Bentley">Bentley</option>
                                            <option value="Buick">Buick</option>
                                            <option value="Cadillac">Cadillac</option>
                                            <option value="Chevrolet">Chevrolet</option>
                                            <option value="Chrysler">Chrysler</option>
                                            <option value="Daewoo">Daewoo</option>
                                            <option value="Daihatsu">Daihatsu</option>
                                            <option value="Datsun">Datsun</option>
                                            <option value="DeLorean">DeLorean</option>
                                            <option value="Dodge">Dodge</option>
                                            <option value="Eagle">Eagle</option>
                                            <option value="Ferrari">Ferrari</option>
                                            <option value="FIAT">FIAT</option>
                                            <option value="Fikser">Fikser</option>
                                            <option value="Ford">Ford</option>
                                            <option value="Freightliner">Freightliner</option>
                                            <option value="GEO">GEO</option>
                                            <option value="GMC">GMC</option>
                                            <option value="Honda">Honda</option>
                                            <option value="HUMMER">HUMMER</option>
                                            <option value="Hyundai">Hyundai</option>
                                            <option value="Infiniti">Infiniti</option>
                                            <option value="Isuzu">Isuzu</option>
                                            <option value="Jeep">Jeep</option>
                                            <option value="Jaguar">Jaguar</option>
                                            <option value="Kia">Kia</option>
                                            <option value="Lamborghini">Lamborghini</option>
                                            <option value="Lancia">Lancia</option>
                                            <option value="LandRover">LandRover</option>
                                            <option value="Lexus">Lexus</option>
                                            <option value="Lincoin">Lincoin</option>
                                            <option value="Lotus">Lotus</option>
                                            <option value="Maserati">Maserati</option>
                                            <option value="Mazda">Mazda</option>
                                            <option value="Maybach">Maybach</option>
                                            <option value="McLaren">McLaren</option>
                                            <option value="Mercedes-Benz">Mercedes-Benz</option>
                                            <option value="Mercury">Mercury</option>
                                            <option value="Mini">Mini</option>
                                            <option value="Mitsubhishi">Mitsubhishi</option>
                                            <option value="Oldsmobile">Oldsmobile</option>
                                            <option value="Peugeot">Peugeot</option>
                                            <option value="Plymouth">Plymouth</option>
                                            <option value="Pontiac">Pontiac</option>
                                            <option value="Porsche">Porsche</option>
                                            <option value="Renault">Renault</option>
                                            <option value="Rolls-Royce">Rolls-Royce</option>
                                            <option value="Rover">Rover</option>
                                            <option value="Saab">Saab</option>
                                            <option value="Saturn">Saturn</option>
                                            <option value="Scion">Scion</option>
                                            <option value="Smart">Smart</option>
                                            <option value="SRT">SRT</option>
                                            <option value="Sterling">Sterling</option>
                                            <option value="Subaru">Subaru</option>
                                            <option value="Suzuki">Suzuki</option>
                                            <option value="Tesla">Tesla</option>
                                            <option value="Toyota">Toyota</option>
                                            <option value="Triumph">Triumph</option>
                                            <option value="Volkswagen">Volkswagen</option>
                                            <option value="Volvo">Volvo</option>
                                            <option value="Yugo">Yugo</option>
                                        </select>
                                        <div class="field_error" id="make-error" style="color:#ff4e21;"></div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="contact__form--list">
                                        <input class="contact__form--input" name="vehicle_model" id="vehicle_model" placeholder="Vehicle Model"
                                            type="text" value="{{ old('vehicle_model') }}">
                                        <div class="field_error" id="vehicle_model-error" style="color:#ff4e21;"></div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="contact__form--list">
                                        <input class="contact__form--input" name="part_name" id="part_name" placeholder="Part Name"
                                            type="text" value="{{ old('part_name') }}">
                                        <div class="field_error" id="part_name-error" style="color:#ff4e21;"></div>
                                    </div>
                                </div>
                            

                                <!-- reCAPTCHA -->
                                <!-- <div class="col-12 mt-1">
                                    <div style="text-align: center; margin-top: 20px;">
                                        <div class="g-recaptcha d-inline-block"
                                            data-sitekey="6LeuVdUrAAAAAJAmNQfEpWMHWmiFUErEfhweKNNJ"></div>
                                        <div class="field_error" id="g-recaptcha-response-error" style="color:#ff4e21;"></div>
                                    </div>
                                    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
                                </div>  -->
                                <!-- FIXED missing closing div -->

                                <!-- Submit Button -->
                                <div class="col-12 text-center">
                                    <button class="contact__form--btn primary__btn" type="submit" id="submit">
                                        <span>Get Pricing</span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <!-- Contact Info Section -->
                    <div class="contact__info border-radius-5">

                        <!-- Phone -->
                        <div class="contact__info--items">
                            <h3 class="contact__info--content__title text-white mb-15">Contact Us</h3>
                            <div class="contact__info--items__inner d-flex">
                                <div class="contact__info--icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="31.568" height="31.128" viewBox="0 0 31.568 31.128">
                                        <path id="ic_phone_forwarded_24px"
                                            d="M26.676,16.564l7.892-7.782L26.676,1V5.669H20.362v6.226h6.314Zm3.157,7a18.162,18.162,0,0,1-5.635-.887,1.627,1.627,0,0,0-1.61.374l-3.472,3.424a23.585,23.585,0,0,1-10.4-10.257l3.472-3.44a1.48,1.48,0,0,0,.395-1.556,17.457,17.457,0,0,1-.9-5.556A1.572,1.572,0,0,0,10.1,4.113H4.578A1.572,1.572,0,0,0,3,5.669,26.645,26.645,0,0,0,29.832,32.128a1.572,1.572,0,0,0,1.578-1.556V25.124A1.572,1.572,0,0,0,29.832,23.568Z"
                                            transform="translate(-3 -1)" fill="currentColor"/>
                                    </svg>
                                </div>
                                <div class="contact__info--content">
                                    <p class="contact__info--content__desc text-white">
                                        Contact Our Support Team <br>
                                        <a href="tel:+1 (855) 581-5811">+1 (855) 581-5811</a>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="contact__info--items">
                            <h3 class="contact__info--content__title text-white mb-15">Email Address</h3>
                            <div class="contact__info--items__inner d-flex">
                                <div class="contact__info--icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="31.57" height="31.13" viewBox="0 0 31.57 31.13">
                                        <path id="ic_email_24px"
                                            d="M30.413,4H5.157C3.421,4,2.016,5.751,2.016,7.891L2,31.239c0,2.14,1.421,3.891,3.157,3.891H30.413c1.736,0,3.157-1.751,3.157-3.891V7.891C33.57,5.751,32.149,4,30.413,4Zm0,7.783L17.785,21.511,5.157,11.783V7.891l12.628,9.728L30.413,7.891Z"
                                            transform="translate(-2 -4)" fill="currentColor"/>
                                    </svg>
                                </div>
                                <div class="contact__info--content mt-4">
                                    <p class="contact__info--content__desc text-white">Get in Touch via Email <br>
                                        <a href="mailto:support@sparepartzone.com">support@sparepartzone.com</a>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Address -->
                        <div class="contact__info--items">
                            <h3 class="contact__info--content__title text-white mb-15">Office Location</h3>
                            <div class="contact__info--items__inner d-flex">
                                <div class="contact__info--icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="31.57" height="31.13" viewBox="0 0 31.57 31.13">
                                        <path id="ic_account_balance_24px"
                                            d="M5.323,14.341V24.718h4.985V14.341Zm9.969,0V24.718h4.985V14.341ZM2,32.13H33.57V27.683H2ZM25.262,14.341V24.718h4.985V14.341ZM17.785,1,2,8.412v2.965H33.57V8.412Z"
                                            transform="translate(-2 -1)" fill="currentColor"/>
                                    </svg>
                                </div>
                                <div class="contact__info--content">
                                    <p class="contact__info--content__desc text-white">
                                        7101 Kaiser Pl, Falls Church, VA, 22042
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div> <!-- end contact__info -->

                </div> <!-- end main__contact--area -->

            </div>
        </section>

    </main>




<script>
    document.addEventListener("DOMContentLoaded", function() {
    console.log("Popup script loaded ✅");

    // Show popup after 2 seconds
    setTimeout(() => {
        console.log("Showing popup now ⏰");
        document.getElementById("salePopup").style.display = "flex";
    }, 2000);

    // Close button
    document.querySelector(".sale-close").addEventListener("click", () => {
        document.getElementById("salePopup").style.display = "none";
    });

    // Close when clicking outside the popup box
    document.getElementById("salePopup").addEventListener("click", e => {
        if (e.target.id === "salePopup") {
        document.getElementById("salePopup").style.display = "none";
        }
    });
    });
</script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
    
        const popup = document.getElementById("formPopup");
        const closeButton = document.querySelector(".popup-close");

        // Open popup on click of ANY button with this class
        document.querySelectorAll(".openPopup").forEach(btn => {
            btn.addEventListener("click", function (e) {
                e.preventDefault();
                popup.style.display = "flex";
            });
        });

        // Close button
        closeButton.addEventListener("click", () => {
            popup.style.display = "none";
        });

        // Click outside closes popup
        popup.addEventListener("click", (e) => {
            if (e.target === popup) {
                popup.style.display = "none";
            }
        });

    });
</script>

<!-- POPUP OVERLAY -->
<div id="formPopup" class="popup-overlay">
  <div class="popup-box">

    <span class="popup-close">&times;</span>
    <div class="modal-logo">
            <img src="/frontend/my_img/logo/new_logo.svg" alt="Company Logo">
            </div>
    <h3 style="text-align:center;">Request a Part Today</h3>

    <div class="banner__form" style="background:white; padding:20px; border-radius:8px;">
     
    <form action="/lead-enquiry" enctype="multipart/form-data" method="POST" 
        class="leadForm contact__form--inner" data-wow-delay="0.5s">
        @csrf
        <input type="hidden" value="Home Page lead" id="form_name" name="form_name">
        <!-- Row 1 -->
        <div class="form-row" style="display:flex; gap:15px; margin-bottom:15px;">
            <div style="flex:1;">
                <input type="text" name="full_name" placeholder="Your Name*" class="contact__form--input" />
                <div class="field_error" id="full_name-error" style="color:#ff4e21; font-size:12px;"></div>
            </div>

            <div style="flex:1;">
                <input type="text" name="mobile" placeholder="Phone Number*" class="contact__form--input" />
                <div class="field_error" id="mobile-error" style="color:#ff4e21; font-size:12px;"></div>
            </div>
        </div>

        <!-- Row 2 -->
        <div class="form-row" style="display:flex; gap:15px; margin-bottom:15px;">
            <div style="flex:1;">
                <input type="text" name="email" placeholder="Email*" class="contact__form--input" />
                <div class="field_error" id="email-error" style="color:#ff4e21; font-size:12px;"></div>
            </div>

            <div style="flex:1;">
                <input type="text" name="zip" placeholder="Zip*" class="contact__form--input" />
                <div class="field_error" id="zip-error" style="color:#ff4e21; font-size:12px;"></div>
            </div>
        </div>

            <!-- Row 3 -->
            <div class="form-row" style="display:flex; gap:15px; margin-bottom:15px;">
                <div style="flex:1;">
                    <select name="vehicle_year" class="contact__form--input">
                        <option value="">Vehicle Year*</option>
                            <option value="2026">2026</option>
                            <option value="2025">2025</option>
                            <option value="2024">2024</option>
                            <option value="2023">2023</option>
                            <option value="2022">2022</option>
                            <option value="2021">2021</option>
                            <option value="2020">2020</option>
                            <option value="2019">2019</option>
                            <option value="2018">2018</option>
                            <option value="2017">2017</option>
                            <option value="2016">2016</option>
                            <option value="2015">2015</option>
                            <option value="2014">2014</option>
                            <option value="2013">2013</option>
                            <option value="2012">2012</option>
                            <option value="2011">2011</option>
                            <option value="2010">2010</option>
                            <option value="2009">2009</option>
                            <option value="2008">2008</option>
                            <option value="2007">2007</option>
                            <option value="2006">2006</option>
                            <option value="2005">2005</option>
                            <option value="2004">2004</option>
                            <option value="2003">2003</option>
                            <option value="2002">2002</option>
                            <option value="2001">2001</option>
                            <option value="2000">2000</option>
                            <option value="1999">1999</option>
                            <option value="1998">1998</option>
                            <option value="1997">1997</option>
                            <option value="1996">1996</option>
                            <option value="1995">1995</option>
                            <option value="1994">1994</option>
                            <option value="1993">1993</option>
                            <option value="1992">1992</option>
                            <option value="1991">1991</option>
                            <option value="1990">1990</option>
                            <option value="1989">1989</option>
                            <option value="1988">1988</option>
                            <option value="1987">1987</option>
                            <option value="1986">1986</option>
                            <option value="1985">1985</option>
                            <option value="1984">1984</option>
                            <option value="1983">1983</option>
                            <option value="1982">1982</option>
                            <option value="1981">1981</option>
                            <option value="1980">1980</option>
                            <option value="1979">1979</option>
                            <option value="1978">1978</option>
                            <option value="1977">1977</option>
                            <option value="1976">1976</option>
                            <option value="1975">1975</option>
                            <option value="1974">1974</option>
                            <option value="1973">1973</option>
                            <option value="1972">1972</option>
                            <option value="1971">1971</option>
                            <option value="1970">1970</option>
                            <option value="1969">1969</option>
                            <option value="1968">1968</option>
                            <option value="1967">1967</option>
                            <option value="1966">1966</option>
                            <option value="1965">1965</option>
                            <option value="1964">1964</option>
                            <option value="1963">1963</option>
                            <option value="1962">1962</option>
                            <option value="1961">1961</option>
                            <option value="1960">1960</option>
                            <option value="1959">1959</option>
                            <option value="1958">1958</option>
                            <option value="1957">1957</option>
                            <option value="1956">1956</option>
                            <option value="1955">1955</option>
                            <option value="1954">1954</option>
                            <option value="1953">1953</option>
                            <option value="1952">1952</option>
                    </select>
                    <div class="field_error" id="vehicle_year-error" style="color:#ff4e21; font-size:12px;"></div>
                </div>

                <div style="flex:1;">
                    <select name="make" class="contact__form--input">
                        <option value="">Vehicle Make*</option>
                        <option>Acura</option>
                        <option>Alfa Romeo</option>
                        <option>AMC</option>
                        <option>Aston Martin</option>
                        <option value="Audi">Audi</option>
                        <option value="Avanti">Avanti</option>
                        <option value="BMW">BMW</option>
                        <option value="Bentley">Bentley</option>
                        <option value="Buick">Buick</option>
                        <option value="Cadillac">Cadillac</option>
                        <option value="Chevrolet">Chevrolet</option>
                        <option value="Chrysler">Chrysler</option>
                        <option value="Daewoo">Daewoo</option>
                        <option value="Daihatsu">Daihatsu</option>
                        <option value="Datsun">Datsun</option>
                        <option value="DeLorean">DeLorean</option>
                        <option value="Dodge">Dodge</option>
                        <option value="Eagle">Eagle</option>
                        <option value="Ferrari">Ferrari</option>
                        <option value="FIAT">FIAT</option>
                        <option value="Fikser">Fikser</option>
                        <option value="Ford">Ford</option>
                        <option value="Freightliner">Freightliner</option>
                        <option value="GEO">GEO</option>
                        <option value="GMC">GMC</option>
                        <option value="Honda">Honda</option>
                        <option value="HUMMER">HUMMER</option>
                        <option value="Hyundai">Hyundai</option>
                        <option value="Infiniti">Infiniti</option>
                        <option value="Isuzu">Isuzu</option>
                        <option value="Jeep">Jeep</option>
                        <option value="Jaguar">Jaguar</option>
                        <option value="Kia">Kia</option>
                        <option value="Lamborghini">Lamborghini</option>
                        <option value="Lancia">Lancia</option>
                        <option value="Land Rover">Land Rover</option>
                        <option value="Lexus">Lexus</option>
                        <option value="Lincoln">Lincoln</option>
                        <option value="Lotus">Lotus</option>
                        <option value="Maserati">Maserati</option>
                        <option value="Mazda">Mazda</option>
                        <option value="Maybach">Maybach</option>
                        <option value="McLaren">McLaren</option>
                        <option value="Mercedes-Benz">Mercedes-Benz</option>
                        <option value="Mercury">Mercury</option>
                        <option value="Mini">Mini</option>
                        <option value="Mitsubishi">Mitsubishi</option>
                        <option value="Oldsmobile">Oldsmobile</option>
                        <option value="Peugeot">Peugeot</option>
                        <option value="Plymouth">Plymouth</option>
                        <option value="Pontiac">Pontiac</option>
                        <option value="Porsche">Porsche</option>
                        <option value="Renault">Renault</option>
                        <option value="Rolls-Royce">Rolls-Royce</option>
                        <option value="Rover">Rover</option>
                        <option value="Saab">Saab</option>
                        <option value="Saturn">Saturn</option>
                        <option value="Scion">Scion</option>
                        <option value="Smart">Smart</option>
                        <option value="SRT">SRT</option>
                        <option value="Sterling">Sterling</option>
                        <option value="Subaru">Subaru</option>
                        <option value="Suzuki">Suzuki</option>
                        <option value="Tesla">Tesla</option>
                        <option value="Toyota">Toyota</option>
                        <option value="Triumph">Triumph</option>
                        <option value="Volkswagen">Volkswagen</option>
                        <option value="Volvo">Volvo</option>
                        <option value="Yugo">Yugo</option>
                    </select>
                <div class="field_error" id="make-error" style="color:#ff4e21; font-size:12px;"></div>
                </div>
            </div>

            <!-- Row 4 -->
            <div class="form-row" style="display:flex; gap:15px; margin-bottom:15px;">
                <div style="flex:1;">
                    <input type="text" name="vehicle_model" placeholder="Vehicle Model*" class="contact__form--input" />
                    <div class="field_error" id="vehicle_model-error" style="color:#ff4e21; font-size:12px;"></div>
                </div>

                <div style="flex:1;">
                    <input type="text" name="part_name" placeholder="Part Name*" class="contact__form--input" />
                    <div class="field_error" id="part_name-error" style="color:#ff4e21; font-size:12px;"></div>
                </div>
            </div>

        <!-- Submit -->
        <div style="text-align:center;">
            <button type="submit" class="primary__btn contact__form--btn">
                <span>Submit Now</span>
            </button>
        </div>
    </form>
    </div>
  </div>
</div>

<footer class="footer__section footer__bg">
    <div class="container">
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
                            fill="currentColor"/>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M6.50032 19.1436C3.66377 19.381 1.30023 21.1391 1.30023 23.1249C1.30023 25.1104 3.66377 26.8686 6.50032 27.106V19.1436ZM7.15023 28.3665C3.27419 28.3665 0 25.9657 0 23.1249C0 20.2838 3.27405 17.8831 7.15023 17.8831C7.5096 17.8831 7.80013 18.1595 7.80013 18.4999V27.7499C7.80013 28.0904 7.50959 28.3665 7.15023 28.3665V28.3665Z"
                            fill="currentColor"/>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M38.3502 23.4334C37.9908 23.4334 37.7003 23.157 37.7003 22.8166V19.1165C37.7003 7.75154 31.0662 1.23356 19.4998 1.23356C7.76363 1.23356 1.30008 7.58444 1.30008 19.1165V22.8166C1.30008 23.157 1.00954 23.4334 0.650178 23.4334C0.290536 23.4334 0 23.157 0 22.8166V19.1165C0 6.96727 7.10774 0 19.5 0C31.8922 0 39 6.96793 39 19.1165V22.8166C39 23.157 38.7094 23.4334 38.3501 23.4334"
                            fill="currentColor"/>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M19.5016 36.9998C19.1422 36.9998 18.8517 36.7237 18.8517 36.3833C18.8517 35.0229 20.0176 33.9164 21.4516 33.9164H24.3428C26.3658 33.9164 28.2167 32.5944 28.9507 30.6278C29.0704 30.3065 29.4409 30.1369 29.7801 30.2518C30.1188 30.3659 30.2957 30.7179 30.176 31.0384C29.2595 33.4978 26.915 35.1499 24.3428 35.1499H21.4515C20.7347 35.1499 20.1517 35.703 20.1517 36.3833C20.1517 36.7237 19.8612 36.9999 19.5015 36.9999"
                            fill="currentColor"/>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M19.5001 37C19.1407 37 18.8502 36.7238 18.8502 36.3834C18.8502 35.703 18.2672 35.15 17.5501 35.15H14.6591C12.0875 35.15 9.743 33.4984 8.8265 31.0398C8.7068 30.7185 8.88363 30.3665 9.22178 30.2529C9.56292 30.1388 9.93206 30.3079 10.0518 30.6284C10.7855 32.5951 12.6367 33.9166 14.6591 33.9166H17.5501C18.984 33.9166 20.1503 35.023 20.1503 36.3834C20.1503 36.7238 19.8597 37 19.5001 37"
                            fill="currentColor"/>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M9.10186 16.6499C8.38502 16.6499 7.80177 17.203 7.80177 17.8834V28.9834C7.80177 29.6635 8.38502 30.2166 9.10186 30.2166C9.81869 30.2166 10.4019 29.6635 10.4019 28.9834V17.8834C10.4019 17.203 9.81869 16.6499 9.10186 16.6499ZM9.10186 31.45C7.66791 31.45 6.50195 30.3438 6.50195 28.9834V17.8834C6.50195 16.5229 7.66791 15.4165 9.10186 15.4165C10.5358 15.4165 11.7018 16.5229 11.7018 17.8834V28.9834C11.7018 30.3438 10.5358 31.45 9.10186 31.45Z"
                            fill="currentColor" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M32.5013 19.1435V27.1058C35.3378 26.8683 37.7013 25.1102 37.7013 23.1247C37.7013 21.1389 35.3378 19.3808 32.5013 19.1433V19.1435ZM31.8513 28.3663C31.4917 28.3663 31.2012 28.0901 31.2012 27.7497V18.4997C31.2012 18.1592 31.4917 17.8828 31.8513 17.8828C35.7271 17.8828 39.0009 20.2836 39.0009 23.1247C39.0009 25.9655 35.7268 28.3663 31.8513 28.3663"
                            fill="currentColor"/>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M29.901 16.6499C29.1839 16.6499 28.6009 17.203 28.6009 17.8834V28.9834C28.6009 29.6635 29.1839 30.2166 29.901 30.2166C30.6178 30.2166 31.2008 29.6635 31.2008 28.9834V17.8834C31.2008 17.203 30.6178 16.6499 29.901 16.6499ZM29.901 31.45C28.467 31.45 27.3008 30.3438 27.3008 28.9834V17.8834C27.3008 16.5229 28.467 15.4165 29.901 15.4165C31.3346 15.4165 32.5009 16.5229 32.5009 17.8834V28.9834C32.5009 30.3438 31.3346 31.45 29.901 31.45Z"
                            fill="currentColor"/>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M19.4979 18.4998C16.6309 18.4998 14.2981 20.7129 14.2981 23.4332C14.2981 26.1533 16.6309 28.3664 19.4979 28.3664C22.3653 28.3664 24.698 26.1533 24.698 23.4332C24.698 20.7129 22.3653 18.4998 19.4979 18.4998ZM19.4979 29.5998C15.9138 29.5998 12.998 26.8333 12.998 23.4332C12.998 20.0328 15.9138 17.2664 19.4979 17.2664C23.0821 17.2664 25.9981 20.0328 25.9981 23.4332C25.9981 26.8333 23.0821 29.5998 19.4979 29.5998Z"
                            fill="currentColor"/>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M19.5018 18.4998C18.7063 18.4998 17.5518 20.4221 17.5518 23.4332C17.5518 26.4444 18.7063 28.3664 19.5018 28.3664C20.2975 28.3664 21.4518 26.4444 21.4518 23.4332C21.4518 20.4221 20.2975 18.4998 19.5018 18.4998ZM19.5018 29.5998C17.6486 29.5998 16.252 26.9487 16.252 23.4332C16.252 19.9175 17.6486 17.2664 19.5018 17.2664C21.3549 17.2664 22.7519 19.9175 22.7519 23.4332C22.7519 26.9487 21.3549 29.5998 19.5018 29.5998Z"
                            fill="currentColor"/>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M25.3479 24.0498H13.648C13.2886 24.0498 12.998 23.7737 12.998 23.4332C12.998 23.0928 13.2886 22.8164 13.648 22.8164H25.3479C25.7076 22.8164 25.9981 23.0928 25.9981 23.4332C25.9981 23.7737 25.7076 24.0498 25.3479 24.0498Z"
                            fill="currentColor"/>
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
                            fill="currentColor"/>
                        <path
                            d="M6.42781 19.7144C5.90568 19.7144 5.48234 20.0983 5.48234 20.5716C5.48234 20.7989 5.58176 21.017 5.75908 21.1777C5.93671 21.3384 6.17704 21.4288 6.42782 21.4288H12.102C12.3527 21.4288 12.5934 21.3384 12.7707 21.1777C12.948 21.017 13.0478 20.7989 13.0478 20.5716C13.0478 20.3443 12.948 20.1262 12.7707 19.9655C12.5934 19.8048 12.3527 19.7144 12.102 19.7144H6.42781Z"
                            fill="currentColor"/>
                        <path
                            d="M6.42781 23.1431C5.90568 23.1431 5.48234 23.5268 5.48234 24.0003C5.48234 24.2276 5.58176 24.4454 5.75908 24.6064C5.93671 24.7671 6.17704 24.8572 6.42782 24.8572H14.939C15.1898 24.8572 15.4305 24.7671 15.6078 24.6064C15.7851 24.4454 15.8848 24.2276 15.8848 24.0003C15.8848 23.773 15.7851 23.5549 15.6078 23.3942C15.4305 23.2335 15.1898 23.1431 14.939 23.1431H6.42781Z"
                            fill="currentColor"/>
                        <path
                            d="M15.8854 20.5716C15.8854 20.7989 15.7857 21.017 15.6084 21.1777C15.431 21.3384 15.1904 21.4288 14.9396 21.4288C14.4175 21.4288 13.9941 21.0448 13.9941 20.5716C13.9941 20.0983 14.4175 19.7144 14.9396 19.7144C15.1904 19.7144 15.431 19.8048 15.6084 19.9655C15.7857 20.1262 15.8854 20.3443 15.8854 20.5716Z"
                            fill="currentColor"/>
                        <path
                            d="M31.0182 15.4287C24.7617 15.4287 19.6699 20.0437 19.6699 25.7143C19.6699 31.3849 24.7617 35.9999 31.0182 35.9999C37.2747 35.9999 42.3665 31.3849 42.3665 25.7143C42.3665 20.0437 37.2747 15.4287 31.0182 15.4287ZM31.0182 17.1429C36.2522 17.1429 40.4754 20.9702 40.4754 25.7145C40.4754 30.4583 36.2527 34.2861 31.0182 34.2861C25.7842 34.2861 21.561 30.4588 21.561 25.7145C21.561 20.9706 25.7837 17.1429 31.0182 17.1429Z"
                            fill="currentColor"/>
                        <path
                            d="M28.3654 20.8229L25.7886 23.1616C25.4194 23.4962 25.4194 24.0389 25.7886 24.3735L28.3654 26.7122C28.7346 27.0468 29.3333 27.0468 29.7026 26.7122C30.0724 26.3778 30.073 25.8354 29.7045 25.5003L28.816 24.695H33.3319C34.6855 24.695 35.7459 25.6573 35.7459 26.8864C35.7459 28.1155 34.6855 29.0778 33.3319 29.0778H27.235C26.7129 29.0778 26.2892 29.4615 26.2892 29.935C26.2892 30.4083 26.7125 30.7923 27.235 30.7923H33.3322C35.7019 30.7923 37.6375 29.035 37.6375 26.8867C37.6375 24.7383 35.7016 22.9811 33.3322 22.9811H28.6608L29.7045 22.0352C30.073 21.7 30.0724 21.1573 29.7026 20.8232C29.2805 20.4576 28.728 20.5021 28.3654 20.8232V20.8229Z"
                            fill="currentColor"/>
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
        <div class="newsletter__area">
            <div class="container">
                <div class="row align-items-center">

                            <!-- Left Side: Logo (col-6) -->
                            <div class="col-md-2">
                                <a class="footer__logo--link" href="/home">
                                    <img src="/frontend/my_img/logo/new_logo.svg" alt="logo-img" style="max-width:200px;">
                                </a>
                            </div>

                            <!-- Right Side: Title + Description (col-6) -->
                            <div class="col-md-10">
                                <h2 class="newsletter__title">
                                    <span class="text__secondary">Spare Part Zone</span>
                                    Your Trusted Auto Parts Partner
                                </h2>
                                <p class="newsletter__desc">
                                    Quality You Can Rely On, Performance You Can Feel.
                                </p>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</footer>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
    $(document).ready(function () {

        // Global CSRF Token
        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
            }
        });

        // Target ALL forms — not only one
        $(".leadForm").submit(function (e) {
            e.preventDefault();

            var form = $(this);
            form.find('div[id$="-error"]').empty();

            $.ajax({
                type: "POST",
                url: form.attr("action"),
                data: new FormData(this),
                contentType: false,
                processData: false,
                cache: false,

                beforeSend: function () {
                    form.find("#started").attr("disabled", true).hide();
                    form.find("#form_loader").show();
                },

                success: function (data) {

                    // SUCCESS — redirect
                    if (data.status === "success") {

                        toastr.success(data.message);

                        form[0].reset();

                        // Reset reCAPTCHA for this form (if present)
                        if (typeof grecaptcha !== "undefined") {
                            grecaptcha.reset();
                        }

                        setTimeout(function () {
                            window.location.href = "/thankyou-lead";
                        }, 800);

                    } else {

                        // FAILED — show error, no redirect
                        toastr.error(data.message);

                        if (typeof grecaptcha !== "undefined") {
                            grecaptcha.reset();
                        }
                    }
                },

                error: function (xhr) {

                    toastr.error("There are some errors. Please check your inputs.");

                    if (xhr.responseJSON && xhr.responseJSON.errors) {

                        $.each(xhr.responseJSON.errors, function (key, value) {
                            form.find("#" + key + "-error").html(value[0]);
                        });

                        // Scroll directly to this form's first error
                        var firstKey = Object.keys(xhr.responseJSON.errors)[0];
                        var target = form.find("#" + firstKey + "-error");

                        $("html, body").animate({
                            scrollTop: target.offset().top - 200
                        }, 500);
                    }

                    // reset captcha
                    if (typeof grecaptcha !== "undefined") {
                        grecaptcha.reset();
                    }
                },

                complete: function () {
                    form.find("#started").attr("disabled", false).show();
                    form.find("#form_loader").hide();
                }
            });
        });
    });
</script>

@endsection

