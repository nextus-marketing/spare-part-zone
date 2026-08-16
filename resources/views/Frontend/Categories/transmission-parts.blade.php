@extends('layouts.frontend')
@section('title') Transmission Parts | Spare Part Zone @endsection
@section('content')
<style>
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
                                <li class="breadcrumb__content--menu__items"><span>Transmission Parts</span></li>
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
                                <img class="about__thumb--img border-radius-5" src="/frontend/my_img/transmission-part.jpg" alt="about-thumb" style="width: 500px; height: 500px; object-fit: cover;">
                            </div>
                           
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about__content">
                            <span class="about__content--subtitle text__secondary mb-35">Top-Quality Transmission Parts for Smooth Performance.</span>
                            <h2 class="about__content--maintitle mb-5">Transmission Parts</h2>
                            <p class="about__content--desc mb-20">At Spare Part Zone, we understand that a reliable transmission is the backbone of your vehicle's performance. That’s why we offer only top-quality new and used transmission parts that meet or exceed OEM standards. Whether you're replacing a worn-out gearbox or upgrading for better efficiency, our extensive inventory is rigorously inspected and sourced from trusted manufacturers.</p>
                            
                            
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
                                                <a class="product__card--thumbnail__link display-block" href="/transmission-parts/transmission">
                                                    <img class="" src="/frontend/my_img/Main/transmission.jpg" alt="product-img">
                                                </a>
                                            </div>
                                            <div class="product__card--content">
                                               
                                                <h3 class="product__card--title text-center"><a href="/transmission-parts/transmission">Transmission</a></h3>
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
                                                <a class="product__card--thumbnail__link display-block" href="/transmission-parts/drive-shaft">
                                                    <img class="" src="/frontend/my_img/Main/drive_shaft.webp" alt="product-img">
                                                </a>
                                            </div>
                                            <div class="product__card--content">
                                               
                                                <h3 class="product__card--title text-center"><a href="/transmission-parts/drive-shaft">Drive Shaft</a></h3>
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
                                                <a class="product__card--thumbnail__link display-block" href="/transmission-parts/axle-shaft">
                                                    <img class="" src="/frontend/my_img/Main/axleshaft.jpg" alt="product-img">
                                                </a>
                                            </div>
                                            <div class="product__card--content">
                                               
                                                <h3 class="product__card--title text-center"><a href="/transmission-parts/axle-shaft">Axle Shaft</a></h3>
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
                                                <a class="product__card--thumbnail__link display-block" href="/transmission-parts/floor-shifter">
                                                    <img class="" src="/frontend/my_img/Main/floor_shifter.jpg" alt="product-img">
                                                </a>
                                            </div>
                                            <div class="product__card--content">
                                                
                                                <h3 class="product__card--title text-center"><a href="/transmission-parts/floor-shifter">Floor Shifter</a></h3>
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
                                                <a class="product__card--thumbnail__link display-block" href="/transmission-parts/cradle">
                                                    <img class="" src="/frontend/my_img/Main/cradle.jpg" alt="product-img">
                                                </a>
                                            </div>
                                            <div class="product__card--content">
                                               
                                                <h3 class="product__card--title text-center"><a href="/transmission-parts/cradle">Cradle</a></h3>
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
                                                <a class="product__card--thumbnail__link display-block" href="/transmission-parts/crossmember">
                                                    <img class="" src="/frontend/my_img/Main/crossmember.jpg" alt="product-img">
                                                </a>
                                            </div>
                                            <div class="product__card--content">
                                              
                                                <h3 class="product__card--title text-center"><a href="/transmission-parts/crossmember">Crossmember</a></h3>
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
                                                <a class="product__card--thumbnail__link display-block" href="/transmission-parts/subframe">
                                                    <img class="" src="/frontend/my_img/Main/subframe.jpg" alt="product-img">
                                                    
                                                </a>
                                              
                                            </div>
                                            <div class="product__card--content">
                                                <h3 class="product__card--title text-center"><a href="/transmission-parts/subframe">Subframe </a></h3>
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
                                            <button class="faq__accordion--btn accordion__items--button">What are the key components of a transmission system?
                                                <svg class="accordion__items--button__icon" xmlns="http://www.w3.org/2000/svg" width="20.355" height="13.394" viewBox="0 0 512 512"><path d="M98 190.06l139.78 163.12a24 24 0 0036.44 0L414 190.06c13.34-15.57 2.28-39.62-18.22-39.62h-279.6c-20.5 0-31.56 24.05-18.18 39.62z" fill="currentColor"/></svg>
                                            </button>
                                        </h3>
                                        <div class="accordion__items--body">
                                            <p class="accordion__items--body__desc">Major components include the clutch, gears, torque converter, valve body, transmission fluid, and control modules.</p>
                                        </div>
                                    </div>
                                    <div class="accordion__items">
                                        <h3 class="accordion__items--title">
                                            <button class="faq__accordion--btn accordion__items--button">How often should transmission fluid be changed?
                                                <svg class="accordion__items--button__icon" xmlns="http://www.w3.org/2000/svg" width="20.355" height="13.394" viewBox="0 0 512 512"><path d="M98 190.06l139.78 163.12a24 24 0 0036.44 0L414 190.06c13.34-15.57 2.28-39.62-18.22-39.62h-279.6c-20.5 0-31.56 24.05-18.18 39.62z" fill="currentColor"/></svg>
                                            </button>
                                        </h3>
                                        <div class="accordion__items--body">
                                            <p class="accordion__items--body__desc">Typically every 30,000 to 60,000 miles, but always refer to your vehicle’s manufacturer recommendations.</p>
                                        </div>
                                    </div>
                                    <div class="accordion__items">
                                        <h3 class="accordion__items--title">
                                            <button class="faq__accordion--btn accordion__items--button">What causes transmission failure?
                                                <svg class="accordion__items--button__icon" xmlns="http://www.w3.org/2000/svg" width="20.355" height="13.394" viewBox="0 0 512 512"><path d="M98 190.06l139.78 163.12a24 24 0 0036.44 0L414 190.06c13.34-15.57 2.28-39.62-18.22-39.62h-279.6c-20.5 0-31.56 24.05-18.18 39.62z" fill="currentColor"/></svg>
                                            </button>
                                        </h3>
                                        <div class="accordion__items--body">
                                            <p class="accordion__items--body__desc">Causes include low or dirty transmission fluid, overheating, worn clutches, or electrical sensor failures.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="accordion__container">
                                    <div class="accordion__items">
                                        <h3 class="accordion__items--title">
                                            <button class="faq__accordion--btn accordion__items--button">Is it better to replace or rebuild a transmission?
                                                <svg class="accordion__items--button__icon" xmlns="http://www.w3.org/2000/svg" width="20.355" height="13.394" viewBox="0 0 512 512"><path d="M98 190.06l139.78 163.12a24 24 0 0036.44 0L414 190.06c13.34-15.57 2.28-39.62-18.22-39.62h-279.6c-20.5 0-31.56 24.05-18.18 39.62z" fill="currentColor"/></svg>
                                            </button>
                                        </h3>
                                        <div class="accordion__items--body">
                                            <p class="accordion__items--body__desc">Rebuilding is more cost-effective in some cases, but replacement may be necessary if the damage is extensive.</p>
                                        </div>
                                    </div>
                                    <div class="accordion__items">
                                        <h3 class="accordion__items--title">
                                            <button class="faq__accordion--btn accordion__items--button">Can aftermarket transmission parts be trusted?
                                                <svg class="accordion__items--button__icon" xmlns="http://www.w3.org/2000/svg" width="20.355" height="13.394" viewBox="0 0 512 512"><path d="M98 190.06l139.78 163.12a24 24 0 0036.44 0L414 190.06c13.34-15.57 2.28-39.62-18.22-39.62h-279.6c-20.5 0-31.56 24.05-18.18 39.62z" fill="currentColor"/></svg>
                                            </button>
                                        </h3>
                                        <div class="accordion__items--body">
                                            <p class="accordion__items--body__desc">Yes, if sourced from reputable manufacturers that meet or exceed OEM specifications.</p>
                                        </div>
                                    </div>
                                    <div class="accordion__items">
                                        <h3 class="accordion__items--title">
                                            <button class="faq__accordion--btn accordion__items--button">Do automatic & manual transmissions use different components?
                                                <svg class="accordion__items--button__icon" xmlns="http://www.w3.org/2000/svg" width="20.355" height="13.394" viewBox="0 0 512 512"><path d="M98 190.06l139.78 163.12a24 24 0 0036.44 0L414 190.06c13.34-15.57 2.28-39.62-18.22-39.62h-279.6c-20.5 0-31.56 24.05-18.18 39.62z" fill="currentColor"/></svg>
                                            </button>
                                        </h3>
                                        <div class="accordion__items--body">
                                            <p class="accordion__items--body__desc">Yes, the internal mechanisms differ significantly, with manuals using clutches and gear selectors, while automatics use torque converters and planetary gear sets.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>    
                </div>   
            </div>     
        </section>
        @endsection