<div class="row">
    <!-- start page title -->
    @if ($page)
        <x-admin.page-title title="Packages" />
    @endif
    <!-- end page title -->
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header align-items-center d-flex">
                <h4 class="card-title mb-0 flex-grow-1">All available package</h4>
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
                                    <th scope="col">Package Name</th>
                                    <th scope="col">Package Dimension</th>
                                    <th scope="col">Package Weight</th>
                                    <th scope="col">Delivery Date</th>
                                    <th scope="col">Customer</th>
                                    <th scope="col">Date Created</th>
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
                                @foreach ($packages as $package)
                                    <tr wire:key='{{ $package['id'] }}'>
                                        {{-- <td><a class="btn btn-outline-success btn-sm"
                                                href="{{ route('edit-package', ['id' => $package['id']]) }}">Edit
                                                Package</a>
                                        </td> --}}
                                        <td>
                                            <a href="{{ route('edit-package', ['id' => $package['id']]) }}"
                                                class="fw-medium btn btn-outline-success btn-sm">Edit</a>
                                        </td>
                                        <td>
                                            <button id="btn-should-copy" data-value="{{ $package['id'] }}"
                                                type="button" class="btn btn-outline-primary btn-sm"
                                                style="margin-right: 5px">
                                                <span>Copy</span>
                                            </button>
                                            <a href="#"
                                                class="fw-medium">{{ explode('-', $package['id'], 4)[3] }}</a>
                                        </td>
                                        <td>{{ $package['package_name'] }}</td>
                                        <td>{{ $package['dimensions'] }}</td>
                                        <td>{{ $package['weight'] }}</td>
                                        <td>{{ $package['customer']['delivery_date'] }}</td>
                                        <td><a
                                                href="{{ route('customer-by-id', ['id' => $package->customer['id']]) }}">
                                                {{ $package->customer['name'] }}</a></td>
                                        <td>{{ $package['created_at'] }}</td>
                                        <td><a class="btn btn-outline-danger btn-sm"
                                                href="{{ route('delete-package', ['id' => $package['id']]) }}">Delete</a>
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
