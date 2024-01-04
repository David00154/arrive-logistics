<?php

use function Livewire\Volt\{state};

state([
    'quickLinks' => [
        [
            'title' => 'Home',
            'href' => '/',
        ],
        [
            'title' => 'About Us',
            'href' => '/about',
        ],
        [
            'title' => 'FAQs',
            'href' => route('faq'),
        ],
        [
            'title' => 'Solutions',
            'href' => '/our-services',
        ],
    ],
    'solutions' => [
        [
            'title' => 'Air Fowarding',
            'href' => 'air-fowarding',
        ],
        [
            'title' => 'Land Fowarding',
            'href' => 'land-fowarding',
        ],
        [
            'title' => 'Sea Fowarding',
            'href' => 'sea-fowarding',
        ],
        [
            'title' => 'Warehousing & Storage',
            'href' => 'warhousing',
        ],
    ],
]);

//

?>

<footer class="footer">
    <div class="footer-1">
        <div class="container">
            <div class="row w-full">
                <div class="col-lg-4 mb-30">
                    <div class="mb-20"><img src="" alt="{{ config('app.name') }}">
                    </div>
                    <p class="font-sm mb-20 color-white">
                        {{ config('app.name') }} is a Worldwide Global delivering logistics company. We have offices in
                        more than 15 countries and an international network of partners and agents.
                    </p>
                    <h6 class="color-brand-1">Follow Us</h6>
                    <div class="mt-15"><a class="icon-socials icon-facebook" href="index.html#"></a><a
                            class="icon-socials icon-instagram" href="index.html#"></a><a
                            class="icon-socials icon-twitter" href="index.html#"></a><a
                            class="icon-socials icon-youtube" href="index.html#"></a><a class="icon-socials icon-skype"
                            href="index.html#"></a></div>
                </div>
                <div class="col-lg-3 width-16  mb-30">
                    <h5 class="mb-10 color-brand-1">Quick Links</h5>
                    <ul class="menu-footer">
                        @foreach ($quickLinks as $link)
                            <li><a href="{{ $link['href'] }}">{{ $link['title'] }}</a></li>
                        @endforeach

                    </ul>
                </div>
                <div class="col-lg-3 width-16 mb-30">
                    <h5 class="mb-10 color-brand-1">Our Services</h5>
                    <ul class="menu-footer">
                        @foreach ($solutions as $solution)
                            <li><a href="/solution/{{ $solution['href'] }}">{{ $solution['title'] }}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-lg-3 mb-30">
                    <h5 class="mb-10 color-brand-1">Contact Us</h5>
                    <ul class="menu-footer">
                        <li>
                            <a class="email-icon" href="mailto:{{ env('MAIL_FROM_ADDRESS') }}">
                                <svg fill="none" stroke="currentColor" stroke-width="1.5" viewbox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75">
                                    </path>
                                </svg>{{ env('MAIL_FROM_ADDRESS') }}</a>
                        </li>
                    </ul>
                </div>
                {{-- <div class="col-lg-3 width-20 mb-30">
                    <h5 class="mb-10 color-brand-1">Gallery</h5>
                    <div class="galleries-footer">
                        <ul class="list-imgs">
                            <li> <img src="{{ Vite::asset('resources/static/imgs/page/homepage1/gal1.png') }}"
                                    alt="{{ config('app.name') }}"></li>
                            <li> <img src="{{ Vite::asset('resources/static/imgs/page/homepage1/gal2.png') }}"
                                    alt="{{ config('app.name') }}"></li>
                            <li> <img src="{{ Vite::asset('resources/static/imgs/page/homepage1/gal3.png') }}"
                                    alt="{{ config('app.name') }}"></li>
                            <li> <img src="{{ Vite::asset('resources/static/imgs/page/homepage1/gal4.png') }}"
                                    alt="{{ config('app.name') }}"></li>
                            <li> <img src="{{ Vite::asset('resources/static/imgs/page/homepage1/gal5.png') }}"
                                    alt="{{ config('app.name') }}"></li>
                            <li> <img src="{{ Vite::asset('resources/static/imgs/page/homepage1/gal6.png') }}"
                                    alt="{{ config('app.name') }}"></li>
                            <li> <img src="{{ Vite::asset('resources/static/imgs/page/homepage1/gal7.png') }}"
                                    alt="{{ config('app.name') }}"></li>
                            <li> <img src="{{ Vite::asset('resources/static/imgs/page/homepage1/gal8.png') }}"
                                    alt="{{ config('app.name') }}"></li>
                            <li> <img src="{{ Vite::asset('resources/static/imgs/page/homepage1/gal9.png') }}"
                                    alt="{{ config('app.name') }}"></li>
                        </ul>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
    <div class="footer-2">
        <div class="container">
            <div class="footer-bottom">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12 text-center text-lg-start"><span
                            class="color-grey-300 font-md">©{{ config('app.name') }} Official {{ date('Y') }}. All
                            right reversed.</span></div>
                    {{-- <div class="col-lg-6 col-md-12 text-center text-lg-end">
                        <ul class="menu-bottom">
                            <li><a class="font-sm color-grey-300"
                                    href="https://jthemes.net/themes/html/transp/term-conditions.html">Privacy
                                    policy</a></li>
                            <li><a class="font-sm color-grey-300"
                                    href="https://jthemes.net/themes/html/transp/term-conditions.html">Cookies</a></li>
                            <li><a class="font-sm color-grey-300"
                                    href="https://jthemes.net/themes/html/transp/term-conditions.html">Terms of
                                    service</a></li>
                        </ul>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</footer>
