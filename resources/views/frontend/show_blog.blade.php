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
</style>

@section('content')

    <div class="important_news text-center pb-5 pt-2">
        <div class="container pb-5 pt-1">
            <img class="mb-4" src="{{asset('uploads/frontend/images/12.png')}}" alt=""/>
            {{--<h2 class="fw-bold main-title">@lang('site.important_news')</h2>--}}
            <div class="row pb-5">
                <div class="col">
                    <strong>{{$blog->title}}</strong>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-8">
                    <img src="{{ $blog->image_path }}" alt="{{ $blog->title }}"
                         style="width: 624px; height: 416px;"/>
                </div>
                <div class="content-container col-lg-4 pt-5">
                    {!! $blog->content !!}
                </div>
            </div>
        </div>
    </div>
@endsection
