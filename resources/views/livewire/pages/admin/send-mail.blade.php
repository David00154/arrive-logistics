<div>
    <x-admin.page-title title="Send Mail" />
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
                    <form wire:submit='submit' class="row gy-4">
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
                        <div class="col-xxl-3 col-md-6">
                            <div>
                                <label for="subject" class="form-label">Subject</label>
                                <input placeholder="Enter a subject" wire:model='subject' type="text"
                                    class="form-control" id="subject">
                                @error('subject')
                                    <div id="passwordHelpBlock" class="form-text text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-lg-12">
                            <div>
                                <label for="body" class="form-label">Mail Body</label>
                                {{-- <input placeholder="Enter a body" wire:model='body' type="text"
                                    class="form-control" id="body"> --}}
                                <textarea wire:model='body' placeholder="Enter Message Body" class="form-control" id="body" rows="8"></textarea>
                                @error('body')
                                    <div id="passwordHelpBlock" class="form-text text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-xxl-3 col-md-12">
                            <div>
                                <button class="btn btn-primary w-100" type="submit">
                                    <span class="d-flex align-items-center">
                                        <span class="flex-grow-1 ms-2">Send Mail</span>
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
                </div>
            </div>
        </div>
    </div>
</div>
