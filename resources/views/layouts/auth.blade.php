<!DOCTYPE html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
    data-sidebar-image="none" data-preloader="disable">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Sign In | {{ config('app.name') }}</title>
    @vite(['resources/js/app.js'])

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
</head>

<body>
    {{ $slot }}

    <!-- JAVASCRIPT -->
    <script src="{{ env('STATIC_ASSET_URL') }}/static2/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ env('STATIC_ASSET_URL') }}/static2/libs/simplebar/simplebar.min.js"></script>
    <script src="{{ env('STATIC_ASSET_URL') }}/static2/libs/node-waves/waves.min.js"></script>
    <script src="{{ env('STATIC_ASSET_URL') }}/static2/libs/feather-icons/feather.min.js"></script>
    <script src="{{ env('STATIC_ASSET_URL') }}/static2/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="{{ env('STATIC_ASSET_URL') }}/static2/js/plugins.js"></script>

    <!-- validation init -->
    <script src="{{ env('STATIC_ASSET_URL') }}/static2/js/pages/form-validation.init.js"></script>
    <!-- password create init -->
    <script src="{{ env('STATIC_ASSET_URL') }}/static2/js/pages/passowrd-create.init.js"></script>
</body>

</html>
