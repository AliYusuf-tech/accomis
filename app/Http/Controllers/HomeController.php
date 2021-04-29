<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();
        $role = implode(' ', $user->roles->pluck('name')->toArray());

        if ($role == "Admin") {
            return view('backend.dashboards.admin_dashboard');
        }
        if ($role == "Cbo") {
            return view('backend.dashboards.cbo_dashboard');
        }
        if ($role == "Spo") {
            return view('backend.dashboards.spo_dashboard');
        }
    }
}
