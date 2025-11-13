<footer class="footer">
    <div class="container title mb-0">
        <div class="row align-items-center wow fadeInUp" data-wow-delay="0.2s">
            <div class="col-md-8">
                <h2 class="mb-3">Need Support?</h2>
                <p class="mb-4 mb-md-0">
                    Have questions? Our expert support team is ready to help. Submit a ticket, and we’ll assist you
                    promptly.
                </p>
            </div>
            <div class="col-md-4 text-md-end">
                <a href="{{ route('contact') }}" class="btn btn-primary">Contact Us</a>
            </div>
        </div>
    </div>
    <div class="border-top border-bottom footer-center">
        <div class="container">
            <div class="row">
                <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
                    <img src="{{ asset('assets/images/logo/' . config('setting.site_logo_light_mode')) }}" alt="logo"
                        width="100" class="img-fluid logo-lg mb-3" />
                    <p class="mb-4">
                        {{ config('setting.site_name') }} is a secure and reliable UPI dynamic QR generation solution,
                        built
                        to simplify online transactions for businesses of all
                        sizes. Fast integration, real-time payments, and trusted by thousands across India.
                    </p>
                </div>
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-sm-4 wow fadeInUp" data-wow-delay="0.6s">
                            {{-- <h5 class="mb-4">Company</h5>
                            <ul class="list-unstyled footer-link">
                                <li>
                                    <a href="https://1.envato.market/xk3bQd" target="_blank">Profile</a>
                                </li>
                                <li>
                                    <a href="https://1.envato.market/Qyre4x" target="_blank">Portfolio</a>
                                </li>
                                <li>
                                    <a href="https://1.envato.market/Py9k4X" target="_blank">Follow Us</a>
                                </li>
                                <li>
                                    <a href="https://phoenixcoded.net" target="_blank">Website</a>
                                </li>
                            </ul> --}}
                        </div>
                        <div class="col-sm-4 wow fadeInUp" data-wow-delay="0.8s">
                        </div>
                        <div class="col-sm-4 wow fadeInUp" data-wow-delay="0.8s">
                            <h5 class="mb-4">Legal</h5>
                            <ul class="list-unstyled footer-link">
                                <li>
                                    <a href="{{ route('page.view', 'privacy') }}">Privacy Policy</a>
                                </li>
                                <li>
                                    <a href="{{ route('page.view', 'terms') }}">Terms & Conditions</a>
                                </li>
                                <li>
                                    <a href="{{ route('page.view', 'refund') }}">Refund Policy</a>
                                </li>
                                <li>
                                    <a href="{{ route('page.view', 'account-access') }}">Account Access Policy</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row flex-column text-muted">
                    <div class="col-12 mt-2">
                        <b>*Important Note:</b> {{ config('setting.site_name') }} is only a dynamic QR generation
                        service. It is not a payment gateway service, nor does it
                        provide UPI ID and UPI Merchant account. Please read our policy and T&C before using our
                        services.
                    </div>
                    <div class="col-12 mt-2">
                        <b>*Disclaimer:</b> {{ config('setting.site_name') }} is not responsible for any financial
                        transactions or agreements made between users and merchant providers. Please ensure to verify
                        all details before proceeding with any payments or services. We do not receive any money from
                        transactions nor do we store any payment information. Our service is solely for generating
                        dynamic QR codes for UPI payments.
                    </div>
                    <div class="col-12 mt-2">
                        <b>*Note:</b> {{ config('setting.site_name') }} is not affiliated with any bank or financial
                        institution. We are an independent service provider offering UPI dynamic QR code generation.
                        Please ensure to comply with all applicable laws and regulations while using our services. All
                        the trademarks and logos used in this service are the property of their respective owners.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row align-items-center text-muted">
            <div class="col my-1 wow fadeInUp" data-wow-delay="0.4s">
                <p class="m-0">© Handcrafted with ❤️ by <a href="https://ableprolaravel.in">ableprolaravel</a></p>
            </div>
            <div class="col-auto my-1">
                <p class="m-0">Copyright © {{ date('Y') == "2025" ? 2025 : "2025 - " . date('Y')  }}. All rights
                    reserved.</p>
                <ul class="list-inline footer-sos-link mb-0 f-18">
                    {{-- <li class="list-inline-item wow animate__fadeInUp" data-wow-delay="0.5s">
                        <a href="https://github.com/Phoenixcoded" target="_blank"><i class="fab fa-github"></i></a>
                    </li>
                    <li class="list-inline-item wow animate__fadeInUp" data-wow-delay="0.7s">
                        <a href="https://dribbble.com/Phoenixcoded" target="_blank"><i class="fab fa-dribbble"></i></a>
                    </li>
                    <li class="list-inline-item wow animate__fadeInUp" data-wow-delay="0.9s">
                        <a href="https://www.youtube.com/@phoenixcoded" target="_blank"><i
                                class="fab fa-youtube"></i></a>
                    </li> --}}
                </ul>
            </div>
        </div>
    </div>
</footer>