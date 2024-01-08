<?php

use Livewire\Volt\Component;
use Livewire\Attributes\{Layout, Title};

new #[Layout('layouts.guest')] #[Title('Track Parcel')] class extends Component {}; ?>


<div>
    <section class="section d-block">
        <div class="container position-relative">
            <div class="banner-trackyourparcel"></div>
            <div class="box-info-trackyourparcel">
                <h2 class="color-brand-2 mb-25 wow animate__animated animate__fadeIn">Package tracking is easy<br
                        class="d-none d-lg-block">with order number</h2>
                <p class="color-grey-900 font-md wow animate__animated animate__fadeIn">Track packages from China, US
                    Post,
                    Canada Post, Royal Mail, Deutsche Post,<br class="d-none d-lg-block">Aliexpress, UPS, Shein, FedEx,
                    Pitney Bowes, eBay, Amazon</p>
                <div class="form-trackparcel wow animate__animated animate__fadeIn">
                    <form action="trackyourparcel.html#">
                        <div class="form-group">
                            <input class="form-control" type="text" placeholder="Your package tracking number">
                            <input class="btn btn-brand-1 btn-track" type="submit" value="Track Package">
                        </div>
                    </form>
                </div>
                <div class="mt-40 d-flex justify-content-center"><a
                        class="hover-up mr-10 wow animate__animated animate__fadeIn" href="trackyourparcel.html#"><img
                            src="{{ env('STATIC_ASSET_URL', '') }}/static/imgs/template/appstore-btn.png"
                            alt="{{ config('app.name') }}"></a><a class="hover-up wow animate__animated animate__fadeIn"
                        href="trackyourparcel.html#"><img
                            src="{{ env('STATIC_ASSET_URL', '') }}/static/imgs/template/google-play-btn.png"
                            alt="{{ config('app.name') }}"></a></div>
            </div>
        </div>
    </section>
    <div class="mt-20"></div>
</div>
