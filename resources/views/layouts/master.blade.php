<html onclick="closeMenu('header-menu')">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Look`in - @yield('title')</title>
    <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet"/>
    <link href="{{ URL::asset('css/style2.css') }}" rel="stylesheet"/>
    <link href="{{ URL::asset('css/bootstrap/bootstrap.min.css') }}" rel="stylesheet"/>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body onresize="changeSizes()" onload="changeSizes();">

    @yield('header')

    @yield('content')

    @yield('footer')

    @yield('dialogs_windows')
</body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
            crossorigin="anonymous"></script>
    <script src="{{ URL::asset('js/scrollContent.js')}}"></script>
    <script src="{{ URL::asset('js/openMenu.js')}}"></script>
    <script src="{{ URL::asset('js/changeSizes.js')}}"></script>
    <script src="{{ URL::asset('js/showCheckboxes.js')}}"></script>
    <script src="{{ URL::asset('js/copyToClipboard.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/date-fns@2.24.0/"></script>
    <script src="{{ URL::asset('js/calendar.js')}}"></script>
    <script src="{{ URL::asset('js/counter.js')}}"></script>
    <script src="{{ URL::asset('js/dialogWindowSwal.js')}}"></script>

    @yield('scripts')
</html>
