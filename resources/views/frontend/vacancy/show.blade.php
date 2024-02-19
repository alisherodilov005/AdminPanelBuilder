@extends('frontend.layouts.master')
@section('header')
    @include('frontend.layouts.header1')
@endsection
@section('content')
    <main>
        <!-- breadcrumb-area -->
        <section class="breadcrumb__area pt-100 pb-120 breadcrumb__overlay" style="background-attachment: fixed;"
            data-background="{{ $vacancy->getFirstMediaUrl() ?? '' }}">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-7 col-md-7 col-12">
                        <div class="tp-breadcrumb">
                            <h2 class="tp-breadcrumb__title">
                                {{ $vacancy->title }}
                            </h2>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-5 col-md-5 col-12">
                        <div class="tp-breadcrumb__link d-flex align-items-center">
                            <span>Yaratilgan Vaqti: <a href="blog-details.html">{{ $vacancy->created_at }}</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb-area-end -->

        <!-- postbox area start -->
        <div class="postbox__area pt-130 pb-110 wow fadeInUp" data-wow-duration=".8s" data-wow-delay=".2s">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12 col-xl-8 col-lg-7 col-md-12">
                        <div class="postbox__wrapper pr-20">
                            <article class="postbox__item format-image mb-50 transition-3">
                                <div class="postbox__thumb w-img mb-30">
                                    <a href="blog-details.html">
                                        <img src="assets/img/blog/blog-in-01.jpg" alt="">
                                    </a>
                                </div>
                                <div class="postbox__content">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="postbox__content-area mb-40">
                                                <h4 class="mb-25"><a href="blog-details.html">{{ $vacancy->title }}</a>
                                                </h4>
                                                <p>
                                                    {!! $vacancy->description !!}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <div class="postbox__comment mb-65">
                                <h3 class="postbox__comment-title">{!! __('backend.sendMessaga') !!}</h3>
                                <div class="col-lg-12 col-md-7 col-12">
                                    <div class="contactform wow fadeInRight">
                                        <div class="contactform__list mb-60">
                                            <form action="{{ route('resume.store', $vacancy->id) }}" method="post">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        @if (\Session::has('msg'))
                                                            <div class="text-success">
                                                                <ul>
                                                                    <li>{!! \Session::get('msg') !!}</li>
                                                                </ul>
                                                            </div>
                                                        @endif
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="contactform__input mb-30">
                                                            <input name="name" type="text"
                                                                placeholder="Enter your Name" name="name">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="contactform__input mb-30">
                                                            <input name="email" type="email"
                                                                placeholder="Enter your mail" name="email">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="contactform__input mb-30">
                                                            <input name="number" type="text"
                                                                placeholder="Enter your number" name="number">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-12">
                                                        <div class="contactform__input mb-30">
                                                            <textarea name="description" name="description" placeholder="Type your comment"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="contactform__input mb-30-btn">
                                                            <button type="submit"
                                                                class="tp-btn">{{ __('backend.send') }}</button>
                                                        </div>

                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- postbox area end -->

    </main>
@endsection
