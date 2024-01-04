<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}
    <title>{{ $title . ' - ' . config('app.name') }}</title>
    <!-- Scripts -->


    <link rel="shortcut icon" type="image/x-icon"
        href="{{ env('STATIC_ASSET_URL', '') }}/static/imgs/template/favicon.svg">

    <link rel="stylesheet" href="{{ env('STATIC_ASSET_URL', '') }}/static/css/style.css">
    <link rel="stylesheet" href="{{ env('STATIC_ASSET_URL', '') }}/static/css/custom.css">

    @vite(['resources/js/app.js'])

    <style>
        .header .main-menu li div.sub-menu.five-col.four-col .menu-col {
            width: 50%;
        }

        label {
            font-weight: 500;
        }

        .invalid-error {
            width: 100%;
            margin-top: 0.70rem;
            font-size: .899em;
            display: inline-block;
            color: #ff4141;
        }
    </style>

</head>

<body>

    <x-preloader />
    <x-base.navigation />
    <x-base.mobile-navigation />

    <main class="main">
        {{ $slot }}
    </main>

    <livewire:base.footer>

        <script src="{{ env('STATIC_ASSET_URL', '') }}/static/js/vendors/modernizr-3.6.0.min.js" data-navigate-once></script>
        <script src="{{ env('STATIC_ASSET_URL', '') }}/static/js/vendors/jquery-3.6.0.min.js" data-navigate-once></script>
        <script src="{{ env('STATIC_ASSET_URL', '') }}/static/js/vendors/jquery-migrate-3.3.0.min.js" data-navigate-once>
        </script>
        <script src="{{ env('STATIC_ASSET_URL', '') }}/static/js/vendors/bootstrap.bundle.min.js" data-navigate-once></script>
        <script src="{{ env('STATIC_ASSET_URL', '') }}/static/js/vendors/waypoints.js" data-navigate-once></script>
        <script src="{{ env('STATIC_ASSET_URL', '') }}/static/js/vendors/wow.js" data-navigate-once></script>
        <script src="{{ env('STATIC_ASSET_URL', '') }}/static/js/vendors/magnific-popup.js" data-navigate-once></script>
        <script src="{{ env('STATIC_ASSET_URL', '') }}/static/js/vendors/perfect-scrollbar.min.js" data-navigate-once></script>
        <script src="{{ env('STATIC_ASSET_URL', '') }}/static/js/vendors/select2.min.js" data-navigate-once></script>
        <script src="{{ env('STATIC_ASSET_URL', '') }}/static/js/vendors/isotope.js" data-navigate-once></script>
        <script src="{{ env('STATIC_ASSET_URL', '') }}/static/js/vendors/scrollup.js" data-navigate-once></script>
        <script src="{{ env('STATIC_ASSET_URL', '') }}/static/js/vendors/swiper-bundle.min.js" data-navigate-once></script>
        <script src="{{ env('STATIC_ASSET_URL', '') }}/static/js/vendors/noUISlider.js" data-navigate-once></script>
        <script src="{{ env('STATIC_ASSET_URL', '') }}/static/js/vendors/slider.js" data-navigate-once></script>
        <!-- Count down-->
        <script src="{{ env('STATIC_ASSET_URL', '') }}/static/js/vendors/counterup.js" data-navigate-once></script>
        <script src="{{ env('STATIC_ASSET_URL', '') }}/static/js/vendors/jquery.countdown.min.js" data-navigate-once></script>
        <!-- Count down-->
        <script src="{{ env('STATIC_ASSET_URL', '') }}/static/js/vendors/jquery.elevatezoom.js" data-navigate-once></script>
        <script src="{{ env('STATIC_ASSET_URL', '') }}/static/js/vendors/slick.js" data-navigate-once></script>
        <script src="{{ env('STATIC_ASSET_URL', '') }}/static/js/main.js" data-navigate-once></script>
</body>

</html>
