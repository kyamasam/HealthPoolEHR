@extends('layouts.master')
@section('content')
    <!-- Title & Breadcrumbs-->
<div class="row page-titles">
    <div class="col-md-12 align-self-center">
        <h4 class="theme-cl">NURSING CARE INTERVENTION CHECKLIST</h4>
    </div>
</div>
<!-- Title & Breadcrumbs-->

<div class="row">
    <div class="col-sm-12 col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>NURSING CARE INTERVENTION CHECKLIST</h4>
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
                        </tr>
                        </thead>
                        <tbody>
                        @if(isset($nursingforms_results))
                            @foreach($nursingforms_results as $nursingforms_result)
                                <tr>
                                    <td>{{$nursingforms_result->bio_patient_name}}</td>
                                    <td>{{$nursingforms_result->bio_ip_no}}</td>
                                    <td>{{$nursingforms_result->bio_date}}</td>
                                    <td>{{$nursingforms_result->bio_age}}</td>
                                    <td>{{$nursingforms_result->bio_ward}}</td>
                                    <td>{{$nursingforms_result->bio_bed_number}}</td>
                                    <td>{{$nursingforms_result->bio_sex}}</td>
                                    <td>{{$nursingforms_result->day}}</td>
                                    <td>{{$nursingforms_result->night}}</td>
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
                                        <form action="{{route('nursing_post')}}" method="post" >{!! csrf_field() !!}
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
                                                                <option value="male">--Choose sex--</option>
                                                                <option value="male">Male</option>
                                                                <option value="female">Female</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-m-3 offset-md-2">
                                                <H3 class="mt-20">
                                                    NURSING CARE INTERVENTIONS CHECKLIST
                                                </H3>
                                            </div>


                                                <table class="table table-bordered">
                                                        <thead>
                                                        <tr>
                                                            <th colspan="2">DATE</th>
                                                            <th colspan="2"></th>
                                                            <th colspan="2"></th>
                                                            <th colspan="2"></th>
                                                            <th colspan="2"></th>
                                                            <th colspan="2"></th>
                                                            <th colspan="2"></th>
                                                            <th colspan="2"></th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td>1.</td>
                                                            <td>HYGIENE</td>
                                                            <td>DAY</td>
                                                            <td>NIGHT</td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>Bed Bath/Assisted Bath</td>
                                                            <td><input type="checkbox" name="day" class="form-control" placeholder=""></td>
                                                            <td><input type="checkbox" name="night" class="form-control" placeholder=""></td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>Oral care</td>
                                                            <td><input type="checkbox" name="day" class="form-control" placeholder=""></td>
                                                            <td><input type="checkbox" name="night" class="form-control" placeholder=""></td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>Pressure Area Care</td>
                                                            <td><input type="checkbox" name="day" class="form-control" placeholder=""></td>
                                                            <td><input type="checkbox" name="night" class="form-control" placeholder=""></td>
                                                        </tr>
                                                        <tr>
                                                            <td>2.</td>
                                                            <td>RESPIRATORY CARE</td>
                                                            <td><input type="checkbox" name="day" class="form-control" placeholder=""></td>
                                                            <td><input type="checkbox" name="night" class="form-control" placeholder=""></td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>Breathing Adequatly</td>
                                                            <td><input type="checkbox" name="day" class="form-control" placeholder=""></td>
                                                            <td><input type="checkbox" name="night" class="form-control" placeholder=""></td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>Monitor Saturation</td>
                                                            <td><input type="checkbox" name="day" class="form-control" placeholder=""></td>
                                                            <td><input type="checkbox" name="night" class="form-control" placeholder=""></td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>Oxygen Accordingly</td>
                                                            <td><input type="checkbox" name="day" class="form-control" placeholder=""></td>
                                                            <td><input type="checkbox" name="night" class="form-control" placeholder=""></td>
                                                        </tr>
                                                        <tr>
                                                            <td>3.</td>
                                                            <td>NUTRITION</td>
                                                            <td><input type="checkbox" name="day" class="form-control" placeholder=""></td>
                                                            <td><input type="checkbox" name="night" class="form-control" placeholder=""></td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>Diet Plan in Place</td>
                                                            <td><input type="checkbox" name="day" class="form-control" placeholder=""></td>
                                                            <td><input type="checkbox" name="night" class="form-control" placeholder=""></td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>Oral Feeding</td>
                                                            <td><input type="checkbox" name="day" class="form-control" placeholder=""></td>
                                                            <td><input type="checkbox" name="night" class="form-control" placeholder=""></td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>Nasogastric tube feeding</td>
                                                            <td><input type="checkbox" name="day" class="form-control" placeholder=""></td>
                                                            <td><input type="checkbox" name="night" class="form-control" placeholder=""></td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>Parental</td>
                                                            <td><input type="checkbox" name="day" class="form-control" placeholder=""></td>
                                                            <td><input type="checkbox" name="night" class="form-control" placeholder=""></td>
                                                        </tr>
                                                        <tr>
                                                            <td>4.</td>
                                                            <td>ELIMINATION</td>
                                                            <td><input type="checkbox" name="day" class="form-control" placeholder=""></td>
                                                            <td><input type="checkbox" name="night" class="form-control" placeholder=""></td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>Passing Urine Adequately</td>
                                                            <td><input type="checkbox" name="day" class="form-control" placeholder=""></td>
                                                            <td><input type="checkbox" name="night" class="form-control" placeholder=""></td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>Opening Bowels Adequately</td>
                                                            <td><input type="checkbox" name="day" class="form-control" placeholder=""></td>
                                                            <td><input type="checkbox" name="night" class="form-control" placeholder=""></td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>Excessive Sweating</td>
                                                            <td><input type="checkbox" name="day" class="form-control" placeholder=""></td>
                                                            <td><input type="checkbox" name="night" class="form-control" placeholder=""></td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>Additional Elimination Outlets</td>
                                                            <td><input type="checkbox" name="day" class="form-control" placeholder=""></td>
                                                            <td><input type="checkbox" name="night" class="form-control" placeholder=""></td>
                                                        </tr>
                                                        <tr>
                                                            <td>5.</td>
                                                            <td>MUSCULOR-SKELETAL SYSTEM</td>
                                                            <td><input type="checkbox" name="day" class="form-control" placeholder=""></td>
                                                            <td><input type="checkbox" name="night" class="form-control" placeholder=""></td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>Passive Exercises done by Nurse</td>
                                                            <td><input type="checkbox" name="day" class="form-control" placeholder=""></td>
                                                            <td><input type="checkbox" name="night" class="form-control" placeholder=""></td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>Physiotherapy Session</td>
                                                            <td><input type="checkbox" name="day" class="form-control" placeholder=""></td>
                                                            <td><input type="checkbox" name="night" class="form-control" placeholder=""></td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>Mobilised</td>
                                                            <td><input type="checkbox" name="day" class="form-control" placeholder=""></td>
                                                            <td><input type="checkbox" name="night" class="form-control" placeholder=""></td>
                                                        </tr>
                                                        <tr>
                                                            <td>6.</td>
                                                            <td>COUNSELLING</td>
                                                            <td><input type="checkbox" name="day" class="form-control" placeholder=""></td>
                                                            <td><input type="checkbox" name="night" class="form-control" placeholder=""></td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>Nutritional Counselling</td>
                                                            <td><input type="checkbox" name="day" class="form-control" placeholder=""></td>
                                                            <td><input type="checkbox" name="night" class="form-control" placeholder=""></td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>General Counsellor Session</td>
                                                            <td><input type="checkbox" name="day" class="form-control" placeholder=""></td>
                                                            <td><input type="checkbox" name="night" class="form-control" placeholder=""></td>
                                                        </tr>
                                                        <tr>
                                                            <td>6.</td>
                                                            <td>MEDICATIONS</td>
                                                            <td><input type="checkbox" name="day" class="form-control" placeholder=""></td>
                                                            <td><input type="checkbox" name="night" class="form-control" placeholder=""></td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>6.00 am</td>
                                                            <td><input type="checkbox" name="day" class="form-control" placeholder=""></td>
                                                            <td><input type="checkbox" name="night" class="form-control" placeholder=""></td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>12.00 md</td>
                                                            <td><input type="checkbox" name="day" class="form-control" placeholder=""></td>
                                                            <td><input type="checkbox" name="night" class="form-control" placeholder=""></td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>2.00 pm</td>
                                                            <td><input type="checkbox" name="day" class="form-control" placeholder=""></td>
                                                            <td><input type="checkbox" name="night" class="form-control" placeholder=""></td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>6.00 pm</td>
                                                            <td><input type="checkbox" name="day" class="form-control" placeholder=""></td>
                                                            <td><input type="checkbox" name="night" class="form-control" placeholder=""></td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>10.00 pm</td>
                                                            <td><input type="checkbox" name="day" class="form-control" placeholder=""></td>
                                                            <td><input type="checkbox" name="night" class="form-control" placeholder=""></td>
                                                        </tr>
                                                        <tr>
                                                            <td>8.</td>
                                                            <td>VITAL OBSERVATIONS -Done</td>
                                                            <td><input type="checkbox" name="day" class="form-control" placeholder=""></td>
                                                            <td><input type="checkbox" name="night" class="form-control" placeholder=""></td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>6.00 am</td>
                                                            <td><input type="checkbox" name="day" class="form-control" placeholder=""></td>
                                                            <td><input type="checkbox" name="night" class="form-control" placeholder=""></td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>10.00 am</td>
                                                            <td><input type="checkbox" name="day" class="form-control" placeholder=""></td>
                                                            <td><input type="checkbox" name="night" class="form-control" placeholder=""></td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>2.00 pm</td>
                                                            <td><input type="checkbox" name="day" class="form-control" placeholder=""></td>
                                                            <td><input type="checkbox" name="night" class="form-control" placeholder=""></td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>6.00 pm</td>
                                                            <td><input type="checkbox" name="day" class="form-control" placeholder=""></td>
                                                            <td><input type="checkbox" name="night" class="form-control" placeholder=""></td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>10.00 pm</td>
                                                            <td><input type="checkbox" name="day" class="form-control" placeholder=""></td>
                                                            <td><input type="checkbox" name="night" class="form-control" placeholder=""></td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>Glasgow Coma Scale out of 15</td>
                                                            <td><input type="checkbox" name="day" class="form-control" placeholder=""></td>
                                                            <td><input type="checkbox" name="night" class="form-control" placeholder=""></td>
                                                        </tr>
                                                        <tr>
                                                            <td>9</td>
                                                            <td>CANNULAR OBSERVATIONS -Cannular</td>
                                                            <td><input type="checkbox" name="day" class="form-control" placeholder=""></td>
                                                            <td><input type="checkbox" name="night" class="form-control" placeholder=""></td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>6.00 am</td>
                                                            <td><input type="checkbox" name="day" class="form-control" placeholder=""></td>
                                                            <td><input type="checkbox" name="night" class="form-control" placeholder=""></td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>10.00 am</td>
                                                            <td><input type="checkbox" name="day" class="form-control" placeholder=""></td>
                                                            <td><input type="checkbox" name="night" class="form-control" placeholder=""></td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>2.00 pm</td>
                                                            <td><input type="checkbox" name="day" class="form-control" placeholder=""></td>
                                                            <td><input type="checkbox" name="night" class="form-control" placeholder=""></td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>6.00 pm</td>
                                                            <td><input type="checkbox" name="day" class="form-control" placeholder=""></td>
                                                            <td><input type="checkbox" name="night" class="form-control" placeholder=""></td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>10.00 pm</td>
                                                            <td><input type="checkbox" name="day" class="form-control" placeholder=""></td>
                                                            <td><input type="checkbox" name="night" class="form-control" placeholder=""></td>
                                                        </tr>
                                                        <tr>
                                                            <td>10.</td>
                                                            <td>HEALTH EDUCATION -session</td>
                                                            <td><input type="checkbox" name="day" class="form-control" placeholder=""></td>
                                                            <td><input type="checkbox" name="night" class="form-control" placeholder=""></td>
                                                        </tr>
                                                        <tr>
                                                            <td>11.</td>
                                                            <td>DOCTOR'S Instruction notes checked</td>
                                                            <td><input type="checkbox" name="day" class="form-control" placeholder=""></td>
                                                            <td><input type="checkbox" name="night" class="form-control" placeholder=""></td>
                                                        </tr>
                                                        <tr>
                                                            <td>12.</td>
                                                            <td>SAFETY MEASURES</td>
                                                            <td><input type="checkbox" name="day" class="form-control" placeholder=""></td>
                                                            <td><input type="checkbox" name="night" class="form-control" placeholder=""></td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>Clean Dry Floors</td>
                                                            <td><input type="checkbox" name="day" class="form-control" placeholder=""></td>
                                                            <td><input type="checkbox" name="night" class="form-control" placeholder=""></td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>Mosquito Net Available</td>
                                                            <td><input type="checkbox" name="day" class="form-control" placeholder=""></td>
                                                            <td><input type="checkbox" name="night" class="form-control" placeholder=""></td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>Bedside Attendant</td>
                                                            <td><input type="checkbox" name="day" class="form-control" placeholder=""></td>
                                                            <td><input type="checkbox" name="night" class="form-control" placeholder=""></td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>Bed rails as necessary</td>
                                                            <td><input type="checkbox" name="day" class="form-control" placeholder=""></td>
                                                            <td><input type="checkbox" name="night" class="form-control" placeholder=""></td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>Sanitizer in cubicle</td>
                                                            <td><input type="checkbox" name="day" class="form-control" placeholder=""></td>
                                                            <td><input type="checkbox" name="night" class="form-control" placeholder=""></td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>Infection control measures in place</td>
                                                            <td><input type="checkbox" name="day" class="form-control" placeholder=""></td>
                                                            <td><input type="checkbox" name="night" class="form-control" placeholder=""></td>
                                                        </tr>
                                                        <tr>
                                                            <td>13.</td>
                                                            <td>Investigation, Reports followed up</td>
                                                            <td><input type="checkbox" name="day" class="form-control" placeholder=""></td>
                                                            <td><input type="checkbox" name="night" class="form-control" placeholder=""></td>
                                                        </tr>
                                                        <tr>
                                                            <td>14.</td>
                                                            <td>Next of Kin updated on care of the patient</td>
                                                            <td><input type="checkbox" name="day" class="form-control" placeholder=""></td>
                                                            <td><input type="checkbox" name="night" class="form-control" placeholder=""></td>
                                                        </tr>
                                                        <tr>
                                                            <td>15.</td>
                                                            <td>Adequate Rest 2.00-4.00 & 10am-6am</td>
                                                            <td><input type="checkbox" name="day" class="form-control" placeholder=""></td>
                                                            <td><input type="checkbox" name="night" class="form-control" placeholder=""></td>
                                                        </tr>
                                                        <tr>
                                                            <td>16</td>
                                                            <td>All procedures & Material charged</td>
                                                            <td><input type="checkbox" name="day" class="form-control" placeholder=""></td>
                                                            <td><input type="checkbox" name="night" class="form-control" placeholder=""></td>
                                                        </tr>
                                                        <tr>
                                                            <td>17.</td>
                                                            <td>Nurse's Initials</td>
                                                            <td><input type="checkbox" name="day" class="form-control" placeholder=""></td>
                                                            <td><input type="checkbox" name="night" class="form-control" placeholder=""></td>
                                                        </tr>
                                                        <tr>
                                                            <td>18.</td>
                                                            <td>Checked by HOD</td>
                                                            <td><input type="checkbox" name="day" class="form-control" placeholder=""></td>
                                                            <td><input type="checkbox" name="night" class="form-control" placeholder=""></td>
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
