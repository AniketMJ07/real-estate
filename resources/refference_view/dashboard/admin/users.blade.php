@extends('layouts.master')
@section('title')
Users
@endsection
@push('head_css')
<link rel="stylesheet" href="{{ asset('assets/css/plugins/bootstrap-switch-button.min.css') }}" />
@endpush
@section('main_content')
    @include('widgets.loader')
    <div class="pc-container">
        <div class="pc-content">
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Admin Area</a>
                                <li class="breadcrumb-item active" aria-current="page">Users</li>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h2 class="mb-0">Users</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex justify-content-end align-items-right">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#createUserModal">
                                    <i class="feather icon-plus"></i> Create User
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table dt-responsive table-responsive px-1">
                                <table class="table table-striped dt-responsive table-hover nowrap" id="userTable" style="width: 100%">
                                    <thead>
                                        <th>ID</th>
                                        <th>Created at</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Verified</th>
                                        <th>Phone</th>
                                        <th>Role</th>
                                        <th>Status</th>
                                        <th>Action</th>
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
<div id="createUserModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="createUserModalTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createUserModalTitle">Create User</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('admin.users.store') }}" method="POST">
                <div class="modal-body">
                    @csrf
                    <input hidden name="id" value="" id="id">
                    <div class="mb-3">
                        <label for="first_name" class="form-label">First Name<span class="text-danger">*</span></label>
                        <input type="text" name="first_name" class="form-control" id="first_name"
                            value="{{ old('first_name') }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="last_name" class="form-label">Last Name</label>
                        <input type="text" name="last_name" class="form-control" id="last_name"
                            value="{{ old('last_name') }}">
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone<span class="text-danger">*</span></label>
                        <input type="tel" name="phone" class="form-control" id="phone"
                            value="{{ old('phone') }}" required minlength="10" maxlength="10">
                        <span class="text-muted">
                            Please enter a valid 10-digit mobile number.
                        </span>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email<span class="text-danger">*</span></label>
                        <input type="email" name="email" class="form-control" id="email"
                            value="{{ old('email') }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password<span class="text-danger">*</span></label>
                        <input type="password" name="password" class="form-control" id="password" required minlength="8">
                    </div>
                    <div class="mb-3">
                        <label for="email_verified_at" class="form-label">Email Verified</label><br>
                        <div class="form-check form-switch">
                            <input type="checkbox" class="form-check-input input-success" id="email_verified_at" name="email_verified_at">
                           
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="system_role" class="form-label">System Role</label><br>
                        <div class="form-check form-switch">
                            <input type="checkbox" class="form-check-input input-success" id="system_role" name="system_role">
                            <label class="form-check-label" for="system_role">Admin</label>
                        </div>
                    </div>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" id="createUser_button" class="btn btn-primary">Create User</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endpush
@push('scripts')
    <script src="{{ asset('assets/js/plugins/dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/bootstrap-switch-button.min.js') }}"></script>

    <script>
        $(document).ready(function() {
            const table = $('#userTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('admin.datatable.users') }}",
                columns: [{
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'created_at',
                        name: 'created_at'
                    },
                    {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'email',
                        name: 'email'
                    },
                    {
                        data: 'verified',
                        name: 'verified'
                    },
                    {
                        data: 'phone',
                        name: 'phone'
                    },
                    {
                        data: 'system_role',
                        name: 'system_role'
                    },
                    {
                        data: 'status',
                        name: 'status'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    }
                ],
                columnDefs: [{
                    targets: 0,
                    visible: false // Hide ID column
                }],
                order: [
                    [0, 'desc']
                ],
                searching: true,
                paging: true,
                lengthChange: true,
                pageLength: 10,
                language: {
                    search: "_INPUT_",
                    searchPlaceholder: "Search...",
                },
                drawCallback: function (settings) {
                    feather.replace();
                }
            });

            table.on('draw.dt responsive-display.dt', function () {
                feather.replace(); // re-render icons
                $('[data-bs-toggle="tooltip"]').tooltip('dispose').tooltip(); // re-init tooltips
            });

            // $('#userTable').on('draw.dt', function () {
            //     $('[data-toggle="switchbutton"]').bootstrapSwitchButton(); // re-init
            // });

            // Open edit modal and change it to edit mode
            $(document).on('click', '.editUser', function() {
                const id = $(this).data('id');
                const data = $(this).data('data');
                const firstName = data.first_name;
                const lastName = data.last_name;
                const phone = data.phone;
                const email = data.email;
                const email_verified_at = data.email_verified_at;
                console.log(email_verified_at)
                const system_role = $(this).data('sysrole');

                $('#createUserModalTitle').text('Edit User');
                var updateUrl = "{{ route('admin.users.update', ':id') }}".replace(':id', id);
                $('#createUserModal form').attr('action', updateUrl);
                // Remove any previous _method input
                $('#createUserModal form input[name="_method"]').remove();
                // Add PUT method for update
                $('#createUserModal form').append('<input type="hidden" name="_method" value="POST">');
                $('#id').val(id);
                $('#first_name').val(firstName);
                $('#last_name').val(lastName);
                $('#phone').val(phone);
                $('#email').val(email);
                $('#password').val(''); // Leave password blank for edit
                $('#password').attr('required', false); // Remove required for edit
                $('#system_role').prop('checked', system_role == 'admin' ? "checked" : false).trigger('change');
                $('#email_verified_at').prop('checked', email_verified_at != null ? "checked" : false).trigger('change');
                 $('#createUser_button').text('Update User');
                $('#createUserModal').modal('show');
            });

            // Reset modal to create mode when closed
            $('#createUserModal').on('hidden.bs.modal', function() {
                $('#createUserModalTitle').text('Create User');
                $('#createUserModal form').attr('action', "{{ route('admin.users.store') }}");
                $('#createUserModal form input[name="_method"]').remove();
                $('#password').attr('required', true);
                 $('#createUser_button').text('Create User');
                $('#createUserModal form')[0].reset();
            });

            $(document).on('change', '.status_switch', function() {

                const userId = $(this).data('id');
                const isActive = $(this).prop('checked') ? 1 : 0;

                $.ajax({
                    url: "{{ route('admin.users.ban.toggle', ':id') }}".replace(':id', userId),
                    method: 'PUT',
                    data: {
                        _token: '{{ csrf_token() }}',
                    },
                    success: function(response) {
                        if (response.success) {
                            $(this).attr('checked', response.status);
                            toastr.success(response.message);
                        } else {
                            $(this).attr('checked', response.status);
                            toastr.error(response.message);
                        }
                    },
                    error: function(xhr) {
                        $(this).attr('checked', response.status);
                        toastr.error('An error occurred while updating status.');
                    }
                });
            });
        });
    </script>
@endpush