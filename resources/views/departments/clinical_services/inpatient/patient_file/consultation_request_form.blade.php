@extends('layouts.master')

@section('content')
    <!-- Title & Breadcrumbs-->
<div class="row page-titles">
    <div class="col-md-12 align-self-center">
        <h4 class="theme-cl">CONSULTATION REQUEST FORM</h4>
    </div>
</div>
<div class="row">
    <div class="col-sm-12 col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>CONSULTATION REQUEST FORM</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="datatable" class="table table-striped table-bordered table-responsive">
                        <thead>
                        <tr>
                            <th>PATIENT NAME</th>
                            <th>IP NUMBER</th>
                            <th>DATE</th>
                            <th>AGE</th>
                            <th>WARD</th>
                            <th>BED NUMBER</th>
                            <th>SEX</th>
                            <th>THE OPINION OF MR/DR</th>
                            <th>IN THE</th>
                            <th>PATIENT FULL NAME</th>
                            <th>REFERRED FROM WARD</th>
                            <th>BED NUMBER</th>
                            <th>CLINIC</th>
                            <th>UNIT NUMBER</th>
                            <th>CASUALTY NUMBER</th>
                            <th>OTHERS</th>
                            <th>DIAGNOSIS</th>
                            <th>BRIEF DETAILS</th>
                            <th>DEGREE OF URGENCY</th>
                            <th>SIGNATURE</th>
                            <th>NAME PRINTED</th>

                        </tr>
                        </thead>
                        <tbody>
                        @if(isset($consultation_request_form_results))
                            @foreach($consultation_request_form_results as $consultation_request_form_result)
                                <tr>
                                    <td>{{$consultation_request_form_result->bio_patient_name}}</td>
                                    <td>{{$consultation_request_form_result->bio_ip_no}}</td>
                                    <td>{{$consultation_request_form_result->bio_date}}</td>
                                    <td>{{$consultation_request_form_result->bio_age}}</td>
                                    <td>{{$consultation_request_form_result->bio_ward}}</td>
                                    <td>{{$consultation_request_form_result->bio_bed_number}}</td>
                                    <td>{{$consultation_request_form_result->bio_sex}}</td>
                                    <td>{{$consultation_request_form_result->dr_mr}}</td>
                                    <td>{{$consultation_request_form_result->in_the}}</td>
                                    <td>{{$consultation_request_form_result->full_name_of_patient}}</td>
                                    <td>{{$consultation_request_form_result->referred_from_ward}}</td>
                                    <td>{{$consultation_request_form_result->bed_number}}</td>
                                    <td>{{$consultation_request_form_result->clinic}}</td>
                                    <td>{{$consultation_request_form_result->unit_no}}</td>
                                    <td>{{$consultation_request_form_result->casualty_no}}</td>
                                    <td>{{$consultation_request_form_result->others}}</td>
                                    <td>{{$consultation_request_form_result->diagnosis}}</td>
                                    <td>{{$consultation_request_form_result->reasons_for_consultations}}</td>
                                    <td>{{$consultation_request_form_result->urgent}}</td>
                                    <td>{{$consultation_request_form_result->signature}}</td>
                                    <td>{{$consultation_request_form_result->name_printed}}</td>


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
                            <h4 class="modal-title">Add Request Information</h4>
                        </div>
                        <div class="modal-body">

                            <div class="col-md-12">
                                <div class="card">
                                    <div class="container">
                                        <form action="{{route('consultation_request_form_post')}}" method="post" >{!! csrf_field() !!}
                                            <div class="col-md-12">
                                                <div class="">
                                                    <div class="offset-md-6">
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <p>PATIENTS NAME:</p>
                                                            </div>
                                                            <div class="col-md-9">
                                                                <input type=" text" name="bio_patient_name" class="form-control" placeholder="click to enter patients name"></td>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <p>IP NUMBER:</p>
                                                            </div>
                                                            <div class="col-md-9">
                                                                <input type=" text" name="bio_ip_no" class="form-control" placeholder="click to enter IP number"></td>
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
                                                <div class="container-fluid">
                                                    <h2 class="text-center">CONSULTATION REQUEST FORM</h2>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-2">
                                                            <p>The opinion of DR/MR</p>
                                                        </div>
                                                        <div class="form-group col-md-3">
                                                            <input type="text" name="dr_mr" class="form-control">
                                                        </div>
                                                        <div class="form-group col-md-1 text-center">
                                                            <p>in the</p>
                                                        </div>
                                                        <div class="form-group col-md-3">
                                                            <input type="text" name="in_the" class="form-control">
                                                        </div>
                                                        <div class="form-group col-md-3">
                                                            <p>CONSULTANT CLINIC would be appreciated in this case.</p>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Full name of patient</label>
                                                        <input type="text" name="full_name_of_patient" class="form-control">
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <label for="">Referred from ward</label>
                                                            <input type="text" name="referred_from_ward" class="form-control">
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label for="">Bed number</label>
                                                            <input type="number" name="bed_number" class="form-control">
                                                        </div>
                                                    </div>
                                                    <p class="text-center">OR</p>
                                                    <div class="form-group">
                                                        <label for="">Clinic</label>
                                                        <input type="text" name="clinic" class="form-control">
                                                    </div>
                                                    <p><b>Previous patient numbers</b></p>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-4">
                                                            <label for="">Unit No.</label>
                                                            <input type="number" name="unit_no" class="form-control">
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label for="">Casualty No.</label>
                                                            <input type="number" name="casualty_no" class="form-control">
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label for="">Others</label>
                                                            <input type="number" name="others" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Diagnosis</label>
                                                        <textarea type="text" name="diagnosis" class="form-control"></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Brief details indicating reasons for consultations</label>
                                                        <textarea name="reasons_for_consultations" class="form-control"></textarea>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-4">
                                                            <p>Please circle degree of urgency</p>
                                                            <div class="radio-inline">
                                                                <input name="urgent" value="Very urgent" class="form-check-input" type="radio">
                                                                <label for="" class="form-check-label">Very urgent</label>
                                                            </div>
                                                            <div class="radio-inline">
                                                                <input name="urgent" value="Urgent" class="form-check-input" type="radio">
                                                                <label for="" class="form-check-label">Urgent</label>
                                                            </div>
                                                            <div class="radio-inline">
                                                                <input name="urgent" value="Fairly urgent" class="form-check-input" type="radio">
                                                                <label for="" class="form-check-label">Fairly urgent</label>
                                                            </div>
                                                            <div class="radio-inline">
                                                                <input name="urgent" value="Not urgent" class="form-check-input" type="radio">
                                                                <label for="" class="form-check-label">Not urgent</label>
                                                            </div>
                                                        </div>
                                                        <div class="form-group col-md-8">
                                                            <div class="form-group">
                                                                <label for="">Signature</label>
                                                                <input type="text" name="signature" class="form-control">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="">Name printed</label>
                                                                <input type="text" name="name_printed" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
