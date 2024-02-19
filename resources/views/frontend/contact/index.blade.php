@extends('frontend.layouts.master')
@section('header')
    @include('frontend.layouts.header1')
@endsection
@section('content')
    <main>

        <!-- breadcrumb-area -->
        <section class="breadcrumb__area pt-100 pb-120 breadcrumb__overlay"
            style="background-size: cover;background-repeat:no-repeat; background-attachment: fixed;"
            data-background="{{ asset('img/contact.jpg') }}">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-7 col-12">
                        <div class="tp-breadcrumb">
                            <h2 class="tp-breadcrumb__title">{!! __('backend.contactMain') !!}</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-5 col-12">
                        <div class="tp-breadcrumb__link d-flex align-items-center">
                            <span>DORALINE :2023</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb-area-end -->

        <!-- contact-area -->
        <section class="contact-area pt-130 pb-115">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-5 col-12 wow fadeInLeft" data-wow-delay=".4s">
                        <div class="tpcontact mr-60 mb-60 wow fadeInUp" data-wow-delay=".2s">
                            <div class="tpcontact__item text-center">
                                <div class="tpcontact__icon mb-20">
                                    <img src="assets/img/icon/contact-01.svg" alt="">
                                </div>
                                <div class="tpcontact__address">
                                    <h4 class="tpcontact__title mb-15">{!! __('backend.addres') !!}</h4>
                                    <span>
                                        Toshkent shahri, Yunusobod tumani, <br> Niyozbek yo`li ko'chasi, 1-uy
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="tpcontact mr-60 mb-60 wow fadeInUp" data-wow-delay=".4s">
                            <div class="tpcontact__item text-center">
                                <div class="tpcontact__icon mb-20">
                                    <img src="assets/img/icon/contact-02.svg" alt="">
                                </div>
                                <div class="tpcontact__address">
                                    <h4 class="tpcontact__title mb-15">{{ __('backend.number') }}</h4>
                                    <span><a href="tel:(+998)942117010">(+998) 94 211 70 10 </a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-7 col-12">
                        <div class="contactform wow fadeInRight" data-wow-delay=".4s">
                            <h4 class="contactform__title mb-35">{!! __('backend.sendMessaga') !!}</h4>
                            <div class="contactform__list mb-60">
                                <form action="{{ route('frontend.contact.create') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        @if (\Session::has('msg'))
                                            <span class="text-success">{{ Session::get('msg') }}</span>
                                        @endif
                                        <div class="col-lg-6">
                                            <div class="contactform__input mb-30">
                                                <input name="name" type="text" placeholder="{!! __('backend.eName') !!}">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="contactform__input mb-30">
                                                <input name="email" type="email" placeholder="{!! __('backend.eMail') !!}">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="contactform__input mb-30">
                                                <input name="number" type="text" placeholder="{!! __('backend.eNumber') !!}">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="contactform__input mb-30">
                                                <textarea name="message" placeholder="{{ __('backend.message') }}"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="contactform__input mb-30-btn">
                                                <button type="submit" class="tp-btn">{{ __('backend.send') }}</button>
                                            </div>

                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="tpcontactmap">
                                        <iframe
                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2994.372280956209!2d69.29219685120255!3d41.365995779164294!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38ae8bf803ca53ed%3A0x30f4bfaa40ffcedf!2sDoraline%20Pharmaceutical%20Company!5e0!3m2!1sru!2s!4v1645363343624!5m2!1sru!2s"
                                            loading="lazy"
                                            title="2994.372280956209!2d69.29219685120255!3d41.365995779164294!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38ae8bf803ca53ed%3A0x30f4bfaa40ffcedf!2sDoraline%20Pharmaceutical%20Company!5e0!3m2!1sru!2s!4v1645363343624!5m2!1sru!2s"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-area-end -->

    </main>
@endsection
