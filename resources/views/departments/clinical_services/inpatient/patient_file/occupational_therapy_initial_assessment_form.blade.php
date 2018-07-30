@extends('layouts.master')
@section('content')
    <!-- Title &
    Breadcrumbs-->
    <div class="row page-titles">
        <div class="col-md-12 align-self-center">
            <h4 class="theme-cl">OCCUPATIONAL THERAPY INITIAL ASSESSMENT</h4>
        </div>
    </div>
    <!-- Title & Breadcrumbs-->
    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>OCCUPATIONAL THERAPY INITIAL ASSESSMENT</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable" class="table table-bordered">
                            <thead>
                            <tr>
                                <th>age</th>
                                <th>date_referred</th>
                                <th>sex</th>
                                <th>date_of_asessment</th>
                                <th>occupational</th>
                                <th>diagnosis</th>
                                <th>ot_no</th>
                                <th>adressed_by</th>
                                <th>referred_by</th>
                                <th>signature</th>
                                <th>main_complaint</th>
                                <th>personal_history</th>
                                <th>history</th>
                                <th>relevant</th>
                                <th>occupational_entail</th>
                                <th>activities</th>
                                <th>typical_day</th>
                                <th>leisure_time</th>
                                <th>priorities_in_life</th>
                                <th>impairement_prevent</th>
                                <th>communicational_skills</th>
                                <th>planning</th>
                                <th>memory</th>
                                <th>organization</th>
                                <th>problem_solving</th>
                                <th>sensory_processing</th>
                                <th>physical_ability</th>
                                <th>clients_posture</th>
                                <th>clients_mobility</th>
                                <th>co_ordination</th>
                                <th>clients_muscle</th>
                                <th>adls</th>
                                <th>barriers</th>
                                <th>assistive_devices</th>
                                <th>social_support</th>
                                <th>eating_skills</th>
                                <th>dressing_skils</th>
                                <th>hygiene_skills</th>
                                <th>domestic_living</th>
                                <th>comm_skills</th>
                                <th>other</th>
                                <th>fine_motor</th>
                                <th>handwriting</th>
                                <th>gross_motor</th>
                                <th>socializing_skills</th>
                                <th>pre_vocational</th>
                                <th>others</th>
                                <th>play_leisure</th>
                                <th>no_clear</th>
                                <th>intevention</th>
                                <th>needforot</th>
                                <th>need_extensive</th>
                                <th>referral</th>
                                <th>ot_issues</th>
                                <th>intervention_plan</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(isset($occupational_therapy_initial_assessment_form_results))
                                @foreach($occupational_therapy_initial_assessment_form_results as $occupational_therapy_initial_assessment_form_result)
                                    <tr>
                                        <td>{{$occupational_therapy_initial_assessment_form_result->age}}</td>
                                        <td>{{$occupational_therapy_initial_assessment_form_result->date_referred}}</td>
                                        <td>{{$occupational_therapy_initial_assessment_form_result->sex}}</td>
                                        <td>{{$occupational_therapy_initial_assessment_form_result->date_of_asessment}}</td>
                                        <td>{{$occupational_therapy_initial_assessment_form_result->occupational}}</td>
                                        <td>{{$occupational_therapy_initial_assessment_form_result->diagnosis}}</td>
                                        <td>{{$occupational_therapy_initial_assessment_form_result->ot_no}}</td>
                                        <td>{{$occupational_therapy_initial_assessment_form_result->adressed_by}}</td>
                                        <td>{{$occupational_therapy_initial_assessment_form_result->referred_by}}</td>
                                        <td>{{$occupational_therapy_initial_assessment_form_result->signature}}</td>
                                        <td>{{$occupational_therapy_initial_assessment_form_result->main_complaint}}</td>
                                        <td>{{$occupational_therapy_initial_assessment_form_result->personal_history}}</td>
                                        <td>{{$occupational_therapy_initial_assessment_form_result->history}}</td>
                                        <td>{{$occupational_therapy_initial_assessment_form_result->relevant}}</td>
                                        <td>{{$occupational_therapy_initial_assessment_form_result->occupational_entail}}</td>
                                        <td>{{$occupational_therapy_initial_assessment_form_result->activities}}</td>
                                        <td>{{$occupational_therapy_initial_assessment_form_result->typical_day}}</td>
                                        <td>{{$occupational_therapy_initial_assessment_form_result->leisure_time}}</td>
                                        <td>{{$occupational_therapy_initial_assessment_form_result->priorities_in_life}}</td>
                                        <td>{{$occupational_therapy_initial_assessment_form_result->impairement_prevent}}</td>
                                        <td>{{$occupational_therapy_initial_assessment_form_result->communicational_skills}}</td>
                                        <td>{{$occupational_therapy_initial_assessment_form_result->planning}}</td>
                                        <td>{{$occupational_therapy_initial_assessment_form_result->memory}}</td>
                                        <td>{{$occupational_therapy_initial_assessment_form_result->organization}}</td>
                                        <td>{{$occupational_therapy_initial_assessment_form_result->problem_solving}}</td>
                                        <td>{{$occupational_therapy_initial_assessment_form_result->sensory_processing}}</td>
                                        <td>{{$occupational_therapy_initial_assessment_form_result->physical_ability}}</td>
                                        <td>{{$occupational_therapy_initial_assessment_form_result->clients_posture}}</td>
                                        <td>{{$occupational_therapy_initial_assessment_form_result->clients_mobility}}</td>
                                        <td>{{$occupational_therapy_initial_assessment_form_result->co_ordination}}</td>
                                        <td>{{$occupational_therapy_initial_assessment_form_result->clients_muscle}}</td>
                                        <td>{{$occupational_therapy_initial_assessment_form_result->adls}}</td>
                                        <td>{{$occupational_therapy_initial_assessment_form_result->barriers}}</td>
                                        <td>{{$occupational_therapy_initial_assessment_form_result->assistive_devices}}</td>
                                        <td>{{$occupational_therapy_initial_assessment_form_result->social_support}}</td>
                                        <td>{{$occupational_therapy_initial_assessment_form_result->eating_skills}}</td>
                                        <td>{{$occupational_therapy_initial_assessment_form_result->dressing_skils}}</td>
                                        <td>{{$occupational_therapy_initial_assessment_form_result->hygiene_skills}}</td>
                                        <td>{{$occupational_therapy_initial_assessment_form_result->domestic_living}}</td>
                                        <td>{{$occupational_therapy_initial_assessment_form_result->comm_skills}}</td>
                                        <td>{{$occupational_therapy_initial_assessment_form_result->other}}</td>
                                        <td>{{$occupational_therapy_initial_assessment_form_result->fine_motor}}</td>
                                        <td>{{$occupational_therapy_initial_assessment_form_result->handwriting}}</td>
                                        <td>{{$occupational_therapy_initial_assessment_form_result->gross_motor}}</td>
                                        <td>{{$occupational_therapy_initial_assessment_form_result->socializing_skills}}</td>
                                        <td>{{$occupational_therapy_initial_assessment_form_result->pre_vocational}}</td>
                                        <td>{{$occupational_therapy_initial_assessment_form_result->others}}</td>
                                        <td>{{$occupational_therapy_initial_assessment_form_result->play_leisure}}</td>
                                        <td>{{$occupational_therapy_initial_assessment_form_result->no_clear}}</td>
                                        <td>{{$occupational_therapy_initial_assessment_form_result->intevention}}</td>
                                        <td>{{$occupational_therapy_initial_assessment_form_result->needforot}}</td>
                                        <td>{{$occupational_therapy_initial_assessment_form_result->need_extensive}}</td>
                                        <td>{{$occupational_therapy_initial_assessment_form_result->referral}}</td>
                                        <td>{{$occupational_therapy_initial_assessment_form_result->ot_issues}}</td>
                                        <td>{{$occupational_therapy_initial_assessment_form_result->intervention_plan}}</td>
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
                                <h4 class="modal-title">Occupational Therapy Initial Assessment Form</h4>
                            </div>
                            <div class="col-md-12">
                                <div class="card">
                                    <form action="{{route('patient_file_occupational_therapy_initial_assessment__post')}}" method="post" >{!! csrf_field() !!}
                                        <div class="col-m-3 offset-md-3">
                                            <H1 class="mt-20 ">
                                                occupational therapy initial assessment form
                                            </H1>
                                            <h1>1.biodata</h1>
                                            <div class="form-group row">

                                                <div class="col-sm-6">
                                                    <label for="">age</label>
                                                    <input type="number" name="age" class="form-control" placeholder="">
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for="">date reffered</label>
                                                    <input type="date" name="date_referred" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                            <div class="form-group row">

                                                <div class="form-group col-md-6">
                                                    <label>sex</label><br>
                                                    <input type="radio" name="sex" value="male"> male<br>
                                                    <input type="radio" name="sex" value=" female" checked> female<br>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for="">date of assesment</label>
                                                    <input type="date" name="date_of_asessment" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                            <div class="form-group row">

                                                <div class="col-sm-6">
                                                    <label for="">occupational</label>
                                                    <input type="text" name="occupational" class="form-control" placeholder="">
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for="">diagnosis</label>
                                                    <input type="text" name="diagnosis" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                            <div class="form-group row">

                                                <div class="col-sm-6">
                                                    <label for="">O.T NO</label>
                                                    <input type="number" name="ot_no" class="form-control" placeholder="">
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for="">Assesed By</label>
                                                    <input type="text" name="adressed_by" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                            <div class="form-group row">

                                                <div class="col-sm-6">
                                                    <label for="">Refferred by/from</label>
                                                    <input type="text" name="referred_by" class="form-control" placeholder="">
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for="">signature</label>
                                                    <input type="text" name="signature" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>2.main complaint</label>
                                                <input type="text" name="main_complaint"   class="form-control"  aria-describedby="" placeholder="">
                                            </div>
                                            <div class="form-group">
                                                <label>3.PERSONAL SOCIAL HISTORY</label>
                                                <input type="text" name="personal_history"   class="form-control"  aria-describedby="" placeholder="">
                                            </div>
                                            <H4>4.BRIEF MEDICAL HISTORY</H4>
                                            <div class="form-group">
                                                <label>i)History for current condition or illness</label>
                                                <input type="text" name="history"   class="form-control"  aria-describedby="" placeholder="">
                                            </div>
                                            <div class="form-group">
                                                <label>ii)relevant past medical/surgical History</label>
                                                <input type="text" name="relevant"   class="form-control"  aria-describedby="" placeholder="">
                                            </div>
                                        </div>
                                        <H4>4.WORK/EMPLOYMENT/OCCUPATIONAL HISTORY</H4>
                                        <div class="form-group">
                                            <label>i)What does your occupational entail?</label>
                                            <input type="text" name="occupational_entail"   class="form-control"  aria-describedby="" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label>ii)What activities give you/the child a sense of purpose in life? </label>
                                            <input type="text" name="activities"   class="form-control"  aria-describedby="" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label>iii)Describe you're childs typical/normal day </label>
                                            <input type="text" name="typical_day"   class="form-control"  aria-describedby="" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label>iv)How do you/child spend leisure time </label>
                                            <input type="text" name="leisure_time"   class="form-control"  aria-describedby="" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label>v)What are your priorities in life </label>
                                            <input type="text" name="priorities_in_life"   class="form-control"  aria-describedby="" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label>vi)How does youre impairment prevent you/child from doing what youre interested in? </label>
                                            <input type="text" name="impairement_prevent"   class="form-control"  aria-describedby="" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label><h4>6.ii)Occupational Performanece Components (describe any deficit noted)</h4>
                                                <p>Interpersonal skills</p><br>
                                                <p>Communicational Interactional skills' (non-verbal skils,conversation,vocal expression,relationships)</p>
                                            </label>
                                            <input type="text" name="communicational_skills"   class="form-control"  aria-describedby="" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label><h4>Cognitive ability</h4> <p>planning</p></label>
                                            <input type="text" name="planning"   class="form-control"  aria-describedby="" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label>memory </label>
                                            <input type="text" name="memory"   class="form-control"  aria-describedby="" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label>organization </label>
                                            <input type="text" name="organization"   class="form-control"  aria-describedby="" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label>problem-solving </label>
                                            <input type="text" name="problem_solving"   class="form-control"  aria-describedby="" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label>Sensory processing </label>
                                            <input type="text" name="sensory_processing"   class="form-control"  aria-describedby="" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label><h4>physical ability</h4> <p>Describe clients Muscle tone,</p></label>
                                            <input type="text" name="physical_ability"   class="form-control"  aria-describedby="" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label>Describe clients posture, </label>
                                            <input type="text" name="clients_posture"   class="form-control"  aria-describedby="" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label>Describe clients mobility(PROM,General mobility), </label>
                                            <input type="text" name="clients_mobility"   class="form-control"  aria-describedby="" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label>Describe any co-ordination deficits observed, </label>
                                            <input type="text" name="co_ordination"   class="form-control"  aria-describedby="" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label>Describe clients muscle strength, </label>
                                            <input type="text" name="clients_muscle"   class="form-control"  aria-describedby="" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label><h4>iii)Physical Environment(Home/Work?Place of study)</h4>
                                                <p>which facilities are available for ADLs</p><br>

                                            </label>
                                            <input type="text" name="adls"   class="form-control"  aria-describedby="" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label>Describe the barriers hindering accessibility at Home/work environment. </label>
                                            <input type="text" name="barriers"   class="form-control"  aria-describedby="" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label>Which assistive devices does the client need </label>
                                            <input type="text" name="assistive_devices"   class="form-control"  aria-describedby="" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label>Describe the social support available to the client(family dynamics,friends,neighbours,peers,work colleagues,expectations and invilvement.) </label>
                                            <input type="text" name="social_support"   class="form-control"  aria-describedby="" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label><h4>iv)Activities of Daily Living (describe difficulties of deficits noted)</h4>
                                                <p>feeding and eating skills</p><br>

                                            </label>
                                            <input type="text" name="eating_skills"   class="form-control"  aria-describedby="" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label>Dressing skills </label>
                                            <input type="text" name="dressing_skils"   class="form-control"  aria-describedby="" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label>Hygiene skills </label>
                                            <input type="text" name="hygiene_skills"   class="form-control"  aria-describedby="" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label>Domestic living </label>
                                            <input type="text" name="domestic_living"   class="form-control"  aria-describedby="" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label>Communication skills </label>
                                            <input type="text" name="comm_skills"   class="form-control"  aria-describedby="" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label>other </label>
                                            <input type="text" name="other"   class="form-control"  aria-describedby="" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label><h4>v)Educational & work Activities(describe difficulties or deficits noted)</h4>
                                                <p>Fine motor /visual motor</p><br>

                                            </label>
                                            <input type="text" name="fine_motor"   class="form-control"  aria-describedby="" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label>Handwriting ,Computer use</label>
                                            <input type="text" name="handwriting"   class="form-control"  aria-describedby="" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label>Gross motor skills</label>
                                            <input type="text" name="gross_motor"   class="form-control"  aria-describedby="" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label>socializational skills</label>
                                            <input type="text" name="socializing_skills"   class="form-control"  aria-describedby="" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label>pre-vocational tasks</label>
                                            <input type="text" name="pre_vocational"   class="form-control"  aria-describedby="" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label>other</label>
                                            <input type="text" name="others"   class="form-control"  aria-describedby="" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label><h4>v)play and leisure</h4></label>
                                            <input type="text" name="play_leisure"   class="form-control"  aria-describedby="" placeholder="">
                                        </div>
                                        <div class="form-group ">
                                            <label><h4>7)IDENTIFIED NEED FOR OCCUPATIONAL THERAPPY</h4></label><br>
                                            <input type="CHECKBOX" name="no_clear" value="No clear need for OT-no occupational needs identified"> No clear need for OT-no occupational needs identified<br>
                                            <input type="CHECKBOX" name="intevention" value="Intervention to support wellness and/or prevent dysfunction">Intervention to support wellness and/or prevent dysfunction<br>
                                            <input type="CHECKBOX" name="needforot" value="Need for OT intervention to restore /improve function"> Need for OT intervention to restore /improve functon<br>
                                            <input type="CHECKBOX" name="need_extensive" value="Need for extensive OT intervention to improve function">Need for extensive OT intervention to improve function<br>
                                            <input type="CHECKBOX" name="referral" value="Refferal to follow-up services also recommemnded"> Refferal to follow-up services also recommemnded <br>

                                            <div class="form-group">
                                                <label>
                                                    <h4>8)OCCUPATIONAL THERAPY ISSUES IDENTIFIED</h4>
                                                </label>
                                                <input type="text" name="ot_issues"   class="form-control"  aria-describedby="" placeholder="">
                                            </div>
                                            <div class="form-group">
                                                <label><h4>v)INTERVENTION PLAN DRAWN(in collaboration with client)</h4>


                                                </label>
                                                <input type="text" name="intervention_plan"   class="form-control"  aria-describedby="" placeholder="">
                                            </div>
                                        </div>
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