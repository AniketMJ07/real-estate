@extends('layouts.master')
@section('title')
    Subscription Management
@endsection
@section('main_content')
    @include('widgets.loader')
    <div class="pc-container">
        <div class="pc-content">
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Admin Area</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Subscriptions Management</li>
                            </ul>
                        </div>
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h2 class="mb-0">Subscriptions Management</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <a href="{{ route('admin.subscriptions') }}" class="text-decoration-none">
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <h3 class="mb-1 text-primary">{{ $all }}</h3>
                                        <p class="text-muted mb-0">All</p>
                                    </div>
                                    <div class="col-4 text-end">
                                        <i class="ti ti-report-money text-primary f-36"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <a href="{{ route('admin.subscriptions', ['type' => 'active']) }}" class="text-decoration-none">
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <h3 class="mb-1 text-success">{{ $active }}</h3>
                                        <p class="text-muted mb-0">Active</p>
                                    </div>
                                    <div class="col-4 text-end">
                                        <i class="ti ti-check text-success f-36"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <a href="{{ route('admin.subscriptions', ['type' => 'expiring']) }}" class="text-decoration-none">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h3 class="mb-1 text-warning">{{ $expiring }}</h3>
                                    <p class="text-muted mb-0">Expiring Soon</p>
                                </div>
                                <div class="col-4 text-end">
                                    <i class="ti ti-user-exclamation text-warning f-36"></i>
                                </div>
                            </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <a href="{{ route('admin.subscriptions', ['type' => 'expired']) }}" class="text-decoration-none">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h3 class="mb-1 text-danger">{{ $expired }}</h3>
                                    <p class="text-muted mb-0">Expired</p>
                                </div>
                                <div class="col-4 text-end">
                                    <i class="ti ti-x text-danger f-36"></i>
                                </div>
                            </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="mb-0">Subscriptions List</h5>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#createSubscriptionModal">
                                    <i class="feather icon-plus"></i> Create Subscription
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table dt-responsive table-responsive px-1">
                                <table class="table table-striped dt-responsive table-hover nowrap" id="subscriptionsTable"
                                    style="width: 100%">
                                    <thead>
                                            <th>Name</th>
                                            <th>Plan</th>
                                            <th>Amount</th>
                                            <th>Transaction ID</th>
                                            <th>Start Date</th>
                                            <th>End Date</th>
                                            <th>Usage</th>
                                            <th>Status</th>
                                    </thead>
                                    <tbody></tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('modals')
    <div id="deleteSubscriptionModal" class="modal fade" tabindex="-1" role="dialog"
        aria-labelledby="deleteSubscriptionModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteSubscriptionModalTitle">Delete Subscription</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="" method="POST" id="deleteSubscriptionForm">
                    <div class="modal-body">
                        @csrf
                        @method('DELETE')
                        <p>Are you sure you want to delete this subscription? This action cannot be undone.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"> Close</button>
                        <button type="submit" class="btn btn-danger">Delete Subscription</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div id="createSubscriptionModal" class="modal fade" tabindex="-1" role="dialog"
        aria-labelledby="createSubscriptionModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="createSubscriptionModalTitle">Create Subscription</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('admin.subscriptions.store') }}" method="POST">
                    <div class="modal-body">
                        @csrf
                        <input hidden name="id" value="" id="id">
                        <div class="mb-3">
                            <label for="business_id" class="form-label">Business<span
                                    class="text-danger">*</span></label>
                            <select name="business_id" class="form-control" id="business_id" required>
                                <option value="">Select Business</option>
                                @foreach($businesses as $business)
                                    <option value="{{ $business->id }}" {{ old('business_id') == $business->id ? 'selected' : '' }}>
                                        {{ $business->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="plan_id" class="form-label">Plan<span class="text-danger">*</span></label>
                            <select name="plan_id" class="form-control" id="plan_id" required>
                                <option value="">Select Plan</option>
                                @foreach($plans as $plan)
                                    <option value="{{ $plan->id }}" {{ old('plan_id') == $plan->id ? 'selected' : '' }}>
                                        {{ $plan->name }} ({{ $plan->slug }} | ₹ {{ $plan->amount }})
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Create Subscription</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endpush
@push('scripts')
    <script src="{{ asset('assets/js/plugins/dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/responsive.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/choices.min.js') }}"></script>
    <script>
        $(document).ready(function () {

            var routeQuery = new URLSearchParams(window.location.search);
            var type = "";
            if (routeQuery) {
                type = routeQuery.get('type');
            } else {
                type = "";
            }

            $('#subscriptionsTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: "{{ route('admin.datatable.subscriptions') }}?type=" + type,
                    type: 'GET',
                },
                columns: [
                    { data: 'business_name', name: 'business_name' },
                    { data: 'plan_name', name: 'plan_name' },
                    { data: 'amount', name: 'amount' },
                    { data: 'transaction_id', name: 'transaction_id' },
                    { data: 'start_date', name: 'start_date' },
                    { data: 'end_date', name: 'end_date' },
                    { data: 'status', name: 'status' },
                    { data: 'usage', name: 'usage' },
                ],
                order: [[0, 'asc']],
            });

            new Choices('#business_id');
            new Choices('#plan_id');

            $(document).on('click', '.deleteSubscriptionBtn', function () {
                var subscriptionId = $(this).data('id');
                $('#deleteSubscriptionForm').attr('action', "{{ route('admin.subscriptions.destroy', ':id') }}".replace(':id', subscriptionId));
            });
        });
    </script>
@endpush