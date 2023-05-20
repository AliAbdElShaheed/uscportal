<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USC</title>

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
{{--------------------------Start of nav bar-----------------------}}

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
                       href="#">@lang('front.about_university')</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link p-2 p-lg-2" href="#">@lang('front.university_management')</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link p-2 p-lg-2" href="#">@lang('front.postgraduate_and_research')</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link p-2 p-lg-2" href="#">@lang('front.colleges_and_institutes')</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link p-2 p-lg-2" href="#">@lang('front.electronic_services')</a>
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

{{--------------------------End of nav bar-----------------------}}




{{--------------------------Start of section 1 Landing (video slides)-----------------------}}

<section class="home">
    <video class="video-slide active" src="{{asset('uploads/frontend/videos/1.mp4')}}" autoplay muted loop></video>
    <video class="video-slide" src="{{asset('uploads/frontend/videos/2.mp4')}}" autoplay muted loop></video>
    <video class="video-slide" src="{{asset('uploads/frontend/videos/3.mp4')}}" autoplay muted loop></video>
    <video class="video-slide" src="4.mp4" autoplay muted loop></video>

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

{{--------------------------End of section 1 Landing (video slides)  -----------------------}}

{{--------------------------Start of section 2 News ----------------------------------------}}

<section class="news">

</section>

{{--------------------------End of section 2 News ------------------------------------------}}





{{--------------------------Start of Footer ------------------------------------}}
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
{{--------------------------End of Footer ------------------------------------}}



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
