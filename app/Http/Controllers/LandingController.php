<?php

namespace App\Http\Controllers;

use App\Helpers\Helpers;
use App\Models\ContactSubmission;
use App\Models\Page;
use App\Models\Plan;
use App\Models\QrcodeTransaction;
use Illuminate\Http\Request;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

class LandingController extends Controller
{
    public function index()
    {
        return view('landing.index');
    }

    public function page($slug)
    {
        $page = \App\Models\Page::where('slug', $slug)->firstOrFail();
        return view('landing.page', compact('page'));
    }

    public function about()
    {
        return view('landing.about');
    }

    public function pricing()
    {
        $plans = Plan::where('is_hidden', false)
            ->where('status', true)
            ->where('is_trial', false)
            ->orderBy('amount', 'asc')
            ->get();

        return view('landing.pricing', compact('plans'));
    }

    public function contact()
    {
        return view('landing.contact');
    }

    public function sitemap()
    {
        $sitemap = Sitemap::create()
            ->add(Url::create('/'))
            ->add(Url::create('/pricing'))
            ->add(Url::create('/features'))
            ->add(Url::create('/contact'))
            ->add(Url::create('/login'))
            ->add(Url::create('/register'))
            ->add(Url::create('/forgot-password'));

        //Pages
        Page::all()->each(function (Page $page) use ($sitemap) {
            $sitemap->add(Url::create("/page/{$page->slug}"));
        });

        return $sitemap->toResponse(request());
    }

    public function robots()
    {
        $robotsTxt = "User-agent: *" . PHP_EOL;
        $robotsTxt .= "Sitemap: " . url('/sitemap.xml') . PHP_EOL;

        return response($robotsTxt, 200)
            ->header('Content-Type', 'text/plain');
    }

    public function statsCounter()
    {
        $stats = QrcodeTransaction::where('status', 'success')
            ->selectRaw('COUNT(*) as count, COALESCE(SUM(amount), 0) as total_amount')
            ->first();

        $transactions = $stats->count;
        $totalAmount = (int)number_format($stats->total_amount, 0, '', '');

        return response()->json([
            'count' => $transactions,
            'amount' => $totalAmount,
        ]);
    }

    public function contact_store(Request $request)
    {
        try {
            $data = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'phone' => 'required|string|min:10|max:10',
                'message' => 'nullable|string',
            ]);
        } catch (\Illuminate\Validation\ValidationException $e) {
            return redirect()->back()
                ->with('error', $e->getMessage())
                ->withErrors($e->validator)
                ->withInput(
                    [
                        'name' => $request->input('name'),
                        'email' => $request->input('email'),
                        'phone' => $request->input('phone'),
                        'message' => $request->input('message'),
                    ]
                );
        }

        $data['name'] = trim($request->name);
        $data['email'] = trim($request->email);
        $data['phone'] = trim($request->phone);
        $data['message'] = $request->message;
        $data['ip_address'] = Helpers::getClientIp();
        $data['user_agent'] = $request->header('User-Agent');
        $data['status'] = 'pending';
        $data['source'] = 'site_contact_form'; // Optional: to track where the submission came from

        ContactSubmission::create($data);

        return redirect()->back()
            ->with('success', 'Than you for contacting us! We will get back to you soon.');
    }
}
