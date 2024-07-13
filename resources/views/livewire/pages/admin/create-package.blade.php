<div>
    <x-admin.page-title title="Create Package" />
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    {{-- <h4 class="card-title mb-0 flex-grow-1">Input Example</h4> --}}
                </div><!-- end card header -->
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
                    <form wire:submit='submit' class="row gy-4">
                        <div class="col-xxl-3 col-md-6">
                            <div>
                                <label for="delivery_date" class="form-label">Delivery Date and Time</label>
                                <input wire:model='delivery_date' type="datetime-local" class="form-control"
                                    id="delivery_date">
                                @error('delivery_date')
                                    <div id="passwordHelpBlock" class="form-text text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-xxl-3 col-md-6">
                            <div>
                                <label for="package_name" class="form-label">Package Name</label>
                                <input placeholder="Enter a package name" wire:model='package_name' type="text"
                                    class="form-control" id="package_name">
                                @error('package_name')
                                    <div id="passwordHelpBlock" class="form-text text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-xxl-3 col-md-6">
                            <div>
                                <label for="description" class="form-label">Description</label>
                                <input placeholder="Enter a package description" wire:model='description' type="text"
                                    class="form-control" id="description">
                                @error('description')
                                    <div id="passwordHelpBlock" class="form-text text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-xxl-3 col-md-6">
                            <div>
                                <label for="weight" class="form-label">Package Weight</label>
                                <input placeholder="Enter a package weight" wire:model='weight' type="number"
                                    class="form-control" id="weight">
                                @error('weight')
                                    <div id="passwordHelpBlock" class="form-text text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-xxl-3 col-md-6">
                            <div>
                                <label for="dimensions" class="form-label">Package Dimension</label>
                                <input placeholder="Enter a package dimension" wire:model='dimensions' type="text"
                                    class="form-control" id="dimensions">
                                @error('dimensions')
                                    <div id="passwordHelpBlock" class="form-text text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        {{-- end col --}}
                        <div class="col-xxl-3 col-md-6">
                            <div>
                                <label for="customer_id" class="form-label">Customer</label>
                                <select id="customer_id" wire:model='customer_id' class="form-select">
                                    <option selected>Choose a customer</option>
                                    @foreach ($customers as $customer)
                                        <option value="{{ $customer['id'] }}">{{ $customer['name'] }}</option>
                                    @endforeach
                                </select>
                                @error('customer_id')
                                    <div id="passwordHelpBlock" class="form-text text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        {{-- end col --}}
                        {{-- @if ($errors->any())
                            <div class="col-xxl-4 col-md-8">
                                <div>
                                    <!-- Danger Alert -->
                                    <div class="alert alert-danger alert-dismissible alert-outline fade show"
                                        role="alert">
                                        <strong> Error! </strong> - Unable to submit the form. Fix this errors above.
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
                        @endif --}}
                        <!--end col-->
                        <div class="col-xxl-3 col-md-12">
                            <div>
                                <button class="btn btn-primary w-100" type="submit">
                                    <span class="d-flex align-items-center">
                                        <span class="flex-grow-1 ms-2">Create</span>
                                        <span wire:loading class="spinner-border spinner-border-sm flex-shrink-0"
                                            role="status">
                                            <span class="visually-hidden">Loading...</span>
                                        </span>
                                    </span>
                                </button>
                            </div>
                        </div>

                        <!--end col-->
                    </form>
                    <!--end row-->
                </div>
            </div>
        </div>
        {{-- end col --}}
    </div>
    {{-- end row --}}
</div>
