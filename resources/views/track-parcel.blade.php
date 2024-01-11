<x-guest-layout>
    <x-slot:title>
        Track Parcel
    </x-slot:title>
    <div>
        <section class="section d-block">
            <div class="container position-relative">
                <div class="banner-trackyourparcel"></div>
                <div class="box-info-trackyourparcel">
                    <h2 class="color-brand-2 mb-25 wow animate__animated animate__fadeIn">Package tracking is easy<br
                            class="d-none d-lg-block">with order number</h2>
                    <p class="color-grey-900 font-md wow animate__animated animate__fadeIn">Track packages from China, US
                        Post,
                        Canada Post, Royal Mail, Deutsche Post,<br class="d-none d-lg-block">Aliexpress, UPS, Shein,
                        FedEx,
                        Pitney Bowes, eBay, Amazon</p>
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
                    <div class="tracking-info">
                        <div class="tracking-info-detail">
                            <div class="tracking-info-cirle">
                                {{-- Circle --}}
                                {{-- <div class="tracking-info-circle-main"></div> --}}
                                {{-- Bar --}}
                                <div class="tracking-info-bar"
                                    style="height: 27px; align-self: center; background-color: #abaeb1;"></div>
                            </div>
                            <div class="flex flex-col">
                                <div class="tracking-info-detail-text"
                                    style="color: #034460; font-weight: 800; font-size: 16px;">Moving Through
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
                                <div class="flex flex-col">
                                    <div class="tracking-info-detail-text">{{ $status['status'] }}</div>
                                    <div style="margin-top: 4px; color: #878a99;text-transform: uppercase;">
                                        {{ $status['location'] }}</div>
                                    <div style="margin-top: 3px; color: #878a99;">{{ $status['created_at'] }}
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
            </section>
        @endisset
        <div class="mt-20"></div>
    </div>

</x-guest-layout>
