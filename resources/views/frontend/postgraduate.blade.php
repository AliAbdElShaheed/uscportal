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



    {{--------------------------Start of section 2 (President Word) ------------------------------}}
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
    {{--------------------------End of section 2 (President Word) --------------------------------}}



    <div class="spikes"></div>


    {{--------------------------Start of section 3 (postgraduate word) --------------------------}}
    <div class="university_history" id="university_history">
        <h2 class="main-title">@lang('site.main_postgraduate_word')</h2>

        <div class="container">
            <div class="row justify-content-md-center">

                <div class="col-xs-12 col-lg-10 align-content-center">

                    <p>@lang('site.main_postgraduate_words')
                    </p>


                </div>

            </div>


        </div>
    </div>
    {{--------------------------End of section 3 (postgraduate word) ----------------------------}}




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
                <div class="col-md-4">
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

                <div class="col-md-4">
                    <div class="progInfo">
                        <div class="progName">
                            <h4 style="direction: rtl;">أ.د/ سعيد فارق عبد القادر موسى</h4>
                        </div>
                        <div class="progPresenter">
                            <p class="presenterName" style="direction: rtl;">عميد كلية التربية للطفولة المبكرة</p>
                        </div>
                    </div>
                    <div class="progTime" style="direction: rtl;"><img
                            src="http://pic.usc.edu.eg/usc/index.php?&amp;src=&amp;w=150&amp;h=124&amp;iar=1"
                            height="124"/>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="progInfo">
                        <div class="progName">
                            <h4 style="direction: rtl;">أ.د/ سعيد فارق عبد القادر موسى</h4>
                        </div>
                        <div class="progPresenter">
                            <p class="presenterName" style="direction: rtl;">عميد كلية التربية للطفولة المبكرة</p>
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
    </div>
    {{--------------------------End of section 4 (Vice Rector's Office) -- ----------------------------}}

@endsection


@push('scripts')


@endpush
