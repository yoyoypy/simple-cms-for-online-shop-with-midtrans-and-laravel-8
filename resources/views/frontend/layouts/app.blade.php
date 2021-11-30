<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    @yield('meta')
    <link rel="icon" type="image/png" href="{{ asset('frontend/favicon.ico') }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    {{-- Stylesheets & Fonts --}}
    <link href="{{ asset('frontend/css/plugins.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet">
    {{-- Pageloader plugin files --}}
    <link href="{{ asset('frontend/plugins/pageloader/pageloader.css') }}" rel="stylesheet">
</head>

<body data-icon="16">
    {{-- Body Inner --}}
    <div class="body-inner">
        @include('frontend.includes.navbar')

        @yield('content')

        @include('frontend.includes.footer')

    </div>
    {{-- end: Body Inner --}}

    {{-- Scroll top --}}
    <a id="scrollTop"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>
    {{-- Plugins --}}
    <script src="{{ asset('frontend/js/jquery.js') }}"></script>
    <script src="{{ asset('frontend/js/plugins.js') }}"></script>

    {{-- Template functions --}}
    <script src="{{ asset('frontend/js/functions.js') }}"></script>

    {{-- Pageloader plugin files --}}
    <script src="{{ asset('frontend/plugins/pageloader/pageloader.js') }}"></script>
    <script src="{{ asset('frontend/plugins/pageloader/pageloader.init.js') }}"></script>

    {{-- <script>
        $(document).ready(function () {
            $(window).on('load',function () {
                $("#testMe", function () {
                $(".body-inner").fadeOut("slow");

                setTimeout(function () {
                    $("body").append('<div class="animsition-loading"><div class="loader"><div class="spinner"><div class="right-side"><div class="bar"></div></div><div class="left-side"><div class="bar"></div></div></div></div></div>');

                }, 1000);


                setTimeout(function () {
                    $(".body-inner").fadeIn("slow");
                    $("body").find(".animsition-loading").fadeOut("slow");

                }, 1500);
            });
        });
    });
    </script> --}}
</body>

</html>
