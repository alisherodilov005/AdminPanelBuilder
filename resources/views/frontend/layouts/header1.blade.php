<header class="d-none d-xl-block">
    <div class="header-custom" id="header-sticky">
        <div class="header-logo-box">
            <a href="/"><img
                src="{{asset('logo/logoDark.png')}}"
                alt="logo"></a>
        </div>
        <div class="header-menu-box">
            <div class="header-menu-top">
                <div class="row align-items-center">
                    <div class="col-lg-4">
                        <div class="header-top-mob">
                            <svg width="14" height="19" viewBox="0 0 14 19" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="2" cy="2" r="2" fill="#0E63FF" />
                                <circle cx="7" cy="2" r="2" fill="#0E63FF" />
                                <circle cx="12" cy="2" r="2" fill="#0E63FF" />
                                <circle cx="12" cy="7" r="2" fill="#0E63FF" />
                                <circle cx="12" cy="12" r="2" fill="#0E63FF" />
                                <circle cx="7" cy="7" r="2" fill="#0E63FF" />
                                <circle cx="7" cy="12" r="2" fill="#0E63FF" />
                                <circle cx="7" cy="17" r="2" fill="#0E63FF" />
                                <circle cx="2" cy="7" r="2" fill="#0E63FF" />
                                <circle cx="2" cy="12" r="2" fill="#0E63FF" />
                            </svg>
                            <span></span>
                            <a href="tel:+998 94 211 44 44"> (+998) 94 211 44 44 </a>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="header-time">
                            <span><i class="fa-light fa-clock-ten"></i>{!! __('backend.sek') !!}</span>

                        </div>
                    </div>
                </div>
            </div>
            <div class="header-menu-bottom">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="main-menu main-menu-second">
                            <nav id="mobile-menu">
                                <ul>
                                    <li><a href="/">{{ __('backend.home') }}</a></li>
                                    <li><a href="{{ route('frontend.products') }}">{{ __('backend.products') }}</a></li>
                                    <li class="has-dropdown"><a
                                            href="#">{{ strip_tags(__('backend.contact')) }}</a>
                                        <ul class="sub-menu">
                                            <li><a
                                                    href="{{ route('frontend.contact.index') }}">{!! __('backend.contact') !!}</a>
                                            </li>
                                            <li><a
                                                    href="{{ route('frontend.vacancy') }}">{{ __('backend.vacancy') }}</a>
                                            </li>
                                            <li><a href="{{ route('frontend.about') }}">{{ __('backend.about') }}</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="{{ route('frontend.blogs') }}">{{ __('backend.blogMenu') }}</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="header-cart-order d-flex align-items-center justify-content-end">
                            <div class="header-cart-list  d-flex align-items-center justify-content-end mr-50">
                                <!-- Example single danger button -->
                                <div class="tp-cart-icon-area">

                                    <div class="btn-group">
                                        <button type="button" class="btn btn-primary dropdown-toggle"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            @if (app()->getLocale() == 'uz')
                                                <b>Uzbek</b>
                                            @endif
                                            @if (app()->getLocale() == 'ru')
                                                <b>Русский</b>
                                            @endif
                                            @if (app()->getLocale() == 'en')
                                                <b>English</b>
                                            @endif
                                        </button>
                                        <ul class="dropdown-menu">
                                            <center>
                                                <li><a class="dropdown-item"
                                                        href="{{ route('change.lang', 'uz') }}"><b>Uzbek</b></a>
                                                </li>
                                                <li><a class="dropdown-item"
                                                        href="{{ route('change.lang', 'ru') }}"><b>Русский</b></a>
                                                </li>
                                                <li><a class="dropdown-item"
                                                        href="{{ route('change.lang', 'en') }}"><b>English</b></a>
                                                </li>
                                            </center>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header-area-end -->

<!-- tp-mobile-header-area start -->
<div id="header-mob-sticky" class="tp-mobile-header-area pt-15 pb-15 d-xl-none">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-4 col-10">
                <div class="tp-mob-logo">
                    <a href="/"><img
                            src="https://planbabyclinic.com/storage/partners/May2023/P200msUY9Q2h3CI0XmNl.png"
                            alt="logo"></a>
                </div>
            </div>
            <div class="col-md-8 col-2">
                <div class="tp-mobile-bar d-flex align-items-center justify-content-end">
                    <div class="tp-bt-btn-banner d-none d-md-block d-xl-none mr-30">
                        <a class="tp-bt-btn" href="tel:123456">
                            <svg width="14" height="19" viewBox="0 0 14 19" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="2" cy="2" r="2" fill="#0E63FF" />
                                <circle cx="7" cy="2" r="2" fill="#0E63FF" />
                                <circle cx="12" cy="2" r="2" fill="#0E63FF" />
                                <circle cx="12" cy="7" r="2" fill="#0E63FF" />
                                <circle cx="12" cy="12" r="2" fill="#0E63FF" />
                                <circle cx="7" cy="7" r="2" fill="#0E63FF" />
                                <circle cx="7" cy="12" r="2" fill="#0E63FF" />
                                <circle cx="7" cy="17" r="2" fill="#0E63FF" />
                                <circle cx="2" cy="7" r="2" fill="#0E63FF" />
                                <circle cx="2" cy="12" r="2" fill="#0E63FF" />
                            </svg><span>Help Desk :</span>+91 590 088 55
                        </a>
                    </div>
                    <button class="tp-menu-toggle"><i class="far fa-bars"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- tp-mobile-header-area end -->

<!-- sidebar-info -->
<div class="tpsideinfo tp-side-info-area">
    <button class="tpsideinfo__close"><i class="fal fa-times"></i></button>
    <div class="tpsideinfo__logo mb-40">
        <a href="index.html"><img src="https://planbabyclinic.com/storage/partners/May2023/P200msUY9Q2h3CI0XmNl.png"
                alt="logo"></a>
    </div>

    <div class="mobile-menu"></div>


    <div class="tpsideinfo__content-inputarea mb-60 d-none d-xl-block">
        <span>Get Update</span>
        <div class="tpsideinfo__content-inputarea-input">
            <form action="#">
                <input type="email" placeholder="Enter Mail">
                <button class="tpsideinfo__content-inputarea-input-btn"><i
                        class="fa-solid fa-paper-plane"></i></button>
            </form>
        </div>
    </div>
    <div class="tpsideinfo__gallery mb-35 d-none d-xl-block">
        <span>Cheack Instagram Post</span>
        <div class="tpsideinfo__gallery-item">
            <a href="assets/img/blog/blog-in-01.jpg" class="popup-image"><img src="assets/img/blog/blog-in-01.jpg"
                    alt=""></a>
            <a href="assets/img/blog/blog-in-02.jpg" class="popup-image"><img src="assets/img/blog/blog-in-02.jpg"
                    alt=""></a>
            <a href="assets/img/blog/blog-in-03.jpg" class="popup-image"><img src="assets/img/blog/blog-in-03.jpg"
                    alt=""></a>
        </div>
    </div>
    <div class="tpsideinfo__socialicon">
        <a href="#"><i class="fa-brands fa-youtube"></i></a>
        <a href="#"><i class="fa-brands fa-twitter"></i></a>
        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
        <a href="#"><i class="fa-brands fa-skype"></i></a>
    </div>
</div>
