@extends('layouts.master')
@section('content')
    <!-- Title & Breadcrumbs-->
    <div class="row page-titles">
        <div class="col-md-12 align-self-center">
            <h4 class="theme-cl">EEG REQUEST FORM</h4>
        </div>
    </div>
    <!-- Title & Breadcrumbs-->

    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>EEG REQUEST FORM</h4>
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
                                <th>PATIENT NAME</th>
                                <th>UNIT NUMBER</th>
                                <th>AGE</th>
                                <th>SEX</th>
                                <th>WARD CLINIC</th>
                                <th>BED</th>
                                <th>WARD CLINIC</th>
                                <th>BED</th>
                                <th>PREVIOUS ECG</th>
                                <th>REPORT TO BE SENT TO</th>
                                <th>MEDICATION</th>
                                <th>DIGOXIN/DIUREIICS/OTHERS</th>
                                <th>RELEVANT HISTORY AND CLINICAL FINDINGS</th>
                                <th>DATE</th>
                                <th>SIGNED</th>
                                <th>PRINTED</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(isset($eeg_report_results))
                                @foreach($eeg_report_results as $eeg_report_result)
                                    <tr>
                                        <td>{{ $eeg_report_result->bio_patient_name}}</td>
                                        <td>{{ $eeg_report_result->bio_ip_no}}</td>
                                        <td>{{ $eeg_report_result->bio_date}}</td>
                                        <td>{{ $eeg_report_result->bio_age}}</td>
                                        <td>{{ $eeg_report_result->bio_ward}}</td>
                                        <td>{{ $eeg_report_result->bio_bed_number}}</td>
                                        <td>{{ $eeg_report_result->bio_sex}}</td>


                                        <td>{{ $eeg_report_result->patient_name}}</td>
                                        <td>{{ $eeg_report_result->unit_number}}</td>
                                        <td>{{ $eeg_report_result->age}}</td>
                                        <td>{{ $eeg_report_result->sex}}</td>
                                        <td>{{ $eeg_report_result->ward_clinic}}</td>
                                        <td>{{ $eeg_report_result->bed}}</td>
                                        <td>{{ $eeg_report_result->previous_ecg}}</td>
                                        <td>{{ $eeg_report_result->report_to_be_sent_to}}</td>
                                        <td>{{ $eeg_report_result->medication}}</td>
                                        <td>{{ $eeg_report_result->diuretics}}</td>
                                        <td>{{ $eeg_report_result->provisional_diagnosis}}</td>
                                        <td>{{ $eeg_report_result->date}}</td>
                                        <td>{{ $eeg_report_result->signed}}</td>
                                        <td>{{ $eeg_report_result->printed}}</td>


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
                                <h4 class="modal-title">Add ECG Information</h4>
                            </div>
                            <div class="modal-body">

                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="container-fluid">
                                            <form action="{{route('ecg_form_post')}}" method="post" >{!! csrf_field() !!}


                                                <h1 class="text-center"></h1>
                                                <h2 class="text-center">E.C.G REQUEST FORM</h2>
                                                <div class="form-row">
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


                                                                <div class="form-group col-md-9">
                                                                    <label for="">Patient Name</label>
                                                                    <input type="text" name="patient_name" class="form-control">
                                                                </div>
                                                                <div class="form-group col-md-3">
                                                                    <label for="">Unit Number</label>
                                                                    <input type="number" name="unit_number" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="form-row">
                                                                <div class="form-group col-md-3">
                                                                    <label for="">Age</label>
                                                                    <input type="number" name="age" class="form-control">
                                                                </div>
                                                                <div class="form-group col-md-3">
                                                                    <label for="">Sex</label>
                                                                    <select name="sex" class="custom-select">
                                                                        <option>Sex...</option>
                                                                        <option value="Male">Male</option>
                                                                        <option value="Female">Female</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group col-md-3">
                                                                    <label for="">Ward Clinic</label>
                                                                    <input type="text" name="ward_clinic" class="form-control">
                                                                </div>
                                                                <div class="form-group col-md-3">
                                                                    <label for="">Bed</label>
                                                                    <input type="text" name="bed" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="form-row">
                                                                <div class="form-group col-md-7">
                                                                    <label for="">Previous E.C.G</label>
                                                                </div>
                                                                <div class="form-check-inline">
                                                                    <label class="form-check-label">
                                                                        <input type="radio" class="form-check-input" name="previous_ecg">Yes
                                                                    </label>
                                                                </div>
                                                                <div class="form-check-inline">
                                                                    <label class="form-check-label">
                                                                        <input type="radio" class="form-check-input" name="previous_ecg">No
                                                                    </label>
                                                                </div>

                                                            </div>
                                                            <div>
                                                                <div class="form-group col-md-11">
                                                                    <label for="">Report to be sent to:</label>
                                                                    <input type="text" name="report_to_be_sent_to" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="">Medication</label>
                                                                <input type="text" name="medication" class="form-control">
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="row">
                                                                    <label for="">Digoxin / Diuretics / Others</label>
                                                                </div>
                                                                <div class="form-check-inline">
                                                                    <label class="form-check-label">
                                                                        <input type="radio" class="form-check-input" name="diuretics">Yes
                                                                    </label>
                                                                </div>
                                                                <div class="form-check-inline">
                                                                    <label class="form-check-label">
                                                                        <input type="radio" class="form-check-input" name="diuretics">No
                                                                    </label>
                                                                </div>

                                                            <div class="form-group">
                                                                <label for="">Relevant history and clinical findings and provisional diagnosis</label>
                                                                <textarea name="provisional_diagnosis" class="form-control"></textarea>
                                                            </div>
                                                            <div class="form-row">
                                                                <div class="form-group col-md-4">
                                                                    <label for="">Date</label>
                                                                    <input type="date" name="date" class="form-control">
                                                                </div>
                                                                <div class="form-group col-md-4">
                                                                    <label for="">Signed</label>
                                                                    <input type="text" name="signed" class="form-control">
                                                                </div>
                                                                <div class="form-group col-md-4">
                                                                    <label for="">Printed</label>
                                                                    <input type="text" name="printed" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                </div>

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
