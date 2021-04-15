<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('backend.remidial.remidialfeedback')->with([]);
    }

    public function add_remidial(Request $request)
    {

        // Activites::create([

        // ]);
    }
}
