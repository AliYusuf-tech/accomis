<?php

namespace App\Http\Controllers;
use App\Models\SpoMonthly;
use App\Models\States;
use App\Models\Lgas;
use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;

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
        $spo = SpoMonthly::all();
        $states = States::where('status', 'active')->get();

        return view('backend.spo.spomonthly')->with([
            'spos' => $spo,
            'states' => $states,
        ]);
    }

    public function add_spomonthly(Request $request)
    {

        $attachment = $request->attachment->store('photos/attachments');

        $submit_spo_monthly = SpoMonthly::create([
            'state' => $request->state,
            'attachment' => $attachment,
            'minutes_of_meeting' => $request->minutes,
            'date_of_meeting' => $request->meeting_date,
        ]);

        if ($submit_spo_monthly) {
            Session::flash('flash_message', 'Spo Monthly Report Added Successfully');
            return redirect(route('spo.monthly'));
        }
    }
}
