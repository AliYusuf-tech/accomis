<?php

namespace App\Http\Controllers;

use App\Models\SpoMonthly;
use App\Models\States;
use App\Models\Lgas;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Models\Spo;

class SpoController extends Controller
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

    public function spo_index()
    {
        if (Gate::denies('admin_spo')) {
            abort('404');
        }

        $spos = Spo::all();
        $states = States::where('status', 'active')->get();

        return view('backend.spo.spo')->with([
            'states' => $states,
            'spos' => $spos,
        ]);
    }

    public function add_spo(Request $request)
    {
        $spoRole = Role::where('name', 'Spo')->first();

        if (User::where('email', '=', $request->email)->exists()) {
            Session::flash('error_message', 'A user with this email already exists!');
            return redirect(route('spo.monthly'));
        }else {
               // user email found
               $spo = User::create([
                'name' => $request->spo_name,
                'email' => $request->email,
                'password' => Hash::make($request->state),
                'email_verified_at' => now(),
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            $submit_cbo = Spo::create([
                'spo_name' => $request->spo_name,
                'email' => $request->email,
                'phone' => $request->phone,
                'state' => $request->state,
                'physical_contact_address' => $request->address
            ]);
            $spo->roles()->attach($spoRole);

            if ($submit_cbo) {
                Session::flash('flash_message', 'Spo Added Successfully');
                return redirect(route('spo.monthly'));
            }

        }
    }

    public function spo_monthly()
    {
        if (Gate::denies('admin_spo')) {
            abort('404');
        }
        $spo = SpoMonthly::all();
        $states = States::where('status', 'active')->get();
        return view('backend.spo.spomonthly')->with([
            'spos' => $spo,
            'states' => $states,
        ]);
    }
    public function add_spomonthly(Request $request)
    {
        if (Gate::denies('admin_spo')) {
            abort('404');
        }
        $attachment = $request->attachment->store('photos/attachments');
        $month = date('M');
        $year = date('Y');

        $submit_spo_monthly = SpoMonthly::create([
            'state' => $request->state,
            'attachment' => $attachment,
            'minutes_of_meeting' => $request->minutes,
            'date_of_meeting' => $request->meeting_date,
            'month' => $month,
            'year' => $year,
        ]);

        if ($submit_spo_monthly) {
            Session::flash('flash_message', 'Spo Monthly Report Added Successfully');
            return redirect(route('spo.monthly'));
        }
    }

    public function spo_add(Request $request)
    {
        if (Gate::denies('admin_spo')) {
            abort('404');
        }
    }
}
