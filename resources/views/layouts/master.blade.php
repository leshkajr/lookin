<html onclick="closeMenu('header-menu')">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Look`in - @yield('title')</title>
    <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet"/>
    <link href="{{ URL::asset('css/style2.css') }}" rel="stylesheet"/>
    <link href="{{ URL::asset('css/bootstrap/bootstrap.min.css') }}" rel="stylesheet"/>

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
          integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
          crossorigin=""/>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
            integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
            crossorigin=""></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="{{ URL::asset('js/chooseFilters.js')}}"></script>

</head>
<body onresize="changeSizes()" onload="changeSizes();" onscroll="onScroll('sticky-main-header','dialog-window-search');"
>

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
    <script src="{{ URL::asset('js/dialogWindowSwal.js')}}"></script>
    <script src="{{ URL::asset('js/search.js')}}"></script>
    <script src="{{ URL::asset('js/selection-lengs.js')}}"></script>
    <script src="{{ URL::asset('js/opisanie.js')}}"></script>
    <script src="{{ URL::asset('js/housePhoto.js')}}"></script>
    <script src="{{ URL::asset('js/radio_checked.js')}}"></script>
    <script src="{{ URL::asset('js/profils.js')}}"></script>
    <script src="{{ URL::asset('js/price.js')}}"></script>
    <script src="{{ URL::asset('js/counter.js')}}"></script>



    @yield('scripts')
</html>
