@extends('layouts.frontend')
@section('title') Exterior Body Parts | Spare Part Zone @endsection
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
                                <li class="breadcrumb__content--menu__items"><span>Exterior Body Parts</span></li>
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
                        <img class="about__thumb--img border-radius-5" src="/frontend/my_img/exterior.jpeg" alt="about-electrical-thumb">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about__content">
                    <span class="about__content--subtitle text__secondary mb-35">Premium Exterior Parts for a Sleek & Durable Finish</span>
                    <h2 class="about__content--maintitle mb-5">Exterior Body Parts</h2>
                    <p class="about__content--desc mb-20">
                        At Spare Part Zone, we offer high-quality exterior parts designed to protect, enhance, and restore your vehicle’s appearance. From bumpers and fenders to mirrors and trim, our selection combines durability with perfect fit and finish, ensuring your car looks sharp and performs safely on the road. Whether you're repairing damage or upgrading your vehicle’s style, trust our premium exterior components to deliver long-lasting quality and an impressive look that stands out.
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
                                                <a class="product__card--thumbnail__link display-block" href="/exterior-parts/bumpers">
                                                    <img class="" src="/frontend/my_img/Main/bumpers.jpg" alt="product-img">
                                                </a>
                                            </div>
                                            <div class="product__card--content">
                                               
                                                <h3 class="product__card--title text-center"><a href="/exterior-parts/bumpers">Bumpers</a></h3>
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
                                                <a class="product__card--thumbnail__link display-block" href="/exterior-parts/fenders">
                                                    <img class="" src="/frontend/my_img/Main/car_fenders.jpg" alt="product-img">
                                                </a>
                                            </div>
                                            <div class="product__card--content">
                                                
                                                <h3 class="product__card--title text-center"><a href="/exterior-parts/fenders">Fenders</a></h3>
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
                                                <a class="product__card--thumbnail__link display-block" href="/exterior-parts/hood">
                                                    <img class="" src="/frontend/my_img/Main/hood.jpg" alt="product-img">
                                                </a>
                                            </div>
                                            <div class="product__card--content">
                                               
                                                <h3 class="product__card--title text-center"><a href="/exterior-parts/hood">Hood</a></h3>
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
                                                <a class="product__card--thumbnail__link display-block" href="/exterior-parts/doors">
                                                    <img class="" src="/frontend/my_img/Main/car_doors.jpg" alt="product-img">
                                                </a>
                                            </div>
                                            <div class="product__card--content">
                                                
                                                <h3 class="product__card--title text-center"><a href="/exterior-parts/doors">Doors</a></h3>
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
                                                <a class="product__card--thumbnail__link display-block" href="/exterior-parts/mirrors">
                                                    <img class="" src="/frontend/my_img/Main/mirror.jpg" alt="product-img">
                                                </a>
                                            </div>
                                            <div class="product__card--content">
                                               
                                                <h3 class="product__card--title text-center"><a href="/exterior-parts/mirrors">Mirrors</a></h3>
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
                                                <a class="product__card--thumbnail__link display-block" href="/exterior-parts/grilles">
                                                    <img class="" src="/frontend/my_img/Main/car_grilles.jpg" alt="product-img">
                                                </a>
                                            </div>
                                            <div class="product__card--content">
                                                
                                                <h3 class="product__card--title text-center"><a href="/exterior-parts/grilles">Grilles</a></h3>
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
                                                <a class="product__card--thumbnail__link display-block" href="/exterior-parts/fender-flare">
                                                    <img class="" src="/frontend/my_img/used-parts/car-fender-flares.png" alt="product-img">
                                                    
                                                </a>
                                              
                                            </div>
                                            <div class="product__card--content">
                                              
                                                <h3 class="product__card--title text-center"><a href="/exterior-parts/fender-flare">Fender Flare </a></h3>
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
                                                <a class="product__card--thumbnail__link display-block" href="/exterior-parts/wheel-hub">
                                                    <img class="" src="/frontend/my_img/Main/wheel_hub.jpg" alt="product-img">
                                                    
                                                </a>
                                              
                                            </div>
                                            <div class="product__card--content">
                                               
                                                <h3 class="product__card--title text-center"><a href="/exterior-parts/wheel-hub">Wheel Hub </a></h3>
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
                                                <a class="product__card--thumbnail__link display-block" href="/exterior-parts/wheel-rim">
                                                    <img class="" src="/frontend/my_img/Main/wheel_rim.jpg" alt="product-img">
                                                    
                                                </a>
                                              
                                            </div>
                                            <div class="product__card--content">
                                                
                                                <h3 class="product__card--title text-center"><a href="/exterior-parts/wheel-rim">Wheel Rim </a></h3>
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
                                            <button class="faq__accordion--btn accordion__items--button">What are the most replaced exterior body parts?
                                                <svg class="accordion__items--button__icon" xmlns="http://www.w3.org/2000/svg" width="20.355" height="13.394" viewBox="0 0 512 512"><path d="M98 190.06l139.78 163.12a24 24 0 0036.44 0L414 190.06c13.34-15.57 2.28-39.62-18.22-39.62h-279.6c-20.5 0-31.56 24.05-18.18 39.62z" fill="currentColor"/></svg>
                                            </button>
                                        </h3>
                                        <div class="accordion__items--body">
                                            <p class="accordion__items--body__desc">Bumpers, fenders, hoods, grilles, mirrors, and headlights are common replacements due to damage or wear.</p>
                                        </div>
                                    </div>
                                    <div class="accordion__items">
                                        <h3 class="accordion__items--title">
                                            <button class="faq__accordion--btn accordion__items--button">Can I replace exterior body parts myself?
                                                <svg class="accordion__items--button__icon" xmlns="http://www.w3.org/2000/svg" width="20.355" height="13.394" viewBox="0 0 512 512"><path d="M98 190.06l139.78 163.12a24 24 0 0036.44 0L414 190.06c13.34-15.57 2.28-39.62-18.22-39.62h-279.6c-20.5 0-31.56 24.05-18.18 39.62z" fill="currentColor"/></svg>
                                            </button>
                                        </h3>
                                        <div class="accordion__items--body">
                                            <p class="accordion__items--body__desc">Basic parts like mirrors or grilles are DIY-friendly; more complex installations may need professional help.</p>
                                        </div>
                                    </div>
                                    <div class="accordion__items">
                                        <h3 class="accordion__items--title">
                                            <button class="faq__accordion--btn accordion__items--button">Are aftermarket body parts a good alternative to OEM?
                                                <svg class="accordion__items--button__icon" xmlns="http://www.w3.org/2000/svg" width="20.355" height="13.394" viewBox="0 0 512 512"><path d="M98 190.06l139.78 163.12a24 24 0 0036.44 0L414 190.06c13.34-15.57 2.28-39.62-18.22-39.62h-279.6c-20.5 0-31.56 24.05-18.18 39.62z" fill="currentColor"/></svg>
                                            </button>
                                        </h3>
                                        <div class="accordion__items--body">
                                            <p class="accordion__items--body__desc">Quality aftermarket parts offer cost savings but may require minor fitment adjustments compared to OEM.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="accordion__container">
                                    <div class="accordion__items">
                                        <h3 class="accordion__items--title">
                                            <button class="faq__accordion--btn accordion__items--button">How can I ensure paint color matches when replacing body parts?
                                                <svg class="accordion__items--button__icon" xmlns="http://www.w3.org/2000/svg" width="20.355" height="13.394" viewBox="0 0 512 512"><path d="M98 190.06l139.78 163.12a24 24 0 0036.44 0L414 190.06c13.34-15.57 2.28-39.62-18.22-39.62h-279.6c-20.5 0-31.56 24.05-18.18 39.62z" fill="currentColor"/></svg>
                                            </button>
                                        </h3>
                                        <div class="accordion__items--body">
                                            <p class="accordion__items--body__desc">Use your vehicle's factory paint code, usually found on the door jamb or under the hood.</p>
                                        </div>
                                    </div>
                                    <div class="accordion__items">
                                        <h3 class="accordion__items--title">
                                            <button class="faq__accordion--btn accordion__items--button">Are replacement body panels rust-resistant?
                                                <svg class="accordion__items--button__icon" xmlns="http://www.w3.org/2000/svg" width="20.355" height="13.394" viewBox="0 0 512 512"><path d="M98 190.06l139.78 163.12a24 24 0 0036.44 0L414 190.06c13.34-15.57 2.28-39.62-18.22-39.62h-279.6c-20.5 0-31.56 24.05-18.18 39.62z" fill="currentColor"/></svg>
                                            </button>
                                        </h3>
                                        <div class="accordion__items--body">
                                            <p class="accordion__items--body__desc">Most modern panels are coated to resist rust, but adding anti-rust treatment can provide extra protection.</p>
                                        </div>
                                    </div>
                                    <div class="accordion__items">
                                        <h3 class="accordion__items--title">
                                            <button class="faq__accordion--btn accordion__items--button">Do I need to inform my insurance company when replacing body parts?
                                                <svg class="accordion__items--button__icon" xmlns="http://www.w3.org/2000/svg" width="20.355" height="13.394" viewBox="0 0 512 512"><path d="M98 190.06l139.78 163.12a24 24 0 0036.44 0L414 190.06c13.34-15.57 2.28-39.62-18.22-39.62h-279.6c-20.5 0-31.56 24.05-18.18 39.62z" fill="currentColor"/></svg>
                                            </button>
                                        </h3>
                                        <div class="accordion__items--body">
                                            <p class="accordion__items--body__desc">It’s recommended if the replacement is due to an accident or if it affects your coverage or claims.</p>
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