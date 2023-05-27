<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        جامعة مدينة السادات | رئيسية الموقع
    </title>
    {{--    <link rel="shortcut icon" href="{{asset('uploads/frontend/images/2.png')}}"/>--}}

    <!-- ------------------------ Styles ------------------------ -->
    @if (app()->getLocale() == 'ar')
        {{--        <link rel="stylesheet" href="{{ asset('dashboard_files/css/font-awesome-rtl.min.css') }}">--}}
        {{--        <link rel="stylesheet" href="{{ asset('dashboard_files/css/AdminLTE-rtl.min.css') }}">--}}
        {{--        <link href="https://fonts.googleapis.com/css?family=Cairo:400,700" rel="stylesheet">--}}
        {{--        <link rel="stylesheet" href="{{ asset('dashboard_files/css/bootstrap-rtl.min.css') }}">--}}
        {{--        <link rel="stylesheet" href="{{ asset('dashboard_files/css/rtl.css') }}">--}}

        {{--        <style>--}}
        {{--            body, h1, h2, h3, h4, h5, h6 {--}}
        {{--                font-family: 'Cairo', sans-serif !important;--}}
        {{--            }--}}
        {{--        </style>--}}
    @else
        <!--bootstrap-->
        <link rel="stylesheet" href="{{ asset('frontend_files/css/bootstrap.min.css') }}">

        <!--font awesome-->
        <link rel="stylesheet" href="{{ asset('frontend_files/css/all.min.css') }}">

        <!--main styles -->
        <link rel="stylesheet" href="{{ asset('frontend_files/css/main.css') }}">

        {{--<!-- Google Fonts -->--}}
        <link rel="preconnect" href="https://fonts.googleapis.com"/>
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
        <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;700&display=swap" rel="stylesheet"/>
    @endif

</head>
<body>
{{--------------------------Start of nav bar--------------------------------------------------}}

<nav class="navbar navbar-expand-lg sticky-top">
    <div class="container-fluid">

        <a href="#" class="brand">
            <img src="{{asset('uploads/frontend/images/logo3.png')}}" alt="USC Logo"/>
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
             <a href="#" class="brand">Travel</a>
             <div class="menu-btn"></div>
             <div class="navigation">
                 <div class="navigation-items">
                     <a href="#">@lang('front.about_university')</a>
                     <a href="#">@lang('front.university_management')</a>
                     <a href="#">@lang('front.postgraduate_and_research')</a>
                     <a href="#">@lang('front.colleges_and_institutes')</a>
                     <a href="#">@lang('front.university_city')</a>
                     <a href="#">@lang('front.electronic_services')</a>
                 </div>
             </div>
         </header>--}}

        <div class="collapse navbar-collapse" id="main">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link p-2" aria-current="page"
                       href="/about">@lang('front.about_university')</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link p-2 p-lg-2" href="/management">@lang('front.university_management')</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link p-2 p-lg-2" href="#">@lang('front.postgraduate_and_research')</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link p-2 p-lg-2" href="#">@lang('front.colleges_and_institutes')</a>
                </li>
                {{--Dropdown list--}}
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
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
                                <li><a class="dropdown-item" href="#"><i class="far fa-clipboard fa-fw"></i>Action</a>
                                </li>
                                <li><a class="dropdown-item" href="#"><i class="far fa-clipboard fa-fw"></i>Another
                                        action</a></li>
                                <li><a class="dropdown-item" href="#"><i class="far fa-clipboard fa-fw"></i>Another
                                        action</a></li>
                                <li><a class="dropdown-item" href="#"><i class="far fa-clipboard fa-fw"></i>Another
                                        action</a></li>
                                <li><a class="dropdown-item" href="#"><i class="far fa-clipboard fa-fw"></i>Another
                                        action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
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
                    Language
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">العربية</a></li>
                    <li><a class="dropdown-item" href="#">English</a></li>

                </ul>
            </div>
        </div>
    </div>
</nav>

{{--------------------------End of nav bar----------------------------------------------------}}




{{--------------------------Start of section 1 Landing (video slides)-------------------------}}

<section class="home">
    <video class="video-slide active" src="{{asset('uploads/frontend/videos/USCVideoBanner.mp4')}}" autoplay muted
           loop></video>
    <video class="video-slide" src="{{asset('uploads/frontend/videos/2.mp4')}}" autoplay muted loop></video>
    <video class="video-slide" src="{{asset('uploads/frontend/videos/3.mp4')}}" autoplay muted loop></video>
    <video class="video-slide" src="{{asset('uploads/frontend/videos/2.mp4')}}" autoplay muted loop></video>

    <div class="content active">
        <h1>@lang('university of sadat city').<br><span>USC</span></h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
            ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
            nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
            anim id est laborum.</p>
        <a href="#">Read More</a>
    </div>
    <div class="content">
        <h1>@lang('University President\'s speech').<br><span>@lang('DR / Shaden Moaawia')</span></h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
            ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
            nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
            anim id est laborum.</p>
        <a href="#">Read More</a>
    </div>
    <div class="content">
        <h1>@lang('university of sadat city').<br><span>USC</span></h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
            ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
            nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
            anim id est laborum.</p>
        <a href="#">Read More</a>
    </div>
    <div class="content">
        <h1>@lang('university of sadat city').<br><span>USC</span></h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
            ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
            nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
            anim id est laborum.</p>
        <a href="#">Read More</a>
    </div>
    <div class="content">
        <h1>@lang('university of sadat city').<br><span>USC</span></h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
            ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
            nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
            anim id est laborum.</p>
        <a href="#">Read More</a>
    </div>
    <div class="media-icons">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
    </div>
    <div class="slider-navigation">
        <div class="nav-btn active"></div>
        <div class="nav-btn"></div>
        <div class="nav-btn"></div>
        <div class="nav-btn"></div>

    </div>
</section>

{{--------------------------End of section 1 Landing (video slides)  -------------------------}}

{{--------------------------Start of section 2 (News) ----------------------------------------}}

<div class="important_news text-center pb-5 pt-2">
    <div class="container pb-5 pt-1">
        <img class="mb-4" src="{{asset('uploads/frontend/images/12.png')}}" alt=""/>
        <h2 class="fw-bold main-title">important news</h2>
        <p class="text-black-50 mb-5">
            Donec rutrum congue leo eget malesuada. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.
            Pellentesque in ipsum id orci porta dapibus. Proin eget tortor risus. Donec sollicitudin molestie malesuada.
        </p>
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="box bg-white">
                    <img class="img-fluid" src="{{asset('uploads/frontend/images/inews1.jpeg')}}" alt=""/>
                    <h4 class="p-3 text-light">Luke Skywalker</h4>
                    <blockquote class="text-black-50 p-3">
                        “I don't understand how we got by those troops. I thought we were dead.“
                    </blockquote>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="box bg-white">
                    <img class="img-fluid" src="{{asset('uploads/frontend/images/inews2.jpg')}}" alt=""/>
                    <h4 class="p-3 text-light">Luke Skywalker</h4>
                    <blockquote class="text-black-50 p-3">
                        “I don't understand how we got by those troops. I thought we were dead.“
                    </blockquote>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="box bg-white">
                    <img class="img-fluid" src="{{asset('uploads/frontend/images/inews3.jpg')}}" alt=""/>
                    <h4 class="p-3 text-light">Luke Skywalker</h4>
                    <blockquote class="text-black-50 p-3">
                        “I don't understand how we got by those troops. I thought we were dead.“
                    </blockquote>
                </div>
            </div>

        </div>

        <div class="d-flex justify-content-center mt-5">
            <a class="btn rounded-pill main-btn-dark text-uppercase" href="#">More News</a>
        </div>
    </div>
</div>


{{--------------------------End of section 2 (News) ------------------------------------------}}



{{--------------------------Start of section 3 (Latest News) ---------------------------------}}

<div class="latest_news" id="latest_news">
    <h2 class="main-title">Latest News</h2>

    <div class="container">
        <div class="row">

            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card mb-5">
                    <img src="{{asset('uploads/frontend/images/101.jpg')}}" alt=""/>
                    <div class="card-body">
                        <h3>Test Title</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reprehenderit</p>
                    </div>
                    <div class="info">
                        <a href="">Read More</a>
                        <i class="fas fa-long-arrow-alt-right"></i>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card mb-5">
                    <img src="{{asset('uploads/frontend/images/103.jpg')}}" alt=""/>
                    <div class="card-body">
                        <h3>Test Title</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reprehenderit</p>
                    </div>
                    <div class="info">
                        <a href="">Read More</a>
                        <i class="fas fa-long-arrow-alt-right"></i>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card mb-5">
                    <img src="{{asset('uploads/frontend/images/108.jpg')}}" alt=""/>
                    <div class="card-body">
                        <h3>Test Title</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reprehenderit</p>
                    </div>
                    <div class="info">
                        <a href="">Read More</a>
                        <i class="fas fa-long-arrow-alt-right"></i>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card mb-5">
                    <img src="{{asset('uploads/frontend/images/120.jpg')}}" alt=""/>
                    <div class="card-body">
                        <h3>Test Title</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reprehenderit</p>
                    </div>
                    <div class="info">
                        <a href="">Read More</a>
                        <i class="fas fa-long-arrow-alt-right"></i>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card mb-5">
                    <img src="{{asset('uploads/frontend/images/106.jpg')}}" alt=""/>
                    <div class="card-body">
                        <h3>Test Title</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reprehenderit</p>
                    </div>
                    <div class="info">
                        <a href="">Read More</a>
                        <i class="fas fa-long-arrow-alt-right"></i>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card mb-5">
                    <img src="{{asset('uploads/frontend/images/130.jpg')}}" alt=""/>
                    <div class="card-body">
                        <h3>Test Title</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reprehenderit</p>
                    </div>
                    <div class="info">
                        <a href="">Read More</a>
                        <i class="fas fa-long-arrow-alt-right"></i>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card mb-5">
                    <img src="{{asset('uploads/frontend/images/140.jpg')}}" alt=""/>
                    <div class="card-body">
                        <h3>Test Title</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reprehenderit</p>
                    </div>
                    <div class="info">
                        <a href="">Read More</a>
                        <i class="fas fa-long-arrow-alt-right"></i>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card mb-5">
                    <img src="{{asset('uploads/frontend/images/150.jpg')}}" alt=""/>
                    <div class="card-body">
                        <h3>Test Title</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reprehenderit</p>
                    </div>
                    <div class="info">
                        <a href="">Read More</a>
                        <i class="fas fa-long-arrow-alt-right"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-center mt-5">
            <a class="btn rounded-pill main-btn-dark text-uppercase" href="#">More News</a>
        </div>

    </div>
</div>

{{--------------------------End of section 3 (Latest News) -----------------------------------}}

<div class="spikes"></div>

{{--------------------------End of section 4 (Statistics) -----------------------------------}}

<div class="stats" id="stats">
    <h2>Our Statistics</h2>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-2 pb-5">
                <div class="box">
                    <i class="fa-solid fa-users fa-2xl"></i>
                    <span class="number" data-goal="3016">2000</span>
                    <span class="text">Employees</span>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-2 pb-5">
                <div class="box">
                    <i class="fa-solid fa-building-columns fa-2x fa-fw"></i>
                    <span class="number" data-goal="11">0</span>
                    <span class="text">Colleges</span>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-2 pb-5">
                <div class="box">
                    <i class="fas fa-pen-nib fa-2xl"></i>
                    <span class="number" data-goal="1486">500</span>
                    <span class="text">Staff</span>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-2 pb-5">
                <div class="box">
                    <i class="fa-solid fa-graduation-cap fa-2xl"></i>
                    <span class="number" data-goal="7835">6500</span>
                    <span class="text">Postgraduate</span>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-2 pb-5">
                <div class="box">
                    <i class="fa-solid fa-user-graduate fa-2xl"></i>
                    <span class="number" data-goal="25684">24000</span>
                    <span class="text">Students</span>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-2 pb-5">
                <div class="box">
                    <i class="fa-solid fa-sliders fa-2xl"></i>
                    <span class="number" data-goal="312">0</span>
                    <span class="text">Study Programs</span>
                </div>
            </div>
        </div>
    </div>
</div>


{{--------------------------End of section 4 (Statistics) -----------------------------------}}




{{--------------------------Start of section 5 (Events) -------------------------------------}}

<div class="events" id="events">
    <h2 class="fw-bold main-title">Top Events</h2>
    <div class="container">
        <div class="row border">
            <div class="col-lg-4 col-md-4">
                <div class="list w-100 bg-white">
                    <div class="name">
                        Top Events
                        <i class="fas fa-random"></i>
                    </div>
                    <ul>
                        <li class="py-2 px-4 border-top border-light-subtle" role="button" tabindex="0">How To Create
                            Sub
                            Domain
                            <span>Jan 17, 2022 at 05:18 PM</span>
                        </li>
                        <li class="py-2 px-4 border-top border-light-subtle" role="button" tabindex="0">How To Create
                            Sub
                            Domain
                            <span>Jan 17, 2022 at 05:18 PM</span>
                        </li>
                        <li class="py-2 px-4 border-top border-light-subtle" role="button" tabindex="0">How To Create
                            Sub
                            Domain
                            <span>Jan 17, 2022 at 05:18 PM</span>
                        </li>
                        <li class="py-2 px-4 border-top border-light-subtle" role="button" tabindex="0">Playing With The
                            DNS
                            <span>Jan 17, 2022 at 03:18 PM</span>
                        </li>
                        <li class="py-2 px-4 border-top border-light-subtle" role="button" tabindex="0">Everything About
                            The
                            Virtual Hosts
                            <span>Jan 17, 2022 at 05:25 PM</span></li>
                        <li class="py-2 px-4 border-top border-light-subtle" role="button" tabindex="0">How To Monitor
                            Your
                            Website
                            <span>Jan 17, 2022 at 04:16 PM</span>
                        </li>
                        <li class="py-2 px-4 border-top border-light-subtle" role="button" tabindex="0">Uncharted
                            Beating The
                            Last Boss
                            <span>Jan 17, 2022 at 07:48 PM</span></li>
                        <li class="py-2 px-4 border-top border-light-subtle" role="button" tabindex="0">Ys Oath In
                            Felghana
                            Overview
                            <span>Jan 17, 2022 at 03:12 PM</span>
                        </li>
                        <li class="py-2 px-4 border-top border-light-subtle" role="button" tabindex="0">Ys Series All
                            Games
                            Ending
                            <span>Jan 17, 2022 at 08:10 AM</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class=" col-lg-8 col-md-8 p-0 m-0">
                <div class="preview h-100">
                    <img class="w-100 h-75" src="{{asset('uploads/frontend/images/event.jpg')}}" alt=""/>
                    <div class="info d-inline-flex justify-content-between">
                        <div class="justify-content-center"> Everything About The That Event</div>

                        {{--
                        <div class="info bnt btn-primary d-inline-block border spinner-border-sm">
                            <a href="">Read More <i class="fas fa-long-arrow-alt-right"></i></a>

                        </div>
                        --}}
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

{{--------------------------End of section 5 (Events) ---------------------------------------}}


<div class="spikes"></div>

{{--------------------------Start of section 6 (Upcoming Events) ----------------------------}}

<div class="u_events" id="u_events">
    <div class="dots dots-up"></div>
    <h2 class="main-title">Upcoming Events</h2>
    <div class="container">
        <img src="{{asset('uploads//frontend/images/upcoming-events.png')}}" alt=""/>
        <div class="info">
            <div class="time">
                <div class="unit">
                    <span class="days">15</span>
                    <span>Days</span>
                </div>
                <div class="unit">
                    <span class="hours">08</span>
                    <span>Hours</span>
                </div>
                <div class="unit">
                    <span class="minutes">45</span>
                    <span>Minutes</span>
                </div>
                <div class="unit">
                    <span class="seconds">55</span>
                    <span>Seconds</span>
                </div>
            </div>
            <h2 class="title">Tech Masters Event 2021</h2>
            <p class="description">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Et vero tenetur doloremque iusto ut adipisci
                quam
                ratione aliquam excepturi nulla in harum, veritatis porro
            </p>
        </div>
        <div class="subscribe">
            <form action="">
                <input type="email" placeholder="Enter Your Email"/>
                <input type="submit" value="Subscribe"/>
            </form>
        </div>
    </div>
</div>


{{--------------------------End of section 6 (Upcoming Events) ------------------------------}}





{{--------------------------Start of section 7 (Mobile Apps) --------------------------------}}

<div class="design">
    {{--    <h2>Our Electronic & Application Services</h2>--}}
    <div class="image d-none d-md-block">
        <img src="{{asset('uploads/frontend/images/mobile2.png')}}" alt="Mobile"/>
    </div>
    <div class="text">
        <h2>USC Apps</h2>
        <ul>
            <li>USC Portal Application</li>
            <li>USC HR New System</li>
            <li>ELZAHRAA for Student Cities</li>
            <li>ABN ELHITHAM for Education & Student affairs</li>
        </ul>
    </div>
</div>


{{--------------------------End of section 7 (Mobile Apps) ----------------------------------}}




{{-----------------------------Start of Footer ----------------------------------------------}}
<div class="footer pt-5 text-white-50 text-center text-md-start">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="info mb-5">
                    <img src="{{asset('uploads/frontend/images/logo3.png')}}" alt="USC Logo" class="w-50"/>
                    <ul class="d-flex my-3 list-unstyled gap-3 justify-content-sm-center justify-content-md-start">
                        <li>
                            <a class="d-block text-light" href="#"
                            ><i class="fa-brands fa-facebook fa-lg facebook rounded-circle p-2"></i
                                ></a>
                        </li>
                        <li>
                            <a class="d-block text-light" href="#"
                            ><i class="fa-brands fa-twitter fa-lg twitter rounded-circle p-2"></i
                                ></a>
                        </li>
                        <li>
                            <a class="d-block text-light" href="#"
                            ><i class="fa-brands fa-linkedin fa-lg linkedin rounded-circle p-2"></i
                                ></a>
                        </li>
                        <li>
                            <a class="d-block text-light" href="#"
                            ><i class="fa-brands fa-instagram fa-lg instagram rounded-circle p-2"></i
                                ></a>
                        </li>

                        <li>
                            <a class="d-block text-light" href="#"
                            ><i class="fa-brands fa-youtube fa-lg youtube rounded-circle p-2"></i
                                ></a>
                        </li>
                    </ul>
                    <p class="lh-lg mt-2 mb-5">
                        Get in touch with us via email or phone.<br>
                        We are waiting for your call or message
                    </p>
                    <a class="btn rounded-pill main-btn w-75" href="#">Dean@usc.edu.eg</a>

                </div>
            </div>
            <div class="col-md-6 col-lg-2">
                <div class="links">
                    <h5 class="text-light">Links</h5>
                    <ul class="list-unstyled lh-lg">
                        <li><a href="#">@lang('front.about_university')</a></li>
                        <li><a href="#">@lang('Management')</a></li>
                        <li><a href="#">@lang('PGraduate_and_Research')</a></li>
                        <li><a href="#">@lang('front.colleges_and_institutes')</a></li>
                        <li><a href="#">@lang('front.electronic_services')</a></li>
                        <li><a href="#">@lang('Terms and Condition')</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-lg-2">
                <h5 class="text-light mb-3">Contact Us</h5>
                <div class="line">
                    <i class="fas fa-map-marker-alt fa-fw"></i>
                    <div class="info">Sadat University, Abdel Moneim Riad St, Sadat City, Egypt</div>
                </div>
                <div class="line">
                    <i class="far fa-clock fa-fw"></i>
                    <div class="info">Business Hours: From 09:00 To 17:00</div>
                </div>
                <div class="line">
                    <i class="fas fa-phone-volume fa-fw"></i>
                    <div class="info">
                        <span>+2048 2676986</span>
                        <span>+2048 2676987</span>
                    </div>
                </div>

            </div>
            <div class="col-md-6 col-lg-4">
                <div class="map justify-content-center">
                    <h5 class="text-light mb-3">Our Location</h5>
                    <div class="justify-content-center">
                        <img src="{{asset('uploads/frontend/images/map.png')}}" alt="USC map"
                             class="w-75"/>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        Created By <span>USC Portal Team</span> &copy; 2023 - <span>Sadat City University</span>
    </div>
</div>
{{--------------------------   End of Footer ------------------------------------------------}}



{{--------------------------Start of JS-----------------------}}
<!--jquery-->
<script src="{{ asset('frontend_files/js/jquery-3.4.0.min.js') }}"></script>

<!--bootstrap-->
<script src="{{ asset('frontend_files/js/bootstrap.bundle.min.js') }}"></script>

<!--Font Awesome-->
<script src="{{ asset('frontend_files/js/all.min.js') }}"></script>

<!--main scripts-->
<script src="{{ asset('frontend_files/js/main.js') }}"></script>

{{--custom js--}}


<script type="text/javascript">
    //Javacript for responsive navigation menu
    /*    const menuBtn = document.querySelector(".menu-btn");
            const navigation = document.querySelector(".navigation");

            menuBtn.addEventListener("click", () => {
                menuBtn.classList.toggle("active");
                navigation.classList.toggle("active");
        });*/

    //Javacript for video slider navigation
    const btns = document.querySelectorAll(".nav-btn");
    const slides = document.querySelectorAll(".video-slide");
    const contents = document.querySelectorAll(".content");

    var sliderNav = function (manual) {
        btns.forEach((btn) => {
            btn.classList.remove("active");
        });

        slides.forEach((slide) => {
            slide.classList.remove("active");
        });

        contents.forEach((content) => {
            content.classList.remove("active");
        });

        btns[manual].classList.add("active");
        slides[manual].classList.add("active");
        contents[manual].classList.add("active");
    }

    btns.forEach((btn, i) => {
        btn.addEventListener("click", () => {
            sliderNav(i);
        });
    });
</script>


{{--------------------------End of JS-----------------------}}

</body>
</html>
