@extends('layouts.frontend.app')

@section('content')

    {{--------------------------Start of section 1 Landing (banners)------------------------------}}
    <section class="landing d-flex justify-content-center align-items-center">
        <div class="image">
            <div class="text-center text-light">
                <h1>@lang('site.opening_about_page_word')</h1>
                <p class="fs-6 text-white-50 mb-5">@lang('site.sub_opening_about_page_word')</p>
                <a href="#president_word" class="btn rounded-pill main-btn">@lang('site.get_started')</a>
            </div>
        </div>
    </section>
    {{--------------------------End of section 1 Landing (banners)-----  -------------------------}}



    {{--------------------------Start of section 2 (President Word) ------------------------------}}
    <div id="president_word" class="president_word text-center pb-5 pt-2">
        <div class="container pb-5 pt-1">
            <img class="mb-4" src="{{asset('uploads/frontend/images/12.png')}}" alt=""/>
            <h2 class="fw-bold main-title">@lang('site.president_word')</h2>

            <div class="row">
                <div class="col-lg-4 col-sm-12">
                    <div class="president box bg-white">
                        <img class="img-fluid" src="{{asset('uploads/frontend/images/102.jpg')}}" alt=""/>
                        <h4 class="p-3 text-dark border border-primary-subtle">@lang('site.president_name')</h4>

                    </div>
                </div>
                <div class="col-lg-8 col-sm-12">
                    <blockquote class="text-black-50  px-3 text-center justify-content-end">
                        @lang('site.president_words')
                    </blockquote>
                </div>
            </div>
        </div>
    </div>
    {{--------------------------End of section 2 (President Word) --------------------------------}}


    <div class="spikes"></div>


    {{--------------------------Start of section 3 (University History) --------------------------}}
    <div class="university_history" id="university_history">
        <h2 class="main-title">@lang('site.university_history')</h2>

        <div class="container">
            <div class="row justify-content-md-center">

                <div class="col-xs-12 col-lg-10 align-content-center">

                    <p>@lang('site.university_histories')
                    </p>
                    <h4>@lang('site.university_histories1')</h4>
                    <h6>@lang('site.university_histories2')</h6>
                    <h6>@lang('site.university_histories3')</h6>
                    <h6>@lang('site.university_histories4')</h6>
                    <h6>@lang('site.university_histories5')</h6>
                    <h6>@lang('site.university_histories6')</h6>
                    <h6>@lang('site.university_histories7')</h6>
                    <h6>@lang('site.university_histories8')</h6>
                    <h6>@lang('site.university_histories9')</h6>
                    <h6>@lang('site.university_histories10')</h6>
                    <h6>@lang('site.university_histories11')</h6>
                    <h6>@lang('site.university_histories12')</h6>
                    <p>@lang('site.university_histories13')
                    </p>


                    <!--  <h2>Former presidents of the university</h2>
                      <ul>
                          <li class="pb-2">- DR / Khalid Gafar <span>From Jan 17, 2022 To Jan 17, 2022 </span></li>
                          <li class="pb-2">- DR / Ahmed Bayoomi <span>From Jan 17, 2022 To Jan 17, 2022 </span></li>
                          <li class="pb-2">- DR / Esam Motwaly <span>From Jan 17, 2022 To Jan 17, 2022 </span></li>
                          <li class="pb-2">- DR / Salah ElBalal <span>From Jan 17, 2022 To Jan 17, 2022 </span></li>
                          <li class="pb-2">- DR / Ahmed Zaglol <span>From Jan 17, 2022 To Jan 17, 2022 </span></li>
                      </ul>
                      -->

                </div>

            </div>


        </div>
    </div>
    {{--------------------------End of section 3 (University History) ----------------------------}}




    {{--------------------------End of section 4 (strategies) --------------------------------------}}
    <div class="strategies" id="strategies">
        <h2>@lang('site.university_strategies')</h2>
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col col-lg-10 align-content-center p-0 bg-white">
                    <div class="box">
                        <ul class="s_ul nav nav-tabs pt-3 " id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link fw-bold active" id="home-tab" data-bs-toggle="tab"
                                        data-bs-target="#home-tab-pane" type="button" role="tab"
                                        aria-controls="home-tab-pane"
                                        aria-selected="true">@lang('site.vision')
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link fw-bold" id="mission-tab" data-bs-toggle="tab"
                                        data-bs-target="#mission-tab-pane" type="button" role="tab"
                                        aria-controls="mission-tab-pane"
                                        aria-selected="false">@lang('site.mission')
                                </button>
                            </li>
                            <li class="nav-item fw-bold" role="presentation">
                                <button class="nav-link" id="values-tab" data-bs-toggle="tab"
                                        data-bs-target="#values-tab-pane" type="button" role="tab"
                                        aria-controls="values-tab-pane"
                                        aria-selected="false">@lang('site.values')
                                </button>
                            </li>
                            <li class="nav-item fw-bold" role="presentation">
                                <button class="nav-link" id="objectives-tab" data-bs-toggle="tab"
                                        data-bs-target="#objectives-tab-pane" type="button" role="tab"
                                        aria-controls="objectives-tab-pane"
                                        aria-selected="false">@lang('site.objectives')
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
                                 tabindex="0">@lang('site.vision_data')
                            </div>
                            <div class="tab-pane fade" id="mission-tab-pane" role="tabpanel"
                                 aria-labelledby="mission-tab"
                                 tabindex="0">@lang('site.mission_data')
                            </div>
                            <div class="tab-pane fade" id="values-tab-pane" role="tabpanel" aria-labelledby="values-tab"
                                 tabindex="0">@lang('site.values_data')


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
            </div>
        </div>
    </div>
    {{--------------------------End of section 4 (strategies) -- -----------------------------------}}





    {{--------------------------Start of section 5 (University Council) ----------------------------}}
    <div class="university_council text-center pb-5 pt-2" id="university_council">
        <div class="container pb-5 pt-1">
            <img class="mb-4" src="{{asset('uploads/frontend/images/12.png')}}" alt=""/>
            <h2 class="fw-bold main-title">مجلس الجامعة</h2>
            <p class="text-black-50">
                @lang('site.council_note')
            </p>
            <h4 style="direction: rtl;">رئيس المجلس</h4>
            <div class="progTime" style="direction: rtl;"><img
                    src="http://pic.usc.edu.eg/usc/index.php?&amp;src=b28232e5888735fe2d58484942e2c1f5.jpg&amp;w=150&amp;h=124&amp;iar=1"
                    height="124"/></div>
            <div class="progInfo">
                <div class="progName">
                    <h4 style="direction: rtl;">أ.د/ شادن معاويه</h4>
                </div>
                <div class="progPresenter">
                    <p class="presenterName" style="direction: rtl;">رئيس الجامعة</p>
                </div>
            </div>
            <h4 style="direction: rtl;">أعضاء مجلس جامعة مدينة السادات</h4>
            <div class="row">
                <div class="col-md-3">
                    <div class="progTime" style="direction: rtl;"><img
                            src="http://pic.usc.edu.eg/usc/index.php?&amp;src=57c3d8e7f84cfa05ab87c923c3d7ea6e.png&amp;w=150&amp;h=124&amp;iar=1"
                            height="124"/></div>
                    <div class="progInfo">
                        <div class="progName">
                            <h4 style="direction: rtl;">أ.د/ شريف محمد علي</h4>
                        </div>
                        <div class="progPresenter">
                            <p class="presenterName" style="direction: rtl;">نائب رئيس الجامعة لشئون التعليم والطلاب</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="progTime" style="direction: rtl;"><img
                            src="http://pic.usc.edu.eg/usc/index.php?&amp;src=e9d3e1ace1b9454a441d0c431ea14255.jpg&amp;w=150&amp;h=124&amp;iar=1"
                            height="124"/></div>
                    <div class="progInfo">
                        <div class="progName">
                            <h4 style="direction: rtl;">أ.د / خالد محمود محمد جعفر</h4>
                        </div>
                        <div class="progPresenter">
                            <p class="presenterName" style="direction: rtl;">نائب رئيس الجامعة لشئون خدمة المجتمع وتنمية
                                البيئة</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="progTime" style="direction: rtl;"><img
                            src="http://pic.usc.edu.eg/usc/index.php?&amp;src=ab2ff20dfe8dbfbc74994f837e8da152.jpg&amp;w=150&amp;h=124&amp;iar=1"
                            height="124"/></div>
                    <div class="progInfo">
                        <div class="progName">
                            <h4 style="direction: rtl;">ا.د أسامة ربيع أمين سليمان</h4>
                        </div>
                        <div class="progPresenter">
                            <p class="presenterName" style="direction: rtl;">عميد كلية التجارة</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="progTime" style="direction: rtl;"><img
                            src="http://pic.usc.edu.eg/usc/index.php?&amp;src=8b2895ff5c3b6f91c5b136b1f2764db7.jpg&amp;w=150&amp;h=124&amp;iar=1"
                            height="124"/></div>
                    <div class="progInfo">
                        <div class="progName">
                            <h4 style="direction: rtl;">أ.د/ علاء الدين حسين مصطفى</h4>
                        </div>
                        <div class="progPresenter">
                            <p class="presenterName" style="direction: rtl;">عميد كلية الطب البيطري</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="progTime" style="direction: rtl;"><img
                            src="http://pic.usc.edu.eg/usc/index.php?&amp;src=&amp;w=150&amp;h=124&amp;iar=1"
                            height="124"/>
                    </div>
                    <div class="progInfo">
                        <div class="progName">
                            <h4 style="direction: rtl;">أ.د/ سعيد فارق عبد القادر موسى</h4>
                        </div>
                        <div class="progPresenter">
                            <p class="presenterName" style="direction: rtl;">عميد كلية التربية للطفولة المبكرة</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="progTime" style="direction: rtl;"><img
                            src="http://pic.usc.edu.eg/usc/index.php?&amp;src=&amp;w=150&amp;h=124&amp;iar=1"
                            height="124"/>
                    </div>
                    <div class="progInfo">
                        <div class="progName">
                            <h4 style="direction: rtl;">أ.د/ سعيد فارق عبد القادر موسى</h4>
                        </div>
                        <div class="progPresenter">
                            <p class="presenterName" style="direction: rtl;">عميد كلية التربية للطفولة المبكرة</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="progTime" style="direction: rtl;"><img
                            src="http://pic.usc.edu.eg/usc/index.php?&amp;src=&amp;w=150&amp;h=124&amp;iar=1"
                            height="124"/>
                    </div>
                    <div class="progInfo">
                        <div class="progName">
                            <h4 style="direction: rtl;">أ.د / نهاد كمال</h4>
                        </div>
                        <div class="progPresenter">
                            <p class="presenterName" style="direction: rtl;">عميد كلية السياحة و الفنادق</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="progTime" style="direction: rtl;"><img
                            src="http://pic.usc.edu.eg/usc/index.php?&amp;src=&amp;w=150&amp;h=124&amp;iar=1"
                            height="124"/>
                    </div>
                    <div class="progInfo">
                        <div class="progName">
                            <h4 style="direction: rtl;">أ.د/ ممدوح محمد السعيد السيد</h4>
                        </div>
                        <div class="progPresenter">
                            <p class="presenterName" style="direction: rtl;">عميد معهد الدراسات والبحوث البيئية</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="progTime" style="direction: rtl;"><img
                            src="http://pic.usc.edu.eg/usc/index.php?&amp;src=&amp;w=150&amp;h=124&amp;iar=1"
                            height="124"/>
                    </div>
                    <div class="progInfo">
                        <div class="progName">
                            <h4 style="direction: rtl;">أ.د/ أحمد ابراهيم أحمد عزب</h4>
                        </div>
                        <div class="progPresenter">
                            <p class="presenterName" style="direction: rtl;">عميد كلية التربية الرياضية</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="progTime" style="direction: rtl;"><img
                            src="http://pic.usc.edu.eg/usc/index.php?&amp;src=ae311b57f6c521bc344cd1cfed0009de.jpg&amp;w=150&amp;h=124&amp;iar=1"
                            height="124"/></div>
                    <div class="progInfo">
                        <div class="progName">
                            <h4 style="direction: rtl;">أ.د/ سحر عبد الستار امام</h4>
                        </div>
                        <div class="progPresenter">
                            <p class="presenterName" style="direction: rtl;">عميد كلية الحقوق</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="progTime" style="direction: rtl;"><img
                            src="http://pic.usc.edu.eg/usc/index.php?&amp;src=&amp;w=150&amp;h=124&amp;iar=1"
                            height="124"/>
                    </div>
                    <div class="progInfo">
                        <div class="progName">
                            <h4 style="direction: rtl;">ا.د / خميس محمد خميس</h4>
                        </div>
                        <div class="progPresenter">
                            <p class="presenterName" style="direction: rtl;">عميد كلية التربية</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="progTime" style="direction: rtl;"><img
                            src="http://pic.usc.edu.eg/usc/index.php?&amp;src=&amp;w=150&amp;h=124&amp;iar=1"
                            height="124"/>
                    </div>
                    <div class="progInfo">
                        <div class="progName">
                            <h4 style="direction: rtl;">أ.د/ محمد عبد الخالق اسماعيل</h4>
                        </div>
                        <div class="progPresenter">
                            <p class="presenterName" style="direction: rtl;">عميد كلية الصيدلة</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">

                </div>
                <div class="col-md-3">

                </div>
                <div class="col-md-3">

                </div>
                <div class="col-md-3">

                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="progTime" style="direction: rtl;"><img
                            src="http://pic.usc.edu.eg/usc/index.php?&amp;src=&amp;w=150&amp;h=124&amp;iar=1"
                            height="124"/>
                    </div>
                    <div class="progInfo">
                        <div class="progName">
                            <h4 style="direction: rtl;">ا.د/ طارق مصطفى محمود</h4>
                        </div>
                        <div class="progPresenter">
                            <p class="presenterName" style="direction: rtl;">المدير التنفيذي للمعلومات بالجامعة (
                                cio)</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="progTime" style="direction: rtl;"><img
                            src="http://pic.usc.edu.eg/usc/index.php?&amp;src=c8ca8c368072ec613aaf3e24dee6d811.JPG&amp;w=150&amp;h=124&amp;iar=1"
                            height="124"/></div>
                    <div class="progInfo">
                        <div class="progName">
                            <h4 style="direction: rtl;">أ . د / هانى يوسف حسن</h4>
                        </div>
                        <div class="progPresenter">
                            <p class="presenterName" style="direction: rtl;">مدير مركز القياس والتقويم</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="progTime" style="direction: rtl;"><img
                            src="http://pic.usc.edu.eg/usc/index.php?&amp;src=&amp;w=150&amp;h=124&amp;iar=1"
                            height="124"/>
                    </div>
                    <div class="progInfo">
                        <div class="progName">
                            <h4 style="direction: rtl;">ا.د / ماجدة محمد رفعت أبو الصفا</h4>
                        </div>
                        <div class="progPresenter">
                            <p class="presenterName" style="direction: rtl;">مدير إدارة/ مركز ضمان الجودة والتطوير
                                المستمر</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="progTime" style="direction: rtl;"><img
                            src="http://pic.usc.edu.eg/usc/index.php?&amp;src=&amp;w=150&amp;h=124&amp;iar=1"
                            height="124"/>
                    </div>
                    <div class="progInfo">
                        <div class="progName">
                            <h4 style="direction: rtl;">المستشار / أحمد شوقي سرور</h4>
                        </div>
                        <div class="progPresenter">
                            <p class="presenterName" style="direction: rtl;">المستشار القانوني لرئيس الجامعة</p>
                        </div>
                    </div>
                </div>
            </div>
            <h4 style="direction: rtl;">أمانة المجالس واللجان والمشاركين</h4>
            <div class="row">
                <div class="col-md-4">
                    <div class="progTime" style="direction: rtl;"><img
                            src="http://pic.usc.edu.eg/usc/index.php?&amp;src=&amp;w=150&amp;h=124&amp;iar=1"
                            height="124"/>
                    </div>
                    <div class="progInfo">
                        <div class="progName">
                            <h4 style="direction: rtl;">أ./ سناء عبد التواب محمد</h4>
                        </div>
                        <div class="progPresenter">
                            <p class="presenterName" style="direction: rtl;">سكرتيرة المجلس</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="progTime" style="direction: rtl;"><img
                            src="http://pic.usc.edu.eg/usc/index.php?&amp;src=&amp;w=150&amp;h=124&amp;iar=1"
                            height="124"/>
                    </div>
                    <div class="progInfo">
                        <div class="progName">
                            <h4 style="direction: rtl;">أ /نجوي ابراهيم كيلاني</h4>
                        </div>
                        <div class="progPresenter">
                            <p class="presenterName" style="direction: rtl;">سكرتيرة المجلس</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="progTime" style="direction: rtl;"><img
                            src="http://pic.usc.edu.eg/usc/index.php?&amp;src=&amp;w=150&amp;h=124&amp;iar=1"
                            height="124"/>
                    </div>
                    <div class="progInfo">
                        <div class="progName">
                            <h4 style="direction: rtl;">أ / سلوى عثمان الشنوانى</h4>
                        </div>
                        <div class="progPresenter">
                            <p class="presenterName" style="direction: rtl;">مدير ادارة سكرتارية مكتب رئيس الجامعة</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center mt-5">
                <a class="btn rounded-pill main-btn-dark text-uppercase" href="#">Visit Site</a>
            </div>
        </div>
    </div>
    {{--------------------------End of section 5 (University Council) ------------------------------}}


    <div class="spikes"></div>


    {{--------------------------Start of section 6 (Citizens Service Centers) ----------------------}}
    <div class="university_history" id="university_history">
        <h2 class="main-title">@lang('site.CitizensServiceCenters')</h2>

        <div class="container">
            <div class="row justify-content-md-center">

                <div class="col-xs-12 col-lg-10 align-content-center">


                    <ul>

                        <li class="pb-2">
                            <a href="#">- مركز الخدمة العامة</a>
                        </li>
                        <li class="pb-2">
                            <a href="#">- مركز الخدمات الطبية البيطرية</a>
                        </li>
                        <li class="pb-2">
                            <a href="#">- مختبرات تدريب Cisco</a>
                        </li>
                        <li class="pb-2">
                            <a href="#">- وحدة آل تيكو</a>
                        </li>
                        <li class="pb-2">
                            <a href="#">- معمل أبحاث الدم، كلية الطب البيطري</a>
                        </li>
                        <li class="pb-2">
                            <a href="#">- مركز تدريب الجامعة الأمريكية بالجامعة</a>
                        </li>
                        <li class="pb-2">
                            <a href="#">- معمل التحاليل الطبية بمعهد الوراثة
                                الهندسة</a>
                        </li>
                        <li class="pb-2">
                            <a href="#">- وحدة التدريب على اختبارات التحول الرقمي</a>
                        </li>

                        <!--         <li class="pb-2"><a href="#">- Public Service Center</a></li>
                                 <li class="pb-2"><a href="#">- Veterinary Medical Services Center</a></li>
                                 <li class="pb-2"><a href="#">- Cisco training labs</a></li>
                                 <li class="pb-2"><a href="#">- Al Tieco unit</a></li>
                                 <li class="pb-2"><a href="#">- Blood Research Laboratory, College of Veterinary Medicine</a>
                                 </li>
                                 <li class="pb-2"><a href="#">- The American University Training Center at the university</a>
                                 </li>
                                 <li class="pb-2"><a href="#">- Medical analysis laboratory at the Institute of Genetic
                                         Engineering</a></li>
                                 <li class="pb-2"><a href="#">- Training Unit for Digital Transformation Tests</a></li>
                                 <li class="pb-2"><a href="#">- Public Service Center</a></li>
                             </ul>
         -->
                </div>

            </div>


        </div>
    </div>
    {{--------------------------End of section 6 (Citizens Service Centers) ------------------------}}







    {{---------Start of section 7 (Privacy Policy, Terms of use and Copyright & Disclaimer) --------}}
    <!--  <div class="privacy_policy" id="privacy_policy">
        <h2>Privacy Policy, Terms of Use and Copyright & Disclaimer</h2>
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col col-lg-10 align-content-center p-0">
                    <div class="box">
                        <div class="d-flex align-items-start justify-content-start">
                            <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist"
                                 aria-orientation="vertical">
                                <button class="nav-link active fw-bold" id="v-pills-home-tab" data-bs-toggle="pill"
                                        data-bs-target="#v-pills-home" type="button" role="tab"
                                        aria-controls="v-pills-home"
                                        aria-selected="true">Privacy Policy
                                </button>
                                <button class="nav-link fw-bold" id="v-pills-profile-tab" data-bs-toggle="pill"
                                        data-bs-target="#v-pills-profile" type="button" role="tab"
                                        aria-controls="v-pills-profile" aria-selected="false">Terms of Use
                                </button>
                                <button class="nav-link fw-bold" id="v-pills-messages-tab" data-bs-toggle="pill"
                                        data-bs-target="#v-pills-messages" type="button" role="tab"
                                        aria-controls="v-pills-messages" aria-selected="false">Copyright &
                                    Disclaimer
                                </button>

                            </div>
                            <div class="tab-content" id="v-pills-tabContent">
                                <div class="tab-pane fade show fw-bold active" id="v-pills-home" role="tabpanel"
                                     aria-labelledby="v-pills-home-tab" tabindex="0">Lorem ipsum dolor sit amet,
                                    consectetur
                                    adipisicing elit. Asperiores commodi cum earum esse mollitia nihil possimus
                                    repudiandae
                                    saepe similique? Architecto asperiores enim est hic odio, officiis provident
                                    quaerat
                                    qui
                                    quia?
                                </div>
                                <div class="tab-pane fade fw-bold pt-4rem" id="v-pills-profile" role="tabpanel"
                                     aria-labelledby="v-pills-profile-tab" tabindex="0">Lorem ipsum dolor sit amet,
                                    consectetur adipisicing elit. Adipisci autem cum debitis dignissimos iusto nobis
                                    placeat
                                    quaerat quasi quia quos? Blanditiis deserunt ea facere laudantium porro ratione
                                    sunt
                                    tempore. Odit.
                                </div>
                                <div class="tab-pane fade fw-bold pt-9rem" id="v-pills-messages" role="tabpanel"
                                     aria-labelledby="v-pills-messages-tab" tabindex="0">Lorem ipsum dolor sit amet,
                                    consectetur adipisicing elit. Enim exercitationem impedit itaque nam nemo odio
                                    sed
                                    ut
                                    voluptatibus. Beatae consequuntur cumque, dolorem doloremque esse eveniet ipsum
                                    minus
                                    qui sit soluta!
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


-->

    {{--------- End of section 7 (Privacy Policy, Terms of use and Copyright & Disclaimer)  --------}}
@endsection


@push('scripts')


@endpush
