<?php

use function Livewire\Volt\{state};

state([
    'menus' => [
        [
            'title' => 'Dashboard',
            'href' => route('dashboard'),
        ],
        [
            'title' => 'Send Mail',
            'href' => route('send-mail'),
        ],
        [
            'title' => 'Packages',
            'href' => route('packages'),
        ],
        [
            'title' => 'Create Package',
            'href' => route('create-package'),
        ],
        [
            'title' => 'Customers',
            'href' => route('customers'),
        ],
        [
            'title' => 'Update Delivery Status',
            'href' => route('update-delivery-status'),
        ],
    ],
]);
?>

<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="index.html" class="logo logo-dark">
            <span class="logo-sm">
                <img src="" alt="{{ config('app.name') }}" height="22">
            </span>
            <span class="logo-lg">
                <img src="" alt="{{ config('app.name') }}" height="17">
            </span>
        </a>
        <!-- Light Logo-->
        <a href="index.html" class="logo logo-light">
            <span class="logo-sm">
                <img src="" alt="{{ config('app.name') }}" height="22">
            </span>
            <span class="logo-lg">
                <img src="" alt="{{ config('app.name') }}" height="17">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
            id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title">
                    <span data-key="t-menu">Menu</span>
                </li>
                @foreach ($menus as $menu)
                    <li class="nav-item">
                        <a class="nav-link menu-link" href="{{ $menu['href'] }}">
                            {{-- <i class="ri-dashboard-2-line">
                            </i> --}}
                            <span data-key="t-dashboards">{{ $menu['title'] }}</span>
                        </a>

                    </li>
                @endforeach
                <!-- end Dashboard Menu -->

            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>
