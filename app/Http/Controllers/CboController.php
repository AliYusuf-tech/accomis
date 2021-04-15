<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\States;
use App\Models\Cbo;
use App\Models\Lgas;
use Illuminate\Support\Facades\Session;
use App\Models\CboMonthly;

class CboController extends Controller
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
    public function cbo_index()
    {
        $cbo = Cbo::all();
        $states = States::where('status', 'active')->get();

        return view('backend.cbo.cbo')->with([
            'cbos' => $cbo,
            'states' => $states,
        ]);
    }
    public function cbo_monthly()
    {
        $cbo = CboMonthly::all();
        $states = States::where('status', 'active')->get();

        return view('backend.cbo.cbomonthly')->with([
            'cbos' => $cbo,
            'states' => $states,
        ]);
    }

    public function add_cbo(Request $request)
    {
        $submit_cbo = Cbo::create([
            'cbo_name' => $request->cbo_name,
            'email' => $request->email,
            'state' => $request->state,
            'lga' => $request->lga,
            'phone' => $request->phone,
            'contact_person' => $request->contact_person,
            'date_of_engagement' => $request->engage_date,
            'date_of_establishment' => $request->establish_date,
            'physical_contact_address' => $request->contact_address,
        ]);

        if ($submit_cbo) {
            Session::flash('flash_message', 'Cbo Added Successfully');
            return redirect(route('cbo'));
        }
    }
    public function add_cbo_monthly(Request $request)
    {
        $attachment = $request->attachment->store('photos/attachments');

        $submit_cbo_monthly = CboMonthly::create([
            'cbo_name' => $request->cbo_name,
            'state' => $request->state,
            'lga' => $request->lga,
            'attachment' => $attachment,
            'minutes_of_meeting' => $request->minutes,
            'date_of_meeting' => $request->meeting_date,
        ]);

        if ($submit_cbo_monthly) {
            Session::flash('flash_message', 'Cbo Monthly Report Added Successfully');
            return redirect(route('cbo.monthly'));
        }
    }
}
