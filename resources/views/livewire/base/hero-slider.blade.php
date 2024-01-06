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
                            <p class="font-md color-white mb-20 wow animate__animated animate__fadeIn">

                                Embark on an efficient and reliable journey with our advanced logistics solutions. We
                                seamlessly connect businesses worldwide, ensuring speedy and
                                precise delivery.<br class="d-none d-lg-block wow animate__animated animate__fadeIn">
                                Experience the future of logistics with our innovative, client-focused approach.</p>
                        </div>
                    </div>
                    <div class="box-button mt-30">
                        <a class="btn btn-brand-1-big hover-up mr-40 wow animate__animated animate__fadeIn"
                            href="{{ route('get-quote') }}">Request a quote</a>
                        <a class="btn btn-play popup-youtube hover-up wow animate__animated animate__fadeIn"
                            href="https://www.youtube.com/watch?v=kCGf5uNE13I"><img
                                src="{{ env('STATIC_ASSET_URL', '') }}/static/imgs/template/icons/play.svg"
                                alt="{{ config('app.name') }}">How it work
                            ?</a>
                    </div>
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
                                    <p class="font-sm color-grey-900 mb-35">Sail smoothly through trade routes with sea
                                        forwarding. Our logistics ensure reliable, cost-effective transport of goods
                                        across oceans, always on time.</p>
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
                                    <p class="font-sm color-grey-900 mb-35">Navigate global logistics swiftly with air
                                        forwarding. Elevate supply chain efficiency as we expedite secure, timely
                                        deliveries through the skies.</p>
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
                                    <h5 class="color-brand-2 mb-15">Land Forwarding</h5>
                                    <p class="font-sm color-grey-900 mb-35">Ground your logistics in reliability with
                                        land forwarding. Whether by road or rail, we ensure seamless movement,
                                        connecting your business to key destinations.</p>
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
                                        src="{{ env('STATIC_ASSET_URL', '') }}/static/imgs/page/homepage1/warehouse.png"
                                        alt="{{ config('app.name') }}"></div>
                                <div class="card-info">
                                    <h5 class="color-brand-2 mb-15">Warehousing & Storage</h5>
                                    <p class="font-sm color-grey-900 mb-35">Optimize logistics with our warehousing
                                        solutions. From inventory management to order fulfillment, our facilities
                                        provide secure foundations, ensuring efficiency and accessibility.</p>
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
