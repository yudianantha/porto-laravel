<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Title -->
    <title>@yield('title')</title>

    <!-- Scripts -->
    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}

    @include('landing.partials.header')
    @include('landing.partials.style')
</head>

<body>
    @include('landing.partials.sidenav')
    @include('landing.partials.navbar')
    <main>
        @yield('landing')
    </main>
    @include('landing.partials.footer')
    @include('landing.partials.script')
</body>

</html>
