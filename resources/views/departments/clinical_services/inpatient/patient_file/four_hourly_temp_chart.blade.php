@extends('layouts.master')
@section('content')
    <!-- Title & Breadcrumb
    s-->
<div class="row page-titles">
    <div class="col-md-12 align-self-center">
        <h4 class="theme-cl">Four hourly temperature chart record</h4>
    </div>
</div>
<!-- Title & Breadcrumbs-->

<div class="row">
    <div class="col-sm-12 col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Four hourly temperature chart record</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="datatable" class="table table-striped">
                        <thead>
                        <tr>
                            <th>patient_name</th>
                            <th>Date of Birth</th>
                            <th>lp_number</th>
                            <th>date_of_admission</th>
                            <th>date_of_disease</th>
                            <th>time_for_measurement</th>
                            <th>r</th>
                            <th>p</th>
                            <th>t</th>
                            <th>pulse</th>
                            <th>resp</th>
                            <th>bowels</th>
                            <th>urine</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(isset($four_hourly_temp_charts))
                            @foreach($four_hourly_temp_charts as $four_hourly_temp_chart)
                                <tr>
                                    <td>{{ $four_hourly_temp_chart->patient_name}}</td>
                                    <td>{{ $four_hourly_temp_chart->dob}}</td>
                                    <td>{{ $four_hourly_temp_chart->lp_number}}</td>
                                    <td>{{ $four_hourly_temp_chart->date_of_admission}}</td>
                                    <td>{{ $four_hourly_temp_chart->date_of_disease}}</td>
                                    <td>{{ $four_hourly_temp_chart->time_for_measurement}}</td>
                                    <td>{{ $four_hourly_temp_chart->r}}</td>
                                    <td>{{ $four_hourly_temp_chart->p}}</td>
                                    <td>{{ $four_hourly_temp_chart->t}}</td>
                                    <td>{{ $four_hourly_temp_chart->pulse}}</td>
                                    <td>{{ $four_hourly_temp_chart->resp}}</td>
                                    <td>{{ $four_hourly_temp_chart->bowels}}</td>
                                    <td>{{ $four_hourly_temp_chart->urine}}</td>
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
                            <h4 class="modal-title">Add Four hourly temperature chart record</h4>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('four_hourly_temp_chart_post') }}" method="post" enctype="multipart/form-data">
                                {!! csrf_field() !!}
                            <div class="col-md-12">
                                <div class="card">

                                    <div class="container-fluid">

                                            <h4>FOUR HOURLY TEMPERATURE CHART</h4>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="patient_name">Name</label>
                                                    <input type="text"
                                                           name="patient_name" id="patient_name" class="form-control" placeholder="" aria-describedby="helpId">
                                                </div>
                                                <div class="form-group col-md-1">
                                                    <label for="dob">Date of Birth</label>
                                                    <input type="date"
                                                           name="dob" id="dob" class="form-control" placeholder="" aria-describedby="helpId">
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label for="lp_number">L.P No</label>
                                                    <input type="number"
                                                           name="lp_number" id="lp_number" class="form-control" placeholder="" aria-describedby="helpId">
                                                </div>
                                                <div class="form-group col-md-2">
                                                    <label for="date_of_admission">Date of Admission</label>
                                                    <input type="date"
                                                           name="date_of_admission" id="date_of_admission" class="form-control" placeholder="" aria-describedby="helpId">
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="date_of_disease">Date of Disease</label>
                                                    <input type="date" name="date_of_disease" id="date_of_disease" class="form-control" placeholder="" aria-describedby="helpId">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="time_of_measurement">Time</label>
                                                    <select class="form-control" name="time_for_measurement" id="time_of_measurement">
                                                        <option value="03:00:00">03:00:00</option>
                                                        <option value="07:00:00">07:00:00</option>
                                                        <option value="11:00:00">11:00:00</option>
                                                        <option value="03:00:00">03:00:00</option>
                                                        <option value="07:00:00">07:00:00</option>
                                                        <option value="11:00:00">11:00:00</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <h5>Measurements</h5>
                                                </div>
                                                <div class="form-group col-md-1">
                                                    <label for="r">R</label>
                                                    <input type="number"
                                                           name="r" id="r" class="form-control" placeholder="" aria-describedby="helpId">
                                                </div>
                                                <div class="form-group col-md-1">
                                                    <label for="p">P</label>
                                                    <input type="number"
                                                           name="p" id="p" class="form-control" placeholder="" aria-describedby="helpId">
                                                </div>
                                                <div class="form-group col-md-1">
                                                    <label for="t">T</label>
                                                    <input type="number"
                                                           name="t" id="t" class="form-control" placeholder="" aria-describedby="helpId">
                                                </div>
                                                <div class="form-group col-md-2">
                                                    <label for="pulse">Pulse</label>
                                                    <input type="number"
                                                           name="pulse" id="pulse" class="form-control" placeholder="" aria-describedby="helpId">
                                                </div>
                                                <div class="form-group col-md-2">
                                                    <label for="resp">Resp</label>
                                                    <input type="number"
                                                           name="resp" id="resp" class="form-control" placeholder="" aria-describedby="helpId">
                                                </div>
                                                <div class="form-group col-md-2">
                                                    <label for="bowels">Bowels</label>
                                                    <input type="number"
                                                           name="bowels" id="bowels" class="form-control" placeholder="" aria-describedby="helpId">
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label for="urine">Urine</label>
                                                    <input type="number"
                                                           name="urine" id="urine" class="form-control" placeholder="" aria-describedby="helpId">
                                                </div>
                                            </div>
                                            <button class="btn btn-success" type="submit">Submit</button>

                                    </div>

                                </div>

                            </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection