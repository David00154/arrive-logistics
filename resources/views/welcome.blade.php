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
                        <p class="font-md color-grey-900 mb-40 wow animate__animated animate__fadeIn">At the heart of
                            our identity is a commitment to being globally connected by a large logistics network. We
                            seamlessly link businesses across borders, providing reliable and efficient solutions that
                            transcend geographical boundaries. Explore a world of interconnected logistics with us.</p>
                        <div class="row">
                            <div class="col-lg-6 mb-30">
                                <h6
                                    class="chart-title font-md-bold color-grey-900 wow animate__animated animate__fadeIn">
                                    Trachking Moving</h6>
                                <p class="font-xs color-grey-900 wow animate__animated animate__fadeIn">Experience
                                    seamless real-time shipment monitoring, a cornerstone of our global logistics
                                    excellence</p>
                            </div>
                            <div class="col-lg-6 mb-30">
                                <h6
                                    class="support-title font-md-bold color-grey-900 wow animate__animated animate__fadeIn">
                                    24/7 Support</h6>
                                <p class="font-xs color-grey-900 wow animate__animated animate__fadeIn">Our commitment
                                    to uninterrupted assistance ensures your logistics success, globally connected.</p>
                            </div>
                        </div>
                        <div class="d-flex mt-20"><a class="mr-10 wow animate__animated animate__fadeIn"
                                href="#/"><img
                                    src="{{ env('STATIC_ASSET_URL', '') }}/static/imgs/template/appstore-btn.png"
                                    alt="{{ config('app.name') }}"></a><a class="wow animate__animated animate__fadeIn"
                                href="#/"><img
                                    src="{{ env('STATIC_ASSET_URL', '') }}/static/imgs/template/google-play-btn.png"
                                    alt="{{ config('app.name') }}"></a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- How it works --}}
    <section class="section">
        <div class="container">
            <div class="box-how-it-work-2 bg-brand-2 bg-how-it-work-2">
                <div class="text-center">
                    <h2 class="color-white wow animate__animated animate__fadeIn">How It Works</h2>
                </div>
                <div class="box-list-how-it-work">
                    <ul class="list-how-works">
                        <li>
                            <div class="image-how"><span class="img wow animate__animated animate__fadeIn"><img
                                        src="{{ env('STATIC_ASSET_URL', '') }}/static/imgs/page/homepage1/order.png"
                                        alt="{{ config('app.name') }}"></span></div>
                            <div class="info-how">
                                <h5 class="color-white wow animate__animated animate__fadeIn">Customer places order</h5>
                                <p class="font-md color-white wow animate__animated animate__fadeIn">Inspection and
                                    quality check of goods</p>
                            </div>
                        </li>
                        <li>
                            <div class="image-how"><span class="img"><img
                                        src="{{ env('STATIC_ASSET_URL', '') }}/static/imgs/page/homepage1/payment.png"
                                        alt="{{ config('app.name') }}"></span></div>
                            <div class="info-how">
                                <h5 class="color-white wow animate__animated animate__fadeIn">Payment successful</h5>
                                <p class="font-md color-white wow animate__animated animate__fadeIn">Payoneer, Paypal,
                                    or Visa master card</p>
                            </div>
                        </li>
                        <li class="dashed-2">
                            <div class="image-how"><span class="img"><img
                                        src="{{ env('STATIC_ASSET_URL', '') }}/static/imgs/page/homepage1/warehouse.png"
                                        alt="{{ config('app.name') }}"></span></div>
                            <div class="info-how">
                                <h5 class="color-white wow animate__animated animate__fadeIn">Warehouse receives order
                                </h5>
                                <p class="font-md color-white wow animate__animated animate__fadeIn">Check the accuracy
                                    of the goods.</p>
                            </div>
                        </li>
                        <li>
                            <div class="image-how"><span class="img"><img
                                        src="{{ env('STATIC_ASSET_URL', '') }}/static/imgs/page/homepage1/picked.png"
                                        alt="{{ config('app.name') }}"></span></div>
                            <div class="info-how">
                                <h5 class="color-white wow animate__animated animate__fadeIn">Item picked, packed &
                                    shipped</h5>
                                <p class="font-md color-white wow animate__animated animate__fadeIn">Ship the goods to a
                                    local carrier</p>
                            </div>
                        </li>
                        <li>
                            <div class="image-how"><span class="img"><img
                                        src="{{ env('STATIC_ASSET_URL', '') }}/static/imgs/page/homepage1/delivery.png"
                                        alt="{{ config('app.name') }}"></span></div>
                            <div class="info-how">
                                <h5 class="color-white wow animate__animated animate__fadeIn">Delivered & Measure
                                    success</h5>
                                <p class="font-md color-white wow animate__animated animate__fadeIn">Update order
                                    status on the system</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="box-button-play-2"><a class="btn btn-play popup-youtube hover-up"
                        href="https://www.youtube.com/watch?v=kCGf5uNE13I"><img
                            src="{{ env('STATIC_ASSET_URL', '') }}/static/imgs/page/homepage4/play-icon.png"
                            alt="{{ config('app.name') }}"><span
                            class="color-brand-2 wow animate__animated animate__fadeIn">How it work ?<br>Watch video
                            tour</span></a></div>
            </div>
        </div>
    </section>
    {{-- Delivering results for industry leaders --}}
    <section class="section mt-85">
        <div class="container">
            <div class="text-center">
                <img class="mb-15" src="{{ env('STATIC_ASSET_URL', '') }}/static/imgs/template/icons/favicon.svg"
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
                        <div class="mt-30 text-start d-flex wow animate__animated animate__fadeIn">
                            <a class="hover-up mr-10" href="#/">
                                <img src="{{ env('STATIC_ASSET_URL', '') }}/static/imgs/template/appstore-btn.png"
                                    alt="{{ config('app.name') }}">
                            </a>
                            <a class="hover-up" href="#/">
                                <img src="{{ env('STATIC_ASSET_URL', '') }}/static/imgs/template/google-play-btn.png"
                                    alt="{{ config('app.name') }}">
                            </a>
                        </div>
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
                    <p class="font-md color-grey-900 mb-40 wow animate__animated animate__fadeIn">Rooted in a profound
                        commitment, our ethos revolves around consistently delivering unparalleled logistics service.
                        With unwavering pride, we strive to exceed expectations, ensuring a seamless and reliable
                        experience for our clients on every occasion.</p>
                    <div class="row">
                        <div class="col-lg-6 mb-30">
                            <h6 class="chart-title font-md-bold color-grey-900 wow animate__animated animate__fadeIn">
                                Boost your
                                sale</h6>
                            <p class="font-xs color-grey-900 wow animate__animated animate__fadeIn">Maximize revenue
                                and boost success with our tailored strategies and proven methodologies.</p>
                        </div>
                        <div class="col-lg-6 mb-30">
                            <h6
                                class="feature-title font-md-bold color-grey-900 wow animate__animated animate__fadeIn">
                                Introducing
                                New Features</h6>
                            <p class="font-xs color-grey-900 wow animate__animated animate__fadeIn">Discover innovation
                                through enhanced features for a cutting-edge experience. Stay ahead with our updates.
                            </p>
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
    {{-- Why choose us --}}
    <section class="section pt-110 pb-110">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-xl-6 col-lg-12 col-md-6">
                            <div class="item-reason wow animate__animated animate__fadeIn">
                                <div class="card-offer cardServiceStyle3 hover-up">
                                    <div class="card-image"><img
                                            src="{{ env('STATIC_ASSET_URL', '') }}/static/imgs/page/homepage4/container.png"
                                            alt="{{ config('app.name') }}"></div>
                                    <div class="card-info">
                                        <h5 class="color-brand-2 mb-15">Shipping Options</h5>
                                        <p class="font-sm color-grey-900">Choose from a range of tailored solutions to
                                            match your unique shipping requirements, ensuring flexibility and precision.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="item-reason wow animate__animated animate__fadeIn">
                                <div class="card-offer cardServiceStyle3 hover-up">
                                    <div class="card-image"><img
                                            src="{{ env('STATIC_ASSET_URL', '') }}/static/imgs/page/homepage4/24-hours.png"
                                            alt="{{ config('app.name') }}"></div>
                                    <div class="card-info">
                                        <h5 class="color-brand-2 mb-15">Customer Service</h5>
                                        <p class="font-sm color-grey-900">Our dedicated team is committed to
                                            exceptional support. Your satisfaction is our priority; we aim to exceed
                                            expectations at every interaction.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-12 col-md-6">
                            <div class="item-reason mt-30 wow animate__animated animate__fadeIn">
                                <div class="card-offer cardServiceStyle3 hover-up">
                                    <div class="card-image"><img
                                            src="{{ env('STATIC_ASSET_URL', '') }}/static/imgs/page/homepage4/stopwatch.png"
                                            alt="{{ config('app.name') }}"></div>
                                    <div class="card-info">
                                        <h5 class="color-brand-2 mb-15">Timely Deliveries</h5>
                                        <p class="font-sm color-grey-900">We ensure punctual shipments every time
                                            through our reliable and efficient delivery network.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item-reason wow animate__animated animate__fadeIn">
                                <div class="card-offer cardServiceStyle3 hover-up">
                                    <div class="card-image"><img
                                            src="{{ env('STATIC_ASSET_URL', '') }}/static/imgs/page/homepage4/pallet.png"
                                            alt="{{ config('app.name') }}"></div>
                                    <div class="card-info">
                                        <h5 class="color-brand-2 mb-15">Tracking Systems</h5>
                                        <p class="font-sm color-grey-900">Enjoy peace of mind with our real-time
                                            tracking, ensuring transparency and confidence. Choose a partner that
                                            prioritizes your unique needs – choose us.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="box-info-pround box-whychooseus-3">
                        <span class="btn btn-tag color-grey-900 wow animate__animated animate__fadeIn">Our
                            Features</span>
                        <h2 class="color-brand-2 mb-15 mt-20 wow animate__animated animate__fadeIn">Why choose us</h2>
                        <p class="font-md color-grey-900">Elevate your experience with our unmatched commitment to
                            excellence. From seamless logistics solutions to personalized service, we prioritize your
                            success. Trust in our reliability, innovation, and customer-centric approach for a
                            partnership that exceeds expectations. Choose confidence, choose us.</p>
                        <div class="mt-30">
                            <ul class="list-ticks">
                                <li class="wow animate__animated animate__fadeIn">
                                    <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor"
                                        viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7"></path>
                                    </svg>Reliable and Timely Deliveries
                                </li>
                                <li class="wow animate__animated animate__fadeIn">
                                    <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor"
                                        viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7"></path>
                                    </svg>Advanced Tracking Systems
                                </li>
                                <li class="wow animate__animated animate__fadeIn">
                                    <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor"
                                        viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7"></path>
                                    </svg>Cost-Effective Shipping Options
                                </li>
                                <li class="wow animate__animated animate__fadeIn">
                                    <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor"
                                        viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7"></path>
                                    </svg>Commitment to Sustainability
                                </li>
                                <li class="wow animate__animated animate__fadeIn">
                                    <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor"
                                        viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7"></path>
                                    </svg>Exceptional Customer Service
                                </li>
                                <li class="wow animate__animated animate__fadeIn">
                                    <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor"
                                        viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7"></path>
                                    </svg>International Shipping Expertise
                                </li>
                                <li class="wow animate__animated animate__fadeIn">
                                    <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor"
                                        viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7"></path>
                                    </svg>Flexibility and Customization
                                </li>
                                <li class="wow animate__animated animate__fadeIn">
                                    <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor"
                                        viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7"></path>
                                    </svg>Insurance and Liability Coverage
                                </li>
                            </ul>
                        </div>
                        <div class="mt-30 text-start">
                            <a class="btn btn-brand-2 mr-20 wow animate__animated animate__fadeIn"
                                href="{{ route('contact-us') }}">Contact Us</a>
                            <a class="btn btn-link-medium wow animate__animated animate__fadeIn"
                                href="{{ route('about') }}">Learn More
                                <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor"
                                    viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- World's leading companies for over 80 years --}}
    <section class="section bg-leading-company pt-95">
        <div class="box-bg-leading"></div>
        <div class="container">
            <div class="text-center mb-45">
                <h2 class="color-brand-1 mb-15 wow animate__animated animate__fadeIn">World’s Leading Companies<br
                        class="d-none d-lg-block">For Over 80 Years.</h2>
                <p class="font-md color-white wow animate__animated animate__fadeIn">
                    Unrivaled for over 80 years, we stand as the trusted choice for leading companies globally. Our
                    legacy <br class="d-none d-lg-block"> of excellence continues to define industry standards and
                    shape success across diverse
                    sectors.
                    {{-- A big opportunity for your
                    business
                    growth. Delivering Results for Industry Leaders. We are<br class="d-none d-lg-block">proud of our
                    workfor
                    and have worked hard. --}}
                </p>
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
                    <h2 class="color-brand-1 wow animate__animated animate__fadeIn">Get a quote for your tailored
                        solutions.
                    </h2>
                </div>
                <div class="get-quote-right"><a class="btn btn-get-quote wow animate__animated animate__fadeIn"
                        href="{{ route('get-quote') }}">
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
    <section class="section mt-50">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 col-md-8">
                    <h2
                        class="title-favicon color-brand-2 mb-20 title-padding-left wow animate__animated animate__fadeIn">
                        Testimonials</h2>
                    <p class="font-lg color-brand-2 pl-55 wow animate__animated animate__fadeIn">Hear from our users
                        who have saved thousands on their<br class="d-none d-lg-block">Startup and SaaS solution spend.
                    </p>
                </div>
                <div class="col-lg-4 col-md-4 text-end">
                    <div class="box-button-sliders">
                        <div
                            class="swiper-button-prev swiper-button-prev-style-1 swiper-button-prev-customers wow animate__animated animate__fadeIn">
                            <svg fill="none" stroke="currentColor" stroke-width="1.5" viewbox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18"></path>
                            </svg>
                        </div>
                        <div
                            class="swiper-button-next swiper-button-next-style-1 swiper-button-next-customers wow animate__animated animate__fadeIn">
                            <svg fill="none" stroke="currentColor" stroke-width="1.5" viewbox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="box-slide-customers overflow-hidden mt-50">
            <div class="box-slide-customers-2">
                <div class="box-swiper">
                    <div class="swiper-container swiper-group-4-customers pb-50">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide wow animate__animated animate__fadeIn">
                                <div class="card-testimonial-grid">
                                    <div class="box-author mb-25">
                                        <a href="#/"><img
                                                src="https://stockgloballogistics.com/wp-content/uploads/2020/10/Andy-Profile-600-400x400-1-150x150.png"
                                                alt="transp"></a>
                                        <div class="author-info"><a href="#/"><span
                                                    class="font-xl-bold color-brand-2 author-name">Alex Douglas
                                                </span></a><span class="font-sm color-grey-500 department">From
                                                USA</span></div>
                                    </div>
                                    <p class="font-md color-grey-700">These guys are just the coolest logistics company
                                        ever! They exceptionally handled our complex road freight services.</p>
                                    <div class="card-bottom-info justify-content-between">
                                        <div class="rating text-start">
                                            <img src="{{ env('STATIC_ASSET_URL', '') }}/static/imgs/template/icons/star.svg"
                                                alt="transp">
                                            <img src="{{ env('STATIC_ASSET_URL', '') }}/static/imgs/template/icons/star.svg"
                                                alt="transp"><img
                                                src="{{ env('STATIC_ASSET_URL', '') }}/static/imgs/template/icons/star.svg"
                                                alt="transp"><img
                                                src="{{ env('STATIC_ASSET_URL', '') }}/static/imgs/template/icons/star.svg"
                                                alt="transp"><img
                                                src="{{ env('STATIC_ASSET_URL', '') }}/static/imgs/template/icons/star.svg"
                                                alt="transp"><br><span class="font-sm color-white">For customer
                                                support</span>
                                        </div><span class="font-xs color-grey-500 rate-post text-end">Rate: 4.95 /
                                            5</span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide wow animate__animated animate__fadeIn">
                                <div class="card-testimonial-grid">
                                    <div class="box-author mb-25"><a href="#/"><img
                                                src="https://stockgloballogistics.com/wp-content/uploads/2020/10/testimonial-edward-150x150.png"
                                                alt="transp"></a>
                                        <div class="author-info"><a href="#/"><span
                                                    class="font-xl-bold color-brand-2 author-name">Aladino Schiavone
                                                </span></a><span class="font-sm color-grey-500 department">From
                                                Italy</span></div>
                                    </div>
                                    <p class="font-md color-grey-700">Their performance on our project was extremely
                                        successful. As a result of this collaboration, the project was built with
                                        exceptional quality & delivered.</p>
                                    <div class="card-bottom-info justify-content-between">
                                        <div class="rating text-start"><img
                                                src="{{ env('STATIC_ASSET_URL', '') }}/static/imgs/template/icons/star.svg"
                                                alt="transp"><img
                                                src="{{ env('STATIC_ASSET_URL', '') }}/static/imgs/template/icons/star.svg"
                                                alt="transp"><img
                                                src="{{ env('STATIC_ASSET_URL', '') }}/static/imgs/template/icons/star.svg"
                                                alt="transp"><img
                                                src="{{ env('STATIC_ASSET_URL', '') }}/static/imgs/template/icons/star.svg"
                                                alt="transp"><img
                                                src="{{ env('STATIC_ASSET_URL', '') }}/static/imgs/template/icons/star.svg"
                                                alt="transp"><br><span class="font-sm color-white">For customer
                                                support</span></div><span
                                            class="font-xs color-grey-500 rate-post text-end">Rate: 4.95 / 5</span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide wow animate__animated animate__fadeIn">
                                <div class="card-testimonial-grid">
                                    <div class="box-author mb-25"><a href="#/"><img
                                                src="https://stockgloballogistics.com/wp-content/uploads/2020/10/unnamed-150x150.png"
                                                alt="transp"></a>
                                        <div class="author-info"><a href="#/"><span
                                                    class="font-xl-bold color-brand-2 author-name">Isabela Ferreira
                                                </span></a><span class="font-sm color-grey-500 department">From
                                                Spain</span></div>
                                    </div>
                                    <p class="font-md color-grey-700">The shipping process with this crew was a
                                        pleasurable experience! They did all in time and with no safety incidents.</p>
                                    <div class="card-bottom-info justify-content-between">
                                        <div class="rating text-start"><img
                                                src="{{ env('STATIC_ASSET_URL', '') }}/static/imgs/template/icons/star.svg"
                                                alt="transp"><img
                                                src="{{ env('STATIC_ASSET_URL', '') }}/static/imgs/template/icons/star.svg"
                                                alt="transp"><img
                                                src="{{ env('STATIC_ASSET_URL', '') }}/static/imgs/template/icons/star.svg"
                                                alt="transp"><img
                                                src="{{ env('STATIC_ASSET_URL', '') }}/static/imgs/template/icons/star.svg"
                                                alt="transp"><img
                                                src="{{ env('STATIC_ASSET_URL', '') }}/static/imgs/template/icons/star.svg"
                                                alt="transp"><br><span class="font-sm color-white">For customer
                                                support</span></div><span
                                            class="font-xs color-grey-500 rate-post text-end">Rate: 4.95 / 5</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Faqs --}}
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
                                        aria-controls="collapseTwo">What Is Logistics Management?</button>
                                </h5>
                                <div class="accordion-collapse collapse show" id="collapseTwo"
                                    aria-labelledby="headingTwo" data-bs-parent="#accordionFAQ">
                                    <div class="accordion-body">Logistics management is a function where a company
                                        usually consisting of various shipping and distribution professionals
                                        provide services to analyze a company’s supply chain, offer carrier and
                                        service options, and provide continued management of all or some areas of a
                                        customer’s transportation needs.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item wow animate__animated animate__fadeIn">
                                <h5 class="accordion-header" id="headingThree">
                                    <button class="accordion-button text-heading-5 collapsed text-heading-5 type="
                                        data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                        aria-expanded="false" aria-controls="collapseThree">Does It Cost Anything To
                                        Do A Full Analysis Of Our Supply Chain Services?</button>
                                </h5>
                                <div class="accordion-collapse collapse" id="collapseThree"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionFAQ">
                                    <div class="accordion-body">No, we do not charge for our initial analysis. There is
                                        absolutely nothing to lose by having our expert logistics professionals review
                                        your shipping and distribution spend and profile. In most cases we are
                                        compensated by our providers should you utilize our services.</div>
                                </div>
                            </div>
                            <div class="accordion-item wow animate__animated animate__fadeIn">
                                <h5 class="accordion-header" id="headingFour">
                                    <button class="accordion-button text-heading-5 collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                        aria-expanded="false" aria-controls="collapseFour">What Modes And Services
                                        Does {{ env('APP_NAME') }} Provide?</button>
                                </h5>
                                <div class="accordion-collapse collapse" id="collapseFour"
                                    aria-labelledby="headingFour" data-bs-parent="#accordionFAQ">
                                    <div class="accordion-body">We offer services for international and domestic
                                        freight, LCL shipping, FCL shipping solutions, freight and parcel audit and
                                        reporting, and overall supply chain management.</div>
                                </div>
                            </div>
                            <div class="accordion-item wow animate__animated animate__fadeIn">
                                <h5 class="accordion-header" id="headingFive">
                                    <button class="accordion-button text-heading-5 collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseFive"
                                        aria-expanded="false" aria-controls="collapseFive">I Am A Small Start-Up, Can
                                        {{ env('APP_NAME') }} Help Me?</button>
                                </h5>
                                <div class="accordion-collapse collapse" id="collapseFive"
                                    aria-labelledby="headingFive" data-bs-parent="#accordionFAQ">
                                    <div class="accordion-body">Yes, we love working with small and emerging companies.
                                        {{ env('APP_NAME') }} provides the expertise and support to help your company
                                        scale.</div>
                                </div>
                            </div>
                            <div class="accordion-item wow animate__animated animate__fadeIn">
                                <h5 class="accordion-header" style="text-transform: capitalize !important;"
                                    id="headingSix">
                                    <button class="accordion-button text-heading-5 collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false"
                                        aria-controls="collapseSix">What Size Shipments Can You Handle?</button>
                                </h5>
                                <div class="accordion-collapse collapse" id="collapseSix"
                                    aria-labelledby="headingSix" data-bs-parent="#accordionFAQ">
                                    <div class="accordion-body">Pretty much any size you have! We can handle individual
                                        cartons, palletized items, and large, bulky items up to 20,000 lbs per
                                        piece-plus everything in between. Our terminals are equipped for
                                        flatrack/flatbed loading and oversized freight. We can accommodate special
                                        freight needs by utilizing equipment rentals.</div>
                                </div>
                            </div>
                        </div>
                        <div class="line-border mt-50 mb-50"></div>
                        <h3 class="color-brand-2 wow animate__animated animate__fadeIn">Nead more help?</h3>
                        <div class="mt-20">
                            <a class="btn btn-brand-1-big mr-20 wow animate__animated animate__fadeIn"
                                href="{{ route('contact-us') }}">Contact Us</a>
                            <a class="btn btn-link-medium wow animate__animated animate__fadeIn"
                                href="{{ route('about') }}">Learn More
                                <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor"
                                    viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M14 5l7 7m0 0l-7 7m7-7H3">
                                    </path>
                                </svg></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>
