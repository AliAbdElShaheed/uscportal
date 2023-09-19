@extends('layouts.frontend.app')

@section('content')

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
                            <img class="img-fluid" src="{{asset('uploads/frontend/images/leaders/rector1.png')}}"
                                 alt=""/>
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
                            <img class="img-fluid" src="{{asset('uploads/frontend/images/leaders/vice11.png')}}"
                                 alt=""/>
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
                            <img class="img-fluid" src="{{asset('uploads/frontend/images/leaders/vice22.png')}}"
                                 alt=""/>
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
                            <p class="pb-2 fw-bold">
                                <span>VICE RECTOR FOR Environmental Affairs & Community Service</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="leader box">
                        <div class="data">
                            <img class="img-fluid" src="{{asset('uploads/frontend/images/leaders/rector1.png')}}"
                                 alt=""/>
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
                            <p class="pb-2 fw-bold"><span>VICE RECTOR FOR GRADUATE STUDIES & SCIENTIFIC RESEARCH</span>
                            </p>
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
                then as a professor in facility of ......., then as VICE RECTOR FOR GRADUATE STUDIES & SCIENTIFIC
                RESEARCH
                until .........
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid amet aut facilis molestias mollitia,
                odit
                omnis pariatur repellendus sequi sint, suscipit totam vel velit. Dolore ducimus ea error laboriosam
                magni?
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
                        <li class="pb-2"><a href="#">- General Administration of Administrative and Operational
                                Affairs</a>
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
                activities, especially USC’s educational objectives and issues that affect faculty, staff and students.
                It
                makes recommendations to the Rector regarding the development and evaluation of University programs and
                policies.
            </p>


            <div class="d-flex justify-content-center mt-5">
                <a class="btn rounded-pill main-btn-dark text-uppercase" href="#">Visit Site</a>
            </div>
        </div>
    </div>
    {{--------------------------End of section 6 (University Council) ------------------------------}}

@endsection


@push('scripts')


@endpush

