<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;
use App\Models\Lgas;
use App\Models\States;
use App\Models\ClientExitQuestionare;
use App\Models\Cat;
use App\Models\Cbo;
use App\Models\Ward;
use App\Models\HealthFacility;
use App\Models\Remedial;
use App\Models\Spo;

class GeneralAnalysisController extends Controller
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
    public function genanalysis()
    {
        $user = Auth::user();
        $role = implode(' ', $user->roles->pluck('name')->toArray());

        if ($role == "Admin") {

            $states =  count(States::where('status', 'active')->get());
            $lgas =  count(Lgas::where('status', 'active')->get());
            $wards = count(Ward::where('status', 'active')->get());
            $health_facilities = count(HealthFacility::all());
            $spos = count(Spo::all());
            $cbos = count(Cbo::all());
            $cats = count(Cat::all());
            $client_exits = count(ClientExitQuestionare::all());
            $tested_malaria = count(ClientExitQuestionare::where('malaria_test', 'yes')->get());
            $llin_recipients = count(ClientExitQuestionare::where('llin_reception', 'yes')->get());
            $act_recipients = count(ClientExitQuestionare::where('abc_therapy_reception', 'yes')->get());
            $ipt_recipients = count(ClientExitQuestionare::where('ipt_reception', 'yes')->get());
            $positive_malaria = count(ClientExitQuestionare::where('abc_therapy_reception', 'yes')->get());
            $sp_recepients = count(ClientExitQuestionare::where('sulfadoxin_pyrimethamine_intake', 'yes')->get());
            $smc_recepients = count(ClientExitQuestionare::where('child_smc_reception', 'yes')->get());
            $pregnant_women = count(ClientExitQuestionare::where('respondant_category', 'Female Pregnant')->get());

            return view('backend.analysis.adminanalysis')->with([
                'states'=>$states,
                'lgas'=>$lgas,
                'wards'=>$wards,
                'health_facilities'=>$health_facilities,
                'spos'=>$spos,
                'cbos'=>$cbos,
                'cats'=>$cats,
                'client_exits'=>$client_exits,
                'tested_malaria'=>$tested_malaria ,
                'llin_recipients'=>$llin_recipients,
                'act_recipients'=>$act_recipients,
                'ipt_recipients'=>$ipt_recipients,
                'positive_malaria'=>$positive_malaria,
                'sp_recepients'=>$sp_recepients,
                'smc_recepients'=>$smc_recepients,
                'pregnant_women'=>$pregnant_women ,
            ]);
        }

        if ($role == "Cbo") {

            $health_facilities = count(HealthFacility::where('CBO_Email', $user->email)->get());
            $client_exits = count(ClientExitQuestionare::where('auth_user_email', $user->email)->get());
            $remidial = count(Remedial::where('cbo', $user->email)->get());

            return view('backend.dashboards.cbo_dashboard')->with([
                'health_facilities'=>$health_facilities,
                'client_exits'=>$client_exits,
                'remidial'=>$remidial,
            ]);;
        }

        if ($role == "Spo") {
            return view('backend.dashboards.spo_dashboard');
        }
    }
}
