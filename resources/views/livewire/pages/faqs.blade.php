<?php

use function Livewire\Volt\{state, title, layout};

//

layout('layouts.guest');

title('FAQ');

?>


<div>
    {{-- Banner --}}
    <section class="section d-block hero-faqs">
        <div class="container position-relative">
            <div class="banner-trackyourparcel"></div>
            <div class="box-info-trackyourparcel">
                <h2 class="color-brand-2 mb-25 wow animate__animated animate__fadeIn">Frequently Asked<br
                        class="d-none d-lg-block"> Questions</h2>
                <p class="color-grey-900 font-md wow animate__animated animate__fadeIn">Everything you need to know about
                    the
                    product and billing. Can not find the answer you are looking for? Please Contact our support team.
                </p>
                {{-- <div class="form-trackparcel mb-0">
                    <form action="faqs.html#">
                        <div class="form-group">
                            <input class="form-control" type="text" placeholder="Enter keyword">
                            <input class="btn btn-brand-1 btn-track" type="submit" value="Find the answer">
                        </div>
                    </form>
                </div> --}}
            </div>
        </div>
    </section>
    {{-- Polular topic --}}
    <section class="section mt-100">
        <div class="container position-relative">
            <h2 class="title-favicon mb-20 wow animate__animated animate__fadeIn">Popular Topic</h2>
            <p class="font-md color-grey-700 wow animate__animated animate__fadeIn">Feeling inquisitive? Have a read
                through some of our FAQs or contact our supporters for help</p>
            <div class="row mt-50">
                <div class="col-lg-6">
                    <div class="item-faqs-2 mb-30"><a href="#">
                            <h6 class="color-brand-2 mb-10 wow animate__animated animate__fadeIn">What is logistic
                                cargo?</h6>
                        </a>
                        <p class="font-md color-grey-700 wow animate__animated animate__fadeIn">Logistic cargo refers to
                            the process of planning, implementing, and controlling the movement of goods and materials
                            from one place to another. This includes everything from transportation, storage, inventory
                            management, and more.</p>
                    </div>
                    <div class="item-faqs-2 mb-30"><a href="#">
                            <h6 class="color-brand-2 mb-10 wow animate__animated animate__fadeIn">What are the types of
                                logistic cargo?</h6>
                        </a>
                        <p class="font-md color-grey-700 wow animate__animated animate__fadeIn">There are several types
                            of logistic cargo, including air freight, sea freight, road transport, rail transport, and
                            intermodal transport.</p>
                    </div>
                    <div class="item-faqs-2 mb-30"><a href="#">
                            <h6 class="color-brand-2 mb-10 wow animate__animated animate__fadeIn">What is the difference
                                between freight and cargo?</h6>
                        </a>
                        <p class="font-md color-grey-700 wow animate__animated animate__fadeIn">Freight refers to the
                            goods being transported, while cargo refers to the actual containers or vessels used to
                            transport the freight.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="item-faqs-2 mb-30"><a href="#">
                            <h6 class="color-brand-2 mb-10 wow animate__animated animate__fadeIn">What is the difference
                                between LCL and FCL?</h6>
                        </a>
                        <p class="font-md color-grey-700 wow animate__animated animate__fadeIn">Some key factors to
                            consider include the mode of transportation, the type of cargo being transported, the
                            distance and route, the required delivery date, and any regulatory or customs requirements.
                        </p>
                    </div>
                    <div class="item-faqs-2 mb-30"><a href="#">
                            <h6 class="color-brand-2 mb-10 wow animate__animated animate__fadeIn">How is logistic cargo
                                priced?</h6>
                        </a>
                        <p class="font-md color-grey-700 wow animate__animated animate__fadeIn">Logistic cargo is
                            typically priced based on the weight and volume of the cargo, as well as the distance and
                            mode of transportation.</p>
                    </div>
                    <div class="item-faqs-2 mb-30"><a href="#">
                            <h6 class="color-brand-2 mb-10 wow animate__animated animate__fadeIn">What is a logistics
                                provider?</h6>
                        </a>
                        <p class="font-md color-grey-700 wow animate__animated animate__fadeIn">A logistics provider is
                            a company that specializes in providing logistics services, including transportation,
                            storage, inventory management, and more.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- FAQS --}}
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
                                        data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">Does It Cost Anything To
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
                                        data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false"
                                        aria-controls="collapseFour">What Modes And Services
                                        Does {{ env('APP_NAME') }} Provide?</button>
                                </h5>
                                <div class="accordion-collapse collapse" id="collapseFour" aria-labelledby="headingFour"
                                    data-bs-parent="#accordionFAQ">
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
</div>
