@extends('layouts.master')
@section('title')
Dashboard
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
                            <li class="breadcrumb-item" aria-current="page"><a href="{{ route('dashboard') }}">Home</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h3 class="mb-0">Welcome, {{ auth()->user()->first_name }} 👋🏻</h3>
                            <p class="text-muted mb-0">A little glance at what's happening at
                                {{ config('setting.site_name') }} today
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-1 text-primary">{{ $users }}</h3>
                                <p class="text-muted mb-0">Users</p>
                            </div>
                            <div class="col-4 text-end">
                                <i class="ti ti-user text-primary f-36"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-1">{{ $businesses }}</h3>
                                <p class="text-muted mb-0">Businesses</p>
                            </div>
                            <div class="col-4 text-end">
                                <i class="ti ti-building-store text-default f-36"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-1 text-warning">{{ $activeSubscriptions }}</h3>
                                <p class="text-muted mb-0">Subscriptions</p>
                            </div>
                            <div class="col-4 text-end">
                                <i class="ti ti ti-report-money text-warning f-36"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-1 text-success d-none" id="lifetime-earnings">{{ '₹ 0' }}</h3>
                                <button class="btn btn-outline-secondary btn-sm" id="lifetime-earnings-btn">
                                    <i class="ti ti-refresh"></i> Show
                                </button>
                                <p class="text-muted mb-0">Lifetime Earnings</p>
                            </div>
                            <div class="col-4 text-end">
                                <i class="ti ti-currency-rupee text-success f-36"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @php
        $merchantStats = [
        [
        'label' => 'Paytm',
        'count' => $chart['merchants']['data']['paytm']['count'] ?? 0,
        'img' => 'https://play-lh.googleusercontent.com/IWU8HM1uQuW8wVrp6XpyOOJXvb_1tDPUDAOfkrl83RZPG9Ww3dCY9X1AV6T1atSvgXc',
        ],
        [
        'label' => 'HDFC',
        'count' => $chart['merchants']['data']['hdfc']['count'] ?? 0,
        'img' => 'https://companieslogo.com/img/orig/HDB-bb6241fe.png?t=1720244492',
        ],
        [
        'label' => 'PhonePe',
        'count' => $chart['merchants']['data']['phonepe']['count'] ?? 0,
        'img' => 'https://play-lh.googleusercontent.com/DIj92f1Tkfxm8rOTqPhlMtGsz8bboRju5v2V5ykxdGfpIAN4kTbNFfgBxpcFt5nY3KQ=w240-h480-rw',
        ],
        [
        'label' => 'BharatPe',
        'count' => $chart['merchants']['data']['bharatpe']['count'] ?? 0,
        'img' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT9VyYDlbpEDRsn56QvVuu9rQRbsHkiEfmxcA&s',
        ],
        [
        'label' => 'Google Pay',
        'count' => $chart['merchants']['data']['google']['count'] ?? 0,
        'img' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTAFyk2Hu-hbJkgcF7nkVkuxTwwYZztsPc_wQ&s',
        ],
        [
        'label' => 'Yono SBI',
        'count' => $chart['merchants']['data']['yono']['count'] ?? 0,
        'img' => 'https://play-lh.googleusercontent.com/VKW7jBBa6uJuDyuQxzA1hkwJqMNq24AV6rHoxv2s5jS48Yg50nZXGA5anEOPfrEXZPo',
        ],
        ];
        @endphp
        <div class="row">
            @foreach($merchantStats as $merchant)
            <div class="col-6 col-lg-2">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-1">{{ $merchant['count'] }}</h3>
                                <p class="text-muted mb-0">{{ $merchant['label'] }}</p>
                            </div>
                            <div class="col-4 text-end">
                                <img src="{{ $merchant['img'] }}" class="img-fluid rounded"
                                    alt="{{ $merchant['label'] }}" width="50">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="row">
            <div class="col-12 col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Last 15 Days Turnover</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div id="last-15-days-amount"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Last 15 Days Transactions</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div id="last-15-days-count"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h5 class="">Merchant Share</h5>
                    </div>
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-12">
                                <div id="merchant-share-graph"></div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <ul class="list-group list-group-flush border-top-0 w-100">
                                        <li class="list-group-item">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <h6 class="">Paytm </h6>
                                                <h6 class="">{{ $chart['merchants']['data']['paytm']['share'] }}%</h6>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <h6 class="">HDFC </h6>
                                                <h6 class="">{{ $chart['merchants']['data']['hdfc']['share'] }}%</h6>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <h6 class="">PhonePe </h6>
                                                <h6 class="">{{ $chart['merchants']['data']['phonepe']['share'] }}%</h6>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-6">
                                    <ul class="list-group list-group-flush border-top-0 w-100">
                                        <li class="list-group-item">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <h6 class="">BharatPe </h6>
                                                <h6 class="">{{ $chart['merchants']['data']['bharatpe']['share'] }}%
                                                </h6>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <h6 class="">Gpay </h6>
                                                <h6 class="">{{ $chart['merchants']['data']['google']['share'] }}%</h6>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <h6 class="">Yono SBI </h6>
                                                <h6 class="">{{ $chart['merchants']['data']['yono']['share'] }}%</h6>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5>New Users (non-business)</h5>
                            <a class="btn btn-primary" href="{{ route('admin.users') }}">
                                <i class="feather icon-plus"></i> View All
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush border-top-0">
                            @if($usersWithoutBusiness->count() > 0)
                            @foreach ($usersWithoutBusiness as $user)
                            <li class="list-group-item">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 me-4">
                                        @php
                                        $initials = strtoupper(substr($user->first_name, 0, 1) . substr($user->last_name, 0, 1));
                                        $gradients = [
                                        'linear-gradient(135deg, #667eea 0%, #764ba2 100%)',
                                        'linear-gradient(135deg, #f7971e 0%, #ffd200 100%)',
                                        'linear-gradient(135deg, #f857a6 0%, #ff5858 100%)',
                                        'linear-gradient(135deg, #43cea2 0%, #185a9d 100%)',
                                        'linear-gradient(135deg, #30cfd0 0%, #330867 100%)',
                                        'linear-gradient(135deg, #ee9ca7 0%, #ffdde1 100%)',
                                        'linear-gradient(135deg, #ff9966 0%, #ff5e62 100%)',
                                        'linear-gradient(135deg, #56ab2f 0%, #a8e063 100%)',
                                        'linear-gradient(135deg, #614385 0%, #516395 100%)',
                                        'linear-gradient(135deg, #eecda3 0%, #ef629f 100%)',
                                        ];
                                        $gradient = $gradients[$user->id % count($gradients)];
                                        @endphp
                                        <div class="user-avtar rounded-circle wid-70 hie-70 d-flex align-items-center justify-content-center p-2"
                                            style="background: {{ $gradient }}; color: #fff; font-weight: semibold; font-size: 2rem;">
                                            {{ $initials }}
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 mx-2">
                                        <h6 class="mb-1">{{ $user->first_name . " " . $user->last_name }}</h6>
                                        <p class="mb-0">Email: {{ $user->email }}</p>
                                        <p class="mb-0">Phone: {{ $user->phone }}</p>
                                        @if($user->email_verified_at != null)
                                        <p class="mb-0 badge text-bg-success">Verified</p>
                                        @else
                                        <p class="mb-0 badge text-bg-danger">Not Verified</p>
                                        @endif
                                    </div>
                                    <div class="flex-shrink-0">
                                        <p class="text-muted mb-0">
                                            {{ $user->created_at->format('d-m-Y') }}<br>{{ $user->created_at->format('h:i A') }}
                                        </p>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                            @else
                            <li class="list-group-item">
                                <div class="d-flex justify-content-center align-items-center">
                                    <p class="text-muted f-w-600">No New Users without business</p>
                                </div>
                            </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5>New Businesses</h5>
                            <a class="btn btn-primary" href="{{ route('admin.businesses') }}">
                                <i class="feather icon-plus"></i> View All
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush border-top-0">
                            @foreach ($newBusinesses as $business)
                            <li class="list-group-item">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 me-4">
                                        @if ($business->logo != null)
                                        <img src="{{ asset('storage/' . $business->logo) }}" alt="business-logo"
                                            class="user-avtar rounded-circle wid-70 hie-70" />
                                        @else
                                        @php
                                        $words = preg_split('/\s+/', trim($business->name));
                                        if (count($words) >= 2) {
                                        $initials = strtoupper(substr($words[0], 0, 1) . substr($words[1], 0, 1));
                                        } else {
                                        $initials = strtoupper(substr($business->name, 0, 2));
                                        }
                                        $gradients = [
                                        'linear-gradient(135deg, #667eea 0%, #764ba2 100%)',
                                        'linear-gradient(135deg, #f7971e 0%, #ffd200 100%)',
                                        'linear-gradient(135deg, #f857a6 0%, #ff5858 100%)',
                                        'linear-gradient(135deg, #43cea2 0%, #185a9d 100%)',
                                        'linear-gradient(135deg, #30cfd0 0%, #330867 100%)',
                                        'linear-gradient(135deg, #ee9ca7 0%, #ffdde1 100%)',
                                        'linear-gradient(135deg, #ff9966 0%, #ff5e62 100%)',
                                        'linear-gradient(135deg, #56ab2f 0%, #a8e063 100%)',
                                        'linear-gradient(135deg, #614385 0%, #516395 100%)',
                                        'linear-gradient(135deg, #eecda3 0%, #ef629f 100%)',
                                        ];
                                        $gradient = $gradients[$business->id % count($gradients)];
                                        @endphp
                                        <div class="user-avtar rounded-circle wid-70 hie-70 d-flex align-items-center justify-content-center p-2"
                                            style="background: {{ $gradient }}; color: #fff; font-weight: semibold; font-size: 2rem;">
                                            {{ $initials }}
                                        </div>
                                        @endif
                                    </div>
                                    <div class="flex-grow-1 mx-2">
                                        <h6 class="mb-1">{{ $business->name }}</h6>
                                        @if($business->owner)
                                        <p class="mb-0">Owner:
                                            {{ $business->owner->first_name . " " . $business->owner->last_name }}
                                        </p>
                                        <p class="mb-0">Email: {{ $business->owner->email }}</p>
                                        <p class="mb-0">Phone: {{ $business->owner->phone }}</p>
                                        @endif
                                    </div>
                                    <div class="flex-shrink-0">
                                        @if($business->active_subscription != null)
                                        <p class="mb-0 badge text-bg-success">Active</p>
                                        @else
                                        <p class="mb-0 badge text-bg-danger">Inactive</p>
                                        @endif
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-4">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="">
                                <h5>New Subscriptions</h5>
                                <p class="text-muted">in last 7 days</p>
                            </div>
                            <a class="btn btn-primary" href="{{ route('admin.subscriptions', ['type' => 'active']) }}">
                                <i class="feather icon-plus"></i> View All
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush border-top-0">
                            @if($activeSubscriptionsRecent->count() > 0)
                            @foreach ($activeSubscriptionsRecent as $subscription)
                            <li class="list-group-item">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1 mx-2">
                                        <h6 class="mb-1">{{ $subscription->business->name }}</h6>
                                        <p class="mb-0">{{ $subscription->plan_name }}</p>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <h5 class="text-success text-right">₹ {{ $subscription->amount }}</h5>
                                        <p class="mb-0 badge text-bg-success">{{ $subscription->end_date->format('d-m-Y') }}<br>{{ $subscription->end_date->format('h:i A') }}</p>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                            @else
                            <li class="list-group-item">
                                <div class="d-flex justify-content-center align-items-center">
                                    <p class="text-muted f-w-600">No Active Subscriptions</p>
                                </div>
                            </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="">
                                <h5>Expiring Subscriptions</h5>
                                <p class="text-muted">in next 7 days</p>
                            </div>
                            <a class="btn btn-primary" href="{{ route('admin.subscriptions', ['type' => 'expiring']) }}">
                                <i class="feather icon-plus"></i> View All
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush border-top-0">
                            @if($expiringSubscriptions->count() > 0)
                            @foreach ($expiringSubscriptions as $subscription)
                            <li class="list-group-item">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1 mx-2">
                                        <h6 class="mb-1">{{ $subscription->business->name }}</h6>
                                        <p class="mb-0">{{ $subscription->plan_name }}</p>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <h5 class="text-warning text-right">₹ {{ $subscription->amount }}</h5>
                                        <p class="mb-0 badge text-bg-warning">{{ $subscription->end_date->format('d-m-Y') }}<br>{{ $subscription->end_date->format('h:i A') }}</p>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                            @else
                            <li class="list-group-item">
                                <div class="d-flex justify-content-center align-items-center">
                                    <p class="text-muted f-w-600">No Expiring Subscriptions</p>
                                </div>
                            </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="">
                                <h5>Expired Subscriptions</h5>
                                <p class="text-muted">in last 7 days</p>
                            </div>
                            <a class="btn btn-primary" href="{{ route('admin.subscriptions', ['type' => 'expired']) }}">
                                <i class="feather icon-plus"></i> View All
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush border-top-0">
                            @if($expiredSubscriptions->count() > 0)
                            @foreach ($expiredSubscriptions as $subscription)
                            <li class="list-group-item">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1 mx-2">
                                        <h6 class="mb-1">{{ $subscription->business->name }}</h6>
                                        <p class="mb-0">{{ $subscription->plan_name }}</p>
                                        <p class="mb-0">Owner: {{ $subscription->business->owner->first_name . " " . $subscription->business->owner->last_name }}</p>
                                        <p class="mb-0">Phone: {{ $subscription->business->owner->phone }}</p>
                                        <p class="mb-0">Email: {{ $subscription->business->owner->email }}</p>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <h5 class="text-danger text-right">₹ {{ $subscription->amount }}</h5>
                                        <p class="mb-0 badge text-bg-danger">{{ $subscription->end_date->format('d-m-Y') }}<br>{{ $subscription->end_date->format('h:i A') }}</p>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                            @else
                            <li class="list-group-item">
                                <div class="d-flex justify-content-center align-items-center">
                                    <p class="text-muted f-w-600">No Expired Subscriptions</p>
                                </div>
                            </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
@endsection
@push('scripts')
<script src="{{ asset('assets/js/plugins/apexcharts.min.js') }}"></script>
<script>
    $(document).ready(function() {

        $('#lifetime-earnings-btn').on('click', function() {
            $(this).find('i').addClass('fa fa-spin');
            $.ajax('{{ route('
                    admin.dashboard.lifetime - earnings ') }}')
                .done(function(data) {
                    $('#lifetime-earnings').html(data).removeClass('d-none');
                    $('#lifetime-earnings-btn').addClass('d-none');
                });
        });

        var chartData = {
            !!json_encode($chart) !!
        }
        var options = {
            chart: {
                type: 'bar',
                height: 300,
                toolbar: {
                    show: false
                }
            },
            plotOptions: {
                bar: {
                    horizontal: false,
                    columnWidth: '55%',
                    borderRadius: 4,
                    borderRadiusApplication: 'end'
                }
            },
            dataLabels: {
                enabled: false
            },
            colors: ['#4680FF'],
            stroke: {
                show: true,
                width: 3,
                colors: ['transparent']
            },
            grid: {
                show: false // Hide background/grid lines
            },
            series: [{
                name: 'Collected',
                data: chartData.amount
            }],
            xaxis: {
                categories: chartData.dates,
                crosshairs: {
                    width: 1
                },
                labels: {
                    show: true,
                    rotate: -45,
                    formatter: function(value) {
                        const date = new Date(value);
                        return date.getDate();
                    }
                }
            },
            tooltip: {
                x: {
                    formatter: function(value) {
                        return value;
                    }
                },
                y: {
                    formatter: function(val) {
                        return '₹ ' + val;
                    }
                }
            }
        };
        var chart = new ApexCharts(document.querySelector('#last-15-days-amount'), options);
        var options2 = {
            chart: {
                type: 'bar',
                height: 300,
                toolbar: {
                    show: false
                }
            },
            plotOptions: {
                bar: {
                    horizontal: false,
                    columnWidth: '55%',
                    borderRadius: 4,
                    borderRadiusApplication: 'end'
                }
            },
            dataLabels: {
                enabled: false
            },
            colors: ['#2ca87f'],
            stroke: {
                show: true,
                width: 3,
                colors: ['transparent']
            },
            grid: {
                show: false // Hide background/grid lines
            },
            series: [{
                name: 'Transactions',
                data: chartData.transactions
            }],
            xaxis: {
                categories: chartData.dates,
                crosshairs: {
                    width: 1
                },
                labels: {
                    show: true,
                    rotate: -45,
                    formatter: function(value) {
                        const date = new Date(value);
                        return date.getDate();
                    }
                }
            },
            tooltip: {
                x: {
                    formatter: function(value) {
                        return value;
                    }
                },
                y: {
                    formatter: function(val) {
                        return val;
                    }
                }
            }
        };
        var chart2 = new ApexCharts(document.querySelector('#last-15-days-count'), options2);
        chart.render();
        chart2.render();
        var options3 = {
            chart: {
                height: 150,
                type: 'donut'
            },
            series: chartData.merchants.series,
            colors: ['#007C08', '#04ADCA', '#6D7BF1', '#022A72', '#ED222A', '#6c2787'],
            labels: chartData.merchants.labels,
            // fill: {
            //     opacity: [1, 1, 1, 0.3]
            // },
            legend: {
                show: false
            },
            plotOptions: {
                pie: {
                    donut: {
                        size: '65%',
                        labels: {
                            show: false,
                            name: {
                                show: true
                            },
                            value: {
                                show: true
                            }
                        }
                    }
                }
            },
            dataLabels: {
                enabled: false
            },
            responsive: [{
                breakpoint: 575,
                options: {
                    chart: {
                        height: 250
                    },
                    plotOptions: {
                        pie: {
                            donut: {
                                size: '65%',
                                labels: {
                                    show: false
                                }
                            }
                        }
                    }
                }
            }]
        };
        var chart3 = new ApexCharts(document.querySelector('#merchant-share-graph'), options3);
        chart3.render();
    });
</script>
@endpush