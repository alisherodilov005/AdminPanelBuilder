@extends('frontend.layouts.master')
@section('header')
    @include('frontend.layouts.header1')
@endsection
@section('content')
    <main>
        <section class="breadcrumb__area pt-100 pb-120 breadcrumb__overlay"
            data-background="{{ asset('img/breadcrumb-01.jpg') }}">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-7 col-lg-12 col-md-12 col-12">
                        <div class="tp-breadcrumb">
                            <h2 class="tp-breadcrumb__title">
                                @if (app()->getLocale() == 'ru')
                                    <b>{{ __('backend.blog') }}</b>
                                @else
                                    {{ __('backend.blog') }}
                                @endif
                            </h2>
                            <p class="text-light">
                                Bu pageda doraline companiyasi tomonda domimiy yangiliklar va turi hildagi foydali
                                ma'lumotalar berib boriladi
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="team-area pt-125 pb-80">
            <div class="container">

                <div class="row">
                    @foreach (App\Models\Blog::all() as $blog)
                        @if (app()->getLocale() == 'uz')
                            <div class="col-xl-4 col-md-6">
                                <div class="tp-team mb-50 wow fadeInUp" data-wow-delay=".2s">
                                    <div class="tp-team__thumb fix">
                                        <a href="#"><img src="{{ $blog->getFirstMediaUrl() }}" alt="team-thumb"></a>
                                    </div>
                                    <div class="tp-team__content">
                                        <h4 class="tp-team__title mb-15"><a
                                                href="{{ route('blog.show', $blog->id) }}">{{ $blog->title }}</a>
                                        </h4>
                                        <p></p>
                                        <div class="tp-team__social">
                                            {!! substr($blog->description, 0, 100) !!}...
                                        </div>
                                        <a href="{{ route('frontend.products.show', $blog->id) }}"
                                            class="research-item__btn">{{ __('backend.explore') }}</a>

                                    </div>
                                </div>
                            </div>
                        @endif
                        @if (app()->getLocale() == 'ru')
                            <div class="col-xl-4 col-md-6">
                                <div class="tp-team mb-50 wow fadeInUp" data-wow-delay=".2s">
                                    <div class="tp-team__thumb fix">
                                        <a href="#"><img src="{{ $blog->getFirstMediaUrl() }}" alt="team-thumb"></a>
                                    </div>
                                    <div class="tp-team__content">
                                        <h4 class="tp-team__title mb-15"><a
                                                href="{{ route('blog.show', $blog->id) }}">{{ $blog->title_ru }}</a>
                                        </h4>
                                        <p></p>
                                        <div class="tp-team__social">
                                            {!! substr($blog->description_ru, 0, 100) !!}...
                                        </div>
                                        <a href="{{ route('frontend.products.show', $blog->id) }}"
                                            class="research-item__btn">{{ __('backend.explore') }}</a>

                                    </div>
                                </div>
                            </div>
                        @endif
                        @if (app()->getLocale() == 'en')
                            <div class="col-xl-4 col-md-6">
                                <div class="tp-team mb-50 wow fadeInUp" data-wow-delay=".2s">
                                    <div class="tp-team__thumb fix">
                                        <a href="#"><img src="{{ $blog->getFirstMediaUrl() }}" alt="team-thumb"></a>
                                    </div>
                                    <div class="tp-team__content">
                                        <h4 class="tp-team__title mb-15"><a
                                                href="{{ route('blog.show', $blog->id) }}">{{ $blog->title_en }}</a>
                                        </h4>
                                        <p></p>
                                        <div class="tp-team__social">
                                            {!! substr($blog->description_en, 0, 100) !!}...
                                        </div>
                                        <a href="{{ route('frontend.products.show', $blog->id) }}"
                                            class="research-item__btn">{{ __('backend.explore') }}</a>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach

                </div>
            </div>
        </section>
    </main>
@endsection
