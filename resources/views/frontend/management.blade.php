@extends('layouts.frontend.app')

@section('content')

    {{--------------------------Start of section 1 Landing (banners)------------------------------}}
    <section class="landing d-flex justify-content-center align-items-center">
        <div class="image">
            <div class="text-center text-light">
                <h1>ادارة الجامعة</h1>
                <p class="fs-6 text-white-50 mb-5"></p>
                <a href="#university_leaders" class="btn rounded-pill main-btn">ابدء</a>
            </div>
        </div>
    </section>
    {{--------------------------End of section 1 Landing (banners)-----  -------------------------}}



    {{--------------------------Start of section 2 (University Leaders) --------------------------}}
    <div id="university_leaders" class="university_leaders text-center pb-5 pt-2">
        <div class="container pb-5 pt-1">
            <img class="mb-4" src="{{asset('uploads/frontend/images/12.png')}}" alt=""/>
            <h2 class="fw-bold main-title">قيادات الجامعة</h2>

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
                            <h4 class="pt-2 fw-bold">ا.د / شادن معاوية</h4>
                            <p class="pb-2 fw-bold">رئيس الجامعة</p>
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
                            <h4 class="pt-2">ا.د / شريف محمد علي </h4>
                            <p class="pb-2 fw-bold"><span>نائب رئيس الجامعة لشئون التعليم والطلاب</span></p>
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
                            <h4 class="pt-2">ا.د / خالد محمود محمد جعفر  </h4>
                            <p class="pb-2 fw-bold">
                                <span>نائب رئيس الجامعة لشئون خدمة المجتمع وتنمية البيئة</span>
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
                            <h4 class="pt-2">ا.د / شادن معاوية</h4>
                            <p class="pb-2 fw-bold"><span>نائب رئيس الجامعة لشئون الدراسات العليا</span>
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
                            <h4 class="pt-2">د / عماد</h4>
                            <p class="pb-2 fw-bold"><span>امين الجامعة</span>
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
        <h2 class="main-title">عمداء الكليات</h2>

        <div class="container">
            <div class="row justify-content-md-center">

                <div class="col-xs-12 col-lg-10 align-content-center">
                    <ul>
                        <li class="pb-2"><a href="#">ا.د أسامة ربيع أمين سليمان</a></li>
                    </ul>
                    <p class="ps-3">عميد كلية التجارة</p>
                    <ul>
                        <li class="pb-2"><a href="#">أ.د/ علاء الدين حسين مصطفى</a></li>
                    </ul>
                    <p class="ps-3">عميد كلية الطب البيطري</p>
                    <ul>
                        <li class="pb-2"><a href="#">أ.د/ سعيد فارق عبد القادر موسى</a></li>
                    </ul>
                    <p class="ps-3">عميد كلية التربية للطفولة المبكرة</p>
                    <ul>
                        <li class="pb-2"><a href="#">أ.د / نهاد كمال</a></li>
                    </ul>
                    <p class="ps-3">عميد كلية السياحة و الفنادق</p>
                    <ul>
                        <li class="pb-2"><a href="#">أ.د/ ممدوح محمد السعيد السيد</a></li>
                    </ul>
                    <p class="ps-3">عميد معهد الدراسات والبحوث البيئية</p>
                    <ul>
                        <li class="pb-2"><a href="#">أ.د/ أحمد ابراهيم أحمد عزب</a></li>
                    </ul>
                    <p class="ps-3">عميد كلية التربية الرياضية</p>
                    <ul>
                        <li class="pb-2"><a href="#">أ.د/ سحر عبد الستار امام</a></li>
                    </ul>
                    <p class="ps-3">عميد كلية الحقوق</p>
                    <ul>
                        <li class="pb-2"><a href="#">ا.د / خميس محمد خميس</a></li>
                    </ul>
                    <p class="ps-3">عميد كلية التربية</p>
                    <ul>
                        <li class="pb-2"><a href="#">أ.د/ محمد عبد الخالق اسماعيل</a></li>
                    </ul>
                    <p class="ps-3">عميد كلية الصيدلة</p>
                    <ul>
                        <li class="pb-2"><a href="#">ا.د /  ابراهيم سليم</a></li>
                    </ul>
                    <p class="ps-3">عميد كلية الحاسبات و الذكاء الاصطناعى</p>
                     
                </div>

            </div>


        </div>
    </div>
    {{--------------------------End of section 3 (University Deans) ------------------------------}}




    {{--------------------------End of section 4 (Rector's Office) -------------------------------}}
    <div class="university_council text-center pb-5 pt-2" id="rector_office">
        <div class="container pb-5 pt-1">
            <img class="mb-4" src="{{asset('uploads/frontend/images/12.png')}}" alt=""/>
            <h2 class="fw-bold main-title">مكتب رئيس الجامعة</h2>
            <p class="text-black-50 mb-5">
               <p>بريد إلكترونى &nbsp; &nbsp;: &nbsp; <a data-fr-linked="true" href="mailto:president@usc.edu.eg">president@usc.edu.eg</a></p>
<p>مدير مكتب رئيس الجامعة :&nbsp;</p>
<p><br></p>
<p>إدارة السكرتارية</p>
<p>أ / سلوى عثمان الشنواني</p>
<p>مدير إدارة سكرتارية مكتب رئيس الجامعة</p>
<p>&nbsp;إدارة سكرتارية مكتب رئيس الجامعة</p>
            </p>


         <!--   <div class="d-flex justify-content-center mt-5">
                <a class="btn rounded-pill main-btn-dark text-uppercase" href="#">Visit Site</a>
            </div>   -->
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
  <!--  <div class="university_council text-center pb-5 pt-2" id="university_council">
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
    </div>  -->
    {{--------------------------End of section 6 (University Council) ------------------------------}}

@endsection


@push('scripts')


@endpush

