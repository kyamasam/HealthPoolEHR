@extends('layouts.master')
@section('content')
<!-- Title &Breadcrumbs-->
<div class="row page-titles">
    <div class="col-md-12 align-self-center">
        <h4 class="theme-cl">XRAY REQUEST FORM</h4>
    </div>
</div>
<!-- Title & Breadcrumbs-->

<div class="row">
    <div class="col-sm-12 col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>XRAY REQUEST FORM</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="datatable" class="table table-striped table-bordered table-responsive">
                        <thead>
                        <tr>
                            <th>DATE</th>
                            <th>IP/OP NO</th>
                            <th>REF NO</th>
                            <th>PATIENT</th>
                            <th>CELL</th>
                            <th>AGE</th>
                            <th>WEIGHT</th>
                            <th>SEX</th>
                            <th>CLINICAL INFORMATION</th>
                            <th>LMP</th>
                            <th>INVESTIGATIONS REQUIRED</th>
                            <th>REPORT</th>
                            <th>REFERRING DOCTOR</th>
                            <th>BRANCH</th>
                            <th>SIGNATURE</th>
                            <th>CELL</th>
                            <th>REPORTED BY</th>
                            <th>TIME</th>

                        </tr>
                        </thead>
                        <tbody>
                        @if(isset($xray_request_form_results))
                            @foreach($xray_request_form_results as $xray_request_form_result)
                                <tr>
                                    <td>{{ $xray_request_form_result->date}}</td>
                                    <td>{{ $xray_request_form_result->ip_op_number}}</td>
                                    <td>{{ $xray_request_form_result->ref_no}}</td>
                                    <td>{{ $xray_request_form_result->patient}}</td>
                                    <td>{{ $xray_request_form_result->cell}}</td>
                                    <td>{{ $xray_request_form_result->age}}</td>
                                    <td>{{ $xray_request_form_result->weight}}</td>
                                    <td>{{ $xray_request_form_result->sex}}</td>
                                    <td>{{ $xray_request_form_result->clinical_info}}</td>
                                    <td>{{ $xray_request_form_result->lmp}}</td>
                                    <td>{{ $xray_request_form_result->investigation_required}}</td>
                                    <td>{{ $xray_request_form_result->report}}</td>
                                    <td>{{ $xray_request_form_result->referring_doctor}}</td>
                                    <td>{{ $xray_request_form_result->branch}}</td>
                                    <td>{{ $xray_request_form_result->signature}}</td>
                                    <td>{{ $xray_request_form_result->cell2}}</td>
                                    <td>{{ $xray_request_form_result->reported_by}}</td>
                                    <td>{{ $xray_request_form_result->time}}</td>

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
                            <h4 class="modal-title">Add Xray Information</h4>
                        </div>
                        <div class="modal-body">

                            <div class="col-md-12">
                                <div class="card">
                                    <div class="container">
                                        <form action="{{route('xray_request_form_post')}}" method="post" >{!! csrf_field() !!}
                                            <div class="col-m-3 offset-md-5">
                                                <H3 class="mt-20">
                                                    X-RAY REQUEST FORM
                                                </H3>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-9">
                                                    <label for="staticEmail" class="col-sm-3 col-form-label">DATE:</label>
                                                    <div class="col-sm-12">
                                                        <input type="date" name="date" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-11">
                                                    <label for="staticEmail" class="col-sm-3 col-form-label ">IP/OPD NO:</label>
                                                    <div class="col-sm-12">
                                                        <input type="text" name="ip_op_number" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row col-md-4">
                                                <label for="staticEmail" class="col-sm-3 col-form-label ">REF NO:</label>
                                                <div class="col-sm-12">
                                                    <input type="number" name="ref_no" class="form-control" placeholder="">
                                                </div>
                                            </div>

                                    <br><br>
                                    <div class="row">
                                        <div class="col-md-11">
                                            <label for="inputPassword" class="col-sm-3 col-form-label">PATIENT:</label>
                                            <div class="col-sm-12">
                                                <input type="text" name="patient" class="form-control" id="inputPassword" placeholder="Patient">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-11">
                                            <label for="inputPassword" class="col-sm-3 col-form-label">CELL:</label>
                                            <div class="col-sm-12">
                                                <input type="text" name="cell" class="form-control" id="inputPassword" placeholder="Cell:">
                                            </div>
                                        </div>
                                    </div>
                                    <br><br>
                                    <div class="row">
                                        <div class="col-md-11">
                                            <label for="inputPassword" class="col-sm-3 col-form-label">AGE</label>
                                            <div class="col-sm-12">
                                                <input type="text" name="age" class="form-control" id="inputPassword" placeholder="Age">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-11">
                                            <label for="inputPassword" class="col-sm-3 col-form-label">WEIGHT</label>
                                            <div class="col-sm-12">
                                                <input type="text" name="weight" class="form-control" id="inputPassword" placeholder="Weight">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-11">
                                            <label for="staticEmail" class="col-sm-3 col-form-label ">SEX:</label>
                                            <div class="col-md-12">
                                                <select class="form-control" name="sex" id="sex">
                                                    <option value="male">--Choose sex--</option>
                                                    <option value="male">Male</option>
                                                    <option value="female">Female</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-11">
                                            <label for="inputPassword" class="col-sm-3 col-form-label">CLINICAL INFORMATION</label>
                                            <div class="col-sm-12">
                                                <textarea  name="clinical_info" class="form-control" id="" ></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-11">
                                            <label for="inputPassword" class="col-sm-3 col-form-label">LMP:</label>
                                            <div class="col-sm-12">
                                                <textarea name="lmp" class="form-control" id="" ></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-11">
                                            <label for="inputPassword" class="col-sm-3 col-form-label">INVESTIGATIONS REQUIRED:</label>
                                            <div class="col-sm-12">
                                                <textarea name="investigation_required" class="form-control" id="" ></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row ">
                                        <div class="col-md-11">
                                            <label for="staticEmail" class="col-sm-3 col-form-label">REPORT:</label>
                                            <div class="col-sm-12">
                                                <textarea  rows="4" cols="20"name="report" class="form-control" id="" ></textarea>
                                            </div>
                                        </div>
                                    </div>
                                        <div class="row">
                                            <div class="col-md-11">
                                                <label for="inputPassword" class="col-sm-3 col-form-label">REFERRING DOCTOR</label>
                                                <div class="col-sm-12">
                                                    <input type="text" name="referring_doctor" class="form-control" id="inputPassword" placeholder="Referring Doctor">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-11">
                                                <label for="inputPassword" class="col-sm-3 col-form-label">BRANCH:</label>
                                                <div class="col-sm-12">
                                                    <input type="text" name="branch" class="form-control" id="inputPassword" placeholder="Branch:">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-11">
                                                <label for="inputPassword" class="col-sm-3 col-form-label">SIGNATURE</label>
                                                <div class="col-sm-12">
                                                    <input type="text" name="signature" class="form-control" id="inputPassword" placeholder="Signature">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-11">
                                                <label for="inputPassword" class="col-sm-3 col-form-label">CELL:</label>
                                                <div class="col-sm-12">
                                                    <input type="text" name="cell2" class="form-control" id="inputPassword" placeholder="Cell:">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-11">
                                                <label for="inputPassword" class="col-sm-3 col-form-label">REPORTED BY</label>
                                                <div class="col-sm-12">
                                                    <input type="text" name="reported_by" class="form-control" id="inputPassword" placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-11">
                                                <label for="inputPassword" class="col-sm-3 col-form-label">TIME:</label>
                                                <div class="col-sm-12">
                                                    <input type="time" name="time" class="form-control" id="inputPassword" placeholder="Cell:">
                                                </div>
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
