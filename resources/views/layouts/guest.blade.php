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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ env('STATIC_ASSET_URL', '') }}/static/css/style.css">



    <link rel="stylesheet" href="{{ env('STATIC_ASSET_URL', '') }}/static/css/custom.css">

    @vite(['resources/js/app.js'])

    <style>
        .pop-up {
            max-height: 130px;
            bottom: 18px;
            /* left: 0; */
            left: -17px;
            position: fixed;
            /* padding: 0.9rem 1rem;
            margin: 0.8rem 1rem; */
            max-width: 270px;
            --tw-bg-opacity: 1;
            background-color: #e8e8e8;
            font-style: normal;
            font-size: 13.5px;
            border-left-width: 0.7rem;
            border-color: theme(colors.custom.yellow);
            border-left-style: solid;
            border-right-style: solid;
            /* border-width: 1rem; */
            border-right-width: 1px;
            -webkit-box-shadow: 0 25px 50px -12px rgb(0 0 0 / 0.25);
            box-shadow: 0 25px 50px -12px rgb(0 0 0 / 0.25);
            z-index: 99999999999;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            place-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            transform: translateX(-100%);
            -webkit-transform: translateX(-100%);
        }

        .pop-up.slide-in {
            animation: slide-in 0.5s forwards;
            -webkit-animation: slide-in 0.5s forwards;
        }

        .pop-up p {
            color: black;
        }

        .pop-up #balance {
            color: theme(colors.dark.secondary);
        }

        .pop-up.slide-in {
            animation: slide-in 0.5s forwards;
            -webkit-animation: slide-in 0.5s forwards;
        }

        .pop-up.slide-out {
            animation: slide-out 0.5s forwards;
            -webkit-animation: slide-out 0.5s forwards;
        }

        @keyframes slide-out {
            0% {
                -webkit-transform: translateX(0%);
                transform: translateX(0%);
            }

            100% {
                -webkit-transform: translateX(-100%);
                transform: translateX(-100%);
            }
        }

        @-webkit-keyframes slide-out {
            0% {
                -webkit-transform: translateX(0%);
            }

            100% {
                -webkit-transform: translateX(-100%);
            }
        }

        @keyframes slide-in {
            100% {
                left: 0;
                -webkit-transform: translateX(0%);
                transform: translateX(0%);
            }
        }

        @-webkit-keyframes slide-in {
            100% {
                -webkit-transform: translateX(0%);
            }
        }
    </style>
    {{-- 
    <script defer>
        if ("serviceWorker" in navigator) {
            // window.addEventListener("load", () => {
            navigator.serviceWorker
                .register("{{ env('STATIC_ASSET_URL', '') }}/service-worker.js")
                .then((req) => {
                    if (!req.active) {
                        console.log("Service Worker: Registering...");
                    }
                })
                .catch((err) => console.error(`Service Worker ${err}`));
            // });
        }
    </script> --}}

    {{-- <style>
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
    </style> --}}

</head>

<body>

    <x-preloader />
    <x-base.navigation />
    <x-base.mobile-navigation />

    <main class="main">
        {{ $slot }}
        <x-base.pop-up />
    </main>
    <livewire:base.footer />

    <script src="{{ env('STATIC_ASSET_URL', '') }}/static/js/faker.js"></script>
    <script src="{{ env('STATIC_ASSET_URL', '') }}/static/js/vendors/modernizr-3.6.0.min.js" data-navigate-once></script>
    <script src="{{ env('STATIC_ASSET_URL', '') }}/static/js/vendors/jquery-3.6.0.min.js" data-navigate-once></script>
    <script src="{{ env('STATIC_ASSET_URL', '') }}/static/js/vendors/jquery-migrate-3.3.0.min.js" data-navigate-once>
    </script>
    {{-- <script src="{{ env('STATIC_ASSET_URL', '') }}/static/js/vendors/bootstrap.bundle.min.js" data-navigate-once></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>


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
