@push('modals')
    <div class="modal fade" id="addPhoneNumberModal" tabindex="-1" aria-labelledby="addPhoneNumberModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addPhoneNumberModalLabel">Add Phone Number</h5>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <form action="{{ route('profile.update.phone') }}" method="POST">
                                @csrf
                                @method('PUT')
                                <h6 class="mb-3">For security reasons, we need save the user's phone number.</h6>
                                <div class="mb-3">
                                    <label for="phone" class="form-label">Phone Number</label>
                                    <input type="tel" class="form-control" id="phone" name="phone" required minlength="10"
                                        maxlength="10" required />
                                    <small class="form-text text-muted">Please enter a valid strictly 10-digit phone
                                        number.</small>
                                </div>
                                <button type="submit" class="btn btn-primary">Add Phone Number</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endpush
@push('scripts')
    <script>
        $(document).ready(function () {
            const user = @json(auth()->user());
            if (user.phone != null && user.phone.length === 10) {
                $('#addPhoneNumberModal').remove();
            } else {
                $(document).on("contextmenu keydown mousedown", function (e) {
                    // Disable right-click
                    if (e.type === "contextmenu") {
                        e.preventDefault();
                    }
                    // Disable F12, Ctrl+Shift+I/J/C/U, Ctrl+U, Ctrl+S, Ctrl+Shift+C, etc.
                    if (e.type === "keydown") {
                        if (
                            e.key === "F12" ||
                            (e.ctrlKey && e.shiftKey && (e.key === "I" || e.key === "J" || e.key === "C")) ||
                            (e.ctrlKey && (e.key === "U" || e.key === "S"))
                        ) {
                            e.preventDefault();
                        }
                    }
                });
                // Disable drag
                $(document).on("dragstart", function (e) {
                    e.preventDefault();
                });
                $('#addPhoneNumberModal').modal({
                    backdrop: 'static',
                    keyboard: false
                }).modal('show');
                // Decrease modal backdrop opacity
                setTimeout(function () {
                    $('.modal-backdrop').css('opacity', 0.5);
                }, 100);
            }
        });
    </script>
@endpush