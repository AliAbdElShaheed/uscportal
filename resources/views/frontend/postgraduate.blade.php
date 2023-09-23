@extends('layouts.frontend.app')

@section('content')

    {{--------------------------Start of section 1 Landing (banners)------------------------------}}
    <section class="landing d-flex justify-content-center align-items-center">
        <div class="image">
            <div class="text-center text-light">
                <h1>@lang('site.opening_postgraduate_page_word')</h1>
                <p class="fs-6 text-white-50 mb-5">@lang('site.sub_opening_postgraduate_page_word')</p>
                <a href="#postgraduate" class="btn rounded-pill main-btn">@lang('site.get_started')</a>
            </div>
        </div>
    </section>
    {{--------------------------End of section 1 Landing (banners)-----  -------------------------}}



    {{--------------------------Start of section 2 (Vice Rector's Word) ------------------------------}}
    <div id="postgraduate" class="president_word text-center pb-5 pt-2">
        <div class="container pb-5 pt-1">
            <img class="mb-4" src="{{asset('uploads/frontend/images/12.png')}}" alt=""/>
            <h2 class="fw-bold main-title">@lang('site.vice_rector_word')</h2>

            <div class="row">
                <div class="col-lg-4 col-sm-12">
                    <div class="president box bg-white">
                        <img class="img-fluid" src="{{asset('uploads/frontend/images/102.jpg')}}" alt=""/>
                        <h4 class="p-3 text-dark border border-primary-subtle">@lang('site.president_name')</h4>

                    </div>
                </div>
                <div class="col-lg-8 col-sm-12">
                    <blockquote class="text-black-50  px-3 text-center justify-content-end">
                        @lang('site.vice_rector_words')
                    </blockquote>
                </div>
            </div>
        </div>
    </div>
    {{--------------------------End of section 2 (Vice Rector's Word) --------------------------------}}



    <div class="spikes"></div>


    {{--------------------------Start of section 3 (postgraduate word & council) --------------------------}}
    <div class="university_history" id="university_history">
        <h2 class="main-title">@lang('site.main_postgraduate_word')</h2>

        <div class="container">
            <div class="row justify-content-md-center">

                <div class="col-xs-12 col-lg-10 align-content-center">

                    <p>@lang('site.main_postgraduate_words')</p>
                    <h2>@lang('site.postgraduate_council_specifies')</h2>
                    <h4>مناقشة الموضوعات المتعلقة :-</h4>
                    <ul>
                        <li class="pb-2">- بشئون الدراسات العليا والبحوث</li>
                        <li class="pb-2">- وشئون العلاقات الثقافية</li>
                        <li class="pb-2">- وإتخاذ قرارات تنفيذية لها</li>
                    </ul>
                    <br/>

                    <h2>@lang('site.postgraduate_council_members')</h2>
                    <div class="row text-center">
                        <h3 style="direction: rtl;">رئيس مجلس الدراسات العليا والبحوث</h3>
                        <div class="progTime" style="direction: rtl;"><img
                                src="http://pic.usc.edu.eg/usc/index.php?&amp;src=b28232e5888735fe2d58484942e2c1f5.jpg&amp;w=150&amp;h=124&amp;iar=1"
                                height="124"/></div>
                        <div class="progInfo">
                            <div class="progName">
                                <h4 style="direction: rtl;">أ.د/ شادن معاويه</h4>
                            </div>
                            <div class="progPresenter">
                                <p class="presenterName" style="direction: rtl;">نائب رئيس الجامعة لشئون الدراسات العليا
                                    والبحوث</p>
                            </div>
                        </div>
                        <h3 style="direction: rtl;">أعضاء مجلس الدراسات العليا والبحوث</h3>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="progTime" style="direction: rtl;"><img
                                        src="{{asset('uploads/frontend/images/leaders/member_photo.png')}}"
                                        style="width: 150px; height: 124px;"/></div>
                                <div class="progInfo">
                                    <div class="progName">
                                        <h5 style="direction: rtl;">أ.د/ عادل توفيق</h5>
                                    </div>
                                    <div class="progPresenter">
                                        <p class="presenterName" style="direction: rtl;">عميد كلية التربية</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="progTime" style="direction: rtl;"><img
                                        src="{{asset('uploads/frontend/images/leaders/member_photo.png')}}"
                                        style="width: 150px; height: 124px;"/></div>
                                <div class="progInfo">
                                    <div class="progName">
                                        <h5 style="direction: rtl;">أ.د / عبد الحميد أحمد شاهين</h5>
                                    </div>
                                    <div class="progPresenter">
                                        <p class="presenterName" style="direction: rtl;">عميد كلية التجارة الأسبق</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="progTime" style="direction: rtl;"><img
                                        src="{{asset('uploads/frontend/images/leaders/member_photo.png')}}"
                                        style="width: 150px; height: 124px;"/></div>
                                <div class="progInfo">
                                    <div class="progName">
                                        <h5 style="direction: rtl;">ا.د /علاء الدين حسين مصطفى</h5>
                                    </div>
                                    <div class="progPresenter">
                                        <p class="presenterName" style="direction: rtl;">عميد كلية الطب البيطرى</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="progTime" style="direction: rtl;"><img
                                        src="{{asset('uploads/frontend/images/leaders/member_photo.png')}}"
                                        style="width: 150px; height: 124px;"/></div>
                                <div class="progInfo">
                                    <div class="progName">
                                        <h5 style="direction: rtl;">أ.د/ محمود سعد ابو سكين</h5>
                                    </div>
                                    <div class="progPresenter">
                                        <p class="presenterName" style="direction: rtl;">وكيل معهد الدراسات البيئية
                                            للدراسات العليا</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="progTime" style="direction: rtl;">
                                    <img
                                        src="{{asset('uploads/frontend/images/leaders/member_photo.png')}}"
                                        style="width: 150px; height: 124px;"/>
                                </div>
                                <div class="progInfo">
                                    <div class="progName">
                                        <h5 style="direction: rtl;">أ.د/ محمد أبو طالب محمد أبو طالب</h5>
                                    </div>
                                    <div class="progPresenter">
                                        <p class="presenterName" style="direction: rtl;">وكيل كلية السياحة والفنادق
                                            لشئون الدراسات العليا</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="progTime" style="direction: rtl;"><img
                                        src="{{asset('uploads/frontend/images/leaders/member_photo.png')}}"
                                        style="width: 150px; height: 124px;"/>
                                </div>
                                <div class="progInfo">
                                    <div class="progName">
                                        <h5 style="direction: rtl;">أ.د/ أحمد إبراهيم عزب</h5>
                                    </div>
                                    <div class="progPresenter">
                                        <p class="presenterName" style="direction: rtl;">عميد كلية التربية الرياضية</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="progTime" style="direction: rtl;"><img
                                        src="{{asset('uploads/frontend/images/leaders/member_photo.png')}}"
                                        style="width: 150px; height: 124px;"/>
                                </div>
                                <div class="progInfo">
                                    <div class="progName">
                                        <h5 style="direction: rtl;">م / ماهر شحاتة</h5>
                                    </div>
                                    <div class="progPresenter">
                                        <p class="presenterName" style="direction: rtl;">مدير عام العلاقات الثقافية</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="progTime" style="direction: rtl;"><img
                                        src="{{asset('uploads/frontend/images/leaders/member_photo.png')}}"
                                        style="width: 150px; height: 124px;"/>
                                </div>
                                <div class="progInfo">
                                    <div class="progName">
                                        <h5 style="direction: rtl;">أ./ طارق عبد الحميد عبد البارى</h5>
                                    </div>
                                    <div class="progPresenter">
                                        <p class="presenterName" style="direction: rtl;"> مدير عام الدراسات العليا
                                            والبحوث
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h3 style="direction: rtl;">سكرتارية المجلس</h3>
                        <div class="row">
                            <div class="col">
                                <div class="progTime" style="direction: rtl;"><img
                                        src="{{asset('uploads/frontend/images/leaders/member_photo.png')}}"
                                        style="width: 150px; height: 124px;"/>
                                </div>
                                <div class="progInfo">
                                    <div class="progName">
                                        <h4 style="direction: rtl;">أ./محمد حمدى طاحون</h4>
                                    </div>
                                    <div class="progPresenter">
                                        <p class="presenterName" style="direction: rtl;">سكرتير المجلس</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>


                </div>

            </div>


        </div>
    </div>
    {{--------------------------End of section 3 (postgraduate word & council) ----------------------------}}




    {{--------------------------End of section 4 (Vice Rector's Office) -------------------------------}}
    <div class="university_council text-center pb-5 pt-2" id="rector_office">
        <div class="container pb-5 pt-1">
            <img class="mb-4" src="{{asset('uploads/frontend/images/12.png')}}" alt=""/>
            <h2 class="fw-bold main-title">@lang('site.Vice_Rector\'s_Office')</h2>
            <p class="text-black-50 mb-5">

            <div class="progInfo">
                <div class="progName">
                    <h4 style="direction: rtl;">د / منال صابر حمزة</h4>
                </div>
                <div class="progPresenter">
                    <p class="presenterName" style="direction: rtl;">مدير مكتب نائب رئيس الجامعة للدراسات العليا والبحث
                        العلمى</p>
                </div>
            </div>
            <div class="progTime" style="direction: rtl;"><img
                    src="http://pic.usc.edu.eg/usc/index.php?&amp;src=&amp;w=150&amp;h=124&amp;iar=1"
                    height="124"/>
            </div>
            <br><br>

            <div class="row">
                <div class="col-md-3">
                    <div class="progInfo">
                        <div class="progName">
                            <h4 style="direction: rtl;">أ / كريم عادل حسين</h4>
                        </div>
                        <div class="progPresenter">
                            <p class="presenterName" style="direction: rtl;">أخصائى علاقات عامة</p>
                        </div>
                    </div>
                    <div class="progTime" style="direction: rtl;"><img
                            src="http://pic.usc.edu.eg/usc/index.php?&amp;src=&amp;w=150&amp;h=124&amp;iar=1"
                            height="124"/>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="progInfo">
                        <div class="progName">
                            <h4 style="direction: rtl;">السيد / إبراهيم محمد إبراهيم</h4>
                        </div>
                        <div class="progPresenter">
                            <p class="presenterName" style="direction: rtl;">الســائق</p>
                        </div>
                    </div>
                    <div class="progTime" style="direction: rtl;"><img
                            src="http://pic.usc.edu.eg/usc/index.php?&amp;src=&amp;w=150&amp;h=124&amp;iar=1"
                            height="124"/>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="progInfo">
                        <div class="progName">
                            <h4 style="direction: rtl;">السيد / سعد فتحى شلبى</h4>
                        </div>
                        <div class="progPresenter">
                            <p class="presenterName" style="direction: rtl;">عامل خدمات</p>
                        </div>
                    </div>
                    <div class="progTime" style="direction: rtl;"><img
                            src="http://pic.usc.edu.eg/usc/index.php?&amp;src=&amp;w=150&amp;h=124&amp;iar=1"
                            height="124"/>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="progInfo">
                        <div class="progName">
                            <h4 style="direction: rtl;">السيدة / مشيرة محمود حمد</h4>
                        </div>
                        <div class="progPresenter">
                            <p class="presenterName" style="direction: rtl;">عاملة خدمات</p>
                        </div>
                    </div>
                    <div class="progTime" style="direction: rtl;"><img
                            src="http://pic.usc.edu.eg/usc/index.php?&amp;src=&amp;w=150&amp;h=124&amp;iar=1"
                            height="124"/>
                    </div>
                </div>
            </div>
        </div>


        <div class="d-flex justify-content-center mt-5">
            <a class="btn rounded-pill main-btn-dark text-uppercase" href="#">Visit Site</a>
        </div>
    </div>
    {{--------------------------End of section 4 (Vice Rector's Office) -- ----------------------------}}



    <div class="spikes"></div>



    {{--------------------------Start of section 5 (Vice Rector's History) --------------------------}}
    <div class="university_history" id="university_history">
        <h2 class="main-title">@lang('site.postgraduate_vice_rector_history')</h2>

        <div class="container">
            <div class="row justify-content-md-center">

                <div class="col-xs-12 col-lg-10 align-content-center">

                    <p>@lang('site.postgraduate_vice_rector_histories')</p>

                    <h2>@lang('site.postgraduate_vice_rector_history_members')</h2>
                    <ul>
                        <li class="pb-2">- أ.د /
                            مثال <span>@lang('site.from') Jan 17, 2022 @lang('site.to') Jan 17, 2022 </span>
                        </li>
                        <li class="pb-2">- أ.د / مثال
                            <span>@lang('site.from') Jan 17, 2022 @lang('site.to') Jan 17, 2022 </span>
                        </li>
                        <li class="pb-2">- أ.د / مثال
                            <span>@lang('site.from') Jan 17, 2022 @lang('site.to') Jan 17, 2022 </span>
                        </li>
                        <li class="pb-2">- أ.د / مثال
                            <span>@lang('site.from') Jan 17, 2022 @lang('site.to') Jan 17, 2022 </span>
                        </li>
                        <li class="pb-2">- أ.د / مثال
                            <span>@lang('site.from') Jan 17, 2022 @lang('site.to') Jan 17, 2022 </span>
                        </li>
                    </ul>
                </div>

            </div>


        </div>
    </div>
    {{--------------------------End of section 5 (Vice Rector's History) ----------------------------}}





    {{--------------------     Start of section 6 (Sub Department) -----------------------------------}}

    <div class="privacy_policy" id="privacy_policy">
        <h2>@lang('site.sub_departments')</h2>
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col col-lg-10 align-content-center p-0">
                    <div class="box">
                        <div class="d-flex align-items-start justify-content-start">
                            <div class="col-md-3 nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                                 aria-orientation="vertical">
                                <button class="nav-link active fw-bold" id="v-pills-home-tab" data-bs-toggle="pill"
                                        data-bs-target="#v-pills-home" type="button" role="tab"
                                        aria-controls="v-pills-home"
                                        aria-selected="true">@lang('site.postgraduate_sub_department_1')
                                </button>
                                <button class="nav-link fw-bold" id="v-pills-profile-tab" data-bs-toggle="pill"
                                        data-bs-target="#v-pills-profile" type="button" role="tab"
                                        aria-controls="v-pills-profile"
                                        aria-selected="false">@lang('site.postgraduate_sub_department_2')
                                </button>
                                <button class="nav-link fw-bold" id="v-pills-messages-tab" data-bs-toggle="pill"
                                        data-bs-target="#v-pills-messages" type="button" role="tab"
                                        aria-controls="v-pills-messages"
                                        aria-selected="false">@lang('site.postgraduate_sub_department_3')
                                </button>

                            </div>
                            <div class="col-md-9 tab-content" id="v-pills-tabContent">
                                <div class="tab-pane fade show fw-bold active" id="v-pills-home" role="tabpanel"
                                     aria-labelledby="v-pills-home-tab" tabindex="0">
									 
									 
									     <div class="box">
                        <ul class="s_ul nav nav-tabs pt-3 " id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link fw-bold active" id="home-tab" data-bs-toggle="tab"
                                        data-bs-target="#home-tab-pane" type="button" role="tab"
                                        aria-controls="home-tab-pane"
                                        aria-selected="true">درجة الدكتوراه
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link fw-bold" id="mission-tab" data-bs-toggle="tab"
                                        data-bs-target="#mission-tab-pane" type="button" role="tab"
                                        aria-controls="mission-tab-pane"
                                        aria-selected="false">درجة الماجستير
                                </button>
                            </li>
                            <li class="nav-item fw-bold" role="presentation">
                                <button class="nav-link" id="values-tab" data-bs-toggle="tab"
                                        data-bs-target="#values-tab-pane" type="button" role="tab"
                                        aria-controls="values-tab-pane"
                                        aria-selected="false">الدبلومات
                                </button>
                            </li>
                             
                            <!--    <li class="nav-item" role="presentation">
                                <button class="nav-link fw-bold" id="strategic_objectives-tab" data-bs-toggle="tab"
                                        data-bs-target="#strategic_objectives-tab-pane" type="button" role="tab"
                                        aria-controls="strategic_objectives-tab-pane"
                                        aria-selected="false">@lang('site.strategic_objectives'):
                                </button>
                            </li>   -->
                        </ul>
                        <div class="s-tabs py-3 tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel"
                                 aria-labelledby="home-tab"
                                 tabindex="0">
								 
								 <h3 style="text-align: center; color: rgb(28, 120, 133); font-size: 24px;"><span style="color: rgb(87, 87, 87);font-size: 1em;"><strong>درجة الدكتوراه</strong></span></h3>
<div style="text-align: right; color: rgb(51, 51, 51); font-size: 16px;"><br></div>
<h2 dir="RTL" style="text-align: right; color: rgb(33, 153, 170); font-size: 1.375em;"><span style="color: rgb(87, 87, 87);font-size: 1em;"><span style="color: rgb(0, 128, 128);font-size: 1em;"><strong>أولا :- كلية الطب البيطري</strong></span></span></h2>
<h3 dir="RTL" style="text-align: right; color: rgb(51, 51, 51); font-size: 24px;"><span style="color: rgb(87, 87, 87);font-size: 1em;"><strong>درجة دكتوراه الفلسفة في العلوم الطبية البيطرية وتشمل التخصصات الآتية</strong></span></h3>
<ul style="text-align: start;color: rgb(51, 51, 51);font-size: 16px;">
    <li style="list-style-type: square; text-align: right;"><span style="color: rgb(87, 87, 87);font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 16px;">التشريح و الأجنة</span></span></li>
    <li style="list-style-type: square; text-align: right;"><span style="color: rgb(87, 87, 87);font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 16px;">الهستولوجيا</span></span></li>
    <li style="list-style-type: square; text-align: right;"><span style="color: rgb(87, 87, 87);font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 16px;">الكيمياء الحيوية و كيمياء التغذية</span></span></li>
    <li style="list-style-type: square; text-align: right;"><span style="color: rgb(87, 87, 87);font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 16px;">الفسيولوجيا</span></span></li>
    <li style="list-style-type: square; text-align: right;"><span style="color: rgb(87, 87, 87);font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 16px;">سلوكيات الحيوان و رعايته</span></span></li>
    <li style="list-style-type: square; text-align: right;"><span style="color: rgb(87, 87, 87);font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 16px;">الباثولوجي</span></span></li>
    <li style="list-style-type: square; text-align: right;"><span style="color: rgb(87, 87, 87);font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 16px;">التغذية و التغذية الإكلينيكية</span></span></li>
    <li style="list-style-type: square; text-align: right;"><span style="color: rgb(87, 87, 87);font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 16px;">الطفيليات</span></span></li>
    <li style="list-style-type: square; text-align: right;"><span style="color: rgb(87, 87, 87);font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 16px;">الفيروسات</span></span></li>
    <li style="list-style-type: square; text-align: right;"><span style="color: rgb(87, 87, 87);font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 16px;">البكتريا و الفطريات و المناعة</span></span></li>
    <li style="list-style-type: square; text-align: right;"><span style="color: rgb(87, 87, 87);font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 16px;">الأدوية</span></span></li>
    <li style="list-style-type: square; text-align: right;"><span style="color: rgb(87, 87, 87);font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 16px;">الباثولوجيا الإكلينيكية</span></span></li>
    <li style="list-style-type: square; text-align: right;"><span style="color: rgb(87, 87, 87);font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 16px;">الرقابة الصحية على الألبان و منتجاتها</span></span></li>
    <li style="list-style-type: square; text-align: right;"><span style="color: rgb(87, 87, 87);font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 16px;">الرقابة الصحية على اللحوم و منتجاتها و المخلفات الحيوانية</span></span></li>
    <li style="list-style-type: square; text-align: right;"><span style="color: rgb(87, 87, 87);font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 16px;">الطب الشرعي</span></span></li>
    <li style="list-style-type: square; text-align: right;"><span style="color: rgb(87, 87, 87);font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 16px;">صحة الحيوان و البيئة</span></span></li>
    <li style="list-style-type: square; text-align: right;"><span style="color: rgb(87, 87, 87);font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 16px;">الأمراض المشتركة</span></span></li>
    <li style="list-style-type: square; text-align: right;"><span style="color: rgb(87, 87, 87);font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 16px;">&nbsp;الأمراض الباطنة</span></span></li>
    <li style="list-style-type: square; text-align: right;"><span style="color: rgb(87, 87, 87);font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 16px;">الأمراض المعدية</span></span></li>
    <li style="list-style-type: square; text-align: right;"><span style="color: rgb(87, 87, 87);font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 16px;">طب و رعاية الأحياء المائية</span></span></li>
    <li style="list-style-type: square; text-align: right;"><span style="color: rgb(87, 87, 87);font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 16px;">التوليد و التناسل و التلقيح الاصطناعي</span></span></li>
    <li style="list-style-type: square; text-align: right;"><span style="color: rgb(87, 87, 87);font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 16px;">الجراحة البيطرية</span></span></li>
    <li style="list-style-type: square; text-align: right;"><span style="color: rgb(87, 87, 87);font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 16px;">أمراض الدواجن و الأرانب</span></span></li>
    <li style="list-style-type: square; text-align: right;"><span style="color: rgb(87, 87, 87);font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 16px;">الوراثة البيطرية و الهندسة الوراثية</span></span></li>
    <li style="list-style-type: square; text-align: right;"><span style="color: rgb(87, 87, 87);font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 16px;">رعاية و إنتاج الحيوان و الدواجن</span></span></li>
    <li style="list-style-type: square; text-align: right;"><span style="color: rgb(87, 87, 87);font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 16px;">الاقتصاد البيطري و إدارة المزارع الحيوان</span></span></li>
</ul>
<h2 dir="RTL" style="text-align: right; color: rgb(33, 153, 170); font-size: 1.375em;"><span style="color: rgb(87, 87, 87);font-size: 1em;"><span style="color: rgb(0, 128, 128);font-size: 1em;"><strong>ثانيا:- معهد الدراسات والبحوث البيئية</strong></span></span></h2>
<h3 dir="RTL" style="text-align: right; color: rgb(51, 51, 51); font-size: 24px;"><span style="color: rgb(87, 87, 87);font-size: 1em;"><strong>درجة دكتوراه الفلسفة في العلوم البيئية</strong></span></h3>
<ol style="text-align: start;color: rgb(51, 51, 51);font-size: 16px;">
    <li dir="RTL" style="list-style-type: square;">
        <p style="text-align: right; color: rgb(87, 87, 87); font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 16px;">العلوم الكيميائية</span></span></p>
    </li>
    <li dir="RTL" style="list-style-type: square;">
        <p style="text-align: right; color: rgb(87, 87, 87); font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 16px;">العلوم الزراعية</span></span></p>
    </li>
    <li dir="RTL" style="list-style-type: square;">
        <p style="text-align: right; color: rgb(87, 87, 87); font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 16px;">العلوم البيولوجية</span></span></p>
    </li>
    <li dir="RTL" style="list-style-type: square;">
        <p style="text-align: right; color: rgb(87, 87, 87); font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 16px;">العلوم التكنولوجية</span></span></p>
    </li>
    <li dir="RTL" style="list-style-type: square;">
        <p style="text-align: right; color: rgb(87, 87, 87); font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 16px;">العلوم الجيولوجية</span></span></p>
    </li>
    <li dir="RTL" style="list-style-type: square;">
        <p style="text-align: right; color: rgb(87, 87, 87); font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 16px;">العلوم الصحية والصيدلة</span></span></p>
    </li>
    <li dir="RTL" style="list-style-type: square;">
        <p style="text-align: right; color: rgb(87, 87, 87); font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 16px;">العلوم الفيزيقية</span></span></p>
    </li>
    <li dir="RTL" style="list-style-type: square;">
        <p style="text-align: right; color: rgb(87, 87, 87); font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 16px;">علوم المواد</span></span></p>
    </li>
    <li dir="RTL" style="list-style-type: square;">
        <p style="text-align: right; color: rgb(87, 87, 87); font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 16px;">الدراسات التجارية والإدارية</span></span></p>
    </li>
    <li dir="RTL" style="list-style-type: square;">
        <p style="text-align: right; color: rgb(87, 87, 87); font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 16px;">الدراسات التربوية والإنسانية</span></span></p>
    </li>
</ol>
<p dir="RTL" style="text-align: right; color: rgb(87, 87, 87); font-size: 16px;"><span style="color: rgb(87, 87, 87);font-size: 1em;"><strong>وذلك بكل من أقسام المعهد الثلاث .....</strong></span></p>
<p style="text-align: right; color: rgb(87, 87, 87); font-size: 16px;">&nbsp;</p>
<h2 dir="RTL" style="text-align: right; color: rgb(33, 153, 170); font-size: 1.375em;"><span style="color: rgb(87, 87, 87);font-size: 1em;"><span style="color: rgb(0, 128, 128);font-size: 1em;"><strong>ثالثا:- كلية التربية</strong></span></span></h2>
<h3 dir="RTL" style="text-align: right; color: rgb(51, 51, 51); font-size: 24px;"><span style="color: rgb(87, 87, 87);font-size: 1em;"><strong>درجة دكتوراه الفلسفة في التربية وتشمل التخصصات الآتية :-</strong></span></h3>
<ol style="text-align: start;color: rgb(51, 51, 51);font-size: 16px;">
    <li dir="RTL" style="list-style-type: square;">
        <p style="text-align: right; color: rgb(87, 87, 87); font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 16px;">أصول التربية</span></span></p>
    </li>
    <li dir="RTL" style="list-style-type: square;">
        <p style="text-align: right; color: rgb(87, 87, 87); font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 16px;">التربية المقارنة والإدارة التعليمية</span></span></p>
    </li>
    <li dir="RTL" style="list-style-type: square;">
        <p style="text-align: right; color: rgb(87, 87, 87); font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 16px;">طرق تدريس مادة التخصص</span></span></p>
    </li>
    <li dir="RTL" style="list-style-type: square;">
        <p style="text-align: right; color: rgb(87, 87, 87); font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 16px;">تخطيط وتطوير المناهج</span></span></p>
    </li>
    <li dir="RTL" style="list-style-type: square;">
        <p style="text-align: right; color: rgb(87, 87, 87); font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 16px;">تكنولوجيا التعليم</span></span></p>
    </li>
    <li dir="RTL" style="list-style-type: square;">
        <p style="text-align: right; color: rgb(87, 87, 87); font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 16px;">علم النفس التربوي</span></span></p>
    </li>
    <li dir="RTL" style="list-style-type: square;">
        <p style="text-align: right; color: rgb(87, 87, 87); font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 16px;">الصحة النفسية</span></span></p>
    </li>
    <li dir="RTL" style="list-style-type: square;">
        <p style="text-align: right; color: rgb(87, 87, 87); font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 16px;">تربية الطفل</span></span></p>
    </li>
</ol>
<p style="text-align: right; color: rgb(87, 87, 87); font-size: 16px;">&nbsp;</p>
<h2 dir="RTL" style="text-align: right; color: rgb(33, 153, 170); font-size: 1.375em;"><span style="color: rgb(87, 87, 87);font-size: 1em;"><span style="color: rgb(0, 128, 128);font-size: 1em;"><strong>رابعا :- كلية السياحة والفنادق</strong></span></span></h2>
<h3 dir="RTL" style="text-align: right; color: rgb(51, 51, 51); font-size: 24px;"><span style="color: rgb(87, 87, 87);font-size: 1em;"><strong>درجة دكتوراه الفلسفة في</strong></span></h3>
<ol style="text-align: start;color: rgb(51, 51, 51);font-size: 16px;">
    <li dir="RTL" style="list-style-type: square;">
        <p style="text-align: right; color: rgb(87, 87, 87); font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 16px;">الإرشاد السياحى</span></span></p>
    </li>
    <li dir="RTL" style="list-style-type: square;">
        <p style="text-align: right; color: rgb(87, 87, 87); font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 16px;">الدراسات السياحية</span></span></p>
    </li>
    <li dir="RTL" style="list-style-type: square;">
        <p style="text-align: right; color: rgb(87, 87, 87); font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 16px;">الدراسات الفندقية</span></span></p>
    </li>
</ol>
<p dir="RTL" style="text-align: right; color: rgb(87, 87, 87); font-size: 16px;">&nbsp;</p>
<h2 dir="RTL" style="text-align: right; color: rgb(33, 153, 170); font-size: 1.375em;"><span style="color: rgb(87, 87, 87);font-size: 1em;"><span style="color: rgb(0, 128, 128);font-size: 1em;"><strong>خامسا:- كلية التربية الرياضية</strong></span></span></h2>
<h3 dir="RTL" style="text-align: right; color: rgb(51, 51, 51); font-size: 24px;"><span style="color: rgb(87, 87, 87);font-size: 1em;"><strong>درجة دكتوراه الفلسفة في التربية الرياضية</strong></span></h3>
<h3 style="text-align: right; color: rgb(51, 51, 51); font-size: 24px;">&nbsp;</h3>
<h2 dir="RTL" style="text-align: right; color: rgb(33, 153, 170); font-size: 1.375em;"><span style="color: rgb(87, 87, 87);font-size: 1em;"><span style="color: rgb(0, 128, 128);font-size: 1em;"><strong>سادسا:- كلية الحقوق</strong></span></span></h2>
<h3 dir="RTL" style="text-align: right; color: rgb(51, 51, 51); font-size: 24px;"><span style="color: rgb(87, 87, 87);font-size: 1em;"><strong>درجة دكتوراه الفلسفة في :-</strong></span></h3>
<ol style="text-align: start;color: rgb(51, 51, 51);font-size: 16px;">
    <li dir="RTL" style="list-style-type: square;">
        <p style="text-align: right; color: rgb(87, 87, 87); font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 16px;">القانون العام</span></span></p>
    </li>
    <li dir="RTL" style="list-style-type: square;">
        <p style="text-align: right; color: rgb(87, 87, 87); font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 16px;">&nbsp;القانون الخاص</span></span></p>
    </li>
</ol>
<p dir="RTL" style="text-align: right; color: rgb(87, 87, 87); font-size: 16px;">&nbsp;</p>
<h2 dir="RTL" style="text-align: right; color: rgb(33, 153, 170); font-size: 1.375em;"><span style="color: rgb(87, 87, 87);font-size: 1em;"><span style="color: rgb(0, 128, 128);font-size: 1em;"><strong>سابعا:- كلية التجارة</strong></span></span></h2>
<p dir="RTL" style="text-align: right; color: rgb(87, 87, 87); font-size: 16px;"><span style="color: rgb(87, 87, 87);font-size: 1em;"><strong>درجة دكتوراه الفلسفة في العلوم التجارية وتشمل التخصصات الآتية:-</strong></span></p>
<ol style="text-align: start;color: rgb(51, 51, 51);font-size: 16px;">
    <li dir="RTL" style="list-style-type: square;">
        <p style="text-align: right; color: rgb(87, 87, 87); font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 16px;">المحاسبة</span></span></p>
    </li>
    <li dir="RTL" style="list-style-type: square;">
        <p style="text-align: right; color: rgb(87, 87, 87); font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 16px;">إدارة الأعمال</span></span></p>
    </li>
    <li dir="RTL" style="list-style-type: square;">
        <p style="text-align: right; color: rgb(87, 87, 87); font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 16px;">اقتصاد</span></span></p>
    </li>
    <li dir="RTL" style="list-style-type: square;">
        <p style="text-align: right; color: rgb(87, 87, 87); font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 16px;">تامين</span></span></p>
    </li>
    <li dir="RTL" style="list-style-type: square;">
        <p style="text-align: right; color: rgb(87, 87, 87); font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 16px;">إحصاء</span></span></p>
    </li>
</ol>
<p style="text-align: right; color: rgb(87, 87, 87); font-size: 16px;">&nbsp;</p>
<h2 dir="RTL" style="text-align: right; color: rgb(33, 153, 170); font-size: 1.375em;"><span style="color: rgb(87, 87, 87);font-size: 1em;"><span style="color: rgb(0, 128, 128);font-size: 1em;"><strong>ثامنا:- معهد بحوث الهندسة الوراثية والتكنولوجيا الحيوية</strong></span></span></h2>
<h3 dir="RTL" style="text-align: right; color: rgb(51, 51, 51); font-size: 24px;"><span style="color: rgb(87, 87, 87);font-size: 1em;"><strong>يمنح معهد بحوث الهندسة الوراثية والتكنولوجيا درجة دكتوراه في الأقسام العلمية بالتخصصات التي تتبعها الآتية :-</strong></span></h3>
<ol style="text-align: start;color: rgb(51, 51, 51);font-size: 16px;">
    <li dir="RTL" style="list-style-type: square;">
        <p style="text-align: right; color: rgb(87, 87, 87); font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 16px;">الميكروبيولوجيا الجزيئية</span></span></p>
    </li>
    <li dir="RTL" style="list-style-type: square;">
        <p style="text-align: right; color: rgb(87, 87, 87); font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 16px;">الطفيليات&nbsp;الجزيئية</span></span></p>
    </li>
    <li dir="RTL" style="list-style-type: square;">
        <p style="text-align: right; color: rgb(87, 87, 87); font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 16px;">المناعة ا لجزيئية</span></span></p>
    </li>
    <li dir="RTL" style="list-style-type: square;">
        <p style="text-align: right; color: rgb(87, 87, 87); font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 16px;">الباثولوجيا الجزيئية</span></span></p>
    </li>
    <li dir="RTL" style="list-style-type: square;">
        <p style="text-align: right; color: rgb(87, 87, 87); font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 16px;">البيولوجيا الجزيئية للخلية</span></span></p>
    </li>
    <li dir="RTL" style="list-style-type: square;">
        <p style="text-align: right; color: rgb(87, 87, 87); font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 16px;">الوراثة والوراثة الخلوية الجزيئية</span></span></p>
    </li>
    <li dir="RTL" style="list-style-type: square;">
        <p style="text-align: right; color: rgb(87, 87, 87); font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 16px;">التقسيم الجزيئي&nbsp;</span></span></p>
    </li>
    <li dir="RTL" style="list-style-type: square;">
        <p style="text-align: right; color: rgb(87, 87, 87); font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 16px;">التطور الجزيئي&nbsp;</span></span></p>
    </li>
    <li dir="RTL" style="list-style-type: square;">
        <p style="text-align: right; color: rgb(87, 87, 87); font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 16px;">الحشرات الجزيئية</span></span></p>
    </li>
    <li dir="RTL" style="list-style-type: square;">
        <p style="text-align: right; color: rgb(87, 87, 87); font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 16px;">بيولوجيا السرطان الجزيئية</span></span></p>
    </li>
    <li dir="RTL" style="list-style-type: square;">
        <p style="text-align: right; color: rgb(87, 87, 87); font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 16px;">الهندسة النسيجية</span></span></p>
    </li>
    <li dir="RTL" style="list-style-type: square;">
        <p style="text-align: right; color: rgb(87, 87, 87); font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 16px;">الوراثة البشرية الجزيئية</span></span></p>
    </li>
    <li dir="RTL" style="list-style-type: square;">
        <p style="text-align: right; color: rgb(87, 87, 87); font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 16px;">الجينومات</span></span></p>
    </li>
    <li dir="RTL" style="list-style-type: square;">
        <p style="text-align: right; color: rgb(87, 87, 87); font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 16px;">البيوتكنولوجيا الميكروبية</span></span></p>
    </li>
    <li dir="RTL" style="list-style-type: square;">
        <p style="text-align: right; color: rgb(87, 87, 87); font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 16px;">زراعة الخلايا والأنسجة والأعضاء النباتية</span></span></p>
    </li>
    <li dir="RTL" style="list-style-type: square;">
        <p style="text-align: right; color: rgb(87, 87, 87); font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 16px;">النباتات المحورة وراثيا</span></span></p>
    </li>
    <li dir="RTL" style="list-style-type: square;">
        <p style="text-align: right; color: rgb(87, 87, 87); font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 16px;">بيوتكنولوجيا المحاصيل البستانية</span></span></p>
    </li>
    <li dir="RTL" style="list-style-type: square;">
        <p style="text-align: right; color: rgb(87, 87, 87); font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 16px;">بيوتكنولوجيا محاصيل الحقل</span></span></p>
    </li>
    <li dir="RTL" style="list-style-type: square;">
        <p style="text-align: right; color: rgb(87, 87, 87); font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 16px;">بيوتكنولوجيا البذور</span></span></p>
    </li>
    <li dir="RTL" style="list-style-type: square;">
        <p style="text-align: right; color: rgb(87, 87, 87); font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 16px;">الحيوانات المولفة وراثيا</span></span></p>
    </li>
    <li dir="RTL" style="list-style-type: square;">
        <p style="text-align: right; color: rgb(87, 87, 87); font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 16px;">زراعة الخلايا والأنسجة الحيوانية</span></span></p>
    </li>
    <li dir="RTL" style="list-style-type: square;">
        <p style="text-align: right; color: rgb(87, 87, 87); font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 16px;">تقنيات التكاثر ( التلقيح الصناعي - الإخصاب المعملي - نقل الأجنة - الاستنساخ)</span></span></p>
    </li>
    <li dir="RTL" style="list-style-type: square;">
        <p style="text-align: right; color: rgb(87, 87, 87); font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 16px;">بيوتكنولوجيا الأحياء المائية</span></span></p>
    </li>
    <li dir="RTL" style="list-style-type: square;">
        <p style="text-align: right; color: rgb(87, 87, 87); font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 16px;">التخمرات</span></span></p>
    </li>
    <li dir="RTL" style="list-style-type: square;">
        <p style="text-align: right; color: rgb(87, 87, 87); font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 16px;">الصناعات الدوائية</span></span></p>
    </li>
    <li dir="RTL" style="list-style-type: square;">
        <p style="text-align: right; color: rgb(87, 87, 87); font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 16px;">بيوتكنولوجيا الأغذية والألبان</span></span></p>
    </li>
    <li dir="RTL" style="list-style-type: square;">
        <p style="text-align: right; color: rgb(87, 87, 87); font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 16px;">التلوث البيئي</span></span></p>
    </li>
    <li dir="RTL" style="list-style-type: square;">
        <p style="text-align: right; color: rgb(87, 87, 87); font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 16px;">السمية الوراثية</span></span></p>
    </li>
    <li dir="RTL" style="list-style-type: square;">
        <p style="text-align: right; color: rgb(87, 87, 87); font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 16px;">المعالجة البيولوجية للمخلفات والإصحاح البيئي&nbsp;</span></span></p>
    </li>
    <li dir="RTL" style="list-style-type: square;">
        <p style="text-align: right; color: rgb(87, 87, 87); font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 16px;">الهدم الحيوي</span></span></p>
    </li>
    <li dir="RTL" style="list-style-type: square;">
        <p style="text-align: right; color: rgb(87, 87, 87); font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 16px;">المخصبات الحيوية</span></span></p>
    </li>
    <li dir="RTL" style="list-style-type: square;">
        <p style="text-align: right; color: rgb(87, 87, 87); font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 16px;">المكافحة الحيوية</span></span></p>
    </li>
    <li dir="RTL" style="list-style-type: square;">
        <p style="text-align: right; color: rgb(87, 87, 87); font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 16px;">المشخصات الجزيئية</span></span></p>
    </li>
    <li dir="RTL" style="list-style-type: square;">
        <p style="text-align: right; color: rgb(87, 87, 87); font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 16px;">المعلوماتية الحيوية</span></span></p>
    </li>
    <li dir="RTL" style="list-style-type: square;">
        <p style="text-align: right; color: rgb(87, 87, 87); font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 16px;">قسم البيوتكنولوجيا الاجتماعية</span></span></p>
    </li>
</ol>
<p dir="RTL" style="text-align: right; color: rgb(87, 87, 87); font-size: 16px;">&nbsp;</p>
								 
								 
								 
								 
                            </div>
                            <div class="tab-pane fade" id="mission-tab-pane" role="tabpanel"
                                 aria-labelledby="mission-tab"
                                 tabindex="0">
								 
								 <h3 style="text-align: center; color: rgb(28, 120, 133); font-size: 24px;"><span style="color: rgb(87, 87, 87);font-size: 1em;">درجة الماجستير</span></h3>
<div style="text-align: right; color: rgb(51, 51, 51); font-size: 16px;"><br></div>
<p style="text-align: right; color: rgb(87, 87, 87); font-size: 16px;"><strong><strong><span style="color: rgb(87, 87, 87);font-size: 18px;"><span style="color: rgb(0, 128, 128);font-size: 1em;"><span dir="RTL" style="color: rgb(87, 87, 87);font-size: 1em;">أولا :- كلية الطب البيطري</span></span></span></strong></strong></p>
<ul style="text-align: start;color: rgb(51, 51, 51);font-size: 16px;">
    <li dir="rtl" style="list-style-type: square; text-align: right;"><strong><strong>درجة الماجستير في العلوم الطبية البيطرية</strong></strong><br><br>وتشمل التخصصات الآتية (التشريح و الأجنة&nbsp;- &nbsp;الهستولوجيا - الكيمياء الحيوية و كيمياء التغذية - الفسيولوجيا -سلوكيات الحيوان و رعايته - الباثولوجي - التغذية و التغذية الإكلينيكية &ndash; الطفيليات - الفيروسات - البكتريا و الفطريات و المناعة &ndash; الأدوية - الباثولوجيا الإكلينيكية - الرقابة الصحية على الألبان و منتجاتها - الرقابة الصحية على اللحوم و منتجاتها و المخلفات الحيوانية - الطب الشرعي - صحة الحيوان و البيئة - الأمراض المشتركة - الأمراض الباطنة - الأمراض المعدية - طب و رعاية الأحياء المائية - التوليد و التناسل و التلقيح الاصطناعي - الجراحة البيطرية - أمراض الدواجن و الأرانب - الوراثة البيطرية و الهندسة الوراثية - رعاية و إنتاج الحيوان و الدواجن - الاقتصاد البيطري و إدارة المزارع الحيوان).<br>&nbsp;</li>
</ul>
<p style="text-align: right; color: rgb(87, 87, 87); font-size: 16px;"><strong><strong><span style="color: rgb(87, 87, 87);font-size: 18px;"><span style="color: rgb(0, 128, 128);font-size: 1em;"><span dir="RTL" style="color: rgb(87, 87, 87);font-size: 1em;">ثانيا:- معهد الدراسات والبحوث البيئية</span></span></span></strong></strong></p>
<ul style="text-align: start;color: rgb(51, 51, 51);font-size: 16px;">
    <li dir="RTL" style="list-style-type: square; text-align: right;"><strong><strong>درجة الماجستير في العلوم البيئية</strong></strong><br><br>( العلوم الكيميائية &ndash; العلوم الزراعية &ndash; العلوم البيولوجية &ndash; العلوم التكنولوجية &ndash; العلوم الجيولوجية &ndash; العلوم الصحية والصيدلة &ndash; العلوم الفيزيقية &ndash; علوم المواد &ndash; الدراسات التجارية والإدارية &ndash; الدراسات التربوية والإنسانية) وذلك بكل من أقسام المعهد الثلاث.<br>&nbsp;</li>
</ul>
<p style="text-align: right; color: rgb(87, 87, 87); font-size: 16px;"><strong><strong><span style="color: rgb(87, 87, 87);font-size: 18px;"><span style="color: rgb(0, 128, 128);font-size: 1em;"><span dir="RTL" style="color: rgb(87, 87, 87);font-size: 1em;">ثالثا:- كلية التربية</span></span></span></strong></strong></p>
<ul style="text-align: start;color: rgb(51, 51, 51);font-size: 16px;">
    <li dir="RTL" style="list-style-type: square; text-align: right;"><strong><strong>درجة الماجستير في التربية:-</strong></strong><br><br>وتشمل التخصصات الآتية ( أصول التربية &ndash; التربية المقارنة والإدارة التعليمية &ndash; طرق تدريس مادة التخصص &ndash; تخطيط وتطوير المناهج &ndash; تكنولوجيا التعليم &ndash; علم النفس التربوي &ndash; الصحة النفسية &ndash; تربية الطفل ).<br>&nbsp;</li>
</ul>
<p style="text-align: right; color: rgb(87, 87, 87); font-size: 16px;"><strong><strong><span style="color: rgb(87, 87, 87);font-size: 18px;"><span style="color: rgb(0, 128, 128);font-size: 1em;"><span dir="RTL" style="color: rgb(87, 87, 87);font-size: 1em;">رابعا:- كلية السياحة والفنادق</span></span></span></strong></strong></p>
<ul style="text-align: start;color: rgb(51, 51, 51);font-size: 16px;">
    <li dir="RTL" style="list-style-type: square; text-align: right;"><strong><strong>درجة الماجستير في</strong></strong></li>
</ul>
<ol style="text-align: start;color: rgb(51, 51, 51);font-size: 16px;">
    <li dir="RTL" style="list-style-type: square; text-align: right;">الإرشاد السياحي</li>
    <li dir="RTL" style="list-style-type: square; text-align: right;">الدراسات السياحية</li>
    <li dir="RTL" style="list-style-type: square; text-align: right;">الدراسات الفندقية<br>&nbsp;</li>
</ol>
<p style="text-align: right; color: rgb(87, 87, 87); font-size: 16px;"><strong><strong><span style="color: rgb(87, 87, 87);font-size: 18px;"><span style="color: rgb(0, 128, 128);font-size: 1em;"><span dir="RTL" style="color: rgb(87, 87, 87);font-size: 1em;">خامسا:- كلية التربية الرياضية</span></span></span></strong></strong></p>
<ul style="text-align: start;color: rgb(51, 51, 51);font-size: 16px;">
    <li dir="RTL" style="list-style-type: square; text-align: right;"><strong><strong>درجة الماجستير في التربية الرياضية</strong></strong><br>&nbsp;</li>
</ul>
<p style="text-align: right; color: rgb(87, 87, 87); font-size: 16px;"><strong><strong><span style="color: rgb(87, 87, 87);font-size: 18px;"><span style="color: rgb(0, 128, 128);font-size: 1em;"><span dir="RTL" style="color: rgb(87, 87, 87);font-size: 1em;">سادسا:- كلية الحقوق</span></span></span></strong></strong></p>
<ul style="text-align: start;color: rgb(51, 51, 51);font-size: 16px;">
    <li dir="RTL" style="list-style-type: square; text-align: right;"><strong><strong>درجة الماجستير في ( القانون العام &ndash; القانون الخاص )</strong></strong><br>&nbsp;</li>
</ul>
<p style="text-align: right; color: rgb(87, 87, 87); font-size: 16px;"><strong><strong><span style="color: rgb(87, 87, 87);font-size: 18px;"><span style="color: rgb(0, 128, 128);font-size: 1em;">سابعا:- كلية التجارة</span></span></strong></strong></p>
<ul style="text-align: start;color: rgb(51, 51, 51);font-size: 16px;">
    <li dir="RTL" style="list-style-type: square; text-align: right;"><strong><strong>درجة الماجستير في العلوم التجارية</strong></strong><br>وتشمل التخصصات الآتية (المحاسبة - إدارة الأعمال - اقتصاد &ndash; تامين - إحصاء)<br>&nbsp;</li>
</ul>
<p style="text-align: right; color: rgb(87, 87, 87); font-size: 16px;"><strong><strong><span style="color: rgb(0, 128, 128);font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 18px;"><span dir="RTL" style="color: rgb(87, 87, 87);font-size: 1em;">ثامنا:- معهد بحوث الهندسة الوراثية والتكنولوجيا الحيوية</span></span></span></strong></strong></p>
<p style="text-align: right; color: rgb(87, 87, 87); font-size: 16px;">يمنح معهد بحوث الهندسة الوراثية والتكنولوجيا الحيوية درجة الماجستير &nbsp;في الأقسام العلمية بالتخصصات التي تتبعها الآتية :-</p>
<p dir="RTL" style="text-align: right; color: rgb(87, 87, 87); font-size: 16px;"><strong><strong>قسم البيولوجيا الجزيئية</strong></strong><strong><strong>:</strong></strong></p>
<p style="text-align: right; color: rgb(87, 87, 87); font-size: 16px;">ويضم التخصصات الفرعية التالية :</p>
<ul style="text-align: start;color: rgb(51, 51, 51);font-size: 16px;">
    <li dir="rtl" style="list-style-type: square; text-align: right;">الميكروبيولوجيا الجزيئية- الطفيليات ا لجزيئية &ndash; المناعة ا لجزيئية &ndash; الباثولوجيا الجزيئية &ndash; البيولوجيا الجزيئية للخلية &ndash; الوراثة والوراثة الخلوية الجزيئية &ndash; التقسيم الجزيئي &nbsp;&ndash; التطور الجزيئي &nbsp;&ndash; الحشرات الجزيئية &ndash; بيولوجيا السرطان الجزيئية &ndash; الهندسة النسيجية &ndash; الوراثة البشرية الجزيئية &ndash; الجينومات .</li>
</ul>
<p dir="RTL" style="text-align: right; color: rgb(87, 87, 87); font-size: 16px;"><strong><strong>قسم البيوتكنولوجيا الميكروبية :</strong></strong></p>
<ul style="text-align: start;color: rgb(51, 51, 51);font-size: 16px;">
    <li dir="RTL" style="list-style-type: square; text-align: right;">ويضم التخصصات الفرعية التي تخدم في مجال عزل وتصنيف وحفظ وتحوير الميكروبات وراثيا وطرق استخدامها صناعيا وإعدادها للتطبيق .</li>
</ul>
<p dir="RTL" style="text-align: right; color: rgb(87, 87, 87); font-size: 16px;"><strong><strong>قسم البيوتكنولوجيا النباتية :</strong></strong></p>
<p style="text-align: right; color: rgb(87, 87, 87); font-size: 16px;">ويضم التخصصات الفرعية التالية :</p>
<ul style="text-align: start;color: rgb(51, 51, 51);font-size: 16px;">
    <li dir="rtl" style="list-style-type: square; text-align: right;">زراعة الخلايا والأنسجة والأعضاء النباتية- النباتات المحورة وراثيا- بيوتكنولوجيا المحاصيل البستانية - بيوتكنولوجيا محاصيل الحقل- بيوتكنولوجيا البذور.</li>
</ul>
<p dir="RTL" style="text-align: right; color: rgb(87, 87, 87); font-size: 16px;"><strong><strong>قسم البيوتكنولوجيا الحيوانية :</strong></strong></p>
<p style="text-align: right; color: rgb(87, 87, 87); font-size: 16px;">ويضم التخصصات الفرعية التالية :</p>
<ul style="text-align: start;color: rgb(51, 51, 51);font-size: 16px;">
    <li dir="rtl" style="list-style-type: square; text-align: right;">الحيوانات المولفة وراثيا- زراعة الخلايا والأنسجة الحيوانية- تقنيات التكاثر ( التلقيح الصناعي - الإخصاب المعملي - نقل الأجنة - الاستنساخ)- بيوتكنولوجيا الأحياء المائية .</li>
</ul>
<p dir="RTL" style="text-align: right; color: rgb(87, 87, 87); font-size: 16px;"><strong><strong>قسم البيوتكنولوجيا الصناعية :</strong></strong></p>
<p style="text-align: right; color: rgb(87, 87, 87); font-size: 16px;">ويضم التخصصات الفرعية التالية:</p>
<ul style="text-align: start;color: rgb(51, 51, 51);font-size: 16px;">
    <li dir="rtl" style="list-style-type: square; text-align: right;">التخمرات- الصناعات الدوائية- بيوتكنولوجيا الأغذية والألبان .</li>
</ul>
								 
                            </div>
                            <div class="tab-pane fade" id="values-tab-pane" role="tabpanel" aria-labelledby="values-tab"
                                 tabindex="0">
								 
								 
								 <h3 style="text-align: center; color: rgb(28, 120, 133); font-size: 24px;"><span style="color: rgb(87, 87, 87);font-size: 1em;">الدبلومات</span></h3>
<div style="text-align: right; color: rgb(51, 51, 51); font-size: 16px;"><br></div>
<p dir="RTL" style="text-align: right; color: rgb(87, 87, 87); font-size: 16px;"><strong><strong><span style="color: rgb(87, 87, 87);font-size: 18px;"><span style="color: rgb(0, 128, 128);font-size: 1em;">أولا :- كلية الطب البيطري</span></span></strong></strong></p>
<ul style="text-align: start;color: rgb(51, 51, 51);font-size: 16px;">
    <li dir="RTL" style="list-style-type: square; text-align: right;"><strong><strong>الدبلومات</strong></strong></li>
</ul>
<p dir="RTL" style="text-align: right; color: rgb(87, 87, 87); font-size: 16px;">وتشمل التخصصات الآتية ( التشريح والأجنة - الخلية والأنسجة - الكيمياء الحيوية وكيمياء التغذية &ndash; الفسيولوجيا &ndash; الباثولوجيا &ndash; الطفيليات &ndash; الفيروسات - البكتريا والفطريات والمناعة &ndash; الأدوية - التغذية والتغذية الإكلينيكية - الصحة والأمراض المشتركة - الرعاية وتنمية الثروة الحيوانية - الرقابة الصحية على الأغذية - الطب الشرعي والسموم والإجراءات البيطرية - الأمراض الباطنة والمعدية - طب الأحياء المائية ورعايتها - &nbsp;التوليد والتناسل والتلقيح الاصطناعي - الجراحة والتخدير والأشعة - طب الطيور والأرانب &ndash; الباثولوجيا الإكلينيكية )</p>
<p dir="RTL" style="text-align: right; color: rgb(87, 87, 87); font-size: 16px;"><strong><strong><span style="color: rgb(0, 128, 128);font-size: 1em;"><span style="color: rgb(87, 87, 87);font-size: 18px;"><span dir="RTL" style="color: rgb(87, 87, 87);font-size: 1em;">ثانيا:- معهد الدراسات والبحوث البيئية</span></span></span></strong></strong></p>
<ul style="text-align: start;color: rgb(51, 51, 51);font-size: 16px;">
    <li dir="RTL" style="list-style-type: square; text-align: right;"><strong><strong>الدبلومات</strong></strong><br>- مسوح الموارد الطبيعية في النظم البيئية<br>- تقويم الموارد الطبيعية والتخطيط لتنميتها<br>- التنمية المستديمة للبيئة وإدارة مشروعاتها<br>- الدبلومة المهنية (دبلوم السلامة والصحة المهنية)</li>
</ul>
<p dir="RTL" style="text-align: right; color: rgb(87, 87, 87); font-size: 16px;"><strong><strong><span style="color: rgb(87, 87, 87);font-size: 18px;"><span style="color: rgb(0, 128, 128);font-size: 1em;">ثالثا:- كلية التربية</span></span></strong></strong></p>
<ul style="text-align: start;color: rgb(51, 51, 51);font-size: 16px;">
    <li dir="RTL" style="list-style-type: square; text-align: right;"><strong><strong>الدبلومات</strong></strong><br>- الدبلوم العام في التربية<br>- الدبلوم المهنية في التربية وتشمل التخصصات الآتية (الإدارة التعليمية &ndash; الإدارة المدرسية &ndash; سياسة التعليم والتخطيط &ndash; تعليم الكبار &ndash; إدارة الفصل &ndash; التربية التعويضية &ndash; تربية الطفل &ndash; الإرشاد النفسي والتوجه التربوي &ndash; الأخصائي النفسي المدرسي &ndash; القياس النفسي والتربوي &ndash; الإشراف التربوي &ndash; تكنولوجيا التعليم &ndash; صعوبات التعلم &ndash; طرق تدريس مادة التخصص &ndash; تخطيط وتطوير التعليم &ndash; التربية الخاصة &ndash; إعداد معلم العلوم/ الرياضيات باللغة الإنجليزية &ndash; اضطرابات النطق والكلام &ndash; إعاقات عقلية وتدخلات علاجية&nbsp;<br>- الدبلوم الخاص في التربية</li>
</ul>
<p dir="RTL" style="text-align: right; color: rgb(87, 87, 87); font-size: 16px;"><strong><strong><span style="color: rgb(87, 87, 87);font-size: 18px;"><span style="color: rgb(0, 128, 128);font-size: 1em;">رابعا:- كلية السياحة والفنادق</span></span></strong></strong></p>
<ul style="text-align: start;color: rgb(51, 51, 51);font-size: 16px;">
    <li dir="RTL" style="list-style-type: square; text-align: right;"><strong><strong>الدبلومات</strong></strong><br>- الإرشاد السياحي<br>- الدراسات السياحية<br>- الدراسات الفندقية</li>
</ul>
<p dir="RTL" style="text-align: right; color: rgb(87, 87, 87); font-size: 16px;"><strong><strong><span style="color: rgb(87, 87, 87);font-size: 18px;"><span style="color: rgb(0, 128, 128);font-size: 1em;">خامسا:- كلية التربية الرياضية</span></span></strong></strong></p>
<ul style="text-align: start;color: rgb(51, 51, 51);font-size: 16px;">
    <li dir="RTL" style="list-style-type: square; text-align: right;"><strong><strong>الدبلومات</strong></strong></li>
</ul>
<p dir="RTL" style="text-align: right; color: rgb(87, 87, 87); font-size: 16px;"><span style="color: rgb(87, 87, 87);font-size: 18px;"><strong><strong><span style="color: rgb(0, 128, 128);font-size: 1em;">سادسا:- كلية الحقوق</span></strong></strong></span></p>
<ul style="text-align: start;color: rgb(51, 51, 51);font-size: 16px;">
    <li dir="RTL" style="list-style-type: square; text-align: right;"><strong><strong>الدبلومات وتشمل ( القانون العام &ndash; القانون الخاص )</strong></strong></li>
</ul>
<p dir="RTL" style="text-align: right; color: rgb(87, 87, 87); font-size: 16px;"><strong><strong><span style="color: rgb(87, 87, 87);font-size: 18px;"><span style="color: rgb(0, 128, 128);font-size: 1em;">سابعا:- كلية التجارة</span></span></strong></strong></p>
<ul style="text-align: start;color: rgb(51, 51, 51);font-size: 16px;">
    <li dir="RTL" style="list-style-type: square; text-align: right;"><strong><strong>دبلومات الدراسات العليا</strong></strong></li>
</ul>
<p dir="RTL" style="text-align: right; color: rgb(87, 87, 87); font-size: 16px;"><strong><strong>أولا:-</strong></strong>الدبلومات التطبيقية لقسم المحاسبة وتشمل (المحاسبة والمراجعة - محاسبة التكاليف &nbsp;- المحاسبة الضريبية - المحاسبة الحكومية - نظم المعلومات المحاسبية - محاسبة المؤسسات المالية ).</p>
<p dir="RTL" style="text-align: right; color: rgb(87, 87, 87); font-size: 16px;"><strong><strong>ثانيا:-</strong></strong>الدبلومات التطبيقية لقسم إدارة الأعمال المحاسبة وتشمل (الإدارة العامة والمحليات &nbsp;- إدارة المستشفيات &ndash; التسويق - التنمية الإدارية - المنشات الزراعية - نظم المعلومات الإدارية - الاقتصاد الإداري - إدارة المشروعات الصغيرة).</p>
<p dir="RTL" style="text-align: right; color: rgb(87, 87, 87); font-size: 16px;"><strong><strong>&nbsp;ثالثا:-</strong></strong>الدبلومات التطبيقية لقسم الاقتصاد وتشمل (الدراسات المصرفية والأسواق المالية - اقتصاديات المشروعات ودراسات الجدوى - التنمية والتخطيط الإقليمي - الاقتصاد الدولي - الاقتصاد العام - الدراسات الضريبية ).</p>
<p dir="RTL" style="text-align: right; color: rgb(87, 87, 87); font-size: 16px;"><strong><strong>رابعا:-</strong></strong>الدبلومات التطبيقية في التامين وتشمل (تأمينات اجتماعية - تأمينات الحياة &ndash; تأمينات عامة ). &nbsp;</p>
<p dir="RTL" style="text-align: right; color: rgb(87, 87, 87); font-size: 16px;"><strong><strong>خامسا:-</strong></strong>الدبلومات التطبيقية في الإحصاء.</p>
<p dir="RTL" style="text-align: right; color: rgb(87, 87, 87); font-size: 16px;"><strong><strong><span style="color: rgb(87, 87, 87);font-size: 18px;"><span style="color: rgb(0, 128, 128);font-size: 1em;">ثامنا:- معهد بحوث الهندسة الوراثية والتكنولوجيا الحيوية</span></span></strong></strong></p>
<p dir="RTL" style="text-align: right; color: rgb(87, 87, 87); font-size: 16px;">يمنح معهد بحوث الهندسة الوراثية والتكنولوجيا الحيوية الدبلوم في الأقسام العلمية بالتخصصات التي تتبعها الآتية :-</p>
<p dir="RTL" style="text-align: right; color: rgb(87, 87, 87); font-size: 16px;"><strong><strong>قسم البيولوجيا الجزيئية</strong></strong><strong><strong>:</strong></strong></p>
<p style="text-align: right; color: rgb(87, 87, 87); font-size: 16px;">ويضم التخصصات الفرعية التالية :</p>
<ul style="text-align: start;color: rgb(51, 51, 51);font-size: 16px;">
    <li dir="rtl" style="list-style-type: square; text-align: right;">الميكروبيولوجيا الجزيئية- الطفيليات ا لجزيئية &ndash; المناعة ا لجزيئية &ndash; الباثولوجيا الجزيئية &ndash; البيولوجيا الجزيئية للخلية &ndash; الوراثة والوراثة الخلوية الجزيئية &ndash; التقسيم الجزيئي &nbsp;&ndash; التطور الجزيئي &nbsp;&ndash; الحشرات الجزيئية &ndash; بيولوجيا السرطان الجزيئية &ndash; الهندسة النسيجية &ndash; الوراثة البشرية الجزيئية &ndash; الجينومات .</li>
</ul>
<p dir="RTL" style="text-align: right; color: rgb(87, 87, 87); font-size: 16px;"><strong><strong>قسم البيوتكنولوجيا الميكروبية :</strong></strong></p>
<p style="text-align: right; color: rgb(87, 87, 87); font-size: 16px;">ويضم التخصصات الفرعية التي تخدم في مجال عزل وتصنيف وحفظ وتحوير الميكروبات وراثيا وطرق استخدامها صناعيا وإعدادها للتطبيق .</p>
<p dir="RTL" style="text-align: right; color: rgb(87, 87, 87); font-size: 16px;"><strong><strong>قسم البيوتكنولوجيا النباتية :</strong></strong></p>
<p style="text-align: right; color: rgb(87, 87, 87); font-size: 16px;">ويضم التخصصات الفرعية التالية :</p>
<ul style="text-align: start;color: rgb(51, 51, 51);font-size: 16px;">
    <li dir="rtl" style="list-style-type: square; text-align: right;">زراعة الخلايا والأنسجة والأعضاء النباتية- النباتات المحورة وراثيا- بيوتكنولوجيا المحاصيل البستانية - بيوتكنولوجيا محاصيل الحقل- بيوتكنولوجيا البذور.</li>
</ul>
<p dir="RTL" style="text-align: right; color: rgb(87, 87, 87); font-size: 16px;"><strong><strong>قسم البيوتكنولوجيا الحيوانية :</strong></strong></p>
<p style="text-align: right; color: rgb(87, 87, 87); font-size: 16px;">ويضم التخصصات الفرعية التالية :</p>
<ul style="text-align: start;color: rgb(51, 51, 51);font-size: 16px;">
    <li dir="rtl" style="list-style-type: square; text-align: right;">الحيوانات المولفة وراثيا- زراعة الخلايا والأنسجة الحيوانية- تقنيات التكاثر ( التلقيح الصناعي - الإخصاب المعملي - نقل الأجنة - الاستنساخ)- بيوتكنولوجيا الأحياء المائية .</li>
</ul>
<p dir="RTL" style="text-align: right; color: rgb(87, 87, 87); font-size: 16px;"><strong><strong>قسم البيوتكنولوجيا الصناعية :</strong></strong></p>
<p style="text-align: right; color: rgb(87, 87, 87); font-size: 16px;">ويضم التخصصات الفرعية التالية:</p>
<ul style="text-align: start;color: rgb(51, 51, 51);font-size: 16px;">
    <li dir="rtl" style="list-style-type: square; text-align: right;">التخمرات- الصناعات الدوائية- بيوتكنولوجيا الأغذية والألبان .</li>
</ul>
<p dir="RTL" style="text-align: right; color: rgb(87, 87, 87); font-size: 16px;">&nbsp;</p>
								 
								 
								 


                            </div>
                            <div class="tab-pane fade" id="objectives-tab-pane" role="tabpanel"
                                 aria-labelledby="objectives-tab"
                                 tabindex="0">


                                <ul>
                                    <p dir="RTL" style="text-align: center;color: rgb(87, 87, 87);font-size: 16px;">
                                        <span style="color: rgb(255, 0, 0);font-size: 1em;"><strong><strong><span
                                                        style="color: rgb(87, 87, 87);font-size: 18px;"><span
                                                            style="color: rgb(87, 87, 87);background-color: rgb(255, 255, 255);font-size: 1em;">الغايات و الاهداف</span></span></strong></strong></span><br>&nbsp;
                                    </p>
                                    <p dir="RTL" style="text-align: justify;color: rgb(87, 87, 87);font-size: 16px;">
                                        <span style="color: rgb(255, 0, 0);font-size: 1em;"><strong><strong><span
                                                        style="color: rgb(87, 87, 87);background-color: rgb(255, 255, 255);font-size: 1em;">الغاية الأولي : منشآت جامعية تحقق القياسات المرجعية القومية</span></strong></strong><br><br><strong><strong><span
                                                        style="color: rgb(87, 87, 87);background-color: rgb(255, 255, 255);font-size: 1em;">الأهداف :</span></strong></strong></span>
                                    </p>
                                    <p dir="RTL" style="text-align: justify;color: rgb(87, 87, 87);font-size: 16px;">
                                        <strong><strong>- استكمال منشآت الجامعة و كلياتها
                                                المختلفة</strong></strong><strong><strong><span
                                                    style="color: rgb(87, 87, 87);font-size: 1em;">.</span></strong></strong><br><strong><strong>-
                                                تطوير البني التحتية و منشآت الجامعة و كلياتها المختلفة</strong></strong><strong><strong><span
                                                    style="color: rgb(87, 87, 87);font-size: 1em;">.</span></strong></strong><br><strong><strong>-
                                                إنشاء المستشفي الجامعي و كليات المجموعة الطبية و الكليات الغير نمطية
                                                (العلوم الصحية التطبيقية &nbsp;الهندسة التقنية و العلوم
                                                المتقدمة).</strong></strong><br><strong><strong>- استكمال الأجهزة و
                                                المعدات للقاعات و المعامل المختلفة بكليات و معاهد
                                                الجامعة</strong></strong><strong><strong><span
                                                    style="color: rgb(87, 87, 87);font-size: 1em;">.</span></strong></strong>
                                    </p>
                                    <p dir="RTL" style="text-align: justify;color: rgb(87, 87, 87);font-size: 16px;">
                                        &nbsp;</p>
                                    <p dir="RTL" style="text-align: justify;color: rgb(87, 87, 87);font-size: 16px;">
                                        <span style="color: rgb(255, 0, 0);font-size: 1em;"><strong><strong>الغاية الثانية : أداء متميز للموارد البشرية</strong></strong></span><br>&nbsp;
                                    </p>
                                    <p dir="RTL" style="text-align: justify;color: rgb(87, 87, 87);font-size: 16px;">
                                        <span
                                            style="color: rgb(255, 0, 0);font-size: 1em;"><strong><strong>الأهداف :</strong></strong></span>
                                    </p>
                                    <p dir="RTL" style="text-align: justify;color: rgb(87, 87, 87);font-size: 16px;">
                                        <strong><strong>- تطوير كفاءة القيادات
                                                الجامعية</strong></strong><strong><strong><span
                                                    style="color: rgb(87, 87, 87);font-size: 1em;">.</span></strong></strong><br><strong><strong>-
                                                توفير نظم فعالة لاختيار و تعين و متابعة و تقيم القيادات الأكاديمية و
                                                الإدارية</strong></strong><strong><strong><span
                                                    style="color: rgb(87, 87, 87);font-size: 1em;">.</span></strong></strong><br><strong><strong>-
                                                تدريب و تأهيل أعضاء هيئة التدريس و معاونيهم و
                                                الإداريين</strong></strong><strong><strong><span
                                                    style="color: rgb(87, 87, 87);font-size: 1em;">.</span></strong></strong><br><strong><strong>-
                                                توفير بيئة محفزة و فعالة تحقق رضا القائمين علي العملية التعليمية و
                                                البحثية و الخدمية.</strong></strong></p>
                                    <p dir="RTL" style="text-align: justify;color: rgb(87, 87, 87);font-size: 16px;">
                                        &nbsp;</p>
                                    <p dir="RTL" style="text-align: justify;color: rgb(87, 87, 87);font-size: 16px;">
                                        <span style="color: rgb(255, 0, 0);font-size: 1em;"><strong><strong>الغاية الثالثة : التميز الفكري و المهني و البحثي</strong></strong></span>
                                    </p>
                                    <p dir="RTL" style="text-align: justify;color: rgb(87, 87, 87);font-size: 16px;">
                                        <br><span
                                            style="color: rgb(255, 0, 0);"><strong><strong>الأهداف :</strong></strong></span>
                                    </p>
                                    <p dir="RTL" style="text-align: justify;color: rgb(87, 87, 87);font-size: 16px;">
                                        <br><strong><strong>&nbsp;- استحداث برامج جديدة تحقق ميزة تنافسية
                                                للخريج</strong></strong><strong><strong><span
                                                    style="color: rgb(87, 87, 87);font-size: 1em;">.</span></strong></strong><br><strong><strong>&nbsp;-
                                                التطوير المستمر للبرامج التعليمية الأكاديمية بما يواكب سوق
                                                العمل</strong></strong><strong><strong><span
                                                    style="color: rgb(87, 87, 87);font-size: 1em;">.</span></strong></strong><br><strong><strong>&nbsp;-
                                                دعم الخدمات و الأنشطة الطلابية</strong></strong><strong><strong><span
                                                    style="color: rgb(87, 87, 87);font-size: 1em;">.</span></strong></strong><br><strong><strong>&nbsp;-
                                                المراجعة وتحديث استراتيجيات التعليم و التعلم وأساليب
                                                التطوير</strong></strong><strong><strong><span
                                                    style="color: rgb(87, 87, 87);font-size: 1em;">.</span></strong></strong><br><strong><strong>&nbsp;-
                                                تطوير البحث العلمي للجامعة للمساهمة في حل مشكلات
                                                المجتمع</strong></strong><strong><strong><span
                                                    style="color: rgb(87, 87, 87);font-size: 1em;">.</span></strong></strong><br><strong><strong>-
                                                توفير بيئة محفزة للبحث العلمي</strong></strong><strong><strong><span
                                                    style="color: rgb(87, 87, 87);font-size: 1em;">.<br>&nbsp;</span></strong></strong><strong><strong>&nbsp;-
                                                استحداث و تطوير الدوريات العلمية لتتلائم مع التصنيف
                                                العالمي</strong></strong><strong><strong><span
                                                    style="color: rgb(87, 87, 87);font-size: 1em;">.</span></strong></strong>
                                    </p>
                                    <p dir="RTL" style="text-align: justify;color: rgb(87, 87, 87);font-size: 16px;">
                                        &nbsp;</p>
                                    <p dir="RTL" style="text-align: justify;color: rgb(87, 87, 87);font-size: 16px;">
                                        <span style="color: rgb(255, 0, 0);font-size: 1em;"><strong><strong>الغاية الرابعة : كسب ثقة المجتمع و تعزيز المكانة الدولية للجامعة</strong></strong><br><br><strong><strong>الأهداف :</strong></strong></span><br><br><strong><strong>&nbsp;-
                                                تنويع مجالات التعاون مع مؤسسات المجتمع بما يحقق
                                                متطلباتها</strong></strong><strong><strong><span
                                                    style="color: rgb(87, 87, 87);font-size: 1em;">.</span></strong></strong><br><strong><strong>&nbsp;-
                                                استحداث و تطوير وحدات خدمة وتنمية
                                                المجتمع</strong></strong><strong><strong><span
                                                    style="color: rgb(87, 87, 87);font-size: 1em;">.</span></strong></strong><br><strong><strong>&nbsp;-&nbsp;</strong></strong>
                                        <strong><strong>تطوير خطط وبرامج التنمية البيئية و خدمة
                                                المجتمع</strong></strong><strong><strong><span
                                                    style="color: rgb(87, 87, 87);font-size: 1em;">.</span></strong></strong><br><strong><strong>&nbsp;-
                                                دعم البحوث التطبيقية لخدمة قضايا المجتمع و
                                                مشكلاته</strong></strong><strong><strong><span
                                                    style="color: rgb(87, 87, 87);font-size: 1em;">.</span></strong></strong><br><strong><strong>&nbsp;-
                                                دعم و تعزيز الشراكات المحلية و الدولية</strong></strong><strong><strong><span
                                                    style="color: rgb(87, 87, 87);font-size: 1em;">.</span></strong></strong><br><strong><strong>&nbsp;-&nbsp;</strong></strong>
                                        <strong><strong>إتباع نظم من شانها دعم متطلبات التصنيفات
                                                العالمية</strong></strong><strong><strong><span
                                                    style="color: rgb(87, 87, 87);font-size: 1em;">.</span></strong></strong>
                                    </p>
                                    <p dir="RTL" style="text-align: justify;color: rgb(87, 87, 87);font-size: 16px;">
                                        &nbsp;</p>
                                    <p dir="RTL" style="text-align: justify;color: rgb(87, 87, 87);font-size: 16px;">
                                        <span style="color: rgb(255, 0, 0);font-size: 1em;"><strong><strong>الغاية الخامسة : جامعة رقمية</strong></strong><br><br><strong><strong>الأهداف :</strong></strong></span>
                                    </p>
                                    <p dir="RTL" style="text-align: justify;color: rgb(87, 87, 87);font-size: 16px;">
                                        <strong><strong>- تطوير البوابة
                                                الإلكترونية</strong></strong><strong><strong><span
                                                    style="color: rgb(87, 87, 87);font-size: 1em;">.</span></strong></strong><br><strong><strong>-&nbsp;</strong></strong>
                                        <strong><strong>تطوير الشبكة الإلكترونية البيئية و الداخلية لإدارة الجامعة و
                                                الكليات و المعاهد</strong></strong><strong><strong><span
                                                    style="color: rgb(87, 87, 87);font-size: 1em;">.</span></strong></strong><br><strong><strong>-&nbsp;</strong></strong>
                                        <strong><strong>التوسع في التعليم الإلكتروني و التعلم عن
                                                بعد</strong></strong><strong><strong><span
                                                    style="color: rgb(87, 87, 87);font-size: 1em;">.</span></strong></strong><br><strong><strong>-
                                                تفعيل نظام إدارة المعلومات</strong></strong><strong><strong><span
                                                    style="color: rgb(87, 87, 87);font-size: 1em;">&nbsp;MIS.</span></strong></strong><br><strong><strong>-
                                                تفعيل استخدام المكتبة الرقمية</strong></strong><strong><strong><span
                                                    style="color: rgb(87, 87, 87);font-size: 1em;">.</span></strong></strong><br><strong><strong>-
                                                التدريب علي تكنولوجيا المعلومات</strong></strong><strong><strong><span
                                                    style="color: rgb(87, 87, 87);font-size: 1em;">.</span></strong></strong>
                                    </p>
                                    <p dir="RTL" style="text-align: justify;color: rgb(87, 87, 87);font-size: 16px;">
                                        &nbsp;</p>
                                    <p dir="RTL" style="text-align: justify;color: rgb(87, 87, 87);font-size: 16px;">
                                        <span style="color: rgb(255, 0, 0);font-size: 1em;"><strong><strong>الغاية السادسة : أعلاء القيم و الأخلاقيات بالجامعة</strong></strong><br><br><strong><strong>الأهداف :</strong></strong></span>
                                    </p>
                                    <p dir="RTL" style="text-align: justify;color: rgb(87, 87, 87);font-size: 16px;">
                                        <strong><strong>&nbsp;- تأصيل وإتباع حماية حقوق الملكية
                                                الفكرية</strong></strong><strong><strong><span
                                                    style="color: rgb(87, 87, 87);font-size: 1em;">.</span></strong></strong><br><strong><strong>&nbsp;-
                                                &nbsp;الالتزام بأخلاقيات المهنة و القيم
                                                الجامعية</strong></strong><strong><strong><span
                                                    style="color: rgb(87, 87, 87);font-size: 1em;">.</span></strong></strong><br><strong><strong>-
                                                تفعيل القوانين ووضع قواعد المساءلة و
                                                المحاسبة</strong></strong><strong><strong><span
                                                    style="color: rgb(87, 87, 87);font-size: 1em;">.</span></strong></strong><br><strong><strong>-
                                                حماية و تعزيز الحرية الأكاديمية في إطار القيم والأعراف
                                                الاجتماعية</strong></strong></p>

                                </ul>
                            </div>
                            <!--           <div class="tab-pane fade" id="strategic_objectives-tab-pane" role="tabpanel"
                                            aria-labelledby="strategic_objectives-tab"
                                            tabindex="0">




                                           <ul>
                                               <li>1 - aaa</li>
                                               <li>1 - aaa</li>
                                               <li>1 - aaa</li>

                                           </ul>
                                       </div>     -->
                        </div>
                    </div>


								   
                                </div>
                                <div class="tab-pane fade fw-bold" id="v-pills-profile" role="tabpanel"
                                     aria-labelledby="v-pills-profile-tab" tabindex="0">
									 
									 <p style="text-align: right;">إدارة العلاقات الثقافية</p>
<p style="text-align: right;">م/ ماهر محمد شحاتة</p>
<p style="text-align: right;">مدير عام إدارة العلاقات الثقافية</p>
<p style="text-align: right;"><br></p>
<p style="text-align: right;">أ / محمود أميـن البرم</p>
<p style="text-align: right;">مدير إدارة العلاقات الثقافية</p>
<p style="text-align: right;"><br></p>
<p style="text-align: right;">أ / حسن محمد زقزوق</p>
<p style="text-align: right;">أخصائي علاقات ثقافية</p>
<p style="text-align: right;"><br></p>
<p style="text-align: right;">أ / أشرف عبد الفتاح المردني</p>
<p style="text-align: right;">أخصائي علاقات ثقافية</p>
<p style="text-align: right;"><br></p>
<p style="text-align: right;">أ / وفاء ماضي حسين</p>
<p style="text-align: right;">أخصائي علاقات ثقافية</p>
<p style="text-align: right;"><br></p>
<p style="text-align: right;">أ / عـــز الدين عبد السلام صادق</p>
<p>كاتب<a href="http://usc.edu.eg/ar/pgras/4737.aspx" style="text-align: start;color: rgb(255, 255, 255);background-color: rgb(255, 255, 255);font-size: 16px;"></a></p>
<div style="color: rgb(244, 243, 248);background-color: rgb(244, 243, 248);">
    <div style="text-align: right;"><a href="http://usc.edu.eg/ar/pgras/4737.aspx" style="text-align: start;color: rgb(255, 255, 255);background-color: rgb(255, 255, 255);font-size: 16px;"><br></a></div>
</div>
<p></p>
									 
									 
									 
									 
									 
                                </div>
                                <div class="tab-pane fade fw-bold" id="v-pills-messages" role="tabpanel"
                                     aria-labelledby="v-pills-messages-tab" tabindex="0">تنظم أحكام هذة اللائحة "
                                    اللائحة الداخلية للمكتبات " التصرفات المالية ولإدارية للمكتبات الجامعية بجامعة مدنية
                                    السادات

                                    والمنشأة طبقا للمادة / (10) من اللائحة التنفيذية لقانون تنظيم الجامعات رقم 49 لسنة
                                    1972 الصادر بقرار رئيس الجمهورية رقم 809 بسنة 1975 وموافقة كل لجنة المكتبات بجلستها
                                    رقم (1) بتاريخ 22/9/2013 ومجلس الجامعة بجلستة رقم (1) المنعقدة بتاريخ 25/9/2013
									
									
									
									
									    <div class="box">
                        <ul class="s_ul nav nav-tabs pt-3 " id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link fw-bold active" id="home-tab1" data-bs-toggle="tab"
                                        data-bs-target="#home-tab-pane1" type="button" role="tab"
                                        aria-controls="home-tab-pane"
                                        aria-selected="true">كلمة السيد / مدير عام مكتبات جامعة مدينة السادات 
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link fw-bold" id="mission-tab1" data-bs-toggle="tab"
                                        data-bs-target="#mission-tab-pane1" type="button" role="tab"
                                        aria-controls="mission-tab-pane1"
                                        aria-selected="false">المكتبة المركزية
                                </button>
                            </li>
                            <li class="nav-item fw-bold" role="presentation">
                                <button class="nav-link" id="values-tab" data-bs-toggle="tab"
                                        data-bs-target="#values-tab-pane1" type="button" role="tab"
                                        aria-controls="values-tab-pane"
                                        aria-selected="false">أهداف المكتبات الجامعية

                                </button>
                            </li>
                            <li class="nav-item fw-bold" role="presentation">
                                <button class="nav-link" id="objectives-tab1" data-bs-toggle="tab"
                                        data-bs-target="#objectives-tab-pane1" type="button" role="tab"
                                        aria-controls="objectives-tab-pane1"
                                        aria-selected="false">اختصاصات لجنة المكتبات
                                </button>
                            </li>
                            <!--    <li class="nav-item" role="presentation">
                                <button class="nav-link fw-bold" id="strategic_objectives-tab" data-bs-toggle="tab"
                                        data-bs-target="#strategic_objectives-tab-pane" type="button" role="tab"
                                        aria-controls="strategic_objectives-tab-pane"
                                        aria-selected="false">@lang('site.strategic_objectives'):
                                </button>
                            </li>   -->
                        </ul>
                        <div class="s-tabs py-3 tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home-tab-pane1" role="tabpanel"
                                 aria-labelledby="home-tab1"
                                 tabindex="0">
								 
								 <p dir="RTL" style="text-align: right; color: rgb(87, 87, 87); font-size: 16px;">جامعة مدينة السادات جامعة حديثة تهدف إلي تطوير خدمات البحث العلمي من خلال تقديم أبحاث متطورة حيث تلعب الجامعات المصرية دوراً عظيماً في تطوير الابحاث العلمية والمساعدة علي أحدث الاكتشافات والاختراعات الحديثة .</p>
<p dir="RTL" style="text-align: right; color: rgb(87, 87, 87); font-size: 16px;">ومكتبات جامعة مدينة السادات تلعب دوراً أساسياً وهاماً في تقديم الخدمات البحثية المتطورة لمجتمع المستفيدين بالجامعة من خلال تزويد محتوياتها بأحدث الكتب والمراجع والإصدارات الحديثة من الدوريات العلمية والاشتراك في أحدث قواعد البيانات العالمية وتبادل المطبوعات بين مكتبات الجامعة والجامعات الاخري بالداخل والخارج والاهداءات الواردة إلي مكتبات الجامعة من كافة المؤسسات العلمية بالداخل والخارج من أجل تقديم خدمات متميزة للسادة الباحثين بهدف تطوير البحث العلمي والمساعدة علي تخريج شباب متميز ومؤهل لشغل الوظائف القيادية بالبلاد من أجل خدمة الوطن ورفعة شأنه .</p>
<p><a href="http://usc.edu.eg/ar/pgras/4737.aspx" style="text-align: start;color: rgb(255, 255, 255);background-color: rgb(255, 255, 255);font-size: 16px;"></a></p>
<div style="color: rgb(244, 243, 248); background-color: rgb(244, 243, 248); text-align: right;"><a href="http://usc.edu.eg/ar/pgras/4737.aspx" style="text-align: start;color: rgb(255, 255, 255);background-color: rgb(255, 255, 255);font-size: 16px;"><br></a></div>
<p></p>
								 
                            </div>
                            <div class="tab-pane fade" id="mission-tab-pane1" role="tabpanel"
                                 aria-labelledby="mission-tab1"
                                 tabindex="0">
								 
								 <h3 style="text-align: center; color: rgb(28, 120, 133); font-size: 24px;"><span style="color: rgb(87, 87, 87);font-size: 1em;">المكتبة المركزية</span></h3>
<div style="text-align: right; color: rgb(51, 51, 51); font-size: 16px;"><br></div>
<p style="text-align: right; color: rgb(87, 87, 87); font-size: 16px;"><img width="300px" height="300px" alt="" src="http://images.usc.edu.eg/uploads2/images/Aya/mrkz2.jpg"><img width="300px" height="300px" alt="" src="http://images.usc.edu.eg/uploads2/images/Aya/mrkz3.jpg"></p>
<table border="1" cellpadding="1" cellspacing="1" style="text-align: start;color: transparent;font-size: 16px;">
    <tbody>
        <tr>
            <td rowspan="2" style="text-align: center;">
                <div style="text-align: right;"><span style="color: rgb(87, 87, 87);font-size: 16px;"><span style="color: rgb(165, 42, 42);font-size: 1em;"><strong><strong><span style="color: rgb(87, 87, 87);font-size: 1em;">مقتنيات المكتبة</span></strong></strong></span></span></div>
            </td>
            <td style="text-align: center;">
                <div style="text-align: right;"><span style="color: rgb(87, 87, 87);font-size: 16px;"><span style="color: rgb(87, 87, 87);font-size: 1em;"><strong><strong><span style="color: rgb(165, 42, 42);font-size: 1em;"><span dir="RTL" style="color: rgb(87, 87, 87);font-size: 1em;">الكتب العربي</span></span></strong></strong></span></span></div>
            </td>
            <td style="text-align: center;">
                <div style="text-align: right;"><span style="color: rgb(87, 87, 87);font-size: 16px;"><span style="color: rgb(87, 87, 87);font-size: 1em;"><strong><strong><span style="color: rgb(165, 42, 42);font-size: 1em;"><span dir="RTL" style="color: rgb(87, 87, 87);font-size: 1em;">الكتب الاجنبى</span></span></strong></strong></span></span></div>
            </td>
            <td colspan="2">
                <p style="text-align: right; color: rgb(87, 87, 87); font-size: 1em;"><br><span style="font-size: 16px;"><span style="color: rgb(87, 87, 87);font-size: 1em;"><strong><strong><span style="color: rgb(165, 42, 42);font-size: 1em;"><span dir="RTL" style="color: rgb(87, 87, 87);font-size: 1em;">رسائل ماجستير و الدكتوراه</span></span></strong></strong></span></span></p>
                <div style="text-align: right;">&nbsp;</div>
            </td>
        </tr>
        <tr>
            <td style="text-align: center;">
                <div style="text-align: right;"><span style="color: rgb(87, 87, 87);font-size: 14px;"><span style="color: rgb(87, 87, 87);font-size: 1em;"><strong><strong><span dir="RTL" style="color: rgb(87, 87, 87);font-size: 1em;">6142</span></strong></strong></span></span></div>
            </td>
            <td style="text-align: center;">
                <div style="text-align: right;"><span style="color: rgb(87, 87, 87);font-size: 14px;"><span style="color: rgb(87, 87, 87);font-size: 1em;"><strong><strong><span dir="RTL" style="color: rgb(87, 87, 87);font-size: 1em;">510</span></strong></strong></span></span></div>
            </td>
            <td colspan="2" style="text-align: center;">
                <div style="text-align: right;"><span style="color: rgb(87, 87, 87);font-size: 14px;"><span style="color: rgb(87, 87, 87);font-size: 1em;"><strong><strong><span dir="RTL" style="color: rgb(87, 87, 87);font-size: 1em;">9438</span></strong></strong></span></span></div>
            </td>
        </tr>
        <tr>
            <td rowspan="2" style="text-align: center;">
                <div style="text-align: right;"><span style="color: rgb(87, 87, 87);font-size: 16px;"><span style="color: rgb(87, 87, 87);font-size: 1em;"><strong><strong><span style="color: rgb(165, 42, 42);font-size: 1em;"><span dir="RTL" style="color: rgb(87, 87, 87);font-size: 1em;">الأجهزة</span></span></strong></strong></span></span></div>
            </td>
            <td style="text-align: center;">
                <div style="text-align: right;"><span style="color: rgb(87, 87, 87);font-size: 16px;"><span style="color: rgb(87, 87, 87);font-size: 1em;"><strong><strong><span style="color: rgb(165, 42, 42);font-size: 1em;"><span dir="RTL" style="color: rgb(87, 87, 87);font-size: 1em;">حاسب آلي</span></span></strong></strong></span></span></div>
            </td>
            <td style="text-align: center;">
                <div style="text-align: right;"><span style="color: rgb(87, 87, 87);font-size: 16px;"><span style="color: rgb(87, 87, 87);font-size: 1em;"><strong><strong><span style="color: rgb(165, 42, 42);font-size: 1em;"><span dir="RTL" style="color: rgb(87, 87, 87);font-size: 1em;">ماكينة تصوير</span></span></strong></strong></span></span></div>
            </td>
            <td style="text-align: center;">
                <div style="text-align: right;"><span style="color: rgb(87, 87, 87);font-size: 16px;"><span style="color: rgb(87, 87, 87);font-size: 1em;"><strong><strong><span style="color: rgb(165, 42, 42);font-size: 1em;"><span dir="RTL" style="color: rgb(87, 87, 87);font-size: 1em;">طابعة</span></span></strong></strong></span></span></div>
            </td>
            <td style="text-align: center;">
                <div style="text-align: right;"><span style="color: rgb(87, 87, 87);font-size: 16px;"><span style="color: rgb(87, 87, 87);font-size: 1em;"><strong><strong><span style="color: rgb(165, 42, 42);font-size: 1em;"><span dir="RTL" style="color: rgb(87, 87, 87);font-size: 1em;">أجهزة باركود</span></span></strong></strong></span></span></div>
            </td>
        </tr>
        <tr>
            <td style="text-align: center;">
                <div style="text-align: right;"><span style="color: rgb(87, 87, 87);font-size: 14px;"><strong><strong><span style="color: rgb(87, 87, 87);font-size: 1em;">7</span></strong></strong></span></div>
            </td>
            <td style="text-align: center;">
                <div style="text-align: right;"><span style="color: rgb(87, 87, 87);font-size: 14px;"><strong><strong><span style="color: rgb(87, 87, 87);font-size: 1em;">2</span></strong></strong></span></div>
            </td>
            <td style="text-align: center;">
                <div style="text-align: right;"><span style="color: rgb(87, 87, 87);font-size: 14px;"><strong><strong><span style="color: rgb(87, 87, 87);font-size: 1em;">3</span></strong></strong></span></div>
            </td>
            <td style="text-align: center;">
                <div style="text-align: right;"><span style="color: rgb(87, 87, 87);font-size: 14px;"><strong><strong><span style="color: rgb(87, 87, 87);font-size: 1em;">6</span></strong></strong></span></div>
            </td>
        </tr>
    </tbody>
</table>
<p style="text-align: right;"><a href="http://usc.edu.eg/ar/pgras/4737.aspx" style="text-align: start;color: rgb(255, 255, 255);background-color: rgb(255, 255, 255);font-size: 16px;"></a></p>
<p><br></p>



                            </div>
                            <div class="tab-pane fade" id="values-tab-pane1" role="tabpanel" aria-labelledby="values-tab1"
                                 tabindex="0">
								 
								 
								 <h3 style="text-align: center; color: rgb(28, 120, 133); font-size: 24px;"><span style="color: rgb(87, 87, 87);font-size: 1em;">أهداف المكتبات الجامعية</span></h3>
<div style="text-align: right; color: rgb(51, 51, 51); font-size: 16px;"><br></div>
<p style="text-align: right; color: rgb(87, 87, 87); font-size: 16px;"><span style="color: rgb(87, 87, 87);font-size: 1em;">- &nbsp; &nbsp;تقديم الخدمات المكتبية والمعلوماتية للسادة اعضاء هيئة التدريس والهيئية المعاونة وطلاب مرحلتي الدراسات العليا والبكالوريوس والليسانس والعاملين بهدف دعم العملية التعليمية والبحثية ونشر العلم والمعرفة.</span></p>
<p style="text-align: right; color: rgb(87, 87, 87); font-size: 16px;"><br>- &nbsp; &nbsp;توكيد أواصر الصلة العلمية والعملية مع الجامعات والهيئات العلمية والبحثية داخل وخارج مصر</p>
<p style="text-align: right; color: rgb(87, 87, 87); font-size: 16px;"><br>- &nbsp; &nbsp;اقتناء الكتب والمراجع والدوريات العلمية والرسائل الجامعية وتوفير قواعد بيانات علمية عالمية للباحثين وأوعية المعلومات التى تفيد الباحثين والطلاب</p>
<p style="text-align: right; color: rgb(87, 87, 87); font-size: 16px;"><br>- &nbsp; &nbsp; إعداد الفهارس اللازمة لتيسير الوصول إلى المقتنيات وخاصة الفهارس الإلكترونية</p>
<p style="text-align: right; color: rgb(87, 87, 87); font-size: 16px;"><br>- &nbsp; &nbsp;إصدار القوائم الببليوجرافية والكشافات لمحتويات المكتية</p>
<p style="text-align: right; color: rgb(87, 87, 87); font-size: 16px;"><br>- &nbsp; &nbsp;تيسير الحصول على المقالات والبحوث من المراجع والدوريات والكتب وغيرها من مصادر المعرفة</p>
<p style="text-align: right; color: rgb(87, 87, 87); font-size: 16px;"><br>- &nbsp; &nbsp;تقديم خدمات معلوماتية الاعتماد على المصادر السمعية والبصرية</p>
<p style="text-align: right; color: rgb(87, 87, 87); font-size: 16px;"><br>- &nbsp; &nbsp;توفير وتقديم المعلومات والمصادر الإلكترونية أو الرقمية</p>
<p style="text-align: right; color: rgb(87, 87, 87); font-size: 16px;"><br>- &nbsp; &nbsp;تبادل كافة أوعية المعلومات والبيانات بينهما وبين الجامعات والمراكز البحثية والمكتبات داخل وخارج الوطن بما يحقق أعلى استفادة ممكنة لجمهور المستفيدين منها</p>
<p style="text-align: right; color: rgb(87, 87, 87); font-size: 16px;"><br>- &nbsp; &nbsp;تقوم المكتبة المركزية باقتناء الرسائل العلمية الممنوحة لدجتى الماجستير والدكتوراة من الجامعة فى شكل ورقى وإلكترونى كما تقوم مكتبات الكليات بتجميع الرسائل العلمية المجازة فى كلياتها</p>
<p style="text-align: right; color: rgb(87, 87, 87); font-size: 16px;"><br>- &nbsp; &nbsp;تتولى إدارة مكتبات الكليات التوجية الفنى وإعداد البرامج التربية للعاملين بمكتبات الجامعة</p>
<p style="text-align: right; color: rgb(87, 87, 87); font-size: 16px;"><br><strong><strong><span style="color: rgb(0, 128, 128);font-size: 1em;">- &nbsp; &nbsp;تتولى الإدارة العامة للمكتبات الجامعية عمليات إنشاء وتحديث:-</span></strong></strong><br><br>- &nbsp; &nbsp; توصيل شبكة ربط بين مكتبات كليات ومعاهد الجامعة المنفعة العلمية المتبادلة فى التخصصات المناظرة</p>
<p style="text-align: right; color: rgb(87, 87, 87); font-size: 16px;"><br>- &nbsp; &nbsp; شبكة معلومات ألية تربط مكتبات الجامعة فيما بينها للاءفادة من مقتنياتها وخدماتها وذلك تيسراً على الباحثين كما تعمل ربط تلك &nbsp;الشبكة بشبكات المكتبات ومعلومات المثليلة</p>
<p style="text-align: right; color: rgb(87, 87, 87); font-size: 16px;"><br>- فهرس الكترونى موحد لمقتنيات جميع مكتبات الجامعة وكليتها ومعاهدها ومراكزها العلمية ...الخ , لتيسيرالإفادة من هذة المقتنيات، وترشيد سياسة الاختيار وشراء الأوعية الجديدة ، كما ييسر التعاون بين المكتبات فى مجار الإعارة للاستفادة من المقتينات بصورة أكثر فاعلية إنشاء مكتبة سمعية وبصرية لذوى الاحتياجات الخاصة</p>


                            </div>
                            <div class="tab-pane fade" id="objectives-tab-pane1" role="tabpanel"
                                 aria-labelledby="objectives-tab1"
                                 tabindex="0">


                                <p style="text-align: center;"><span style="color: rgb(87, 87, 87);font-size: 1em;"><strong>اختصاصات لجنة المكتبات</strong></span></p>
<p><br></p>
<p dir="RTL" style="box-sizing: border-box; margin: 0px 0.5in 18px 0px; font-size: 16px; line-height: 21px; color: rgb(87, 87, 87); text-align: right; font-family: HacenSaudiArabia; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: normal; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;"><span style="box-sizing: border-box; color: rgb(87, 87, 87); font-size: 1em; font-weight: 600; display: initial; margin: 10px 0px; font-family: mtlight;"><span style="box-sizing: border-box; color: rgb(0, 128, 128); font-size: 1em; font-weight: 600; display: initial; margin: 10px 0px;"><strong style="box-sizing: border-box; font-weight: bold; display: block;">تختص لجنة المكتبات الجامعية بالآتى</strong>:-</span></span></p>
<ul style="box-sizing: border-box; margin: 0px; list-style: none; padding: 0px 35px 0px 0px; color: rgb(51, 51, 51); font-family: HacenSaudiArabia; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: normal; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;">
    <li dir="RTL" style="box-sizing: border-box; list-style-type: square; text-align: right;"><span style="box-sizing: border-box; color: rgb(87, 87, 87); font-size: 1em; font-weight: 600; display: initial; margin: 10px 0px; font-family: mtlight;">وضع سياسة لتدعيم مكتبات الجامعة بالكتب والمراجع والدوريات اللازمة وتنسيق الاستفادة منها.</span></li>
    <li dir="RTL" style="box-sizing: border-box; list-style-type: square; text-align: right;"><span style="box-sizing: border-box; color: rgb(87, 87, 87); font-size: 1em; font-weight: 600; display: initial; margin: 10px 0px; font-family: mtlight;">اقتراح الموازنة الخاصة بمكتبات الجامعة</span></li>
    <li dir="RTL" style="box-sizing: border-box; list-style-type: square; text-align: right;"><span style="box-sizing: border-box; color: rgb(87, 87, 87); font-size: 1em; font-weight: 600; display: initial; margin: 10px 0px; font-family: mtlight;">بحث احتياجات المكتبات الجامعية والتنسيق فيما بينهما بما تساعد على النهوض بالأداء ومواكبة التطورات الحديثة</span></li>
    <li dir="RTL" style="box-sizing: border-box; list-style-type: square; text-align: right;"><span style="box-sizing: border-box; color: rgb(87, 87, 87); font-size: 1em; font-weight: 600; display: initial; margin: 10px 0px; font-family: mtlight;">اعتماد نتائج جرد الإلكترونى للمكتبات والموافقة على خصم العجز فى حدود النسبة اللائحية المقرر</span></li>
    <li dir="RTL" style="box-sizing: border-box; list-style-type: square; text-align: right;"><span style="box-sizing: border-box; color: rgb(87, 87, 87); font-size: 1em; font-weight: 600; display: initial; margin: 10px 0px; font-family: mtlight;">الموافقة على استبعاد الكتب والمطبوعات التى ليس هناك حاجة لها</span></li>
    <li dir="RTL" style="box-sizing: border-box; list-style-type: square; text-align: right;"><span style="box-sizing: border-box; color: rgb(87, 87, 87); font-size: 1em; font-weight: 600; display: initial; margin: 10px 0px; font-family: mtlight;">النظر فى قبول الهدايا التى تقدم إلى المكتبات والإهداء والتبادل بينها وبين المكتبات</span></li>
    <li dir="RTL" style="box-sizing: border-box; list-style-type: square; text-align: right;"><span style="box-sizing: border-box; color: rgb(87, 87, 87); font-size: 1em; font-weight: 600; display: initial; margin: 10px 0px; font-family: mtlight;">الإشراف على ما تصدرة الجامعات من مؤلفات أو بحوث أو نشرات او مطبوعات علمية أخرى يتفق عليها من اعتمادات المكتبة</span></li>
    <li dir="RTL" style="box-sizing: border-box; list-style-type: square; text-align: right;"><span style="box-sizing: border-box; color: rgb(87, 87, 87); font-size: 1em; font-weight: 600; display: initial; margin: 10px 0px; font-family: mtlight;">إقرار النظم الإدارية والأساليب الفنية للعمل بالكتبات</span></li>
    <li dir="RTL" style="box-sizing: border-box; list-style-type: square; text-align: right;"><span style="box-sizing: border-box; color: rgb(87, 87, 87); font-size: 1em; font-weight: 600; display: initial; margin: 10px 0px; font-family: mtlight;">وضع شروط للأعلان عن الوظائف الشاغرة بالكتبات الجامعية</span></li>
    <li dir="RTL" style="box-sizing: border-box; list-style-type: square; text-align: right;"><span style="box-sizing: border-box; color: rgb(87, 87, 87); font-size: 1em; font-weight: 600; display: initial; margin: 10px 0px; font-family: mtlight;">إقرار مقترحات تنظيم معارض وندوات فى مجال المكتبات والمعلومات</span></li>
    <li dir="RTL" style="box-sizing: border-box; list-style-type: square; text-align: right;"><span style="box-sizing: border-box; color: rgb(87, 87, 87); font-size: 1em; font-weight: 600; display: initial; margin: 10px 0px; font-family: mtlight;">تحديد الآوعية الإلكترونية والأجهزة والوسائل المطلوب اقتنائها لمكتبات الجامعة</span></li>
    <li dir="RTL" style="box-sizing: border-box; list-style-type: square; text-align: right;"><span style="box-sizing: border-box; color: rgb(87, 87, 87); font-size: 1em; font-weight: 600; display: initial; margin: 10px 0px; font-family: mtlight;">الإشراف على &nbsp;تطوير مكتبات الجامعة ورفع مستوى الأداء &nbsp;بها إلكترونيا وبما يخدم التعليم المفتوح</span></li>
    <li dir="RTL" style="box-sizing: border-box; list-style-type: square; text-align: right;"><span style="box-sizing: border-box; color: rgb(87, 87, 87); font-size: 1em; font-weight: 600; display: initial; margin: 10px 0px; font-family: mtlight;">اقتراح البرامج والنظم الإلكترونية للمكتبات والإشراف على تنفيذها &nbsp;وتطويرها</span></li>
    <li dir="RTL" style="box-sizing: border-box; list-style-type: square; text-align: right;"><span style="box-sizing: border-box; color: rgb(87, 87, 87); font-size: 1em; font-weight: 600; display: initial; margin: 10px 0px; font-family: mtlight;">تقديم تقرير سنوى عن أعمال اللجنة ومقترحاتها</span></li>
    <li dir="RTL" style="box-sizing: border-box; list-style-type: square; text-align: right;"><span style="box-sizing: border-box; color: rgb(87, 87, 87); font-size: 1em; font-weight: 600; display: initial; margin: 10px 0px; font-family: mtlight;">أى أعمال أخرى تتعلق بأهداف للجنة</span></li>
</ul>



                            </div>
                            <!--           <div class="tab-pane fade" id="strategic_objectives-tab-pane" role="tabpanel"
                                            aria-labelledby="strategic_objectives-tab"
                                            tabindex="0">




                                           <ul>
                                               <li>1 - aaa</li>
                                               <li>1 - aaa</li>
                                               <li>1 - aaa</li>

                                           </ul>
                                       </div>     -->
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


    {{--------------------     End of section 6 (Sub Department) -----------------------------------}}

@endsection


@push('scripts')


@endpush
