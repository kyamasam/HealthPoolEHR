@extends('layouts.master')
@section('content')
    <!-- Title
    & Breadcrumbs-->
<div class="row page-titles">
    <div class="col-md-12 align-self-center">
        <h4 class="theme-cl">Anaesthetic Record</h4>
    </div>
</div>
<!-- Title & Breadcrumbs-->

<div class="row">
    <div class="col-sm-12 col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Anaesthetic Record</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="datatable" class="table table-striped">
                        <thead>
                        <tr>
                            <th>name_of_patient</th>
                            <th>ip_number</th>
                            <th>date</th>
                            <th>age</th>
                            <th>sex</th>
                            <th>day_in_unit</th>
                            <th>diagnosis</th>
                            <th>treatment</th>
                            <th>time</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(isset($icu_observation_chart))
                            @foreach($icu_observation_chart as $icu_observation_chart_result)
                                <tr>
                                    <td>{{ $icu_observation_chart_result->name_of_patient}}</td>
                                    <td>{{ $icu_observation_chart_result->ip_number}}</td>
                                    <td>{{ $icu_observation_chart_result->date}}</td>
                                    <td>{{ $icu_observation_chart_result->dob}}</td>
                                    <td>{{ $icu_observation_chart_result->sex}}</td>
                                    <td>{{ $icu_observation_chart_result->day_in_unit}}</td>
                                    <td>{{ $icu_observation_chart_result->diagnosis}}</td>
                                    <td>{{ $icu_observation_chart_result->treatment}}</td>
                                    <td>{{ $icu_observation_chart_result->time}}</td>

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

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Add anaesthetic record</h4>
                        </div>
                        <div class="modal-body">

                            <div class="col-md-12">
                                <div class="card">

                                    <div class="container-fluid">
                                        <form  enctype="multipart/form-data" action="{{route('icu_observation_chart_post')}}" method="post">
                                            {!! csrf_field() !!}
                                            <h4>I.C.U OBSERVATION CHART</h4>
                                            <div class="form-row">
                                                <div class="form-group col">
                                                    <label for="name_of_patient">Name of patient</label>
                                                    <input type="text" name="name_of_patient" id="name_of_patient" class="form-control" placeholder="" >
                                                </div>
                                                <div class="form-group col">
                                                    <label for="ip_number">IP/NO</label>
                                                    <input type="number" name="ip_number" id="ip_number" class="form-control" placeholder="" >
                                                </div>
                                                <div class="form-group col">
                                                    <label for="date">Date</label>
                                                    <input type="date" name="date" id="date" class="form-control" placeholder="" >
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col">
                                                    <label for="dob">Date of Birth</label>
                                                    <input type="date" name="dob" id="dob" class="form-control" placeholder="" >
                                                </div>
                                                <div class="form-group col">
                                                    <label for="sex">Sex</label>
                                                    <select class="form-control" name="sex" id="sex">
                                                        <option value="male">Male</option>
                                                        <option value="female">Female</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col">
                                                    <label for="day_in_unit">Day in Unit</label>
                                                    <input type="number" name="day_in_unit" id="day_in_unit" class="form-control" placeholder="" >
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <label for="diagnosis">Diagnosis</label>
                                                    <textarea class="form-control" name="diagnosis" id="diagnosis" rows="3"></textarea>
                                                </div>
                                            </div>
                                            <h5>Measurements</h5>
                                            <div class="form-row">
                                                <div class="form-group col">
                                                    <label for="treatment">Treatment</label>
                                                    <input type="text" name="treatment" id="treatment" class="form-control" placeholder="" >
                                                </div>
                                                <div class="form-group col">
                                                    <label for="time">Time</label>
                                                    <input type="time" name="time" id="time" class="form-control" placeholder="" >
                                                </div>
                                            </div>
                                            <div class="form-row">
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