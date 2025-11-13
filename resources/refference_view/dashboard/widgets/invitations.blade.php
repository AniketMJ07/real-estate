@if($invites->count() > 0)
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Accept Invitations</h5>
                    </div>
                </div>
                <div class="card-body">
                    <div class="card-block row">
                        <div class="table table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Business</th>
                                        <th>Role</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($invites as $invite)
                                        <tr>
                                            <td>{{ $invite->business->name }}</td>
                                            <td class="text-muted text-capitalize">{{ $invite->role }}</td>
                                            <td>
                                                <button class="btn btn-success btn-sm" id="acceptInvitationBtn"
                                                    data-token="{{ $invite->token }}">
                                                    <i class="ti ti-check"></i> Accept
                                                </button>
                                                <button class="btn btn-danger btn-sm" id="rejectInvitationBtn"
                                                    data-token="{{ $invite->token }}">
                                                    <i class="ti ti-x"></i> Reject
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
@push('modals')
    <div id="invitationAcceptModal" class="modal fade" tabindex="-1" role="dialog"
        aria-labelledby="invitationAcceptModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Accept Invitation</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure you want to accept this invitation? You will be added to the business with the specified
                    role.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"> Cancel</button>
                    <form id="acceptInvitationForm" method="GET">
                        @csrf
                        <input type="hidden" name="token" id="acceptToken">
                        <button type="submit" class="btn btn-success">Accept</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div id="invitationRejectModal" class="modal fade" tabindex="-1" role="dialog"
        aria-labelledby="invitationRejectModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Reject Invitation</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure you want to reject this invitation? This action is irreversible and business will need to
                    invite you again if you change your mind.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <form id="rejectInvitationForm" method="POST">
                        @csrf
                        <input type="hidden" name="token" id="rejectToken">
                        <button type="submit" class="btn btn-danger">Reject</button>
                    </form>
                </div>
            </div>
        </div>
@endpush
    @push('scripts')
        <script>
            $(document).ready(function () {
                $('#acceptInvitationBtn').on('click', function () {
                    var token = $(this).data('token');
                    $('#acceptInvitationForm').attr('action', '{{ route("business.invite.accept") }}');
                    $('#acceptToken').val(token);
                    $('#invitationAcceptModal').modal('show');
                });
                $('#rejectInvitationBtn').on('click', function () {
                    var token = $(this).data('token');
                    $('#rejectInvitationForm').attr('action', '{{ route("business.invite.reject") }}');
                    $('#rejectToken').val(token);
                    $('#invitationRejectModal').modal('show');
                });
            });
        </script>
    @endpush