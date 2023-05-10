<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USC</title>

    <!-- ------------------------ Styles ------------------------ -->
    @if (app()->getLocale() == 'ar')
        <link rel="stylesheet" href="{{ asset('dashboard_files/css/font-awesome-rtl.min.css') }}">
        <link rel="stylesheet" href="{{ asset('dashboard_files/css/AdminLTE-rtl.min.css') }}">
        <link href="https://fonts.googleapis.com/css?family=Cairo:400,700" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('dashboard_files/css/bootstrap-rtl.min.css') }}">
        <link rel="stylesheet" href="{{ asset('dashboard_files/css/rtl.css') }}">

        <style>
            body, h1, h2, h3, h4, h5, h6 {
                font-family: 'Cairo', sans-serif !important;
            }
        </style>
    @else
        <!--font awesome-->
        <link rel="stylesheet" href="{{ asset('frontend_files/css/font-awesome5.11.2.min.css') }}">
        <!--bootstrap-->
        <link rel="stylesheet" href="{{ asset('frontend_files/css/bootstrap.min.css') }}">
        <!--main styles -->
        <link rel="stylesheet" href="{{ asset('frontend_files/css/style.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    @endif

</head>
<body>
{{--------------------------Start of nav bar-----------------------}}
<header class="fixed-top">
    <a href="#" class="brand"><img src="{{asset('uploads/logos/logo3.png')}}"/> </a>
    <div class="menu-btn"></div>
    <div class="navigation">
        <div class="navigation-items">
            <a href="#">@lang('front.about_university')</a>
            <a href="#">@lang('front.university_management')</a>
            <a href="#">@lang('front.postgraduate_and_research')</a>
            <a href="#">@lang('front.colleges_and_institutes')</a>
            <a href="#">@lang('front.university_city')</a>
            <a href="#">@lang('front.electronic_services')</a>
        </div>
    </div>
</header>
{{--------------------------End of nav bar-----------------------}}

{{--------------------------Start of section 1 (video slides)-----------------------}}
<section class="home">
    <video class="video-slide active" src="{{asset('uploads/vidoes/1.mp4')}}" autoplay muted loop></video>
    <video class="video-slide" src="{{asset('uploads/vidoes/2.mp4')}}" autoplay muted loop></video>
    <video class="video-slide" src="{{asset('uploads/vidoes/3.mp4')}}" autoplay muted loop></video>
    <video class="video-slide" src="4.mp4" autoplay muted loop></video>

    <div class="content active">
        <h1>@lang('university of sadat city').<br><span>USC</span></h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
            ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
            nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
            anim id est laborum.</p>
        <a href="#">Read More</a>
    </div>
    <div class="content">
        <h1>@lang('University President\'s speech').<br><span>@lang('DR / Shaden Moaawia')</span></h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
            ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
            nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
            anim id est laborum.</p>
        <a href="#">Read More</a>
    </div>
    <div class="content">
        <h1>@lang('university of sadat city').<br><span>USC</span></h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
            ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
            nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
            anim id est laborum.</p>
        <a href="#">Read More</a>
    </div>
    <div class="content">
        <h1>@lang('university of sadat city').<br><span>USC</span></h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
            ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
            nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
            anim id est laborum.</p>
        <a href="#">Read More</a>
    </div>
    <div class="content">
        <h1>@lang('university of sadat city').<br><span>USC</span></h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
            ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
            nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
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
{{--------------------------End of section 1 (video slides)-----------------------}}

{{--------------------------Start of section 2 (university)-----------------------}}
<div id="rs-testimonial" class="rs-testimonial bg5 sec-spacer">
    <div class="container">
        <div class="sec-title mb-50 text-center">
            <h2 class="white-color animation-element slide-left">قيادة الجامعة</h2>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="rs-carousel owl-carousel" data-loop="false" data-items="1" data-margin="30"
                     data-autoplay="true" data-autoplay-timeout="5000" data-smart-speed="1200" data-dots="true"
                     data-nav="true" data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="true"
                     data-mobile-device-dots="true" data-ipad-device="1" data-ipad-device-nav="true"
                     data-ipad-device-dots="true" data-md-device="1" data-md-device-nav="true"
                     data-md-device-dots="true">
                    <div class="testimonial-item ">
                        <div class="testi-img">
                            <img src='Sadatedu/img/2.jpg' alt="">
                        </div>
                        <div class="testi-desc ">
                            <h4 class="testi-name animation-element slide-left">أ. د. شادن معاوية
                                <br><small>رئيس جامعة مدينة السادات</small>
                            </h4>
                            <p style='text-align: justify;'>
                            <p dir="RTL" style="text-align:justify" class="animation-element slide-left">يسعدنى فى بداية
                                تكليفى قائما بعمل رئيس جامعة مدينة السادات فى ظل قيادة فخامة رئيس الجمهورية الرئيس عبد
                                الفتاح السيسي ان اتقدم بخالص الشكر والعرفان والتقدير الى السيد الاستاذ الدكتور خالد عبد
                                الغفار وزير التعليم العالي والبحث العلمي والقائم بأعمال وزارة الصحه لتكليفى بتيسير أعمال
                                جامعة مدينة السادات حرصا على إستمرار العمل بالجامعه بالفاعليه المطلوبه وذالك لحين
                                الانتهاء من إجراءات تعيين رئيسا جديدا للجامعه

                                وأدعوا الله العلى القدير أن أكون أهلا لهذه الثقه فى إستكمال مسيرة الجامعه وتسيير ركب
                                التطور فى هذه الفتره لرفع شأن الجامعه وتحقيق أهداف إستراتيجية وزارة التعليم العالى فى ظل
                                رؤية مصر ٢٠٣٠ وتحت قيادة فخامة رئيس الجمهورية الرئيس عبد الفتاح السيسى.

                                كما أتوجه الى كل منتسبى الجامعه من أعضاء هيئة تدريس وهيئة معاونه وعاملين بخالص التحيه
                                والتقدير وادعوهم الى التكاتف والوقوف يدا واحده وفريق عمل واحد متكامل للحفاظ على مقدرات
                                الجامعه و دفع مسيرة نهضتها علميا وبحثيا ومجتمعيا

                                وفقنا الله وإياكم الى مايحبه ويرضاه لرفعة مصرنا الحبيبه</p>
                            </p>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testi-img">
                            <img src='' alt="">
                        </div>
                        <div class="testi-desc">
                            <h4 class="testi-name animation-element slide-left">أ. د. شريف محمد علي
                                <br><small>نائب رئيس الجامعة لشئون التعليم والطلاب</small>
                            </h4>
                            <p style='text-align: justify;'>
                            <p dir="rtl" style="text-align:justify" class="animation-element slide-left">دأبت جامعة
                                مدينة السادات على مواكبة أحدث النظم والمعايير الدولية في مجالات التعليم والعلوم، من خلال
                                توفير أفضل التقنيات والإمكانيات للطلاب للحصول على خدمات علمية وتعليمية على أعلى مستوى
                                لتمكنهم من تحقيق أهدافهم في سوق
                                العمل على المستويات المحلية والإقليمية والدولية، بل والتفوق على نظرائهم من الطلاب
                                والخريجين، إضافة إلى إيجاد حلول ناجحة لمواجهة المشاكل الملحة والمستقبلية.</p>
                            </p>
                        </div>
                    </div>

                    <div class="testimonial-item">
                        <div class="testi-img">
                            <img src='Sadatedu/img/2.png' alt="">
                        </div>
                        <div class="testi-desc">
                            <h4 class="testi-name animation-element slide-left">أ. د. خالد محمود جعفر
                                <br><small>نائب رئيس الجامعة لخدمة المجتمع وتنمية البيئة</small>
                            </h4>
                            <p style='text-align: justify;'>
                            <p dir="RTL" style="text-align:justify" class="animation-element slide-left">تتسم الخدمات
                                التي تقدمها جامعة مدينة السادات على اختلاف أشكالها وتنوع مجالاتها بالجودة وفقاً للمعايير
                                القومية في مجالات التعليم والبحث العلمي وخدمة المجتمع، ومن هذا المنطق تم إنشاء قطاع شؤون
                                خدمة المجتمع وتنمية البيئة
                                الذي أخذ على عاتقه حل مشاكل المجتمع المحيط وتقديم خدمات مجتمعية متميزة تسهم في دعم
                                الاقتصاد الوطني، وتمكنه من أن يكون بيت خبرة متميزة ومنارة ثقافية داخل الجامعة.</p>
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
{{--------------------------End of section 2 (university)-----------------------}}

{{--------------------------Start of section 3 (statistics)-----------------------}}
<div class="hg_section--relative pt-100 pb-120">
    <div class="kl-bg-source__overlay2"></div>
    <div class="kl-bg-source">
        <div class="kl-bg-source__bgimage statistics">
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12">
                <div class="sec-title mb-50 text-center">
                    <h2 class="white-color animation-element slide-left">إحصائيات جامعة مدينة السادات</h2>
                </div>
                <div
                    class="statistic-box__container statistic-box--stl-style1 statistic-box--light animation-element slide-left">
                    <div class="statistic-box">
                        <div class="statistic-box__icon-holder">
                            <span class="statistic-box__icon fa fa-university"></span>
                        </div>
                        <div class="statistic-box__line">
                        </div>
                        <div class="statistic-box__details">
                            <h4 class="statistic-box__title">
                                <span class="fw-thin counter" data-start-from="0" data-count-to="11"
                                      data-speed="100"></span>
                            </h4>
                            <div class="statistic-box__content">
                                كليات ومعاهد الجامعة
                            </div>
                        </div>
                    </div>

                    <div class="statistic-box statistic-box--odd">
                        <div class="statistic-box__icon-holder">
                            <span class="statistic-box__icon fa fa-cog"></span>
                        </div>
                        <div class="statistic-box__line">
                        </div>
                        <div class="statistic-box__details">
                            <h4 class="statistic-box__title">
                                <span class="fun-number fw-thin counter" data-count-to="2500" data-speed="10"></span>
                            </h4>
                            <div class="statistic-box__content">
                                الموظفين
                            </div>
                        </div>
                    </div>

                    <div class="statistic-box">
                        <div class="statistic-box__icon-holder">
                            <span class="statistic-box__icon fa fa-graduation-cap"></span>
                        </div>
                        <div class="statistic-box__line">
                        </div>
                        <div class="statistic-box__details">
                            <h4 class="statistic-box__title">
                                <span class="fw-thin counter" data-start-from="5000" data-count-to="6178"
                                      data-speed="10"></span>
                            </h4>
                            <div class="statistic-box__content">
                                هيئة التدريس
                            </div>
                        </div>
                    </div>

                    <div class="statistic-box statistic-box--odd">
                        <div class="statistic-box__icon-holder">
                            <span class="statistic-box__icon fa fa-bars"></span>
                        </div>
                        <div class="statistic-box__line">
                        </div>
                        <div class="statistic-box__details">
                            <h4 class="statistic-box__title">
                                <span class="fun-number fw-thin counter" data-start-from="120000" data-count-to="121371"
                                      data-speed="5"></span>
                            </h4>
                            <div class="statistic-box__content">
                                المراحل الجامعية
                            </div>
                        </div>
                    </div>

                    <div class="statistic-box">
                        <div class="statistic-box__icon-holder">
                            <span class="statistic-box__icon  fa fa-list"></span>
                        </div>
                        <div class="statistic-box__line">
                        </div>
                        <div class="statistic-box__details">
                            <h4 class="statistic-box__title">
                                <span class="fw-thin counter" data-start-from="15000" data-count-to="15759"
                                      data-speed="5"></span>
                            </h4>
                            <div class="statistic-box__content">
                                الدراسات العليا
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
{{--------------------------End of section 3 (statistics)-----------------------}}
<section class="hg_section--relative pt-50 pb-50">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12">
                <div class="kl-title-block text-center tbk--text-light tbk-symbol--line">
                    <div class="sec-title mb-50 text-center">
                        <h2 class=" b animation-element slide-left">أخر أخبار الجامعة</h2>
                    </div>

                </div>

                <div class="kl-icarousel-container kl-slideshow-safepadding">
                    <div class="th-icarousel kl-icarousel__wrapper" data-count="8" data-autoplay="true"
                         data-timeout="1000" data-perspective="75" data-slidespaces="300" data-slides="7"
                         data-direction="ltr" data-keyboard="true" data-mousewheel="true" data-timer="Bar"
                         data-timeropc="40"
                         data-timerdim="220" data-timercolor="#fff" data-timerpos="bottom-center" data-timeroffx="0"
                         data-timeroffy="-20">
                        <div class="kl-icarousel__slide" data-outerwidth="480" data-outerheight="280" data-width="480"
                             data-height="280" index="7">
                            <a class="slide kl-icarousel__link" href="" target="_self" title="title">
                                <div style="background-image:url(Sadatedu/img/2022-637938453246245007-624.jpg)"
                                     class="kl-icarousel__img lazyload lazy"></div>
                                <h5 class="kl-icarousel__title ff - alternative"><span><span></h5></a></div>
                        <div class="kl-icarousel__slide" data-outerwidth="480" data-outerheight="280" data-width="480"
                             data-height="280" index="7"><a class="slide kl-icarousel__link" href="" target="_self"
                                                            title="title">
                                <div style="background-image:url(Sadatedu/img/202207190429372937.jpg)"
                                     class="kl-icarousel__img lazyload lazy"></div>
                                <h5 class="kl-icarousel__title ff - alternative"><span><span></h5></a></div>
                        <div class="kl-icarousel__slide" data-outerwidth="480" data-outerheight="280" data-width="480"
                             data-height="280" index="7"><a class="slide kl-icarousel__link" href="" target="_self"
                                                            title="title">
                                <div style="background-image:url(Sadatedu/img/433.jpg)"
                                     class="kl-icarousel__img lazyload lazy"></div>
                                <h5 class="kl-icarousel__title ff - alternative"><span><span></h5></a></div>
                        <div class="kl-icarousel__slide" data-outerwidth="480" data-outerheight="280" data-width="480"
                             data-height="280" index="7"><a class="slide kl-icarousel__link" href="" target="_self"
                                                            title="title">
                                <div style="background-image:url(Sadatedu/img/images\ \(1\).jpg)"
                                     class="kl-icarousel__img lazyload lazy"></div>
                                <h5 class="kl-icarousel__title ff - alternative"><span> <span></h5></a></div>
                        <div class="kl-icarousel__slide" data-outerwidth="480" data-outerheight="280" data-width="480"
                             data-height="280" index="7"><a class="slide kl-icarousel__link" href="" target="_self"
                                                            title="title">
                                <div style="background-image:url(Sadatedu/img/images\ \(2\).jpg)"
                                     class="kl-icarousel__img lazyload lazy"></div>
                                <h5 class="kl-icarousel__title ff - alternative"><span><span></h5></a></div>
                        <div class="kl-icarousel__slide" data-outerwidth="480" data-outerheight="280" data-width="480"
                             data-height="280" index="7"><a class="slide kl-icarousel__link" href="" target="_self"
                                                            title="title">
                                <div style="background-image:url(Sadatedu/img/433.jpg)"
                                     class="kl-icarousel__img lazyload lazy"></div>
                                <h5 class="kl-icarousel__title ff - alternative"><span><span></h5></a></div>
                        <div class="kl-icarousel__slide" data-outerwidth="480" data-outerheight="280" data-width="480"
                             data-height="280" index="7"><a class="slide kl-icarousel__link" href="" target="_self"
                                                            title="title">
                                <div style="background-image:url(Sadatedu/img/images.jpg)"
                                     class="kl-icarousel__img lazyload lazy"></div>
                                <h5 class="kl-icarousel__title ff - alternative"><span><span></h5></a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <a href="" class="btn btn-sm btn-outline-danger m-5  py-3 px-5">أرشيف الأخبار</a>
            </div>
        </div>
    </div>
</section>
{{------------------------------ Test --}}
<div class="counter">
    <div class="counter-value" data-count="100">0</div>
    <div class="counter-label">Happy Customers</div>
</div>
<style>
    .counter {
        text-align: center;
        margin-top: 50px;
    }

    .counter-value {
        font-size: 80px;
        font-weight: bold;
        color: #f00;
    }

    .counter-label {
        font-size: 20px;
    }

    /* Animation */
    @keyframes count {
        from {
            opacity: 0;
            transform: translateY(-50px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .counter-value[data-count]:after {
        content: attr(data-count);
        animation: count 2s ease-out;
    }
</style>
<script type="text/javascript">
    const counters = document.querySelectorAll('.counter-value');
    counters.forEach(counter => {
        const updateCount = () => {
            const target = +counter.getAttribute('data-count');
            const count = +counter.innerText;

            const inc = target / 200;

            if (count < target) {
                counter.innerText = Math.ceil(count + inc);
                setTimeout(updateCount, 100);
            } else {
                counter.innerText = target;
            }
        };

        updateCount();
    });
</script>
{{------------------------------ End of Test--}}
{{--------------------------Start of Footer ------------------------------------}}
<footer id="footer" class="py-3 bg-primary text-center text-white">
    <p class="mb-0 text-capitalize">&copy; all copy right reserved for university of sadat city 2023</p>
    <div class="social__icons">
        <a href="" class="text-white mr-2"><i class="fab fa-facebook fa-1x"></i></a>
        <a href="" class="text-white mr-2"><i class="fab fa-youtube"></i></a>
        <a href="" class="text-white mr-2"><i class="fab fa-twitter"></i></a>
    </div>
</footer>
{{--------------------------End of Footer ------------------------------------}}

{{--------------------------Start of JS-----------------------}}
<!--jquery-->
<script src="{{ asset('frontend_files/js/jquery-3.4.0.min.js') }}"></script>

<!--bootstrap-->
<script src="{{ asset('frontend_files/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('frontend_files/js/popper.min.js') }}"></script>

<!--vendor js-->
<script src="{{ asset('frontend_files/js/vendor.min.js') }}"></script>

<!--main scripts-->
<script src="{{ asset('frontend_files/js/main.min.js') }}"></script>
{{--custom js--}}
<script type="text/javascript">
    //Javacript for responsive navigation menu
    const menuBtn = document.querySelector(".menu-btn");
    const navigation = document.querySelector(".navigation");

    menuBtn.addEventListener("click", () => {
        menuBtn.classList.toggle("active");
        navigation.classList.toggle("active");
    });

    //Javacript for video slider navigation
    const btns = document.querySelectorAll(".nav-btn");
    const slides = document.querySelectorAll(".video-slide");
    const contents = document.querySelectorAll(".content");

    var sliderNav = function (manual) {
        btns.forEach((btn) => {
            btn.classList.remove("active");
        });

        slides.forEach((slide) => {
            slide.classList.remove("active");
        });

        contents.forEach((content) => {
            content.classList.remove("active");
        });

        btns[manual].classList.add("active");
        slides[manual].classList.add("active");
        contents[manual].classList.add("active");
    }

    btns.forEach((btn, i) => {
        btn.addEventListener("click", () => {
            sliderNav(i);
        });
    });


    $(document).ready(function () {

        $(window).on('scroll', function () {

            if ($(this).scrollTop() > 100) {

                $('.fixed-top').addClass('bg-black-transparent')

            } else {

                $('.fixed-top').removeClass('bg-black-transparent')

            }//end of else

        });//end of window scroll

    });//end of document ready

    var loadCss = function () {
        var cssLink = document.createElement('link');
        cssLink.rel = 'stylesheet';
        cssLink.href = 'Sadatedu/css/fontawesome/all.min.css';
        var head = document.getElementsByTagName('head')[0];
        head.parentNode.insertBefore(cssLink, head);
    };
    window.addEventListener('load', loadCss);
</script>
{{--------------------------Start of JS-----------------------}}


</body>
</html>
