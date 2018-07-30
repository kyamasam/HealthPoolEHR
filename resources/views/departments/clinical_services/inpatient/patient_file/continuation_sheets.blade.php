@extends('layouts.master')

@section('content')
    <!-- Title & Breadcrumbs-->
<div class="row page-titles">
    <div class="col-md-12 align-self-center">
        <h4 class="theme-cl">CONTINUATION SHEET</h4>
    </div>
</div>

<div class="row">
    <div class="col-sm-12 col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>CONTINUATION SHEET</h4>
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
                            <th>IP NUMBER</th>
                            <th>NAME</th>
                            <th>AGE</th>
                            <th>SEX</th>
                            <th>WARD/CLINIC</th>
                            <th>DATE</th>
                            <th>NOTE</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(isset($continuation_sheets_results))
                            @foreach($continuation_sheets_results as $continuation_sheets_result)
                                <tr>
                                    <td>{{ $continuation_sheets_result->bio_patient_name}}</td>
                                    <td>{{ $continuation_sheets_result->bio_ip_no}}</td>
                                    <td>{{ $continuation_sheets_result->bio_date}}</td>
                                    <td>{{ $continuation_sheets_result->bio_age}}</td>
                                    <td>{{ $continuation_sheets_result->bio_ward}}</td>
                                    <td>{{ $continuation_sheets_result->bio_bed_number}}</td>
                                    <td>{{ $continuation_sheets_result->bio_sex}}</td>
                                    <td>{{ $continuation_sheets_result->ip_op_no}}</td>
                                    <td>{{ $continuation_sheets_result->name}}</td>
                                    <td>{{ $continuation_sheets_result->age}}</td>
                                    <td>{{ $continuation_sheets_result->sex}}</td>
                                    <td>{{ $continuation_sheets_result->ward_clinic}}</td>
                                    <td>{{ $continuation_sheets_result->date_a}}</td>
                                    <td>{{ $continuation_sheets_result->notes}}</td>

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
                            <h4 class="modal-title">Add Continuation Information</h4>
                        </div>
                        <div class="modal-body">

                            <div class="col-md-12">
                                <div class="card">
                                    <div class="container-fluid">
                                        <form action="{{route('continuation_form_post')}}" method="post" >{!! csrf_field() !!}

                                        <h2 class="text-center">IN-PATIENT/OUT-PATIENT CONTINUATION SHEET</h2>
                                        <div class="col-md-12">

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

                                                        <div class="form-row">
                                                            <div class="form-group col-md-3">
                                                                <label for="">IP/OP No</label>
                                                                <input type="text" name="ip_op_no" class="form-control">
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="">Name</label>
                                                                <input type="text" name="name" class="form-control">
                                                            </div>
                                                            <div class="form-group col-md-1">
                                                                <label for="">Age</label>
                                                                <input type="number" name="age" class="form-control">
                                                            </div>
                                                            <div class="form-group col-md-2">
                                                                <label for="">Sex</label>
                                                                <select name="sex" class="custom-select">
                                                                    <option selected>Sex...</option>
                                                                    <option>Male</option>
                                                                    <option>Female</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="">Ward/Clinic</label>
                                                                <input type="text" name="ward_clinic" class="form-control">
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="">Date</label>
                                                                <input type="date" name="date_a" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <textarea type="text" name="notes" placeholder="Notes" class="form-control"></textarea>
                                                        </div>


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
            </div>
        </div>
    </div>
</div>




 @endsection
