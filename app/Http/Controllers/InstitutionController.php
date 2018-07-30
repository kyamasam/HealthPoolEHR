<?php

namespace App\Http\Controllers;

use App\Institution;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Faker\Generator as Faker;

use Image;

class InstitutionController extends Controller
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
    public function create(Request $request)
    {
        $institution= new Institution(
            [
            'name'=> request('name'),
            'email'=> request('email'),
            'telephone'=> request('telephone'),
            'registration_number'=> request('registration_number'),
            'type'=> request('type'),
            'keph_level'=> request('keph_level'),
            'facility_type'=> implode(',',request('facility_type')),
            'owner' => request('owner'),
            'regulatory_body' => implode(',',request('regulatory_body')),
            'bed_capacity'=> request('bed_capacity'),
            'branches'=> request('branches'),
            'working_days'=>implode(',',request('working_days' )),
            'brief_description_of_services'=> request('brief_description_of_services'),
            'insurance'=> implode(',',request('insurance')),
            'company_name'=> request('company_name'),
            'legal_name'=> request('legal_name'),
            'cots'=> request('cots'),
            'tax_id'=> request('tax_id'),
            'street_address'=> request('street_address'),
            'city'=> request('city'),
            'county'=> request('county'),
            'address'=> request('address'),
            'sub_county'=> request('sub_county'),
            'ward'=> request('ward'),
        ]);
        $institution->save();

        session()->flash('message','institution created');

        return redirect(route('hospital_profile'));
    }

 public function store(Request $request){

 }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update_hospital_profile(Request $request)
    {
        //
        {
            $institution=Auth::user()->institution;

            $institution->name=request('name');
            $institution->email=request('email');
            $institution->telephone=request('telephone');
            $institution->registration_number=request('registration_number');
            $institution->type=request('type');
            $institution->keph_level=request('keph_level');
            $institution->facility_type=implode(',',request('facility_type'));
            $institution->owner=request('owner');
            $institution->regulatory_body= implode(',',request('regulatory_body'));
            $institution->bed_capacity=request('bed_capacity');
            $institution->branches=request('branches');
            $institution->working_days=implode(',', request('working_days'));
            $institution->brief_description_of_services=request('brief_description_of_services');
            $institution->insurance=implode(',',request('insurance'));
            $institution->company_name=request('company_name');
            $institution->legal_name=request('legal_name');
            $institution->tax_id=request('tax_id');
            $institution->cots=request('cots');
            $institution->street_address=request('street_address');
            $institution->city=request('city');
            $institution->county=request('county');
            $institution->address=request('address');
            $institution->sub_county=request('sub_county');
            $institution->ward=request('ward');
     
            $institution->save();
            session()->flash('message','hospital info edited successfully');

        return redirect(route('hospital_profile'));
    }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Institution  $institution
     * @return \Illuminate\Http\Response
     */

    public function hospital_profile()
    {
        return view('auth.admin.hospital_settings');
    }

    public function delete_profile($user_id)
    {
        $user = User::find($user_id);

        $user->delete();
        session()->flash('message', 'User deleted successfully!');
        return redirect(route('manage_users'));
    }

    public function make_admin($user_id)
    {
        $user = User::find($user_id);

        $user->is_admin=1;

        $user->save();
        session()->flash('message', 'admin added successful!');
        return redirect(route('manage_users'));
    }

    public function remove_admin($user_id)
    {
        $user = User::find($user_id);

        $user->is_admin=0;

        $user->save();

        session()->flash('message', 'admin removed successfully!');
        return redirect(route('manage_users'));
    }

    public function manage_users()
    {
        $institutions=DB::table('institutions')->latest()->get();
        $roles=DB::table('roles')->latest()->get();

        return view('auth.admin.manage_users' , ['institutions'=>$institutions, 'roles'=>$roles]);
    }

    public function admin_update_profile($user_id, Request $request)
    {
        $selected_user=User::find($user_id);
        $selected_user->name=request('name');
        $selected_user->email=request('email');
        $selected_user->institution_id=request('institution_id');
        $selected_user->role=request('role');

        $selected_user->save();
        session()->flash('message','profile edited successfully');

        return redirect(route('manage_users'));
    }



    public function set_logo(Request $request)
    {
        if ($request->hasFile('cover')) {
            $logo = $request->file('cover');
            $filename = time() . '.' . $logo->getClientOriginalExtension();
            Image::make($logo)->resize(300, 300)->save(public_path('/uploads/logos/' . $filename));
            //Image::make($logo)->save(public_path('/uploads/logos/' . $filename));
            $institution = Auth::user()->institution;
            $institution->avatar = $filename;
            $institution->save();
        }

        return redirect(route('hospital_profile'));
    }

    public function show(Institution $institution)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Institution  $institution
     * @return \Illuminate\Http\Response
     */
    public function edit(Institution $institution)
    {
        //
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Institution  $institution
     * @return \Illuminate\Http\Response
     */
    public function destroy(Institution $institution)
    {
        //
    }


    public function register_institution(){


        return view('auth.institution_register');
    }
}
