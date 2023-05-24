<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        جامعة مدينة السادات | رئيسية الموقع
    </title>
    {{--    <link rel="shortcut icon" href="{{asset('uploads/frontend/images/2.png')}}"/>--}}

    <!-- ------------------------ Styles ------------------------ -->
    @if (app()->getLocale() == 'ar')
        {{--        <link rel="stylesheet" href="{{ asset('dashboard_files/css/font-awesome-rtl.min.css') }}">--}}
        {{--        <link rel="stylesheet" href="{{ asset('dashboard_files/css/AdminLTE-rtl.min.css') }}">--}}
        {{--        <link href="https://fonts.googleapis.com/css?family=Cairo:400,700" rel="stylesheet">--}}
        {{--        <link rel="stylesheet" href="{{ asset('dashboard_files/css/bootstrap-rtl.min.css') }}">--}}
        {{--        <link rel="stylesheet" href="{{ asset('dashboard_files/css/rtl.css') }}">--}}

        {{--        <style>--}}
        {{--            body, h1, h2, h3, h4, h5, h6 {--}}
        {{--                font-family: 'Cairo', sans-serif !important;--}}
        {{--            }--}}
        {{--        </style>--}}
    @else
        <!--bootstrap-->
        <link rel="stylesheet" href="{{ asset('frontend_files/css/bootstrap.min.css') }}">

        <!--font awesome-->
        <link rel="stylesheet" href="{{ asset('frontend_files/css/all.min.css') }}">

        <!--main styles -->
        <link rel="stylesheet" href="{{ asset('frontend_files/css/main.css') }}">

        {{--<!-- Google Fonts -->--}}
        <link rel="preconnect" href="https://fonts.googleapis.com"/>
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
        <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;700&display=swap" rel="stylesheet"/>
    @endif

</head>
<body>
