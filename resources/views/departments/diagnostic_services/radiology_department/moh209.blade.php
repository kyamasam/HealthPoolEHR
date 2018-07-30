@extends('layouts.master')

@section('content')
<div class="card"> 
    <div class="card-header">
        <h4>BTU</h4>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table id="datatable" class="table table-bordered">
                <thead>
                <tr>
                    <th>DATE</th>
                    <th>OPD NO</th>
                    <th>X_RAY NO</th>
                    <th>FULL NAMES</th>
                    <th>AGE IN YEARS</th>
                    <th>SEX</th>
                    <th>SUB LOCATION</th>
                    <th>VILLAGE ESTATE</th>
                    <th>ADDRESS</th>
                    <th>X-RAY EXAMINATION TYPE</th>
                    <th>REFERRAL</th>
                    <th>AMOUNT CHARGED</th>
                    <th>REMARKS</th>
                </tr>
                </thead>
                <tbody>
                @if(isset($moh209_results))
                    @foreach($moh209_results as $moh209_result)
                        <tr>
                            <td>{{ $moh209_result->date }}</td>
                            <td>{{ $moh209_result->opd_no }}</td>
                            <td>{{ $moh209_result->xray_no }}</td>
                            <td>{{ $moh209_result->full_names }}</td>
                            <td>{{ $moh209_result->age_in_years }}</td>
                            <td>{{ $moh209_result->sex }}</td>
                            <td>{{ $moh209_result->sub_location }}</td>
                            <td>{{ $moh209_result->village_estate }}</td>
                            <td>{{ $moh209_result->address }}</td>
                            <td>{{ $moh209_result->xray_examination_type }}</td>
                            <td>{{ $moh209_result->referral }}</td>
                            <td>{{ $moh209_result->amount_charged }}</td>
                            <td>{{ $moh209_result->remarks }}</td>
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
                    <h4 class="modal-title">Add cheque record</h4>
                </div>
                <div class="modal-body">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="row page-titles">
                                <div class="col-md-12 align-self-center text-center">
                                    <h4 class="theme-cl">MOH 209</h4>
                                </div>
                            </div>
                            <div class="container-fluid">
                                <p>MOH 209 RADIOLOGY REGISTER IS TO BE USED IN ALL X-RAY UNITS.STEP BY STEP FILLING IN THE REGISTER GUIDELINES FOR THE HEALTH PROVIDERS</p>
                                <form action="{{route('moh209_post')}}" method="post" >{!! csrf_field() !!}
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr class="color background-color:black">
                                                <th scope="col">COLUMN</th>
                                                <th scope="col">DATA</th>
                                                <th scope="col">DEFINITIONS/EXPLANATIONS</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>A</td>
                                                <td>DATE</td>
                                                <td><input type="date" name="date" class="form-control" placeholder=""></td>
                                            </tr>
                                            <tr>
                                                <td>B</td>
                                                <td>OPD/IN-PT NO</td>
                                                <td><input type="number" name="opd_no" class="form-control" placeholder=""></td>
                                            </tr>
                                            <tr>
                                                <td>C</td>
                                                <td>X-RAY NUMBER</td>
                                                <td><input type="number" name="xray_no" class="form-control" placeholder=""></td>
                                            </tr>
                                            <tr>
                                                <td>D</td>
                                                <td>FULL NAMES</td>
                                                <td><input type="text" name="full_names" class="form-control" placeholder=""></td>
                                            </tr>
                                            <tr>
                                                <td>E</td>
                                                <td>AGE IN YEAR</td>
                                                <td><input type="number" name="age_in_years" class="form-control" placeholder=""></td>
                                            </tr>
                                            <tr>
                                                <td>F</td>
                                                <td>SEX</td>
                                                <td><input type="text" name="sex" class="form-control" placeholder=""></td>
                                            </tr>
                                            <tr>
                                                <td>G</td>
                                                <td>SUB LOCATION</td>
                                                <td><input type="text" name="sub_location" class="form-control" placeholder=""></td>
                                            </tr>
                                            <tr>
                                                <td>H</td>
                                                <td>VILLAGE/ESTATE</td>
                                                <td><input type="text" name="village_estate" class="form-control" placeholder=""></td>
                                            </tr>
                                            <tr>
                                                <td>I</td>
                                                <td>ADDRESS</td>
                                                <td><input type="text" name="address" class="form-control" placeholder=""></td>
                                            </tr>
                                            <tr>
                                                <td>J</td>
                                                <td>TYPE OF X-RAY EXAMINATION</td>
                                                <td><input type="text" name="xray_examination_type" class="form-control" placeholder=""></td>
                                            </tr>
                                            <tr>
                                                <td>K</td>
                                                <td>REFERRAL(Y/N)</td>
                                                <td><input type="text" name="referral" class="form-control" placeholder=""></td>
                                            </tr>
                                            <tr>
                                                <td>L</td>
                                                <td>AMOUNT CHARGED</td>
                                                <td><input type="number" name="amount_charged" class="form-control" placeholder=""></td>
                                            </tr>
                                            <tr>
                                                <td>M</td>
                                                <td>REMARKS</td>
                                                <td><input type="text" name="remarks" class="form-control" placeholder=""></td>
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