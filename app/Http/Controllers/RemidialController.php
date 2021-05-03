<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Remedial;
use App\Models\States;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Gate;

class RemidialController extends Controller
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

    public function remidial()
    {
        if (Gate::denies('admin_cbo')) {
            abort('404');
        }
        $rem = Remedial::all();
        $states = States::where('status', 'active')->get();

        return view('backend.remidial.remidialfeedback')->with([
            'rems' => $rem,
            'states' => $states,
        ]);
    }

    public function add_remidial(Request $request)
    {

        $signed_doc = $request->signed_doc->store('photos/signed_documents');
        $month = date('M');
        $year = date('Y');
        $user = Auth::user();
        $cbo = $user->email;


        $add_remidial = Remedial::create([
            'state' => $request->state,
            'ward' => $request->ward,
            'cbo' => $cbo,
            'date_visit' => $request->date_visit,
            'tracker_type' => $request->tracker_type,
            'identified_issues' => $request->key_findings,
            'root_cause' => $request->root_cause,
            'action_taken_immediately' => $request->taken_action,
            'resolved' => $request->resolved_value,
            'follow_up_action' => $request->follow_action,
            'responsibility' => $request->responsibility,
            'timeline' => $request->timeline,
            'signed_document' => $signed_doc,
            'month' => $month,
            'year' => $year,
        ]);

        if ($add_remidial) {
            Session::flash('flash_message', 'Remedial Report Added Successfully');
            return redirect(route('remidial'));
        }
    }
}
