@extends('layouts.frontend')
@section('title') Electrical Parts | Spare Part Zone @endsection
@section('content')
<style>
    /* Set a fixed size for image container */
.product__card--thumbnail {
    width: 209px;
    height: 170px;
    margin: 0 auto;
    overflow: hidden;
    display: flex;
    align-items: center;
    justify-content: center;
}

/* Make image scale and center without distortion */
.product__card--thumbnail img {
    width: 100%;
    height: 100%;
    object-fit: contain;
}

</style>
<section class="breadcrumb__section breadcrumb__bg">
            <div class="container">
                <div class="row row-cols-1">
                    <div class="col">
                        <div class="breadcrumb__content text-center">
                            <ul class="breadcrumb__content--menu d-flex justify-content-center">
                                <li class="breadcrumb__content--menu__items"><a href="/">Home</a></li>
                                <li class="breadcrumb__content--menu__items"><span>Electrical Parts</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

     <section class="about__section section--padding mb-95">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about__thumb d-flex">
                    <div class="about__thumb--items">
                        <img class="about__thumb--img border-radius-5" src="/frontend/my_img/electrical.jpg" alt="about-electrical-thumb" style="width: 500px; height: 500px; object-fit: cover;">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about__content">
                    <span class="about__content--subtitle text__secondary mb-35">Reliable Electrical Components for Optimal Vehicle Function.</span>
                    <h2 class="about__content--maintitle mb-5">Electrical Parts</h2>
                    <p class="about__content--desc mb-20">
                        Electrical parts are the heart of modern automotive systems, ensuring everything from ignition to infotainment works flawlessly. At Spare Part Zone, we supply high-quality new and used electrical components such as alternators, starters, batteries, sensors, and wiring harnesses. All parts are thoroughly tested to meet OEM standards and deliver dependable performance. Keep your vehicle running smoothly with our trusted electrical solutions.
                    </p>
                </div>
                <div style="text-align: center; margin-top: 20px;">
                    <a class="contact__form--btn primary__btn" href="tel:+1 (855) 581-5811">
                        <span><i class="fas fa-phone" style="margin-right: 8px;"></i>24/7 Customer Support </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>


  <div class="shop__section section--padding">
            <div class="container">
                <div class="shop__product--wrapper">
                  {{-- title --}}
                    <div class="tab_content">
                        <div id="product_grid" class="tab_pane active show">
                            <div class="product__section--inner">
                                <div class="row mb--n30 justify-content-center">
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-6 custom-col mb-30">
                                        <article class="product__card">
                                            <div class="product__card--thumbnail">
                                                <a class="product__card--thumbnail__link display-block" href="electrical-parts/alternator">
                                                    <img class="" src="/frontend/my_img/Main/alternators.jpg" alt="product-img">
                                                </a>
                                            </div>
                                            <div class="product__card--content">
                                                
                                                <h3 class="product__card--title text-center"><a href="electrical-parts/alternator">Alternator</a></h3>
                                                 <div class="mt-3" style="display: flex; justify-content: center;">
                                        <a class="primary__btn slider__btn" href="tel:+1 (855) 581-5811">
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
                                                <a class="product__card--thumbnail__link display-block" href="/electrical-parts/starter">
                                                    <img class="" src="/frontend/my_img/Main/car_starter.jpg" alt="product-img">
                                                </a>
                                            </div>
                                            <div class="product__card--content">
                                              
                                                <h3 class="product__card--title text-center"><a href="/electrical-parts/starter">Starter</a></h3>
                                                <div class="mt-3" style="display: flex; justify-content: center;">
                                        <a class="primary__btn slider__btn" href="tel:+1 (855) 581-5811">
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
                                                <a class="product__card--thumbnail__link display-block" href="/electrical-parts/ignition-switch">
                                                    <img class="" src="/frontend/my_img/Main/ignition_switch.jpg" alt="product-img">
                                                </a>
                                            </div>
                                            <div class="product__card--content">
                                                
                                                <h3 class="product__card--title text-center"><a href="/electrical-parts/ignition-switch">Ignition Switch</a></h3>
                                                 <div class="mt-3" style="display: flex; justify-content: center;">
                                        <a class="primary__btn slider__btn" href="tel:+1 (855) 581-5811">
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
                                                <a class="product__card--thumbnail__link display-block" href="/electrical-parts/fuse-box">
                                                    <img class="" src="/frontend/my_img/Main/fuse_box.jpg" alt="product-img">
                                                </a>
                                            </div>
                                            <div class="product__card--content">
                                               
                                                <h3 class="product__card--title text-center"><a href="/electrical-parts/fuse-box">Fuse Box</a></h3>
                                                 <div class="mt-3" style="display: flex; justify-content: center;">
                                        <a class="primary__btn slider__btn" href="tel:+1 (855) 581-5811">
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
                                                <a class="product__card--thumbnail__link display-block" href="/electrical-parts/instrument-cluster">
                                                    <img class="" src="/frontend/my_img/Main/car_instrument.jpg" alt="product-img">
                                                </a>
                                            </div>
                                            <div class="product__card--content">
                                               
                                                <h3 class="product__card--title text-center"><a href="/electrical-parts/instrument-cluster">Instrument Cluster</a></h3>
                                                <div class="mt-3" style="display: flex; justify-content: center;">
                                        <a class="primary__btn slider__btn" href="tel:+1 (855) 581-5811">
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
                                                <a class="product__card--thumbnail__link display-block" href="/electrical-parts/wiper-motor">
                                                    <img class="" src="/frontend/my_img/Main/wiper-motor.jpg" alt="product-img">
                                                </a>
                                            </div>
                                            <div class="product__card--content">
                                                
                                                <h3 class="product__card--title text-center"><a href="/electrical-parts/wiper-motor">Wiper Motor</a></h3>
                                                 <div class="mt-3" style="display: flex; justify-content: center;">
                                        <a class="primary__btn slider__btn" href="tel:+1 (855) 581-5811">
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
                                                <a class="product__card--thumbnail__link display-block" href="/electrical-parts/window-motor-regulator">
                                                    <img class="" src="/frontend/my_img/Main/window_motor_regulator.jpg" alt="product-img">
                                                    
                                                </a>
                                              
                                            </div>
                                            <div class="product__card--content">
                                                
                                                <h3 class="product__card--title text-center"><a href="/electrical-parts/window-motor-regulator">Window Motor Regulator </a></h3>
                                                <div class="mt-3" style="display: flex; justify-content: center;">
                                        <a class="primary__btn slider__btn" href="tel:+1 (855) 581-5811">
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
                                                <a class="product__card--thumbnail__link display-block" href="/electrical-parts/cd-player-radio">
                                                    <img class="" src="/frontend/my_img/Main/cd_player_radio.jpg" alt="product-img">
                                                    
                                                </a>
                                              
                                            </div>
                                            <div class="product__card--content">
                                               
                                                <h3 class="product__card--title text-center"><a href="/electrical-parts/cd-player-radio">Cd Player Radio </a></h3>
                                              <div class="mt-3" style="display: flex; justify-content: center;">
                                        <a class="primary__btn slider__btn" href="tel:+1 (855) 581-5811">
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
                                                <a class="product__card--thumbnail__link display-block" href="/electrical-parts/tail-light">
                                                    <img class="" src="/frontend/my_img/Main/tail_light.jpg" alt="product-img">
                                                    
                                                </a>
                                              
                                            </div>
                                            <div class="product__card--content">
                                               
                                                <h3 class="product__card--title text-center"><a href="/electrical-parts/tail-light">Tail Light </a></h3>
                                                 <div class="mt-3" style="display: flex; justify-content: center;">
                                        <a class="primary__btn slider__btn" href="tel:+1 (855) 581-5811">
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
                                                <a class="product__card--thumbnail__link display-block" href="/electrical-parts/headlight">
                                                    <img class="" src="/frontend/my_img/Main/car_headlights.jpg" alt="product-img">
                                                    
                                                </a>
                                              
                                            </div>
                                            <div class="product__card--content">
                                              
                                                <h3 class="product__card--title text-center"><a href="/electrical-parts/headlight">Headlight </a></h3>
                                                <div class="mt-3" style="display: flex; justify-content: center;">
                                        <a class="primary__btn slider__btn" href="tel:+1 (855) 581-5811">
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
                                                <a class="product__card--thumbnail__link display-block" href="/electrical-parts/fog-lamps">
                                                    <img class="" src="/frontend/my_img/Main/fog_lamps.jpg" alt="product-img">
                                                    
                                                </a>
                                              
                                            </div>
                                            <div class="product__card--content">
                                               
                                                <h3 class="product__card--title text-center"><a href="/electrical-parts/fog-lamps">Fog Lamps </a></h3>
                                                 <div class="mt-3" style="display: flex; justify-content: center;">
                                        <a class="primary__btn slider__btn" href="tel:+1 (855) 581-5811">
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
                                                <a class="product__card--thumbnail__link display-block" href="/electrical-parts/abs-unit">
                                                    <img class="" src="/frontend/my_img/Main/abs_unit.jpg" alt="product-img">
                                                    
                                                </a>
                                              
                                            </div>
                                            <div class="product__card--content">
                                                
                                                <h3 class="product__card--title text-center"><a href="/electrical-parts/abs-unit">ABS Unit</a></h3>
                                               <div class="mt-3" style="display: flex; justify-content: center;">
                                        <a class="primary__btn slider__btn" href="tel:+1 (855) 581-5811">
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
        <section class="faq__section pt-3 pb-5">
            <div class="container">
                <div class="faq__section--inner">
                    <div class="face__step one border-bottom" id="accordionExample">
                    <div class="section__heading section__heading--flex border-bottom mb-30 ">
                    <h2 class="section__heading--maintitle" style="margin-left: 20px">Frequently Asked  <span>Questions</span></h2>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="accordion__container">
                            <div class="accordion__items">
                                <h3 class="accordion__items--title">
                                    <button class="faq__accordion--btn accordion__items--button">What are the most commonly replaced electrical parts in vehicle?
                                        <svg class="accordion__items--button__icon" xmlns="http://www.w3.org/2000/svg" width="20.355" height="13.394" viewBox="0 0 512 512"><path d="M98 190.06l139.78 163.12a24 24 0 0036.44 0L414 190.06c13.34-15.57 2.28-39.62-18.22-39.62h-279.6c-20.5 0-31.56 24.05-18.18 39.62z" fill="currentColor"/></svg>
                                    </button>
                                </h3>
                                <div class="accordion__items--body">
                                    <p class="accordion__items--body__desc">Batteries, alternators, starters, fuses, sensors, and control modules are frequently replaced.</p>
                                </div>
                            </div>
                            <div class="accordion__items">
                                <h3 class="accordion__items--title">
                                    <button class="faq__accordion--btn accordion__items--button">What causes car electrical parts to fail?
                                        <svg class="accordion__items--button__icon" xmlns="http://www.w3.org/2000/svg" width="20.355" height="13.394" viewBox="0 0 512 512"><path d="M98 190.06l139.78 163.12a24 24 0 0036.44 0L414 190.06c13.34-15.57 2.28-39.62-18.22-39.62h-279.6c-20.5 0-31.56 24.05-18.18 39.62z" fill="currentColor"/></svg>
                                    </button>
                                </h3>
                                <div class="accordion__items--body">
                                    <p class="accordion__items--body__desc">Corrosion, moisture, faulty wiring, aging, and power surges are common culprits.</p>
                                </div>
                            </div>
                            <div class="accordion__items">
                                <h3 class="accordion__items--title">
                                    <button class="faq__accordion--btn accordion__items--button">Can I diagnose electrical issues on my own?
                                        <svg class="accordion__items--button__icon" xmlns="http://www.w3.org/2000/svg" width="20.355" height="13.394" viewBox="0 0 512 512"><path d="M98 190.06l139.78 163.12a24 24 0 0036.44 0L414 190.06c13.34-15.57 2.28-39.62-18.22-39.62h-279.6c-20.5 0-31.56 24.05-18.18 39.62z" fill="currentColor"/></svg>
                                    </button>
                                </h3>
                                <div class="accordion__items--body">
                                    <p class="accordion__items--body__desc">Minor issues like blown fuses can be DIY diagnosed, but complex diagnostics require specialized tools and knowledge.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="accordion__container">
                            <div class="accordion__items">
                                <h3 class="accordion__items--title">
                                    <button class="faq__accordion--btn accordion__items--button">Are used electrical parts reliable?
                                        <svg class="accordion__items--button__icon" xmlns="http://www.w3.org/2000/svg" width="20.355" height="13.394" viewBox="0 0 512 512"><path d="M98 190.06l139.78 163.12a24 24 0 0036.44 0L414 190.06c13.34-15.57 2.28-39.62-18.22-39.62h-279.6c-20.5 0-31.56 24.05-18.18 39.62z" fill="currentColor"/></svg>
                                    </button>
                                </h3>
                                <div class="accordion__items--body">
                                    <p class="accordion__items--body__desc">Used parts can be cost-effective, but always ensure they’re tested and sourced from a reputable supplier.</p>
                                </div>
                            </div>
                            <div class="accordion__items">
                                <h3 class="accordion__items--title">
                                    <button class="faq__accordion--btn accordion__items--button">How do I match electrical components to my vehicle?
                                        <svg class="accordion__items--button__icon" xmlns="http://www.w3.org/2000/svg" width="20.355" height="13.394" viewBox="0 0 512 512"><path d="M98 190.06l139.78 163.12a24 24 0 0036.44 0L414 190.06c13.34-15.57 2.28-39.62-18.22-39.62h-279.6c-20.5 0-31.56 24.05-18.18 39.62z" fill="currentColor"/></svg>
                                    </button>
                                </h3>
                                <div class="accordion__items--body">
                                    <p class="accordion__items--body__desc">Use your VIN number and consult your vehicle’s service manual or a trusted parts provider.</p>
                                </div>
                            </div>
                            <div class="accordion__items">
                                <h3 class="accordion__items--title">
                                    <button class="faq__accordion--btn accordion__items--button">What should I do if my battery keeps dying?
                                        <svg class="accordion__items--button__icon" xmlns="http://www.w3.org/2000/svg" width="20.355" height="13.394" viewBox="0 0 512 512"><path d="M98 190.06l139.78 163.12a24 24 0 0036.44 0L414 190.06c13.34-15.57 2.28-39.62-18.22-39.62h-279.6c-20.5 0-31.56 24.05-18.18 39.62z" fill="currentColor"/></svg>
                                    </button>
                                </h3>
                                <div class="accordion__items--body">
                                    <p class="accordion__items--body__desc">Check for parasitic drains, faulty alternators, or old batteries. If unsure, have it tested by a professional.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
        </section>
        @endsection