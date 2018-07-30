@extends('layouts.master')
@section('content')
    <!-- Title & Breadcrumbs-->
<div class="row page-titles">
    <div class="col-md-12 align-self-center">
        <h4 class="theme-cl">PHARMACY WITHDRAWAL FORM</h4>
    </div>
</div>
<!-- Title & Breadcrumbs-->

<div class="row">
    <div class="col-sm-12 col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>PHARMACY WITHDRAWAL FORM</h4>
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
                            <th>NAME</th>
                            <th>SEX</th>
                            <th>AGE</th>
                            <th>WARD</th>
                            <th>DOA</th>
                            <th>DOD</th>
                            <th>UNIT NUMBER</th>
                            <th>DATE</th>
                            <th>DESCRIPTION</th>
                            <th>TOTAL RETURNED</th>
                            <th>UNIT PRICE</th>
                            <th>TOTAL COST</th>
                            <th>WARD WITHDRAWAL</th>
                            <th>SIGN</th>
                            <th>PHARMACY OFFICER</th>
                            <th>DESIGNATION</th>
                            <th>SIGNATURE</th>
                            <th>DEPARTMENT</th>
                            <th>NAME</th>
                            <th>SIGN</th>

                        </tr>
                        </thead>
                        <tbody>
                        @if(isset($pharmacy_withdrawal_form_results))
                            @foreach($pharmacy_withdrawal_form_results as $pharmacy_withdrawal_form_result)
                                <tr>
                                    <td>{{ $pharmacy_withdrawal_form_result->bio_patient_name}}</td>
                                    <td>{{ $pharmacy_withdrawal_form_result->bio_ip_no}}</td>
                                    <td>{{ $pharmacy_withdrawal_form_result->bio_date}}</td>
                                    <td>{{ $pharmacy_withdrawal_form_result->bio_age}}</td>
                                    <td>{{ $pharmacy_withdrawal_form_result->bio_ward}}</td>
                                    <td>{{ $pharmacy_withdrawal_form_result->bio_bed_number}}</td>
                                    <td>{{ $pharmacy_withdrawal_form_result->bio_sex}}</td>
                                    <td>{{ $pharmacy_withdrawal_form_result->name}}</td>
                                    <td>{{ $pharmacy_withdrawal_form_result->sex}}</td>
                                    <td>{{ $pharmacy_withdrawal_form_result->age}}</td>
                                    <td>{{ $pharmacy_withdrawal_form_result->ward}}</td>
                                    <td>{{ $pharmacy_withdrawal_form_result->doa}}</td>
                                    <td>{{ $pharmacy_withdrawal_form_result->dod}}</td>
                                    <td>{{ $pharmacy_withdrawal_form_result->unit_no}}</td>
                                    <td>{{ $pharmacy_withdrawal_form_result->date_a}}</td>
                                    <td>{{ $pharmacy_withdrawal_form_result->description}}</td>
                                    <td>{{ $pharmacy_withdrawal_form_result->total_returned}}</td>
                                    <td>{{ $pharmacy_withdrawal_form_result->unit_price}}</td>
                                    <td>{{ $pharmacy_withdrawal_form_result->total_cost}}</td>
                                    <td>{{ $pharmacy_withdrawal_form_result->ward_withdrawal}}</td>
                                    <td>{{ $pharmacy_withdrawal_form_result->sign}}</td>
                                    <td>{{ $pharmacy_withdrawal_form_result->name_a}}</td>
                                    <td>{{ $pharmacy_withdrawal_form_result->designation}}</td>
                                    <td>{{ $pharmacy_withdrawal_form_result->sign_a}}</td>
                                    <td>{{ $pharmacy_withdrawal_form_result->department}}</td>
                                    <td>{{ $pharmacy_withdrawal_form_result->name_b}}</td>
                                    <td>{{ $pharmacy_withdrawal_form_result->sign_b}}</td>

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
                                        <form action="{{route('pharmacy_withdrawal_form_post')}}" method="post" >{!! csrf_field() !!}
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
                                                                <option value="">--Choose sex--</option>
                                                                <option value="male">Male</option>
                                                                <option value="female">Female</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-m-3 offset-md-2">
                                                <H3 class="mt-20 ">
                                                    <u>PHARMACY WITHDRAWAL FORM</u>
                                                </H3>
                                            </div>
                                            <div class="form-group row">
                                                <label for="staticEmail" class="col-sm-3 col-form-label">Name:</label>
                                                <div class="col-sm-4">
                                                    <input type="text" name="name" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="staticEmail" class="col-sm-3 col-form-label">Sex:</label>
                                                <div class="col-sm-4">
                                                    <select name="sex">
                                                        <option value="male">Male</option>
                                                        <option value="female">Female</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="staticEmail" class="col-sm-3 col-form-label">Age:</label>
                                                <div class="col-sm-4">
                                                    <input type="number" name="age" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="staticEmail" class="col-sm-3 col-form-label">Ward:</label>
                                                <div class="col-sm-4">
                                                    <input type="text" name="ward" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="staticEmail" class="col-sm-3 col-form-label">DOA:</label>
                                                <div class="col-sm-4">
                                                    <input type="text" name="doa" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="staticEmail" class="col-sm-3 col-form-label">DOD:</label>
                                                <div class="col-sm-4">
                                                    <input type="text" name="dod" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="staticEmail" class="col-sm-3 col-form-label">Unit No:</label>
                                                <div class="col-sm-4">
                                                    <input type="text" name="unit_no" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                            <table class="table table-bordered">
                                                <thead>
                                                <tr>
                                                    <th scope="col">DATE</th>
                                                    <th scope="col">ITEM DESCRIPTION</th>
                                                    <th scope="col">TOTAL RETURNED</th>
                                                    <th scope="col">UNIT PRICE</th>
                                                    <th scope="col">TOTAL COST</th>
                                                    <th scope="col">WARD WITHDRAWAL</th>
                                                    <th scope="col">SIGN/TITLE/WARD/PHARMACY</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td><input type="date" name="date_a" class="form-control" placeholder=""></td>
                                                    <td><input type="text" name="description" class="form-control" placeholder=""></td>
                                                    <td><input type="number" name="total_returned" class="form-control" placeholder=""></td>
                                                    <td><input type="number" name="unit_price" class="form-control" placeholder=""></td>
                                                    <td><input type="number" name="total_cost" class="form-control" placeholder=""></td>
                                                    <td><input type="text" name="ward_withdrawal" class="form-control" placeholder=""></td>
                                                    <td><input type="text" name="sign" class="form-control" placeholder=""></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <div class="row ">
                                                <div class="col-md-4">
                                                    <div class="form-group row ">
                                                        <label for="staticEmail" class="col-form-label ">Pharmacy Officer's Name:</label>
                                                        <div class="col-sm-8">
                                                            <input type="name" name="name_a" class="form-control" placeholder="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group row ">
                                                        <label for="staticEmail" class="col-form-label ">Designation:</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" name="designation" class="form-control" placeholder="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row col-md-4">
                                                    <label for="staticEmail" class="col-form-label ">Sign:</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" name="sign_a" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row ">
                                                <div class="col-md-3">
                                                    <div class="form-group row ">
                                                        <label for="staticEmail" class="col-form-label ">Ward/Department:</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" name="department" class="form-control" placeholder="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group row ">
                                                        <label for="staticEmail" class="col-form-label ">Name:</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" name="name_b" class="form-control" placeholder="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row col-md-4">
                                                    <label for="staticEmail" class="col-form-label ">Sign:</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" name="sign_b" class="form-control" placeholder="">
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
