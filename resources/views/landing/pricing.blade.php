@extends('landing.layouts.master')
@section('title')
    Pricing
@endsection
@section('main_content')
    <div class="mt-5">
        hey
    </div>
    <div class="m-auto">
        <div class="container mt-5">
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h2 class="mb-0">Pricing</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content">
                <div class="row my-5 text-center">
                    <div class="col">
                        <h3 class="mb-3">We have a variety of pricing plans to suit your needs.</h3>
                        <p class="text-muted">Select a plan that suits your needs. All new registrations come with a 14-day
                            free trial.</p>
                    </div>
                </div>
                <div class="card border-0 shadow-none bg-transparent">
                    <div class="card-body px-0">
                        <div class="row align-items-center mb-3">
                            <div class="col">
                                <h5></h5>
                            </div>
                            <div class="col-auto">
                                <ul class="nav nav-pills nav-price" id="pills-tab" role="tablist">
                                    <li class="nav-item" role="presentation"><button class="nav-link active" id="pills-monthly-tab"
                                            data-bs-toggle="pill" data-bs-target="#pills-monthly" type="button" role="tab"
                                            aria-controls="pills-monthly" aria-selected="true">Monthly</button></li>
                                    <li class="nav-item" role="presentation"><button class="nav-link" id="pills-quarterly-tab"
                                            data-bs-toggle="pill" data-bs-target="#pills-quarterly" type="button" role="tab"
                                            aria-controls="pills-quarterly" aria-selected="false" tabindex="-1">Quarterly <span
                                                class="badge bg-primary ms-2">Save upto
                                                10%</span></button></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-monthly" role="tabpanel" aria-labelledby="pills-monthly-tab"
                        tabindex="0">
                        <div class="row justify-content-center align-items-center"><!-- [ sample-page ] start -->
                            @foreach ($plans->where('interval', 'monthly') as $plan)
                                <div class="col-md-6 col-lg-3">
                                    <div class="card price-card @if ($plan->popular) price-popular @endif">
                                        <div class="card-body">
                                            <div class="price-head">
                                                @if ($plan->popular)
                                                    <span class="badge f-12 bg-success mb-3">Popular</span>
                                                @endif
                                                @if ($plan->discount_amount > 0)
                                                    <span class="badge f-12 bg-warning mb-3">Save @if ($plan->discount_type == 'percentage')
                                                        {{ (int) $plan->discount_amount }}%
                                                    @else
                                                            ₹ {{ $plan->discount_amount }}
                                                        @endif
                                                    </span>
                                                @endif
                                                <h5 class="mb-0">{{ $plan->name }}</h5>
                                                @if ($plan->discount_amount > 0)
                                                    <div class="price-price mt-4 mb-2">
                                                        <span class="text-decoration-line-through f-w-600 f-s-18 mb-2">₹
                                                            {{ $plan->amount }}</span>
                                                        <div>
                                                            @if ($plan->discount_type == 'percentage')
                                                                ₹
                                                                {{ number_format($plan->amount - ($plan->amount * $plan->discount_amount) / 100, 0, '.', '') }}
                                                            @else
                                                                ₹
                                                                {{ number_format($plan->amount - $plan->discount_amount, 0, '.', '') }}
                                                            @endif
                                                        </div>

                                                    </div>
                                                @else
                                                    <div class="price-price mt-4 mb-2">₹ {{ number_format($plan->amount, 0, '.', '') }} </div>
                                                @endif
                                                <span class="text-muted f-w-600 f-18">30
                                                    days</span>
                                                <div class="d-grid">
                                                    <form action="{{ route('plans.subscribe') }}" method="POST">
                                                        @csrf
                                                        <input type="hidden" name="plan_id" value="{{ $plan->id }}">
                                                        @if ($plan->popular)
                                                            <button type="submit" class="btn btn-primary mt-4">Subscribe
                                                                Now</button>
                                                        @else
                                                            <button type="submit" class="btn btn-outline-secondary mt-4">Subscribe Now</button>
                                                        @endif
                                                    </form>
                                                </div>
                                            </div>
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item enable d-flex align-items-start">
                                                    <i data-feather="check" class="text-success me-3 mt-1"></i>
                                                    <span class="flex-grow-1 text-start">Realtime Transactions</span>
                                                </li>
                                                <li class="list-group-item enable d-flex align-items-start">
                                                    <i data-feather="check" class="text-success me-3 mt-1"></i>
                                                    <span class="flex-grow-1 text-start"><b>0*</b> Transaction Fee</span>
                                                </li>
                                                <li class="list-group-item enable d-flex align-items-start">
                                                    <i data-feather="check" class="text-success me-3 mt-1"></i>
                                                    <span
                                                        class="flex-grow-1 text-start"><b>{{ $plan->qr_code_limit != 0 ? $plan->qr_code_limit : 'Unlimited' }}</b>
                                                        QR
                                                        Transactions^</span>
                                                </li>
                                                <li class="list-group-item enable d-flex align-items-start">
                                                    <i data-feather="check" class="text-success me-3 mt-1"></i>
                                                    <span
                                                        class="flex-grow-1 text-start"><b>{{ $plan->webhook_limit != 0 ? $plan->webhook_limit : 'Unlimited' }}</b>
                                                        @php
                                                            $plural =
                                                                $plan->webhook_limit > 1 || $plan->webhook_limit == 0
                                                                ? 's'
                                                                : '';
                                                        @endphp
                                                        Webhook{{ $plural }} & API Token{{ $plural }}</span>
                                                </li>
                                                <li class="list-group-item enable d-flex align-items-start">
                                                    <i @if (!$plan->upi_links) data-feather="x" class="text-danger f-w-800 me-3" @else
                                                    data-feather="check" class="text-success f-w-800 me-3" @endif></i>
                                                    <span class="flex-grow-1 text-start">UPI Direct Links** (Pay via
                                                        Links)</span>
                                                </li>
                                                <li class="list-group-item enable d-flex align-items-start">
                                                    <i @if ($plan->show_branding) data-feather="x" class="text-danger f-w-800 me-3" @else
                                                    data-feather="check" class="text-success f-w-800 me-3" @endif></i>
                                                    <span class="flex-grow-1 text-start">No {{ config('setting.site_name') }}
                                                        Branding</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-quarterly" role="tabpanel" aria-labelledby="pills-quarterly-tab" tabindex="0">
                        <div class="row justify-content-center align-items-center"><!-- [ sample-page ] start -->
                            @foreach ($plans->where('interval', 'quarterly') as $plan)
                                <div class="col-md-6 col-lg-3">
                                    <div class="card price-card @if ($plan->popular) price-popular @endif">
                                        <div class="card-body">
                                            <div class="price-head">
                                                @if ($plan->popular)
                                                    <span class="badge f-12 bg-success mb-3">Popular</span>
                                                @endif
                                                @if ($plan->discount_amount > 0)
                                                    <span class="badge f-12 bg-warning mb-3">Save @if ($plan->discount_type == 'percentage')
                                                        {{ (int) $plan->discount_amount }}%
                                                    @else
                                                            ₹ {{ $plan->discount_amount }}
                                                        @endif
                                                    </span>
                                                @endif
                                                <h5 class="mb-0">{{ $plan->name }}</h5>
                                                @if ($plan->discount_amount > 0)
                                                    <div class="price-price mt-4 mb-2">
                                                        <span class="text-decoration-line-through f-w-600 f-s-18 mb-2">₹
                                                            {{ $plan->amount }}</span>
                                                        <div>
                                                            @if ($plan->discount_type == 'percentage')
                                                                ₹
                                                                {{ number_format($plan->amount - ($plan->amount * $plan->discount_amount) / 100, 0, '.', '') }}
                                                            @else
                                                                ₹
                                                                {{ number_format($plan->amount - $plan->discount_amount, 0, '.', '') }}
                                                            @endif
                                                        </div>

                                                    </div>
                                                @else
                                                    <div class="price-price mt-4 mb-2">₹ {{ number_format($plan->amount, 0, '.', '') }} </div>
                                                @endif
                                                <span class="text-muted f-w-600 f-18">90
                                                    days</span>
                                                <div class="d-grid">
                                                    <form action="{{ route('plans.subscribe') }}" method="POST">
                                                        @csrf
                                                        <input type="hidden" name="plan_id" value="{{ $plan->id }}">
                                                        @if ($plan->popular)
                                                            <button type="submit" class="btn btn-primary mt-4">Subscribe
                                                                Now</button>
                                                        @else
                                                            <button type="submit" class="btn btn-outline-secondary mt-4">Subscribe Now</button>
                                                        @endif
                                                    </form>
                                                </div>
                                            </div>
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item enable d-flex align-items-start">
                                                    <i data-feather="check" class="text-success me-3 mt-1"></i>
                                                    <span class="flex-grow-1 text-start">Realtime Transactions</span>
                                                </li>
                                                <li class="list-group-item enable d-flex align-items-start">
                                                    <i data-feather="check" class="text-success me-3 mt-1"></i>
                                                    <span class="flex-grow-1 text-start"><b>0*</b> Transaction Fee</span>
                                                </li>
                                                <li class="list-group-item enable d-flex align-items-start">
                                                    <i data-feather="check" class="text-success me-3 mt-1"></i>
                                                    <span
                                                        class="flex-grow-1 text-start"><b>{{ $plan->qr_code_limit != 0 ? $plan->qr_code_limit : 'Unlimited' }}</b>
                                                        QR
                                                        Transactions^</span>
                                                </li>
                                                <li class="list-group-item enable d-flex align-items-start">
                                                    <i data-feather="check" class="text-success me-3 mt-1"></i>
                                                    <span
                                                        class="flex-grow-1 text-start"><b>{{ $plan->webhook_limit != 0 ? $plan->webhook_limit : 'Unlimited' }}</b>
                                                        @php
                                                            $plural =
                                                                $plan->webhook_limit > 1 || $plan->webhook_limit == 0
                                                                ? 's'
                                                                : '';
                                                        @endphp
                                                        Webhook{{ $plural }} & API Token{{ $plural }}</span>
                                                </li>
                                                <li class="list-group-item enable d-flex align-items-start">
                                                    <i @if (!$plan->upi_links) data-feather="x" class="text-danger f-w-800 me-3" @else
                                                    data-feather="check" class="text-success f-w-800 me-3" @endif></i>
                                                    <span class="flex-grow-1 text-start">UPI Direct Links** (Pay via
                                                        Links)</span>
                                                </li>
                                                <li class="list-group-item enable d-flex align-items-start">
                                                    <i @if ($plan->show_branding) data-feather="x" class="text-danger f-w-800 me-3" @else
                                                    data-feather="check" class="text-success f-w-800 me-3" @endif></i>
                                                    <span class="flex-grow-1 text-start">No {{ config('setting.site_name') }}
                                                        Branding</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div><!-- [ Main Content ] end -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-center mt-5">
                            <p class="text-muted"><b>*0 Transaction Fee:</b> We do not charge any transaction fee. Though it
                                depends on
                                your merchant provider.</p>
                            <p class="text-muted"><b>**UPI Direct Links:</b> Only PhonePe Business & Paytm Business supported.
                            </p>
                            <p class="text-muted"><b>^QR Transactions:</b> Transactions counted according to successful order creation,
                                including failed and pending transactions.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
