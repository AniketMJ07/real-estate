@extends('landing.layouts.master')
@section('title')
    Contact Us
@endsection
@section('main_content')
    <div class="mt-5">
        hey
    </div>
    <section class="contact-hero" style="background-image: url(../assets/images/landing/img-headerbg.jpg)">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-md-8">
                    <h2>Have any questions? Talk to our Experts</h2>
                    <p class="text-muted">We'd love to hear from you. Please fill out the form below to get in touch with
                        us.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="contact-form bg-white">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-6 col-md-8 col-sm-10">
                    @include('widgets.form-inline-alerts')
                    <form action="{{ route('contact.store') }}" method="POST" id="contactForm">
                        @csrf
                        <div class="row my-4">
                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="form-label">Name</label>
                                    <input type="text" class="form-control" placeholder="What do we call you?" name="name"
                                        value="{{ old('name') }}" />
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="form-label">Email</label>
                                    <input type="email" class="form-control" placeholder="name@company.com" name="email"
                                        value="{{ old('email') }}" />
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="form-label">Mobile Number</label>
                                    <input type="text" class="form-control" placeholder="10-digit Mobile Number"
                                        name="phone" value="{{ old('phone') }}" minlength="10" maxlength="10" />
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="form-label">Message</label>
                                    <textarea class="form-control" rows="4" placeholder="Your message to us"
                                        name="message">{{ old('message') }}</textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                {!! NoCaptcha::display(['data-callback' => 'recaptchaCallback']) !!}
                            </div>
                            <div class="col-12">
                                <div class="mt-4 d-grid">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection