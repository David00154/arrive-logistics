<x-guest-layout>
    <x-slot:title>
        Get a quote
    </x-slot:title>
    <section class="section box-requestaquote-4">
        <div class="box-bg-requestaquote-4"></div>
        <div class="container">
            <div class="text-center mt-100">
                <h2 class="color-brand-2 wow animate__animated animate__fadeIn">Request a quote for<br
                        class="d-none d-lg-block">shipping services</h2>
                <div class="box-button mt-30"><a
                        class="btn btn-brand-1-big hover-up mr-40 wow animate__animated animate__fadeIn"
                        href="{{ route('contact-us') }}">Contact Us</a><a
                        class="btn btn-play popup-youtube hover-up color-brand-2 wow animate__animated animate__fadeIn"
                        href="https://www.youtube.com/watch?v=kCGf5uNE13I"><img
                            src="{{ env('STATIC_ASSET_URL', '') }}/static/imgs/template/icons/play.svg"
                            alt="{{ config('app.home') }}">How it work ?</a>
                </div>
            </div>
            <livewire:pages.get-quote />
        </div>
    </section>
</x-guest-layout>
