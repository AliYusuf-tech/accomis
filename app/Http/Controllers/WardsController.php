<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\States;
use App\Models\Ward;
use Illuminate\Support\Facades\Gate;

class WardsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if (Gate::denies('admin_role')) {
            abort('404');
        }
        
        $wards = Ward::where('status', 'active')->get();
        $states = States::where('status', 'active')->get();
        return view('backend.wards.wards')->with([
            'states' => $states,
            'wards' => $wards,
        ]);
    }

    public function add_ward(Request $request)
    {
        # code...
    }
}
