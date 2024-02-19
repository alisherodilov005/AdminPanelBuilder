@extends('frontend.layouts.master')
@section('header')
    @include('frontend.layouts.header1')
@endsection
@section('content')
    @if (app()->getLocale() == 'uz')
        <main>
            <section class="breadcrumb__area pt-100 pb-120 breadcrumb__overlay" 
            style="background-size: cover;background-attachment: fixed;"
                data-background="{{ $blog->getFirstMediaUrl() }}">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-7 col-12">
                            <div class="tp-breadcrumb">
                                <h2 class="tp-breadcrumb__title">{{ $blog->title }}</h2>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-5 col-12">
                            <div class="tp-breadcrumb__link d-flex align-items-center">
                                <span>Doraline: <a href="blog.html">{{ $blog->created_at }}</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="postbox-area pt-120 pb-80">
                <div class="container">
                    <div class="row">
                        <div class="col-xxl-8 col-xl-8 col-lg-7 col-md-12">
                            <div class="postbox pr-20 pb-50">
                                <article class="postbox__item format-image mb-60 transition-3">

                                    <div class="postbox__content">
                                        <div class="postbox__meta mb-40">
                                            <span><i class="fa-regular fa-clock"></i>{{ $blog->created_at }}</span>

                                        </div>
                                        <h3 class="postbox__title mb-40">
                                            {{ $blog->title }}
                                        </h3>
                                        <div class="postbox__text mb-40">
                                            <p>
                                                {!! $blog->description !!}
                                            </p>
                                        </div>

                                    </div>
                                </article>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-xl-4 col-lg-5 col-md-12">
                            <div class="sidebar__wrapper pl-25 pb-50">


                                <div class="sidebar__widget mb-55">
                                    <h3 class="sidebar__widget-title mb-25">{{ __('backend.recentPost') }}</h3>
                                    <div class="sidebar__widget-content">
                                        <div class="sidebar__post rc__post">
                                            @foreach (App\Models\Blog::latest('created_at')->take(10)->get() as $blogs)
                                                @if (app()->getLocale() == 'uz')
                                                    <div class="rc__post mb-20 d-flex align-items-center">
                                                        <div class="rc__post-thumb">
                                                            <a href="{{ route('blog.show', $blogs->id) }}"><img
                                                                    src="{{ $blogs->getFirstMediaUrl() }}"
                                                                    alt="blog-sidebar" style="width: 100%;"></a>
                                                        </div>
                                                        <div class="rc__post-content">
                                                            <div class="rc__meta">
                                                                <span>{{ $blogs->created_at }}</span>
                                                            </div>
                                                            <h3 class="rc__post-title">
                                                                <a
                                                                    href="{{ route('blog.show', $blogs->id) }}">{{ $blogs->title }}</a>
                                                            </h3>
                                                        </div>
                                                    </div>
                                                @endif
                                                @if (app()->getLocale() == 'ru')
                                                    <div class="rc__post mb-20 d-flex align-items-center">
                                                        <div class="rc__post-thumb">
                                                            <a href="{{ route('blog.show', $blogs->id) }}"><img
                                                                    src="{{ $blogs->getFirstMediaUrl() }}"
                                                                    alt="blog-sidebar" style="width: 100%;"></a>
                                                        </div>
                                                        <div class="rc__post-content">
                                                            <div class="rc__meta">
                                                                <span>{{ $blogs->created_at }}</span>
                                                            </div>
                                                            <h3 class="rc__post-title">
                                                                <a
                                                                    href="{{ route('blog.show', $blogs->id) }}">{{ $blogs->title_ru }}</a>
                                                            </h3>
                                                        </div>
                                                    </div>
                                                @endif
                                                @if (app()->getLocale() == 'en')
                                                    <div class="rc__post mb-20 d-flex align-items-center">
                                                        <div class="rc__post-thumb">
                                                            <a href="{{ route('blog.show', $blogs->id) }}"><img
                                                                    src="{{ $blogs->getFirstMediaUrl() }}"
                                                                    alt="blog-sidebar" style="width: 100%;"></a>
                                                        </div>
                                                        <div class="rc__post-content">
                                                            <div class="rc__meta">
                                                                <span>{{ $blogs->created_at }}</span>
                                                            </div>
                                                            <h3 class="rc__post-title">
                                                                <a
                                                                    href="{{ route('blog.show', $blogs->id) }}">{{ $blogs->title_en }}</a>
                                                            </h3>
                                                        </div>
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    @endif
    @if (app()->getLocale() == 'ru')
        <main>
            <section class="breadcrumb__area pt-100 pb-120 breadcrumb__overlay"
            style="background-size: cover;background-attachment: fixed;"

                data-background="{{ $blog->getFirstMediaUrl() }}">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-7 col-12">
                            <div class="tp-breadcrumb">
                                <h2 class="tp-breadcrumb__title">{{ $blog->title_ru }}</h2>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-5 col-12">
                            <div class="tp-breadcrumb__link d-flex align-items-center">
                                <span>Doraline: <a href="blog.html">{{ $blog->created_at }}</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="postbox-area pt-120 pb-80">
                <div class="container">
                    <div class="row">
                        <div class="col-xxl-8 col-xl-8 col-lg-7 col-md-12">
                            <div class="postbox pr-20 pb-50">
                                <article class="postbox__item format-image mb-60 transition-3">

                                    <div class="postbox__content">
                                        <div class="postbox__meta mb-40">
                                            <span><i class="fa-regular fa-clock"></i>{{ $blog->created_at }}</span>

                                        </div>
                                        <h3 class="postbox__title mb-40">
                                            {{ $blog->title }}
                                        </h3>
                                        <div class="postbox__text mb-40">
                                            <p>
                                                {!! $blog->description_ru !!}
                                            </p>
                                        </div>

                                    </div>
                                </article>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-xl-4 col-lg-5 col-md-12">
                            <div class="sidebar__wrapper pl-25 pb-50">
                                <div class="sidebar__widget mb-55">
                                    <h3 class="sidebar__widget-title mb-25">{{ __('backend.recentPost') }}</h3>
                                    <div class="sidebar__widget-content">
                                        <div class="sidebar__post rc__post">
                                            @foreach (App\Models\Blog::latest('created_at')->take(10)->get() as $blogs)
                                                @if (app()->getLocale() == 'uz')
                                                    <div class="rc__post mb-20 d-flex align-items-center">
                                                        <div class="rc__post-thumb">
                                                            <a href="{{ route('blog.show', $blogs->id) }}"><img
                                                                    src="{{ $blogs->getFirstMediaUrl() }}"
                                                                    alt="blog-sidebar" style="width: 100%;"></a>
                                                        </div>
                                                        <div class="rc__post-content">
                                                            <div class="rc__meta">
                                                                <span>{{ $blogs->created_at }}</span>
                                                            </div>
                                                            <h3 class="rc__post-title">
                                                                <a
                                                                    href="{{ route('blog.show', $blogs->id) }}">{{ $blogs->title }}</a>
                                                            </h3>
                                                        </div>
                                                    </div>
                                                @endif
                                                @if (app()->getLocale() == 'ru')
                                                    <div class="rc__post mb-20 d-flex align-items-center">
                                                        <div class="rc__post-thumb">
                                                            <a href="{{ route('blog.show', $blogs->id) }}"><img
                                                                    src="{{ $blogs->getFirstMediaUrl() }}"
                                                                    alt="blog-sidebar" style="width: 100%;"></a>
                                                        </div>
                                                        <div class="rc__post-content">
                                                            <div class="rc__meta">
                                                                <span>{{ $blogs->created_at }}</span>
                                                            </div>
                                                            <h3 class="rc__post-title">
                                                                <a
                                                                    href="{{ route('blog.show', $blogs->id) }}">{{ $blogs->title_ru }}</a>
                                                            </h3>
                                                        </div>
                                                    </div>
                                                @endif
                                                @if (app()->getLocale() == 'en')
                                                    <div class="rc__post mb-20 d-flex align-items-center">
                                                        <div class="rc__post-thumb">
                                                            <a href="{{ route('blog.show', $blogs->id) }}"><img
                                                                    src="{{ $blogs->getFirstMediaUrl() }}"
                                                                    alt="blog-sidebar" style="width: 100%;"></a>
                                                        </div>
                                                        <div class="rc__post-content">
                                                            <div class="rc__meta">
                                                                <span>{{ $blogs->created_at }}</span>
                                                            </div>
                                                            <h3 class="rc__post-title">
                                                                <a
                                                                    href="{{ route('blog.show', $blogs->id) }}">{{ $blogs->title_en }}</a>
                                                            </h3>
                                                        </div>
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    @endif
    @if (app()->getLocale() == 'en')
        <main>
            <section class="breadcrumb__area pt-100 pb-120 breadcrumb__overlay"
            style="background-size: cover;background-attachment: fixed;"

                data-background="{{ $blog->getFirstMediaUrl() }}">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-7 col-12">
                            <div class="tp-breadcrumb">
                                <h2 class="tp-breadcrumb__title">{{ $blog->title_en }}</h2>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-5 col-12">
                            <div class="tp-breadcrumb__link d-flex align-items-center">
                                <span>Doraline: <a href="blog.html">{{ $blog->created_at }}</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="postbox-area pt-120 pb-80">
                <div class="container">
                    <div class="row">
                        <div class="col-xxl-8 col-xl-8 col-lg-7 col-md-12">
                            <div class="postbox pr-20 pb-50">
                                <article class="postbox__item format-image mb-60 transition-3">

                                    <div class="postbox__content">
                                        <div class="postbox__meta mb-40">
                                            <span><i class="fa-regular fa-clock"></i>{{ $blog->created_at }}</span>

                                        </div>
                                        <h3 class="postbox__title mb-40">
                                            {{ $blog->title_en }}
                                        </h3>
                                        <div class="postbox__text mb-40">
                                            <p>
                                                {!! $blog->description_en !!}
                                            </p>
                                        </div>

                                    </div>
                                </article>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-xl-4 col-lg-5 col-md-12">
                            <div class="sidebar__wrapper pl-25 pb-50">
                                <div class="sidebar__widget mb-55">
                                    <h3 class="sidebar__widget-title mb-25">{{ __('backend.recentPost') }}</h3>
                                    <div class="sidebar__widget-content">
                                        <div class="sidebar__post rc__post">
                                            @foreach (App\Models\Blog::latest('created_at')->take(10)->get() as $blogs)
                                                @if (app()->getLocale() == 'uz')
                                                    <div class="rc__post mb-20 d-flex align-items-center">
                                                        <div class="rc__post-thumb">
                                                            <a href="{{ route('blog.show', $blogs->id) }}"><img
                                                                    src="{{ $blogs->getFirstMediaUrl() }}"
                                                                    alt="blog-sidebar" style="width: 100%;"></a>
                                                        </div>
                                                        <div class="rc__post-content">
                                                            <div class="rc__meta">
                                                                <span>{{ $blogs->created_at->format('d-m-Y') }}</span>
                                                            </div>
                                                            <h3 class="rc__post-title">
                                                                <a
                                                                    href="{{ route('blog.show', $blogs->id) }}">{{ $blogs->title }}</a>
                                                            </h3>
                                                        </div>
                                                    </div>
                                                @endif
                                                @if (app()->getLocale() == 'ru')
                                                    <div class="rc__post mb-20 d-flex align-items-center">
                                                        <div class="rc__post-thumb">
                                                            <a href="{{ route('blog.show', $blogs->id) }}"><img
                                                                    src="{{ $blogs->getFirstMediaUrl() }}"
                                                                    alt="blog-sidebar" style="width: 100%;"></a>
                                                        </div>
                                                        <div class="rc__post-content">
                                                            <div class="rc__meta">
                                                                <span>{{ $blogs->created_at->format('d-m-Y') }}</span>
                                                            </div>
                                                            <h3 class="rc__post-title">
                                                                <a
                                                                    href="{{ route('blog.show', $blogs->id) }}">{{ $blogs->title_ru }}</a>
                                                            </h3>
                                                        </div>
                                                    </div>
                                                @endif
                                                @if (app()->getLocale() == 'en')
                                                    <div class="rc__post mb-20 d-flex align-items-center">
                                                        <div class="rc__post-thumb">
                                                            <a href="{{ route('blog.show', $blogs->id) }}"><img
                                                                    src="{{ $blogs->getFirstMediaUrl() }}"
                                                                    alt="blog-sidebar" style="width: 100%;"></a>
                                                        </div>
                                                        <div class="rc__post-content">
                                                            <div class="rc__meta">
                                                                <span>{{ $blogs->created_at->format('d-m-Y') }}</span>
                                                            </div>
                                                            <h3 class="rc__post-title">
                                                                <a
                                                                    href="{{ route('blog.show', $blogs->id) }}">{{ $blogs->title_en }}</a>
                                                            </h3>
                                                        </div>
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    @endif
@endsection
