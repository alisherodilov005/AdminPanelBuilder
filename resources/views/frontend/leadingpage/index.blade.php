@extends('frontend.layouts.master')
@section('header')
    @include('frontend.layouts.header')
@endsection
@section('content')
    <style>
        /* width */
        ::-webkit-scrollbar {
            width: 0px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
            background: none;
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: none;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: none;
        }
    </style>
    <main>
        <!-- banner-area -->
        <section class="banner-area p-relative pt-90">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8">
                        <div class="banner__content pt-145 mb-135">
                            <span class="banner__sub-title mb-20">{!! __('backend.welcome') !!}</span>
                            <h2 class="banner__title mb-30">{!! __('backend.maintext') !!}</h2>
                            <p>{!! __('backend.mainsubtext') !!}</p>
                            <div class="banner__btn">
                                <a class="tp-btn" href="/products">{{ __('backend.ProductsMain') }}</a>
                                <a class="tp-btn-second ml-25" href="/about">{{ __('backend.aboutus') }}</a>
                            </div>
                        </div>
                        <div class="banner__box-item">
                            <div class="row">
                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="banner__item d-flex align-items-center mb-30 wow fadeInUp"
                                        data-wow-delay=".2s">
                                        <div class="banner__item-icon">
                                            <i class="flaticon-rating"></i>
                                        </div>
                                        <div class="banner__item-content">
                                            <span>{{ __('backend.satic') }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="banner__item pink-border d-flex align-items-center mb-30 wow fadeInUp"
                                        data-wow-delay=".4s">
                                        <div class="banner__item-icon pink-icon">
                                            <i class="flaticon-target"></i>
                                        </div>
                                        <div class="banner__item-content">
                                            <span>{{ __('backend.help') }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="banner__item green-border d-flex align-items-center mb-30 wow fadeInUp"
                                        data-wow-delay=".6s">
                                        <div class="banner__item-icon green-icon">
                                            <i class="flaticon-premium-badge"></i>
                                        </div>
                                        <div class="banner__item-content">
                                            <span>{{ __('backend.products') }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bannerscroll d-none d-xl-block" style="margin-top: -45px;">
                <div class="banner-scroll-btn">
                    <a class="bannerscroll-icon" href="#tp-about-scroll"><i class="fa-light fa-computer-mouse"></i>
                        <span>Scrool Down</span></a>
                </div>
            </div>
            <div class="banner__shape d-none d-lg-block">
                <img src="{{ asset('img/breadcrumb-03.jpg') }}" alt="banner-img">
                <div class="banner__video-btn">
                    <a class="banner__video-icon popup-video" href="https://www.youtube.com/watch?v=ye0LHrkwpSI"><i
                            class="fa-solid fa-play"></i></a>
                </div>
            </div>
        </section>
        <!-- banner-area-end -->
        <!-- services-area -->

        <section class="services-area pt-95 pb-90 grey-bg mt-60 fix" data-background="assets/img/shape/shape-bg-01.png">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8 col-md-8 col-12">
                        <div class="tp-section">
                            <span class="tp-section__sub-title left-line mb-20"></span>
                            <h3 class="tp-section__title mb-50">{{ __('backend.projects') }}</h3>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="tp-services d-flex align-items-center">
                            <div class="services-p"><i class="fa-regular fa-arrow-left"></i></div>
                            <div class="services-n"><i class="fa-regular fa-arrow-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="services-slider  wow fadeInUp" data-wow-delay=".2s">
                    <div class="swiper-container service-active">
                        <div class="swiper-wrapper">
                            @foreach (App\Models\Projects::all() as $project)
                                <div class="swiper-slide">
                                    @if (app()->getLocale() == 'uz')
                                        <div class="services-item mb-70">
                                            <div style="position: relative;height:300px;">
                                                <img src="{{ $project->getFirstMediaUrl() }}" alt=""
                                                    style="object-fit:cover;width:100%;position:absolute;height:100%">
                                            </div>
                                            <div class="services-item__content mt-4"
                                                style="overflow-y: auto;height: 300px;">
                                                <h4 class="services-item__tp-title mb-30">
                                                    <a href="{{ $project->link }}">{{ $project->title }}</a>
                                                </h4>
                                                <div class="text-block">
                                                    <p>{{ $project->description }}</p>
                                                </div>
                                            </div>
                                            <div class="services-item__btn mt-3">
                                                <a class="btn-hexa sky-hexa" href="{{ $project->link }}"><i></i>Read
                                                    More</a>
                                            </div>
                                        </div>
                                    @endif
                                    @if (app()->getLocale() == 'ru')
                                        <div class="services-item mb-40">
                                            <div style="position: relative;height:300px;">
                                                <img src="{{ $project->getFirstMediaUrl() }}" alt=""
                                                    style="object-fit:cover;width:100%;position:absolute;height:100%">
                                            </div>
                                            <div class="services-item__content mt-4"
                                                style="overflow-y: auto;height: 300px;">
                                                <h4 class="services-item__tp-title mb-30">
                                                    <a href="{{ $project->link }}">{{ $project->title_ru }}</a>
                                                </h4>
                                                <div class="text-block">
                                                    <p>{{ $project->description_ru }}</p>
                                                </div>
                                            </div>
                                            <div class="services-item__btn mt-3">
                                                <a class="btn-hexa sky-hexa" href="{{ $project->link }}"><i></i>Read
                                                    More</a>
                                            </div>
                                        </div>
                                    @endif
                                    @if (app()->getLocale() == 'en')
                                        <div class="services-item mb-40">
                                            <div style="position: relative;height:300px;">
                                                <img src="{{ $project->getFirstMediaUrl() }}" alt=""
                                                    style="object-fit:cover;width:100%;position:absolute;height:100%">
                                            </div>
                                            <div class="services-item__content mt-4"
                                                style="overflow-y: auto;height: 300px;">
                                                <h4 class="services-item__tp-title mb-30">
                                                    <a href="{{ $project->link }}">{{ $project->title_en }}</a>
                                                </h4>
                                                <div class="text-block">
                                                    <p>{{ $project->description_en }}</p>
                                                </div>
                                            </div>
                                            <div class="services-item__btn mt-3">
                                                <a class="btn-hexa sky-hexa" href="{{ $project->link }}"><i></i>Read
                                                    More</a>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
        <!-- services-area-end -->

        <!-- about-area -->
        <section id="tp-about-scroll" class="about-area pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-12">
                        <div class="about__thumb mb-60 wow fadeInLeft" data-wow-delay=".4s">
                            <div class="about__img">
                                <img src="{{ asset('img/banner2.jpg') }}" alt="about-bg-img">
                                <div class="about__exprience">
                                    <h3>9</h3>
                                    <i>{!! __('backend.experice') !!}</i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-12">
                        <div class="tp-about__content pt-125 ml-60 mb-50 wow fadeInRight" data-wow-delay=".4s">
                            <div class="tp-section">
                                <span class="tp-section__sub-title left-line mb-25">{{ __('backend.aboutus') }}</span>
                                <h3 class="tp-section__title tp-ab-sm-title mb-45">Doraline
                                </h3>
                                <i>
                                    {{ __('backend.infoabout') }}
                                </i>
                                <p class=" mr-20 mb-45">
                                    {{ __('backend.aboutcompany') }}
                                </p>
                            </div>
                            <div class="tp-about__info-list mb-55">
                                <ul>
                                    <li><i class="fa-solid fa-check"></i>{!! __('backend.servies') !!}</li>
                                    <li><i class="fa-solid fa-check"></i>{!! __('backend.fast') !!}</li>
                                    <li><i class="fa-solid fa-check"></i>{!! __('backend.suport') !!}</li>
                                    <li><i class="fa-solid fa-check"></i>{!! __('backend.team') !!}</li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-area-end -->

        <!-- counter-area -->
        <section class="counter-area pt-40 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <div class="counter__item blue-border mb-30 wow fadeInUp" data-wow-delay=".2s">
                            <div class="counter__icon mb-15">
                                <i></i>
                            </div>
                            <div class="counter__content">
                                <h4 class="counter__title"><span>35000+</span></h4>
                                <p>{{ __('backend.yillik') }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="counter__item pink-border mb-30 wow fadeInUp" data-wow-delay=".4s">
                            <div class="counter__icon pink-hard mb-15">
                                <i></i>
                            </div>
                            <div class="counter__content">
                                <h4 class="counter__title"><span>5000+</span></h4>
                                <p>{{ __('backend.familly') }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="counter__item sky-border mb-30 wow fadeInUp" data-wow-delay=".6s">
                            <div class="counter__icon sky-hard mb-15">
                                <i></i>
                            </div>
                            <div class="counter__content">
                                <h4 class="counter__title"><span>20000+</span></h4>
                                <p>{{ __('backend.month') }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="counter__item green-border mb-30 wow fadeInUp" data-wow-delay=".8s">
                            <div class="counter__icon green-hard mb-15">
                                <i></i>
                            </div>
                            <div class="counter__content">
                                <h4 class="counter__title"><span>35+</span></h4>
                                <p>{{ __('backend.productsData') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- counter-area-end -->

        <!-- gallery-area -->
        <section class="gallery-area grey-bg pt-120 pb-130" data-background="assets/img/shape/shape-bg-01.png">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="tp-section text-center">
                            <h3 class="tp-section__title mb-70">{{ __('backend.blog') }}</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="tp-gallery ml-15 mr-15 wow fadeInUp" data-wow-delay=".4s">
                    <div class="swiper-container gall-active">
                        <div class="swiper-wrapper">
                            @foreach (App\Models\Blog::all() as $blog)
                                @if (app()->getLocale() == 'uz')
                                    <div class="swiper-slide">
                                        <div class="tp-gallery__item p-relative mb-70">
                                            <div class="tp-gallery__img p-relative">
                                                <img src="{{ $blog->getFirstMediaUrl() }}" alt="gallery-img">
                                                <div class="tp-gallery__info">
                                                    <a class="popup-image" href="{{ $blog->getFirstMediaUrl() }}"><i
                                                            class="fa-solid fa-plus"></i></a>
                                                </div>
                                            </div>
                                            <div class="tp-gallery__content">
                                                <h4 class="tp-gallery__title"><a
                                                        href="{{ route('blog.show', $blog->id) }}">
                                                        {{ $blog->title }}
                                                    </a>
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                @if (app()->getLocale() == 'ru')
                                    <div class="swiper-slide">
                                        <div class="tp-gallery__item p-relative mb-70">
                                            <div class="tp-gallery__img p-relative">
                                                <img src="{{ $blog->getFirstMediaUrl() }}" alt="gallery-img">
                                                <div class="tp-gallery__info">
                                                    <a class="popup-image" href="{{ $blog->getFirstMediaUrl() }}"><i
                                                            class="fa-solid fa-plus"></i></a>
                                                </div>
                                            </div>
                                            <div class="tp-gallery__content">
                                                <h4 class="tp-gallery__title"><a
                                                        href="{{ route('blog.show', $blog->id) }}">
                                                        {{ $blog->title_ru }}
                                                    </a>
                                                </h4>

                                            </div>
                                        </div>
                                    </div>
                                @endif
                                @if (app()->getLocale() == 'en')
                                    <div class="swiper-slide">
                                        <div class="tp-gallery__item p-relative mb-70">
                                            <div class="tp-gallery__img p-relative">
                                                <img src="{{ $blog->getFirstMediaUrl() }}" alt="gallery-img">
                                                <div class="tp-gallery__info">
                                                    <a class="popup-image" href="{{ $blog->getFirstMediaUrl() }}"><i
                                                            class="fa-solid fa-plus"></i></a>
                                                </div>
                                            </div>
                                            <div class="tp-gallery__content">
                                                <h4 class="tp-gallery__title"><a
                                                        href="{{ route('blog.show', $blog->id) }}">
                                                        {{ $blog->title_en }}
                                                    </a>
                                                </h4>

                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row text-center">
                    <div class="col-lg-12">
                        <a class="tp-btn-second" href="{{ route('frontend.blogs') }}">{{ __('backend.explore') }}</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- gallery-area-end -->

        <!-- choose-area -->
        <section class="choose-area theme-bg pt-120 pb-130">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="tp-section text-center">
                            <h3 class="tp-section__title title-white mb-85">{{ __('backend.whyus') }}</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <div class="tp-choose__item ml-15 mb-100 wow fadeInUp" data-wow-delay=".2s">
                            <div class="tp-choose__icon mb-40">
                                <i class="flaticon-microscope"></i>
                            </div>
                            <div class="tp-choose__content">
                                <h4 class="tp-choose__title mb-20">{!! __('backend.servies') !!}</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="tp-choose__item ml-35 mb-100 wow fadeInUp" data-wow-delay=".4s">
                            <div class="tp-choose__icon pink-icon mb-40">
                                <i class="flaticon-thinking"></i>
                            </div>
                            <div class="tp-choose__content">
                                <h4 class="tp-choose__title mb-20">{!! __('backend.fast') !!}</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="tp-choose__item ml-55 mb-100 wow fadeInUp" data-wow-delay=".6s">
                            <div class="tp-choose__icon green-icon mb-40">
                                <i class="flaticon-24-hours-1"></i>
                            </div>
                            <div class="tp-choose__content">
                                <h4 class="tp-choose__title mb-20">{!! __('backend.suport') !!}</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="tp-choose__item ml-75 mb-100 wow fadeInUp" data-wow-delay=".8s">
                            <div class="tp-choose__icon sky-icon mb-40">
                                <i class="flaticon-team"></i>
                            </div>
                            <div class="tp-choose__content">
                                <h4 class="tp-choose__title mb-20">{!! __('backend.team') !!}</h4>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- choose-area-end -->

        <!-- appoinment-area -->
        <section class="appoinment-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xxl-6 col-xl-5 col-lg-12 col-md-12 p-0">
                        <div class="appoinment-thumb">
                            <img src="{{ asset('img/photos/contact_' . app()->getLocale() . '.png') }}"
                                alt="appoinment-img">
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-7 col-lg-12 col-md-12 p-0">
                        <div class="visitor-info">
                            <h4 class="appoinment-title mb-25"><i
                                    class="fa-light fa-file-signature"></i>{!! __('backend.contact') !!}
                            </h4>
                            <div class="visitor-form">
                                <form action="{{ route('admin.contact.store') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="visitor-form__input">
                                                <input type="text" name="name"
                                                    placeholder="{{ __('backend.name') }}">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="visitor-form__input">
                                                <input type="number" name="number"
                                                    placeholder="{{ __('backend.number') }}">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="visitor-form__input">
                                                <textarea placeholder="{{ __('backend.message') }}" name="description"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-12">
                                            <div class="visit-btn mt-20">
                                                <button class="tp-btn">{{ __('backend.send') }}</button>
                                            </div>
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- appoinment-area-end -->
        <!-- team-area -->
        <section class="team-area grey-bg pt-120 pb-80" data-background="assets/img/shape/shape-bg-01.png">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8 col-md-8 col-12">
                        <div class="tp-section">
                            <p></p>
                            <h3 class="tp-section__title mb-75">{{ __('backend.products') }}</h3>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="tp-team-arrow d-flex align-items-center">
                            <div class="team-p"><i class="fa-regular fa-arrow-left"></i></div>
                            <div class="team-n"><i class="fa-regular fa-arrow-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="swiper-container team-active wow fadeInUp" data-wow-delay=".3s">
                    <div class="swiper-wrapper">
                        @foreach (App\Models\Products::all() as $product)
                            @if (app()->getLocale() == 'uz')
                                <div class="swiper-slide">
                                    <div class="tp-team mb-50">
                                        <div class="tp-team__thumb fix">
                                            <a href="{{ route('frontend.products.show', $product->id) }}"><img
                                                    src="{{ $product->getFirstMediaUrl() }}" alt="team-thumb"></a>
                                        </div>
                                        <div class="tp-team__content">
                                            <h4 class="tp-team__title mb-15"><a
                                                    href="{{ route('frontend.products.show', $product->id) }}">{{ $product->title }}</a>
                                            </h4>
                                            <a href="{{ route('frontend.products.show', $product->id) }}"
                                                class="research-item__btn">{{ __('backend.explore') }}</a>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            @if (app()->getLocale() == 'ru')
                                <div class="swiper-slide">
                                    <div class="tp-team mb-50">
                                        <div class="tp-team__thumb fix">
                                            <a href="{{ route('frontend.products.show', $product->id) }}"><img
                                                    src="{{ $product->getFirstMediaUrl() }}" alt="team-thumb"></a>
                                        </div>
                                        <div class="tp-team__content">
                                            <h4 class="tp-team__title mb-15"><a
                                                    href="{{ route('frontend.products.show', $product->id) }}">{{ $product->title_ru }}</a>
                                            </h4>
                                            <a href="{{ route('frontend.products.show', $product->id) }}"
                                                class="research-item__btn">{{ __('backend.explore') }}</a>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            @if (app()->getLocale() == 'en')
                                <div class="swiper-slide">
                                    <div class="tp-team mb-50">
                                        <div class="tp-team__thumb fix">
                                            <a href="{{ route('frontend.products.show', $product->id) }}"><img
                                                    src="{{ $product->getFirstMediaUrl() }}" alt="team-thumb"></a>
                                        </div>
                                        <div class="tp-team__content">
                                            <h4 class="tp-team__title mb-15"><a
                                                    href="{{ route('frontend.products.show', $product->id) }}">{{ $product->title_en }}</a>
                                            </h4>
                                            <a href="{{ route('frontend.products.show', $product->id) }}"
                                                class="research-item__btn">{{ __('backend.explore') }}</a>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <section class="gallery-area grey-bg pt-120 pb-130" data-background="assets/img/shape/shape-bg-01.png">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="tp-section text-center">
                            <h3 class="tp-section__title mb-70">{!! __('backend.ser') !!}</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="tp-gallery ml-15 mr-15 wow fadeInUp" data-wow-delay=".4s">
                    <div class="swiper-container gall-active">
                        <div class="swiper-wrapper">
                            @foreach (App\Models\Documents::all() as $blog)
                                <div class="swiper-slide">
                                    <div class="tp-gallery__item p-relative mb-70">
                                        <div class="tp-gallery__img p-relative">
                                            <img src="{{ $blog->getFirstMediaUrl() }}" alt="gallery-img">
                                            <div class="tp-gallery__info">
                                                <a class="popup-image" href="{{ $blog->getFirstMediaUrl() }}"><i
                                                        class="fa-solid fa-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <div class="brand-area pt-130 pb-130">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12 col-md-12 col-12">
                        <center>
                            <div class="tp-section">
                                <p></p>
                                <h3 class="tp-section__title mb-75">{{ __('backend.partners') }}</h3>
                            </div>
                        </center>
                    </div>
                </div>
                <div class="swiper-container brand-active">
                    <div class="swiper-wrapper brand-items">
                        @foreach (App\Models\Partners::all() as $partner)
                            <div class="swiper-slide">
                                <a href="{{ $partner->link }}"><img src="{{ $partner->getFirstMediaUrl() }}"
                                        alt="brand" style="width: 250px;"></a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <!-- blog-area-end -->

    </main>
    {{-- <script>
        let cockie = document.cookie.split('; ');
        console.log(cockie)
    </script> --}}
@endsection
