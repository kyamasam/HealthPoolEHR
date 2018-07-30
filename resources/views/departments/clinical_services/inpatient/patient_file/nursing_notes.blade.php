@extends('layouts.master')
@section('content')
    <!-- Title &
    Breadcrumbs-->
<div class="row page-titles">
    <div class="col-md-12 align-self-center">
        <h4 class="theme-cl">CARDEX/NURSING NOTES</h4>
    </div>
</div>
<!-- Title & Breadcrumbs-->

<div class="row">
    <div class="col-sm-12 col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>CARDEX/NURSING NOTES</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="datatable" class="table table-striped table-bordered table-responsive">
                        <thead>
                        <tr>
                            <th>PATIENT NAME</th>
                            <th>IP/NO</th>
                            <th>DATE</th>
                            <th>AGE</th>
                            <th>WARD</th>
                            <th>BED NUMBER</th>
                            <th>SEX</th>
                            <th>NUTRITION DAY</th>
                            <th>NUTRITION NIGHT</th>
                            <th>PSYCHOLOGICAL DAY</th>
                            <th>PSYCHOLOGICAL NIGHT</th>
                            <th>HYGIENE AND SKIN CARE DAY</th>
                            <th>HYGIENE AND SKIN CARE NIGHT</th>
                            <th>EXERCISES DAY</th>
                            <th>EXERCISES NIGHT</th>
                            <th>ELIMINATION OF WASTE DAY</th>
                            <th>ELIMINATION OF WASTE NIGHT</th>
                            <th>SAFETY DAY</th>
                            <th>SAFETY NIGHT</th>
                            <th>SOCIOLOGICAL DAY</th>
                            <th>SOCIOLOGICAL NIGHT</th>
                            <th>HEALTH EDUCATION DAY</th>
                            <th>HEALTH EDUCATION NIGHT</th>
                            <th>REST DAY</th>
                            <th>REST NIGHT</th>
                            <th>INFECTION CONTROL DAY</th>
                            <th>INFECTION CONTROL NIGHT</th>
                            <th>CONSTANT'S VISIT DAY</th>
                            <th>CONSTANT'S VISIT NIGHT</th>
                            <th>NURSE'S NAME DAY</th>
                            <th>NURSE'S NAME NIGHT</th>
                            <th>CHECKED BY HOD DAY</th>
                            <th>CHECKED BY HOD NIGHT</th>

                        </tr>
                        </thead>
                        <tbody>
                        @if(isset($nursing_notes_results))
                            @foreach($nursing_notes_results as $nursing_notes_result)
                                <tr>
                                    <td>{{ $nursing_notes_result->bio_patient_name}}</td>
                                    <td>{{ $nursing_notes_result->bio_ip_no}}</td>
                                    <td>{{ $nursing_notes_result->bio_date}}</td>
                                    <td>{{ $nursing_notes_result->bio_age}}</td>
                                    <td>{{ $nursing_notes_result->bio_ward}}</td>
                                    <td>{{ $nursing_notes_result->bio_bed_number}}</td>
                                    <td>{{ $nursing_notes_result->bio_sex}}</td>
                                    <td>{{ $nursing_notes_result->nutrition_day}}</td>
                                    <td>{{ $nursing_notes_result->nutrition_night}}</td>
                                    <td>{{ $nursing_notes_result->psychological_day}}</td>
                                    <td>{{ $nursing_notes_result->psychological_night}}</td>
                                    <td>{{ $nursing_notes_result->hygiene_day}}</td>
                                    <td>{{ $nursing_notes_result->hygiene_night}}</td>
                                    <td>{{ $nursing_notes_result->exercises_day}}</td>
                                    <td>{{ $nursing_notes_result->exercises_night}}</td>
                                    <td>{{ $nursing_notes_result->waste_day}}</td>
                                    <td>{{ $nursing_notes_result->waste_night}}</td>
                                    <td>{{ $nursing_notes_result->safety_day}}</td>
                                    <td>{{ $nursing_notes_result->safety_night}}</td>
                                    <td>{{ $nursing_notes_result->sociology_day}}</td>
                                    <td>{{ $nursing_notes_result->sociology_night}}</td>
                                    <td>{{ $nursing_notes_result->health_day}}</td>
                                    <td>{{ $nursing_notes_result->health_night}}</td>
                                    <td>{{ $nursing_notes_result->rest_day}}</td>
                                    <td>{{ $nursing_notes_result->rest_night}}</td>
                                    <td>{{ $nursing_notes_result->infection_day}}</td>
                                    <td>{{ $nursing_notes_result->infection_night}}</td>
                                    <td>{{ $nursing_notes_result->visit_day}}</td>
                                    <td>{{ $nursing_notes_result->visit_night}}</td>
                                    <td>{{ $nursing_notes_result->nurse_day}}</td>
                                    <td>{{ $nursing_notes_result->nurse_night}}</td>
                                    <td>{{ $nursing_notes_result->hod_day}}</td>
                                    <td>{{ $nursing_notes_result->hod_night}}</td>


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
                            <h4 class="modal-title">Add  Information</h4>
                        </div>
                        <div class="modal-body">

                            <div class="col-md-12">
                                <div class="card">
                                    <div class="container">
                                        <form action="{{route('nursing_notes_post')}}" method="post" >{!! csrf_field() !!}

                                            <div class="">
                                                <div class="offset-md-6">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <p>PATIENTS NAME:</p>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <input type="text" name="bio_patient_name" class="form-control" placeholder="click to enter patients name"></td>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <p>IP NUMBER:</p>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <input type="text" name="bio_ip_no" class="form-control" placeholder="click to enter IP number"></td>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <p>DATE:</p>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <input type="date" name="bio_date" class="form-control" placeholder="click to enter date">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <p>AGE:</p>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <input type="number" name="bio_age" class="form-control" placeholder="click to enter age">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <p>WARD:</p>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <input type="text" name="bio_ward" class="form-control" placeholder="click to enter ward number">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <p>BED NUMBER:</p>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <input type="text" name="bio_bed_number" class="form-control" placeholder="click to enter bed number">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <p>SEX:</p>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <select class="form-control" name="bio_sex" id="sex">
                                                                <option value="male">--Choose sex--</option>
                                                                <option value="male">Male</option>
                                                                <option value="female">Female</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-m-3 offset-md-2">
                                                <H3 class="mt-20">
                                                    NURSING DAILY PROGRESS REPORT/CARDEX<br><br>
                                                    HAVE YOU ADDRESSED THE FOLLOWING PATIENTS NEEDS
                                                </H3>
                                            </div>
                                            <table class="table table-bordered">
                                                <thead>
                                                <tr>
                                                    <th scope="col-md-2">DATE</th>
                                                    <th scope="col-md-2" colspan="2"></th>
                                                    <th scope="col-md-2" colspan="2">CRITERIA PLAN</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr class="col-md-4">
                                                    <td>PATIENT'S NEED</td>
                                                    <td>DAY</td>
                                                    <td>NIGHT</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>1.NUTRITION</td>
                                                    <td><input type="checkbox"  name="nutrition_day" class="form-control" placeholder=""></td>
                                                    <td><input type="checkbox" name="nutrition_night" class="form-control" placeholder=""></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>2.PSYCHOLOGICAL</td>
                                                    <td><input type="checkbox" name="psychological_day" class="form-control" placeholder=""></td>
                                                    <td><input type="checkbox" name="psychological_night" class="form-control" placeholder=""></td>
                                                    <td>ASSESSMENT</td>
                                                </tr>
                                                <tr>
                                                    <td>3.HYGIENE AND SKIN CARE</td>
                                                    <td><input type="checkbox" name="hygiene_day" class="form-control" placeholder=""></td>
                                                    <td><input type="checkbox" name="hygiene_night" class="form-control" placeholder=""></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>4.EXERCISES</td>
                                                    <td><input type="checkbox" name="exercises_day" class="form-control" placeholder=""></td>
                                                    <td><input type="checkbox" name="exercises_night" class="form-control" placeholder=""></td>
                                                    <td>INTERVIEW</td>
                                                </tr>
                                                <tr>
                                                    <td>5.ELIMINATION OF WASTE</td>
                                                    <td><input type="checkbox" name="waste_day" class="form-control" placeholder=""></td>
                                                    <td><input type="checkbox" name="waste_night" class="form-control" placeholder=""></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>6.SAFETY</td>
                                                    <td><input type="checkbox" name="safety_day" class="form-control" placeholder=""></td>
                                                    <td><input type="checkbox" name="safety_night" class="form-control" placeholder=""></td>
                                                    <td>REASSESSMENTS</td>

                                                </tr>
                                                <tr>
                                                    <td>7.SOCIOLOGICAL</td>
                                                    <td><input type="checkbox" name="sociology_day" class="form-control" placeholder=""></td>
                                                    <td><input type="checkbox" name="sociology_night" class="form-control" placeholder=""></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>8.HEALTH EDUCATION</td>
                                                    <td><input type="checkbox" name="health_day" class="form-control" placeholder=""></td>
                                                    <td><input type="checkbox" name="health_night" class="form-control" placeholder=""></td>
                                                    <td>ESCALATION</td>
                                                </tr>
                                                <tr>
                                                    <td>9.REST</td>
                                                    <td><input type="checkbox" name="rest_day" class="form-control" placeholder=""></td>
                                                    <td><input type="checkbox" name="rest_night" class="form-control" placeholder=""></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>10.INFECTION CONTROL</td>
                                                    <td><input type="checkbox" name="infection_day" class="form-control" placeholder=""></td>
                                                    <td><input type="checkbox" name="infection_night" class="form-control" placeholder=""></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>11.CONSTANT'S VISIT</td>
                                                    <td><input type="checkbox" name="visit_day" class="form-control" placeholder=""></td>
                                                    <td><input type="checkbox" name="visit_night" class="form-control" placeholder=""></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>12.NURSE'S NAME</td>
                                                    <td><input type="checkbox" name="nurse_day" class="form-control" placeholder=""></td>
                                                    <td><input type="checkbox" name="nurse_night" class="form-control" placeholder=""></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>12.CHECKED BY HOD</td>
                                                    <td><input type="checkbox" name="hod_day" class="form-control" placeholder=""></td>
                                                    <td><input type="checkbox" name="hod_night" class="form-control" placeholder=""></td>
                                                    <td></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </form>
                                        <!--form here--->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

