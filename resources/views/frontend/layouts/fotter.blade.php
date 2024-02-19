<footer>
    <div class="footer-area theme-bg pt-100 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="footer-widget footer-col-1 mb-50 wow fadeInUp" data-wow-delay=".2s">
                        <h4 class="footer-widget__title mb-30">
                            <a href="/"><img
                                    src="{{asset('logo/logoWhite.png')}}"                                    alt="logo"></a>
                        </h4>
                        <p>
                            {!!__('backend.footertext')!!}
                        </p>
                        <div class="footer-widget__social">
                            <a class="tp-f-youtube" href="https://www.youtube.com/@pertinuz"><i
                                    class="fa-brands fa-youtube"></i></a>
                            <a class="tp-f-fb" href="https://www.facebook.com/doralineuzb"><i
                                    class="fa-brands fa-facebook-f"></i></a>
                            <a class="tp-f-fb" href="https://t.me/DoraLine_company"><i
                                    class="fa-brands fa-telegram"></i></a>
                            <a class="tp-f-fb" href="https://www.instagram.com/doraline_company"><i
                                    class="fa-brands fa-instagram"></i></a>

                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="footer-widget footer-col-2 mb-50 wow fadeInUp" data-wow-delay=".4s">
                        <h4 class="footer-widget__title mb-20">{!! __('backend.menuLink') !!}</h4>
                        <div class="footer-widget__links">
                            <ul>
                                <li><a href="{{route('frontend.contact.index')}}">{{strip_tags( __('backend.contact')) }}</a></li>
                                <li><a href="{{ route('frontend.products') }}">{{ __('backend.products') }}</a></li>
                                <li><a href="{{ route('frontend.vacancy') }}">{{ __('backend.vacancy') }}</a></li>
                                <li><a href="{{ route('frontend.blogs') }}">{{ __('backend.blogMenu') }}</a></li>
                                <li><a href="{{ route('frontend.about') }}">{{ __('backend.about') }}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="footer-widget footer-col-3 mb-50 wow fadeInUp" data-wow-delay=".6s">
                        <h4 class="footer-widget__title mb-20">{!!__('backend.contact')!!}</h4>
                        <div class="footer-widget__info">
                            <ul>
                                <li><a href="#">{{__('backend.doraline')}}</a></li>
                                <li>
                                   {{__('backend.infofotter')}}
                                </li>
                                <li><a href="tel:+998 94 211 44 44">(+998) 94 211 44 44 </a></li>
                                <li><a href="mailto:doraline_company@mail.ru">doraline_company@mail.ru</a></li>
                               
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
