@extends('layouts.master')
@section('content')
    <!-- Title &
    Breadcrumbs-->
    <div class="row page-titles">
        <div class="col-md-12 align-self-center">
            <h4 class="theme-cl">NUTRITION CARE PROGRESS FORM</h4>
        </div>
    </div>
    <!-- Title & Breadcrumbs-->
    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>NUTRITION CARE PROGRESS FORM</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable" class="table table-bordered">
                            <thead>
                            <tr>
                                <th>patient_name</th>
                                <th>doa</th>
                                <th>dod</th>
                                <th>ward</th>
                                <th>bed</th>
                                <th>ip_no</th>
                                <th>age</th>
                                <th>sex</th>
                                <th>principle_diagnosis</th>
                                <th>height</th>
                                <th>weight</th>
                                <th>bmi</th>
                                <th>muac</th>
                                <th>z_score</th>
                                <th>others</th>
                                <th>physical_exam</th>
                                <th>medications</th>
                                <th>procedures</th>
                                <th>prescribed_diet</th>
                                <th>1problem</th>
                                <th>etiology</th>
                                <th>2problem</th>
                                <th>etiology1</th>
                                <th>signs_symptoms</th>
                                <th>nutrition_prescription</th>
                                <th>prescribed_diet1</th>
                                <th>prot</th>
                                <th>chos</th>
                                <th>fat</th>
                                <th>kcals</th>
                                <th>others</th>
                                <th>route_of_administration</th>
                                <th>other_interventions</th>
                                <th>nutritionist</th>
                                <th>sign</th>
                                <th>date</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(isset($nutrition_care_process_form_results))
                                @foreach($nutrition_care_process_form_results as $nutrition_care_process_form_result)
                                    <tr>
                                        <td>{{$nutrition_care_process_form_result->patient_name}}</td>
                                        <td>{{$nutrition_care_process_form_result->doa}}</td>
                                        <td>{{$nutrition_care_process_form_result->dod}}</td>
                                        <td>{{$nutrition_care_process_form_result->ward}}</td>
                                        <td>{{$nutrition_care_process_form_result->bed}}</td>
                                        <td>{{$nutrition_care_process_form_result->ip_no}}</td>
                                        <td>{{$nutrition_care_process_form_result->age}}</td>
                                        <td>{{$nutrition_care_process_form_result->sex}}</td>
                                        <td>{{$nutrition_care_process_form_result->principle_diagnosis}}</td>
                                        <td>{{$nutrition_care_process_form_result->height}}</td>
                                        <td>{{$nutrition_care_process_form_result->weight}}</td>
                                        <td>{{$nutrition_care_process_form_result->bmi}}</td>
                                        <td>{{$nutrition_care_process_form_result->muac}}</td>
                                        <td>{{$nutrition_care_process_form_result->z_score}}</td>
                                        <td>{{$nutrition_care_process_form_result->others}}</td>
                                        <td>{{$nutrition_care_process_form_result->physical_exam}}</td>
                                        <td>{{$nutrition_care_process_form_result->medications}}</td>
                                        <td>{{$nutrition_care_process_form_result->procedures}}</td>
                                        <td>{{$nutrition_care_process_form_result->prescribed_diet}}</td>
                                        <td>{{$nutrition_care_process_form_result->problem1}}</td>
                                        <td>{{$nutrition_care_process_form_result->etiology}}</td>
                                        <td>{{$nutrition_care_process_form_result->problem2}}</td>
                                        <td>{{$nutrition_care_process_form_result->etiology1}}</td>
                                        <td>{{$nutrition_care_process_form_result->signs_symptoms}}</td>
                                        <td>{{$nutrition_care_process_form_result->nutrition_prescription}}</td>
                                        <td>{{$nutrition_care_process_form_result->prescribed_diet1}}</td>
                                        <td>{{$nutrition_care_process_form_result->prot}}</td>
                                        <td>{{$nutrition_care_process_form_result->chos}}</td>
                                        <td>{{$nutrition_care_process_form_result->fat}}</td>
                                        <td>{{$nutrition_care_process_form_result->kcals}}</td>
                                        <td>{{$nutrition_care_process_form_result->others1}}</td>
                                        <td>{{$nutrition_care_process_form_result->route_of_administration}}</td>
                                        <td>{{$nutrition_care_process_form_result->other_interventions}}</td>
                                        <td>{{$nutrition_care_process_form_result->nutritionist}}</td>
                                        <td>{{$nutrition_care_process_form_result->sign}}</td>
                                        <td>{{$nutrition_care_process_form_result->date}}</td>
                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="content">
                        <button class="btn btn-success" data-toggle="modal" data-target="#myModal">Add more Items</button>
                        {{--<button class="btn btn-info" data-toggle="modal" data-target="#myModal">Print</button>--}}
                    </div>
                </div>
                <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog modal-lg">

                        <!— Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">NUTRITION CARE PROCESS FORM</h4>
                            </div>
                            <form action="{{route('patient_file_nutrition_care_post')}}" method="post" >{!! csrf_field() !!}
                                <div class="container-fluid card card-body">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>Patient name:<input type="text" name="patient_name" class=" form-control" placeholder=""></th>
                                        <th>DOA:<input type="date" name="doa" class=" form-control" placeholder="">DOD:<input type="date" name="dod" class=" form-control" placeholder=""></th>
                                        <th>Ward:<input type="text" name="ward" class=" form-control" placeholder="">BED:<input type="text" name="bed" class=" form-control" placeholder=""></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>IP/NO:<input type="number" name="ip_no" class=" form-control" placeholder=""></td>
                                        <td>Age:<input type="number" name="age" class=" form-control" placeholder=""></td>
                                        <td>Sex:
                                            <select name="sex">
                                                <option value="sex">Male</option>
                                                <option value="sex">Female</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Principle diagnosis:<textarea type="text" name="principle_diagnosis" class=" form-control" placeholder=""></textarea></td>
                                    </tr>
                                    </tbody>
                                </table>
                                <h3>NUTRITION ASSESSMENT DATA</h3>
                                <hr>
                                <h4>Biochemical Data,Medical Tests and procedures &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Antropometric Measurements</h4>
                                <span class="">
                                    <span class="row">
                                        <span class="col-md-3">Height(m)<input type="number" name="height" class=" form-control" placeholder=""></span>
                                        <span class="col-md-3">Weight(Kg)<input type="number" name="weight" class=" form-control" placeholder=""></span>
                                        <span class="col-md-3">BMI(kg/m2)<input type="number" name="bmi" class=" form-control" placeholder=""></span>
                                        <span class="col-md-3">MUAC(cm)<input type="number" name="muac" class=" form-control" placeholder=""></span>
                                        <span class="col-md-3">Z-Score<input type="number" name="z_score" class=" form-control" placeholder=""></span>
                                        <span class="col-md-3">Others<input type="text" name="others" class=" form-control" placeholder=""></span>
                                    </span>
                                </span>
                                <hr>
                                <h4>Physical Exam findings/Clinical Assessment &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Food and Nutrition History</h4>
                                <textarea type="text" name="physical_exam" class=" form-control" placeholder=""></textarea>
                                <hr>
                                <h4>Client's History</h4>
                                <span class="row">
                                Medications:<textarea type="text" name="medications" class=" form-control" placeholder=""></textarea>
                                Procedures:<textarea type="text" name="procedures" class=" form-control" placeholder=""></textarea>
                                Prescribed Diet:<textarea type="text" name="prescribed_diet" class=" form-control" placeholder=""></textarea>

                            </span>
                                <hr>
                                <h4>NUTRITION DIAGNOSIS</h4>
                                <hr>
                                #1 Problem:<textarea type="text" name="problem1" class=" form-control" placeholder=""></textarea><br>
                                Etiology:<textarea type="text" name="etiology" class=" form-control" placeholder=""></textarea><br>
                                #2 Problems:<textarea type="text" name="problem2" class=" form-control" placeholder=""></textarea><br>
                                Etiology:<textarea type="text" name="etiology1" class=" form-control" placeholder=""></textarea><br>
                                Signs/Symptoms:<textarea type="text" name="signs_symptoms" class=" form-control" placeholder=""></textarea>
                                <hr>
                                <h4>NUTRITION INTERVENTION</h4>
                                Nutrition Prescription:<textarea type="text" name="nutrition_prescription" class=" form-control" placeholder=""></textarea><br>
                                Prescribed Diet:<textarea type="text" name="prescribed_diet1" class=" form-control" placeholder=""></textarea>
                                <span class="">
                                    <span class="row">
                                        <span class="col-md-3">Prot(gms)<input type="number" name="prot" class=" form-control" placeholder=""></span>
                                        <span class="col-md-3">CHOs(gm)<input type="number" name="chos" class=" form-control" placeholder=""></span>
                                        <span class="col-md-3">Fat(gm)<input type="number" name="fat" class=" form-control" placeholder=""></span>
                                        <span class="col-md-3">Kcal<input type="number" name="kcals" class=" form-control" placeholder=""></span>
                                    </span>
                                </span>
                                <span class="">
                                    <span class="row">
                                        <span class="col-md-3">Others<input type="text" name="others1" class=" form-control" placeholder=""></span>
                                        <span class="col-md-3">Route of Administration<input type="text" name="route_of_administration" class=" form-control" placeholder=""></span>
                                    </span>
                                </span>
                                Other interventions:<textarea type="text" name="other_interventions" class=" form-control" placeholder=""></textarea>

                                <span class="">
                                    <span class="row">
                                        <span class="col-md-3">Nutritionist<input type="text" name="nutritionist" class=" form-control" placeholder=""></span>
                                        <span class="col-md-3">Sign<input type="text" name="sign" class=" form-control" placeholder=""></span>
                                        <span class="col-md-3">Date<input type="date" name="date" class=" form-control" placeholder=""></span>
                                    </span>
                                </span>
                                <br><br>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection