<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-layout="vertical" data-topbar="light" data-sidebar="dark"
    data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title . ' - ' . config('app.name', 'Laravel') }}</title>

    <!-- jsvectormap css -->
    <link href="{{ env('STATIC_ASSET_URL') }}/static2/libs/jsvectormap/css/jsvectormap.min.css" rel="stylesheet"
        type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <!--Swiper slider css-->
    <link href="{{ env('STATIC_ASSET_URL') }}/static2/libs/swiper/swiper-bundle.min.css" rel="stylesheet"
        type="text/css" />

    <!-- Layout config Js -->
    <script src="{{ env('STATIC_ASSET_URL') }}/static2/js/layout.js"></script>
    <!-- Bootstrap Css -->
    <link href="{{ env('STATIC_ASSET_URL') }}/static2/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ env('STATIC_ASSET_URL') }}/static2/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ env('STATIC_ASSET_URL') }}/static2/css/app.min.css" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="{{ env('STATIC_ASSET_URL') }}/static2/css/custom.min.css" rel="stylesheet" type="text/css" />

    <!-- Scripts -->
    @vite(['resources/js/app.js'])

</head>

<body>
    <!-- Begin page -->
    <div id="layout-wrapper">
        <livewire:admin.header />
        <!-- ========== App Menu ========== -->
        <livewire:admin.sidebar />
        <!-- Left Sidebar End -->
        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    {{ $slot }}
                </div>
            </div>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <!--start back-to-top-->
    <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>
    <!--end back-to-top-->

    <!--preloader-->
    <div id="preloader">
        <div id="status">
            <div class="spinner-border text-primary avatar-sm" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>

    <!-- JAVASCRIPT -->

    <script defer>
        let copyBtns = document.querySelectorAll("#btn-should-copy")
        copyBtns.forEach((btn) => {
            let value = btn.dataset.value
            btn.onclick = () => {
                btn.disabled = true;
                navigator.clipboard.writeText(value).then(() => {
                    btn.textContent = "copied"
                    setTimeout(() => {
                        btn.textContent = "copy"
                        btn.disabled = false;
                    }, 800)
                })
            }
        })
    </script>
    <!--jquery cdn-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="{{ env('STATIC_ASSET_URL') }}/static2/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ env('STATIC_ASSET_URL') }}/static2/libs/simplebar/simplebar.min.js"></script>
    <script src="{{ env('STATIC_ASSET_URL') }}/static2/libs/node-waves/waves.min.js"></script>
    <script src="{{ env('STATIC_ASSET_URL') }}/static2/libs/feather-icons/feather.min.js"></script>
    <script src="{{ env('STATIC_ASSET_URL') }}/static2/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="{{ env('STATIC_ASSET_URL') }}/static2/js/plugins.js"></script>

    <!-- ckeditor -->
    {{-- <script src="{{ env('STATIC_ASSET_URL') }}/static2/libs/@ckeditor/ckeditor5-build-classic/build/ckeditor.js"></script> --}}

    <!-- init js -->
    {{-- <script src="{{ env('STATIC_ASSET_URL') }}/static2/js/pages/form-editor.init.js"></script> --}}

    <!-- apexcharts -->
    <script src="{{ env('STATIC_ASSET_URL') }}/static2/libs/apexcharts/apexcharts.min.js"></script>

    <!-- Vector map-->
    <script src="{{ env('STATIC_ASSET_URL') }}/static2/libs/jsvectormap/js/jsvectormap.min.js"></script>
    <script src="{{ env('STATIC_ASSET_URL') }}/static2/libs/jsvectormap/maps/world-merc.js"></script>

    <!--Swiper slider js-->
    <script src="{{ env('STATIC_ASSET_URL') }}/static2/libs/swiper/swiper-bundle.min.js"></script>

    <!-- Dashboard init -->
    <script src="{{ env('STATIC_ASSET_URL') }}/static2/js/pages/dashboard-ecommerce.init.js"></script>



    <script src="{{ env('STATIC_ASSET_URL') }}/static2/js/pages/select2.init.js"></script>

    <!-- App js -->
    <script src="{{ env('STATIC_ASSET_URL') }}/static2/js/app.js"></script>
</body>

</html>
