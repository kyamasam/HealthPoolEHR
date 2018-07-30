@extends('layouts.master')
@section('content')
    <!-- Title & Breadcrumbs-->
    <div class="row page-titles">
        <div class="col-md-12 align-self-center">
            <h4 class="theme-cl">Physical Examination On Admission</h4>
        </div>
    </div>
    <!-- Title & Breadcrumbs-->

    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Physical Examination On Admission</h4>
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
                                <th>General_condition</th>
                                <th>Hygiene</th>
                                <th>Nutrition</th>
                                <th>Behaviour</th>
                                <th>Oedema</th>
                                <th>Other</th>
                                <th>Abdomen</th>
                                <th>Scars</th>
                                <th>Tenderness</th>
                                <th>Bowel_Pattern</th>
                                <th>Last_bowel_action</th>
                                <th>Laxatives_in_use</th>
                                <th>Bowel_sound_</th>
                                <th>Others</th>
                                <th>Hair</th>
                                <th>Face </th>
                                <th>Eyes</th>
                                <th>Nose</th>
                                <th>Mouth</th>
                                <th>Other</th>
                                <th>Mobility</th>
                                <th>Gait </th>
                                <th>Limbs</th>
                                <th>Digits</th>
                                <th>Muscle </th>
                                <th>G_C_Score</th>
                                <th>Hearing</th>
                                <th>Speech</th>
                                <th>Cry</th>
                                <th>Others</th>
                                <th>Bladder_palpable</th>
                                <th>Voiding </th>
                                <th>Pain</th>
                                <th>Discharge</th>
                                <th>Others</th>
                                <th>Pulse_rate</th>
                                <th>Blood_pressure</th>
                                <th>Blood_pressure</th>
                                <th>Apex_beat</th>
                                <th>Others</th>
                                <th>Color</th>
                                <th>Rashes</th>
                                <th>Scars</th>
                                <th>Wounds</th>
                                <th>Bruises</th>
                                <th>Temperature</th>
                                <th>Water </th>
                                <th>Others</th>
                                <th>Respiration</th>
                                <th>Rate</th>
                                <th>Cough</th>
                                <th>Wounds</th>
                                <th>Others</th>
                                <th>PHYSICAL_EXAMINATION_COMPLETED_BY</th>
                                <th>DATE</th>
                                <th>TIME</th>
                                <th>DESIGNATION</th>
                                <th>SIGNATURE</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(isset($physicalexaminationonadmission_results))
                                @foreach($physicalexaminationonadmission_results as $physicalexaminationonadmission_result)
                                    <tr>
                                        <td>{{ $physicalexaminationonadmission_result->bio_patient_name}}</td>
                                        <td>{{ $physicalexaminationonadmission_result->bio_ip_no}}</td>
                                        <td>{{ $physicalexaminationonadmission_result->bio_date}}</td>
                                        <td>{{ $physicalexaminationonadmission_result->bio_age}}</td>
                                        <td>{{ $physicalexaminationonadmission_result->bio_ward}}</td>
                                        <td>{{ $physicalexaminationonadmission_result->bio_bed_number}}</td>
                                        <td>{{ $physicalexaminationonadmission_result->bio_sex}}</td>
                                        <td>{{ $physicalexaminationonadmission_result->condition}}</td>
                                        <td>{{ $physicalexaminationonadmission_result->hygiene}}</td>
                                        <td>{{ $physicalexaminationonadmission_result->nutrition}}</td>
                                        <td>{{ $physicalexaminationonadmission_result->behaviour}}</td>
                                        <td>{{ $physicalexaminationonadmission_result->oedema}}</td>
                                        <td>{{ $physicalexaminationonadmission_result->other}}</td>
                                        <td>{{ $physicalexaminationonadmission_result->abdomen}}</td>
                                        <td>{{ $physicalexaminationonadmission_result->scars}}</td>
                                        <td>{{ $physicalexaminationonadmission_result->tenderness}}</td>
                                        <td>{{ $physicalexaminationonadmission_result->bowelpattern}}</td>
                                        <td>{{ $physicalexaminationonadmission_result->bowelaction}}</td>
                                        <td>{{ $physicalexaminationonadmission_result->laxatives}}</td>
                                        <td>{{ $physicalexaminationonadmission_result->bowelsound}}</td>
                                        <td>{{ $physicalexaminationonadmission_result->othersb}}</td>
                                        <td>{{ $physicalexaminationonadmission_result->Hair}}</td>
                                        <td>{{ $physicalexaminationonadmission_result->Face}}</td>
                                        <td>{{ $physicalexaminationonadmission_result->Eyes}}</td>
                                        <td>{{ $physicalexaminationonadmission_result->Nose}}</td>
                                        <td>{{ $physicalexaminationonadmission_result->Mouth}}</td>
                                        <td>{{ $physicalexaminationonadmission_result->Otherc}}</td>
                                        <td>{{ $physicalexaminationonadmission_result->Mobility}}</td>
                                        <td>{{ $physicalexaminationonadmission_result->Gait}}</td>
                                        <td>{{ $physicalexaminationonadmission_result->Limbs}}</td>
                                        <td>{{ $physicalexaminationonadmission_result->Digits}}</td>
                                        <td>{{ $physicalexaminationonadmission_result->Muscletone}}</td>
                                        <td>{{ $physicalexaminationonadmission_result->Scored}}</td>
                                        <td>{{ $physicalexaminationonadmission_result->Hearingd}}</td>
                                        <td>{{ $physicalexaminationonadmission_result->Speechd}}</td>
                                        <td>{{ $physicalexaminationonadmission_result->Cryd}}</td>
                                        <td>{{ $physicalexaminationonadmission_result->Othersd}}</td>
                                        <td>{{ $physicalexaminationonadmission_result->Bladder}}</td>
                                        <td>{{ $physicalexaminationonadmission_result->Voiding }}</td>
                                        <td>{{ $physicalexaminationonadmission_result->Pain}}</td>
                                        <td>{{ $physicalexaminationonadmission_result->Discharge}}</td>
                                        <td>{{ $physicalexaminationonadmission_result->Otherse}}</td>
                                        <td>{{ $physicalexaminationonadmission_result->pulse}}</td>
                                        <td>{{ $physicalexaminationonadmission_result->bloodpressure}}</td>
                                        <td>{{ $physicalexaminationonadmission_result->apexbeat}}</td>
                                        <td>{{ $physicalexaminationonadmission_result->otherss}}</td>
                                        <td>{{ $physicalexaminationonadmission_result->color}}</td>
                                        <td>{{ $physicalexaminationonadmission_result->rashes}}</td>
                                        <td>{{ $physicalexaminationonadmission_result->scars}}</td>
                                        <td>{{ $physicalexaminationonadmission_result->woundsburns}}</td>
                                        <td>{{ $physicalexaminationonadmission_result->bruises}}</td>
                                        <td>{{ $physicalexaminationonadmission_result->temperaturec}}</td>
                                        <td>{{ $physicalexaminationonadmission_result->waterlowscore}}</td>
                                        <td>{{ $physicalexaminationonadmission_result->otherf}}</td>
                                        <td>{{ $physicalexaminationonadmission_result->respirationpattern}}</td>
                                        <td>{{ $physicalexaminationonadmission_result->ratebmin}}</td>
                                        <td>{{ $physicalexaminationonadmission_result->cough}}</td>
                                        <td>{{ $physicalexaminationonadmission_result->woundssputum}}</td>
                                        <td>{{ $physicalexaminationonadmission_result->othersg}}</td>
                                        <td>{{ $physicalexaminationonadmission_result->completion}}</td>
                                        <td>{{ $physicalexaminationonadmission_result->date}}</td>
                                        <td>{{ $physicalexaminationonadmission_result->time}}</td>
                                        <td>{{ $physicalexaminationonadmission_result->designation}}</td>
                                        <td>{{ $physicalexaminationonadmission_result->signature}}</td>
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
                                <h4 class="modal-title">Add Examination Information</h4>
                            </div>
                            <div class="modal-body">

                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="container">
                                            <form action="{{route('physicalexaminationonadmission_post')}}" method="post" >{!! csrf_field() !!}

                                                <div class="col-m-3 offset-md-0">
                                                    <H3 class="mt-20">
                                                        PHYSICAL EXAMINATION ON ADMISSION
                                                    </H3>
                                                </div>

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









                                                <table class="table table-bordered">
                                                    <tbody>

                                                    <tr class="col-md-4">

                                                        <td>
                                                            <p>1.OVERAL APPEARANCE ON ADMISSION</p>

                                                            <span class="row">General_condition<span class="col-md-4"></span> <span class="col-md-8"> <input type="text" name="condition" class="form-control" placeholder=""></span></span><br>
                                                            <span class="row">Hygiene<span class="col-md-4"></span> <span class="col-md-8"> <input type="text" name="hygiene" class=" form-control" placeholder=""></span></span><br>
                                                            <span class="row">Nutrition<span class="col-md-4"></span> <span class="col-md-8"> <input type="text" name="nutrition" class=" form-control" placeholder=""></span></span><br>
                                                            <span class="row">Behaviour<span class="col-md-4"></span> <span class="col-md-8"> <input type="text" name="behaviour" class=" form-control" placeholder=""></span></span><br>
                                                            <span class="row">Oedema<span class="col-md-4"></span> <span class="col-md-8"> <input type="text" name="oedema" class=" form-control" placeholder=""></span></span><br>
                                                            <span class="row">Other<span class="col-md-4"></span> <span class="col-md-8"> <input type="text" name="other" class=" form-control" placeholder=""></span></span><br>


                                                        </td>
                                                        <td>
                                                            <p>6.GASTROINTESTISNAL</p>

                                                            <span class="row"> Abdomen<span class="col-md-4"></span> <span class="col-md-8"> <input type="text" name="abdomen" class="form-control" placeholder=""></span></span><br>
                                                            <span class="row">Scars<span class="col-md-4"></span> <span class="col-md-8"> <input type="text" name="scars" class=" form-control" placeholder=""></span></span><br>
                                                            <span class="row">Tenderness<span class="col-md-4"></span> <span class="col-md-8"> <input type="text" name="tenderness" class=" form-control" placeholder=""></span></span><br>
                                                            <span class="row">Bowel_Pattern<span class="col-md-4"></span> <span class="col-md-8"> <input type="text" name="bowelpattern" class=" form-control" placeholder=""></span></span><br>
                                                            <span class="row">Last_bowel_action<span class="col-md-4"></span> <span class="col-md-8"> <input type="text" name="bowelaction" class=" form-control" placeholder=""></span></span><br>
                                                            <span class="row">Laxatives_in_use<span class="col-md-4"></span> <span class="col-md-8"> <input type="text" name="laxatives" class=" form-control" placeholder=""></span></span><br>
                                                            <span class="row">Bowel_sound_(where_applicable)<span class="col-md-4"></span> <span class="col-md-8"> <input type="text" name="bowelsound" class=" form-control" placeholder=""></span></span><br>
                                                            <span class="row">Others<span class="col-md-4"></span> <span class="col-md-8"> <input type="text" name="othersb" class=" form-control" placeholder=""></span></span>



                                                        </td>

                                                    </tr>
                                                    <tr>

                                                        <td>
                                                            <p>2.HEAD AND NECK</p>

                                                            <span class="row">Hair<span class="col-md-4"></span> <span class="col-md-8"> <input type="text" name="Hair" class="form-control" placeholder=""></span></span><br>
                                                            <span class="row">Face <span class="col-md-4"></span> <span class="col-md-8"> <input type="text" name="Face" class=" form-control" placeholder=""></span></span><br>
                                                            <span class="row">Eyes<span class="col-md-4"></span> <span class="col-md-8"> <input type="text" name="Eyes" class=" form-control" placeholder=""></span></span><br>
                                                            <span class="row">Nose<span class="col-md-4"></span> <span class="col-md-8"> <input type="text" name="Nose" class=" form-control" placeholder=""></span></span><br>
                                                            <span class="row">Mouth<span class="col-md-4"></span> <span class="col-md-8"> <input type="text" name="Mouth" class=" form-control" placeholder=""></span></span><br>
                                                            <span class="row">Other<span class="col-md-4"></span> <span class="col-md-8"> <input type="text" name="Otherc" class=" form-control" placeholder=""></span></span>



                                                        </td>
                                                        <td>
                                                            <p>7.MUSCULO-SKELETAL</p>

                                                            <span class="row">Mobility<span class="col-md-4"></span> <span class="col-md-8"> <input type="text" name="Mobility" class="form-control" placeholder=""></span></span><br>
                                                            <span class="row">Gait <span class="col-md-4"></span> <span class="col-md-8"> <input type="text" name="Gait" class=" form-control" placeholder=""></span></span><br>
                                                            <span class="row">Limbs<span class="col-md-4"></span> <span class="col-md-8"> <input type="text" name="Limbs" class=" form-control" placeholder=""></span></span><br>
                                                            <span class="row">Digits<span class="col-md-4"></span> <span class="col-md-8"> <input type="text" name="Digits" class=" form-control" placeholder=""></span></span><br>
                                                            <span class="row">Muscle tone<span class="col-md-4"></span> <span class="col-md-8"> <input type="text" name="Muscletone" class=" form-control" placeholder=""></span></span>



                                                        </td>

                                                    </tr>

                                                    <td>
                                                        <p>3.CENTRAL NERVOUS SYSTEM(WHERE APPLICABLE)</p>

                                                        <span class="row">G_C_Score<span class="col-md-4"></span> <span class="col-md-8"> <input type="text" name="Scored" class="form-control" placeholder=""></span></span><br>
                                                        <span class="row">Hearing<span class="col-md-4"></span> <span class="col-md-8"> <input type="text" name="Hearingd" class=" form-control" placeholder=""></span></span><br>
                                                        <span class="row">Speech<span class="col-md-4"></span> <span class="col-md-8"> <input type="text" name="Speechd" class=" form-control" placeholder=""></span></span><br>
                                                        <span class="row">Cry<span class="col-md-4"></span> <span class="col-md-8"> <input type="text" name="Cryd" class=" form-control" placeholder=""></span></span><br>
                                                        <span class="row">Others<span class="col-md-4"></span> <span class="col-md-8"> <input type="text" name="Othersd" class=" form-control" placeholder=""></span></span>

                                                    </td>


                                                    <td>
                                                        <p>8.UPRINOGENITAL</p>

                                                        <span class="row">Bladder_palpable/not palpable<span class="col-md-4"></span> <span class="col-md-8"> <input type="text" name="Bladder" class="form-control" placeholder=""></span></span><br>
                                                        <span class="row">Voiding pattern<span class="col-md-4"></span> <span class="col-md-8"> <input type="text" name="Voiding" class=" form-control" placeholder=""></span></span><br>
                                                        <span class="row">Pain<span class="col-md-4"></span> <span class="col-md-8"> <input type="text" name="Pain" class=" form-control" placeholder=""></span></span><br>
                                                        <span class="row">Discharge<span class="col-md-4"></span> <span class="col-md-8"> <input type="text" name="Discharge" class=" form-control" placeholder=""></span></span><br>
                                                        <span class="row">Others<span class="col-md-4"></span> <span class="col-md-8"> <input type="text" name="Otherse" class=" form-control" placeholder=""></span></span>

                                                    </td>



                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>4.CARDIOVASCULAR</p>

                                                            <span class="row">Pulse_rate(b/min)<span class="col-md-4"></span> <span class="col-md-8"> <input type="text" name="pulse" class="form-control" placeholder=""></span></span><br>
                                                            <span class="row">Blood_pressure(mmHg)<span class="col-md-4"></span> <span class="col-md-8"> <input type="text" name="bloodpressure" class=" form-control" placeholder=""></span></span><br>
                                                            <span class="row">Apex_beat(where applicable) <span class="col-md-4"></span> <span class="col-md-8"> <input type="text" name="apexbeat" class=" form-control" placeholder=""></span></span><br>
                                                            <span class="row">Others<span class="col-md-4"></span> <span class="col-md-8"> <input type="text" name="otherss" class=" form-control" placeholder=""></span></span>

                                                        </td>


                                                        <td>
                                                            <bold><p>9.SKIN STATUS</p></bold>

                                                            <span class="row">Color<span class="col-md-4"></span> <span class="col-md-8"> <input type="text" name="color" class="form-control" placeholder=""></span></span><br>
                                                            <span class="row">Rashes<span class="col-md-4"></span> <span class="col-md-8"> <input type="text" name="rashes" class=" form-control" placeholder=""></span></span><br>
                                                            <span class="row">Scars<span class="col-md-4"></span> <span class="col-md-8"> <input type="text" name="scarsb" class=" form-control" placeholder=""></span></span><br>
                                                            <span class="row">Wounds/burns<span class="col-md-4"></span> <span class="col-md-8"> <input type="text" name="woundsburns" class=" form-control" placeholder=""></span></span><br>
                                                            <span class="row">Bruises<span class="col-md-4"></span> <span class="col-md-8"> <input type="text" name="bruises" class=" form-control" placeholder=""></span></span><br>
                                                            <span class="row">Temperature(°C)<span class="col-md-4"></span> <span class="col-md-8"> <input type="text" name="temperaturec" class=" form-control" placeholder=""></span></span><br>
                                                            <span class="row">Water low score<span class="col-md-4"></span> <span class="col-md-8"> <input type="text" name="waterlowscore" class=" form-control" placeholder=""></span></span><br>
                                                            <span class="row">Others<span class="col-md-4"></span> <span class="col-md-8"> <input type="text" name="otherf" class=" form-control" placeholder=""></span></span>

                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <p>5.RESPIRATORY SYSTEM</p>

                                                            <span class="row">Respiration(pattern)<span class="col-md-4"></span> <span class="col-md-8"> <input type="text" name="respirationpattern" class="form-control" placeholder=""></span></span><br>
                                                            <span class="row">Rate(b/min)<span class="col-md-4"></span> <span class="col-md-8"> <input type="text" name="ratebmin" class=" form-control" placeholder=""></span></span><br>
                                                            <span class="row">Cough<span class="col-md-4"></span> <span class="col-md-8"> <input type="text" name="cough" class=" form-control" placeholder=""></span></span><br>
                                                            <span class="row">Wounds/Sputum<span class="col-md-4"></span> <span class="col-md-8"> <input type="text" name="woundssputum" class=" form-control" placeholder=""></span></span><br>

                                                            <span class="row">Others<span class="col-md-4"></span> <span class="col-md-8"> <input type="text" name="othersg" class=" form-control" placeholder=""></span></span>


                                                        </td>

                                                    </tr>



                                                    </tbody>
                                                </table>
                                                <br><br>


                                                <table class="table table-bordered">
                                                    <tbody>

                                                    <tr class="col-md-4">

                                                        <td>
                                                            <div class="row">
                                                                <div class="form-group row col-md-8">
                                                                    <label for="staticEmail" class="col-sm-8 col-form-label">PHYSICAL_EXAMINATION_COMPLETED_BY</label>
                                                                    <div class="col-sm-4">
                                                                        <input type="text" name="completion" class=" form-control" placeholder="">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row col-md-4">
                                                                    <label for="staticEmail" class="col-sm-4 col-form-label">DATE</label>
                                                                    <div class="col-sm-8">
                                                                        <input type="date" name="date" class=" form-control" placeholder="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <br>

                                                            <div class="row">
                                                                <div class="form-group row col-md-4">
                                                                    <label for="staticEmail" class="col-sm-2 col-form-label">TIME</label>
                                                                    <div class="col-sm-6">
                                                                        <input type="time" name="time" class=" form-control" placeholder="">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row col-md-4">
                                                                    <label for="staticEmail" class="col-sm-4 col-form-label">DESIGNATION</label>
                                                                    <div class="col-sm-6">
                                                                        <input type="text" name="designation" class=" form-control" placeholder="">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row col-md-4">
                                                                    <label for="staticEmail" class="col-sm-4 col-form-label">SIGNATURE</label>
                                                                    <div class="col-sm-6">
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
