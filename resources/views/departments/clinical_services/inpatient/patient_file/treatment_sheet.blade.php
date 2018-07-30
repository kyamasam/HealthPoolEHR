@extends('layouts.master')

@section('content')
    <div class="row page-titles">
        <div class="col-md-12 align-self-center text-center">
            <h4 class="theme-cl">Treatment Sheet</h4>
        </div>
    </div>
    <div class="col-md-12">


        <div class="card">
            <div class="card-header">
                <h4> Records</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="datatable" class="table table-bordered">
                        <thead>
                        <tr>
                            <th>NAME</th>
                            <th>IP_NO</th>
                            <th>SEX</th>
                            <th>AGE</th>
                            <th>WARD</th>
                            <th>BED</th>
                            <th>CONSULTANT</th>
                            <th>DATE</th>
                            <th>DRUG</th>
                            <th>DOSE</th>
                            <th>RATE</th>
                            <th>FREQUENCY DURATION</th>
                            <th>SIGNATURE</th>

                            <th>TIME</th>
                            <th>DATE</th>
                            <th>DRUG TAKEN</th>
                            <th>DOSE</th>
                            <th>RATE</th>
                            <th>FREQUENCY DURATION</th>
                            <th>SIGNATURE</th>
                            <th>TIME</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(isset($treatment_sheet_results))
                            @foreach($treatment_sheet_results as $treatment_sheet_result)
                                <tr>
                                    <td>{{ $treatment_sheet_result->name }}</td>
                                    <td>{{ $treatment_sheet_result->ip_no }}</td>
                                    <td>{{ $treatment_sheet_result->sex }}</td>
                                    <td>{{ $treatment_sheet_result->age }}</td>
                                    <td>{{ $treatment_sheet_result->ward }}</td>
                                    <td>{{ $treatment_sheet_result->bed }}</td>
                                    <td>{{ $treatment_sheet_result->consultant }}</td>
                                    <td>{{ $treatment_sheet_result->date }}</td>
                                    <td>{{ $treatment_sheet_result->drug }}</td>
                                    <td>{{ $treatment_sheet_result->dose }}</td>
                                    <td>{{ $treatment_sheet_result->rate }}</td>
                                    <td>{{ $treatment_sheet_result->frequency_duration }}</td>
                                    <td>{{ $treatment_sheet_result->name_signature }}</td>
                                    <td>{{ $treatment_sheet_result->time }}</td>
                                    <td>{{ $treatment_sheet_result->dates }}</td>
                                    <td>{{ $treatment_sheet_result->drug_takens }}</td>
                                    <td>{{ $treatment_sheet_result->doses }}</td>
                                    <td>{{ $treatment_sheet_result->rates }}</td>
                                    <td>{{ $treatment_sheet_result->frequency_durations }}</td>
                                    <td>{{ $treatment_sheet_result->name_signatures }}</td>
                                    <td>{{ $treatment_sheet_result->times }}</td>


                                </tr>
                            @endforeach
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-4">

            <div class="content">
                <button class="btn btn-success" data-toggle="modal" data-target="#myModal">Add Records</button>
                {{--<button class="btn btn-info" data-toggle="modal" data-target="#myModal">Print</button>--}}
            </div>
        </div>
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog modal-lg">


                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Add Record</h4>
                    </div>


            <div class="modal-body">
                <div class="col-md-12">
                    <div class="card">
                        <div class="container-fluid">

                            <h2 class="text-center">INPATIENT TREATMENT SHEET</h2>
                            <p>NOTE:</p>
                            <ol>
                                <li>All prescriptions must be rewritten weekly. Not later than monday midday</li>
                                <li>Use red pen for DDA</li>
                                <li>Drug allergies</li>
                            </ol>
                            <hr>
                            <form action="{{route('treatment_sheet_post')}}" method="post" >{!! csrf_field() !!}

                                <div class="form-group">
                                    <label for="">Name</label>
                                    <input name='name' type="text" class="form-control">
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-9">
                                        <label for="">IP.NO</label>
                                        <input name='ip_no' type="number" class="form-control">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="">Sex</label>
                                        <select name='sex' class="custom-select">
                                            <option selected>Sex...</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="">Age</label>
                                        <input name='age' type="number" class="form-control">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="">Ward</label>
                                        <input name='ward' type="text" class="form-control">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="">Bed</label>
                                        <input name='bed' type="number" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">Consultant</label>
                                    <input name='consultant' type="text" class="form-control">
                                </div>
                                <hr>
                                <b><p>ONCE ONLY PRESCRIPTION,STAT DOSES,PRE-MED ETC.</p></b>
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th scope="col">Date</th>
                                        <th scope="col">#</th>
                                        <th scope="col">Drug</th>
                                        <th scope="col">Dose</th>
                                        <th scope="col">Route</th>
                                        <th scope="col">Frequency/Duration(FR/DU)</th>
                                        <th scope="col">Name & Signature</th>
                                        <th scope="col">Time</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><input name="date" type="date" class="form-control"></td>
                                        <th scope="row">1</th>
                                        <td><input name="drug" type="text" class="form-control"></td>
                                        <td><input name="dose" type="text" class="form-control"></td>
                                        <td><input name="rate" type="text" class="form-control"></td>
                                        <td><input name="frequency_duration" type="text" class="form-control"></td>
                                        <td><input name="name_signature" type="text" class="form-control"></td>
                                        <td><input name="time" type="text" class="form-control"></td>
                                    </tr>
                                    </tbody>
                                </table>

                                <hr>
                                <b><p>REGULAR PRESCRIPTIONS</p></b>
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th scope="col">Date</th>
                                        <th scope="col">#</th>
                                        <th scope="col">Drug</th>
                                        <th scope="col">Dose</th>
                                        <th scope="col">Route</th>
                                        <th scope="col">Frequency/Duration(FR/DU)</th>
                                        <th scope="col">Name & Signature</th>
                                        <th scope="col">AM PM</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><input name="dates"  type="date" class="form-control"></td>
                                        <th scope="row">1</th>
                                        <td><input name="drug_takens"  type="text" class="form-control"></td>
                                        <td><input name="doses"  type="text" class="form-control"></td>
                                        <td><input name="rates"  type="text" class="form-control"></td>
                                        <td><input name="frequency_durations"  type="text" class="form-control"></td>
                                        <td><input name="name_signatures" type="text" class="form-control"></td>
                                        <td><input name="times"  type="text" class="form-control"></td>
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
@endsection