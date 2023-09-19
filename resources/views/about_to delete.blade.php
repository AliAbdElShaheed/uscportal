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
                    <a class="nav-link p-2 active" aria-current="page"
                       href="/about">@lang('front.about_university')</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link p-2 p-lg-2" href="/management">@lang('front.university_management')</a>
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
            <h1>About The University Of Sadat City</h1>
            <p class="fs-6 text-white-50 mb-5">You can know everything about our university here</p>
            <a href="#president_word" class="btn rounded-pill main-btn">Get Started</a>
        </div>
    </div>
</section>
{{--------------------------End of section 1 Landing (banners)-----  -------------------------}}



{{--------------------------Start of section 2 (President Word) ------------------------------}}
<div id="president_word" class="president_word text-center pb-5 pt-2">
    <div class="container pb-5 pt-1">
        <img class="mb-4" src="{{asset('uploads/frontend/images/12.png')}}" alt=""/>
        <h2 class="fw-bold main-title">President Word</h2>

        <div class="row">
            <div class="col-lg-4 col-sm-12">
                <div class="president box bg-white">
                    <img class="img-fluid" src="{{asset('uploads/frontend/images/102.jpg')}}" alt=""/>
                    <h4 class="p-3 text-dark border border-primary-subtle">DR Shaden Moawia</h4>

                </div>
            </div>
            <div class="col-lg-8 col-sm-12">
                <blockquote class="text-black-50  px-3 text-start">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, at corporis cum dolorum eaque earum
                    error ex excepturi expedita fugiat id maxime minima obcaecati, officia provident reprehenderit sequi
                    velit vero.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam aut cumque ex explicabo iure
                    maiores, modi nemo nisi nulla quia quis quisquam recusandae rerum saepe vero voluptatem. Est,
                    voluptas?
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores consectetur ex natus sequi
                    similique sit, totam. Adipisci aut deserunt dicta esse et eveniet ipsam molestiae, pariatur,
                    provident quam quidem voluptas.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque ea fugiat inventore minus
                    quisquam sint. Assumenda consectetur fugiat illo ipsa, laborum magni necessitatibus quas quod sed
                    sit ut vel voluptatibus!
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum error, excepturi incidunt
                    repudiandae sed veniam! Animi blanditiis dolor dolores eveniet inventore, magni quaerat reiciendis
                    reprehenderit rerum suscipit. Id, modi, necessitatibus!
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem beatae corporis dolore eos eveniet
                    exercitationem in ipsam itaque maiores modi pariatur provident quia ratione similique sint
                    temporibus tenetur, ut vero!
                </blockquote>
            </div>
        </div>
    </div>
</div>
{{--------------------------End of section 2 (President Word) --------------------------------}}


<div class="spikes"></div>


{{--------------------------Start of section 3 (University History) --------------------------}}
<div class="university_history" id="university_history">
    <h2 class="main-title">University History</h2>

    <div class="container">
        <div class="row justify-content-md-center">

            <div class="col-xs-12 col-lg-10 align-content-center">

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, at corporis cum dolorum
                    eaque earum
                    error ex excepturi expedita fugiat id maxime minima obcaecati, officia provident
                    reprehenderit sequi
                    velit vero.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam aut cumque ex explicabo
                    iure
                    maiores, modi nemo nisi nulla quia quis quisquam recusandae rerum saepe vero voluptatem.
                    Est,
                    voluptas?
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores consectetur ex natus
                    sequi
                    similique sit, totam. Adipisci aut deserunt dicta esse et eveniet ipsam molestiae, pariatur,
                    provident quam quidem voluptas.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque ea fugiat inventore
                    minus
                    quisquam sint. Assumenda consectetur fugiat illo ipsa, laborum magni necessitatibus quas
                    quod sed
                    sit ut vel voluptatibus!
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum error, excepturi incidunt
                    repudiandae sed veniam! Animi blanditiis dolor dolores eveniet inventore, magni quaerat
                    reiciendis
                    reprehenderit rerum suscipit. Id, modi, necessitatibus!
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem beatae corporis dolore eos
                    eveniet
                    exercitationem in ipsam itaque maiores modi pariatur provident quia ratione similique sint
                    temporibus tenetur, ut vero!
                </p>
                <h4>First Article</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, at corporis cum dolorum
                    eaque earum
                    error ex excepturi expedita fugiat id maxime minima obcaecati, officia provident
                    reprehenderit sequi
                    velit vero.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam aut cumque ex explicabo
                    iure
                    maiores, modi nemo nisi nulla quia quis quisquam recusandae rerum saepe vero voluptatem.
                    Est,
                    voluptas?
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores consectetur ex natus
                    sequi
                    similique sit, totam. Adipisci aut deserunt dicta esse et eveniet ipsam molestiae, pariatur,
                    provident quam quidem voluptas.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque ea fugiat inventore
                    minus
                    quisquam sint. Assumenda consectetur fugiat illo ipsa, laborum magni necessitatibus quas
                    quod sed
                    sit ut vel voluptatibus!
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum error, excepturi incidunt
                    repudiandae sed veniam! Animi blanditiis dolor dolores eveniet inventore, magni quaerat
                    reiciendis
                    reprehenderit rerum suscipit. Id, modi, necessitatibus!
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem beatae corporis dolore eos
                    eveniet
                    exercitationem in ipsam itaque maiores modi pariatur provident quia ratione similique sint
                    temporibus tenetur, ut vero!
                </p>
                <h4>Second Article</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, at corporis cum dolorum
                    eaque earum
                    error ex excepturi expedita fugiat id maxime minima obcaecati, officia provident
                    reprehenderit sequi
                    velit vero.
                </p>
                <h4>Third Article</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, at corporis cum dolorum
                    eaque earum
                    error ex excepturi expedita fugiat id maxime minima obcaecati, officia provident
                    reprehenderit sequi
                    velit vero.
                </p>
                <h4>Forth Article</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, at corporis cum dolorum
                    eaque earum
                    error ex excepturi expedita fugiat id maxime minima obcaecati, officia provident
                    reprehenderit sequi
                    velit vero.
                </p>
                <h4>Article Five</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, at corporis cum dolorum
                    eaque earum
                    error ex excepturi expedita fugiat id maxime minima obcaecati, officia provident
                    reprehenderit sequi
                    velit vero.
                </p>
                <h4>Article Six</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, at corporis cum dolorum
                    eaque earum
                    error ex excepturi expedita fugiat id maxime minima obcaecati, officia provident
                    reprehenderit sequi
                    velit vero.
                </p>
                <h4>Article Seven</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, at corporis cum dolorum
                    eaque earum
                    error ex excepturi expedita fugiat id maxime minima obcaecati, officia provident
                    reprehenderit sequi
                    velit vero.
                </p>
                <h4>Article Eight</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, at corporis cum dolorum
                    eaque earum
                    error ex excepturi expedita fugiat id maxime minima obcaecati, officia provident
                    reprehenderit sequi
                    velit vero.
                </p>
                <h4>Article Nine</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, at corporis cum dolorum
                    eaque earum
                    error ex excepturi expedita fugiat id maxime minima obcaecati, officia provident
                    reprehenderit sequi
                    velit vero.
                </p>
                <h4>Article Ten</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, at corporis cum dolorum
                    eaque earum
                    error ex excepturi expedita fugiat id maxime minima obcaecati, officia provident
                    reprehenderit sequi
                    velit vero.
                </p>
                <h4>Article Eleven</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, at corporis cum dolorum
                    eaque earum
                    error ex excepturi expedita fugiat id maxime minima obcaecati, officia provident
                    reprehenderit sequi
                    velit vero.
                </p>
                <h4>Article Twelve</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, at corporis cum dolorum
                    eaque earum
                    error ex excepturi expedita fugiat id maxime minima obcaecati, officia provident
                    reprehenderit sequi
                    velit vero.
                </p>
                <h4>Article Thirteen</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, at corporis cum dolorum
                    eaque earum
                    error ex excepturi expedita fugiat id maxime minima obcaecati, officia provident
                    reprehenderit sequi
                    velit vero.
                </p>
                <h4>Article 14</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, at corporis cum dolorum
                    eaque earum
                    error ex excepturi expedita fugiat id maxime minima obcaecati, officia provident
                    reprehenderit sequi
                    velit vero.
                </p>
                <h2>Former presidents of the university</h2>
                <ul>
                    <li class="pb-2">- DR / Khalid Gafar <span>From Jan 17, 2022 To Jan 17, 2022 </span></li>
                    <li class="pb-2">- DR / Ahmed Bayoomi <span>From Jan 17, 2022 To Jan 17, 2022 </span></li>
                    <li class="pb-2">- DR / Esam Motwaly <span>From Jan 17, 2022 To Jan 17, 2022 </span></li>
                    <li class="pb-2">- DR / Salah ElBalal <span>From Jan 17, 2022 To Jan 17, 2022 </span></li>
                    <li class="pb-2">- DR / Ahmed Zaglol <span>From Jan 17, 2022 To Jan 17, 2022 </span></li>
                </ul>

            </div>

        </div>


    </div>
</div>
{{--------------------------End of section 3 (University History) ----------------------------}}




{{--------------------------End of section 4 (strategies) --------------------------------------}}
<div class="strategies" id="strategies">
    <h2>University Strategies</h2>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col col-lg-10 align-content-center p-0 bg-white">
                <div class="box">
                    <ul class="s_ul nav nav-tabs pt-3 " id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link fw-bold active" id="home-tab" data-bs-toggle="tab"
                                    data-bs-target="#home-tab-pane" type="button" role="tab"
                                    aria-controls="home-tab-pane"
                                    aria-selected="true">Vision
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link fw-bold" id="mission-tab" data-bs-toggle="tab"
                                    data-bs-target="#mission-tab-pane" type="button" role="tab"
                                    aria-controls="mission-tab-pane" aria-selected="false">Mission
                            </button>
                        </li>
                        <li class="nav-item fw-bold" role="presentation">
                            <button class="nav-link" id="values-tab" data-bs-toggle="tab"
                                    data-bs-target="#values-tab-pane" type="button" role="tab"
                                    aria-controls="values-tab-pane" aria-selected="false">Values
                            </button>
                        </li>
                        <li class="nav-item fw-bold" role="presentation">
                            <button class="nav-link" id="objectives-tab" data-bs-toggle="tab"
                                    data-bs-target="#objectives-tab-pane" type="button" role="tab"
                                    aria-controls="objectives-tab-pane" aria-selected="false">Objectives
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link fw-bold" id="strategic_objectives-tab" data-bs-toggle="tab"
                                    data-bs-target="#strategic_objectives-tab-pane" type="button" role="tab"
                                    aria-controls="strategic_objectives-tab-pane" aria-selected="false">Strategic
                                Objectives:
                            </button>
                        </li>
                    </ul>
                    <div class="s-tabs py-3 tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel"
                             aria-labelledby="home-tab"
                             tabindex="0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquid autem
                            dolore
                            fuga omnis perspiciatis provident, quas, quidem reiciendis reprehenderit sapiente sed sunt
                            tempore. Amet animi eius explicabo in sunt.
                        </div>
                        <div class="tab-pane fade" id="mission-tab-pane" role="tabpanel" aria-labelledby="mission-tab"
                             tabindex="0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur cum
                            deleniti
                            dolorem doloribus eos, expedita facere laudantium magni minima modi necessitatibus, omnis
                            quia
                            quos repellat sapiente tempore, temporibus vel voluptatem?
                        </div>
                        <div class="tab-pane fade" id="values-tab-pane" role="tabpanel" aria-labelledby="values-tab"
                             tabindex="0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi consequuntur
                            earum ex expedita fuga incidunt inventore itaque minus, nesciunt nostrum numquam obcaecati
                            officia praesentium quae qui quia saepe sunt, voluptas?
                        </div>
                        <div class="tab-pane fade" id="objectives-tab-pane" role="tabpanel"
                             aria-labelledby="objectives-tab"
                             tabindex="0">
                            <ul>
                                <li>1 - aaa</li>
                                <li>1 - aaa</li>
                                <li>1 - aaa</li>

                            </ul>
                        </div>
                        <div class="tab-pane fade" id="strategic_objectives-tab-pane" role="tabpanel"
                             aria-labelledby="strategic_objectives-tab"
                             tabindex="0">
                            <ul>
                                <li>1 - aaa</li>
                                <li>1 - aaa</li>
                                <li>1 - aaa</li>

                            </ul>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
{{--------------------------End of section 4 (strategies) -- -----------------------------------}}





{{--------------------------Start of section 5 (University Council) ----------------------------}}
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
{{--------------------------End of section 5 (University Council) ------------------------------}}


<div class="spikes"></div>


{{--------------------------Start of section 6 (Citizens Service Centers) ----------------------}}
<div class="university_history" id="university_history">
    <h2 class="main-title">Citizens Service Centers</h2>

    <div class="container">
        <div class="row justify-content-md-center">

            <div class="col-xs-12 col-lg-10 align-content-center">

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, aliquam asperiores assumenda autem
                    corporis, doloribus ea eaque error est ex harum illo labore molestias nihil non quidem rem
                    reprehenderit tenetur!</p>
                <ul>
                    <li class="pb-2"><a href="#">- Public Service Center</a></li>
                    <li class="pb-2"><a href="#">- Veterinary Medical Services Center</a></li>
                    <li class="pb-2"><a href="#">- Cisco training labs</a></li>
                    <li class="pb-2"><a href="#">- Al Tieco unit</a></li>
                    <li class="pb-2"><a href="#">- Blood Research Laboratory, College of Veterinary Medicine</a></li>
                    <li class="pb-2"><a href="#">- The American University Training Center at the university</a></li>
                    <li class="pb-2"><a href="#">- Medical analysis laboratory at the Institute of Genetic
                            Engineering</a></li>
                    <li class="pb-2"><a href="#">- Training Unit for Digital Transformation Tests</a></li>
                    <li class="pb-2"><a href="#">- Public Service Center</a></li>
                </ul>

            </div>

        </div>


    </div>
</div>
{{--------------------------End of section 6 (Citizens Service Centers) ------------------------}}







{{---------Start of section 7 (Privacy Policy, Terms of use and Copyright & Disclaimer) --------}}
<div class="privacy_policy" id="privacy_policy">
    <h2>Privacy Policy, Terms of Use and Copyright & Disclaimer</h2>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col col-lg-10 align-content-center p-0">
                <div class="box">
                    <div class="d-flex align-items-start justify-content-start">
                        <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist"
                             aria-orientation="vertical">
                            <button class="nav-link active fw-bold" id="v-pills-home-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home"
                                    aria-selected="true">Privacy Policy
                            </button>
                            <button class="nav-link fw-bold" id="v-pills-profile-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-profile" type="button" role="tab"
                                    aria-controls="v-pills-profile" aria-selected="false">Terms of Use
                            </button>
                            <button class="nav-link fw-bold" id="v-pills-messages-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-messages" type="button" role="tab"
                                    aria-controls="v-pills-messages" aria-selected="false">Copyright & Disclaimer
                            </button>

                        </div>
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show fw-bold active" id="v-pills-home" role="tabpanel"
                                 aria-labelledby="v-pills-home-tab" tabindex="0">Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit. Asperiores commodi cum earum esse mollitia nihil possimus repudiandae
                                saepe similique? Architecto asperiores enim est hic odio, officiis provident quaerat qui
                                quia?
                            </div>
                            <div class="tab-pane fade fw-bold pt-4rem" id="v-pills-profile" role="tabpanel"
                                 aria-labelledby="v-pills-profile-tab" tabindex="0">Lorem ipsum dolor sit amet,
                                consectetur adipisicing elit. Adipisci autem cum debitis dignissimos iusto nobis placeat
                                quaerat quasi quia quos? Blanditiis deserunt ea facere laudantium porro ratione sunt
                                tempore. Odit.
                            </div>
                            <div class="tab-pane fade fw-bold pt-9rem" id="v-pills-messages" role="tabpanel"
                                 aria-labelledby="v-pills-messages-tab" tabindex="0">Lorem ipsum dolor sit amet,
                                consectetur adipisicing elit. Enim exercitationem impedit itaque nam nemo odio sed ut
                                voluptatibus. Beatae consequuntur cumque, dolorem doloremque esse eveniet ipsum minus
                                qui sit soluta!
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
{{--------- End of section 7 (Privacy Policy, Terms of use and Copyright & Disclaimer)  --------}}






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
