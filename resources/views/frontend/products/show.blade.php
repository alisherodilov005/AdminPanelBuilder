@extends('frontend.layouts.master')
@section('header')
    @include('frontend.layouts.header1')
@endsection
@section('content')
    @if (app()->getLocale() == 'uz')
        <main>
            <!-- breadcrumb-area -->
            <section class="breadcrumb__area breadcrumb__overlay"
                style="background-size: contain;background-repeat:no-repeat; background-attachment: fixed;background-position: center;background-image:url('{{ $product->getFirstMediaUrl() }}')"
                data-background="{{ $product->getFirstMediaUrl() ?? '' }}">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-7 col-lg-12 col-md-12 col-12">
                            <div class="tp-breadcrumb">
                                <h2 class="tp-breadcrumb__title">{{ $product->title }}</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- breadcrumb-area-end -->
            <!-- shope-details-area -->
            <section class="shop-area pt-120 pb-70">
                <div class="container">
                    <div class="shop-left-right ml-130 mr-130">
                        <div class="row">

                            <div class="col-lg-12 col-md-12">
                                <div class="product mb-40 ml-20 wow fadeInRighRight" data-wow-delay=".4s">
                                    <div class="product__details-content mb-40">
                                        <h5 class="product-dtitle mb-20">{{ $product->title }}</h5>
                                        <p>
                                            {!! $product->description !!}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- shope-details-area-end -->
        </main>
    @endif
    @if (app()->getLocale() == 'ru')
        <main>
            <!-- breadcrumb-area -->
            <section class="breadcrumb__area breadcrumb__overlay"
                style="background-size: contain;background-repeat:no-repeat; background-attachment: fixed;background-position: center;background-image:url('{{ $product->getFirstMediaUrl() }}')"
                data-background="{{ $product->getFirstMediaUrl() ?? '' }}">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-7 col-lg-12 col-md-12 col-12">
                            <div class="tp-breadcrumb">
                                <h2 class="tp-breadcrumb__title">{{ $product->title_ru }}</h2>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
            <!-- breadcrumb-area-end -->
            <!-- shope-details-area -->
            <section class="shop-area pt-120 pb-70">
                <div class="container">
                    <div class="shop-left-right ml-130 mr-130">
                        <div class="row">

                            <div class="col-lg-12 col-md-12">
                                <div class="product mb-40 ml-20 wow fadeInRighRight" data-wow-delay=".4s">
                                    <div class="product__details-content mb-40">
                                        <h5 class="product-dtitle mb-20">{{ $product->title_ru }}</h5>
                                        <p>
                                            {!! $product->description_ru !!}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- shope-details-area-end -->
        </main>
    @endif
    @if (app()->getLocale() == 'en')
        <main>
            <!-- breadcrumb-area -->
            <section class="breadcrumb__area breadcrumb__overlay"
                style="background-size: contain;background-repeat:no-repeat; background-attachment: fixed;background-position: center;background-image:url('{{ $product->getFirstMediaUrl() }}')"
                data-background="{{ $product->getFirstMediaUrl() ?? '' }}">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-7 col-lg-12 col-md-12 col-12">
                            <div class="tp-breadcrumb">
                                <h2 class="tp-breadcrumb__title">{{ $product->title_en }}</h2>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
            <!-- breadcrumb-area-end -->
            <!-- shope-details-area -->
            <section class="shop-area pt-120 pb-70">
                <div class="container">
                    <div class="shop-left-right ml-130 mr-130">
                        <div class="row">

                            <div class="col-lg-12 col-md-12">
                                <div class="product mb-40 ml-20 wow fadeInRighRight" data-wow-delay=".4s">
                                    <div class="product__details-content mb-40">
                                        <h5 class="product-dtitle mb-20">{{ $product->title_en }}</h5>
                                        <p>
                                            {!! $product->description_en !!}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- shope-details-area-end -->
        </main>
    @endif
@endsection
