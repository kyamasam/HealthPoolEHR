<?php

namespace App\Http\Controllers;

use App\diagnostic_services_general_lab_request_form;
use App\diagnostic_services_moh209;
use App\diagnostic_services_radiology_request_form;
use App\laboratory_department_moh240;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class DiagnosticServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function diagnosticservices()
    {
        return view ('departments.diagnostic_services.diagnostic_services');
    }
    public function blood_donation_unit()
    {
        $blood_donation_unit_results = DB::table('laboratory_department_blood_donation_unit')->get();
        return view('departments.diagnostic_services.laboratory_department',['blood_donation_unit_results'=>$blood_donation_unit_results]);
    }
    public function generallabrequestform()
    {
        $generallabrequestform_results = DB::table('diagnostic_services_general_lab_request_forms')->get();
        return view('departments.diagnostic_services.laboratory_department.general_lab_request_form',['generallabrequestform_results'=>$generallabrequestform_results]);
    }
    public function generallabrequestform_post()
    {
        $generallabrequestform_post= new diagnostic_services_general_lab_request_form(Input::all());
        $generallabrequestform_post->save();

        return redirect(route('generallabrequestform'));
    }
    public function moh240()
    {
        $moh240_results = DB::table('laboratory_department_moh240s')->get();
        return view('departments.diagnostic_services.laboratory_department.moh240',['moh240_results'=>$moh240_results]);
    }
    public function moh240_post()
    {
        $moh240_post= new laboratory_department_moh240(Input::all());
        $moh240_post->save();

        return redirect(route('moh240'));
    }
    public function ecgrequestform()
    {
        return view ('departments.diagnostic_services.radiology_department.ecg_request_form');
    }
    public function moh209()
    {
        $moh209_results = DB::table('diagnostic_services_moh209s')->get();
        return view('departments.diagnostic_services.radiology_department.moh209',['moh209_results'=>$moh209_results]);
    }
    public function moh209_post()
    {
        $moh209_post= new diagnostic_services_moh209(Input::all());
        $moh209_post->save();

        return redirect(route('moh209'));
    }
    public function radiologyrequestform()
    {
        $radiologyrequestform_results = DB::table('diagnostic_services_radiology_request_forms')->get();
        return view('departments.diagnostic_services.radiology_department.radiology_request_form',['radiologyrequestform_results'=>$radiologyrequestform_results]);
    }
    public function radiologyrequestform_post()
    {
        $radiologyrequestform_post= new diagnostic_services_radiology_request_form(Input::all());
        $radiologyrequestform_post->save();

        return redirect(route('radiologyrequestform'));
    }
}
