<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Models\States;
use Illuminate\Support\Facades\DB;

class HealthFacilitiesController extends Controller
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

    public function health_facility()
    {
        if (Gate::denies('admin_role')) {
            abort('404');
        }
        $states = States::where('status', 'active')->get();

        return view('backend.healthfacilities.healthfacilities')->with([
            'states' => $states,
        ]);
    }


    public function add_health_facility(Request $request)
    {

        // Activites::create([

        // ]);
    }

    public function fetch(Request $request)
    {
        $select = $request->get('select');
        $value = $request->get('value');
        $dependent = $request->get('dependent');
        $data = DB::table('lgas')->where($select, $value)
            ->get();

        $output = '';
        foreach ($data as $row) {
            $output .=
                '<option id="' .$row->name. '" value="' . $row->name . '">' . $row->name . '</option>
            ';
        }

        echo $output;
    }

    public function cbo_fetch(Request $request)
    {
        $select = $request->get('select');
        $value = $request->get('value');
        $dependent = $request->get('dependent1');
        $data = DB::table('cbos')->where('lga', $value)
            ->get();

        $data2 = DB::table('wards')->where('lga', $value)
            ->get();

        $output = '';

        $ward = '';

        foreach ($data2 as $row2) {

            $ward .=
                '<option id="' .$row2->id . '" value="' .$row2->ward_name. '">' . $row2->ward_name . '</option>
        ';
        }

        foreach ($data as $row) {

            $output .=
                '<option id="' . $row->id . '" value="' . $row->cbo_name . '">' . $row->cbo_name . '</option>
        ';
        }


        $json = [
            'ward'=>$ward,
            'cbo'=>$output
        ];

        return $json;
    }
}
