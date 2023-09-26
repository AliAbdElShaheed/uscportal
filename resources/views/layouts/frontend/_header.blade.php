<nav class="navbar navbar-expand-lg sticky-top">
    <div class="container-fluid">

        <a href="/" class="brand">

            @if(app()->getLocale() == 'ar')
                <img src="{{asset('uploads/frontend/images/f_logos/USCLogoNew.png')}}" alt="USC Logo"/>
            @else
                <img src="{{asset('uploads/frontend/images/f_logos/USCLogoEnNew.png')}}" alt="USC Logo"/>
            @endif
        </a>
        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#main"
            aria-controls="main"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <i class="fa-solid fa-bars"></i>
        </button>
        {{-- <header>
             <a href="#" class="brand">USC</a>
             <div class="menu-btn"></div>
             <div class="navigation">
                 <div class="navigation-items">
                     <a  style="font-weight:bold;" href="#">@lang('front.about_university')</a>
                     <a href="#">@lang('front.university_management')</a>
                     <a href="#">@lang('front.postgraduate_and_research')</a>
                     <a href="#">@lang('front.colleges_and_institutes')</a>
                     <a href="#">@lang('front.university_city')</a>
					    <a href="#">مراكز ووحدات</a>

                     <a href="#">@lang('front.electronic_services')</a>
                 </div>
             </div>
         </header>--}}

        <div class="collapse navbar-collapse" id="main">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link p-2" aria-current="page" style="font-weight:bold;"
                       href="{{route('front.about')}}">@lang('front.about_university')</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link p-2 p-lg-2" style="font-weight:bold;"
                       href="{{route('front.management')}}">@lang('front.university_management')</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link p-2 p-lg-2" style="font-weight:bold;"
                       href="{{route('front.postgraduate')}}">@lang('front.postgraduate_and_research')</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link p-2 p-lg-2" style="font-weight:bold;font-size: 16px;"
                       href="{{route('front.colleges')}}">@lang('front.colleges_and_institutes')</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link p-2" aria-current="page" style="font-weight:bold;"
                       href="{{route('front.istc')}}">مراكز ووحدات</a>
                </li>
                {{--Dropdown list--}}
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                       style="font-weight:bold;"
                       aria-expanded="false">
                        @lang('front.electronic_services')
                    </a>
                    {{--Start Mega Menu--}}
                    <div class="mega-menu">
                        {{--<div class="image">
                            <img class="d-none" src="{{asset('uploads/frontend/images/labtop.png')}}" alt=""/>
                        </div>--}}
                        <ul class="dropdown-menu">
                            {{--<div class="image">
                                <img src="{{asset('uploads/frontend/images/labtop.png')}}" alt=""/>
                            </div>--}}
                            <div>
                                <li><a class="dropdown-item" href="#"><i class="far fa-clipboard fa-fw"></i>حدمات الطلاب</a>
                                </li>
                                <li><a class="dropdown-item" href="#"><i class="far fa-clipboard fa-fw"></i>خدمات
                                        الدراسات العليا</a></li>
                                <li><a class="dropdown-item" href="#"><i class="far fa-clipboard fa-fw"></i>خدمات اعضاء
                                        هيئة التدريس</a></li>
                                <li><a class="dropdown-item" href="#"><i class="far fa-clipboard fa-fw"></i>خدمات
                                        الموظفين</a></li>
                                <li><a class="dropdown-item" href="#"><i class="far fa-clipboard fa-fw"></i>التقدم للمدن
                                        الجامعية</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item"
                                       href="https://www.shakwa.eg/">شكاوى و مقترحات</a></li>
                            </div>
                        </ul>
                    </div>
                    {{--End Mega Menu--}}
                </li>
            </ul>

            {{--Search Icon--}}
            <div class="search ps-3 pe-3 d-lg-block">
                <i class="fa-solid fa-magnifying-glass"></i>
            </div>

            {{--Lang btn--}}
            <div class="dropdown">
                <button class="btn btn-primary btn-sm dropdown-toggle rounded-pill" type="button"
                        data-bs-toggle="dropdown"
                        aria-expanded="false">
                    @lang('site.language')
                </button>
                <ul class="dropdown-menu">
                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                        <li>
                            <a class="dropdown-item" rel="alternate" hreflang="{{ $localeCode }}"
                               href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                {{ $properties['native'] }}
                            </a>
                        </li>
                    @endforeach
                    {{-- <li><a class="dropdown-item" href="#">العربية</a></li>
                     <li><a class="dropdown-item" href="#">English</a></li>--}}

                </ul>
            </div>
        </div>
    </div>
</nav>
