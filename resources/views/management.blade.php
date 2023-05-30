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
                    <a class="nav-link p-2 p-lg-2 active" href="/management">@lang('front.university_management')</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link p-2 p-lg-2" href="#">@lang('front.postgraduate_and_research')</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link p-2 p-lg-2" href="/colleges">@lang('front.colleges_and_institutes')</a>
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




{{--------------------------Start of section 1 Landing (banners)------------------------------}}
<section class="landing d-flex justify-content-center align-items-center">
    <div class="image">
        <div class="text-center text-light">
            <h1>University Administration</h1>
            <p class="fs-6 text-white-50 mb-5">You can know everything about our university here</p>
            <a href="#university_leaders" class="btn rounded-pill main-btn">Get Started</a>
        </div>
    </div>
</section>
{{--------------------------End of section 1 Landing (banners)-----  -------------------------}}



{{--------------------------Start of section 2 (University Leaders) --------------------------}}
<div id="university_leaders" class="university_leaders text-center pb-5 pt-2">
    <div class="container pb-5 pt-1">
        <img class="mb-4" src="{{asset('uploads/frontend/images/12.png')}}" alt=""/>
        <h2 class="fw-bold main-title">University Leaders</h2>

        <div class="row justify-content-md-center">
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="leader box">
                    <div class="data">
                        <img class="img-fluid" src="{{asset('uploads/frontend/images/leaders/rector1.png')}}" alt=""/>
                        <div class="social">
                            <a href="#">
                                <i class="facebook fab fa-facebook-f"></i>
                            </a>
                            <a href="#">
                                <i class="twitter fab fa-twitter"></i>
                            </a>
                            <a href="#">
                                <i class="linkedin fab fa-linkedin-in"></i>
                            </a>
                            <a href="#">
                                <i class="fa-solid fa-phone-volume"></i>
                            </a>
                        </div>
                    </div>
                    <div class="info">
                        <h4 class="pt-2 fw-bold">DR Shaden Moawia</h4>
                        <p class="pb-2 fw-bold">Rector</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-md-center">
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="leader box">
                    <div class="data">
                        <img class="img-fluid" src="{{asset('uploads/frontend/images/leaders/vice11.png')}}" alt=""/>
                        <div class="social">
                            <a href="#">
                                <i class="facebook fab fa-facebook-f"></i>
                            </a>
                            <a href="#">
                                <i class="twitter fab fa-twitter"></i>
                            </a>
                            <a href="#">
                                <i class="linkedin fab fa-linkedin-in"></i>
                            </a>
                            <a href="#">
                                <i class="fa-solid fa-phone-volume"></i>
                            </a>
                        </div>
                    </div>
                    <div class="info">
                        <h4 class="pt-2">DR Sherif</h4>
                        <p class="pb-2 fw-bold"><span>VICE RECTOR FOR EDUCATIONAL ACADEMIC AFFAIRS</span></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="leader box">
                    <div class="data">
                        <img class="img-fluid" src="{{asset('uploads/frontend/images/leaders/vice22.png')}}" alt=""/>
                        <div class="social">
                            <a href="#">
                                <i class="facebook fab fa-facebook-f"></i>
                            </a>
                            <a href="#">
                                <i class="twitter fab fa-twitter"></i>
                            </a>
                            <a href="#">
                                <i class="linkedin fab fa-linkedin-in"></i>
                            </a>
                            <a href="#">
                                <i class="fa-solid fa-phone-volume"></i>
                            </a>
                        </div>
                    </div>
                    <div class="info">
                        <h4 class="pt-2">DR Khalid Gafar</h4>
                        <p class="pb-2 fw-bold"><span>VICE RECTOR FOR Environmental Affairs & Community Service</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="leader box">
                    <div class="data">
                        <img class="img-fluid" src="{{asset('uploads/frontend/images/leaders/rector1.png')}}" alt=""/>
                        <div class="social">
                            <a href="#">
                                <i class="facebook fab fa-facebook-f"></i>
                            </a>
                            <a href="#">
                                <i class="twitter fab fa-twitter"></i>
                            </a>
                            <a href="#">
                                <i class="linkedin fab fa-linkedin-in"></i>
                            </a>
                            <a href="#">
                                <i class="fa-solid fa-phone-volume"></i>
                            </a>
                        </div>
                    </div>
                    <div class="info">
                        <h4 class="pt-2">DR Shaden Moawia</h4>
                        <p class="pb-2 fw-bold"><span>VICE RECTOR FOR GRADUATE STUDIES & SCIENTIFIC RESEARCH</span></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="leader box">
                    <div class="data">
                        <img class="img-fluid" src="{{asset('uploads/frontend/images/leaders/vice4.png')}}" alt=""/>
                        <div class="social">
                            <a href="#">
                                <i class="facebook fab fa-facebook-f"></i>
                            </a>
                            <a href="#">
                                <i class="twitter fab fa-twitter"></i>
                            </a>
                            <a href="#">
                                <i class="linkedin fab fa-linkedin-in"></i>
                            </a>
                            <a href="#">
                                <i class="fa-solid fa-phone-volume"></i>
                            </a>
                        </div>
                    </div>
                    <div class="info">
                        <h4 class="pt-2">DR Emad</h4>
                        <p class="pb-2 fw-bold"><span>University Secretary</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
{{--------------------------End of section 2 (University Leaders) ---------------------------}}


<div class="spikes"></div>


{{--------------------------Start of section 3 (University Deans) ----------------------------}}
<div class="university_history" id="university_deans">
    <h2 class="main-title">University Deans</h2>

    <div class="container">
        <div class="row justify-content-md-center">

            <div class="col-xs-12 col-lg-10 align-content-center">
                <ul>
                    <li class="pb-2"><a href="#">- College of Veterinary Medicine</a></li>
                </ul>
                <p class="ps-3">DR Alaa ElDin Mohammed</p>
                <ul>
                    <li class="pb-2"><a href="#">- College of Veterinary Medicine</a></li>
                </ul>
                <p class="ps-3">DR Alaa ElDin Mohammed</p>
                <ul>
                    <li class="pb-2"><a href="#">- College of Veterinary Medicine</a></li>
                </ul>
                <p class="ps-3">DR Alaa ElDin Mohammed</p>
                <ul>
                    <li class="pb-2"><a href="#">- College of Veterinary Medicine</a></li>
                </ul>
                <p class="ps-3">DR Alaa ElDin Mohammed</p>
                <ul>
                    <li class="pb-2"><a href="#">- College of Veterinary Medicine</a></li>
                </ul>
                <p class="ps-3">DR Alaa ElDin Mohammed</p>
                <ul>
                    <li class="pb-2"><a href="#">- College of Veterinary Medicine</a></li>
                </ul>
                <p class="ps-3">DR Alaa ElDin Mohammed</p>
                <ul>
                    <li class="pb-2"><a href="#">- College of Veterinary Medicine</a></li>
                </ul>
                <p class="ps-3">DR Alaa ElDin Mohammed</p>
                <ul>
                    <li class="pb-2"><a href="#">- College of Veterinary Medicine</a></li>
                </ul>
                <p class="ps-3">DR Alaa ElDin Mohammed</p>
                <ul>
                    <li class="pb-2"><a href="#">- College of Veterinary Medicine</a></li>
                </ul>
                <p class="ps-3">DR Alaa ElDin Mohammed</p>
                <ul>
                    <li class="pb-2"><a href="#">- College of Veterinary Medicine</a></li>
                </ul>
                <p class="ps-3">DR Alaa ElDin Mohammed</p>
                <ul>
                    <li class="pb-2"><a href="#">- College of Veterinary Medicine</a></li>
                </ul>
                <p class="ps-3">DR Alaa ElDin Mohammed</p>
            </div>

        </div>


    </div>
</div>
{{--------------------------End of section 3 (University Deans) ------------------------------}}




{{--------------------------End of section 4 (Rector's Office) -------------------------------}}
<div class="university_council text-center pb-5 pt-2" id="rector_office">
    <div class="container pb-5 pt-1">
        <img class="mb-4" src="{{asset('uploads/frontend/images/12.png')}}" alt=""/>
        <h2 class="fw-bold main-title">Rector's Office</h2>
        <p class="text-black-50 mb-5">
            The appointment of Prof. Dr. Shadeen Moawia as Director of Sadat City University came after a
            busy career in academic work, which began as a teaching assistant at the university, then as a lecturer,
            then as a professor in facility of ......., then as VICE RECTOR FOR GRADUATE STUDIES & SCIENTIFIC RESEARCH
            until .........
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid amet aut facilis molestias mollitia, odit
            omnis pariatur repellendus sequi sint, suscipit totam vel velit. Dolore ducimus ea error laboriosam magni?
        </p>


        <div class="d-flex justify-content-center mt-5">
            <a class="btn rounded-pill main-btn-dark text-uppercase" href="#">Visit Site</a>
        </div>
    </div>
</div>
{{--------------------------End of section 4 (Rector's Office) -- ----------------------------}}


<div class="spikes"></div>


{{--------------------------Start of section 5 (Administrative Departments) -------------------}}
<div class="university_history" id="administrative_departments">
    <h2 class="main-title">Administrative Departments</h2>

    <div class="container">
        <div class="row justify-content-md-center">

            <div class="col-xs-12 col-lg-10 align-content-center">
                <ul>
                    <li class="pb-2"><a href="#">- General Administration of Administrative and Operational Affairs</a>
                    </li>
                    <li class="pb-2"><a href="#">- General Administration of Planning and Budget</a></li>
                    <li class="pb-2"><a href="#">- Transportation management</a></li>
                    <li class="pb-2"><a href="#">- Inventory control management</a></li>
                    <li class="pb-2"><a href="#">- General Administration of Purchasing</a></li>
                    <li class="pb-2"><a href="#">- General Administration of University Safety and Security</a></li>
                    <li class="pb-2"><a href="#">- Services management</a></li>
                    <li class="pb-2"><a href="#">- Public Relations and Media Department</a></li>
                    <li class="pb-2"><a href="#">- financial management</a></li>
                    <li class="pb-2"><a href="#">- the legal administration</a></li>
                    <li class="pb-2"><a href="#">- Administrative Communications Center</a></li>
                    <li class="pb-2"><a href="#">- Management of faculty and staff housing maintenance</a></li>
                    <li class="pb-2"><a href="#">- Data management office</a></li>
                    <li class="pb-2"><a href="#">- stores management</a></li>
                    <li class="pb-2"><a href="#">- Social Solidarity Fund</a></li>
                    <li class="pb-2"><a href="#">- Transformation and Initiatives Management Office</a></li>
                </ul>
            </div>

        </div>


    </div>
</div>
{{--------------------------End of section 5 (Administrative Departments) ---------------------}}





{{--------------------------Start of section 6 (University Council) ----------------------------}}
<div class="university_council text-center pb-5 pt-2" id="university_council">
    <div class="container pb-5 pt-1">
        <img class="mb-4" src="{{asset('uploads/frontend/images/12.png')}}" alt=""/>
        <h2 class="fw-bold main-title">University Council</h2>
        <p class="text-black-50 mb-5">
            The University Council, USC’s most prestigious administrative authority, considers all University
            activities, especially USC’s educational objectives and issues that affect faculty, staff and students. It
            makes recommendations to the Rector regarding the development and evaluation of University programs and
            policies.
        </p>


        <div class="d-flex justify-content-center mt-5">
            <a class="btn rounded-pill main-btn-dark text-uppercase" href="#">Visit Site</a>
        </div>
    </div>
</div>
{{--------------------------End of section 6 (University Council) ------------------------------}}










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
