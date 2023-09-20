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
    {{--------------------------End of section 4 (Vice Rector's Office) -- ----------------------------}}

@endsection


@push('scripts')


@endpush
