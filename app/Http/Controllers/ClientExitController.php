<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClientExitQuestionare;

class ClientExitController extends Controller
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

    public function client_exit()
    {
        return view('backend.clientexit.clientexit')->with([]);
    }

    public function client_exit_add(Request $request)
    {

        // Activites::create([

        // ]);
    }
}
