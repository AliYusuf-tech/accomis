<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('backend.healthfacilities.healthfacilities')->with([]);
    }
    
    public function health_facility_add()
    {
        return view('backend.healthfacilities.add_healthfacilities')->with([]);
    }


    public function add_health_facility(Request $request)
    {

        // Activites::create([

        // ]);
    }
}
