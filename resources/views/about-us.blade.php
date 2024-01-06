<x-guest-layout>
    <x-slot:title>
        About Us
    </x-slot:title>
    {{-- Banner --}}
    <x-base.banner title="About Us">
        <x-slot:subject>
            Who We Are
        </x-slot:subject>
        We have been pioneering the industry
        in Europe for 20 years, and delivering value
        <br class="d-none d-lg-block">
        products within given
        timeframe, every single time.
    </x-base.banner>
    {{-- Simplifying complex shipping --}}
    <section class="section mt-100 mb-50">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-30">
                    <h2 class="color-brand-2 mb-25 wow animate__animated animate__fadeIn">Simplifying complex shipping
                        challenges with innovative solutions</h2>
                    <p class="font-md color-grey-900 mb-20 wow animate__animated animate__fadeIn">Logistics companies are
                        essential to the smooth functioning of global supply chains. They offer a range of services such
                        as transportation, warehousing, inventory management, and distribution to businesses across
                        different industries. The role of logistics companies has become increasingly important in
                        recent years due to the growth of e-commerce and global trade.</p>
                    <div class="box-button mt-40"><a
                            class="btn btn-brand-1-big hover-up mr-40 wow animate__animated animate__fadeIn"
                            href="{{ route('get-quote') }}">Get a quote</a><a
                            class="btn btn-play popup-youtube hover-up wow animate__animated animate__fadeIn"
                            href="https://www.youtube.com/watch?v=kCGf5uNE13I"><img
                                src="{{ env('STATIC_ASSET_URL', '') }}/static/imgs/template/icons/play.svg"
                                alt="{{ config('app.name') }}"></a></div>
                </div>
                <div class="col-lg-6 position-relative mb-30">
                    <div class="row align-items-end">
                        <div class="col-lg-5 col-md-5 col-sm-5"><img class="mb-20 wow animate__animated animate__fadeIn"
                                src="{{ env('STATIC_ASSET_URL', '') }}/static/imgs/page/about/img-about-1-1.png"
                                alt="{{ config('app.name') }}"><img class="wow animate__animated animate__fadeIn"
                                src="{{ env('STATIC_ASSET_URL', '') }}/static/imgs/page/about/img-about-1-2.png"
                                alt="{{ config('app.name') }}"></div>
                        <div class="col-lg-7 col-md-7 col-sm-7"><img class="wow animate__animated animate__fadeIn"
                                src="{{ env('STATIC_ASSET_URL', '') }}/static/imgs/page/about/img-about-1-3.png"
                                alt="{{ config('app.name') }}"></div>
                    </div>
                    <div class="quote-center shape-2"></div>
                </div>
            </div>
        </div>
    </section>
    {{-- Mission, History and our partners --}}
    <section class="section mt-50 mb-50">
        <div class="container">
            <div class="row align-items-center item-about-2">
                <div class="col-lg-6">
                    <img class="wow animate__animated animate__fadeIn"
                        src="{{ env('STATIC_ASSET_URL', '') }}/static/imgs/page/about/img-about-2-1.png"
                        alt="{{ config('app.name') }}">
                </div>
                <div class="col-lg-6">
                    <div class="box-info-aabout-2"><span
                            class="btn btn-tag wow animate__animated animate__fadeIn">Mission</span>
                        <h2 class="color-brand-2 mt-15 mb-25 wow animate__animated animate__fadeIn">Globally Connected
                            by Large Network</h2>
                        <p class="font-md color-grey-900 mb-20 wow animate__animated animate__fadeIn">At Logistic
                            Transp, our mission is to provide our clients with exceptional transportation services that
                            meet and exceed their expectations. We aim to be the most reliable, efficient, and
                            cost-effective transportation provider in the industry.</p>
                        <div class="box-button mt-40">
                            <div class="row">
                                <div class="col-lg-6 mb-30">
                                    <h6
                                        class="chart-title font-md-bold color-grey-900 wow animate__animated animate__fadeIn">
                                        Affordable Cost</h6>
                                    <p class="font-xs color-grey-900 wow animate__animated animate__fadeIn">Quality
                                        without compromise, affordable solutions tailored to your budget.</p>
                                </div>
                                <div class="col-lg-6 mb-30">
                                    <h6
                                        class="feature-title font-md-bold color-grey-900 wow animate__animated animate__fadeIn">
                                        Shot Time Delivery</h6>
                                    <p class="font-xs color-grey-900 wow animate__animated animate__fadeIn">Swift
                                        solutions for urgent needs, ensuring prompt delivery, meeting deadlines, and
                                        exceeding expectations.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-items-center item-about-2 item-about-2-revert">
                <div class="col-lg-6">
                    <div class="box-info-aabout-2"><span
                            class="btn btn-tag wow animate__animated animate__fadeIn">History</span>
                        <h2 class="color-brand-2 mt-15 mb-25 wow animate__animated animate__fadeIn">Our Legacy in
                            Logistics</h2>
                        <p class="font-md color-grey-900 mb-20 wow animate__animated animate__fadeIn">Explore the rich
                            history that has shaped our legacy in the world of logistics. From humble beginnings to
                            industry leadership, follow our journey through milestones and innovations that define our
                            commitment to excellence over the years.
                        </p>
                        <div class="box-button mt-40"><a
                                class="btn btn-brand-2 mr-20 wow animate__animated animate__fadeIn"
                                href="{{ route('contact-us') }}">Contact Us</a><a
                                class="btn btn-link-medium wow animate__animated animate__fadeIn"
                                href="{{ route('about') }}">Learn More
                                <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor"
                                    viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg></a></div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img class="wow animate__animated animate__fadeIn"
                        src="{{ env('STATIC_ASSET_URL', '') }}/static/imgs/page/about/img-about-2-2.png"
                        alt="{{ config('app.name') }}">
                </div>
            </div>
            <div class="row align-items-center item-about-2">
                <div class="col-lg-6"><img class="wow animate__animated animate__fadeIn"
                        src="{{ env('STATIC_ASSET_URL', '') }}/static/imgs/page/about/img-about-2-3.png"
                        alt="{{ config('app.name') }}"></div>
                <div class="col-lg-6">
                    <div class="box-info-aabout-2"><span class="btn btn-tag wow animate__animated animate__fadeIn">Our
                            Partners</span>
                        <h2 class="color-brand-2 mt-15 mb-25 wow animate__animated animate__fadeIn">We have established
                            strong relationships with our partners</h2>
                        <p class="font-md color-grey-900 mb-20 wow animate__animated animate__fadeIn">We strive to
                            become pioneers in the field, providing first quality and cost-effective service, and smart
                            solutions to the market. Our 30 years’ experience in the shipping, transport and logistics
                            industry is our strength, which support us to deliver our promises to our customers.</p>
                        <div class="box-button d-flex mt-40"><a
                                class="hover-up mr-10 wow animate__animated animate__fadeIn" href="#"><img
                                    src="{{ env('STATIC_ASSET_URL', '') }}/static/imgs/template/appstore-btn.png"
                                    alt="{{ config('app.name') }}"></a><a
                                class="hover-up wow animate__animated animate__fadeIn" href="#"><img
                                    src="{{ env('STATIC_ASSET_URL', '') }}/static/imgs/template/google-play-btn.png"
                                    alt="{{ config('app.name') }}"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Why choose us --}}
    <section class="section mt-85 pt-110 bg-info-4">
        <div class="container">
            <div class="text-center">
                <h2 class="color-brand-2 mb-20 wow animate__animated animate__fadeIn">Global Shipping Partner To
                    World’s<br class="d-none d-lg-block">Famous Companies</h2>
            </div>
            <div class="box-why-choose-us-2 mt-50">
                <div class="row align-items-center">
                    <div class="col-xl-7 col-lg-7 mb-30">
                        <div class="box-info-pround"><span
                                class="btn btn-tag color-grey-900 wow animate__animated animate__fadeIn">Our
                                Features</span>
                            <h2 class="color-brand-2 mb-15 mt-20 wow animate__animated animate__fadeIn">Why choose us
                            </h2>
                            <p class="font-md color-grey-900 wow animate__animated animate__fadeIn">Over the years, we
                                have worked together to expand our network of partners to deliver reliability and
                                consistency. We’ve also made significant strides to tightly integrate technology with
                                our processes, giving our clients greater visibility into every engagement.</p>
                            <div class="mt-30">
                                <ul class="list-ticks list-ticks-3">
                                    <li class="wow animate__animated animate__fadeIn">
                                        <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor"
                                            viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <h6 class="color-brand-2">Reliable and Timely Deliveries</h6>
                                    </li>
                                    <li class="wow animate__animated animate__fadeIn">
                                        <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor"
                                            viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <h6 class="color-brand-2">Advanced Tracking Systems</h6>
                                    </li>
                                    <li class="wow animate__animated animate__fadeIn">
                                        <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor"
                                            viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <h6 class="color-brand-2">Cost-Effective Shipping Options</h6>
                                    </li>
                                    <li class="wow animate__animated animate__fadeIn">
                                        <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor"
                                            viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <h6 class="color-brand-2">Commitment to Sustainability</h6>
                                    </li>
                                    <li class="wow animate__animated animate__fadeIn">
                                        <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor"
                                            viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <h6 class="color-brand-2">Exceptional Customer Service</h6>
                                    </li>
                                    <li class="wow animate__animated animate__fadeIn">
                                        <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor"
                                            viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <h6 class="color-brand-2">International Shipping Expertise</h6>
                                    </li>
                                    <li class="wow animate__animated animate__fadeIn">
                                        <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor"
                                            viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <h6 class="color-brand-2">Flexibility and Customization</h6>
                                    </li>
                                    <li class="wow animate__animated animate__fadeIn">
                                        <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor"
                                            viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <h6 class="color-brand-2">Insurance and Liability Coverage</h6>
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
                                    </svg></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5 mb-30">
                        <div class="box-images-info-4">
                            <div class="box-images-inner">
                                <img class="img-main"
                                    src="{{ env('STATIC_ASSET_URL', '') }}/static/imgs/page/homepage2/img-info-4.png"
                                    alt="transp">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>
