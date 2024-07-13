<x-guest-layout>
    <x-slot:title>
        Track Parcel
    </x-slot:title>
    <div>
        <section class="section d-block">
            <div class="container position-relative">
                <div class="banner-trackyourparcel"></div>
                <div class="box-info-trackyourparcel">
                    {{-- <h2 class="color-brand-2 mb-25 wow animate__animated animate__fadeIn">Package tracking is easy<br
                            class="d-none d-lg-block">with order number</h2> --}}
                    {{-- <p class="color-grey-900 font-md wow animate__animated animate__fadeIn">Track packages from China, US
                        Post,
                        Canada Post, Royal Mail, Deutsche Post,<br class="d-none d-lg-block">Aliexpress, UPS, Shein,
                        FedEx,
                        Pitney Bowes, eBay, Amazon</p> --}}
                    <div class="form-trackparcel wow animate__animated animate__fadeIn">
                        <form action="{{ route('track-item') }}">
                            <div class="form-group">
                                <input name='q' class="form-control" type="text"
                                    placeholder="Your package tracking number">
                                <button class="btn btn-brand-1 btn-track" type="submit">Track Package <div wire:loading
                                        class="spinner-border spinner-border-sm ml-5" role="status">
                                        {{-- <span class="sr-only">Loading...</span> --}}
                                    </div></button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-lg-8">
                        @if (session('error'))
                            <div class="alert alert-danger alert-dismissible fade show rounded-0 "
                                style="font-weight: 400" role="alert">
                                <strong>Error!</strong> {{ session('error') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                    {{-- <span aria-hidden="true">&times;</span> --}}
                                </button>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </section>
        {{-- <div class="mt-20"></div> --}}

        @isset($statuses)
            <section class="section d-block">
                <div class="container">


                    <div class="row track-info">
                        <div class="col-lg-6">
                            {{--  --}}
                            <div class="d-flex header">
                                <div class="header-1">
                                    <h1>#{{ $tracking_id }}</h1>
                                </div>
                                <div class="header-2">
                                    @if ($is_status_failed)
                                        <span class="badge text-green bg-danger">Failed</span>
                                    @else
                                        <span class="badge text-green bg-success">In Progress</span>
                                    @endif
                                </div>
                            </div>
                            {{--  --}}
                            <div class="customer-id" style="" x-data="{}">
                                <p class="text-sm d-inline-block text-truncate" style="max-width: 200px;">Tracking ID:
                                    <a @click.prevent="navigator.clipboard.writeText('{{ $customer_id }}').then(() => {})"
                                        href="#" style="color:  #fd7e14;"> {{ $customer_id }}</a>
                                </p>
                            </div>
                            {{--  --}}
                            <hr>
                            {{--  --}}
                            <div class="row item-row-details mt-20">
                                {{-- <div class="row"> --}}
                                <div class="col-lg mb-20">
                                    <p class="text-md hd color-grey-300">Time</p>
                                    <p class="tl">
                                        {{ $delivery_date == null ? '' : $delivery_date->format('d F, Y H:i') }}</p>
                                </div>
                                <div class="col-lg mb-20">
                                    <p class="text-md color-grey-300">Email</p>
                                    <p class="tl">{{ $customer_email }}</p>
                                </div>
                                {{-- </div> --}}

                                <div class="col-12 mb-20">
                                    <p class="text-md color-grey-300">Delivery Address</p>
                                    <p class="tl">{{ $address }}</p>
                                </div>
                                <div class="col-12 mb-20">
                                    <p class="text-md color-grey-300">Courier Solution</p>
                                    <p class="tl">{{ $courier_solution }}</p>
                                </div>
                                <div class="col-12">
                                    <p class="text-md color-grey-300">Items</p>
                                    <p class="tl">{{ $package_names }}</p>
                                </div>
                                <div class="col-12"></div>
                            </div>
                            {{--  --}}
                            <hr>
                            {{-- Status --}}
                            <div class="row item-row-status">
                                {{--  --}}
                                <div class="col-12 mb-20">
                                    <div class="header">

                                        <h2>Status</h2>
                                    </div>
                                </div>
                                {{-- Statuses --}}
                                <div class="col-12">
                                    <div class="tracking-info">
                                        <div class="tracking-info-detail d-flex" style="gap: 0.4rem;">
                                            <div class="tracking-info-cirle">
                                                {{-- Circle --}}
                                                {{-- <div class="tracking-info-circle-main"></div> --}}
                                                {{-- Bar --}}
                                                <div class="tracking-info-bar"
                                                    style="height: 27px; align-self: center; background-color: #abaeb1;">
                                                </div>
                                            </div>
                                            <div class="flex flex-col">
                                                <div class="tracking-info-detail-text"
                                                    style="color: #034460; font-weight: 800; font-size: 16px;">Moving
                                                    Through
                                                    Network</div>
                                            </div>
                                        </div>
                                        {{--  --}}
                                        @foreach ($statuses as $status)
                                            <div class="tracking-info-detail">
                                                <div class="tracking-info-cirle">
                                                    {{-- Circle --}}
                                                    <div class="tracking-info-circle-main"></div>
                                                    {{-- Bar --}}
                                                    <div class="tracking-info-bar"></div>
                                                </div>
                                                <div class="d-flex" style="flex-direction: column">
                                                    <div class="tracking-info-detail-text">{{ $status['status'] }}</div>
                                                    <div style="margin-top: 4px; color: #878a99;text-transform: uppercase;">
                                                        {{ $status['location'] }}</div>
                                                    <div style="margin-top: 3px; color: #878a99;">
                                                        {{ $status['created_at']->format('d F, Y H:i') }}
                                                    </div>
                                                </div>
                                            </div>
                                            {{--  --}}
                                        @endforeach
                                        <div class="tracking-info-detail">
                                            <div class="tracking-info-cirle">
                                                {{-- Circle --}}
                                                <div class="tracking-info-circle-main"></div>
                                            </div>
                                        </div>
                                        {{--  --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="section d-block">
                                <div class="box-map-contact wow animate__animated animate__fadeIn">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2643.6895046810805!2d-122.52642526124438!3d38.00014098339506!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8085976736097a2f%3A0xbe014d20e6e22654!2sSan%20Rafael%2C%20California%2C%20Hoa%20K%E1%BB%B3!5e0!3m2!1svi!2s!4v1678975266976!5m2!1svi!2s"
                                        height="670" style="border:0;" allowfullscreen="" loading="lazy"
                                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endisset
        <div class="mt-20"></div>
    </div>

</x-guest-layout>
