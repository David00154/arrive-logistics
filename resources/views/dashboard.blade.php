<x-app-layout>
    <x-slot name="title">
        {{ __('Dashboard') }}
    </x-slot>

    <div class="row">
        <div class="col">
            <div class="h-100">
                {{-- 1 --}}
                <div class="row mb-3 pb-1">
                    <div class="col-12">
                        <div class="d-flex align-items-lg-center flex-lg-row flex-column">
                            <div class="flex-grow-1">
                                <h4 class="fs-16 mb-1">Good Day, Admin!</h4>
                                <p class="text-muted mb-0">Here's what's happening today.</p>
                            </div>
                            <div class="mt-3 mt-lg-0">
                                <form action="javascript:void(0);">
                                    <div class="row g-3 mb-0 align-items-center">
                                        <div class="col-auto">
                                            <a href="{{ route('create-package') }}" class="btn btn-soft-success"><i
                                                    class="ri-add-circle-line align-middle me-1"></i>
                                                Create Package</a>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                                </form>
                            </div>
                        </div><!-- end card header -->
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
                {{-- 2 --}}
                <x-admin.statistics />
                {{-- 3 --}}
                <livewire:pages.admin.customers :page="false" />
                {{-- end row --}}
            </div>
            {{-- end --}}
        </div>
        {{-- end col --}}
    </div>
</x-app-layout>
