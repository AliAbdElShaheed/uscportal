<!DOCTYPE html>
<html dir="{{ LaravelLocalization::getCurrentLocaleDirection() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        جامعة مدينة السادات | رئيسية الموقع
    </title>
   <!--   <link rel="shortcut icon" href="{{asset('uploads/frontend/images/f_logos/USCLogo.ico')}}"/>   -->
  <link rel="icon" type="image/x-icon" href="{{asset('uploads/frontend/images/f_logos/USCLogo.ico')}}">


    <!-- ------------------------ Styles ------------------------ -->
    @if (app()->getLocale() == 'ar')
        <!--bootstrap rtl-->
        <link rel="stylesheet" href="{{ asset('frontend_files/css/bootstrap.min.css') }}">

        <!--font awesome-->
        <link rel="stylesheet" href="{{ asset('frontend_files/css/all.min.css') }}">

        <!--main styles -->
        <link rel="stylesheet" href="{{ asset('frontend_files/css/main.rtl.css') }}">

        {{--<!-- Google Fonts -->--}}
        <style>
            body, h1, h2, h3, h4, h5, h6 {
                font-family: 'Cairo', sans-serif !important;
            }
        </style>
        <link href="https://fonts.googleapis.com/css?family=Cairo:400,700" rel="stylesheet">

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
