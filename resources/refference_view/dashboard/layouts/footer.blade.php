<footer class="pc-footer">
    <div class="footer-wrapper container-fluid">
        <div class="row">
            <div class="col my-1">
                <p class="m-0">© {{ config('setting.site_name') }}</p>
            </div>
            <div class="col-auto my-1">
                <ul class="list-inline footer-link mb-0">
                    @if(auth()->user())
                        @if (auth()->user()->system_role == "user")
                            <li class="list-inline-item"><a href="{{ route('dashboard') }}">Home</a></li>
                        @else
                            <li class="list-inline-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        @endif
                    @else
                        <li class="list-inline-item"><a href="{{ route('welcome') }}">Home</a></li>

                    @endif
                    <li class="list-inline-item"><a href="{{ route('contact') }}" target="_blank">Support</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>