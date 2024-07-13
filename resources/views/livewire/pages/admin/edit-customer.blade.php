<div>
    <x-admin.page-title title="Edit Customer" />
    <div class="row">
        <div class="col-lg-12">
            <div class="card-header align-items-center d-flex">
                {{-- <h4 class="card-title mb-0 flex-grow-1">Input Example</h4> --}}
            </div><!-- end card header -->
            <div class="card">
                <div class="card-body">
                    @if ($errors->any())
                        <div class="col-xxl-4 col-md-8">
                            <div>
                                <!-- Danger Alert -->
                                <div class="alert alert-danger alert-dismissible alert-outline fade show" role="alert">
                                    <strong> Error! </strong> - Unable to submit the form. Fix this errors below.
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            </div>
                        </div>
                    @endif
                    @if (session('error'))
                        <div class="col-xxl-4 col-md-8">
                            <div>
                                <!-- Danger Alert -->
                                <div class="alert alert-danger alert-dismissible alert-outline fade show"
                                    role="alert">
                                    <strong> Error! </strong> - {{ session('error') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            </div>
                        </div>
                    @endif
                    @if (session('success'))
                        <div class="col-xxl-4 col-md-8">
                            <div>
                                <!-- Success Alert -->
                                <div class="alert alert-success alert-dismissible alert-outline fade show"
                                    role="alert">
                                    <strong> Success! </strong> - {{ session('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            </div>
                        </div>
                    @endif
                    <form wire:submit='update' class="row gy-4">
                        <div class="col-xxl-3 col-md-6">
                            <div>
                                <label for="name" class="form-label">Customer Name </label>
                                <input wire:model.lazy="name" value="PP" type="text" class="form-control"
                                    placeholder="Name" id="name">
                                @error('name')
                                    <div id="passwordHelpBlock" class="form-text text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        {{--  --}}
                        <div class="col-xxl-3 col-md-12">
                            <div>
                                <button class="btn btn-primary w-100" type="submit">
                                    <span class="d-flex align-items-center">
                                        <span class="flex-grow-1 ms-2">Update</span>
                                        <span wire:loading class="spinner-border spinner-border-sm flex-shrink-0"
                                            role="status">
                                            <span class="visually-hidden">Loading...</span>
                                        </span>
                                    </span>
                                </button>
                            </div>
                        </div>
                        {{--  --}}
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
