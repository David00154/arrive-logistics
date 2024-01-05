<div class="mobile-header-active mobile-header-wrapper-style perfect-scrollbar">
    <div class="mobile-header-wrapper-inner">
        <div class="mobile-header-content-area">
            <div class="mobile-logo">
                <a class="btn btn-brand-1 hover-up" href="{{ route('get-quote') }}">
                    <svg fill="none" stroke="currentColor" stroke-width="1.5" viewbox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z">
                        </path>
                    </svg>Get a quote</a>
            </div>
            <div class="burger-icon"><span class="burger-icon-top"></span><span class="burger-icon-mid"></span><span
                    class="burger-icon-bottom"></span></div>
            <div class="perfect-scroll">
                <div class="mobile-menu-wrap mobile-header-border">
                    <nav class="mt-15">
                        <ul class="mobile-menu font-heading">
                            <li>
                                <a class="" href="/">{{ __('Home') }}</a>
                            </li>
                            <li>
                                <a href="/about">{{ __('About Us') }}</a>
                            </li>
                            <li class="has-children"><a href="/our-services">{{ __('Our Services') }}</a>
                                <ul class="sub-menu">

                                    @foreach ($solutions as $solution)
                                        <li><a href="/our-services">{{ $solution['title'] }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                            <li>
                                <a href="{{ route('faq') }}">{{ __('Faqs') }}</a>
                            </li>

                            <li>
                                <a href="{{ route('track-item') }}">{{ __('Track Parcel') }}</a>
                            </li>
                            <li>
                                <a href="{{ route('contact-us') }}">{{ __('Contact Us') }}</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="site-copyright color-grey-400 mt-0">
                    <div class="box-download-app">
                        <p class="font-xs color-grey-900 mb-25">Download our Apps and get extra 15% Discount on your
                            first Order…!</p>
                        <div class="mb-25">
                            <div class="d-flex"><a class="mr-10" href="index-3.html#"><img
                                        src="{{ env('STATIC_ASSET_URL', '') }}/static/imgs/template/appstore-btn.png"
                                        alt="transp"></a><a href="index-3.html#"><img
                                        src="{{ env('STATIC_ASSET_URL', '') }}/static/imgs/template/google-play-btn.png"
                                        alt="transp"></a></div>
                        </div>
                    </div>
                    <div class="mb-0"><span class="font-xs color-grey-500">©{{ config('app.name') }} Official
                            {{ date('Y') }}. All right
                            reversed.</span></div>
                </div>
            </div>
        </div>
    </div>
</div>
