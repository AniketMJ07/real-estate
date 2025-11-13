<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Business;
use App\Models\ContactSubmission;
use App\Models\LinkedMerchant;
use App\Models\Order;
use App\Models\Page;
use App\Models\Plan;
use App\Models\QrcodeTransaction;
use App\Models\Subscription;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Yajra\DataTables\Facades\DataTables;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        // Step 1: Date Range
        $startDate = now()->subDays(15)->startOfDay();
        $endDate = now()->endOfDay();

        // Step 2: Transactions Chart
        $transactions = QrcodeTransaction::select('amount', 'created_at')
            ->where('status', 'success')
            ->whereBetween('created_at', [$startDate, $endDate])
            ->get()
            ->groupBy(fn($t) => $t->created_at->format('Y-m-d'));

        $dates = collect();
        for ($date = $startDate->copy(); $date->lte($endDate); $date->addDay()) {
            $dates->push($date->format('Y-m-d'));
        }

        $chart = [
            'dates' => $dates->toArray(),
            'amount' => [],
            'transactions' => [],
            'merchants' => [],
        ];

        foreach ($dates as $date) {
            $daily = $transactions[$date] ?? collect();
            $chart['amount'][] = number_format($daily->sum('amount'), 2, '.', '');
            $chart['transactions'][] = $daily->count();
        }

        // Step 3: Merchant Share Data
        $merchants = LinkedMerchant::where('connected', true)->pluck('merchant_type');

        $counts = [
            'phonepe' => 0,
            'bharatpe' => 0,
            'google' => 0,
            'paytm' => 0,
            'hdfc' => 0,
            'yono' => 0,
        ];

        foreach ($merchants as $type) {
            $type = strtolower($type);
            foreach ($counts as $key => $value) {
                if (Str::contains($type, $key)) {
                    $counts[$key]++;
                    break;
                }
            }
        }

        $total = array_sum($counts);

        $labels = [
            'PhonePe',
            'BharatPe',
            'GPay Business',
            'Paytm',
            'HDFC',
            'Yono SBI Merchant',
        ];

        $chart['merchants'] = [
            'series' => array_values($counts),
            'labels' => $labels,
            'data' => collect($counts)->mapWithKeys(function ($count, $key) use ($total) {
                return [
                    $key => [
                        'count' => $count,
                        'share' => $total > 0 ? round(($count / $total) * 100, 0) : 0,
                    ]
                ];
            })->toArray(),
        ];

        // Step 4: Other Stats

        $usersWithoutBusiness = User::whereDoesntHave('businesses')
            ->where('system_role', 'user')
            ->select('id', 'first_name', 'last_name', 'phone', 'email', 'created_at', 'email_verified_at')
            ->take(5)
            ->latest()
            ->get();

        $newBusinesses = Business::with('owner', 'active_subscription')
            ->select('id', 'name', 'owner_id', 'type', 'address_1', 'address_2', 'city', 'state', 'country', 'postal_code', 'created_at')
            ->take(5)
            ->latest()
            ->get();

        $now = now();

        $subscriptions = Subscription::with('business:id,name,owner_id', 'business.owner:id,first_name,last_name,phone,email')
            ->select('id', 'business_id', 'plan_name', 'amount', 'status', 'end_date')
            ->latest()
            ->where('created_at', '>=', $now->copy()->subDays(30))
            ->get();

        $activeSubscriptions = $subscriptions->filter(function ($sub) use ($now) {
            return $sub->status == "active" && $sub->end_date >= $now->copy()->subDays(7);
        })->take(5);

        $expiringSubscriptions = $subscriptions->filter(function ($sub) use ($now) {
            return $sub->status == "active" && $sub->end_date > $now && $sub->end_date <= $now->copy()->addDays(7);
        })->take(5);

        $expiredSubscriptions = $subscriptions->filter(function ($sub) use ($now) {
            return $sub->status != "active" && $sub->end_date < $now && $sub->end_date >= $now->copy()->subDays(7);
        })->take(5);

        return view('dashboard.admin.dashboard', [
            'chart' => $chart,
            'users' => User::where('system_role', 'user')->count(),
            'businesses' => Business::count(),
            'subscriptions' => $subscriptions->count(),
            'activeSubscriptions' => $subscriptions->where('status', true)->where('end_date', '>=', now())->count(),
            'usersWithoutBusiness' => $usersWithoutBusiness,
            'newBusinesses' => $newBusinesses,
            'activeSubscriptionsRecent' => $activeSubscriptions,
            'expiringSubscriptions' => $expiringSubscriptions,
            'expiredSubscriptions' => $expiredSubscriptions,
        ]);
    }

    public function lifetimeEarnings(Request $request)
    {
        $totalEarnings = Order::where('status', 'success')->whereDate('updated_at', '>=', '2025-09-01')->whereNotNull('transaction_id')->sum('amount');
        return response()->json("₹ " . $totalEarnings);
    }


    public function users(Request $request)
    {
        return view('dashboard.admin.users');
    }

    public function storeUser(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        if ($user) {
            return redirect()->back()->with('error', 'User with this email already exists');
        }

        $user = new User();
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->system_role = $request->has('system_role') ? 'admin' : 'user';
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->back()->with('success', 'User created successfully.');
    }

    public function updateUser(Request $request)
    {
        $user = User::findOrFail($request->id);
        $existingUser = User::where('email', $request->email)->where('id', '!=', $request->id)->first();
        if ($existingUser) {
            return redirect()->back()->with('error', 'User with this email already exists');
        }
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }
        if ($request->has('email_verified_at') && !$user->email_verified_at) {
            $user->email_verified_at = now();
        }

        if (auth()->id() != $user->id) {
            $user->system_role = $request->has('system_role') ? 'admin' : 'user';
        }
        $user->save();

        return redirect()->back()->with('success', 'User updated successfully.');
    }

    public function toggleUserBan($id)
    {
        $user = User::findOrFail($id);
        $user->is_active = !$user->is_active;
        try {
            $user->save();
            return response()->json([
                'success' => true,
                'message' => $user->is_active ? 'User unbanned successfully.' : 'User banned successfully.',
                'status' => $user->is_active,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'An error occurred while updating user status.',
                'status' => $user->is_active,
            ]);
        }
    }

    public function businesses(Request $request)
    {
        $users = User::where('system_role', 'user')->get();
        return view('dashboard.admin.businesses', compact('users'));
    }

    public function business_datatable(Request $request)
    {
        $query = Business::with('owner')->select('businesses.*');
        return DataTables::of($query)
            ->editColumn('created_at', function ($row) {
                return $row->created_at->format('Y-m-d') . '<br>' . $row->created_at->format('h:i A');
            })
            ->editColumn('type', function ($row) {
                return ucfirst($row->type);
            })
            ->addColumn('subscribed', function ($row) {
                return $row->active_subscription ? '<span class="badge text-bg-success">Yes</span>' : '<span class="badge text-bg-danger">No</span>';
            })
            ->addColumn('address', function ($row) {
                return $row->city . ', ' . $row->state . '<br>' . $row->postal_code;
            })
            ->addColumn('owner', function ($row) {
                return $row->owner ? $row->owner->name : 'N/A';
            })
            ->editColumn('pan', function ($row) {
                $html = $row->pan != null ? $row->pan : "";
                if ($row->pan != null && $row->pan_verified_at != null) {
                    $html .= '<br><small class="badge text-bg-success">Verified</small>';
                } else {
                    if ($row->pan == null) {
                        $html = '<span class="badge text-bg-warning">Not Provided</span>';
                    } else {
                        $html = '<span class="badge text-bg-danger">Not Verified</span>';
                    }
                }
                return $html;
            })
            ->editColumn('gstin', function ($row) {
                $html = $row->gstin != null ? $row->gstin : "";
                if ($row->gstin != null && $row->gstin_verified_at != null) {
                    $html .= '<br><small class="badge text-bg-success">Verified</small>';
                } else {
                    if ($row->gstin == null) {
                        $html = '<span class="badge text-bg-warning">Not Provided</span>';
                    } else {
                        $html = '<span class="badge text-bg-danger">Not Verified</span>';
                    }
                }
                return $html;
            })
            ->addColumn('action', function ($row) {
                $html = '<div class="btn-group">';
                $html .= '<a class="btn btn-sm btn-secondary viewBusiness" href="' . route('admin.businesses.view', $row->id) . '"><i class="feather icon-eye"></i></a>';
                $html .= '<button class="btn btn-sm btn-primary editBusiness" data-id="' . $row->id . '" data-data=\'' . json_encode($row) . '\'><i class="feather icon-edit"></i></button>';
                $html .= '</div>';
                return $html;
            })
            ->rawColumns(['action', 'subscribed', 'created_at', 'owner', 'pan', 'gstin', 'address', 'type'])
            ->make(true);
    }

    public function viewBusiness($id)
    {
        $business = Business::with('owner', 'linked_merchant')->findOrFail($id);

        $subscriptions = Subscription::where('business_id', $id)->latest()->get();
        $users = $business->users()->get();

        return view('dashboard.admin.business_view', compact('business', 'subscriptions', 'users'));
    }

    public function storeBusiness(Request $request)
    {
        $slug = Str::slug($request->name, '-');
        $existingBusiness = Business::where('slug', $slug)->first();
        if ($existingBusiness) {
            $slug .= '-' . Str::random(5); // Append random string to make it unique
        }
        $business = new Business();
        $business->name = $request->name;
        $business->slug = $slug;
        $business->type = $request->type;
        $business->address_1 = $request->address_1;
        $business->address_2 = $request->address_2;
        $business->city = $request->city;
        $business->state = $request->state;
        $business->country = $request->country;
        $business->postal_code = $request->postal_code;
        $business->pan = $request->pan;
        $business->gstin = $request->gstin;
        $business->owner_id = $request->owner_id;

        if ($business->pan != null) {
            $business->pan_verified_at = now();
        }
        if ($business->gstin != null) {
            $business->gstin_verified_at = now();
        }

        $business->save();

        $business->users()->attach($request->owner_id, ['role' => 'owner']);

        return redirect()->back()->with('success', 'Business created successfully.');
    }

    public function updateBusiness(Request $request)
    {
        // dd($request->all());
        $business = Business::where('id', $request->id)->first();
        if ($request->send_qr_in_api == true) {
            $business->send_qr_in_api = true;
        } else {
            $business->send_qr_in_api = false;
        }

        if ($request->enable_receipt == true) {
            $business->enable_receipt = true;
        } else {
            $business->enable_receipt = false;
        }
        $business->save();



        return redirect()->back()->with('success', 'Business Update successfully.');
    }

    public function plans()
    {
        $plans = Plan::all();
        return view('dashboard.admin.plans', compact('plans'));
    }

    public function storePlan(Request $request)
    {
        $existingPlan = Plan::where('slug', $request->slug)->first();
        if ($existingPlan) {
            return redirect()->back()->with('error', 'Plan with this slug already exists');
        }
        $plan = new Plan();
        $plan->name = $request->name;
        $plan->slug = $request->slug;
        $plan->amount = $request->amount;
        $plan->interval = $request->interval;
        $plan->is_trial = $request->has('is_trial') ? 1 : 0;
        $plan->trial_days = $request->trial_days != null ? $request->trial_days : 0;
        $plan->is_hidden = $request->has('is_hidden') ? 1 : 0;
        $plan->description = $request->description;
        $plan->upi_links = $request->has('upi_links') ? 1 : 0;
        $plan->show_branding = $request->has('show_branding') ? 1 : 0;
        $plan->popular = $request->has('popular') ? 1 : 0;
        $plan->qr_code_limit = $request->qr_code_limit;
        $plan->webhook_limit = $request->webhook_limit;
        $plan->status = true;
        $plan->save();
        return redirect()->back()->with('success', 'Plan created successfully.');
    }

    public function updatePlan(Request $request, $id)
    {
        $plan = Plan::findOrFail($id);
        $existingPlan = Plan::where('slug', $request->slug)->where('id', '!=', $id)->first();
        if ($existingPlan) {
            return redirect()->back()->with('error', 'Plan with this slug already exists');
        }
        $plan->name = $request->name;
        $plan->slug = $request->slug;
        $plan->amount = $request->amount;
        $plan->interval = $request->interval;
        $plan->is_trial = $request->has('is_trial') ? 1 : 0;
        $plan->trial_days = $request->trial_days;
        $plan->is_hidden = $request->has('is_hidden') ? 1 : 0;
        $plan->description = $request->description;
        $plan->upi_links = $request->has('upi_links') ? 1 : 0;
        $plan->show_branding = $request->has('show_branding') ? 1 : 0;
        $plan->popular = $request->has('popular') ? 1 : 0;
        $plan->qr_code_limit = $request->qr_code_limit;
        $plan->webhook_limit = $request->webhook_limit;
        $plan->status = $request->has('status') ? 1 : 0;
        $plan->save();
        return redirect()->back()->with('success', 'Plan updated successfully.');
    }

    public function destroyPlan($id)
    {
        $plan = Plan::findOrFail($id);
        $plan->delete();
        return redirect()->back()->with('success', 'Plan deleted successfully.');
    }

    public function togglePlan(Request $request, $id)
    {
        $plan = Plan::findOrFail($id);
        $plan->status = !$plan->status;
        try {
            $plan->save();
            return response()->json([
                'success' => true,
                'message' => $plan->status ? 'Plan activated successfully.' : 'Plan deactivated successfully.',
                'status' => $plan->status,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'An error occurred while updating plan status.',
                'status' => $plan->status,
            ]);
        }
    }

    public function pages()
    {
        $pages = Page::get();
        return view('dashboard.admin.pages', compact('pages'));
    }

    public function storePage(Request $request)
    {
        $page = Page::create($request->all());
        return redirect()->back()->with('success', 'Page created successfully.');
    }

    public function updatePage(Request $request, $id)
    {
        $page = Page::findOrFail($id);
        $page->update($request->all());
        return redirect()->back()->with('success', 'Page updated successfully.');
    }

    public function destroyPage($id)
    {
        $page = Page::findOrFail($id);
        $page->delete();
        return redirect()->back()->with('success', 'Page deleted successfully.');
    }

    public function contactFormSubmissions()
    {
        $submissions = ContactSubmission::orderBy('created_at', 'desc')->with('assigned_user')->paginate(10);
        $adminUsers = User::where('system_role', 'admin')->get();
        return view('dashboard.admin.contact_form_submissions', compact('submissions', 'adminUsers'));
    }

    public function updateContactFormSubmission(Request $request, $id)
    {
        $submission = ContactSubmission::findOrFail($id);

        $oldValues = [
            'status' => $submission->status,
            'assigned_to' => $submission->assigned_to,
            'remarks' => $submission->remarks,
        ];

        $submission->status = $request->status;
        $submission->assigned_to = $request->assigned_to;
        $submission->remarks = $request->remarks;
        $submission->save();

        activity()
            ->performedOn($submission)
            ->causedBy(auth()->user())
            ->withProperties([
                'old' => $oldValues,
                'new' => [
                    'status' => $submission->status,
                    'assigned_to' => $submission->assigned_to,
                    'remarks' => $submission->remarks,
                ],
            ])
            ->log('Contact form submission updated: ' . $submission->id);

        return redirect()->back()->with('success', 'Contact form submission updated successfully.');
    }

    public function statistics(Request $request)
    {
        if ($request->has('start_date') && $request->has('end_date')) {
            $startDate = Carbon::parse($request->start_date)->startOfDay();
            $endDate = Carbon::parse($request->end_date)->endOfDay();
        } else {
            $startDate = now()->startOfDay();
            $endDate = now()->endOfDay();
        }

        $top5Businesses = QrcodeTransaction::select('business_id', DB::raw('COUNT(*) as count, SUM(amount) as total_amount'))
            ->whereBetween('created_at', [$startDate, $endDate])
            ->groupBy('business_id')
            ->orderBy('count', 'desc')
            ->with('business')
            ->take(5)
            ->get();
    }

    public function liveTransactions()
    {
        $transactions = QrcodeTransaction::where('created_at', '>=', Carbon::now()->subMinutes(10)->toDateTimeString())
            ->with('business:id,name')
            ->orderBy('updated_at', 'desc')
            ->get();

        return view('dashboard.admin.live_transactions.index', compact('transactions'));
    }
}
