@extends('frontend.layouts.master')
@section('header')
    @include('frontend.layouts.header1')
@endsection
@section('content')
    <section class="breadcrumb__area pt-100 pb-120 breadcrumb__overlay" style="background-attachment: fixed;" data-background="{{ asset('img/shop.png') }}"
        style="background-image: url(&quot;assets/img/banner/breadcrumb-01.jpg&quot;);">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-7 col-lg-12 col-md-12 col-12">
                    <div class="tp-breadcrumb">
                        <h2 class="tp-breadcrumb__title">Our Team- 02</h2>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-12 col-md-12 col-12">
                    <div class="tp-breadcrumb__link text-xl-end">
                        <span>Bioxlab : <a href="team-details.html"> Our Team</a></span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="team-details-area pt-130 pb-70">
        <div class="container mt-5">
            @foreach ($datas as $data)
                @if (app()->getLocale() == 'uz')
                    <div class="row mt-2">
                        <div class="col-lg-5 col-md-6">
                            <div class="tp-team-dtls__thumb mb-50">
                                <img src="{{ $data->getFirstMediaUrl() ?? '' }}" style="width: 100%;border-radius:15px;"
                                    alt="team-thumb">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="tp-team-dtls__content mt-50 mb-50">
                                <h4 class="tp-team-dtls__title mb-10"><a href="team-01.html">{{ $data->title }}</a></h4>
                                <p>
                                    {!! substr($data->description, 0, 200) !!}...
                                </p> <br>
                                <a href="{{ route('frontend.vacancy.show', $data->id) }}"
                                    class="btn btn-primary">{{ __('backend.explore') }}</a>
                            </div>
                        </div>
                    </div>
                @endif
                @if (app()->getLocale() == 'ru')
                    <div class="row mt-2">
                        <div class="col-lg-5 col-md-6">
                            <div class="tp-team-dtls__thumb mb-50">
                                <img src="{{ $data->getFirstMediaUrl() ?? '' }}" style="width: 100%;border-radius:15px;"
                                    alt="team-thumb">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="tp-team-dtls__content mt-50 mb-50">
                                <h4 class="tp-team-dtls__title mb-10"><a href="team-01.html">{{ $data->title_ru }}</a></h4>
                                <p>
                                    {!! substr($data->description_ru, 0, 200) !!}...
                                </p> <br>
                                <a href="{{ route('frontend.vacancy.show', $data->id) }}"
                                    class="btn btn-primary">{{ __('backend.explore') }}</a>
                            </div>
                        </div>
                    </div>
                @endif
                @if (app()->getLocale() == 'en')
                    <div class="row mt-2">
                        <div class="col-lg-5 col-md-6">
                            <div class="tp-team-dtls__thumb mb-50">
                                <img src="{{ $data->getFirstMediaUrl() ?? '' }}" style="width: 100%;border-radius:15px;"
                                    alt="team-thumb">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="tp-team-dtls__content mt-50 mb-50">
                                <h4 class="tp-team-dtls__title mb-10"><a href="team-01.html">{{ $data->title_en }}</a></h4>
                                <p>
                                    {!! substr($data->description_en, 0, 200) !!}...
                                </p> <br>
                                <a href="{{ route('frontend.vacancy.show', $data->id) }}"
                                    class="btn btn-primary">{{ __('backend.explore') }}</a>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </section>
@endsection
