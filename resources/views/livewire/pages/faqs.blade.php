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
                            inquisitive? Have a read through some of our FAQs or contact our supporters for help</p>
                        <div class="box-gallery-faqs">
                            <div class="image-top wow animate__animated animate__fadeIn"><img
                                    src="/static/imgs/page/trackyourparcel/img-faqs1.png"
                                    alt="{{ config('app.name') }}"></div>
                            <div class="image-bottom wow animate__animated animate__fadeIn">
                                <div class="image-faq-1"><img src="/static/imgs/page/trackyourparcel/img-faqs2.png"
                                        alt="{{ config('app.name') }}"></div>
                                <div class="image-faq-2"><img src="/static/imgs/page/trackyourparcel/img-faqs3.png"
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
                                        aria-controls="collapseTwo">How can I return an item purchased online?</button>
                                </h5>
                                <div class="accordion-collapse collapse show" id="collapseTwo"
                                    aria-labelledby="headingTwo" data-bs-parent="#accordionFAQ">
                                    <div class="accordion-body">Contrary to popular belief, Lorem Ipsum is not simply
                                        random text. It has roots in a piece of classical Latin literature Id pro doctus
                                        mediocrem erroribus, diam nostro sed cu. Ea pri graeco tritani partiendo.
                                        Omittantur No tale choro fastidii his, pri cu epicuri perpetua. Enim dictas
                                        omittantur et duo, vocent lucilius quaestio mea ex. Ex illum officiis id.</div>
                                </div>
                            </div>
                            <div class="accordion-item wow animate__animated animate__fadeIn">
                                <h5 class="accordion-header" id="headingThree">
                                    <button class="accordion-button text-heading-5 collapsed text-heading-5 type="
                                        data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">Can I cancel or change my order?</button>
                                </h5>
                                <div class="accordion-collapse collapse" id="collapseThree"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionFAQ">
                                    <div class="accordion-body">Aut architecto consequatur sit error nemo sed dolorum
                                        suscipit 33 impedit dignissimos ut velit blanditiis qui quos magni id dolore
                                        dignissimos. Sit ipsa consectetur et sint harum et dicta consequuntur id
                                        cupiditate perferendis qui quisquam enim. Vel autem illo id error excepturi est
                                        dolorum voluptas qui maxime consequatur et culpa quibusdam in iusto vero sit
                                        amet Quis.</div>
                                </div>
                            </div>
                            <div class="accordion-item wow animate__animated animate__fadeIn">
                                <h5 class="accordion-header" id="headingFour">
                                    <button class="accordion-button text-heading-5 collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false"
                                        aria-controls="collapseFour">I have promotional or discount code?</button>
                                </h5>
                                <div class="accordion-collapse collapse" id="collapseFour" aria-labelledby="headingFour"
                                    data-bs-parent="#accordionFAQ">
                                    <div class="accordion-body">Eos nostrum aperiam ab enim quas sit voluptate fuga. Ea
                                        aperiam voluptas a accusantium similique 33 alias sapiente non vitae repellat et
                                        dolorum omnis eos beatae praesentium id sunt corporis. Aut nisi blanditiis aut
                                        corrupti quae et accusantium doloribus sed tempore libero a dolorum beatae.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item wow animate__animated animate__fadeIn">
                                <h5 class="accordion-header" id="headingFive">
                                    <button class="accordion-button text-heading-5 collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseFive"
                                        aria-expanded="false" aria-controls="collapseFive">What are the delivery types
                                        you use?</button>
                                </h5>
                                <div class="accordion-collapse collapse" id="collapseFive"
                                    aria-labelledby="headingFive" data-bs-parent="#accordionFAQ">
                                    <div class="accordion-body">Et beatae quae ex minima porro aut nihil quia sed optio
                                        dignissimos et voluptates deleniti et nesciunt veritatis et suscipit quod. Est
                                        sint voluptate id unde nesciunt non deleniti debitis. Ut dolores tempore vel
                                        placeat nemo quo enim reprehenderit eos corrupti maiores et minima quaerat. Quo
                                        sequi eaque eum similique sint et autem perspiciatis cum Quis exercitationem quo
                                        quos excepturi non ducimus ducimus eos natus velit.</div>
                                </div>
                            </div>
                            <div class="accordion-item wow animate__animated animate__fadeIn">
                                <h5 class="accordion-header" id="headingSix">
                                    <button class="accordion-button text-heading-5 collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false"
                                        aria-controls="collapseSix">How can I pay for my purchases?</button>
                                </h5>
                                <div class="accordion-collapse collapse" id="collapseSix"
                                    aria-labelledby="headingSix" data-bs-parent="#accordionFAQ">
                                    <div class="accordion-body">Qui quas itaque ut molestias culpa vel culpa voluptas
                                        eos fugit sint ex veritatis totam cum unde maxime! Qui eius fugiat qui veritatis
                                        cumque a nesciunt nemo. Id numquam rerum est molestiae quia ut nisi architecto a
                                        officiis itaque eum quod repellat ut dolorem dolorem aut ipsam ipsa.</div>
                                </div>
                            </div>
                        </div>
                        <div class="line-border mt-50 mb-50"></div>
                        <h3 class="color-brand-2 wow animate__animated animate__fadeIn">Nead more help?</h3>
                        <div class="mt-20">
                            <a class="btn btn-brand-1-big mr-20 wow animate__animated animate__fadeIn"
                                href="{{ route('contact-us') }}">Contact Us</a><a
                                class="btn btn-link-medium wow animate__animated animate__fadeIn"
                                href="{{ route('faq') }}">Learn More
                                <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor"
                                    viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
