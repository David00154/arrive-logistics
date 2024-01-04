<?php

use function Livewire\Volt\{state};

//

?>

<section class="section d-block">
    <div class="banner-1 banner-4 wow animate__animated animate__fadeIn"
        style="background-image:url(/static/imgs/page/homepage4/banner.png)">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <p class="font-md color-white mb-15 wow animate__animated animate__fadeIn">Logistics & Transportation
                    </p>
                    <h1 class="color-white mb-25 wow animate__animated animate__fadeIn">Worldwide shipping and<br
                            class="d-none d-lg-block">professional solutions</h1>
                    <div class="row">
                        <div class="col-lg-9">
                            <p class="font-md color-white mb-20 wow animate__animated animate__fadeIn">Our experienced
                                team of problem solvers and a commitment to always align with<br
                                    class="d-none d-lg-block wow animate__animated animate__fadeIn">our client’s
                                business goals and objectives is what drives mutual success.</p>
                        </div>
                    </div>
                    <div class="box-button mt-30"><a
                            class="btn btn-brand-1-big hover-up mr-40 wow animate__animated animate__fadeIn"
                            href="index-4.html#">Calculate Package</a><a
                            class="btn btn-play popup-youtube hover-up wow animate__animated animate__fadeIn"
                            href="https://www.youtube.com/watch?v=kCGf5uNE13I"><img
                                src="{{ env('STATIC_ASSET_URL', '') }}/static/imgs/template/icons/play.svg"
                                alt="{{ config('app.name') }}">How it work
                            ?</a></div>
                </div>
            </div>
        </div>
    </div>
    <div class="box-slider-homepage2 box-slider-homepage-4">
        <div class="container">
            <div class="box-swiper">
                <div class="swiper-container swiper-group-4 swiper-group-3-style-2">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide wow animate__animated animate__fadeIn">
                            <div class="card-offer hover-up">
                                <div class="card-image"><img
                                        src="{{ env('STATIC_ASSET_URL', '') }}/static/imgs/page/homepage1/cargo-ship.png"
                                        alt="{{ config('app.name') }}"></div>
                                <div class="card-info">
                                    <h5 class="color-brand-2 mb-15">Sea Forwarding</h5>
                                    <p class="font-sm color-grey-900 mb-35">We are professional in ocean freight with
                                        more than 12 years of experience and have shipped more than 100k shipments.</p>
                                    <div class="box-button-offer mb-30"><a
                                            class="btn btn-link font-sm color-brand-2">View Details<span>
                                                <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor"
                                                    viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                                </svg></span></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide wow animate__animated animate__fadeIn">
                            <div class="card-offer hover-up">
                                <div class="card-image"><img
                                        src="{{ env('STATIC_ASSET_URL', '') }}/static/imgs/page/homepage1/plane.png"
                                        alt="{{ config('app.name') }}">
                                </div>
                                <div class="card-info">
                                    <h5 class="color-brand-2 mb-15">Air Freight Forwarding</h5>
                                    <p class="font-sm color-grey-900 mb-35">We are professional in ocean freight with
                                        more than 12 years of experience and have shipped more than 100k shipments.</p>
                                    <div class="box-button-offer mb-30"><a
                                            class="btn btn-link font-sm color-brand-2">View Details<span>
                                                <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor"
                                                    viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                                </svg></span></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide wow animate__animated animate__fadeIn">
                            <div class="card-offer hover-up">
                                <div class="card-image"><img
                                        src="{{ env('STATIC_ASSET_URL', '') }}/static/imgs/page/homepage1/delivery.png"
                                        alt="{{ config('app.name') }}"></div>
                                <div class="card-info">
                                    <h5 class="color-brand-2 mb-15">Land Transportation</h5>
                                    <p class="font-sm color-grey-900 mb-35">We are professional in ocean freight with
                                        more than 12 years of experience and have shipped more than 100k shipments.</p>
                                    <div class="box-button-offer mb-30"><a
                                            class="btn btn-link font-sm color-brand-2">View Details<span>
                                                <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor"
                                                    viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                                </svg></span></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide wow animate__animated animate__fadeIn">
                            <div class="card-offer hover-up">
                                <div class="card-image"><img
                                        src="{{ env('STATIC_ASSET_URL', '') }}/static/imgs/page/homepage1/delivery.png"
                                        alt="{{ config('app.name') }}"></div>
                                <div class="card-info">
                                    <h5 class="color-brand-2 mb-15">Railway Logistics</h5>
                                    <p class="font-sm color-grey-900 mb-35">We are professional in ocean freight with
                                        more than 12 years of experience and have shipped more than 100k shipments.</p>
                                    <div class="box-button-offer mb-30"><a
                                            class="btn btn-link font-sm color-brand-2">View Details<span>
                                                <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor"
                                                    viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                                </svg></span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="swiper-pagination swiper-pagination-banner swiper-pagination-style-2 swiper-pagination-group-4">
                    </div>
                </div>
                <div
                    class="swiper-button-prev swiper-button-prev-style-1 swiper-button-prev-style-2 swiper-button-prev-group-4">
                    <svg fill="none" stroke="currentColor" stroke-width="1.5" viewbox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18">
                        </path>
                    </svg>
                </div>
                <div
                    class="swiper-button-next swiper-button-next-style-1 swiper-button-next-style-2 swiper-button-next-group-4">
                    <svg fill="none" stroke="currentColor" stroke-width="1.5" viewbox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3">
                        </path>
                    </svg>
                </div>
            </div>
        </div>
    </div>
</section>
