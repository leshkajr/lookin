<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" onclick="closeMenu('auth-languages')">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link rel="stylesheet" href="{{ asset('../css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('../css/bootstrap/bootstrap.min.css') }}">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <div class="tm-header-animated"></div>
        <div class="min-h-screen d-flex flex-column justify-content-center align-items-center pt-6 sm:pt-0" style="background-color: var(--background-color)">
            <div>
                <a href="/">
                    {{--                    <x-application-logo class="w-20 h-20 fill-current text-gray-500" />--}}
                    <img src="{{ asset('../images/lookin-logo-0.5x.png') }}" class="fill-current text-gray-500">
                </a>
            </div>

            <div class="auth-block w-full sm:max-w-md mt-6 px-6 py-4 overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
    </body>

    <script src="{{ URL::asset('js/openMenu.js')}}"></script>
    <script src="{{ URL::asset('js/showPassword.js')}}"></script>
</html>
