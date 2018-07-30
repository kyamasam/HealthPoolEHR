@extends('layouts.master')

@section('content')
    <!-- Title & Breadcrumbs-->
    <div class="row page-titles">
        <div class="col-md-12 align-self-center">
            <h4 class="theme-cl">Allergy</h4>
        </div>
    </div>
    <!-- Title & Breadcrumbs-->

    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Allergy</h4>
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
                                <th>DAY</th>
                                <th>NIGHT</th>
                                <th>ADMISSION DATE</th>
                                <th>WARD</th>
                                <th>PEN</th>
                                <th>ALLERGY</th>
                                <th>HYDROCORTISONE</th>
                                <th>SIGNATURE</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(isset($allergyform_results))
                                @foreach($allergyform_results as $allergyform_result)
                                    <tr>
                                        <td>{{ $allergyform_result->bio_patient_name}}</td>
                                        <td>{{ $allergyform_result->bio_ip_no}}</td>
                                        <td>{{ $allergyform_result->bio_date}}</td>
                                        <td>{{ $allergyform_result->bio_age}}</td>
                                        <td>{{ $allergyform_result->bio_ward}}</td>
                                        <td>{{ $allergyform_result->bio_bed_number}}</td>
                                        <td>{{ $allergyform_result->bio_sex}}</td>
                                        <td>{{ $allergyform_result->admissiondate}}</td>
                                        <td>{{ $allergyform_result->ward}}</td>
                                        <td>{{ $allergyform_result->penincillin}}</td>
                                        <td>{{ $allergyform_result->allergy}}</td>
                                        <td>{{ $allergyform_result->hydrocortisone}}</td>
                                        <td>{{ $allergyform_result->signature}}</td>
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
                                <h4 class="modal-title">Add Allergy Information</h4>
                            </div>
                            <div class="modal-body">

                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="container">
                                            <form action="{{route('allergyform_post')}}" method="post" >{!! csrf_field() !!}

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


                                                <div class="col-m-3 offset-md-3">
                                                    <H3 class="mt-20">
                                                        ALLERGY FORM
                                                    </H3>
                                                    </div>
                                                    <table class="table table-bordered">
                                                        <tbody>
                                                        <tr class="col-md-4">
                                                            <td>
                                                                <div class="row">
                                                                    <div class="form-group row col-md-6">
                                                                        <label for="staticEmail" class="col-sm-6 col-form-label">DATE OF ADMISSION</label>
                                                                        <div class="col-sm-5">
                                                                            <input type="date" name="admissiondate" class=" form-control" placeholder="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row col-md-6">
                                                                        <label for="staticEmail" class="col-sm-2 col-form-label">WARD</label>
                                                                        <div class="col-sm-10">
                                                                            <input type="text" name="ward" class=" form-control" placeholder="">
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <br>
                                                                <span class="row"> <span class="col-md-12">1.Have you ever at any tim e had a reaction to any drug e.g penincillin? If so give details</span> <span class="col-md-12"> <textarea type="text" name="penincillin" class=" form-control" placeholder=""></textarea></span></span>

                                                                <span class="row"> <span class="col-md-12">2.Do you suffer from any allergy? If so give dtails</span> <span class="col-md-12"> <textarea type="text" name="allergy" class=" form-control" placeholder=""></textarea></span></span>

                                                                <span class="row"> <span class="col-md-12">3.Have you ever received any treatment with a cortico steroid e.g Hydrocortisone in the last three months?</span> <span class="col-md-12"> <textarea type="text" name="hydrocortisone" class=" form-control" placeholder=""></textarea></span></span>

                                                                <br><br><br>

                                                                <div class="row">
                                                                    <div class="form-group row col-md-6">
                                                                        <label for="staticEmail" class="col-sm-4 col-form-label">Patient's Signature</label>
                                                                        <div class="col-sm-8">
                                                                            <input type="text" name="signature" class=" form-control" placeholder="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>

                                        </tbody>
                                        </table>
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
