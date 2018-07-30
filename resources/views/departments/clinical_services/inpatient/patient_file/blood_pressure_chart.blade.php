@extends('layouts.master')

@section('content')
    <!-- Title & Breadcrumbs-->
<div class="row page-titles">
    <div class="col-md-12 align-self-center">
        <h4 class="theme-cl"></h4>
    </div>
</div>
<!-- Title & Breadcrumbs-->

<div class="row">
    <div class="col-sm-12 col-md-12">
        <div class="card">
            <div class="card-header">
                <h4></h4>
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

                        </tr>
                        </thead>
                        <tbody>
                        @if(isset($blood_pressure_chart))
                            @foreach($blood_pressure_chart as $blood_pressure)
                                <tr>
                                    <td>{{ $blood_pressure->bio_patient_name}}</td>
                                    <td>{{ $blood_pressure->bio_ip_no}}</td>
                                    <td>{{ $blood_pressure->bio_date}}</td>
                                    <td>{{ $blood_pressure->dob}}</td>
                                    <td>{{ $blood_pressure->bio_ward}}</td>
                                    <td>{{ $blood_pressure->bio_bed_number}}</td>
                                    <td>{{ $blood_pressure->bio_sex}}</td>
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
                                        <form action="{{route('blood_pressure_chart_post')}}" method="post" >
                                            {!! csrf_field() !!}
                                            <div class="row ">
                                                <div class="col-md-12 align-self-center text-center">
                                                    BLOOD PRESSURE CHART
                                                </div>
                                            </div>
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
                                                            <input type="date" name="dob" class="form-control" placeholder="">
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