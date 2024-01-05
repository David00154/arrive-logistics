<div>
    {{-- Banner --}}
    <x-base.banner title="Contact Us">
        {{-- <x-slot:subject>
                Who We Are
            </x-slot:subject> --}}
        {{-- We have been pioneering the industry
            in Europe for 20 years, and delivering value
            <br class="d-none d-lg-block">
            products within given
            timeframe, every single time. --}}
    </x-base.banner>
    <div class="mt-50"></div>
    {{-- Contact form --}}
    <section class="section">
        <div class="container position-relative">
            <div class="box-cover-contactform">
                <div class="row align-items-center">
                    <div class="col-xl-8 col-lg-7">
                        <div class="box-contactform-left">
                            <h3 class="color-brand-2 mb-15 wow animate__animated animate__fadeIn">Still have question?
                            </h3>
                            <p class="font-md color-grey-900 mb-50 wow animate__animated animate__fadeIn">Can’t find the
                                answer you are looking for? Please chat to our friendly team.</p>
                            <form wire:submit='submitForm'>
                                <div class="row wow animate__animated animate__fadeIn">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name" class="form-label color-grey-700">Name*</label>
                                            <input wire:model='name' class="form-control" type="text"
                                                placeholder="(required)" id="name">
                                            @error('name')
                                                <span class="invalid-error">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="email" class="form-label color-grey-700">Email*</label>
                                            <input wire:model='email' class="form-control" type="text"
                                                placeholder="(required)" id="email">
                                            @error('email')
                                                <span class="invalid-error">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="phone" class="form-label color-grey-700">Phone*</label>
                                            <input wire:model='phone' class="form-control" type="text"
                                                placeholder="(required)" id="phone">
                                            @error('phone')
                                                <span class="invalid-error">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="subject" class="form-label color-grey-700">Subject*</label>
                                            <input wire:model='subject' class="form-control" type="text"
                                                placeholder="(required)" id="subject">
                                            @error('subject')
                                                <span class="invalid-error">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="message" class="form-label color-grey-700">Message /
                                                Note*</label>
                                            <textarea wire:model='message_' class="form-control" placeholder="(required)" rows="8"></textarea>
                                            @error('message_')
                                                <span class="invalid-error">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        @if ($errors->any())
                                            <div class="alert alert-danger alert-dismissible fade show rounded-0 "
                                                style="font-weight: 400" role="alert">
                                                <strong>Error!</strong> Unable to submit the form. Fix this errors
                                                above.
                                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                    aria-label="Close">
                                                    {{-- <span aria-hidden="true">&times;</span> --}}
                                                </button>
                                            </div>
                                        @endif
                                        @if (session('error'))
                                            <div class="alert alert-danger alert-dismissible fade show rounded-0 "
                                                style="font-weight: 400" role="alert">
                                                <strong>Error!</strong> {{ session('error') }}
                                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                    aria-label="Close">
                                                    {{-- <span aria-hidden="true">&times;</span> --}}
                                                </button>
                                            </div>
                                        @endif
                                        @if (session('success'))
                                            <div class="alert alert-success alert-dismissible fade show rounded-0 "
                                                style="font-weight: 400" role="alert">
                                                <strong>Success!</strong> {{ session('success') }}
                                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                    aria-label="Close">
                                                    {{-- <span aria-hidden="true">&times;</span> --}}
                                                </button>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="col-md-12">
                                        <button class="btn btn-brand-1-big" type="submit">
                                            Submit Now
                                            <div wire:loading class="spinner-border spinner-border-sm ml-5"
                                                role="status">
                                                {{-- <span class="sr-only">Loading...</span> --}}
                                            </div>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5 position-relative">
                        <div class="box-contactform-right">
                            <h5 class="color-brand-2 mb-35 wow animate__animated animate__fadeIn">Headquarters</h5>
                            <div class="map-info"><img class="mb-25 wow animate__animated animate__fadeIn"
                                    src="assets/imgs/template/logo.svg" alt="transp">
                                <p class="color-grey-700 mb-25 wow animate__animated animate__fadeIn">4517 Washington
                                    Ave. Manchester, Kentucky 39495</p>
                                <p class="color-grey-700 mb-10 wow animate__animated animate__fadeIn">
                                    <svg class="icon-16 mr-10 color-brand-1" fill="none" stroke="currentColor"
                                        stroke-width="1.5" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                        aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z">
                                        </path>
                                    </svg>Phone: +01-246-357 (Any time 24/7)
                                </p>
                                <p class="color-grey-700 mb-30 wow animate__animated animate__fadeIn">
                                    <svg class="icon-16 mr-10 color-brand-1" fill="none" stroke="currentColor"
                                        stroke-width="1.5" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                        aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75">
                                        </path>
                                    </svg>Email: {{ env('MAIL_FROM_ADDRESS') }}
                                </p>
                                <div class="line-border mb-25"></div>
                                <p class="color-grey-700 font-md-bold wow animate__animated animate__fadeIn">Hours:
                                    8:00
                                    - 17:00, Mon - Sat</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="mt-50"></div>
</div>
