{{-- <div>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <form wire:submit='login'>
        @error('email')
            <span>{{ $message }}</span>
        @enderror
        @error('password')
            <span>{{ $message }}</span>
        @enderror
        <button type="submit">Submit</button>
    </form>
</div> --}}


<!-- auth-page wrapper -->
<div class="auth-page-wrapper py-5 d-flex justify-content-center align-items-center min-vh-100">
    <div class="bg-overlay"></div>
    <!-- auth-page content -->
    <div class="auth-page-content overflow-hidden pt-lg-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-6">
                    <div class="card overflow-hidden">
                        <div class="p-lg-5 p-4">
                            {{-- <x-auth-session-status class="mb-4" :status="session('status')" /> --}}
                            <div>
                                <h5 class="text-warning">Welcome Admin !</h5>
                                <p class="text-muted">Sign in to continue to {{ env('APP_NAME') }} portal.</p>
                            </div>

                            <div class="mt-4">
                                <form wire:submit='login'>

                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input wire:model='email' type="text" class="form-control" id="email"
                                            placeholder="Enter email">
                                        @error('email')
                                            <div class="invalid-feedback" style="display: inline-block">{{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="password-input">Password</label>
                                        <div class="position-relative auth-pass-inputgroup mb-3">
                                            <input wire:model='password' type="password"
                                                class="form-control pe-5 password-input" placeholder="Enter password"
                                                id="password-input">
                                            <button
                                                class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon"
                                                type="button" id="password-addon"><i
                                                    class="ri-eye-fill align-middle"></i></button>


                                            @error('password')
                                                <div class="invalid-feedback" style="display: inline-block">
                                                    {{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="auth-remember-check">
                                        <label class="form-check-label" for="auth-remember-check">Remember
                                            me</label>
                                    </div>

                                    @if (session('error'))
                                        <!-- Danger Alert -->
                                        <div class="mt-4">
                                            <div class="alert alert-danger alert-dismissible alert-outline fade show"
                                                role="alert">
                                                <strong> Error! </strong> - {{ session('error') }}
                                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                    aria-label="Close"></button>
                                            </div>
                                        </div>
                                    @endif

                                    <div class="mt-4">
                                        <button class="btn btn-warning w-100" type="submit">
                                            <span class="d-flex align-items-center">
                                                <span class="flex-grow-1 ms-2">Sign In</span>
                                                <span wire:loading
                                                    class="spinner-border spinner-border-sm flex-shrink-0"
                                                    role="status">
                                                    <span class="visually-hidden">Loading...</span>
                                                </span>
                                            </span>
                                        </button>
                                    </div>


                                </form>
                            </div>

                            <div class="mt-5">
                            </div>
                        </div>
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col -->

            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end auth page content -->

    <!-- footer -->

    <!-- end Footer -->
</div>
