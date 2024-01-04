<x-guest-layout>
    <x-slot:title>
        404
    </x-slot:title>
    <section class="section pt-100 pb-200">
        <div class="container box-404">
            <div class="row align-items-center">
                <div class="col-lg-1"></div>
                <div class="col-lg-5 mb-30 text-center">
                    <div class="box-404-right"><img src="{{ env('STATIC_ASSET_URL', '') }}/static/imgs/page/404/img.png"
                            alt="transp"></div>
                </div>
                <div class="col-lg-5 mb-30">
                    <div class="box-404-left">
                        <h1 class="color-brand-2 mb-10">404</h1>
                        <h3 class="color-brand-2 mb-25">Oops, nothing to see here</h3>
                        <p class="font-md color-grey-500">Unfortunately, we couldn't find what you were<br
                                class="d-none d-lg-block">looking for or the page no longer exists.</p>
                        <div class="mt-50">
                            <a class="btn btn-link-semibold" href="{{ route('home') }}">
                                <svg class="icon-16 mr-5" fill="none" stroke="currentColor" stroke-width="1.5"
                                    viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19.5 12h-15m0 0l6.75 6.75M4.5 12l6.75-6.75"></path>
                                </svg>Back to Homepage
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>
