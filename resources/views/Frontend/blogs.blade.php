@extends('layouts.frontend')
@section('title')
    Blogs | Spare Part Zone
@endsection
@section('content')
<section class="breadcrumb__section breadcrumb__bg">
    <div class="container">
        <div class="row row-cols-1">
            <div class="col">
                <div class="breadcrumb__content text-center">
                    <h1 class="breadcrumb__content--title mb-25">Blogs</h1>
                    <ul class="breadcrumb__content--menu d-flex justify-content-center">
                        <li class="breadcrumb__content--menu__items"><a href="/">Home</a></li>
                        <li class="breadcrumb__content--menu__items"><span>Blogs</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="blog__section section--padding">
    <div class="container">
        <div class="section__heading border-bottom mb-30">
            <h2 class="section__heading--maintitle">Blog <span>& article</span></h2>
        </div>

        <div class="blog__section--inner">
            <div class="row mb--n30 justify-content-center">

                {{-- Loop --}}
                @forelse($blogs as $blog)
                    @php
                        $content = json_decode($blog->description, true);
                        $previewText = '';
                        if (isset($content['blocks'][0]['data']['text'])) {
                            $previewText = strip_tags($content['blocks'][0]['data']['text']);
                        } else {
                            $previewText = strip_tags($blog->description);
                        }
                    @endphp

                    <div class="col-lg-4 col-md-6 col-sm-6 mb-30">
                        <div class="blog__card h-100 shadow-sm rounded-3 overflow-hidden">
                            <div class="blog__card--thumbnail">
                                <a href="{{ route('blogs.details', $blog->slug) }}">
                                    <img 
                                        src="{{ $blog->photo ? asset(Storage::url($blog->photo)) : asset('frontend/assets/img/default-blog.jpg') }}" 
                                        alt="{{ $blog->title }}" 
                                        style="width:100%; height:250px; object-fit:cover; border-radius:10px;"
                                    >
                                </a>
                                <span class="blog__card--meta__date">
                                {{ \Carbon\Carbon::parse($blog->publish_date)->timezone('Asia/Kolkata')->format('d') }}<br>
                                {{ \Carbon\Carbon::parse($blog->publish_date)->timezone('Asia/Kolkata')->format('M') }}
                                 </span>

                            </div>
                            <div class="blog__card--content mt-3 px-2 pb-3">
                                <h3 class="fw-bold mb-2" style="font-size:1.1rem;">
                                    <a href="{{ route('blogs.details', $blog->slug) }}" class="text-dark text-decoration-none">
                                        {{ Str::limit($blog->title, 60) }}
                                    </a>
                                </h3>
                                <p class="text-muted" style="min-height:60px;">
                                    {{ Str::limit($previewText, 100) }}
                                </p>
                            </div>
                            <a class="blog__card--btn__link" href="{{ route('blogs.details', $blog->slug) }}">Read more 
                                <svg width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.8335 3.6178L8.26381 0.157332C8.21395 0.107774 8.1532 0.0681771 8.08544 0.0410843C8.01768 0.0139915 7.94441 0 7.87032 0C7.79624 0 7.72297 0.0139915 7.65521 0.0410843C7.58746 0.0681771 7.5267 0.107774 7.47684 0.157332C7.37199 0.262044 7.31393 0.39827 7.31393 0.539537C7.31393 0.680805 7.37199 0.817024 7.47684 0.921736L10.0943 3.45837H0.55625C0.405122 3.46829 0.26375 3.52959 0.160556 3.62994C0.057363 3.73029 0 3.86225 0 3.99929C0 4.13633 0.057363 4.26829 0.160556 4.36864C0.26375 4.46899 0.405122 4.53029 0.55625 4.54021H10.0927L7.47527 7.07826C7.37042 7.18298 7.31235 7.3192 7.31235 7.46047C7.31235 7.60174 7.37042 7.73796 7.47527 7.84267C7.52513 7.89223 7.58588 7.93182 7.65364 7.95892C7.7214 7.98601 7.79467 8 7.86875 8C7.94284 8 8.0161 7.98601 8.08386 7.95892C8.15162 7.93182 8.21238 7.89223 8.26223 7.84267L11.8335 4.38932C11.9406 4.28419 12 4.14649 12 4.00356C12 3.86063 11.9406 3.72293 11.8335 3.6178Z" fill="currentColor"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                @empty
                    <div class="col-12 text-center py-5">
                        <h4>No blogs available right now.</h4>
                    </div>
                @endforelse

            </div>

            {{-- Pagination --}} 
            @if($blogs->hasPages())
                <div class="pagination__area bg__gray--color mt-5">
                    <nav class="pagination justify-content-center">
                        <ul class="pagination__wrapper d-flex align-items-center justify-content-center">

                            {{-- Previous --}}
                            <li class="pagination__list {{ $blogs->onFirstPage() ? 'disabled' : '' }}">
                                @if(!$blogs->onFirstPage())
                                    <a href="{{ $blogs->previousPageUrl() }}" class="pagination__item--arrow link">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="22.51" height="20.443" viewBox="0 0 512 512">
                                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M244 400L100 256l144-144M120 256h292"/>
                                        </svg>
                                    </a>
                                @else
                                    <span class="pagination__item--arrow">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="22.51" height="20.443" viewBox="0 0 512 512">
                                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M244 400L100 256l144-144M120 256h292"/>
                                        </svg>
                                    </span>
                                @endif
                            </li>

                            {{-- Page numbers --}}
                            @for($i = 1; $i <= $blogs->lastPage(); $i++)
                                <li class="pagination__list">
                                    @if($i == $blogs->currentPage())
                                        <span class="pagination__item pagination__item--current">{{ $i }}</span>
                                    @else
                                        <a href="{{ $blogs->url($i) }}" class="pagination__item link">{{ $i }}</a>
                                    @endif
                                </li>
                            @endfor

                            {{-- Next Page --}}
                            <li class="pagination__list {{ $blogs->hasMorePages() ? '' : 'disabled' }}">
                                @if($blogs->hasMorePages())
                                    <a href="{{ $blogs->nextPageUrl() }}" class="pagination__item--arrow link">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="22.51" height="20.443" viewBox="0 0 512 512">
                                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M268 112l144 144-144 144M392 256H100"/>
                                        </svg>
                                    </a>
                                @else
                                    <span class="pagination__item--arrow">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="22.51" height="20.443" viewBox="0 0 512 512">
                                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M268 112l144 144-144 144M392 256H100"/>
                                        </svg>
                                    </span>
                                @endif
                            </li>

                        </ul>
                    </nav>
                </div>
            @endif

        </div>
    </div>
</section>
@endsection
