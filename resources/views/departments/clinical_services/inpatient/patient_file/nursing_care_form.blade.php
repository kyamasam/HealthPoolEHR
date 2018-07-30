@extends('layouts.master')
@section('content')
    <!-- Title &
    Breadcrumbs-->
<div class="row page-titles">
    <div class="col-md-12 align-self-center">
        <h4 class="theme-cl">NURSING CARE PLAN</h4>
    </div>
</div>
<!-- Title & Breadcrumbs-->

<div class="row">
    <div class="col-sm-12 col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>NURSING CARE PLAN</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="datatable" class="table table-striped table-bordered table-responsive">
                        <thead>
                        <tr>
                            <th>PATIENTS NAME</th>
                            <th>IP NUMBER</th>
                            <th>DATE</th>
                            <th>AGE</th>
                            <th>WARD</th>
                            <th>BED NUMBER</th>
                            <th>SEX</th>
                            <th>NAME</th>
                            <th>DATE</th>
                            <th>DIAGNOSIS</th>
                            <th>TIME</th>
                            <th>ASSESSMENT</th>
                            <th>NURSING DIAGNOSIS</th>
                            <th>EXPECTED OUTCOME</th>
                            <th>IMPLEMENTATION</th>
                            <th>RATIONALE</th>
                            <th>EVALUATION</th>
                            <th>SIGNATURE</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(isset($nursing_care_form))
                            @foreach($nursing_care_form as $nursing_care_form_result)
                                <tr>
                                    <td>{{ $nursing_care_form_result->bio_patient_name}}</td>
                                    <td>{{ $nursing_care_form_result->bio_ip_no}}</td>
                                    <td>{{ $nursing_care_form_result->bio_date}}</td>
                                    <td>{{ $nursing_care_form_result->bio_age}}</td>
                                    <td>{{ $nursing_care_form_result->bio_ward}}</td>
                                    <td>{{ $nursing_care_form_result->bio_bed_number}}</td>
                                    <td>{{ $nursing_care_form_result->bio_sex}}</td>
                                    <td>{{ $nursing_care_form_result->name}}</td>
                                    <td>{{ $nursing_care_form_result->date}}</td>
                                    <td>{{ $nursing_care_form_result->diagnosis}}</td>
                                    <td>{{ $nursing_care_form_result->time}}</td>
                                    <td>{{ $nursing_care_form_result->assessment}}</td>
                                    <td>{{ $nursing_care_form_result->nursing_diagnosis}}</td>
                                    <td>{{ $nursing_care_form_result->expected_outcome}}</td>
                                    <td>{{ $nursing_care_form_result->implementation}}</td>
                                    <td>{{ $nursing_care_form_result->rationale}}</td>
                                    <td>{{ $nursing_care_form_result->evaluation}}</td>
                                    <td>{{ $nursing_care_form_result->signature}}</td>
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
                                        <form action="{{route('nursingcareform_post')}}" method="post" >{!! csrf_field() !!}
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
                                            <div class="col-m-3 offset-md-2">
                                                <H3 class="mt-20">
                                                    NURSING CARE PLAN
                                                </H3>
                                            </div>
                                            <table  class="table table-bordered">

                                                <div class="row">
                                                    <span class="row"> <span class="col-md-5">NAME:</span> <span class="col-md-5"> <input type="text" name="name" class=" form-control" placeholder=""></span></span>
                                                    <span class="row"> <span class="col-md-5">DATE:</span> <span class="col-md-6"> <input type="date" name="date" class=" form-control" placeholder=""></span></span>
                                                    <span class="row"> <span class="col-md-5">DIAGNOSIS:</span> <span class="col-md-5"> <input type="text" name="diagnosis" class=" form-control" placeholder=""></span></span>
                                                </div>
                                                <br><br>
                                                <thead>
                                                <tr>
                                                    <th>Date and Time</th>
                                                    <th>Date</th>
                                                    <th>Assessment</th>
                                                    <th>Nursing diagnosis</th>
                                                    <th>Expected Outcome</th>
                                                    <th>Implementation</th>
                                                    <th>Rationale</th>
                                                    <th>Evaluation</th>
                                                    <th>Signature</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td><input type="datetime-local" name="time" class="form-control" placeholder=""></td>
                                                    <td><textarea type="text" name="assessment" class="form-control" placeholder=""></textarea></td>
                                                    <td><textarea type="text" name="nursing_diagnosis" class="form-control" placeholder=""></textarea></td>
                                                    <td><textarea type="text" name="expected_outcome" class="form-control" placeholder=""></textarea></td>
                                                    <td><textarea type="text" name="implementation" class="form-control" placeholder=""></textarea></td>
                                                    <td><textarea type="text" name="rationale" class="form-control" placeholder=""></textarea></td>
                                                    <td><textarea type="text" name="evaluation" class="form-control" placeholder=""></textarea></td>
                                                    <td><input type="password" name="signature" class="form-control" placeholder=""></td>
                                                </tr>
                                                </tbody>
                                            </table>
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
            </div>
        </div>
    </div>
</div>
@endsection

