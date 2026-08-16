@php
    // Fallback: if you forget to pass it, use the current route name
    $current = $currentSlug ?? request()->route()?->getName();

    // Master list (use slugs that match your route names)
    $products = [
        [
            'slug' => 'car-alternator',
            'name' => 'Alternator',
            'img' => '/frontend/my_img/Main/alternators.jpg',
            'desc' => 'Reliable Alternator for smooth shifts and lasting performance & durability.',
            'link' => route('/used-carparts/car-alternator'),
        ],
        [
            'slug' => 'car-ac-compressor',
            'name' => 'Car AC Compressor',
            'img' => '/frontend/my_img/Main/ac_comporessor.jpg',
            'desc' => 'Reliable A/C compressors for efficient cooling and lasting durability.',
            'link' => route('/used-carparts/car-ac-compressor'),
        ],
        [
            'slug' => 'car-throttle-body',
            'name' => 'Car Throttle Body',
            'img' => '/frontend/my_img/Main/throttle_body.jpg',
            'desc' => 'Reliable throttle bodies for efficient, long-lasting performance.',
            'link' => route('/used-carparts/car-throttle-body'),
        ],
        [
            'slug' => 'car-headlight',
            'name' => 'Car Headlight',
            'img' => '/frontend/my_img/Main/car_headlights.jpg',
            'desc' => 'Durable headlights for clear visibility and long-lasting performance.',
            'link' => route('/used-carparts/car-headlight'),
        ],
        [
            'slug' => 'car-transmission',
            'name' => 'Car Transmission',
            'img' => '/frontend/my_img/Main/transmission.jpg',
            'desc' => 'Reliable transmission for smooth shifting and long-term performance & durability.',
            'link' => route('/used-carparts/car-transmission'),
        ],
        [
            'slug' => 'car-catalytic-converter',
            'name' => 'Car Catalytic Converter',
            'img' => '/frontend/my_img/Main/catalytic_converter.jpg',
            'desc' => 'Reliable catalytic converter for smooth shifting and long-term performance & durability.',
            'link' => route('/used-carparts/car-catalytic-converter'),
        ],
    ];

    // Filter out the current product (no error if $current is null)
    $filtered = collect($products)->reject(function ($p) use ($current) {
        return $current && $p['slug'] === $current;
    });
@endphp
<style>
    .product__card {
    border: 1px solid #fff5f5;
    border-radius: 5px;
    background-color: #ffff;
    }

    .primary__btn {
        /* width: 100%; */
        height: 41px;
        background: #ff4e21;
        color: #fff;
        border-radius: 50px;
        font-size: 14px;
        font-weight: 600;
        border: none;
        padding: 1px 2rem;
        cursor: pointer;
        transition: background 0.3s ease;
        margin-top: 10px;
    }
    @media (max-width: 576px) {
        .primary__btn.slider__btn {
            font-size: 14px;
            padding: 2px 10px;
            min-width: 110px;
            white-space: nowrap;
            margin-top: 14px;
            margin-bottom: 10px;
        }
    }
</style>

<section class="product__section section--padding">
    <div class="container">
        <div class="section__heading border-bottom ">
            <h2 class="section__heading--maintitle">You <span>may also like</span></h2>
        </div>
        <div class="product__section--inner pb-15 product__swiper--activation swiper">
            <div class="swiper-wrapper">
                @foreach ($filtered as $product)
                    <div class="swiper-slide">
                        <article class="product__card">
                            <div class="product__card--thumbnail">
                                <a class="product__card--thumbnail__link display-block" href="{{ $product['link'] }}">
                                    <img src="{{ $product['img'] }}" alt="{{ $product['name'] }}">
                                </a>
                            </div>
                            <div class="product__card--content text-center">
                                <h3 class="product__card--title">
                                    <a href="{{ $product['link'] }}">{{ $product['name'] }}</a>
                                </h3>
                                <p>{{ $product['desc'] }}</p>
                                <div style="display:flex;justify-content:center;">
                                    <a class="primary__btn slider__btn" href="tel:+1 (855) 581-5811">
                                        <i class="fas fa-phone" style="margin-right:8px;"></i>Enquire Now
                                    </a>
                                </div>
                            </div>
                        </article>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<style>
    .product__card--thumbnail {
        width: 209px;
        height: 171px;
        overflow: hidden;
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 0 auto;
        /* Center the image block */
    }

    .product__card--thumbnail img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        /* Use 'contain' if you want full image without cropping */
        display: block;
    }
</style>

