@extends('layouts.frontend')
  
@section('title')
    Thankyou | Spare Part Zone
@endsection

@push('custom-head')
<script>
  gtag('event', 'conversion', {'send_to': 'AW-17529608510/nyGfCI3S2ZMbEL6y4qZB'});
</script>
@endpush

@section('content')

<main class="main__content_wrapper">
    <!-- Start breadcrumb section -->
    <section class="breadcrumb__section breadcrumb__bg">
        <div class="container">
            <div class="row row-cols-1">
                <div class="col">
                    <div class="breadcrumb__content text-center">
                        <ul class="breadcrumb__content--menu d-flex justify-content-center">
                            <li class="breadcrumb__content--menu__items"><a href="/">Home</a></li>
                            <li class="breadcrumb__content--menu__items"><span>Thankyou</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End breadcrumb section -->

    <!-- Start thank you section -->
    <section class="error__section section--padding">
        <div class="container">
            <div class="row row-cols-1">
                <div class="col">
                    <div class="error__content text-center">
                        <h2 class="error__content--title">Thank You for Contacting Us</h2>
                        <p class="error__content--desc">We appreciate your message and have received it. Our team will
                            review it and contact you soon.</p>
                        <a class="error__content--btn primary__btn" href="/"><i class="fa-solid fa-house"></i> Back To Home</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End thank you section -->
</main>

@endsection
