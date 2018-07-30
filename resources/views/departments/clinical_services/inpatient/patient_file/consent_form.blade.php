@extends('layouts.master')

@section('content')



    @extends('layouts.master')

    @section('content')
        <div class="row page-titles">
            <div class="col-md-12 align-self-center text-center">
                <h4 class="theme-cl">PRESSURE SORE PREVENTION SCORE CARD</h4>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="container-fluid">
                    <div class="card-body">
                        <div class="">
                            <table class="table table-responsive table-bordered table-striped" id="datatable">
                                <thead>
                                <tr>
                                    <td>IPNO</td>
                                    <td>NAME</td>
                                    <td>NUMBER</td>
                                    <td>ADDRESS</td>
                                    <td>CLINIC_WARD</td>
                                    <td>DATE_OF_ADMISSION</td>
                                    <td>DATE_OF_DISCHARGE</td>
                                    <td>MEAL</td>
                                    <td>DAY</td>
                                    <td>COMMENTS</td>
                                </tr>
                                </thead>
                                <tbody>
                                @if(isset($consent_forms))
                                    @foreach($consent_forms as $consent_form_post_result)
                                        <tr>
                                            <td>{{ $consent_form_post_result->ipno}}</td>
                                            <td>{{ $consent_form_post_result->name}}</td>
                                            <td>{{ $consent_form_post_result->number}}</td>
                                            <td>{{ $consent_form_post_result->address}}</td>
                                            <td>{{ $consent_form_post_result->clinic_ward}}</td>
                                            <td>{{ $consent_form_post_result->date_of_admission}}</td>
                                            <td>{{ $consent_form_post_result->date_of_discharge}}</td>
                                            <td>{{ $consent_form_post_result->meal}}</td>
                                            <td>{{ $consent_form_post_result->day}}</td>
                                            <td>{{ $consent_form_post_result->comments}}</td>
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
                                    <h4 class="modal-title">Add more Items</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="col-md-12">
                                        <div class="">
                                            <div class="row page-titles">
                                                <div class="col-md-12 align-self-center text-center">
                                                    <h4 class="theme-cl">PRESSURE SORE PREVENTION SCORE CARD</h4>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="">
                                                    <div class="container-fluid">
                                                        <!-- Title & Breadcrumbs-->
                                                        <H4>MEAL PLANNER</H4>
                                                        <form action="{{route('consent_form_post')}}" method="post" >{!! csrf_field() !!}
                                                        <div class="col-md-12">
                                                            <div class="form-row">
                                                                <div class="form-group col-md-2">
                                                                    <label>OP/IP NO</label>
                                                                    <input type="number" class="form-control"name="ipno">
                                                                </div>
                                                                <div class="form-group col-md-4">
                                                                    <label>Name</label>
                                                                    <input type="text" class="form-control"name="name">
                                                                </div>
                                                                <div class="form-group col-md-1">
                                                                    <label>Age</label>
                                                                    <input type="number" class="form-control"name="number">
                                                                </div>
                                                                <div class="form-group col-md-3">
                                                                    <label>Address</label>
                                                                    <input type="text" class="form-control"name="address">
                                                                </div>
                                                                <div class="form-group col-md-2">
                                                                    <label>Clinic/Ward</label>
                                                                    <input type="text" class="form-control"name="clinic_ward">
                                                                </div>
                                                            </div>
                                                            <div class="form-row">
                                                                <div class="form-group col-md-6">
                                                                    <label>Date of Admission</label>
                                                                    <input type="date" class="form-control"name="date_of_admission">
                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                    <label>Date of Discharge</label>
                                                                    <input type="date" class="form-control"name="date_of_discharge">
                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                    <label>Meal</label>
                                                                    <select name="meal" class="form-control">
                                                                        <option value="breakfast">breakfast</option>
                                                                        <option value="snack">snack</option>
                                                                        <option value="lunch">lunch</option>
                                                                        <option value="snack">snack</option>
                                                                        <option value="dinner">dinner</option>
                                                                        <option value="bedtime ">bedtime </option>
                                                                        <option value="bedtime ">snack</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                    <label>Meal</label>
                                                                    <select name="day" class="form-control">
                                                                        <option value="monday">Monday</option>
                                                                        <option value="tuesday">Tuesday</option>
                                                                        <option value="wednesday">Wednesday</option>
                                                                        <option value="thursday">Thursday</option>
                                                                        <option value="friday">Friday</option>
                                                                        <option value="saturday">Saturday</option>
                                                                        <option value="sunday">Sunday</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>comments</label>
                                                                <textarea class="form-control"name="comments"></textarea>
                                                            </div>
                                                            <div class="form-group">
                                                                <button type="submit" class="btn btn-primary">Submit</button>
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection
@endsection