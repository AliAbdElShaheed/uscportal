@extends('layouts.frontend.app')

@section('content')
    <!--    --><?php //dd($blogs); ?>
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
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex
                ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                fugiat
                nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                mollit
                anim id est laborum.</p>
            <a href="#">Read More</a>
        </div>
        <div class="content">
            <h1>@lang('University President\'s speech').<br><span>@lang('DR / Shaden Moaawia')</span></h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex
                ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                fugiat
                nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                mollit
                anim id est laborum.</p>
            <a href="#">Read More</a>
        </div>
        <div class="content">
            <h1>@lang('university of sadat city').<br><span>USC</span></h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex
                ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                fugiat
                nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                mollit
                anim id est laborum.</p>
            <a href="#">Read More</a>
        </div>
        <div class="content">
            <h1>@lang('university of sadat city').<br><span>USC</span></h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex
                ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                fugiat
                nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                mollit
                anim id est laborum.</p>
            <a href="#">Read More</a>
        </div>
        <div class="content">
            <h1>@lang('university of sadat city').<br><span>USC</span></h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex
                ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                fugiat
                nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                mollit
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
                Pellentesque in ipsum id orci porta dapibus. Proin eget tortor risus. Donec sollicitudin molestie
                malesuada.
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
                        <img src="{{asset('uploads/frontend/images/110.jpg')}}" alt=""/>
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
                        <img src="{{asset('uploads/frontend/images/109.jpg')}}" alt=""/>
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
                        <img src="{{asset('uploads/frontend/images/107.jpg')}}" alt=""/>
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
                        <img src="{{asset('uploads/frontend/images/inews1.jpeg')}}" alt=""/>
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
                            <li class="py-2 px-4 border-top border-light-subtle" role="button" tabindex="0">How To
                                Create
                                Sub
                                Domain
                                <span>Jan 17, 2022 at 05:18 PM</span>
                            </li>
                            <li class="py-2 px-4 border-top border-light-subtle" role="button" tabindex="0">How To
                                Create
                                Sub
                                Domain
                                <span>Jan 17, 2022 at 05:18 PM</span>
                            </li>
                            <li class="py-2 px-4 border-top border-light-subtle" role="button" tabindex="0">How To
                                Create
                                Sub
                                Domain
                                <span>Jan 17, 2022 at 05:18 PM</span>
                            </li>
                            <li class="py-2 px-4 border-top border-light-subtle" role="button" tabindex="0">Playing With
                                The
                                DNS
                                <span>Jan 17, 2022 at 03:18 PM</span>
                            </li>
                            <li class="py-2 px-4 border-top border-light-subtle" role="button" tabindex="0">Everything
                                About
                                The
                                Virtual Hosts
                                <span>Jan 17, 2022 at 05:25 PM</span></li>
                            <li class="py-2 px-4 border-top border-light-subtle" role="button" tabindex="0">How To
                                Monitor
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
                            <li class="py-2 px-4 border-top border-light-subtle" role="button" tabindex="0">Ys Series
                                All
                                Games
                                Ending
                                <span>Jan 17, 2022 at 08:10 AM</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class=" col-lg-8 col-md-8 p-0 m-0">
                    <div class="preview h-100">
                        <img class="w-100 h-75" src="{{asset('uploads/frontend/images/EVENTS_1.webp')}}" alt=""/>
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
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Et vero tenetur doloremque iusto ut
                    adipisci
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

@endsection
{{--

@push('scripts')



@endpush
--}}
