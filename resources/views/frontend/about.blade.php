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
                    <blockquote class="text-black-50  px-3 text-start justify-content-end">
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
                                fuga omnis perspiciatis provident, quas, quidem reiciendis reprehenderit sapiente sed
                                sunt
                                tempore. Amet animi eius explicabo in sunt.
                            </div>
                            <div class="tab-pane fade" id="mission-tab-pane" role="tabpanel"
                                 aria-labelledby="mission-tab"
                                 tabindex="0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur cum
                                deleniti
                                dolorem doloribus eos, expedita facere laudantium magni minima modi necessitatibus,
                                omnis
                                quia
                                quos repellat sapiente tempore, temporibus vel voluptatem?
                            </div>
                            <div class="tab-pane fade" id="values-tab-pane" role="tabpanel" aria-labelledby="values-tab"
                                 tabindex="0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi
                                consequuntur
                                earum ex expedita fuga incidunt inventore itaque minus, nesciunt nostrum numquam
                                obcaecati
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
    {{--------------------------End of section 5 (University Council) ------------------------------}}


    <div class="spikes"></div>


    {{--------------------------Start of section 6 (Citizens Service Centers) ----------------------}}
    <div class="university_history" id="university_history">
        <h2 class="main-title">Citizens Service Centers</h2>

        <div class="container">
            <div class="row justify-content-md-center">

                <div class="col-xs-12 col-lg-10 align-content-center">

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, aliquam asperiores assumenda
                        autem
                        corporis, doloribus ea eaque error est ex harum illo labore molestias nihil non quidem rem
                        reprehenderit tenetur!</p>
                    <ul>
                        <li class="pb-2"><a href="#">- Public Service Center</a></li>
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
                                        aria-controls="v-pills-messages" aria-selected="false">Copyright & Disclaimer
                                </button>

                            </div>
                            <div class="tab-content" id="v-pills-tabContent">
                                <div class="tab-pane fade show fw-bold active" id="v-pills-home" role="tabpanel"
                                     aria-labelledby="v-pills-home-tab" tabindex="0">Lorem ipsum dolor sit amet,
                                    consectetur
                                    adipisicing elit. Asperiores commodi cum earum esse mollitia nihil possimus
                                    repudiandae
                                    saepe similique? Architecto asperiores enim est hic odio, officiis provident quaerat
                                    qui
                                    quia?
                                </div>
                                <div class="tab-pane fade fw-bold pt-4rem" id="v-pills-profile" role="tabpanel"
                                     aria-labelledby="v-pills-profile-tab" tabindex="0">Lorem ipsum dolor sit amet,
                                    consectetur adipisicing elit. Adipisci autem cum debitis dignissimos iusto nobis
                                    placeat
                                    quaerat quasi quia quos? Blanditiis deserunt ea facere laudantium porro ratione sunt
                                    tempore. Odit.
                                </div>
                                <div class="tab-pane fade fw-bold pt-9rem" id="v-pills-messages" role="tabpanel"
                                     aria-labelledby="v-pills-messages-tab" tabindex="0">Lorem ipsum dolor sit amet,
                                    consectetur adipisicing elit. Enim exercitationem impedit itaque nam nemo odio sed
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
    {{--------- End of section 7 (Privacy Policy, Terms of use and Copyright & Disclaimer)  --------}}
@endsection


@push('scripts')


@endpush
