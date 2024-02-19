@extends('frontend.layouts.master')
@section('header')
    @include('frontend.layouts.header1')
@endsection
@section('content')
    <main>

        <!-- breadcrumb-area -->
        <section class="breadcrumb__area pt-100 pb-120 breadcrumb__overlay"
            style="background-size: cover;background-repeat:no-repeat; background-attachment: fixed;background-position: center;background-image:url('{{ asset('img/scroll/' . rand(1, 3) . '.jpg') }}')"
            data-background="{{ asset('img/scroll/' . rand(1, 3) . '.jpg') }} }}">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-7 col-lg-12 col-md-12 col-12">
                        <div class="tp-breadcrumb">
                            <h2 class="tp-breadcrumb__title">{{ __('backend.aboutus') }}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb-area-end -->

        <!-- about-area -->
        <section class="about-area pt-130 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-4 col-12">
                        <div class="tp-about-thumb mb-60 wow fadeInLeft" data-wow-delay=".3s">
                            <div class="tp-ab-img d-flex">
                                <div class="tp-ab-main-img p-relative">
                                    <img src="{{ asset('img/about/production.jpg') }}" style="width: 100%"
                                        alt="about-thumb">
                                    <div class="about__exprience tp-ab-counter">
                                        <h3 class="counter">9</h3>
                                        <i>{!! __('backend.experice') !!}</i>
                                    </div>
                                </div>
                                <div class="tp-ab-shape d-none d-md-block d-lg-none d-xl-block">
                                    <img class="ab-shape-one " src="{{ asset('img/about/medicen.jpg') }}"
                                        style="width: 60%;" alt="about-shape">
                                    <img class="ab-shape-two " src="{{ asset('img/about/pack.jpg') }}" style="width: 60%;"
                                        alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-8 col-12">
                        <div class="about-content about-align mb-60 wow fadeInRight" data-wow-delay=".3s">
                            <div class="tp-section">
                                <h3 class="tp-section__title ab-title mb-25">{{ __('backend.aboutus') }}</h3>

                                <p class=" mr-20 mb-40">
                                    {{ __('backend.infoabout') }}
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
        <!-- nav-tabs-area -->
        <section class="nav-area tp-common-area pt-130 pb-80">
            <div class="container">
                <!-- nab-and-tabs -->
                <div class="row">
                    <div class="col-md-12">
                        <h1>{{__('backend.history')}}</h1>
                        <p style="font-size: 20px;">
                           

                           {!!__('backend.aboutdes')!!}
                        </p>
                    </div>
                </div>
                <!-- nab-and-tabs-end -->
            </div>
        </section>
        <!-- nav-tabs-area-end -->

        <!-- team-area -->

        <!-- team-area-end -->


    </main>
@endsection
