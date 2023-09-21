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

@endsection


@push('scripts')


@endpush
