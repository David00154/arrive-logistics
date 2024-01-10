<div class="row">
    <!-- start page title -->
    <x-admin.page-title title="Customer Delivery Status" />
    <!-- end page title -->
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header align-items-center d-flex">
                <h4 class="card-title mb-0 flex-grow-1">Delivery Status for {{ explode('-', $customer_id)[0] }}</h4>
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
                                    <th scope="col">ID</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Location</th>
                                    <th scope="col">Customer</th>
                                    <th scope="col">Date</th>
                                    <th scope="col"></th>
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
                                @foreach ($statuses as $status)
                                    <tr wire:key='{{ $status['id'] }}'>
                                        {{-- <td><a class="btn btn-outline-success btn-sm"
                                                href="{{ route('edit-status', ['id' => $status['id']]) }}">Edit
                                                status</a>
                                        </td> --}}
                                        <td>
                                            <button id="btn-should-copy" data-value="{{ $status['id'] }}" type="button"
                                                class="btn btn-outline-primary btn-sm" style="margin-right: 5px">
                                                <span>Copy</span>
                                            </button>
                                            <a href="#" class="fw-medium">{{ explode('-', $status['id'])[0] }}</a>
                                        </td>
                                        <td>{{ $status['status'] }}</td>
                                        <td>{{ $status['location'] }}</td>
                                        <td><a href="{{ route('customer-by-id', ['id' => $status['customer_id']]) }}">See
                                                customer</a></td>
                                        <td>{{ $status['created_at'] }}</td>
                                        <td><a class="btn btn-outline-danger btn-sm"
                                                href="{{ route('delete-status', ['id' => $status['id']]) }}">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </div><!-- end card-body -->
        </div><!-- end card -->
    </div>
    <!-- end col -->
</div>
