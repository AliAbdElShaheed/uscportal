@extends('layouts.frontend.app')

@section('content')

    {{--------------------------Start of nav bar--------------------------------------------------}}




    {{--------------------------Start of section 1 Landing (banners)------------------------------}}
    <section class="landing d-flex justify-content-center align-items-center">
        <div class="image">
            <div class="text-center text-light">
                <h1>@lang('site.FacultiesAndInstitutions')</h1>
                <p class="fs-6 text-white-50 mb-5">@lang('site.FacultiesAndInstitutionsAbout')</p>
                <a href="#colleges_and_institutes" class="btn rounded-pill main-btn">Get Started</a>
            </div>
        </div>
    </section>
    {{--------------------------End of section 1 Landing (banners)-----  -------------------------}}



    {{--------------------------Start of section 2 (Colleges and Institutes) ---------------------}}
    <div id="colleges_and_institutes" class="colleges_and_institutes president_word text-center pb-5 pt-2">
        <div class="container pb-5 pt-1 text-center">
            <img class="mb-4" src="{{asset('uploads/frontend/images/12.png')}}" alt=""/>
            <h2 class="fw-bold main-title">@lang('site.FacultiesAndInstitutions')</h2>

            <div class="row justify-content-center">

                <div class="col-md-auto">
                    <ul class="nav nav-pills mb-3 rounded-start-4 rounded-end-4 justify-content-center align-items-center"
                        id="pills-tab"
                        role="tablist">
                        <li class="nav-item border border-primary-subtle rounded-start-4" role="presentation">
                            <button class="nav-link active pe-5 ps-5 rounded-start-4" id="pills-home-tab"
                                    data-bs-toggle="pill"
                                    data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                    aria-selected="true">@lang('site.PracticalFaculties')
                            </button>
                        </li>
                        <li class="nav-item border border-primary-subtle" role="presentation">
                            <button class="nav-link pe-5 ps-5" id="pills-profile-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-profile" type="button" role="tab"
                                    aria-controls="pills-profile"
                                    aria-selected="false">@lang('site.TheoreticalFaculties')
                            </button>
                        </li>
                        <li class="nav-item border border-primary-subtle rounded-end-4" role="presentation">
                            <button class="nav-link pe-5 ps-5 rounded-end-4" id="pills-contact-tab"
                                    data-bs-toggle="pill"
                                    data-bs-target="#pills-contact" type="button" role="tab"
                                    aria-controls="pills-contact"
                                    aria-selected="false">@lang('site.ResearchInstitutes')
                            </button>
                        </li>

                    </ul>


                    <div class="tab-content pt-5"
                         id="pills-tabContent">

                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                             aria-labelledby="pills-home-tab" tabindex="0">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                        <div class="card mb-5">
                                            <img src="{{asset('uploads/frontend/images/f_logos/pharm.png')}}" alt=""/>
                                            <div class="card-body">
                                                <h4>@lang('site.Pharm')</h4>
                                            </div>
                                            <div class="info">
                                                <a href="http://fop.usc.edu.eg">Visit Site</a>
                                                @if(app()->getLocale() == 'ar')
                                                    <i class="fas fa-long-arrow-alt-left"></i>
                                                @else
                                                    <i class="fas fa-long-arrow-alt-right"></i>
                                                @endif

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                        <div class="card mb-5">
                                            <img src="{{asset('uploads/frontend/images/f_logos/vet.png')}}" alt=""/>
                                            <div class="card-body">
                                                <h4>@lang('site.Vet')</h4>
                                            </div>
                                            <div class="info">
                                                <a href="http://vet.usc.edu.eg">Visit Site</a>
                                                @if(app()->getLocale() == 'ar')
                                                    <i class="fas fa-long-arrow-alt-left"></i>
                                                @else
                                                    <i class="fas fa-long-arrow-alt-right"></i>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                        <div class="card mb-5">
                                            <img src="{{asset('uploads/frontend/images/f_logos/tourism.png')}}" alt=""/>
                                            <div class="card-body">
                                                <h4>@lang('site.tourism')</h4>
                                            </div>
                                            <div class="info">
                                                <a href="http://fth.usc.edu.eg">Visit Site</a>
                                                @if(app()->getLocale() == 'ar')
                                                    <i class="fas fa-long-arrow-alt-left"></i>
                                                @else
                                                    <i class="fas fa-long-arrow-alt-right"></i>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                        <div class="card mb-5">
                                            <img src="{{asset('uploads/frontend/images/f_logos/FCAI.png')}}" alt=""/>
                                            <div class="card-body">
                                                <h4>@lang('site.FCAI')</h4>
                                            </div>
                                            <div class="info">
                                                <a href="http://fcai.usc.edu.eg">Visit Site</a>
                                                @if(app()->getLocale() == 'ar')
                                                    <i class="fas fa-long-arrow-alt-left"></i>
                                                @else
                                                    <i class="fas fa-long-arrow-alt-right"></i>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                        <div class="card mb-5">
                                            <img src="{{asset('uploads/frontend/images/f_logos/phedu.png')}}" alt=""/>
                                            <div class="card-body">
                                                <h4>@lang('site.phedu')</h4>
                                            </div>
                                            <div class="info">
                                                <a href="http://phed.usc.edu.eg">Visit Site</a>
                                                @if(app()->getLocale() == 'ar')
                                                    <i class="fas fa-long-arrow-alt-left"></i>
                                                @else
                                                    <i class="fas fa-long-arrow-alt-right"></i>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="w-1102 tab-pane fade" id="pills-profile" role="tabpanel"
                             aria-labelledby="pills-profile-tab"
                             tabindex="0">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                        <div class="card mb-5">
                                            <img src="{{asset('uploads/frontend/images/f_logos/edu.png')}}" alt=""/>
                                            <div class="card-body">
                                                <h4>@lang('site.edu')</h4>
                                            </div>
                                            <div class="info">
                                                <a href="http://edu.usc.edu.eg">Visit Site</a>
                                                @if(app()->getLocale() == 'ar')
                                                    <i class="fas fa-long-arrow-alt-left"></i>
                                                @else
                                                    <i class="fas fa-long-arrow-alt-right"></i>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                        <div class="card mb-5">
                                            <img src="{{asset('uploads/frontend/images/f_logos/kind.png')}}" alt=""/>
                                            <div class="card-body">
                                                <h4>@lang('site.kind')</h4>
                                            </div>
                                            <div class="info">
                                                <a href="http://ech.usc.edu.eg">Visit Site</a>
                                                @if(app()->getLocale() == 'ar')
                                                    <i class="fas fa-long-arrow-alt-left"></i>
                                                @else
                                                    <i class="fas fa-long-arrow-alt-right"></i>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                        <div class="card mb-5">
                                            <img src="{{asset('uploads/frontend/images/f_logos/law.png')}}" alt=""/>
                                            <div class="card-body">
                                                <h4>@lang('site.law')</h4>
                                            </div>
                                            <div class="info">
                                                <a href="http://law.usc.edu.eg">Visit Site</a>
                                                @if(app()->getLocale() == 'ar')
                                                    <i class="fas fa-long-arrow-alt-left"></i>
                                                @else
                                                    <i class="fas fa-long-arrow-alt-right"></i>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                        <div class="card mb-5">
                                            <img src="{{asset('uploads/frontend/images/f_logos/com.png')}}" alt=""/>
                                            <div class="card-body">
                                                <h4>@lang('site.com')</h4>
                                            </div>
                                            <div class="info">
                                                <a href="http://com.usc.edu.eg">Visit Site</a>
                                                @if(app()->getLocale() == 'ar')
                                                    <i class="fas fa-long-arrow-alt-left"></i>
                                                @else
                                                    <i class="fas fa-long-arrow-alt-right"></i>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>

                        <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                             aria-labelledby="pills-contact-tab"
                             tabindex="0">
                            <div class="container">
                                <div class="row">

                                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-5">
                                        <div class="card mb-5">
                                            <img src="{{asset('uploads/frontend/images/f_logos/esri.png')}}" alt=""/>
                                            <div class="card-body">
                                                <h4>@lang('site.esri')</h4>
                                            </div>
                                            <div class="info">
                                                <a href="http://esri.usc.edu.eg">Visit Site</a>
                                                @if(app()->getLocale() == 'ar')
                                                    <i class="fas fa-long-arrow-alt-left"></i>
                                                @else
                                                    <i class="fas fa-long-arrow-alt-right"></i>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-5">
                                        <div class="card mb-5">
                                            <img src="{{asset('uploads/frontend/images/f_logos/gebri.png')}}" alt=""/>
                                            <div class="card-body">
                                                <h4>@lang('site.gebri')</h4>
                                            </div>
                                            <div class="info">
                                                <a href="http://gebri.usc.edu.eg">Visit Site</a>
                                                @if(app()->getLocale() == 'ar')
                                                    <i class="fas fa-long-arrow-alt-left"></i>
                                                @else
                                                    <i class="fas fa-long-arrow-alt-right"></i>
                                                @endif
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
    </div>
    {{--------------------------End of section 2 (Colleges and Institutes) -----------------------}}








    {{--------------------------End of JS-----------------------}}
@endsection


@push('scripts')


@endpush
