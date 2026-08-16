@extends('layouts.frontend')
@section('title')
    404 | Spare Part Zone
@endsection
@section('content')
<section class="error__section section--padding">
            <div class="container">
                <div class="row row-cols-1">
                    <div class="col">
                        <div class="error__content text-center">
                            <img class="error__content--img display-block mb-50" src="/frontend/assets/img/other/404-thumb.webp" alt="error-img">
                            <h2 class="error__content--title">Opps ! We,ar Not Found This Page </h2>
                            <p class="error__content--desc">We apologize, but it seems like there's been an error. Our team has been notified, and we are working diligently to resolve the issue.</p>
                            <a class="error__content--btn primary__btn" href="/"><i class="fa-solid fa-house"></i> Back To Home</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @endsection