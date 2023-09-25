@extends('layouts.frontend.app')
<style>
    .navbar {
        background: black !important;
        display: block;
        margin-bottom: 60px;
    }

    .content-container {
        text-align: justify; /* Justify the text */
        /*white-space: break-spaces; !* Prevent line breaks *!
        overflow-x: hidden !important; !* Hide horizontal overflow *!*/
    }

    .even-blog {
        background-color: white;
    }
    
    /* blog image size in mobile view */
    @media (max-width: 560px) {
        .important_news .container .row img {
            width: 365px !important;
        }
    }

</style>

@section('content')

    <!--    --><?php //dd($blogs); ?>
    <div class="important_news text-center pb-5 pt-2">
        <div class="container pb-5 pt-1">
            <img class="mb-4" src="{{asset('uploads/frontend/images/12.png')}}" alt=""/>
            <h2 class="fw-bold main-title">@lang('site.university_news')</h2>
            @foreach($blogs as $index => $blog)
                <div class="row pb-5 @if($index % 2 == 0) flex-row-reverse @endif">
                    <div class="col">
                        <strong>{{$blog->title}}</strong>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-5">
                        <img src="{{ $blog->image_path }}" alt="{{ $blog->title }}"
                             style="width: 416px; height: 277px;"/>
                    </div>
                    <div class="col-lg-7 content-container pt-5">
                        {!!   strip_tags($blog->content) !!}
                    </div>
                </div>
                <hr/>
            @endforeach
        </div>
    </div>



    {{--<div class="important_news text-center pb-5 pt-2">
        <div class="container pb-5 pt-1">
            <img class="mb-4" src="{{ asset('uploads/frontend/images/12.png') }}" alt=""/>
            <h2 class="fw-bold main-title">@lang('site.university_news')</h2>
            @foreach($blogs as $index => $blog)

                <div class="col">
                    <strong>{{$blog->title}}</strong>
                </div>

                <div class="row pb-5">
                    <div class="col-lg-5 @if($index % 2 == 0) order-lg-2 @endif">
                        <img src="{{ $blog->image_path }}" alt="{{ $blog->title }}"
                             style="width: 416px; height: 277px;"/>
                    </div>
                    <div class="col-lg-7 content-container pt-5 @if($index % 2 == 0) order-lg-1 @endif">
                        {!! $blog->content !!}
                    </div>
                </div>
                <hr/>
            @endforeach
        </div>
    </div>--}}




    {{-- <div class="important_news text-center pb-5 pt-2">
         <div class="container pb-5 pt-1 @if($index % 2 == 0) even-blog @endif">
             <img class="mb-4" src="{{ asset('uploads/frontend/images/12.png') }}" alt=""/>
             <h2 class="fw-bold main-title">@lang('site.latest_news')</h2>
             @foreach($blogs as $index => $blog)
                 <div class="col @if($index % 2 == 0) even-blog @endif">
                     <strong>{{$blog->title}}</strong>
                 </div>
                 <div class="row pb-5 @if($index % 2 == 0) even-blog @endif">
                     <div class="col-lg-5 @if($index % 2 == 0) order-lg-2 @endif">
                         <img src="{{ $blog->image_path }}" alt="{{ $blog->title }}"
                              style="width: 416px; height: 277px;"/>
                     </div>
                     <div class="col-lg-7 content-container pt-5 @if($index % 2 == 0) order-lg-1 @endif">
                         {!! strip_tags($blog->content) !!}
                     </div>
                 </div>
                 <hr/>
             @endforeach
         </div>
     </div>--}}

@endsection
