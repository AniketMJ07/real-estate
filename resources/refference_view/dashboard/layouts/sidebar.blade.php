<!-- [ Sidebar Menu ] start -->
<nav class="pc-sidebar">
    <div class="navbar-wrapper">
        <div class="m-header">
            <a href="@if (auth()->user()->system_role == 'user') {{ route('dashboard') }} @else {{ route('admin.dashboard') }} @endif"
                class="b-brand text-primary">
                <!-- ========   Change your logo from here   ============ -->
                <img src="{{ asset('assets/images/logo/' . config('setting.site_logo_light_mode')) }}"
                    class="img-fluid logo-lg" alt="logo" width="100" height="50" />
            </a>
        </div>
        <div class="navbar-content">
            @if (auth()->user()->system_role == 'user')
                <div class="card pc-user-card">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            @php
                                $allBusinesses = auth()->user()->businesses;
                                $business = $allBusinesses->where('id', session('selected_business_id'))->first();

                            @endphp
                            <div class="flex-grow-1 ms-3 me-2">
                                <h6 class="mb-0">{{ $business != null ? $business->name : 'NO BUSINESS CREATED' }}
                                </h6>
                                <small
                                    class="text-muted">{{ $business != null ? strtoupper($business->pivot->role) : '' }}</small>
                                @if ($business)
                                    @if ($business->active_subscription != null)
                                        <br><br>
                                        @if (Str::contains(strtolower($business->active_subscription->plan_name), 'trial'))
                                            <small
                                                class="badge badge-lg text-bg-warning">{{ $business->active_subscription->plan_name }}</small>
                                        @else
                                            <small
                                                class="badge badge-lg text-bg-success">{{ $business->active_subscription->plan_name }}</small>
                                        @endif
                                    @else
                                        <br><br>
                                        <small class="badge badge-lg text-bg-danger">{{ 'No plan active' }}</small>
                                    @endif
                                @endif
                            </div>
                            <a class="btn btn-icon btn-link-secondary avtar" data-bs-toggle="collapse"
                                href="#pc_sidebar_userlink">
                                <svg class="pc-icon">
                                    <use xlink:href="#custom-sort-outline"></use>
                                </svg>
                            </a>
                        </div>
                        <div class="collapse pc-user-links" id="pc_sidebar_userlink">
                            <div class="pt-3">
                                @foreach ($allBusinesses as $business)
                                    <a href="{{ route('business.change.scope', $business->id) }}"
                                        class="d-flex justify-content-between align-items-center @if (session('selected_business_id') == $business->id) active @endif">
                                        {{ $business->name }}
                                        @if ($business->id == session('selected_business_id'))
                                            <i class="ti ti-check text-success"></i>
                                        @endif
                                    </a>
                                @endforeach
                                <a href="{{ route('business.create') }}"
                                    class="d-flex justify-content-between align-items-center">
                                    <span class="text-primary">Create New Business</span>
                                    <i class="ti ti-plus text-primary"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <ul class="pc-navbar">
                    <li class="pc-item pc-caption">
                        <label data-i18n="Navigation">Navigation</label>
                    </li>
                    <li class="pc-item">
                        <a href="{{ route('dashboard') }}" class="pc-link">
                            <span class="pc-micon">
                                <svg class="pc-icon">
                                    <use xlink:href="#custom-status-up"></use>
                                </svg>
                            </span>
                            <span class="pc-mtext" data-i18n="Dashboard">Dashboard</span>
                        </a>
                    </li>
                    @if (auth()->user() && auth()->user()->business() && in_array(auth()->user()->business()->pivot->role, ['owner', 'manager', 'finance']))
                        @if (auth()->user()->business()->linked_merchant && auth()->user()->business()->linked_merchant->connected == true)
                            <li class="pc-item">
                                <a href="{{ route('merchant.setup_upi') }}" class="pc-link">
                                    <span class="pc-micon">
                                        <svg class="pc-icon text-success">
                                            <use xlink:href="#custom-mouse-circle"></use>
                                        </svg>
                                    </span>
                                    <span class="pc-mtext" data-i18n="Merchant Connected">Merchant Connected</span>
                                </a>
                            </li>
                        @else
                            <li class="pc-item">
                                <a href="{{ route('merchant.setup_upi') }}" class="pc-link">
                                    <span class="pc-micon">
                                        <svg class="pc-icon">
                                            <use xlink:href="#custom-link"></use>
                                        </svg>
                                    </span>
                                    <span class="pc-mtext" data-i18n="Connect Merchant">Connect Merchant</span>
                                </a>
                            </li>
                        @endif
                        <li class="pc-item">
                            <a href="{{ route('live-transactions') }}" class="pc-link">
                                <span class="pc-micon">
                                    <svg class="pc-icon">
                                        <use xlink:href="#custom-story"></use>
                                    </svg>
                                </span>
                                <span class="pc-mtext" data-i18n="Live Transactions">Live Transactions</span>
                            </a>
                        </li>
                        <li class="pc-item">
                            <a href="{{ route('qrcodetransaction.index') }}" class="pc-link">
                                <span class="pc-micon">

                                    <svg class="pc-icon">
                                        <use xlink:href="#custom-presentation-chart"></use>
                                    </svg>
                                </span>
                                <span class="pc-mtext" data-i18n="Transactions">Transactions</span>
                            </a>
                        </li>
                    @endif
                    @if (auth()->user() && auth()->user()->business() && in_array(auth()->user()->business()->pivot->role, ['owner', 'manager']))
                        <li class="pc-item">
                            <a href="{{ route('plans.index') }}" class="pc-link">
                                <span class="pc-micon">
                                    <svg class="pc-icon">
                                        <use xlink:href="#custom-dollar-square"></use>
                                    </svg>
                                </span>
                                <span class="pc-mtext" data-i18n="Plans">Plans</span>
                            </a>
                        </li>
                    @endif
                    @if (auth()->user() && auth()->user()->business() && in_array(auth()->user()->business()->pivot->role, ['owner', 'manager', 'finance']))
                        <li class="pc-item">
                            <a href="{{ route('subscriptions.index') }}" class="pc-link">
                                <span class="pc-micon">

                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-list">
                                        <line x1="8" y1="6" x2="21" y2="6"></line>
                                        <line x1="8" y1="12" x2="21" y2="12"></line>
                                        <line x1="8" y1="18" x2="21" y2="18"></line>
                                        <line x1="3" y1="6" x2="3.01" y2="6"></line>
                                        <line x1="3" y1="12" x2="3.01" y2="12"></line>
                                        <line x1="3" y1="18" x2="3.01" y2="18"></line>
                                    </svg>
                                </span>
                                <span class="pc-mtext" data-i18n="Subscriptions">Subscriptions</span>
                            </a>
                        </li>
                    @endif
                    @if (auth()->user() && auth()->user()->business() && in_array(auth()->user()->business()->pivot->role, ['owner', 'manager', 'developer']))
                        <li class="pc-item">
                            <a href="{{ route('webhooks.index') }}" class="pc-link">
                                <span class="pc-micon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-external-link">
                                        <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
                                        <polyline points="15 3 21 3 21 9"></polyline>
                                        <line x1="10" y1="14" x2="21" y2="3"></line>
                                    </svg>

                                </span>
                                <span class="pc-mtext" data-i18n="Webhooks">Webhooks</span>
                            </a>
                        </li>
                        <li class="pc-item">
                            <a href="{{ route('api_keys.index') }}" class="pc-link">
                                <span class="pc-micon">
                                    <svg class="pc-icon">
                                        <use xlink:href="#custom-lock-outline"></use>
                                    </svg>
                                </span>
                                <span class="pc-mtext" data-i18n="API Tokens">API Tokens</span>
                            </a>
                        </li>
                        <li class="pc-item">
                            <a href="{{ route('api.docs') }}" class="pc-link">
                                <span class="pc-micon">
                                    <svg class="pc-icon">
                                        <use xlink:href="#custom-shield"></use>
                                    </svg>
                                </span>
                                <span class="pc-mtext" data-i18n="API Documentation">API Documentation</span>
                            </a>
                        </li>
                    @endif
                    <li class="pc-item">
                        <a href="{{ route('businesses') }}" class="pc-link">
                            <span class="pc-micon">
                                <svg class="pc-icon">
                                    <use xlink:href="#custom-layer"></use>
                                </svg>
                            </span>
                            <span class="pc-mtext" data-i18n="Businesses">Businesses</span>
                        </a>
                    </li>
                    @if (auth()->user() && auth()->user()->business() && in_array(auth()->user()->business()->pivot->role, ['owner']))
                        <li class="pc-item">
                            <a href="{{ route('business.users') }}" class="pc-link">
                                <span class="pc-micon">
                                    <svg class="pc-icon">
                                        <use xlink:href="#custom-user"></use>
                                    </svg>

                                </span>
                                <span class="pc-mtext" data-i18n="Users">Users</span>
                            </a>
                        </li>
                    @endif
                    <li class="pc-item">
                        <a href="{{ route('plugins') }}" class="pc-link">
                            <span class="pc-micon">
                                <svg class="pc-icon">
                                    <use xlink:href="#custom-element-plus"></use>
                                </svg>
                            </span>
                            <span class="pc-mtext" data-i18n="Plugins">Plugins</span>
                            <span class="badge badge-lg text-bg-primary ms-3">New</span>
                        </a>
                    </li>
                </ul>
            @endif
            @if (auth()->user()->system_role == 'admin')
                <ul class="pc-navbar">
                    <li class="pc-item pc-caption">
                        <label data-i18n="Admin Area">Admin Area</label>
                    </li>
                    <li class="pc-item">
                        <a href="{{ route('admin.dashboard') }}" class="pc-link">
                            <span class="pc-micon">
                                <svg class="pc-icon">
                                    <use xlink:href="#custom-story"></use>
                                </svg>
                            </span>
                            <span class="pc-mtext" data-i18n="Overview">Overview</span>
                        </a>
                    </li>
                    <li class="pc-item">
                        <a href="{{ route('admin.transactions.live') }}" class="pc-link">
                            <span class="pc-micon">
                                <svg class="pc-icon">
                                    <use xlink:href="#custom-story"></use>
                                </svg>
                            </span>
                            <span class="pc-mtext" data-i18n="Live Transactions">Live Transactions</span>
                        </a>
                    </li>
                    <li class="pc-item">
                        <a href="{{ route('admin.businesses') }}" class="pc-link">
                            <span class="pc-micon">
                                <svg class="pc-icon">
                                    <use xlink:href="#custom-layer"></use>
                                </svg>
                            </span>
                            <span class="pc-mtext" data-i18n="Businesses">Businesses</span>
                        </a>
                    </li>
                    <li class="pc-item">
                        <a href="{{ route('admin.users') }}" class="pc-link">
                            <span class="pc-micon">
                                <svg class="pc-icon">
                                    <use xlink:href="#custom-user"></use>
                                </svg>
                            </span>
                            <span class="pc-mtext" data-i18n="Users">Users</span>
                        </a>
                    </li>
                    <li class="pc-item">
                        <a href="{{ route('admin.plans') }}" class="pc-link">
                            <span class="pc-micon">
                                <svg class="pc-icon">
                                    <use xlink:href="#custom-dollar-square"></use>
                                </svg>
                            </span>
                            <span class="pc-mtext" data-i18n="Plans">Plans</span>
                        </a>
                    </li>
                    <li class="pc-item">
                        <a href="{{ route('admin.pages') }}" class="pc-link">
                            <span class="pc-micon">
                                <svg class="pc-icon">
                                    <use xlink:href="#custom-notification-status"></use>
                                </svg>
                            </span>
                            <span class="pc-mtext" data-i18n="Pages">Pages</span>
                        </a>
                    </li>
                    <li class="pc-item">
                        <a href="{{ route('admin.subscriptions') }}" class="pc-link">
                            <span class="pc-micon">

                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-list">
                                    <line x1="8" y1="6" x2="21" y2="6"></line>
                                    <line x1="8" y1="12" x2="21" y2="12"></line>
                                    <line x1="8" y1="18" x2="21" y2="18"></line>
                                    <line x1="3" y1="6" x2="3.01" y2="6"></line>
                                    <line x1="3" y1="12" x2="3.01" y2="12"></line>
                                    <line x1="3" y1="18" x2="3.01" y2="18"></line>
                                </svg>
                            </span>
                            <span class="pc-mtext" data-i18n="Subscriptions">Subscriptions</span>
                        </a>
                    </li>
                    <li class="pc-item">
                        <a href="{{ route('admin.contact-form.submissions') }}" class="pc-link">
                            <span class="pc-micon">
                                <svg class="pc-icon">
                                    <use xlink:href="#custom-call-calling"></use>
                                </svg>
                            </span>
                            <span class="pc-mtext" data-i18n="Contact Form">Contact Form</span>
                        </a>
                    </li>
                    <li class="pc-item">
                        <a href="{{ route('admin.settings') }}" class="pc-link">
                            <span class="pc-micon">
                                <svg class="pc-icon">
                                    <use xlink:href="#custom-level"></use>
                                </svg>
                            </span>
                            <span class="pc-mtext" data-i18n="Settings">Settings</span>
                        </a>
                    </li>
                    <li class="pc-item">
                        <a href="{{ url('maintenance/horizon') }}" class="pc-link">
                            <span class="pc-micon">
                                <svg class="pc-icon">
                                    <use xlink:href="#custom-level"></use>
                                </svg>
                            </span>
                            <span class="pc-mtext" data-i18n="Horizon">Horizon</span>
                        </a>
                    </li>
                </ul>
            @endif
        </div>
    </div>
</nav>
<!-- [ Sidebar Menu ] end -->