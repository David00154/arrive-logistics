<x-guest-layout>
    <x-slot:title>Services</x-slot:title>
    {{-- Banner --}}
    <section class="section">
        <div class="container">
            <div class="box-pageheader-1 box-pageheader-services text-center"><span
                    class="btn btn-tag wow animate__animated animate__fadeIn">What we offer</span>
                <h2 class="color-brand-2 mt-15 mb-10 wow animate__animated animate__fadeIn">Our Services</h2>
                <p class="font-md color-grey-900 wow animate__animated animate__fadeIn">We have been pioneering the
                    industry all over for 20 years, and delivering value<br class="d-none d-lg-block">products within
                    given timeframe, every single time.</p>
            </div>
        </div>
    </section>
    {{-- Services --}}
    <section class="section mt-0">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-md-6 mb-50 wow animate__animated animate__fadeIn">
                    <div class="cardService">
                        <div class="cardImage"> <a href="service-detail.html"><img
                                    src="{{ Vite::asset('resources/static/imgs/page/homepage3/service1.png') }}"
                                    alt="{{ config('app.name') }}"></a></div>
                        <div class="cardInfo"> <a href="service-detail.html"><img
                                    src="{{ Vite::asset('resources/static/imgs/page/homepage1/delivery.png') }}"
                                    alt="{{ config('app.name') }}">
                                <h6 class="color-brand-2">Sea Forwarding</h6>
                                <p class="font-xs color-grey-900">We offer specialized departments for continental
                                    transports.</p>
                            </a></div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 mb-50 wow animate__animated animate__fadeIn">
                    <div class="cardService">
                        <div class="cardImage"> <a href="service-detail.html"><img
                                    src="{{ Vite::asset('resources/static/imgs/page/homepage3/service2.png') }}"
                                    alt="{{ config('app.name') }}"></a></div>
                        <div class="cardInfo"> <a href="service-detail.html"><img
                                    src="{{ Vite::asset('resources/static/imgs/page/homepage3/plane.png') }}"
                                    alt="{{ config('app.name') }}">
                                <h6 class="color-brand-2">Air Freight Forwarding</h6>
                                <p class="font-xs color-grey-900">We offer specialized departments for continental
                                    transports.</p>
                            </a></div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 mb-50 wow animate__animated animate__fadeIn">
                    <div class="cardService">
                        <div class="cardImage"> <a href="service-detail.html"><img
                                    src="{{ Vite::asset('resources/static/imgs/page/homepage3/service3.png') }}"
                                    alt="{{ config('app.name') }}"></a></div>
                        <div class="cardInfo"> <a href="service-detail.html"><img
                                    src="{{ Vite::asset('resources/static/imgs/page/homepage1/delivery.png') }}"
                                    alt="{{ config('app.name') }}">
                                <h6 class="color-brand-2">Land Transportation</h6>
                                <p class="font-xs color-grey-900">We offer specialized departments for continental
                                    transports.</p>
                            </a></div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 mb-50 wow animate__animated animate__fadeIn">
                    <div class="cardService">
                        <div class="cardImage"> <a href="service-detail.html"><img
                                    src="{{ Vite::asset('resources/static/imgs/page/homepage3/service4.png') }}"
                                    alt="transp"></a></div>
                        <div class="cardInfo"> <a href="service-detail.html"><img
                                    src="{{ Vite::asset('resources/static/imgs/page/homepage1/train.png') }}"
                                    alt="transp">
                                <h6 class="color-brand-2">Railway Logistics</h6>
                                <p class="font-xs color-grey-900">We offer specialized departments for continental
                                    transports.</p>
                            </a></div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 mb-50 wow animate__animated animate__fadeIn">
                    <div class="cardService">
                        <div class="cardImage"> <a href="service-detail.html"><img
                                    src="{{ Vite::asset('resources/static/imgs/page/services/warehouse.png') }}"
                                    alt="{{ config('app.name') }}"></a></div>
                        <div class="cardInfo"> <a href="service-detail.html"><img
                                    src="{{ Vite::asset('resources/static/imgs/page/homepage4/pallet.png') }}"
                                    alt="{{ config('app.name') }}">
                                <h6 class="color-brand-2">Warehouse &amp; Distribution</h6>
                                <p class="font-xs color-grey-900">We offer specialized departments for continental
                                    transports.</p>
                            </a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>
