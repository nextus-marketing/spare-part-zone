@extends('layouts.frontend')
@section('title') Engine Parts | Spare Part Zone @endsection
@section('content')
<style>
    /* Set a fixed size for image container */
/* .product__card--thumbnail {
    width: 209px;
    height: 170px;
    margin: 0 auto;
    overflow: hidden;
    display: flex;
    align-items: center;
    justify-content: center;
} */

/* Make image scale and center without distortion */
/* .product__card--thumbnail img {
    width: 100%;
    height: 100%;
    object-fit: contain;
} */

</style>
<section class="breadcrumb__section breadcrumb__bg">
            <div class="container">
                <div class="row row-cols-1">
                    <div class="col">
                        <div class="breadcrumb__content text-center">
                            <ul class="breadcrumb__content--menu d-flex justify-content-center">
                                <li class="breadcrumb__content--menu__items"><a href="/">Home</a></li>
                                <li class="breadcrumb__content--menu__items"><span>Engine Parts</span></li>
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
                        <img class="about__thumb--img border-radius-5" src="/frontend/my_img/engine_part.jpg" alt="about-suspension-thumb" style="width: 500px; height: 500px; object-fit: cover;">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about__content">
                    <span class="about__content--subtitle text__secondary mb-35">Revive Your Ride with High-Quality Engines.</span>
                    <h2 class="about__content--maintitle mb-5">Engine Parts</h2>
                    <p class="about__content--desc mb-20">
                        At Spare Part Zone, we offer high-quality, OEM-grade engines that are rigorously tested for performance, durability, and reliability. Each engine is thoroughly inspected and ready to install, saving you time and labor. Our engines are compatible with a wide range of makes and models from domestic to imported vehicles and provide a cost-effective alternative to expensive dealership options. With competitive pricing, expert support, and warranty coverage, choosing our engines means you’re getting trusted performance without compromise.


                    </p>
                </div>
                <div style="text-align: center; margin-top: 20px;">
                    <a class="contact__form--btn primary__btn" href="tel:+1 (855) 581-5811">
                        <span><i class="fas fa-phone" style="margin-right: 8px;"></i>24/7 Customer Support</span>
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
                                                <a class="product__card--thumbnail__link display-block" href="/engine-parts/engine">
                                                    <img class="" src="/frontend/my_img/Main/engine.jpg" alt="product-img">
                                                </a>
                                            </div>
                                            <div class="product__card--content">
                                               
                                                <h3 class="product__card--title text-center"><a href="/engine-parts/engine">Car Engine</a></h3>
                                                
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
                                                <a class="product__card--thumbnail__link display-block" href="/engine-parts/cylinder-head">
                                                    <img class="" src="/frontend/my_img/Main/cylinder_head.jpg" alt="product-img">
                                                </a>
                                            </div>
                                            <div class="product__card--content">
                                                
                                                <h3 class="product__card--title text-center"><a href="/engine-parts/cylinder-head">Cylinder Head</a></h3>
                                                
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
                                                <a class="product__card--thumbnail__link display-block" href="/engine-parts/camshaft">
                                                    <img class="" src="/frontend/my_img/Main/camshaft.jpg" alt="product-img">
                                                </a>
                                            </div>
                                            <div class="product__card--content">
                                                
                                                <h3 class="product__card--title text-center"><a href="/engine-parts/camshaft">Camshaft</a></h3>
                                                
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
                                                <a class="product__card--thumbnail__link display-block" href="/engine-parts/supercharger">
                                                    <img class="" src="/frontend/my_img/Main/supercharger.jpg" alt="product-img">
                                                </a>
                                            </div>
                                            <div class="product__card--content">
                                               
                                                <h3 class="product__card--title text-center"><a href="/engine-parts/supercharger">Supercharger</a></h3>
                                                
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
                                                <a class="product__card--thumbnail__link display-block" href="/engine-parts/turbocharger">
                                                    <img class="" src="/frontend/my_img/Main/turbo-charger.jpg" alt="product-img">
                                                </a>
                                            </div>
                                            <div class="product__card--content">
                                              
                                                <h3 class="product__card--title text-center"><a href="/engine-parts/turbocharger">Turbocharger</a></h3>
                                                
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
                                                <a class="product__card--thumbnail__link display-block" href="/engine-parts/intake-manifold">
                                                    <img class="" src="/frontend/my_img/Main/intake_manifold.jpg" alt="product-img">
                                                </a>
                                            </div>
                                            <div class="product__card--content">
                                               
                                                <h3 class="product__card--title text-center"><a href="/engine-parts/intake-manifold">Intake Manifold</a></h3>
                                                
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
                                                <a class="product__card--thumbnail__link display-block" href="/engine-parts/exhaust-manifold">
                                                    <img class="" src="/frontend/my_img/Main/exhaust_manifold.jpg" alt="product-img">
                                                    
                                                </a>
                                              
                                            </div>
                                            <div class="product__card--content">
                                               
                                                <h3 class="product__card--title text-center"><a href="/engine-parts/exhaust-manifold">Exhaust Manifold </a></h3>
                                            
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
                                                <a class="product__card--thumbnail__link display-block" href="/engine-parts/throttle-body">
                                                    <img class="" src="/frontend/my_img/Main/throttle_body.jpg" alt="product-img">
                                                    
                                                </a>
                                              
                                            </div>
                                            <div class="product__card--content">
                                             
                                                <h3 class="product__card--title text-center"><a href="/engine-parts/throttle-body">Throttle Body </a></h3>
                                            
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
                                                <a class="product__card--thumbnail__link display-block" href="/engine-parts/engine-mount">
                                                    <img class="" src="/frontend/my_img/Main/engine-mount.jpg" alt="product-img">
                                                    
                                                </a>
                                              
                                            </div>
                                            <div class="product__card--content">
                                               
                                                <h3 class="product__card--title text-center"><a href="/engine-parts/engine-mount">Engine Mount </a></h3>
                                            
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
                                                <a class="product__card--thumbnail__link display-block" href="/engine-parts/valve-cover">
                                                    <img class="" src="/frontend/my_img/Main/valve-cover.jpg" alt="product-img">
                                                    
                                                </a>
                                              
                                            </div>
                                            <div class="product__card--content">
                                               
                                                <h3 class="product__card--title text-center"><a href="/engine-parts/valve-cover">Valve Cover </a></h3>
                                            
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
                                                <a class="product__card--thumbnail__link display-block" href="/engine-parts/fuel-pump">
                                                    <img class="" src="/frontend/my_img/Main/fuel_pump.jpg" alt="product-img">
                                                    
                                                </a>
                                              
                                            </div>
                                            <div class="product__card--content">
                                               
                                                <h3 class="product__card--title text-center"><a href="/engine-parts/fuel-pump">Fuel Pump </a></h3>
                                            
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
                                                <a class="product__card--thumbnail__link display-block" href="/engine-parts/coolant-pump">
                                                    <img class="" src="/frontend/my_img/Main/coolant_pump.jpg" alt="product-img">
                                                    
                                                </a>
                                              
                                            </div>
                                            <div class="product__card--content">
                                               
                                                <h3 class="product__card--title text-center"><a href="/engine-parts/coolant-pump">Coolant Pump</a></h3>
                                            
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
                                                <a class="product__card--thumbnail__link display-block" href="/engine-parts/radiator">
                                                    <img class="" src="/frontend/my_img/Main/car-radiator.jpg" alt="product-img">
                                                    
                                                </a>
                                              
                                            </div>
                                            <div class="product__card--content">
                                               
                                                <h3 class="product__card--title text-center"><a href="/engine-parts/radiator">Radiator</a></h3>
                                            
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
                                                <a class="product__card--thumbnail__link display-block" href="/engine-parts/vacuum-pump">
                                                    <img class="" src="/frontend/my_img/Main/vacuum_pump.jpg" alt="product-img">
                                                    
                                                </a>
                                              
                                            </div>
                                            <div class="product__card--content">
                                               
                                                <h3 class="product__card--title text-center"><a href="/engine-parts/vacuum-pump">Vacuum Pump </a></h3>
                                            
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
                                                <a class="product__card--thumbnail__link display-block" href="/engine-parts/catalytic-converter">
                                                    <img class="" src="/frontend/my_img/Main/catalytic_converter.jpg" alt="product-img">
                                                    
                                                </a>
                                              
                                            </div>
                                            <div class="product__card--content">
                                                
                                                <h3 class="product__card--title text-center"><a href="/engine-parts/catalytic-converter">Catalytic Converter </a></h3>
                                            
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
                      <div class="section__heading section__heading--flex border-bottom mb-30">
                    <h2 class="section__heading--maintitle" style="margin-left: 20px">Frequently Asked  <span>Questions</span></h2>
                </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="accordion__container">
                                    <div class="accordion__items">
                                        <h3 class="accordion__items--title">
                                            <button class="faq__accordion--btn accordion__items--button">What should I consider when buying replacement engine parts online?
                                                <svg class="accordion__items--button__icon" xmlns="http://www.w3.org/2000/svg" width="20.355" height="13.394" viewBox="0 0 512 512"><path d="M98 190.06l139.78 163.12a24 24 0 0036.44 0L414 190.06c13.34-15.57 2.28-39.62-18.22-39.62h-279.6c-20.5 0-31.56 24.05-18.18 39.62z" fill="currentColor"/></svg>
                                            </button>
                                        </h3>
                                        <div class="accordion__items--body">
                                            <p class="accordion__items--body__desc">Check compatibility with your vehicle's make, model, and year; verify warranties and look for reputable sellers with good reviews.</p>
                                        </div>
                                    </div>
                                    
                                    <div class="accordion__items">
                                        <h3 class="accordion__items--title">
                                            <button class="faq__accordion--btn accordion__items--button">How do I know if my engine components need replacement?
                                                <svg class="accordion__items--button__icon" xmlns="http://www.w3.org/2000/svg" width="20.355" height="13.394" viewBox="0 0 512 512"><path d="M98 190.06l139.78 163.12a24 24 0 0036.44 0L414 190.06c13.34-15.57 2.28-39.62-18.22-39.62h-279.6c-20.5 0-31.56 24.05-18.18 39.62z" fill="currentColor"/></svg>
                                            </button>
                                        </h3>
                                        <div class="accordion__items--body">
                                            <p class="accordion__items--body__desc">Signs include engine misfires, knocking sounds, loss of power, oil leaks, or the Check Engine light coming on.</p>
                                        </div>
                                    </div>
                                    <div class="accordion__items">
                                        <h3 class="accordion__items--title">
                                            <button class="faq__accordion--btn accordion__items--button">Are OEM engine components better than aftermarket ones?
                                                <svg class="accordion__items--button__icon" xmlns="http://www.w3.org/2000/svg" width="20.355" height="13.394" viewBox="0 0 512 512"><path d="M98 190.06l139.78 163.12a24 24 0 0036.44 0L414 190.06c13.34-15.57 2.28-39.62-18.22-39.62h-279.6c-20.5 0-31.56 24.05-18.18 39.62z" fill="currentColor"/></svg>
                                            </button>
                                        </h3>
                                        <div class="accordion__items--body">
                                            <p class="accordion__items--body__desc">OEM parts ensure exact fit and performance, but high-quality aftermarket parts can offer similar performance at a lower cost.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="accordion__container">
                                    <div class="accordion__items">
                                        <h3 class="accordion__items--title">
                                            <button class="faq__accordion--btn accordion__items--button">Can I install engine components myself, or should I use a mechanic?
                                                <svg class="accordion__items--button__icon" xmlns="http://www.w3.org/2000/svg" width="20.355" height="13.394" viewBox="0 0 512 512"><path d="M98 190.06l139.78 163.12a24 24 0 0036.44 0L414 190.06c13.34-15.57 2.28-39.62-18.22-39.62h-279.6c-20.5 0-31.56 24.05-18.18 39.62z" fill="currentColor"/></svg>
                                            </button>
                                        </h3>
                                        <div class="accordion__items--body">
                                            <p class="accordion__items--body__desc">Simple parts like air filters or spark plugs can be DIY, but critical parts like timing belts or pistons should be handled by professionals.</p>
                                        </div>
                                    </div>
                                    <div class="accordion__items">
                                        <h3 class="accordion__items--title">
                                            <button class="faq__accordion--btn accordion__items--button">How can I extend the life of my engine components?
                                                <svg class="accordion__items--button__icon" xmlns="http://www.w3.org/2000/svg" width="20.355" height="13.394" viewBox="0 0 512 512"><path d="M98 190.06l139.78 163.12a24 24 0 0036.44 0L414 190.06c13.34-15.57 2.28-39.62-18.22-39.62h-279.6c-20.5 0-31.56 24.05-18.18 39.62z" fill="currentColor"/></svg>
                                            </button>
                                        </h3>
                                        <div class="accordion__items--body">
                                            <p class="accordion__items--body__desc">Regular oil changes, using high-quality fuel, routine maintenance, and avoiding engine overloading help prolong component life.</p>
                                        </div>
                                    </div>
                                    <div class="accordion__items">
                                        <h3 class="accordion__items--title">
                                            <button class="faq__accordion--btn accordion__items--button">What are the most commonly replaced engine components?
                                                <svg class="accordion__items--button__icon" xmlns="http://www.w3.org/2000/svg" width="20.355" height="13.394" viewBox="0 0 512 512"><path d="M98 190.06l139.78 163.12a24 24 0 0036.44 0L414 190.06c13.34-15.57 2.28-39.62-18.22-39.62h-279.6c-20.5 0-31.56 24.05-18.18 39.62z" fill="currentColor"/></svg>
                                            </button>
                                        </h3>
                                        <div class="accordion__items--body">
                                            <p class="accordion__items--body__desc">Common replacements include spark plugs, timing belts, pistons, cylinder heads, and gaskets due to regular wear or mechanical failure.</p>
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