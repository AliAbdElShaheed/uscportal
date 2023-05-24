@include('layouts.frontend._head')

<body class="hold-transition skin-blue sidebar-mini">

<div class="wrapper">
    {{--------------------------Start of nav bar--------------------------------------------------}}
    @include('layouts.frontend._header')
    {{--------------------------End of nav bar----------------------------------------------------}}



    @yield('content')



    
    {{-----------------------------Start of Footer ----------------------------------------------}}
    @include('layouts.frontend._footer')
    {{--------------------------   End of Footer ------------------------------------------------}}

    {{--------------------------Start of JS-----------------------}}
    @include('layouts.frontend._footer_scripts')
    {{--------------------------End of JS-----------------------}}

</div><!-- end of wrapper -->


@stack('scripts')
</body>
</html>
