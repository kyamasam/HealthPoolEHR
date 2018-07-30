@extends('layouts.master')

@section('content')
    <!-- Title & Breadcrumbs-->
<div class="row page-titles">
    <div class="col-md-12 align-self-center">
        <h4 class="theme-cl">BLOOD DONATION UNIT (BTU)</h4>
    </div>
</div>
<!-- Title & Breadcrumbs-->

<div class="row">
    <div class="col-sm-12 col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>BLOOD DONATION UNIT (BTU)</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="datatable" class="table table-striped table-bordered table-responsive">
                        <thead>
                        <tr>
                            <th>PATIENT NAME</th>
                            <th>WARD</th>
                            <th>IP NO</th>
                            <th>NAME OF REQUESTING OFFICER</th>
                            <th>DATE</th>
                            <th>COMMENTS ON BTU</th>

                        </tr>
                        </thead>
                        <tbody>
                        @if(isset($blood_donation_request_form_results))
                            @foreach($blood_donation_request_form_results as $blood_donation_request_form_result)
                                <tr>
                                    <td>{{ $blood_donation_request_form_result->patient_name}}</td>
                                    <td>{{ $blood_donation_request_form_result->ward}}</td>
                                    <td>{{ $blood_donation_request_form_result->ip_no}}</td>
                                    <td>{{ $blood_donation_request_form_result->requesting}}</td>
                                    <td>{{ $blood_donation_request_form_result->date}}</td>
                                    <td>{{ $blood_donation_request_form_result->comments}}</td>
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
                            <h4 class="modal-title">Blood Donation Request Form</h4>
                        </div>
                        <div class="modal-body">

                            <div class="col-md-12">
                                <div class="card">
                                    <div class="container">
                                        <form action="{{route('blood_donation_request_form_post')}}" method="post" >{!! csrf_field() !!}
                                            <div class="">
                                                {{--<div class="offset-md-6">--}}
                                                    {{--<div class="row">--}}
                                                        {{--<div class="col-md-3">--}}
                                                            {{--<p>PATIENTS NAME:</p>--}}
                                                        {{--</div>--}}
                                                        {{--<div class="col-md-9">--}}
                                                            {{--<input type=" text" name="bio_patient_name" class="form-control" placeholder="click to enter patients name"></td>--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                    {{--<div class="row">--}}
                                                        {{--<div class="col-md-3">--}}
                                                            {{--<p>IP NUMBER:</p>--}}
                                                        {{--</div>--}}
                                                        {{--<div class="col-md-9">--}}
                                                            {{--<input type=" text" name="bio_ip_no" class="form-control" placeholder="click to enter IP number"></td>--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                    {{--<div class="row">--}}
                                                        {{--<div class="col-md-3">--}}
                                                            {{--<p>DATE:</p>--}}
                                                        {{--</div>--}}
                                                        {{--<div class="col-md-9">--}}
                                                            {{--<input type="date" name="bio_date" class="form-control" placeholder="click to enter date">--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                    {{--<div class="row">--}}
                                                        {{--<div class="col-md-3">--}}
                                                            {{--<p>AGE:</p>--}}
                                                        {{--</div>--}}
                                                        {{--<div class="col-md-9">--}}
                                                            {{--<input type="number" name="bio_age" class="form-control" placeholder="click to enter age">--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                    {{--<div class="row">--}}
                                                        {{--<div class="col-md-3">--}}
                                                            {{--<p>WARD:</p>--}}
                                                        {{--</div>--}}
                                                        {{--<div class="col-md-9">--}}
                                                            {{--<input type="text" name="bio_ward" class="form-control" placeholder="click to enter ward number">--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                    {{--<div class="row">--}}
                                                        {{--<div class="col-md-3">--}}
                                                            {{--<p>BED NUMBER:</p>--}}
                                                        {{--</div>--}}
                                                        {{--<div class="col-md-9">--}}
                                                            {{--<input type="text" name="bio_bed_number" class="form-control" placeholder="click to enter bed number">--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                    {{--<div class="row">--}}
                                                        {{--<div class="col-md-3">--}}
                                                            {{--<p>SEX:</p>--}}
                                                        {{--</div>--}}
                                                        {{--<div class="col-md-9">--}}
                                                            {{--<select class="form-control" name="bio_sex" id="sex">--}}
                                                                {{--<option value="male">--Choose sex--</option>--}}
                                                                {{--<option value="male">Male</option>--}}
                                                                {{--<option value="female">Female</option>--}}
                                                            {{--</select>--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            </div>
                                            <div class="col-m-3 offset-md-2">
                                                <H3 class="mt-20">
                                                    BLOOD DONATION REQUEST FORM
                                                </H3>
                                            </div>
                                            <div class="col-md-10">
                                                PATIENT NAME:<input type="text" name="patient_name" class="form-control" placeholder=""><br>
                                                WARD:<input type="text" name="ward" class="form-control" placeholder=""><br>
                                                IP NO:<input type="text" name="ip_no" class="form-control" placeholder=""><br>
                                                NAME OF REQUESTING OFFICER:<input type="text" name="requesting" class="form-control" placeholder="">
                                                DATE:<input type="date" name="date" class="form-control" placeholder="">
                                                COMMENTS FROM BTU:<input type="text" name="comments" class="form-control" placeholder="">
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
