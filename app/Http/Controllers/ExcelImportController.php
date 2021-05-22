<?php

namespace App\Http\Controllers;

use App\Imports\HealthFacilityImport;
use App\Imports\SpoImport;
use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ExcelImportController extends Controller
{
    public function uploadCbo()
    {
        $cbo = Excel::import(new UsersImport, 'cbosexcel.xlsx');

        if($cbo){
            Session::flash('flash_message', 'Cbo parsed from excel file Added Successfully');
            return redirect('/cbo');
        }else{
            Session::flash('error_message', 'Cbo parse from excel failed');
            return redirect('/cbo');
        }
    }

    public function uploadSpo()
    {
        $cbo = Excel::import(new SpoImport, 'SPOs.xlsx');

        if($cbo){
            Session::flash('flash_message', 'Spo parsed from excel file Added Successfully');
            return redirect('/spo_add');
        }else{
            Session::flash('error_message', 'Spo parse from excel failed');
            return redirect('/spo_add');
        }
    }

    public function uploadHealth()
    {
        $health = Excel::import(new HealthFacilityImport, 'health_facility.xlsx');

        if($health){
            Session::flash('warn_message', 'Health facility cannot be parsed at the moment please wait for future updates');
            return redirect('/healthfacilities');
        }
    }
}
