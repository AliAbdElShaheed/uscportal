@include('layouts.frontend._head')

<body class="hold-transition skin-blue sidebar-mini">

<div class="wrapper">
    {{--------------------------Start of nav bar--------------------------------------------------}}
    @include('layouts.frontend._header')
    {{--------------------------End of nav bar----------------------------------------------------}}


    {{--------------------------Start of Scroll To Top Button ------------------------------------}}
    <span class="up"><i class="fas fa-angle-double-up"></i></span>
    {{--<span class="up"><i class="fas fa-caret-up"></i></span>--}}
    {{--------------------------End of Scroll To Top Button --------------------------------------}}


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
{{--// Script to Accessibility Plugin--}}
<script src="https://website-widgets.pages.dev/dist/sienna.min.js" defer></script>

