@extends('layouts.master')
@section('title')
    Contact Form Submissions
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
                                <li class="breadcrumb-item active" aria-current="page">Contact Form Submissions</li>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h2 class="mb-0">Contact Form Submissions</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table dt-responsive table-responsive px-1">
                                <table class="table table-striped dt-responsive table-hover nowrap" id="businessTable"
                                    style="width: 100%">
                                    <thead>
                                        <th>Created at</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>IP</th>
                                        <th>Assigned to</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </thead>
                                    <tbody>
                                        @if ($submissions->isEmpty())
                                            <tr>
                                                <td colspan="8" class="text-center">No submissions found.</td>
                                            </tr>
                                        @endif
                                        @foreach ($submissions as $submission)
                                            <tr>
                                                <td>{{ $submission->created_at->format('d-m-Y') }}<br>{{ $submission->created_at->format('h:i A') }}
                                                </td>
                                                <td>{{ $submission->name }}</td>
                                                <td>{{ $submission->email }}</td>
                                                <td>{{ $submission->phone }}</td>
                                                <td>{{ $submission->ip_address }}</td>
                                                <td>
                                                    @if ($submission->assigned_user)
                                                        <span
                                                            class="badge text-bg-secondary">{{ $submission->assigned_user->first_name . ' ' . $submission->assigned_user->last_name }}</span>
                                                    @else
                                                        <span class="badge text-bg-danger">Not Assigned</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    @if ($submission->status == 'pending')
                                                        <span class="badge text-bg-danger">New</span>
                                                    @elseif($submission->status == 'contacted')
                                                        <span class="badge text-bg-success">Contacted</span>
                                                    @elseif($submission->status == 'closed')
                                                        <span class="badge text-bg-primary">Closed</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <span data-bs-toggle="modal"
                                                        data-bs-target="#viewSubmissionModal{{ $submission->id }}"
                                                        class="view-svg">
                                                        <a href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="View Submission">
                                                            <i data-feather="eye"></i>
                                                        </a>
                                                    </span>
                                                    <div id="viewSubmissionModal{{ $submission->id }}" class="modal fade"
                                                        tabindex="-1" role="dialog"
                                                        aria-labelledby="viewSubmissionModalTitle{{ $submission->id }}"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog modal-lg modal-dialog-centered"
                                                            role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title"
                                                                        id="viewSubmissionModalTitle{{ $submission->id }}">
                                                                        View Submission</h5>
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <form
                                                                    action="{{ route('admin.contact-form.submissions.update', $submission->id) }}"
                                                                    method="POST">
                                                                    @csrf
                                                                    @method('PUT')
                                                                    <div class="modal-body">
                                                                        <div class="mb-3">
                                                                            <label for="userAgent" class="form-label">User-Agent</label>
                                                                            <input type="text" class="form-control" value="{{ $submission->user_agent }}" readonly>
                                                                        </div>
                                                                        <div class="mb-3">
                                                                                <label for="message" class="form-label">Message</label>
                                                                                <textarea class="form-control" rows="4" readonly>{{ $submission->message }}</textarea>
                                                                        </div>
                                                                        <div class="mb-3">
                                                                                <label for="name" class="form-label">Assigned to</label>
                                                                                <select class="form-select assignedTo"
                                                                                    id="assignedTo" name="assigned_to">
                                                                                    <option value="" selected
                                                                                        disabled>Select User</option>
                                                                                    @foreach ($adminUsers as $user)
                                                                                        <option value="{{ $user->id }}"
                                                                                            {{ $submission->assigned_to == $user->id ? 'selected' : '' }}>
                                                                                            {{ $user->first_name . ' ' . $user->last_name . ' (' . $user->phone . ')' }}
                                                                                        </option>
                                                                                    @endforeach
                                                                                </select>
                                                                        </div>
                                                                        <div class="mb-3">
                                                                                <label for="status" class="form-label">Status</label>
                                                                                <select class="form-select status"
                                                                                    name="status" id="status">
                                                                                    <option value="pending"
                                                                                        {{ $submission->status == 'pending' ? 'selected' : '' }}>
                                                                                        New</option>
                                                                                    <option value="contacted"
                                                                                        {{ $submission->status == 'contacted' ? 'selected' : '' }}>
                                                                                        Contacted</option>
                                                                                    <option value="closed"
                                                                                        {{ $submission->status == 'closed' ? 'selected' : '' }}>
                                                                                        Closed</option>
                                                                                </select>
                                                                        </div>
                                                                        <div class="mb-3">
                                                                                <label for="remarks" class="form-label">Remarks</label>
                                                                                <textarea class="form-control" name="remarks" id="remarks" rows="3">{{ $submission->remarks }}</textarea>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary"
                                                                            data-bs-dismiss="modal">Close</button>
                                                                        <button type="submit"
                                                                            class="btn btn-primary">Update</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="mt-3">
                                    {{ $submissions->appends(request()->except('page'))->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('modals')
@endpush
@push('scripts')
    <script src="{{ asset('assets/js/plugins/choices.min.js') }}"></script>

    <script>
        $(document).ready(function() {
            new Choices('.assignedTo');
            new Choices('.status');
        });
    </script>
@endpush
