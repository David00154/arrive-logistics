<section class="section">
    <div class="box-pageheader-1 text-center">
        <div class="container">
            @isset($subject)
                <span class="btn btn-tag wow animate__animated animate__fadeIn">{{ $subject }}</span>
            @endisset
            <h2 class="color-brand-1 mt-15 mb-10 wow animate__animated animate__fadeIn">{{ $title }}</h2>
            <p class="font-md color-white wow animate__animated animate__fadeIn">
                {{ $slot }}
            </p>
        </div>
    </div>
</section>
