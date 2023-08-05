<!DOCTYPE html>
<html dir="{{ LaravelLocalization::getCurrentLocaleDirection() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        جامعة مدينة السادات | رئيسية الموقع
    </title>
    {{--    <link rel="shortcut icon" href="{{asset('uploads/frontend/images/2.png')}}"/>--}}

    <!-- ------------------------ Styles ------------------------ -->
    @if (app()->getLocale() == 'ar')
        <!--bootstrap rtl-->
        <link rel="stylesheet" href="{{ asset('frontend_files/css/bootstrap.min.css') }}">

        <!--font awesome-->
        <link rel="stylesheet" href="{{ asset('frontend_files/css/all.min.css') }}">

        <!--main styles -->
        <link rel="stylesheet" href="{{ asset('frontend_files/css/main.rtl.css') }}">

        {{--<!-- Google Fonts -->--}}
        <style>
            body, h1, h2, h3, h4, h5, h6 {
                font-family: 'Cairo', sans-serif !important;
            }
        </style>
        <link href="https://fonts.googleapis.com/css?family=Cairo:400,700" rel="stylesheet">
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

        <a href="/" class="brand">
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
                    <a class="nav-link p-2 p-lg-2 active" href="/colleges">@lang('front.colleges_and_institutes')</a>
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
                                <li><a class="dropdown-item" href="#"><i class="far fa-clipboard fa-fw"></i>Student
                                        Services</a>
                                </li>
                                <li><a class="dropdown-item" href="#"><i class="far fa-clipboard fa-fw"></i>Postgraduate
                                        Services</a></li>
                                <li><a class="dropdown-item" href="#"><i class="far fa-clipboard fa-fw"></i>Staff
                                        Services</a></li>
                                <li><a class="dropdown-item" href="#"><i class="far fa-clipboard fa-fw"></i>Employee
                                        Services</a></li>
                                <li><a class="dropdown-item" href="#"><i class="far fa-clipboard fa-fw"></i>Enrollment
                                        in university cities</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Complaints and suggestions</a></li>
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




{{--------------------------Start of section 1 Landing (banners)------------------------------}}
<section class="landing d-flex justify-content-center align-items-center">
    <div class="image">
        <div class="text-center text-light">
            <h1>Colleges and Institutes</h1>
            <p class="fs-6 text-white-50 mb-5">You can know everything about Colleges and Institutes in The University
                of Sadat City here</p>
            <a href="#colleges_and_institutes" class="btn rounded-pill main-btn">Get Started</a>
        </div>
    </div>
</section>
{{--------------------------End of section 1 Landing (banners)-----  -------------------------}}



{{--------------------------Start of section 2 (Colleges and Institutes) ---------------------}}
<div id="colleges_and_institutes" class="colleges_and_institutes president_word text-center pb-5 pt-2">
    <div class="container pb-5 pt-1 text-center">
        <img class="mb-4" src="{{asset('uploads/frontend/images/12.png')}}" alt=""/>
        <h2 class="fw-bold main-title">Colleges and Institutes</h2>

        <div class="row justify-content-center">

            <div class="col-md-auto">
                <ul class="nav nav-pills mb-3 rounded-start-4 rounded-end-4 justify-content-center align-items-center"
                    id="pills-tab"
                    role="tablist">
                    <li class="nav-item border border-primary-subtle rounded-start-4" role="presentation">
                        <button class="nav-link active pe-5 ps-5 rounded-start-4" id="pills-home-tab"
                                data-bs-toggle="pill"
                                data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                aria-selected="true">Practical Colleges
                        </button>
                    </li>
                    <li class="nav-item border border-primary-subtle" role="presentation">
                        <button class="nav-link pe-5 ps-5" id="pills-profile-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                                aria-selected="false">Theoretical Colleges
                        </button>
                    </li>
                    <li class="nav-item border border-primary-subtle rounded-end-4" role="presentation">
                        <button class="nav-link pe-5 ps-5 rounded-end-4" id="pills-contact-tab"
                                data-bs-toggle="pill"
                                data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                                aria-selected="false">Research Institutes
                        </button>
                    </li>

                </ul>


                <div class="tab-content pt-5"
                     id="pills-tabContent">

                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                         aria-labelledby="pills-home-tab" tabindex="0">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                    <div class="card mb-5">
                                        <img src="{{asset('uploads/frontend/images/f_logos/c15.png')}}" alt=""/>
                                        <div class="card-body">
                                            <h4>Faculty of Pharmacy</h4>
                                        </div>
                                        <div class="info">
                                            <a href="">Visit Site</a>
                                            <i class="fas fa-long-arrow-alt-right"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                    <div class="card mb-5">
                                        <img src="{{asset('uploads/frontend/images/f_logos/c5.png')}}" alt=""/>
                                        <div class="card-body">
                                            <h4>Faculty of Pharmacy</h4>
                                        </div>
                                        <div class="info">
                                            <a href="">Visit Site</a>
                                            <i class="fas fa-long-arrow-alt-right"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                    <div class="card mb-5">
                                        <img src="{{asset('uploads/frontend/images/f_logos/c7.jpg')}}" alt=""/>
                                        <div class="card-body">
                                            <h4>Faculty of Pharmacy</h4>
                                        </div>
                                        <div class="info">
                                            <a href="">Visit Site</a>
                                            <i class="fas fa-long-arrow-alt-right"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                    <div class="card mb-5">
                                        <img src="{{asset('uploads/frontend/images/f_logos/c14.png')}}" alt=""/>
                                        <div class="card-body">
                                            <h4>Faculty of Pharmacy</h4>
                                        </div>
                                        <div class="info">
                                            <a href="">Visit Site</a>
                                            <i class="fas fa-long-arrow-alt-right"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="w-1102 tab-pane fade" id="pills-profile" role="tabpanel"
                         aria-labelledby="pills-profile-tab"
                         tabindex="0">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                    <div class="card mb-5">
                                        <img src="{{asset('uploads/frontend/images/f_logos/c15.png')}}" alt=""/>
                                        <div class="card-body">
                                            <h4>Faculty of Pharmacy</h4>
                                        </div>
                                        <div class="info">
                                            <a href="">Visit Site</a>
                                            <i class="fas fa-long-arrow-alt-right"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                    <div class="card mb-5">
                                        <img src="{{asset('uploads/frontend/images/f_logos/c5.png')}}" alt=""/>
                                        <div class="card-body">
                                            <h4>Faculty of Pharmacy</h4>
                                        </div>
                                        <div class="info">
                                            <a href="">Visit Site</a>
                                            <i class="fas fa-long-arrow-alt-right"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                    <div class="card mb-5">
                                        <img src="{{asset('uploads/frontend/images/f_logos/c7.jpg')}}" alt=""/>
                                        <div class="card-body">
                                            <h4>Faculty of Pharmacy</h4>
                                        </div>
                                        <div class="info">
                                            <a href="">Visit Site</a>
                                            <i class="fas fa-long-arrow-alt-right"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                    <div class="card mb-5">
                                        <img src="{{asset('uploads/frontend/images/f_logos/c14.png')}}" alt=""/>
                                        <div class="card-body">
                                            <h4>Faculty of Pharmacy</h4>
                                        </div>
                                        <div class="info">
                                            <a href="">Visit Site</a>
                                            <i class="fas fa-long-arrow-alt-right"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                    <div class="card mb-5">
                                        <img src="{{asset('uploads/frontend/images/f_logos/c14.png')}}" alt=""/>
                                        <div class="card-body">
                                            <h4>Faculty of Pharmacy</h4>
                                        </div>
                                        <div class="info">
                                            <a href="">Visit Site</a>
                                            <i class="fas fa-long-arrow-alt-right"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab"
                         tabindex="0">
                        <div class="container">
                            <div class="row">

                                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-5">
                                    <div class="card mb-5">
                                        <img src="{{asset('uploads/frontend/images/f_logos/c12.png')}}" alt=""/>
                                        <div class="card-body">
                                            <h4>Faculty of Pharmacy</h4>
                                        </div>
                                        <div class="info">
                                            <a href="">Visit Site</a>
                                            <i class="fas fa-long-arrow-alt-right"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-5">
                                    <div class="card mb-5">
                                        <img src="{{asset('uploads/frontend/images/f_logos/c1.png')}}" alt=""/>
                                        <div class="card-body">
                                            <h4>Faculty of Pharmacy</h4>
                                        </div>
                                        <div class="info">
                                            <a href="">Visit Site</a>
                                            <i class="fas fa-long-arrow-alt-right"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
{{--------------------------End of section 2 (Colleges and Institutes) -----------------------}}









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
