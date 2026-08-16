@extends('layouts.frontend')
@section('title') Suspension Parts | Spare Part Zone @endsection
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
                                <li class="breadcrumb__content--menu__items"><span>Suspension Parts</span></li>
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
                        <img class="about__thumb--img border-radius-5" src="/frontend/my_img/suspension.jpeg" alt="about-suspension-thumb" style="width: 500px; height: 500px; object-fit: cover;">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about__content">
                    <span class="about__content--subtitle text__secondary mb-35">Premium Suspension Parts for a Smoother Ride.</span>
                    <h2 class="about__content--maintitle mb-5">Suspension Parts</h2>
                    <p class="about__content--desc mb-20">
                        Your vehicle’s suspension system is essential for handling, comfort, and safety. At Spare Part Zone, we provide high-quality new and used suspension components including shocks, struts, control arms, and bushings. Every part is inspected for performance and durability, ensuring you get a smoother, more controlled driving experience. Whether you’re repairing or upgrading, trust us for OEM-quality suspension parts at competitive prices.
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
                                                <a class="product__card--thumbnail__link display-block" href="/suspension-parts/shock-absorber">
                                                    <img class="" src="/frontend/my_img/Main/shock_absorber.jpg" alt="product-img">
                                                </a>
                                            </div>
                                            <div class="product__card--content">
                                                
                                                <h3 class="product__card--title text-center"><a href="/suspension-parts/shock-absorber">Shock Absorber</a></h3>

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
                                                <a class="product__card--thumbnail__link display-block" href="/suspension-parts/rack-pinion">
                                                    <img class="" src="/frontend/my_img/Main/rack_and_pinion.jpg" alt="product-img">
                                                </a>
                                            </div>
                                            <div class="product__card--content">
                                                
                                                <h3 class="product__card--title text-center"><a href="/suspension-parts/rack-pinion">Rack Pinion</a></h3>

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
                                                <a class="product__card--thumbnail__link display-block" href="/suspension-parts/control-arms">
                                                    <img class="" src="/frontend/my_img/Main/control_arms.jpg" alt="product-img">
                                                </a>
                                            </div>
                                            <div class="product__card--content">
                                                
                                                <h3 class="product__card--title text-center"><a href="/suspension-parts/control-arms">Control Arms</a></h3>

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
                                                <a class="product__card--thumbnail__link display-block" href="/suspension-parts/braker-caliper-rotors">
                                                    <img class="" src="/frontend/my_img/Main/braker_caliper.jpg" alt="product-img">
                                                </a>
                                            </div>
                                            <div class="product__card--content">
                                                
                                                <h3 class="product__card--title text-center"><a href="/suspension-parts/braker-caliper-rotors">Braker Caliper Rotors</a></h3>

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
                                                <a class="product__card--thumbnail__link display-block" href="/suspension-parts/power-steering-pump">
                                                    <img class="" src="/frontend/my_img/Main/power_steering_pump.jpg" alt="product-img">
                                                </a>
                                            </div>
                                            <div class="product__card--content">
                                                
                                                <h3 class="product__card--title text-center"><a href="/suspension-parts/power-steering-pump">Power Steering Pump</a></h3>

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
                                                <a class="product__card--thumbnail__link display-block" href="/suspension-parts/steering-column">
                                                    <img class="" src="/frontend/my_img/Main/steering_column.jpg" alt="product-img">
                                                </a>
                                            </div>
                                            <div class="product__card--content">
                                               
                                                <h3 class="product__card--title text-center"><a href="/suspension-parts/steering-column">Steering Column</a></h3>

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
                                                <a class="product__card--thumbnail__link display-block" href="/suspension-parts/strut">
                                                    <img class="" src="/frontend/my_img/Main/strut.jpg" alt="product-img">
                                                    
                                                </a>
                                              
                                            </div>
                                            <div class="product__card--content">
                                                
                                                <h3 class="product__card--title text-center"><a href="/suspension-parts/strut">Strut </a></h3>
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
                                                <a class="product__card--thumbnail__link display-block" href="/suspension-parts/ac-compressor">
                                                    <img class="" src="/frontend/my_img/Main/ac_comporessor.jpg" alt="product-img">
                                                    
                                                </a>
                                              
                                            </div>
                                            <div class="product__card--content">
                                                
                                                <h3 class="product__card--title text-center"><a href="/suspension-parts/ac-compressor">AC Compressor </a></h3>
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
                                                <a class="product__card--thumbnail__link display-block" href="/suspension-parts/ac-condenser">
                                                    <img class="" src="/frontend/my_img/Main/ac-condenser.jpg" alt="product-img">
                                                    
                                                </a>
                                              
                                            </div>
                                            <div class="product__card--content">
                                                
                                                <h3 class="product__card--title text-center"><a href="/suspension-parts/ac-condenser">AC Condenser </a></h3>
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
                                                <a class="product__card--thumbnail__link display-block" href="/suspension-parts/blower-motor">
                                                    <img class="" src="/frontend/my_img/Main/blower-motor.jpg" alt="product-img">
                                                    
                                                </a>
                                              
                                            </div>
                                            <div class="product__card--content">
                                                
                                                <h3 class="product__card--title text-center"><a href="/suspension-parts/blower-motor">Blower Motor </a></h3>
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
                                                <a class="product__card--thumbnail__link display-block" href="/suspension-parts/ac-heater-control-system">
                                                    <img class="" src="/frontend/my_img/Main/ac_heater_control_system.jpg" alt="product-img">
                                                    
                                                </a>
                                              
                                            </div>
                                            <div class="product__card--content">
                                                
                                                <h3 class="product__card--title text-center"><a href="/suspension-parts/ac-heater-control-system">AC Heater Control System </a></h3>
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
                        <div class="face__step one border-bottom" id="accordionExample">
                       <div class="section__heading section__heading--flex border-bottom mb-30 ">
                    <h2 class="section__heading--maintitle" style="margin-left: 20px">Frequently Asked  <span>Questions</span></h2>
                </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="accordion__container">
                                    <div class="accordion__items">
                                        <h3 class="accordion__items--title">
                                            <button class="faq__accordion--btn accordion__items--button">What are the key signs of suspension or steering issues?
                                                <svg class="accordion__items--button__icon" xmlns="http://www.w3.org/2000/svg" width="20.355" height="13.394" viewBox="0 0 512 512"><path d="M98 190.06l139.78 163.12a24 24 0 0036.44 0L414 190.06c13.34-15.57 2.28-39.62-18.22-39.62h-279.6c-20.5 0-31.56 24.05-18.18 39.62z" fill="currentColor"/></svg>
                                            </button>
                                        </h3>
                                        <div class="accordion__items--body">
                                            <p class="accordion__items--body__desc">Unusual noises, uneven tire wear, poor handling, or steering wheel vibration indicate potential problems.</p>
                                        </div>
                                    </div>
                                    <div class="accordion__items">
                                        <h3 class="accordion__items--title">
                                            <button class="faq__accordion--btn accordion__items--button">What components make up the suspension and steering systems?
                                                <svg class="accordion__items--button__icon" xmlns="http://www.w3.org/2000/svg" width="20.355" height="13.394" viewBox="0 0 512 512"><path d="M98 190.06l139.78 163.12a24 24 0 0036.44 0L414 190.06c13.34-15.57 2.28-39.62-18.22-39.62h-279.6c-20.5 0-31.56 24.05-18.18 39.62z" fill="currentColor"/></svg>
                                            </button>
                                        </h3>
                                        <div class="accordion__items--body">
                                            <p class="accordion__items--body__desc">Key parts include shocks, struts, control arms, tie rods, ball joints, and power steering pumps.</p>
                                        </div>
                                    </div>
                                    <div class="accordion__items">
                                        <h3 class="accordion__items--title">
                                            <button class="faq__accordion--btn accordion__items--button">How often should I inspect my suspension & steering components?
                                                <svg class="accordion__items--button__icon" xmlns="http://www.w3.org/2000/svg" width="20.355" height="13.394" viewBox="0 0 512 512"><path d="M98 190.06l139.78 163.12a24 24 0 0036.44 0L414 190.06c13.34-15.57 2.28-39.62-18.22-39.62h-279.6c-20.5 0-31.56 24.05-18.18 39.62z" fill="currentColor"/></svg>
                                            </button>
                                        </h3>
                                        <div class="accordion__items--body">
                                            <p class="accordion__items--body__desc">Inspect at least once a year or every 12,000 miles, and after hitting potholes or curbs.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="accordion__container">
                                    <div class="accordion__items">
                                        <h3 class="accordion__items--title">
                                            <button class="faq__accordion--btn accordion__items--button">What are common problems with the climate control system?
                                                <svg class="accordion__items--button__icon" xmlns="http://www.w3.org/2000/svg" width="20.355" height="13.394" viewBox="0 0 512 512"><path d="M98 190.06l139.78 163.12a24 24 0 0036.44 0L414 190.06c13.34-15.57 2.28-39.62-18.22-39.62h-279.6c-20.5 0-31.56 24.05-18.18 39.62z" fill="currentColor"/></svg>
                                            </button>
                                        </h3>
                                        <div class="accordion__items--body">
                                            <p class="accordion__items--body__desc">Issues include weak airflow, inconsistent temperatures, refrigerant leaks, or faulty blower motors and compressors.</p>
                                        </div>
                                    </div>
                                    <div class="accordion__items">
                                        <h3 class="accordion__items--title">
                                            <button class="faq__accordion--btn accordion__items--button">Can I recharge my car’s A/C system myself?
                                                <svg class="accordion__items--button__icon" xmlns="http://www.w3.org/2000/svg" width="20.355" height="13.394" viewBox="0 0 512 512"><path d="M98 190.06l139.78 163.12a24 24 0 0036.44 0L414 190.06c13.34-15.57 2.28-39.62-18.22-39.62h-279.6c-20.5 0-31.56 24.05-18.18 39.62z" fill="currentColor"/></svg>
                                            </button>
                                        </h3>
                                        <div class="accordion__items--body">
                                            <p class="accordion__items--body__desc">Yes, using an A/C recharge kit, but if there's a leak or deeper issue, professional service is recommended.</p>
                                        </div>
                                    </div>
                                    <div class="accordion__items">
                                        <h3 class="accordion__items--title">
                                            <button class="faq__accordion--btn accordion__items--button">How do I choose the right suspension parts for my vehicle?
                                                <svg class="accordion__items--button__icon" xmlns="http://www.w3.org/2000/svg" width="20.355" height="13.394" viewBox="0 0 512 512"><path d="M98 190.06l139.78 163.12a24 24 0 0036.44 0L414 190.06c13.34-15.57 2.28-39.62-18.22-39.62h-279.6c-20.5 0-31.56 24.05-18.18 39.62z" fill="currentColor"/></svg>
                                            </button>
                                        </h3>
                                        <div class="accordion__items--body">
                                            <p class="accordion__items--body__desc">Consider your driving style, vehicle type, and desired performance. Always verify fitment with your VIN or model details.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>   
            </div>     
        </section>
        </div>
        @endsection