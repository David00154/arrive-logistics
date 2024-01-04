<x-guest-layout>
    <x-slot name="title">
        Home
    </x-slot>
    <livewire:base.hero-slider />
    {{-- Trusted By --}}
    <div class="section bg-2 pt-65 pb-35">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 mb-30 text-center text-lg-start wow animate__animated animate__fadeIn">
                    <p class="font-2xl-bold color-brand-2">We are<span class="color-brand-1"> trusted</span> by major
                        global
                        brands</p>
                </div>
                <div class="col-lg-9 mb-30">
                    <div class="box-swiper">
                        <div class="swiper-container swiper-group-6 pb-0">
                            <div class="swiper-wrapper wow animate__animated animate__fadeIn">
                                <div class="swiper-slide"><img
                                        src="{{ env('STATIC_ASSET_URL', '') }}/static/imgs/slider/logo/alea.png"
                                        alt="{{ config('app.name') }}">
                                </div>
                                <div class="swiper-slide"><img
                                        src="{{ env('STATIC_ASSET_URL', '') }}/static/imgs/slider/logo/land.png"
                                        alt="{{ config('app.name') }}">
                                </div>
                                <div class="swiper-slide"><img
                                        src="{{ env('STATIC_ASSET_URL', '') }}/static/imgs/slider/logo/logis.png"
                                        alt="{{ config('app.name') }}">
                                </div>
                                <div class="swiper-slide"><img
                                        src="{{ env('STATIC_ASSET_URL', '') }}/static/imgs/slider/logo/truck.png"
                                        alt="{{ config('app.name') }}">
                                </div>
                                <div class="swiper-slide"><img
                                        src="{{ env('STATIC_ASSET_URL', '') }}/static/imgs/slider/logo/saltos.png"
                                        alt="{{ config('app.name') }}">
                                </div>
                                <div class="swiper-slide"><img
                                        src="{{ env('STATIC_ASSET_URL', '') }}/static/imgs/slider/logo/creati.png"
                                        alt="{{ config('app.name') }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Who we are --}}
    <section class="section pt-60 pb-65">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-30">
                    <div class="box-image-info-7"><img
                            src="{{ env('STATIC_ASSET_URL', '') }}/static/imgs/page/homepage4/img-info-7.png"
                            alt="{{ config('app.name') }}">
                        <div class="quote shape-2"></div>
                    </div>
                </div>
                <div class="col-lg-6 mb-30">
                    <div class="box-info-7"><span class="btn btn-tag wow animate__animated animate__fadeIn">Who We
                            Are?</span>
                        <h2 class="color-grey-900 mb-30 mt-20 wow animate__animated animate__fadeIn">Globally Connected
                            by Large Network</h2>
                        <p class="font-md color-grey-900 mb-40 wow animate__animated animate__fadeIn">We strive to
                            become pioneers in the field, providing first quality and cost-effective service, and smart
                            solutions to the market. Our 30 years’ experience in the shipping, transport and logistics
                            industry is our strength, which support us to deliver our promises to our customers.</p>
                        <div class="row">
                            <div class="col-lg-6 mb-30">
                                <h6
                                    class="chart-title font-md-bold color-grey-900 wow animate__animated animate__fadeIn">
                                    Trachking Moving</h6>
                                <p class="font-xs color-grey-900 wow animate__animated animate__fadeIn">The latest
                                    design trends meet hand-crafted templates.</p>
                            </div>
                            <div class="col-lg-6 mb-30">
                                <h6
                                    class="support-title font-md-bold color-grey-900 wow animate__animated animate__fadeIn">
                                    24/7 Support</h6>
                                <p class="font-xs color-grey-900 wow animate__animated animate__fadeIn">The latest
                                    design trends meet hand-crafted templates.</p>
                            </div>
                        </div>
                        <div class="d-flex mt-20"><a class="mr-10 wow animate__animated animate__fadeIn"
                                href="index-4.html#"><img
                                    src="{{ env('STATIC_ASSET_URL', '') }}/static/imgs/template/appstore-btn.png"
                                    alt="{{ config('app.name') }}"></a><a class="wow animate__animated animate__fadeIn"
                                href="index-4.html#"><img
                                    src="{{ env('STATIC_ASSET_URL', '') }}/static/imgs/template/google-play-btn.png"
                                    alt="{{ config('app.name') }}"></a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Delivering results for industry leaders --}}
    <section class="section mt-85">
        <div class="container">
            <div class="text-center"><img class="mb-15"
                    src="{{ env('STATIC_ASSET_URL', '') }}/static/imgs/template/icons/favicon.svg"
                    alt="{{ config('app.name') }}">
                <p class="font-md color-grey-700 wow animate__animated animate__fadeIn">Delivering Results for Industry
                    Leaders</p>
                <h2 class="color-brand-2 mb-65 mt-15 wow animate__animated animate__fadeIn">We are proud of our
                    workforce<br class="d-none d-lg-block">and have worked hard.</h2>
            </div>
            <div class="row mt-50 align-items-center">
                <div class="col-xl-7 col-lg-6 mb-30">
                    <div class="box-images-pround">
                        <div class="box-images wow animate__animated animate__fadeIn"><img class="img-main"
                                src="{{ env('STATIC_ASSET_URL', '') }}/static/imgs/page/homepage1/img1.png"
                                alt="{{ config('app.name') }}">
                            <div class="image-2 shape-3"><img
                                    src="{{ env('STATIC_ASSET_URL', '') }}/static/imgs/page/homepage1/icon1.png"
                                    alt="{{ config('app.name') }}">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6 mb-30">
                    <div class="box-info-pround">
                        <h3 class="color-brand-2 mb-15 wow animate__animated animate__fadeIn">Fast shipping with the
                            most modern
                            technology</h3>
                        <p class="font-md color-grey-500 wow animate__animated animate__fadeIn">Over the years, we have
                            worked
                            together to expand our network of partners to deliver reliability and consistency. We’ve
                            also made
                            significant strides to tightly integrate technology with our processes, giving our clients
                            greater
                            visibility into every engagement.</p>
                        <div class="mt-30">
                            <ul class="list-ticks">
                                <li class="wow animate__animated animate__fadeIn">
                                    <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor"
                                        viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7"></path>
                                    </svg>Task tracking
                                </li>
                                <li class="wow animate__animated animate__fadeIn">
                                    <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor"
                                        viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7"></path>
                                    </svg>Create task dependencies
                                </li>
                                <li class="wow animate__animated animate__fadeIn">
                                    <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor"
                                        viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7"></path>
                                    </svg>Task visualization
                                </li>
                                <li class="wow animate__animated animate__fadeIn">
                                    <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor"
                                        viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7"></path>
                                    </svg>hare files, discuss
                                </li>
                                <li class="wow animate__animated animate__fadeIn">
                                    <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor"
                                        viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7"></path>
                                    </svg>Meet deadlines faster
                                </li>
                                <li class="wow animate__animated animate__fadeIn">
                                    <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor"
                                        viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7"></path>
                                    </svg>Track time spent on each project
                                </li>
                            </ul>
                        </div>
                        <div class="mt-30 text-start d-flex wow animate__animated animate__fadeIn"><a
                                class="hover-up mr-10" href="index.html#"><img
                                    src="{{ env('STATIC_ASSET_URL', '') }}/static/imgs/template/appstore-btn.png"
                                    alt="{{ config('app.name') }}"></a><a class="hover-up" href="index.html#"><img
                                    src="{{ env('STATIC_ASSET_URL', '') }}/static/imgs/template/google-play-btn.png"
                                    alt="{{ config('app.name') }}"></a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Get in touch --}}
    <section class="section mt-55 bg-1 position-relative pt-90 pb-90">
        <div class="container">
            <div class="row">
                <div class="col-lg-6"><span class="btn btn-tag wow animate__animated animate__fadeIn">Get in
                        touch</span>
                    <h3 class="color-grey-900 mb-20 mt-15 wow animate__animated animate__fadeIn">Proud to Deliver<br
                            class="d-none d-lg-block">Excellence Every Time</h3>
                    <p class="font-md color-grey-900 mb-40 wow animate__animated animate__fadeIn">Excepteur sint
                        occaecat
                        cupidatat non proident, sunt in culpa qui officia deserunt mollit laborum — semper quis lectus
                        nulla.
                        Interactively transform magnetic growth strategies whereas prospective "outside the box"
                        thinking.</p>
                    <div class="row">
                        <div class="col-lg-6 mb-30">
                            <h6 class="chart-title font-md-bold color-grey-900 wow animate__animated animate__fadeIn">
                                Boost your
                                sale</h6>
                            <p class="font-xs color-grey-900 wow animate__animated animate__fadeIn">The latest design
                                trends meet
                                hand-crafted templates.</p>
                        </div>
                        <div class="col-lg-6 mb-30">
                            <h6
                                class="feature-title font-md-bold color-grey-900 wow animate__animated animate__fadeIn">
                                Introducing
                                New Features</h6>
                            <p class="font-xs color-grey-900 wow animate__animated animate__fadeIn">The latest design
                                trends meet
                                hand-crafted templates.</p>
                        </div>
                    </div>
                    <div class="mt-20"><a class="btn btn-brand-2 mr-20 wow animate__animated animate__fadeIn"
                            href="{{ route('contact-us') }}">Contact Us</a><a
                            class="btn btn-link-medium wow animate__animated animate__fadeIn"
                            href="{{ route('about') }}">Learn
                            More
                            <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor"
                                viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M14 5l7 7m0 0l-7 7m7-7H3">
                                </path>
                            </svg></a></div>
                </div>
            </div>
        </div>
        <div class="box-image-touch"></div>
    </section>
    {{-- World's leading companies for over 80 years --}}
    <section class="section bg-leading-company pt-95">
        <div class="box-bg-leading"></div>
        <div class="container">
            <div class="text-center mb-45">
                <h2 class="color-brand-1 mb-15 wow animate__animated animate__fadeIn">World’s Leading Companies<br
                        class="d-none d-lg-block">For Over 80 Years.</h2>
                <p class="font-md color-white wow animate__animated animate__fadeIn">A big opportunity for your
                    business
                    growth. Delivering Results for Industry Leaders. We are<br class="d-none d-lg-block">proud of our
                    workfor
                    and have worked hard.</p>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 mb-30">
                    <div class="cardLeadingCompany">
                        <div class="cardImage"><span class="img wow animate__animated animate__fadeIn"><img
                                    src="{{ env('STATIC_ASSET_URL', '') }}/static/imgs/page/homepage1/handover.png"
                                    alt="{{ config('app.name') }}"></span></div>
                        <div class="cardInfo">
                            <h3 class="color-brand-1 wow animate__animated animate__fadeIn"><span>+</span><span
                                    class="count">38</span><span>0,000</span></h3>
                            <p class="font-lg color-white wow animate__animated animate__fadeIn">Parcels Shipped Safely
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 mb-30">
                    <div class="cardLeadingCompany">
                        <div class="cardImage"><span class="img"><img
                                    src="{{ env('STATIC_ASSET_URL', '') }}/static/imgs/page/homepage1/cities.png"
                                    alt="{{ config('app.name') }}"></span></div>
                        <div class="cardInfo">
                            <h3 class="color-brand-1 wow animate__animated animate__fadeIn"><span>+</span><span
                                    class="count">12</span><span>0,000</span></h3>
                            <p class="font-lg color-white wow animate__animated animate__fadeIn">Cities Served
                                Worldwide</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 mb-30">
                    <div class="cardLeadingCompany">
                        <div class="cardImage"><span class="img"><img
                                    src="{{ env('STATIC_ASSET_URL', '') }}/static/imgs/page/homepage1/client.png"
                                    alt="{{ config('app.name') }}"></span></div>
                        <div class="cardInfo">
                            <h3 class="color-brand-1 wow animate__animated animate__fadeIn"><span>+</span><span
                                    class="count">228</span><span>0</span></h3>
                            <p class="font-lg color-white wow animate__animated animate__fadeIn">Satisfied Clients</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 mb-30">
                    <div class="cardLeadingCompany">
                        <div class="cardImage"><span class="img"><img
                                    src="{{ env('STATIC_ASSET_URL', '') }}/static/imgs/page/homepage1/company.png"
                                    alt="{{ config('app.name') }}"></span></div>
                        <div class="cardInfo">
                            <h3 class="color-brand-1 wow animate__animated animate__fadeIn"><span>+</span><span
                                    class="count">12</span><span>000</span></h3>
                            <p class="font-lg color-white wow animate__animated animate__fadeIn">Company We Help</p>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="box-form-contact-leading">
                <div class="row">
                    <div class="col-lg-8">
                        <h2 class="title-favicon color-brand-2 mb-15">Calculate Shipping</h2>
                        <p class="font-md color-grey-700 mb-25">Please Fill All Inquiry To Get Your Total Price.</p>
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <select class="form-control">
                                        <option value="">Select Service</option>
                                        <option value="Service 1">Service 1</option>
                                        <option value="Service 2">Service 2</option>
                                        <option value="Service 3">Service 3</option>
                                        <option value="Service 4">Service 4</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <input class="form-control" type="text" placeholder="Dimensions">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <input class="form-control" type="text" placeholder="Weight">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <select class="form-control">
                                        <option value="">Picked up at</option>
                                        <option value="Service 1">Service 1</option>
                                        <option value="Service 2">Service 2</option>
                                        <option value="Service 3">Service 3</option>
                                        <option value="Service 4">Service 4</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <select class="form-control">
                                        <option value="">Delivery to</option>
                                        <option value="New York">New York</option>
                                        <option value="Washinton">Washinton</option>
                                        <option value="Dallas">Dallas</option>
                                        <option value="California">California</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <select class="form-control">
                                        <option value="">Commodities</option>
                                        <option value="Commodities 1">Commodities 1</option>
                                        <option value="Commodities 2">Commodities 2</option>
                                        <option value="Commodities 3">Commodities 3</option>
                                        <option value="Commodities 4">Commodities 4</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <select class="form-control">
                                        <option value="">Quantity of goods</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <textarea class="form-control" name="message" rows="5" placeholder="Message / Note"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group"><strong class="font-sm-bold color-grey-900">Extra
                                        Services</strong>
                                    <div class="row mt-10 box-cb-form">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <input class="cd-form" type="checkbox">Express Delivery (+$40)
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <input class="cd-form" type="checkbox">Add Insurance (+$20)
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <input class="cd-form" type="checkbox">Packaging (+$15)
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12"><a class="btn btn-brand-1-big mr-25" href="index.html#">
                                    <svg fill="none" stroke="currentColor" stroke-width="1.5" viewbox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15.75 15.75V18m-7.5-6.75h.008v.008H8.25v-.008zm0 2.25h.008v.008H8.25V13.5zm0 2.25h.008v.008H8.25v-.008zm0 2.25h.008v.008H8.25V18zm2.498-6.75h.007v.008h-.007v-.008zm0 2.25h.007v.008h-.007V13.5zm0 2.25h.007v.008h-.007v-.008zm0 2.25h.007v.008h-.007V18zm2.504-6.75h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V13.5zm0 2.25h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V18zm2.498-6.75h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V13.5zM8.25 6h7.5v2.25h-7.5V6zM12 2.25c-1.892 0-3.758.11-5.593.322C5.307 2.7 4.5 3.65 4.5 4.757V19.5a2.25 2.25 0 002.25 2.25h10.5a2.25 2.25 0 002.25-2.25V4.757c0-1.108-.806-2.057-1.907-2.185A48.507 48.507 0 0012 2.25z">
                                        </path>
                                    </svg>Cost Calculation</a><a class="btn btn-link-medium"
                                    href="contact.html">Contact
                                    Us
                                    <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor"
                                        viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                    </svg></a></div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="box-image-contact"><img
                                src="{{env("STATIC_ASSET_URL", "")}}/static/imgs/page/homepage1/img-contact.png"
                                alt="{{ config('app.name') }}"></div>
                    </div>
                </div>
            </div> --}}
            <livewire:pages.get-quote>
        </div>
    </section>
    {{-- Get a quote CTA --}}
    <section class="section pt-70 pb-70 bg-get-quote">
        <div class="container">
            <div class="box-get-quote">
                <div class="get-quote-left">
                    <p class="font-3xl color-white mb-10 wow animate__animated animate__fadeIn">Have any ideas in your
                        mind?</p>
                    <h2 class="color-brand-1 wow animate__animated animate__fadeIn">Create your next Project with Us
                    </h2>
                </div>
                <div class="get-quote-right"><a class="btn btn-get-quote wow animate__animated animate__fadeIn"
                        href="request-a-quote.html">
                        <svg class="mr-10" fill="none" stroke="currentColor" stroke-width="1.5"
                            viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z">
                            </path>
                        </svg>GET A QUOTE</a></div>
            </div>
        </div>
    </section>
    {{-- Testimonials --}}
    <section class="section pt-60 pb-65 mt-50">
        <div class="container">
            <div class="bg-testimonial-3">
                <div class="row align-items-start">
                    <div class="col-xl-4 col-lg-12 mb-30">
                        <h2 class="title-favicon-2 color-white mb-10 wow animate__animated animate__fadeIn">
                            Testimonials</h2>
                        <p class="font-md color-white mb-30 wow animate__animated animate__fadeIn">Hear from our users
                            who have
                            saved thousands on their Startup and SaaS solution spend. Quo nostrum praesentium At ratione
                            iusto qui
                            labore nesciunt ad architecto dolor est odio molestias non molestiae incidunt in praesentium
                            odit.</p>
                        <div class="mt-20"><a class="btn btn-brand-1-big mr-20 wow animate__animated animate__fadeIn"
                                href="contact.html">Contact Us</a><a
                                class="btn btn-link-medium btn-link-white wow animate__animated animate__fadeIn"
                                href="index-3.html#">Learn More
                                <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor"
                                    viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M14 5l7 7m0 0l-7 7m7-7H3">
                                    </path>
                                </svg></a></div>
                    </div>
                    <div class="col-xl-8 col-lg-12 mb-30">
                        <div class="row align-items-start">
                            <div class="col-lg-6 position-relative wow animate__animated animate__fadeIn">
                                <div class="box-testimonial-3-left">
                                    <div class="mb-30">
                                        <div class="card-testimonial-grid card-testimonial-3">
                                            <div class="box-author mb-25"><a href="index-3.html#"><img
                                                        src="{{ env('STATIC_ASSET_URL', '') }}/static/imgs/page/homepage1/author.png"
                                                        alt="{{ config('app.name') }}"></a>
                                                <div class="author-info"><a href="index-3.html#"><span
                                                            class="font-xl-bold color-brand-2 author-name">Guy
                                                            Hawkins</span></a><span
                                                        class="font-sm color-grey-500 department">Bank of
                                                        America</span></div>
                                            </div>
                                            <p class="font-sm color-grey-700">Access the same project through five
                                                different dynamic views:
                                                a kanban board, Gantt chart, spreadsheet, calendar or simple task list.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="mb-30">
                                        <div class="card-testimonial-grid card-testimonial-3">
                                            <div class="box-author mb-25"><a href="index-3.html#"><img
                                                        src="{{ env('STATIC_ASSET_URL', '') }}/static/imgs/page/homepage1/author.png"
                                                        alt="{{ config('app.name') }}"></a>
                                                <div class="author-info"><a href="index-3.html#"><span
                                                            class="font-xl-bold color-brand-2 author-name">Guy
                                                            Hawkins</span></a><span
                                                        class="font-sm color-grey-500 department">Bank of
                                                        America</span></div>
                                            </div>
                                            <p class="font-sm color-grey-700">Access the same project through five
                                                different dynamic views:
                                                a kanban board, Gantt chart, spreadsheet, calendar or simple task list.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 position-relative wow animate__animated animate__fadeIn">
                                <div class="box-testimonial-3-right">
                                    <div class="mb-30">
                                        <div class="card-testimonial-grid card-testimonial-3">
                                            <div class="box-author mb-25"><a href="index-3.html#"><img
                                                        src="{{ env('STATIC_ASSET_URL', '') }}/static/imgs/page/homepage1/author.png"
                                                        alt="{{ config('app.name') }}"></a>
                                                <div class="author-info"><a href="index-3.html#"><span
                                                            class="font-xl-bold color-brand-2 author-name">Guy
                                                            Hawkins</span></a><span
                                                        class="font-sm color-grey-500 department">Bank of
                                                        America</span></div>
                                            </div>
                                            <p class="font-sm color-grey-700">Access the same project through five
                                                different dynamic views:
                                                a kanban board, Gantt chart, spreadsheet, calendar or simple task list.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="mb-30">
                                        <div class="card-testimonial-grid card-testimonial-3">
                                            <div class="box-author mb-25"><a href="index-3.html#"><img
                                                        src="{{ env('STATIC_ASSET_URL', '') }}/static/imgs/page/homepage1/author.png"
                                                        alt="{{ config('app.name') }}"></a>
                                                <div class="author-info"><a href="index-3.html#"><span
                                                            class="font-xl-bold color-brand-2 author-name">Guy
                                                            Hawkins</span></a><span
                                                        class="font-sm color-grey-500 department">Bank of
                                                        America</span></div>
                                            </div>
                                            <p class="font-sm color-grey-700">Access the same project through five
                                                different dynamic views:
                                                a kanban board, Gantt chart, spreadsheet, calendar or simple task list.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section pt-80 mb-70 bg-faqs">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="box-faqs-left">
                        <h2 class="title-favicon mb-20 wow animate__animated animate__fadeIn">FAQs</h2>
                        <p class="font-md color-grey-700 mb-50 wow animate__animated animate__fadeIn">Feeling
                            inquisitive? Have a
                            read through some of our FAQs or contact our supporters for help</p>
                        <div class="box-gallery-faqs">
                            <div class="image-top"><img
                                    src="{{ env('STATIC_ASSET_URL', '') }}/static/imgs/page/homepage1/img-faq1.png"
                                    alt="{{ config('app.name') }}">
                            </div>
                            <div class="image-bottom">
                                <div class="image-faq-1"><img
                                        src="{{ env('STATIC_ASSET_URL', '') }}/static/imgs/page/homepage1/img-faq2.png"
                                        alt="{{ config('app.name') }}"></div>
                                <div class="image-faq-2"><img
                                        src="{{ env('STATIC_ASSET_URL', '') }}/static/imgs/page/homepage1/img-faq3.png"
                                        alt="{{ config('app.name') }}"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="box-accordion">
                        <div class="accordion" id="accordionFAQ">
                            <div class="accordion-item wow animate__animated animate__fadeIn">
                                <h5 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button text-heading-5" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                        aria-controls="collapseTwo">How can I return
                                        an item purchased online?</button>
                                </h5>
                                <div class="accordion-collapse collapse show" id="collapseTwo"
                                    aria-labelledby="headingTwo" data-bs-parent="#accordionFAQ">
                                    <div class="accordion-body">Contrary to popular belief, Lorem Ipsum is not simply
                                        random text. It
                                        has roots in a piece of classical Latin literature Id pro doctus mediocrem
                                        erroribus, diam nostro
                                        sed cu. Ea pri graeco tritani partiendo. Omittantur No tale choro fastidii his,
                                        pri cu epicuri
                                        perpetua. Enim dictas omittantur et duo, vocent lucilius quaestio mea ex. Ex
                                        illum officiis id.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item wow animate__animated animate__fadeIn">
                                <h5 class="accordion-header" id="headingThree">
                                    <button class="accordion-button text-heading-5 collapsed text-heading-5 type="
                                        data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                        aria-expanded="false" aria-controls="collapseThree">Can I cancel or change my
                                        order?</button>
                                </h5>
                                <div class="accordion-collapse collapse" id="collapseThree"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionFAQ">
                                    <div class="accordion-body">Aut architecto consequatur sit error nemo sed dolorum
                                        suscipit 33
                                        impedit dignissimos ut velit blanditiis qui quos magni id dolore dignissimos.
                                        Sit ipsa consectetur
                                        et sint harum et dicta consequuntur id cupiditate perferendis qui quisquam enim.
                                        Vel autem illo id
                                        error excepturi est dolorum voluptas qui maxime consequatur et culpa quibusdam
                                        in iusto vero sit
                                        amet Quis.</div>
                                </div>
                            </div>
                            <div class="accordion-item wow animate__animated animate__fadeIn">
                                <h5 class="accordion-header" id="headingFour">
                                    <button class="accordion-button text-heading-5 collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                        aria-expanded="false" aria-controls="collapseFour">I have
                                        promotional or discount code?</button>
                                </h5>
                                <div class="accordion-collapse collapse" id="collapseFour"
                                    aria-labelledby="headingFour" data-bs-parent="#accordionFAQ">
                                    <div class="accordion-body">Eos nostrum aperiam ab enim quas sit voluptate fuga. Ea
                                        aperiam voluptas
                                        a accusantium similique 33 alias sapiente non vitae repellat et dolorum omnis
                                        eos beatae
                                        praesentium id sunt corporis. Aut nisi blanditiis aut corrupti quae et
                                        accusantium doloribus sed
                                        tempore libero a dolorum beatae.</div>
                                </div>
                            </div>
                            <div class="accordion-item wow animate__animated animate__fadeIn">
                                <h5 class="accordion-header" id="headingFive">
                                    <button class="accordion-button text-heading-5 collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseFive"
                                        aria-expanded="false" aria-controls="collapseFive">What are the
                                        delivery types you use?</button>
                                </h5>
                                <div class="accordion-collapse collapse" id="collapseFive"
                                    aria-labelledby="headingFive" data-bs-parent="#accordionFAQ">
                                    <div class="accordion-body">Et beatae quae ex minima porro aut nihil quia sed optio
                                        dignissimos et
                                        voluptates deleniti et nesciunt veritatis et suscipit quod. Est sint voluptate
                                        id unde nesciunt
                                        non deleniti debitis. Ut dolores tempore vel placeat nemo quo enim reprehenderit
                                        eos corrupti
                                        maiores et minima quaerat. Quo sequi eaque eum similique sint et autem
                                        perspiciatis cum Quis
                                        exercitationem quo quos excepturi non ducimus ducimus eos natus velit.</div>
                                </div>
                            </div>
                            <div class="accordion-item wow animate__animated animate__fadeIn">
                                <h5 class="accordion-header" id="headingSix">
                                    <button class="accordion-button text-heading-5 collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false"
                                        aria-controls="collapseSix">How can I pay for
                                        my purchases?</button>
                                </h5>
                                <div class="accordion-collapse collapse" id="collapseSix"
                                    aria-labelledby="headingSix" data-bs-parent="#accordionFAQ">
                                    <div class="accordion-body">Qui quas itaque ut molestias culpa vel culpa voluptas
                                        eos fugit sint ex
                                        veritatis totam cum unde maxime! Qui eius fugiat qui veritatis cumque a nesciunt
                                        nemo. Id numquam
                                        rerum est molestiae quia ut nisi architecto a officiis itaque eum quod repellat
                                        ut dolorem dolorem
                                        aut ipsam ipsa.</div>
                                </div>
                            </div>
                        </div>
                        <div class="line-border mt-50 mb-50"></div>
                        <h3 class="color-brand-2 wow animate__animated animate__fadeIn">Nead more help?</h3>
                        <div class="mt-20"><a class="btn btn-brand-1-big mr-20 wow animate__animated animate__fadeIn"
                                href="contact.html">Contact Us</a><a
                                class="btn btn-link-medium wow animate__animated animate__fadeIn"
                                href="index-3.html#">Learn More
                                <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor"
                                    viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M14 5l7 7m0 0l-7 7m7-7H3">
                                    </path>
                                </svg></a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>
