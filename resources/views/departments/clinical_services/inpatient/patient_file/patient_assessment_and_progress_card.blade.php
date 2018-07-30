@extends('layouts.master')
@section('content')
    <!-- Title &
    Breadcrumbs-->
<div class="row page-titles">
    <div class="col-md-12 align-self-center">
        <h4 class="theme-cl">Patient assessment and progress card record</h4>
    </div>
</div>
<!-- Title & Breadcrumbs-->

<div class="row">
    <div class="col-sm-12 col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Patient assessment and progress card record</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="datatable" class="table table-striped">
                        <thead>
                        <tr>
                            <th>bed_room_no</th>
                            <th>time_of_ward_arrival</th>
                            <th>date_of_admission</th>
                            <th>admission_diagnosis</th>
                            <th>confirmed_diagnosis</th>
                            <th>reg_no</th>
                            <th>ward</th>
                            <th>surname</th>
                            <th>other_names</th>
                            <th>address</th>
                            <th>date_of_birth</th>
                            <th>sex</th>
                            <th>doctors_name</th>
                            <th>marital_status</th>
                            <th>nationality</th>
                            <th>religion</th>
                            <th>language_spoken</th>
                            <th>mobile_number</th>
                            <th>occupation</th>
                            <th>residence</th>
                            <th>patient_special_request</th>
                            <th>ht</th>
                            <th>wt</th>
                            <th>bmi</th>
                            <th>lmp</th>
                            <th>blood_group</th>
                            <th>preferred </th>
                            <th>next_of_kin</th>
                            <th>name</th>
                            <th>mobile_number</th>
                            <th>address</th>
                            <th>relationship</th>
                            <th>residence</th>
                            <th>admission_form</th>
                            <th>WARD </th>
                            <th>I</th>
                            <th>admission_book_entry</th>
                            <th>urinalysis_results</th>
                            <th>patient_relatives_informed_of_visiting_hours</th>
                            <th>doctor_informed</th>
                            <th>nurse_care_plan</th>
                            <th>medication_commenced</th>
                            <th>valuable_forms_filled</th>
                            <th>allergy_form_filled</th>
                            <th>kitchen_informed</th>
                            <th>client_feedback_form</th>
                            <th>patient_admitted_by</th>
                            <th>signature</th>
                            <th>received_by</th>
                            <th>signature</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(isset($patient_assessment_and_progress_card))
                            @foreach($patient_assessment_and_progress_card as $patient_assessment_and_progress_cards)
                                <tr>
                                    <td>{{ $patient_assessment_and_progress_cards->bed_room_no}}</td>
                                    <td>{{ $patient_assessment_and_progress_cards->time_of_ward_arrival}}</td>
                                    <td>{{ $patient_assessment_and_progress_cards->date_of_admission}}</td>
                                    <td>{{ $patient_assessment_and_progress_cards->admission_diagnosis}}</td>
                                    <td>{{ $patient_assessment_and_progress_cards->confirmed_diagnosis}}</td>
                                    <td>{{ $patient_assessment_and_progress_cards->reg_no}}</td>
                                    <td>{{ $patient_assessment_and_progress_cards->ward}}</td>
                                    <td>{{ $patient_assessment_and_progress_cards->surname}}</td>
                                    <td>{{ $patient_assessment_and_progress_cards->other_names}}</td>
                                    <td>{{ $patient_assessment_and_progress_cards->address}}</td>
                                    <td>{{ $patient_assessment_and_progress_cards->date_of_birth}}</td>
                                    <td>{{ $patient_assessment_and_progress_cards->sex}}</td>
                                    <td>{{ $patient_assessment_and_progress_cards->doctors_name}}</td>
                                    <td>{{ $patient_assessment_and_progress_cards->marital_status}}</td>
                                    <td>{{ $patient_assessment_and_progress_cards->nationality}}</td>
                                    <td>{{ $patient_assessment_and_progress_cards->religion}}</td>
                                    <td>{{ $patient_assessment_and_progress_cards->language_spoken}}</td>
                                    <td>{{ $patient_assessment_and_progress_cards->occupation}}</td>
                                    <td>{{ $patient_assessment_and_progress_cards->residence}}</td>
                                    <td>{{ $patient_assessment_and_progress_cards->patient_special_request}}</td>
                                    <td>{{ $patient_assessment_and_progress_cards->ht}}</td>
                                    <td>{{ $patient_assessment_and_progress_cards->wt}}</td>
                                    <td>{{ $patient_assessment_and_progress_cards->bmi}}</td>
                                    <td>{{ $patient_assessment_and_progress_cards->lmp}}</td>
                                    <td>{{ $patient_assessment_and_progress_cards->blood_group}}</td>
                                    <td>{{ $patient_assessment_and_progress_cards->preferred_accomodation}}</td>
                                    <td>{{ $patient_assessment_and_progress_cards->next_of_kin}}</td>
                                    <td>{{ $patient_assessment_and_progress_cards->name}}</td>
                                    <td>{{ $patient_assessment_and_progress_cards->mobile_number}}</td>
                                    <td>{{ $patient_assessment_and_progress_cards->address}}</td>
                                    <td>{{ $patient_assessment_and_progress_cards->relationship}}</td>
                                    <td>{{ $patient_assessment_and_progress_cards->residence}}</td>
                                    <td>{{ $patient_assessment_and_progress_cards->admission_form}}</td>
                                    <td>{{ $patient_assessment_and_progress_cards->ward_orientation_routine_gowns}}</td>
                                    <td>{{ $patient_assessment_and_progress_cards->id_band_given}}</td>
                                    <td>{{ $patient_assessment_and_progress_cards->admission_book_entry}}</td>
                                    <td>{{ $patient_assessment_and_progress_cards->urinalysis_results}}</td>
                                    <td>{{ $patient_assessment_and_progress_cards->patient_relatives_informed_of_visiting_hours}}</td>
                                    <td>{{ $patient_assessment_and_progress_cards->doctor_informed}}</td>
                                    <td>{{ $patient_assessment_and_progress_cards->nurse_care_plan}}</td>
                                    <td>{{ $patient_assessment_and_progress_cards->medication_commenced}}</td>
                                    <td>{{ $patient_assessment_and_progress_cards->valuable_forms_filled}}</td>
                                    <td>{{ $patient_assessment_and_progress_cards->allergy_form_filled}}</td>
                                    <td>{{ $patient_assessment_and_progress_cards->kitchen_informed}}</td>
                                    <td>{{ $patient_assessment_and_progress_cards->client_feedback_form}}</td>
                                    <td>{{ $patient_assessment_and_progress_cards->patient_admitted_by}}</td>
                                    <td>{{ $patient_assessment_and_progress_cards->signature}}</td>
                                    <td>{{ $patient_assessment_and_progress_cards->received_by}}</td>
                                    <td>{{ $patient_assessment_and_progress_cards->signature}}</td>
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
                            <h4 class="modal-title">Add Patient assessment and progress card record</h4>
                        </div>
                        <div class="modal-body">

                            <div class="col-md-12">
                                <div class="card">

                                    <div class="container-fluid">
                                        <form action="{{ route('patient_assessment_and_progress_card_post') }}" method="post" enctype="multipart/form-data">
                                            {!! csrf_field() !!}
                                            <div class="col-m-3">
                                                <h3 class="mt-20">PATIENT ASSESSMENT & PROGRESS RECORD</h3>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <table class="table table-bordered">

                                                        <tbody>
                                                        <tr class="col-md-4">
                                                            <td ><span class="row"> <span class="col-md-4">BED/ROOM NO</span> <span class="col-md-8"> <input type="text" name="bed_room_no" class=" form-control" placeholder=""></span></span>
                                                                <br><span class="row"> <span class="col-md-4">TIME OF ARRIVAL IN THE WARD</span> <span class="col-md-8"><input type="time" name="time_of_ward_arrival" class="form-control" placeholder=""></span></span>
                                                                <span class="row"> <span class="col-md-4">DATE OF ADMISSION</span> <span class="col-md-8"> <input type="date" name="date_of_admission" class=" form-control" placeholder=""></span></span>
                                                                <br>
                                                                <span class="row"> <span class="col-md-4">ADMISSION DIAGNOSIS</span> <span class="col-md-8"> <input type="text" name="admission_diagnosis" class=" form-control" placeholder=""></span></span>
                                                                <br>
                                                                <span class="row"> <span class="col-md-4">CONFIRMED DIAGNOSIS</span> <span class="col-md-8"> <textarea type="text" name="confirmed_diagnosis" class=" form-control" placeholder=""></textarea></span></span>
                                                                <br>
                                                            </td>
                                                            <td>
                                                                <span class="row">
                                                                <span class="col-md-4"><span class="row"><span class="col-md-4">REG.NO  </span><span class="col-md-8"><input type="text" name="reg_no" class=" form-control" placeholder=""></span></span></span>
                                                                 <span class="col-md-6"><span class="row">
                                                                <span class="col-md-3"> WARD </span> <span class="col-md-9"><input type="text" name="ward" class=" form-control" placeholder=""></span></span></span></span>
                                                                <br>
                                                                <span class="row"> <span class="col-md-4">SURNAME</span> <span class="col-md-8"> <input type="text" name="surname" class=" form-control" placeholder=""></span></span>
                                                                <br>
                                                                <span class="row"> <span class="col-md-4">OTHER NAMES</span> <span class="col-md-8"> <input type="text" name="other_names" class=" form-control" placeholder=""></span></span>
                                                                <br>
                                                                <span class="row"> <span class="col-md-4">ADDRESS</span> <span class="col-md-8"> <input type="text" name="address" class=" form-control" placeholder=""></span></span>
                                                                <br>

                                                                <span class="row">
			<span class="col-md-4"><span class="row"><span class="col-md-5">D.O.B/AGE  </span><span class="col-md-7"><input type="date" name="date_of_birth" class=" form-control" placeholder=""></span></span></span>
		     <span class="col-md-6"><span class="row">
			<span class="col-md-3"> SEX </span> <span class="col-md-9"><input type="text" name="sex" class=" form-control" placeholder=""></span></span></span></span>
                                                                <br>
                                                                <span class="row"> <span class="col-md-4">DOCTOR'S NAME</span> <span class="col-md-8"> <textarea type="text" name="doctors_name" class=" form-control" placeholder=""></textarea></span></span>
                                                                <br>
                                                            </td>
                                                            </td>


                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                    <tbody>
                                                    <table class="table table-bordered">
                                                        <tbody>
                                                        <tr>
                                                            <td>
                                                                <span class="row"> <span class="col-md-4">MARITAL STATUS</span> <span class="col-md-8"> <input type="text" name="marital_status" class=" form-control" placeholder=""></span></span>
                                                                <br>
                                                                <span class="">
                                                                  <span class="row">
                                                                      <span class="col-md-3">NATIONALITY<input type="text" name="nationality" class=" form-control" placeholder=""></span>
                                                                      <span class="col-md-3">RELIGION<input type="text" name="religion" class=" form-control" placeholder=""></span>
                                                                    </span>
                                                                </span>
                                                                                                                    <br>
                                                                <span class="">
                                                                  <span class="row">
                                                                      <span class="col-md-3">LANGUAGE(S) SPOKEN<input type="text" name="language_spoken" class=" form-control" placeholder=""></span>
                                                                      <span class="col-md-3">MOBILE NO.<input type="text" name="mobile_number" class=" form-control" placeholder=""></span>
                                                                    </span>
                                                                </span><br>
                                                                <span class="col-md-4"><span class="row"><span class="col-md-4">OCCUPATION</span><span class="col-md-8"><input type="text" name="occupation" class=" form-control" placeholder=""></span></span></span>
                                                                <span class="col-md-6"><span class="row">
                                                                <span class="col-md-4">RESIDENCE</span> <span class="col-md-8"><input type="text" name="residence" class=" form-control" placeholder=""></span></span></span></span>
                                                                <br>
                                                                <span class="row"> <span class="col-md-4">PATIENT'S SPECIAL REQUEST</span> <span class="col-md-8"> <input type="text" name="patient_special_request" class=" form-control" placeholder=""></span></span>
                                                                <br>
                                                                <span class="">
                                                                      <span class="row">
                                                                          <span class="col-md-3">HT(kg)<input type="text" name="ht" class=" form-control" placeholder=""></span>
                                                                          <span class="col-md-3">WT(cm)<input type="text" name="wt" class=" form-control" placeholder=""></span>
                                                                          <span class="col-md-3">BMI<input type="text" name="bmi" class=" form-control" placeholder=""></span>
                                                                          <span class="col-md-3">LMP<input type="text" name="lmp" class=" form-control" placeholder=""></span>
                                                                      </span>
                                                                  </span>
                                                                <br>
                                                                <span class="row"> <span class="col-md-4">BLOOD GROUP</span> <span class="col-md-8"> <input type="text" name="blood_group" class=" form-control" placeholder=""></span></span>
                                                                <br>
                                                                PREFERRED ACCOMODATION:
                                                                <input type="radio"  name="preferred_accomodation"> WARD BED
                                                                <input type="radio"  name="preferred_accomodation"> PRIVATE ROOM

                                                            </td>



                                                        </tr>
                                                        </tbody>
                                                    </table>


                                                    <table class="table table-bordered">
                                                        <tbody>
                                                        <tr>
                                                            <td>
                                                                <span class="row"> <span class="col-md-4">NEXT OF KIN:</span> <span class="col-md-8"> <input type="text" name="next_of_kin" class=" form-control" placeholder=""></span></span>
                                                                <span class=""><br>

			  <div class="row">
	            <div class="form-group row col-md-6">
				    <label  class="col-sm-2 col-form-label">NAME(S)</label>
				    <div class="col-sm-10">
				      <input type="text" name="name" class=" form-control" placeholder="">
				    </div>
				 </div>
				 <div class="form-group row col-md-6">
				    <label  class="col-sm-2 col-form-label">MOBILE NO.</label>
				    <div class="col-sm-10">
				      <input type="text" name="mobile_number" class=" form-control" placeholder="">
				    </div>
				 </div>
			</div>


			 <br>

            <div class="row">
	            <div class="form-group row col-md-6">
				    <label  class="col-sm-2 col-form-label">ADDRESS</label>
				    <div class="col-sm-10">
				      <input type="text" name="address" class=" form-control" placeholder="">
				    </div>
				 </div>
				 <div class="form-group row col-md-6">
				    <label  class="col-sm-2 col-form-label">RELATIONSHIP</label>
				    <div class="col-sm-10">
				      <input type="text" name="relationship" class=" form-control" placeholder="">
				    </div>
				 </div>
			</div>


	    	<br>
				<span class="row"> <span class="col-md-4">RESIDENCE</span> <span class="col-md-8"> <input type="text" name="residence" class=" form-control" placeholder=""></span></span></span>
                                                            </td>


                                                        </tr>
                                                        </tbody>
                                                    </table>

                                                    <div class="col-m-3 md-3">
                                                        <H3 class="mt-20">
                                                            ADMISSION CHECKLIST
                                                        </H3>
                                                    </div>
                                                    <table class="table table-bordered">
                                                        <thead>
                                                        <tr>
                                                            <th scope="col">TO BE COMPLETED BY CASUALTY NURSE</th>
                                                            <th scope="col">YES NO N/A</th>

                                                            <th scope="col">TO BE COMPLETED BY WARD NURSE</th>
                                                            <th scope="col">YES NO N/A</th>
                                                        </tr>
                                                        </thead>

                                                        <tbody>
                                                        <tr>
                                                            <td><span class="col-md-4">ADMISSION FORM</span></td>
                                                            <td> <input type="radio"  name="admission_form"> YES
                                                                <input type="radio"  name="admission_form"> NO
                                                                <input type="radio"  name="admission_form"> N/A
                                                            </td>
                                                            <td><span class="col-md-4">WARD ORIENTATION/ROUTINE/GOWNS</span></td>
                                                            <td> <input type="radio"  name="ward_orientation_routine_gowns"> YES
                                                                <input type="radio"  name="ward_orientation_routine_gowns"> NO
                                                                <input type="radio"  name="ward_orientation_routine_gowns"> N/A</td>

                                                        </tr>

                                                        <tr>
                                                            <td><span class="col-md-4">I.D BAND GIVEN</span></td>
                                                            <td> <input type="radio"  name="id_band_given"> YES
                                                                <input type="radio"  name="id_band_given"> NO
                                                                <input type="radio"  name="id_band_given"> N/A
                                                            </td>
                                                            <td><span class="col-md-4">ADMISSION BOOK ENTRY</span></td>
                                                            <td> <input type="radio"  name="admission_book_entry"> YES
                                                                <input type="radio"  name="admission_book_entry"> NO
                                                                <input type="radio"  name="admission_book_entry"> N/A</td>

                                                        </tr>

                                                        <tr>
                                                            <td><span class="col-md-4">URINALYSIS- RESULTS</span></td>
                                                            <td> <input type="radio"  name="urinalysis_results"> YES
                                                                <input type="radio"  name="urinalysis_results"> NO
                                                                <input type="radio"  name="urinalysis_results"> N/A
                                                            </td>
                                                            <td><span class="col-md-4">PATIENT/RELATIVES INFORMED OF VISITING HOURS</span></td>
                                                            <td> <input type="radio"  name="patient_relatives_informed_of_visiting_hours"> YES
                                                                <input type="radio"  name="patient_relatives_informed_of_visiting_hours"> NO
                                                                <input type="radio"  name="patient_relatives_informed_of_visiting_hours"> N/A</td>

                                                        </tr>

                                                        <tr>
                                                            <td><span class="col-md-4">DOCTOR INFORMED</span></td>
                                                            <td> <input type="radio"  name="doctor_informed"> YES
                                                                <input type="radio"  name="doctor_informed"> NO
                                                                <input type="radio"  name="doctor_informed"> N/A
                                                            </td>
                                                            <td><span class="col-md-4">NURSE CARE PLAN</span></td>
                                                            <td> <input type="radio"  name="nurse_care_plan"> YES
                                                                <input type="radio"  name="nurse_care_plan"> NO
                                                                <input type="radio"  name="nurse_care_plan"> N/A</td>

                                                        </tr>

                                                        <tr>
                                                            <td><span class="col-md-4">MEDICATION COMMENCED</span></td>
                                                            <td> <input type="radio"  name="medication_commenced"> YES
                                                                <input type="radio"  name="medication_commenced"> NO
                                                                <input type="radio"  name="medication_commenced"> N/A
                                                            </td>
                                                            <td><span class="col-md-4">VALUABLE FORMS FILLED</span></td>
                                                            <td> <input type="radio"  name="valuable_forms_filled"> YES
                                                                <input type="radio"  name="valuable_forms_filled"> NO
                                                                <input type="radio"  name="valuable_forms_filled"> N/A</td>

                                                        </tr>


                                                        <tr>
                                                            <td><span class="col-md-4">ALLERGY FORM FILLED</span><br>
                                                                <span class="col-md-4">KITCHEN INFORMED</span> </td>
                                                            <td> <input type="radio"  name="allergy_form_filled"> YES
                                                                <input type="radio"  name="allergy_form_filled"> NO
                                                                <input type="radio"  name="allergy_form_filled"> N/A
                                                                <br>
                                                                <input type="radio"  name="kitchen_informed"> YES
                                                                <input type="radio"  name="kitchen_informed"> NO
                                                                <input type="radio"  name="kitchen_informed"> N/A

                                                            </td>
                                                            <td><span class="col-md-4">CLIENT FEEDBACK FORM</span></td>
                                                            <td> <input type="radio"  name="client_feedback_form"> YES
                                                                <input type="radio"  name="client_feedback_form"> NO
                                                                <input type="radio"  name="client_feedback_form"> N/A
                                                            </td>

                                                        </tr>
                                                        <hr>
                                                        </tbody>
                                                    </table>

                                                    <table class="table table-bordered">
                                                        <tbody>
                                                        <tr>
                                                            <td>

                                                                <div class="row">
                                                                    <div class="form-group row col-md-6">
                                                                        <label  class="col-sm-2 col-form-label">PATIENT ADMITTED BY:</label>
                                                                        <div class="col-sm-10">
                                                                            <input type="text" name="patient_admitted_by" class=" form-control" placeholder="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row col-md-6">
                                                                        <label  class="col-sm-2 col-form-label">SIGNATURE:</label>
                                                                        <div class="col-sm-10">
                                                                            <input type="text" name="signature" class=" form-control" placeholder="">
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="form-group row col-md-6">
                                                                        <label  class="col-sm-2 col-form-label">RECEIVED BY:</label>
                                                                        <div class="col-sm-10">
                                                                            <input type="text" name="received_by" class=" form-control" placeholder="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row col-md-6">
                                                                        <label  class="col-sm-2 col-form-label">SIGNATURE:</label>
                                                                        <div class="col-sm-10">
                                                                            <input type="text" name="signature" class=" form-control" placeholder="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                    </tbody>
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