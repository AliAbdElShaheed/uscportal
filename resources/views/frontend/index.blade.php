{{--@extends('layouts.frontend.app')


<style>
    /* Define the style for the selected event */
    .selected-event {
        background-color: #f0f0f0; /* Change to the desired background color */
        font-weight: bold; /* Change to the desired font weight */
        /* Add any other styles you want to apply to the selected event */
    }
</style>
@section('content')
    <!--    --><?php //dd($blogs); ?>
    --}}{{--------------------------Start of section 1 Landing (video slides)-------------------------}}{{--

    <section class="home">
        <video class="video-slide active" src="{{asset('uploads/frontend/videos/USCVideoBanner.mp4')}}" autoplay muted ></video>
        <video class="video-slide" src="{{asset('uploads/frontend/videos/2.mp4')}}" autoplay muted loop></video>
        <video class="video-slide" src="{{asset('uploads/frontend/videos/3.mp4')}}" autoplay muted loop></video>
    <!--      <video class="video-slide" src="{{asset('uploads/frontend/videos/2.mp4')}}" autoplay muted loop></video>    --> 

        <div class="content active">
            <h1>@lang('site.USC') <br></h1>
            <p>جامعة مدينة السادات جامعة مصرية حكومية تم انشاءها كجامعة مستقلة بالقرار الجمهوري من بتاريخ 25 مارس
                2013.</p>
            <a href="#">@lang('site.read_more')</a>
        </div>
        <div class="content">
            <h1>@lang('site.president_word')<br><span>@lang('site.president_name')</span></h1>
            <p style="font-size: 13px !important;">يسعدنى فى بداية تكليفى قائما بعمل رئيس جامعة مدينة السادات فى ظل
                قيادة فخامة رئيس الجمهورية الرئيس عبد
                الفتاح السيسي ان اتقدم بخالص الشكر والعرفان والتقدير الى السيد الاستاذ الدكتور أيمن عاشور وزير التعليم
                العالي والبحث العلمي لتكليفى بتيسير أعمال جامعة مدينة السادات حرصا على إستمرار العمل بالجامعه بالفاعليه
                المطلوبه وذالك لحين الانتهاء من إجراءات تعيين رئيسا جديدا للجامعه
                وأدعوا الله العلى القدير أن أكون أهلا لهذه الثقه فى إستكمال مسيرة الجامعه وتسيير ركب التطور فى هذه
                الفتره لرفع شأن الجامعه وتحقيق أهداف إستراتيجية وزارة التعليم العالى فى ظل رؤية مصر ٢٠٣٠ وتحت قيادة
                فخامة رئيس الجمهورية الرئيس عبد الفتاح السيسى.
                كما أتوجه الى كل منتسبى الجامعه من أعضاء هيئة تدريس وهيئة معاونه وعاملين بخالص التحيه والتقدير وادعوهم
                الى التكاتف والوقوف يدا واحده وفريق عمل واحد متكامل للحفاظ على مقدرات الجامعه و دفع مسيرة نهضتها علميا
                وبحثيا ومجتمعيا
                وفقنا الله وإياكم الى مايحبه ويرضاه لرفعة مصرنا الحبيبه.</p>
            <a href="#">@lang('site.read_more')</a>
        </div>
        <div class="content">
            <h1>@lang('site.USC') <br></h1>
            <p>جامعة مدينة السادات جامعة مصرية حكومية تم انشاءها كجامعة مستقلة بالقرار الجمهوري من بتاريخ 25 مارس
                2013.</p>
            <a href="#">@lang('site.read_more')</a>
        </div>
    <!--    <div class="content">
            <h1>@lang('site.president_word')<br><span>@lang('site.president_name')</span></h1>
            <p style="font-size: 13px !important;">يسعدنى فى بداية تكليفى قائما بعمل رئيس جامعة مدينة السادات فى ظل
                قيادة فخامة
                رئيس الجمهورية الرئيس عبد الفتاح السيسي ان اتقدم بخالص الشكر والعرفان والتقدير الى السيد الاستاذ الدكتور
                أيمن عاشور وزير التعليم العالي والبحث العلمي لتكليفى بتيسير أعمال جامعة مدينة السادات حرصا على إستمرار
                العمل بالجامعه بالفاعليه المطلوبه وذالك لحين الانتهاء من إجراءات تعيين رئيسا جديدا للجامعه
                وأدعوا الله العلى القدير أن أكون أهلا لهذه الثقه فى إستكمال مسيرة الجامعه وتسيير ركب التطور فى هذه
                الفتره لرفع شأن الجامعه وتحقيق أهداف إستراتيجية وزارة التعليم العالى فى ظل رؤية مصر ٢٠٣٠ وتحت قيادة
                فخامة رئيس الجمهورية الرئيس عبد الفتاح السيسى.
                كما أتوجه الى كل منتسبى الجامعه من أعضاء هيئة تدريس وهيئة معاونه وعاملين بخالص التحيه والتقدير وادعوهم
                الى التكاتف والوقوف يدا واحده وفريق عمل واحد متكامل للحفاظ على مقدرات الجامعه و دفع مسيرة نهضتها علميا
                وبحثيا ومجتمعيا
                وفقنا الله وإياكم الى مايحبه ويرضاه لرفعة مصرنا الحبيبه.</p>
            <a href="#">@lang('site.read_more')</a>
        </div>
	-->

        <div class="media-icons">
            <a href="https://www.facebook.com/usc.edu.eg"><i class="fab fa-facebook-f"></i></a>
            <a href="https://www.instagram.com/universityofsadatcity/"><i class="fab fa-instagram"></i></a>
            <a href="https://twitter.com/Univ_SadatCity"><i class="fab fa-twitter"></i></a>
            <a href="https://www.facebook.com/usc.edu.eg"><i class="fab fa-facebook-f"></i></a>

        </div>
        <div class="slider-navigation">
            <div class="nav-btn active"></div>
            <div class="nav-btn"></div>
            <div class="nav-btn"></div>
         <!--   <div class="nav-btn"></div>  -->

        </div>
    </section>

    --}}{{--------------------------End of section 1 Landing (video slides)  -------------------------}}{{--

    --}}{{--------------------------Start of section 2 (Top News) ----------------------------------------}}{{--

    <div class="important_news text-center pb-5 pt-2">
        <div class="container pb-5 pt-1">
            <img class="mb-4" src="{{asset('uploads/frontend/images/f_logos/USCLogo.png')}}" alt=""/>
            <h2 class="fw-bold main-title">@lang('site.important_news')</h2>
            <p class="text-black-50 mb-5">
                @lang('site.important_news_note')
            </p>
            <div class="row">
                @foreach($top_news->take(3) as $top_new)
                    <div class="col-md-6 col-lg-4">
                        <div class="box bg-white">
                            <a href="{{ route('top_new.show', ['id' => $top_new->id]) }}">
                                <img class="img-fluid" src="{{ $top_new->image_path }}" alt="{{ $top_new->title }}"
                                     style="width: 416px; height: 277px;"/>
                            </a>
                            <a href="{{ route('top_new.show', ['id' => $top_new->id]) }}">
                                <h4 class="p-3 text-light">{{ $top_new->title }}</h4>
                            </a>
                            <blockquote class="text-black-50 p-3">
                                --}}{{--                                “{{$top_new->brief_content}}“--}}{{--
                                {{substr(strip_tags(trim($top_new->content)), 0, 43)}} ...
                            </blockquote>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="d-flex justify-content-center mt-5">
                <a class="btn rounded-pill main-btn-dark text-uppercase" id="load-more"
                   href="#">@lang('site.more_top_news')</a>
            </div>
            <div class="row remaining-blogs" style="display: none;">
                @foreach($top_news->splice(3) as $top_new)
                    <div class="col-md-6 col-lg-4">
                        <div class="box bg-white">
                            <a href="{{ route('top_new.show', ['id' => $top_new->id]) }}">
                                <img class="img-fluid" src="{{ $top_new->image_path }}" alt="{{ $top_new->title }}"
                                     style="width: 416px; height: 277px;"/>
                            </a>
                            <a href="{{ route('top_new.show', ['id' => $top_new->id]) }}">
                                <h4 class="p-3 text-light">{{ $top_new->title }}</h4>
                            </a>
                            <blockquote class="text-black-50 p-3">
                                “{{$top_new->brief_content}}“
                                {{substr(strip_tags(trim($top_new->content)), 0, 43)}}
                            </blockquote>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>



    --}}{{--------------------------End of section 2 (Top News) ------------------------------------------}}{{--



    --}}{{--------------------------Start of section 3 (Latest News) ---------------------------------}}{{--

    <div class="latest_news" id="latest_news">
        <h2 class="main-title">@lang('site.latest_news') </h2>

        <div class="container">
            <div class="row">

                @foreach($blogs as $blog)
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="card mb-5">
                            <img src="{{ $blog->image_path }}" alt="{{ $blog->title }}"
                                 style="width: 304px; height: 250px;"/>
                            <div class="card-body">
                                <h6 class="publish-date">{{ $blog->publish_date }}</h6>
                                <h3>{{ $blog->title }}</h3>
                                <p>{{substr(strip_tags(trim($blog->content)), 0, 50)}}...</p>
                            </div>
                            <div class="info">
                                <a href="{{ route('blog.show', ['id' => $blog->id]) }}">@lang('site.read_more')</a>

                                @if(app()->getLocale() == 'ar')
                                    <i class="fas fa-long-arrow-alt-left"></i>
                                @else
                                    <i class="fas fa-long-arrow-alt-right"></i>
                                @endif

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="d-flex justify-content-center mt-5">
                <a class="btn rounded-pill main-btn-dark text-uppercase"
                   href="{{ route('all_blogs.index') }}">@lang('site.more_news')</a>
            </div>

        </div>
    </div>

    --}}{{--------------------------End of section 3 (Latest News) -----------------------------------}}{{--

    <div class="spikes"></div>

    --}}{{--------------------------End of section 4 (Statistics) -----------------------------------}}{{--

    <div class="stats" id="stats">
        <h2>@lang('site.OurStatistics')</h2>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-2 pb-5">
                    <div class="box">
                        <i class="fa-solid fa-users fa-2xl"></i>
                        <span class="number" data-goal="3016">2000</span>
                        <span class="text">@lang('site.employees')</span>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-2 pb-5">
                    <div class="box">
                        <i class="fa-solid fa-building-columns fa-2x fa-fw"></i>
                        <span class="number" data-goal="11">0</span>
                        <span class="text">@lang('site.colleges')</span>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-2 pb-5">
                    <div class="box">
                        <i class="fas fa-pen-nib fa-2xl"></i>
                        <span class="number" data-goal="1486">500</span>
                        <span class="text">@lang('site.staff')</span>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-2 pb-5">
                    <div class="box">
                        <i class="fa-solid fa-graduation-cap fa-2xl"></i>
                        <span class="number" data-goal="7835">6500</span>
                        <span class="text">@lang('site.postgraduate')</span>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-2 pb-5">
                    <div class="box">
                        <i class="fa-solid fa-user-graduate fa-2xl"></i>
                        <span class="number" data-goal="25684">24000</span>
                        <span class="text">@lang('site.students')</span>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-2 pb-5">
                    <div class="box">
                        <i class="fa-solid fa-sliders fa-2xl"></i>
                        <span class="number" data-goal="312">0</span>
                        <span class="text">@lang('site.study_programs')</span>
                    </div>
                </div>
            </div>
        </div>
    </div>


    --}}{{--------------------------End of section 4 (Statistics) -----------------------------------}}{{--




    --}}{{--------------------------Start of section 5 (Events) -------------------------------------}}{{--

    <div class="events" id="events">
        <h2 class="fw-bold main-title">@lang('site.TopEvents')</h2>
        <div class="container">
            <div class="row border">


                --}}{{--         <div class="col-lg-4 col-md-4 event-data">
                             <div class="list w-100 bg-white">
                                 <div class="name">
                                     Top Events
                                     <i class="fas fa-random"></i>
                                 </div>
                                 <ul>
                                     @foreach($events as $event)
                                         <li class="py-2 px-4 border-top border-light-subtle" role="button" tabindex="0">
                                             {{ $event->title }}
                                             <span>Jan 17, 2022 at 05:18 PM</span>
                                             <span> {{ $event->start_date }}</span>
                                         </li>
                                     @endforeach
                                 </ul>
                             </div>
                         </div>
                         <div class="col-lg-8 col-md-8 p-0 m-0 event-img">
                             <div class="preview h-100">
                                 <img class="w-100 h-75" src="{{ $event->image_path }}" alt="{{ $event->title }}"/>
                                 <div class="info d-inline-flex justify-content-between">
                                     <div class="justify-content-center">   {{ $event->title }}  </div>
                                 </div>
                             </div>
                         </div>--}}{{--


                <div class="col-lg-4 col-md-4 event-data">
                    <div class="list w-100 bg-white">
                        <div class="name">
                            أهم الاحداث
                            <i class="fas fa-random"></i>
                        </div>
                        <ul>
                            @foreach($events as $event)
                                <li class="py-2 px-4 border-top border-light-subtle event-item" role="button"
                                    tabindex="0" data-image="{{ $event->image_path }}"
                                    data-content="{!! $event->content !!}"
                                    {{ $event->title }} data-date="{{ $event->start_date }}">
                                    {{ $event->title }}
                                    <span>{{ \Carbon\Carbon::parse($event->start_date)->format('M j, Y') }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="col-lg-8 col-md-8 p-0 m-0 event-img">
                    <div class="preview h-100">
                        <img class="w-100 h-75" id="event-image" src="" alt=""/>
                        <div class="info d-inline-flex justify-content-between">
                            <div class="justify-content-center">
                                <span id="event-title"></span> <span id="event-date"></span>
                                <p id="event-content"></p>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>

    --}}{{--------------------------End of section 5 (Events) ---------------------------------------}}{{--


    <div class="spikes"></div>

    --}}{{--------------------------Start of section 6 (Upcoming Events) ----------------------------}}{{--

    <!-- <div class="u_events" id="u_events">
        <div class="dots dots-up"></div>
        <h2 class="main-title">@lang('site.UpcomingEvents') </h2>
        <div class="container">
            <img src="{{asset('uploads//frontend/images/upcoming-events.png')}}" alt=""/>
            <div class="info">
                <div class="time">
                    <div class="unit">
                        <span class="days">15</span>
                        <span>Days</span>
                    </div>
                    <div class="unit">
                        <span class="hours">08</span>
                        <span>Hours</span>
                    </div>
                    <div class="unit">
                        <span class="minutes">45</span>
                        <span>Minutes</span>
                    </div>
                    <div class="unit">
                        <span class="seconds">55</span>
                        <span>Seconds</span>
                    </div>
                </div>
                <h2 class="title">Tech Masters Event 2021</h2>
                <p class="description">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Et vero tenetur doloremque iusto ut
                    adipisci
                    quam
                    ratione aliquam excepturi nulla in harum, veritatis porro
                </p>
            </div>
            <div class="subscribe">
                <form action="">
                    <input type="email" placeholder="Enter Your Email"/>
                    <input type="submit" value="Subscribe"/>
                </form>
            </div>
        </div>
    </div>     -->


    --}}{{--------------------------End of section 6 (Upcoming Events) ------------------------------}}{{--





    --}}{{--------------------------Start of section 7 (Mobile Apps) --------------------------------}}{{--

    <div class="design">
        --}}{{--    <h2>Our Electronic & Application Services</h2>--}}{{--
        <div class="image d-none d-md-block">
            <img src="{{asset('uploads/frontend/images/mobile2.png')}}" alt="Mobile"/>
        </div>
        <div class="text">
            <h2>@lang('site.StudentServices')  </h2>
            <ul>
                <li>@lang('site.ELZAHRAA')</li>
                <li>@lang('site.AlFarouk')</li>
                <li> @lang('site.Ibnelhaitham')   </li>
            </ul>
        </div>
    </div>


    --}}{{--------------------------End of section 7 (Mobile Apps) ----------------------------------}}{{--

@endsection


@push('scripts')

    --}}{{--        <script>
                // JavaScript code to handle the click event on event items
                const eventItems = document.querySelectorAll('.event-item');
                const eventImage = document.getElementById('event-image');
                const eventTitle = document.getElementById('event-title');

                // Function to remove the "selected-event" class from all event items
                function deselectAllEvents() {
                    eventItems.forEach(item => {
                        item.classList.remove('selected-event');
                    });
                }

                // Select the first event item by default
                const firstEventItem = eventItems[0];
                firstEventItem.click();

                eventItems.forEach(item => {
                    item.addEventListener('click', () => {
                        // Deselect all events first
                        deselectAllEvents();

                        // Add the "selected-event" class to the clicked event
                        item.classList.add('selected-event');

                        const imageSrc = item.getAttribute('data-image');
                        const title = item.textContent.trim();
                        eventImage.src = imageSrc;
                        eventTitle.textContent = title;
                    });
                });

            </script>--}}{{--
    --}}{{--        <script>
                // JavaScript code to handle the click event on event items
                document.addEventListener('DOMContentLoaded', function () {
                    const eventItems = document.querySelectorAll('.event-item');
                    const eventImage = document.getElementById('event-image');
                    const eventTitle = document.getElementById('event-title');

                    // Function to remove the "selected-event" class from all event items
                    function deselectAllEvents() {
                        eventItems.forEach(item => {
                            item.classList.remove('selected-event');
                        });
                    }

                    // Select the first event item by default
                    const firstEventItem = eventItems[0];
                    selectEvent(firstEventItem);

                    eventItems.forEach(item => {
                        item.addEventListener('click', () => {
                            // Deselect all events first
                            deselectAllEvents();

                            // Add the "selected-event" class to the clicked event
                            item.classList.add('selected-event');

                            // Call the selectEvent function to update the event image and title
                            selectEvent(item);
                        });
                    });

                    // Function to update the event image and title
                    function selectEvent(item) {
                        const imageSrc = item.getAttribute('data-image');
                        const title = item.textContent.trim();
                        eventImage.src = imageSrc;
                        eventTitle.textContent = title;
                    }
                });
            </script>--}}{{--

    <script>
        // JavaScript code to handle the click event on event items
        document.addEventListener('DOMContentLoaded', function () {
            const eventItems = document.querySelectorAll('.event-item');
            const eventImage = document.getElementById('event-image');
            const eventTitle = document.getElementById('event-title');
            const eventDate = document.getElementById('event-date');
            const eventContent = document.getElementById('event-content');

            // Function to remove the "selected-event" class from all event items
            function deselectAllEvents() {
                eventItems.forEach(item => {
                    item.classList.remove('selected-event');
                });
            }

            eventItems.forEach(item => {
                item.addEventListener('click', () => {
                    // Deselect all events first
                    deselectAllEvents();

                    // Add the "selected-event" class to the clicked event
                    item.classList.add('selected-event');

                    // Call the selectEvent function to update the event image and title
                    selectEvent(item);
                });
            });

            // Select the first event item by default after event listeners are set up
            const firstEventItem = eventItems[0];
            firstEventItem.click(); // Simulate a click to style it as selected

            // Function to update the event image and title
            /*function selectEvent(item) {
                const imageSrc = item.getAttribute('data-image');
                const titleWithDate = item.textContent.trim();

                // Split the title to separate the date
                const titleParts = titleWithDate.split(' at ');

                // Extract the event title without the date
                const title = titleParts[0];

                eventImage.src = imageSrc;
                eventTitle.textContent = title;
            }*/

            // Function to update the event image, title, date, and content
            function selectEvent(item) {
                const imageSrc = item.getAttribute('data-image');
                const titleWithDate = item.textContent.trim();

                // Split the title to separate the date and title parts
                const titleParts = titleWithDate.split(' at ');
                const date = titleParts[0];
                const title = titleParts.slice(1).join(' ');

                // Get the event content from the data-content attribute of the clicked item
                const content = item.getAttribute('data-content');

                eventImage.src = imageSrc;
                eventTitle.textContent = title;
                eventDate.textContent = date;
                eventContent.textContent = content;
            }

        });
    </script>





    --}}{{--script to show more important news--}}{{--
    <script src="{{asset('frontend_files/js/http_code.jquery.com_jquery-3.6.0.js')}}"></script>
    <script>
        $(document).ready(function () {
            $("#load-more").click(function (e) {
                e.preventDefault();

                // Show the remaining blog items
                $(".remaining-blogs").slideDown();

                // Hide the "See More" button
                $(this).hide();
            });
        });
    </script>

@endpush--}}


@extends('layouts.frontend.app')


<style>
    /* Define the style for the selected event */
    .selected-event {
        background-color: #f0f0f0; /* Change to the desired background color */
        font-weight: bold; /* Change to the desired font weight */
        /* Add any other styles you want to apply to the selected event */
    }

    /* Styles for the sidebar pop-up container */
    .sidebar-popup {
        position: fixed;
        top: 100;
        width: 0; /* Initially hidden */
        height: 500px;
        background-color: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        overflow-x: hidden;
        transition: width 0.3s; /* Smooth transition for opening and closing */
    }

    /* Styles for the tab that opens the sidebar pop-up */
    .popup-tab {
        position: fixed;
        top: 50%;
        right: 0; /* Adjust for left sidebar */
        background-color: #007BFF;
        color: #fff;
        padding: 10px 20px;
        border-top-left-radius: 10px; /* Rounded corners for the tab */
        border-bottom-left-radius: 10px;
        cursor: pointer;
    }

    /* Styles for the content inside the sidebar pop-up */
    .popup-content {
        padding: 20px;
    }
</style>

@section('content')
    <!--    --><?php //dd($blogs); ?>
    {{--------------------------Start of section 1 Landing (video slides)-------------------------}}

    <section class="home">
        <video class="video-slide active" src="{{asset('uploads/frontend/videos/USCVideoBanner.mp4')}}" autoplay muted
               loop></video>
        <video class="video-slide" src="{{asset('uploads/frontend/videos/2.mp4')}}" autoplay muted loop></video>
        <video class="video-slide" src="{{asset('uploads/frontend/videos/3.mp4')}}" autoplay muted loop></video>
        <video class="video-slide" src="{{asset('uploads/frontend/videos/2.mp4')}}" autoplay muted loop></video>

        <div class="content active">
            <h1>@lang('site.USC') <br></h1>
            <p>جامعة مدينة السادات جامعة مصرية حكومية تم انشاءها كجامعة مستقلة بالقرار الجمهوري من بتاريخ 25 مارس
                2013.</p>
            <a href="#">@lang('site.read_more')</a>
        </div>
        <div class="content">
            <h1>@lang('site.president_word')<br><span>@lang('site.president_name')</span></h1>
            <p style="font-size: 13px !important;">يسعدنى فى بداية تكليفى قائما بعمل رئيس جامعة مدينة السادات فى ظل
                قيادة فخامة رئيس الجمهورية الرئيس عبد
                الفتاح السيسي ان اتقدم بخالص الشكر والعرفان والتقدير الى السيد الاستاذ الدكتور أيمن عاشور وزير التعليم
                العالي والبحث العلمي لتكليفى بتيسير أعمال جامعة مدينة السادات حرصا على إستمرار العمل بالجامعه بالفاعليه
                المطلوبه وذالك لحين الانتهاء من إجراءات تعيين رئيسا جديدا للجامعه
                وأدعوا الله العلى القدير أن أكون أهلا لهذه الثقه فى إستكمال مسيرة الجامعه وتسيير ركب التطور فى هذه
                الفتره لرفع شأن الجامعه وتحقيق أهداف إستراتيجية وزارة التعليم العالى فى ظل رؤية مصر ٢٠٣٠ وتحت قيادة
                فخامة رئيس الجمهورية الرئيس عبد الفتاح السيسى.
                كما أتوجه الى كل منتسبى الجامعه من أعضاء هيئة تدريس وهيئة معاونه وعاملين بخالص التحيه والتقدير وادعوهم
                الى التكاتف والوقوف يدا واحده وفريق عمل واحد متكامل للحفاظ على مقدرات الجامعه و دفع مسيرة نهضتها علميا
                وبحثيا ومجتمعيا
                وفقنا الله وإياكم الى مايحبه ويرضاه لرفعة مصرنا الحبيبه.</p>
            <a href="#">@lang('site.read_more')</a>
        </div>
        <div class="content">
            <h1>@lang('site.USC') <br></h1>
            <p>جامعة مدينة السادات جامعة مصرية حكومية تم انشاءها كجامعة مستقلة بالقرار الجمهوري من بتاريخ 25 مارس
                2013.</p>
            <a href="#">@lang('site.read_more')</a>
        </div>
        <div class="content">
            <h1>@lang('site.president_word')<br><span>@lang('site.president_name')</span></h1>
            <p style="font-size: 13px !important;">يسعدنى فى بداية تكليفى قائما بعمل رئيس جامعة مدينة السادات فى ظل
                قيادة فخامة
                رئيس الجمهورية الرئيس عبد الفتاح السيسي ان اتقدم بخالص الشكر والعرفان والتقدير الى السيد الاستاذ الدكتور
                أيمن عاشور وزير التعليم العالي والبحث العلمي لتكليفى بتيسير أعمال جامعة مدينة السادات حرصا على إستمرار
                العمل بالجامعه بالفاعليه المطلوبه وذالك لحين الانتهاء من إجراءات تعيين رئيسا جديدا للجامعه
                وأدعوا الله العلى القدير أن أكون أهلا لهذه الثقه فى إستكمال مسيرة الجامعه وتسيير ركب التطور فى هذه
                الفتره لرفع شأن الجامعه وتحقيق أهداف إستراتيجية وزارة التعليم العالى فى ظل رؤية مصر ٢٠٣٠ وتحت قيادة
                فخامة رئيس الجمهورية الرئيس عبد الفتاح السيسى.
                كما أتوجه الى كل منتسبى الجامعه من أعضاء هيئة تدريس وهيئة معاونه وعاملين بخالص التحيه والتقدير وادعوهم
                الى التكاتف والوقوف يدا واحده وفريق عمل واحد متكامل للحفاظ على مقدرات الجامعه و دفع مسيرة نهضتها علميا
                وبحثيا ومجتمعيا
                وفقنا الله وإياكم الى مايحبه ويرضاه لرفعة مصرنا الحبيبه.</p>
            <a href="#">@lang('site.read_more')</a>
        </div>


        <div class="media-icons">
            <a href="https://www.facebook.com/usc.edu.eg"><i class="fab fa-facebook-f"></i></a>
            <a href="https://www.instagram.com/universityofsadatcity/"><i class="fab fa-instagram"></i></a>
            <a href="https://twitter.com/Univ_SadatCity"><i class="fab fa-twitter"></i></a>
        </div>
        <div class="slider-navigation">
            <div class="nav-btn active"></div>
            <div class="nav-btn"></div>
            <div class="nav-btn"></div>
            <div class="nav-btn"></div>

        </div>
    </section>

    {{--------------------------End of section 1 Landing (video slides)  -------------------------}}

    {{--------------------------Start of section 2 (Top News) ----------------------------------------}}

    <div class="important_news text-center pb-5 pt-2">
        <div class="container pb-5 pt-1">
            <img class="mb-4" src="{{asset('uploads/frontend/images/f_logos/USCLogo.png')}}" alt=""/>
            <h2 class="fw-bold main-title">@lang('site.important_news')</h2>
            <p class="text-black-50 mb-5">
                @lang('site.important_news_note')
            </p>
            <div class="row">
                @foreach($top_news->take(3) as $top_new)
                    <div class="col-md-6 col-lg-4">
                        <div class="box bg-white">
                            <a href="{{ route('top_new.show', ['id' => $top_new->id]) }}">
                                <img class="img-fluid" src="{{ $top_new->image_path }}" alt="{{ $top_new->title }}"
                                     style="width: 416px; height: 277px;"/>
                            </a>
                            <a href="{{ route('top_new.show', ['id' => $top_new->id]) }}">
                                <h4 class="p-3 text-light">{{ $top_new->title }}</h4>
                            </a>
                            <blockquote class="text-black-50 p-3">
                                {{--“{{$top_new->brief_content}}“--}}
                                {{substr(strip_tags(trim($top_new->content)), 0, 43)}} ...
                            </blockquote>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="d-flex justify-content-center mt-5">
                <a class="btn rounded-pill main-btn-dark text-uppercase" id="load-more"
                   href="#">@lang('site.more_top_news')</a>
            </div>
            <div class="row remaining-blogs" style="display: none;">
                @foreach($top_news->splice(3) as $top_new)
                    <div class="col-md-6 col-lg-4">
                        <div class="box bg-white">
                            <a href="{{ route('top_new.show', ['id' => $top_new->id]) }}">
                                <img class="img-fluid" src="{{ $top_new->image_path }}" alt="{{ $top_new->title }}"
                                     style="width: 416px; height: 277px;"/>
                            </a>
                            <a href="{{ route('top_new.show', ['id' => $top_new->id]) }}">
                                <h4 class="p-3 text-light">{{ $top_new->title }}</h4>
                            </a>
                            <blockquote class="text-black-50 p-3">
                                {{--“{{$top_new->brief_content}}“--}}
                                {{substr(strip_tags(trim($top_new->content)), 0, 43)}}
                            </blockquote>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>



    {{--------------------------End of section 2 (Top News) ------------------------------------------}}



    {{--------------------------Start of section 3 (Latest News) ---------------------------------}}

    <div class="latest_news" id="latest_news">
        <h2 class="main-title">@lang('site.latest_news') </h2>

        <div class="container">
            <div class="row">

                @foreach($blogs as $blog)
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="card mb-5">
                            <img src="{{ $blog->image_path }}" alt="{{ $blog->title }}"
                                 style="width: 304px; height: 250px;"/>
                            <div class="card-body">
                                <h6 class="publish-date">{{ $blog->publish_date }}</h6>
                                <h3>{{ $blog->title }}</h3>
                                <p>{{substr(strip_tags(trim($blog->content)), 0, 50)}}...</p>
                            </div>
                            <div class="info">
                                <a href="{{ route('blog.show', ['id' => $blog->id]) }}">@lang('site.read_more')</a>

                                @if(app()->getLocale() == 'ar')
                                    <i class="fas fa-long-arrow-alt-left"></i>
                                @else
                                    <i class="fas fa-long-arrow-alt-right"></i>
                                @endif

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="d-flex justify-content-center mt-5">
                <a class="btn rounded-pill main-btn-dark text-uppercase"
                   href="{{ route('all_blogs.index') }}">@lang('site.more_news')</a>
            </div>

        </div>
    </div>

    {{--------------------------End of section 3 (Latest News) -----------------------------------}}

    <div class="spikes"></div>

    {{--------------------------End of section 4 (Statistics) -----------------------------------}}

    <div class="stats" id="stats">
        <h2>@lang('site.OurStatistics')</h2>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-2 pb-5">
                    <div class="box">
                        <i class="fa-solid fa-users fa-2xl"></i>
                        <span class="number" data-goal="3016">2000</span>
                        <span class="text">@lang('site.employees')</span>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-2 pb-5">
                    <div class="box">
                        <i class="fa-solid fa-building-columns fa-2x fa-fw"></i>
                        <span class="number" data-goal="11">0</span>
                        <span class="text">@lang('site.colleges')</span>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-2 pb-5">
                    <div class="box">
                        <i class="fas fa-pen-nib fa-2xl"></i>
                        <span class="number" data-goal="1486">500</span>
                        <span class="text">@lang('site.staff')</span>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-2 pb-5">
                    <div class="box">
                        <i class="fa-solid fa-graduation-cap fa-2xl"></i>
                        <span class="number" data-goal="7835">6500</span>
                        <span class="text">@lang('site.postgraduate')</span>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-2 pb-5">
                    <div class="box">
                        <i class="fa-solid fa-user-graduate fa-2xl"></i>
                        <span class="number" data-goal="25684">24000</span>
                        <span class="text">@lang('site.students')</span>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-2 pb-5">
                    <div class="box">
                        <i class="fa-solid fa-sliders fa-2xl"></i>
                        <span class="number" data-goal="312">0</span>
                        <span class="text">@lang('site.study_programs')</span>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{--------------------------End of section 4 (Statistics) -----------------------------------}}




    {{--------------------------Start of section 5 (Events) -------------------------------------}}

    {{--<div class="events" id="events">
        <h2 class="fw-bold main-title">@lang('site.TopEvents')</h2>
        <div class="container">
            <div class="row border">


                --}}{{--         <div class="col-lg-4 col-md-4 event-data">
                             <div class="list w-100 bg-white">
                                 <div class="name">
                                     Top Events
                                     <i class="fas fa-random"></i>
                                 </div>
                                 <ul>
                                     @foreach($events as $event)
                                         <li class="py-2 px-4 border-top border-light-subtle" role="button" tabindex="0">
                                             {{ $event->title }}
                                             <span>Jan 17, 2022 at 05:18 PM</span>
                                             <span> {{ $event->start_date }}</span>
                                         </li>
                                     @endforeach
                                 </ul>
                             </div>
                         </div>
                         <div class="col-lg-8 col-md-8 p-0 m-0 event-img">
                             <div class="preview h-100">
                                 <img class="w-100 h-75" src="{{ $event->image_path }}" alt="{{ $event->title }}"/>
                                 <div class="info d-inline-flex justify-content-between">
                                     <div class="justify-content-center">   {{ $event->title }} </div>
                                 </div>
                             </div>
                         </div>--}}{{--


                <div class="col-lg-4 col-md-4 event-data">
                    <div class="list w-100 bg-white">
                        <div class="name">
                            Top Events
                            <i class="fas fa-random"></i>
                        </div>
                        <ul>
                            @foreach($events as $event)
                                <li class="py-2 px-4 border-top border-light-subtle event-item" role="button"
                                    tabindex="0" data-image="{{ $event->image_path }}"
                                    data-content="{{ $event->content }}"
                                    {{ $event->title }} data-date="{{ $event->start_date }}">
                                    {{ $event->title }}
                                    <span>{{ \Carbon\Carbon::parse($event->start_date)->format('M j, Y') }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="col-lg-8 col-md-8 p-0 m-0 event-img">
                    <div class="preview h-100">
                        <img class="w-100 h-75" id="event-image" src="" alt=""/>
                        <div class="info d-inline-flex justify-content-between">
                            <div class="justify-content-center">
                                <span id="event-title"></span> <span id="event-date"></span>
                                <p id="event-content"></p>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>--}}
    <div class="events" id="events">
        <h2 class="fw-bold main-title">@lang('site.TopEvents')</h2>
        <div class="container">
            <div class="row border">


                {{--         <div class="col-lg-4 col-md-4 event-data">
                             <div class="list w-100 bg-white">
                                 <div class="name">
                                     Top Events
                                     <i class="fas fa-random"></i>
                                 </div>
                                 <ul>
                                     @foreach($events as $event)
                                         <li class="py-2 px-4 border-top border-light-subtle" role="button" tabindex="0">
                                             {{ $event->title }}
                                             <span>Jan 17, 2022 at 05:18 PM</span>
                                             <span> {{ $event->start_date }}</span>
                                         </li>
                                     @endforeach
                                 </ul>
                             </div>
                         </div>
                         <div class="col-lg-8 col-md-8 p-0 m-0 event-img">
                             <div class="preview h-100">
                                 <img class="w-100 h-75" src="{{ $event->image_path }}" alt="{{ $event->title }}"/>
                                 <div class="info d-inline-flex justify-content-between">
                                     <div class="justify-content-center"> Everything About {{ $event->title }} Event</div>
                                 </div>
                             </div>
                         </div>--}}


                <div class="col-lg-4 col-md-4 event-data">
                    <div class="list w-100 bg-white">
                        <div class="name">
                            Top Events
                            <i class="fas fa-random"></i>
                        </div>
                        <ul>
                            @foreach($events as $event)
                                <li class="py-2 px-4 border-top border-light-subtle event-item" role="button"
                                    tabindex="0" data-image="{{ $event->image_path }}"
                                    data-content="{!! $event->content !!}"
                                    {{ $event->title }} data-date="{{ $event->start_date }}">
                                    {{ $event->title }}
                                    <span>{{ \Carbon\Carbon::parse($event->start_date)->format('M j, Y') }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="col-lg-8 col-md-8 p-0 m-0 event-img">
                    <div class="preview h-100">
                        <img class="w-100 h-75" id="event-image" src="" alt=""/>
                        <div class="info d-inline-flex justify-content-between">
                            <div class="justify-content-center">
                                <span id="event-title"></span> <span id="event-date"></span>
                                <p id="event-content"></p>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>

    {{--------------------------End of section 5 (Events) ---------------------------------------}}


    <div class="spikes"></div>

    {{--------------------------Start of section 6 (Upcoming Events) ----------------------------}}

    <!-- <div class="u_events" id="u_events">
        <div class="dots dots-up"></div>
        <h2 class="main-title">@lang('site.UpcomingEvents') </h2>
        <div class="container">
            <img src="{{asset('uploads//frontend/images/upcoming-events.png')}}" alt=""/>
            <div class="info">
                <div class="time">
                    <div class="unit">
                        <span class="days">15</span>
                        <span>Days</span>
                    </div>
                    <div class="unit">
                        <span class="hours">08</span>
                        <span>Hours</span>
                    </div>
                    <div class="unit">
                        <span class="minutes">45</span>
                        <span>Minutes</span>
                    </div>
                    <div class="unit">
                        <span class="seconds">55</span>
                        <span>Seconds</span>
                    </div>
                </div>
                <h2 class="title">Tech Masters Event 2021</h2>
                <p class="description">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Et vero tenetur doloremque iusto ut
                    adipisci
                    quam
                    ratione aliquam excepturi nulla in harum, veritatis porro
                </p>
            </div>
            <div class="subscribe">
                <form action="">
                    <input type="email" placeholder="Enter Your Email"/>
                    <input type="submit" value="Subscribe"/>
                </form>
            </div>
        </div>
    </div>     -->


    {{--------------------------End of section 6 (Upcoming Events) ------------------------------}}





    {{--------------------------Start of section 7 (Mobile Apps) --------------------------------}}

    <div class="design">
        {{--    <h2>Our Electronic & Application Services</h2>--}}
        <div class="image d-none d-md-block">
            <img src="{{asset('uploads/frontend/images/mobile2.png')}}" alt="Mobile"/>
        </div>
        <div class="text">
            <h2>@lang('site.StudentServices')  </h2>
            <ul>
                <li>@lang('site.ELZAHRAA')</li>
                <li>@lang('site.AlFarouk')</li>
                <li> @lang('site.Ibnelhaitham')   </li>
            </ul>
        </div>
    </div>


    {{--------------------------End of section 7 (Mobile Apps) ----------------------------------}}

@endsection


@push('scripts')

    <!-- Tab to open the sidebar pop-up -->
    <div class="popup-tab" id="popupTab" onclick="togglePopup()">خدمات الجامعة</div>

    <!-- Sidebar pop-up container -->
    <div class="sidebar-popup" id="popupContainer">
        <div class="popup-content">
            <h5>خدمة الدفع الإلكتروني للخدمات المقدمة من مركز الخدمات المعرفية والالكترونية</h5>
            <p dir="RTL"
               style='margin-right:0; margin-left:0; font-size:16px;font-family:"Calibri",sans-serif;margin-top:0; margin-bottom:8.0pt; font-size:11.0pt; text-align:center;background:white;'>
                <strong><span style='font-size:21px; font-family:"Sakkal Majalla"; color:#ED7D31;'>(المكتبة الرقمة &ndash; التحول الرقمي) الرجاء الدخول على الرابط التالى:-</span></strong>
            </p>
            <p style="text-align: center;"><span style='font-size:14px;font-family:"Calibri",sans-serif;color:#ED7D31;'><a
                        href="https://eksc.usc.edu.eg/login" data-asw-orgfontsize="14"
                        style=" border-box;color:rgba(var(--bs-link-color-rgb),var(--bs-link-opacity,1));"><strong><span
                                data-asw-orgfontsize="21"><span
                                    style='font-size:21px;font-family:"Sakkal Majalla";color:#ED7D31;text-decoration:none;'>https://eksc.usc.edu.eg/login</span></span></strong></a></span>
            </p>

            <button onclick="togglePopup()">اغلاق</button>
        </div>
    </div>

    <script>
        var popupTab = document.getElementById("popupTab");
        var popupContainer = document.getElementById("popupContainer");

        // Function to toggle the sidebar pop-up open and closed
        function togglePopup() {
            if (popupContainer.style.width === "0px" || popupContainer.style.width === "") {
                // Open the sidebar pop-up
                popupContainer.style.width = "300px"; // Adjust the width as needed
            } else {
                // Close the sidebar pop-up
                popupContainer.style.width = "0";
            }
        }
    </script>





    {{--        <script>
                // JavaScript code to handle the click event on event items
                const eventItems = document.querySelectorAll('.event-item');
                const eventImage = document.getElementById('event-image');
                const eventTitle = document.getElementById('event-title');

                // Function to remove the "selected-event" class from all event items
                function deselectAllEvents() {
                    eventItems.forEach(item => {
                        item.classList.remove('selected-event');
                    });
                }

                // Select the first event item by default
                const firstEventItem = eventItems[0];
                firstEventItem.click();

                eventItems.forEach(item => {
                    item.addEventListener('click', () => {
                        // Deselect all events first
                        deselectAllEvents();

                        // Add the "selected-event" class to the clicked event
                        item.classList.add('selected-event');

                        const imageSrc = item.getAttribute('data-image');
                        const title = item.textContent.trim();
                        eventImage.src = imageSrc;
                        eventTitle.textContent = title;
                    });
                });

            </script>--}}
    {{--        <script>
                // JavaScript code to handle the click event on event items
                document.addEventListener('DOMContentLoaded', function () {
                    const eventItems = document.querySelectorAll('.event-item');
                    const eventImage = document.getElementById('event-image');
                    const eventTitle = document.getElementById('event-title');

                    // Function to remove the "selected-event" class from all event items
                    function deselectAllEvents() {
                        eventItems.forEach(item => {
                            item.classList.remove('selected-event');
                        });
                    }

                    // Select the first event item by default
                    const firstEventItem = eventItems[0];
                    selectEvent(firstEventItem);

                    eventItems.forEach(item => {
                        item.addEventListener('click', () => {
                            // Deselect all events first
                            deselectAllEvents();

                            // Add the "selected-event" class to the clicked event
                            item.classList.add('selected-event');

                            // Call the selectEvent function to update the event image and title
                            selectEvent(item);
                        });
                    });

                    // Function to update the event image and title
                    function selectEvent(item) {
                        const imageSrc = item.getAttribute('data-image');
                        const title = item.textContent.trim();
                        eventImage.src = imageSrc;
                        eventTitle.textContent = title;
                    }
                });
            </script>--}}

    {{--Top Event script--}}
    <script>
        // JavaScript code to handle the click event on event items
        document.addEventListener('DOMContentLoaded', function () {
            const eventItems = document.querySelectorAll('.event-item');
            const eventImage = document.getElementById('event-image');
            const eventTitle = document.getElementById('event-title');
            const eventDate = document.getElementById('event-date');
            const eventContent = document.getElementById('event-content');

            // Function to remove the "selected-event" class from all event items
            function deselectAllEvents() {
                eventItems.forEach(item => {
                    item.classList.remove('selected-event');
                });
            }

            eventItems.forEach(item => {
                item.addEventListener('click', () => {
                    // Deselect all events first
                    deselectAllEvents();

                    // Add the "selected-event" class to the clicked event
                    item.classList.add('selected-event');

                    // Call the selectEvent function to update the event image and title
                    selectEvent(item);
                });
            });

            // Select the first event item by default after event listeners are set up
            const firstEventItem = eventItems[0];
            firstEventItem.click(); // Simulate a click to style it as selected

            // Function to update the event image and title
            /*function selectEvent(item) {
                const imageSrc = item.getAttribute('data-image');
                const titleWithDate = item.textContent.trim();

                // Split the title to separate the date
                const titleParts = titleWithDate.split(' at ');

                // Extract the event title without the date
                const title = titleParts[0];

                eventImage.src = imageSrc;
                eventTitle.textContent = title;
            }*/

            // Function to update the event image, title, date, and content
            function selectEvent(item) {
                const imageSrc = item.getAttribute('data-image');
                const titleWithDate = item.textContent.trim();

                // Split the title to separate the date and title parts
                const titleParts = titleWithDate.split(' at ');
                const date = titleParts[0];
                const title = titleParts.slice(1).join(' ');

                // Get the event content from the data-content attribute of the clicked item
                const content = item.getAttribute('data-content');

                eventImage.src = imageSrc;
                eventTitle.textContent = title;
                eventDate.textContent = date;
                eventContent.textContent = content;
            }

        });
    </script>





    {{--script to show more important news--}}
    <script src="{{asset('frontend_files/js/http_code.jquery.com_jquery-3.6.0.js')}}"></script>
    <script>
        $(document).ready(function () {
            $("#load-more").click(function (e) {
                e.preventDefault();

                // Show the remaining blog items
                $(".remaining-blogs").slideDown();

                // Hide the "See More" button
                $(this).hide();
            });
        });
    </script>

@endpush


