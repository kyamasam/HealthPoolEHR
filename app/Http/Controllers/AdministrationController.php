<?php

namespace App\Http\Controllers;

use App\administration_billing;
use App\administration_employees;
use App\administration_official_use;
use App\administration_patient_information;
use App\administration_patient_information_a;
use App\recruitment;
use App\recruitments_form;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class administrationController extends Controller
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('departments.administration.home');
    }
    public function attendances()
    {
        $attendances_results = DB::table('administration_attendances')->get();
        return view('departments.administration.human_resource.attendances',['attendances'=>$attendances_results]);
    }
    public function billing()
    {
        $billing = DB::table('administration_billings')->get();
        return view('departments.administration.registration_desk.front_office_desk.billing',[
            'billing'=>$billing
        ]);
    }
    public function administration_home()
    {
        return view('departments.administration.administration');
    }
    public function official_use()
    {
        $official_use = DB::table('administration_official_uses')->get();
        return view('departments.administration.registration_desk.front_office_desk.official_use',[
            'official_use'=>$official_use
        ]);
    }
    public function patient_information()
    {
        $patient_information =DB::table('administration_patient_informations')->get();
        return view('departments.administration.registration_desk.front_office_desk.patient_information',[
            'patient_information'=>$patient_information
        ]);
    }
    public function recruitment()
    {
        $recruitment_results =DB::table('recruitments_forms') ->latest() ->get();
        return view('departments.administration.human_resource.recruitment',[
            'recruitment_results'=>$recruitment_results
        ]);
    }
    public function recruitments_post()
    {


        $recruitment = new recruitments_form((request()->all()));
        $recruitment->save();
        return redirect(route('recruitment'));

    }




    public function patient_information_a()
    {
        return view('departments.administration.registration_desk.reservations.patient_information_a');
    }

    public function attendances_post()
    {
        $attendances = new administration_attendances(Input::all());
        $attendances->save();
        return redirect(route('attendances'));
    }
    public function patient_information_a_post()
    {
        $patient_information_a = new administration_patient_information_a(Input::all());
        $patient_information_a->save();
        return redirect(route('patient_information_a'));
    }
    public function employees()
    {
        $employees = DB::table('administration_employees')->get();
        return view('departments.administration.human_resource.employees',[
            'employees'=> $employees
        ]);
    }
    public function employees_post()
    {
        $employee = new administration_employees(Input::all());
        $employee->save();


        return redirect(route('employees'));
    }
    public function billing_post()
    {
        $billing = new administration_billing(Input::all());
        $billing->save();


        return redirect(route('billing'));
    }
    public function official_use_post()
    {
        $official_use = new administration_official_use(Input::all());
        $official_use->save();


        return redirect(route('official_use'));
    }
    public function patient_information_post()
    {
        $patient_information = new administration_patient_information(Input::all());
        $patient_information->save();
        return redirect(route('patient_information'));
    }
}
