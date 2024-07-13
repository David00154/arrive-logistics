<div class="row">
    <!-- start page title -->
    <x-admin.page-title title="Customer" />
    <!-- end page title -->
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header align-items-center d-flex">
                {{-- <h4 class="card-title mb-0 flex-grow-1">All available customers</h4> --}}
            </div><!-- end card header -->

            <div class="card-body">
                @if (session('error'))
                    <div class="alert alert-danger alert-dismissible alert-outline fade show" role="alert">
                        <strong> Error! </strong> - {{ session('error') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible alert-outline fade show" role="alert">
                        <strong> Success! </strong> - {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <div class="">
                    <div class="table-responsive">
                        <table class="table align-middle table-nowrap mb-0">
                            <thead>
                                <tr>
                                    {{-- <th scope="col"></th> --}}
                                    <th scope="col"></th>
                                    <th scope="col">ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Delivery Status</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">Tracking ID</th>
                                    <th scope="col">Packages</th>
                                    <th scope="col">Date Registered</th>
                                    <th scope="col"></th>
                                    {{-- <th scope="col">Customer</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Invoice</th>
                                    <th scope="col">Action</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                {{-- <tr>
                                    <th scope="row"><a href="tables-basic.html#" class="fw-medium">#VZ2110</a></th>
                                    <td>Bobby Davis</td>
                                    <td>October 15, 2021</td>
                                    <td>$2,300</td>
                                    <td><a href="javascript:void(0);" class="link-success">View More
                                            <i class="ri-arrow-right-line align-middle"></i></a>
                                    </td>
                                </tr> --}}
                                <tr wire:key='{{ $customer['id'] }}'>
                                    {{-- <td><a class="btn btn-outline-success btn-sm"
                                            href="{{ route('edit-customer', ['id' => $customer['id']]) }}">Edit
                                            Customer</a>
                                    </td> --}}
                                    <td>
                                        <a href="{{ route('edit-customer', ['id' => $customer['id']]) }}"
                                            class="fw-medium btn btn-outline-success btn-sm">Edit</a>
                                    </td>
                                    <td>
                                        <button id="btn-should-copy" data-value="{{ $customer['id'] }}" type="button"
                                            class="btn btn-outline-primary btn-sm" style="margin-right: 5px">
                                            <span>Copy</span>
                                        </button>
                                        <a href="#"
                                            class="fw-medium">{{ explode('-', $customer['id'], 4)[3] }}</a>
                                    </td>
                                    <td>{{ $customer['name'] }}</td>
                                    <td>{{ $customer['email'] }}</td>
                                    <td>{{ $customer['phone'] }}</td>
                                    <td>
                                        <a href="{{ route('delivery-status-by-id', ['id' => $customer['id']]) }}">See
                                            status</a>
                                    </td>
                                    <td>{{ $customer['address'] }}</td>
                                    @if ($customer['tracking_id'] == null)
                                        <td>
                                            <button type="button" class="btn btn-outline-primary btn-sm"
                                                style="margin-right: 5px"
                                                wire:click="assignTrackingId('{{ $customer['id'] }}')">
                                                Generate </button>
                                        </td>
                                    @else
                                        <td>
                                            <button id="btn-should-copy" data-value="{{ $customer['tracking_id'] }}"
                                                type="button" class="btn btn-outline-primary btn-sm"
                                                style="margin-right: 5px">
                                                <span>Copy</span>
                                            </button>
                                            {{ $customer['tracking_id'] }}
                                        </td>
                                    @endif
                                    <td><a href="{{ route('package-by-id', ['id' => $customer['id']]) }}">See all
                                            packages</a></td>
                                    <td>{{ $customer['created_at'] }}</td>
                                    <td><a class="btn btn-outline-danger btn-sm"
                                            href="{{ route('delete-customer', ['id' => $customer['id']]) }}">Delete</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div><!-- end card-body -->
        </div><!-- end card -->
    </div>
    <!-- end col -->
</div>
