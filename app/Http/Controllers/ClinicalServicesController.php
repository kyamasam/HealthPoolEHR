<?php

namespace App\Http\Controllers;

use App\anaesthetic_record;
use App\blood_pressure_chart;
use App\blood_transfusion_observation;
use App\cancer_file;
use App\CancerManagement;
use App\clinical_services_allergyform;
use App\clinical_services_fallassessmentform;
use App\clinical_services_initial_assessment_form;
use App\clinical_services_pharmacy_withdrawal_form;
use App\clinical_services_physicalexaminationonadmission;
use App\clinicalservices_adultfeedingchart;
use App\clinicalservices_blood_donation_requestform;
use App\clinicalservices_casedeathsummary;
use App\clinicalservices_consultationrequestform;
use App\clinicalservices_continuation_form;
use App\clinicalservices_ecgform;
use App\clinicalservices_eeg_report;
use App\clinicalservices_inpatientnutritioncareregister;
use App\clinicalservices_labrequestform;
use App\clinicalservices_nursing;
use App\clinicalservices_nursingcareform;
use App\clinicalservices_patient_property;
use App\clinicalservices_prescriptionform;
use App\clinicalservices_presuresorescorecard;
use App\clinicalservices_radiology_report_sheet;
use App\clinicalservices_treatmentsheet;
use App\clinicalservices_xrayrequestform;
use App\consent_form;
use App\diabetic_charts;
use App\fluid_in_out_chart;
use App\four_hourly_temp_chart;
use App\icu_observation_chart;
use App\intensive_care_unit_respiratory_sheet;
use App\ipom_chart;
use App\patient_assesment;
use App\patient_file_accident_and_emergency;
use App\patient_file_dental_examination_form;
use App\patient_file_diet_requisition_sheet;
use App\patient_file_diet_sheets;
use App\patient_file_ear_nose_throat_examination_form;
use App\patient_file_infant_record;
use App\patient_file_initial_nursing_assessment;
use App\patient_file_maternity_records;
use App\patient_file_nutrition_care_process_form;
use App\patient_file_occupational_therapy_initial_assessment_form;
use App\patient_file_orthopaedic_examination_form;
use App\patient_file_request_for_mortem_examination;
use App\patient_file_request_for_palliative_care;
use App\preoperative_checklist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Maatwebsite\Excel;


class ClinicalServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }



    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function clinicalservices_inpatient_home()
    {
        return view('departments.clinical_services.clinicalservices_inpatient');
    }

    public function clinicalservices_ms_home()
    {
        return view('departments.clinical_services.clinicalservices_inpatient_ms');
    }

    public function clinicalservices_ss_home()
    {
        return view('departments.clinical_services.clinicalservices_inpatient_ss');
    }

    public function clinicalservices_ats_home()
    {
        return view('departments.clinical_services.clinicalservices_inpatient_at');
    }

    public function clinicalservices_ccs_home()
    {
        return view('departments.clinical_services.clinicalservices_inpatient_cc');
    }

    public function clinicalservices_maternity_home()
    {
        return view('departments.clinical_services.clinicalservices_inpatient_maternity');
    }

    public function clinicalservices_maternity_lw()
    {
        return view('departments.clinical_services.clinicalservices_inpatient_maternity_lw');
    }

    public function clinicalservices_ps_home()
    {
        return view('departments.clinical_services.clinicalservices_inpatient_ps');
    }

    public function clinicalservices_ra_or_rr()
    {
        return view('departments.clinical_services.clinicalservices_ra_or_rr');
    }

    public function clinical_services_cancer_management()
    {
        $cancer_records = DB::table('cancer_managements')->get();
        return view('departments.clinical_services.cancer_record_management',[
            'cancer_records'=>$cancer_records,
        ]);
    }

    public function clinical_services_cancer_management_post(){
        $new_cancer_record = new CancerManagement(Input::all());
        $new_cancer_record->save();
        return redirect(route('cancer_records_management'));
    }


    //patientfile fuction
    public function initial_assessment_form()
    {
        $initial_assessment_form_results =DB::table('clinical_services_initial_assessment_forms')->latest()->get();
        return view('departments.clinical_services.inpatient.patient_file.initial_assessment_form',['initial_assessment_form_results' => $initial_assessment_form_results]);


    }
    public function initial_assessment_form_post()
    {

        $initial_assessment_form = new clinical_services_initial_assessment_form(Input::all());
        $initial_assessment_form->save();
        return redirect(route('initial_assessment_form'));

    }
    public function allergy_form()
    {
        $allergyform_results = DB::table('clinical_services_allergyforms')->latest() ->get();
        return view('departments.clinical_services.inpatient.patient_file.allergy_form',['allergyform_results' => $allergyform_results]);

    }
    public function fallassessmentform()
    {
        $fallassessmentform_results= DB::table('clinical_services_fallassessmentforms')->get();
        return view('departments.clinical_services.inpatient.patient_file.fall_assessment_form',[
            'fallassessmentform_results'=>$fallassessmentform_results
        ]);

    }
    public function physicalexaminationonadmission()
    {
        $physicalexaminationonadmission_results =DB::table('clinical_services_physicalexaminationonadmissions')->latest() ->get();
        return view('departments.clinical_services.inpatient.patient_file.physical_examination_on_admission',['physicalexaminationonadmission_results' => $physicalexaminationonadmission_results]);
    }
    public function nursingcareform()
    {

        $nursing_care_form= DB::table('clinicalservices_nursingcareforms')->get();
        return view('departments.clinical_services.inpatient.patient_file.nursing_care_form',[
            'nursing_care_form'=>$nursing_care_form
        ]);

    }
    public function morphine()
    {
        return view('departments.clinical_services.inpatient.patient_file.morphine');
    }
    public function nursing()
    {
        return view('departments.clinical_services.inpatient.patient_file.nursing');
    }
    public function laboratoryrequestform()
    {
        $laboratoryrequestform_results = DB::table('clinicalservices_labrequestforms')->latest() ->get();
        return view('departments.clinical_services.inpatient.patient_file.laboratoryrequestform',['laboratoryrequestform_results' => $laboratoryrequestform_results]);

    }

    public function accident_and_emergency()
{
    $accident_and_emergency_results = DB::table('patient_file_accident_and_emergencies')->latest()->get();
    return view('departments.clinical_services.inpatient.patient_file.accident_and_emergency',['accident_and_emergency_results' => $accident_and_emergency_results]);

}
    public function accident_and_emergency_post()
    {
        $accidents_and_emergency=new patient_file_accident_and_emergency(Input::all());
        $accidents_and_emergency->save();
        return redirect(route('accident_and_emergency'));
    }
    public function xray_request_form()
    {
        $xray_request_form_results = DB::table('clinicalservices_xrayrequestforms')->latest()->get();
        return view('departments.clinical_services.inpatient.patient_file.xray_request_form',['xray_request_form_results' => $xray_request_form_results]);


    }
    public function xray_request_form_post()
    {
        $xray_request=new clinicalservices_xrayrequestform(Input::all());
        $xray_request->save();
        return redirect(route('xray_request_form'));
    }
    public function admission_form()
    {
        return view('departments.clinical_services.inpatient.patient_file.admission_form');
    }
    public function anaesthetic_records()
    {
        $anaesthetic_records= DB::table('anaesthetic_records')->get();
        return view('departments.clinical_services.inpatient.patient_file.anaesthetic_records',[
            'anaesthetic_records'=>$anaesthetic_records
        ]);
    }
    public function anaesthetic_records_post()
    {
        $anaesthetic_records = new anaesthetic_record(Input::all());
        $anaesthetic_records->save();
        return redirect(route('anaesthetic_records'));
    }
    public function fluid_intake_output_chart()
    {
        return view('departments.clinical_services.inpatient.patient_file.fluid_intake_output_chart');
    }
    public function consultation_request_form()
    {
        $consultation_request_form_results = DB::table('clinicalservices_consultationrequestforms')->latest()->get();
        return view('departments.clinical_services.inpatient.patient_file.consultation_request_form',['consultation_request_form_results' => $consultation_request_form_results]);
    }
    public function consultation_request_form_post()
    {
        $consultation_request_form = new clinicalservices_consultationrequestform(Input::all());
        $consultation_request_form->save();
        return redirect(route('consultation_request_form'));
    }
    public function consent_form()
    {
        $consent_forms= DB::table('consent_forms')->get();
        return view('departments.clinical_services.inpatient.patient_file.consent_form',[
            'consent_forms'=>$consent_forms
        ]);
    }
    public function consent_form_post()
    {
        $consent_form_post = new consent_form(Input::all());
        $consent_form_post->save();
        return redirect(route('consent_form'));
    }
    public function foetal_kit_chart()
    {
        return view('departments.clinical_services.inpatient.patient_file.foetal_kit_chart');
    }
    public function anc_card()
    {
        return view('departments.clinical_services.inpatient.patient_file.anc_card');
    }
    public function audiogram()
    {
        return view('departments.clinical_services.inpatient.patient_file.audiogram');
    }
    public function morphine_administration_chart(){
        return view('departments.clinical_services.inpatient.patient_file.morphine_administration_chart');
    }
    public function blood_transfusion_observation_form()
    {
        return view('departments.clinical_services.inpatient.patient_file.blood_transfusion_observation_form');
    }
    public function blood_transfusion_observation_form_post()
    {
        $blood_transfusion = new blood_transfusion_observation(Input::all());
        $blood_transfusion->save();
        return redirect(route('blood_transfusion_observation_form'));
    }

    public function continuation_form()
    {
        $continuation_sheets_results =DB::table('clinicalservices_continuation_forms')->latest()->get();
        return view('departments.clinical_services.inpatient.patient_file.continuation_sheets',['continuation_sheets_results' => $continuation_sheets_results]);

    }
    public function continuation_form_post()
    {
        $continuation_form = new clinicalservices_continuation_form(Input::all());
        $continuation_form->save();
        return redirect(route('continuation_form'));
    }
//    public function ()
//    {
//        $_results = DB::table('clinical_services_')->get();
//        return view('department.clinical_services.patient_file',['_results' => $_results]);
//    }

    public function fluid_in_out_chart()
    {
        $fluid_in_out_charts_table= DB::table('fluid_in_out_charts')->get();
        return view('departments.clinical_services.inpatient.patient_file.fluid_intake_output_chart',[
            'fluid_in_out_charts_table'=>$fluid_in_out_charts_table
        ]);
    }
    public function fluid_in_out_chart_post()
    {
        $fluid_in_out_charts_table = new fluid_in_out_chart(Input::all());
        $fluid_in_out_charts_table->save();
        return redirect(route('fluid_in_out_chart'));
    }
    public function diabetic_charts()
    {
        $diabetic_charts= DB::table('diabetic_charts')->get();
        return view('departments.clinical_services.inpatient.patient_file.diabetic_charts',[
            'diabetic_charts'=>$diabetic_charts
        ]);
    }
    public function diabetic_charts_post()
    {
        $diabetic_charts = new diabetic_charts(Input::all());
        $diabetic_charts->save();
        return redirect(route('diabetic_charts'));
    }
    public function ecg_form()
    {
        $eeg_report_results = DB::table('clinicalservices_ecgforms')->latest()->get();
        return view('departments.clinical_services.inpatient.patient_file.ecg_form',['eeg_report_results' => $eeg_report_results]);

    }
    public function ecg_form_post()
    {
        $ecg_form = new clinicalservices_ecgform(Input::all());
        $ecg_form->save();
        return redirect(route('ecg_form'));

    }
    public function eeg_report()
    {
        $eeg_report_results = DB::table('clinicalservices_eeg_reports')->latest()->get();
        return view('departments.clinical_services.inpatient.patient_file.eeg_report',['eeg_report_results' => $eeg_report_results]);

    }
    public function eeg_report_post()
    {
        $eeg_report = new clinicalservices_eeg_report(Input::all());
        $eeg_report->save();
        return redirect(route('eeg_report'));
    }
    public function general_outpatient_card()
    {
        return view('departments.clinical_services.inpatient.patient_file.general_outpatient_card');
    }
    public function head_injury_and_craniotomy_chart_form()
    {
        return view('departments.clinical_services.inpatient.patient_file.head_injury_and_craniotomy_chart');
    }
    public function icu_observation_chart()
    {
        $icu_observation_chart= DB::table('icu_observation_charts')->get();
        return view('departments.clinical_services.inpatient.patient_file.icu_observation_chart',[
            'icu_observation_chart'=>$icu_observation_chart
        ]);
    }
    public function icu_observation_chart_post()
    {
        $icu_observation_chart = new icu_observation_chart(Input::all());
        $icu_observation_chart->save();
        return redirect(route('icu_observation_chart'));
    }
    public function initial_nursing_assessment_form()
    {
        $initial_nursing_assessment_form_results = DB::table('patient_file_initial_nursing_assessments')->latest()->get();
        return view('departments.clinical_services.inpatient.patient_file.initial_nursing_assessment_form',['initial_nursing_assessment_form_results' => $initial_nursing_assessment_form_results]);

    }
    public function initial_nursing_assessment_form_post()
    {
        $initial_nursing_assessment = new patient_file_initial_nursing_assessment(Input::all());
        $initial_nursing_assessment->save();
        return redirect(route('initial_nursing_assessment_form'));

    }
    public function intensive_care_unit_respiratory_sheet()
    {
        $intensive_care_unit_respiratory_sheet= DB::table('intensive_care_unit_respiratory_sheets')->get();
        return view('departments.clinical_services.inpatient.patient_file.icu_respiratory_sheet',[
            'intensive_care_unit_respiratory_sheet'=>$intensive_care_unit_respiratory_sheet
        ]);
    }
    public function intensive_care_unit_respiratory_sheet_post()
    {
        $intensive_care_unit_respiratory_sheet=new intensive_care_unit_respiratory_sheet(Input::all());
        $intensive_care_unit_respiratory_sheet->save();
        return redirect(route('intensive_care_unit_respiratory_sheet'));
    }
    public function ipom_chart()
    {
        $ipom_charts= DB::table('ipom_charts')->get();
        return view('departments/clinical_services/inpatient/patient_file/immediate_post_operative_monitoring_chart',[
            'ipom_charts'=>$ipom_charts
        ]);
    }
    public function ipom_chart_post()
    {
        $ipom_charts = new ipom_chart(Input::all());
        $ipom_charts->save();
        return redirect(route('ipom_chart'));
    }
    public function laboratory_report_sheet_patient_file()
    {
        $laboratoryrequestform_results = DB::table('clinicalservices_labrequestforms')->latest() ->get();
        return view('departments.clinical_services.inpatient.patient_file.laboratory_report_sheet',['laboratoryrequestform_results' => $laboratoryrequestform_results]);

    }
    public function oncology_cbe_results_examination_form()
    {
        return view('departments.clinical_services.inpatient.patient_file.oncology_cbe_results_examination_form');
    }
    public function operation_notes()
    {
        return view('departments.clinical_services.inpatient.patient_file.operation_notes');
    }
    public function partograph_form()
    {
        return view('departments.clinical_services.inpatient.patient_file.partograph_form');
    }
    public function patient_assessment_and_progress_card()
    {
        $patient_assessment_and_progress_card= DB::table('patient_assesments')->get();
        return view('departments.clinical_services.inpatient.patient_file.patient_assessment_and_progress_card',[
            'patient_assessment_and_progress_card'=>$patient_assessment_and_progress_card
        ]);
    }
    public function patient_assessment_and_progress_card_post()
    {
        $patient_assessment_and_progress_card = new patient_assesment(Input::all());
        $patient_assessment_and_progress_card->save();
        return redirect(route('patient_assessment_and_progress_card'));
    }
    public function patient_property_declaration_form()
    {
        $patient_property_declaration_form_results = DB::table('clinicalservices_patient_properties')->latest()->get();
        return view('departments.clinical_services.inpatient.patient_file.patient_property_declaration_form',['patient_property_declaration_form_results' => $patient_property_declaration_form_results]);

    }
    public function patient_property_declaration_form_post()
    {
        $patient_property_declaration_form = new clinicalservices_patient_property(Input::all());
        $patient_property_declaration_form->save();
        return redirect(route('patient_property_declaration_form'));

    }
    public function pending_patient_file()
    {
        return view('departments.clinical_services.inpatient.patient_file.pending_patient_file');
    }
    public function physiotherapy_form()
    {
        return view('departments.clinical_services.inpatient.patient_file.physiotherapy_form');
    }
    public function preoperative_checklist()
    {
        $preoperative_checklist= DB::table('preoperative_checklists')->get();
        return view('departments.clinical_services.inpatient.patient_file.preoperative_checklist',[
            'preoperative_checklist'=>$preoperative_checklist
        ]);
    }
    public function preoperative_checklist_post()
    {
        $preoperative_checklist = new preoperative_checklist(Input::all());
        $preoperative_checklist->save();
        return redirect(route('preoperative_checklist'));
    }
    public function radio_therapy_treatment_form()
    {
        return view('departments.clinical_services.inpatient.patient_file.radio_therapy_treatment_form');
    }
    public function radiology_report_sheet_patient_file()
    {
        $radiology_report_sheet_results = DB::table('clinicalservices_radiology_report_sheets')->latest()->get();
        return view('departments.clinical_services.inpatient.patient_file.radiology_report_sheet',['radiology_report_sheet_results' => $radiology_report_sheet_results]);

    }
    public function radiology_report_sheet_patient_file_post()
    {
        $radiology_report_sheet = new clinicalservices_radiology_report_sheet(Input::all());
        $radiology_report_sheet->save();
        return redirect(route('radiology_report_sheet_patient_file'));
    }
    public function secg_request_form()
    {
        return view('departments.clinical_services.inpatient.patient_file.secg_request_form');
    }
    public function treatment_sheet()
    {
        $treatment_sheet_results = DB::table('clinicalservices_treatmentsheets')->latest()->get();
        return view('departments.clinical_services.inpatient.patient_file.treatment_sheet',['treatment_sheet_results' => $treatment_sheet_results]);
    }
    public function treatment_sheet_post(){
        $treatment_sheet = new clinicalservices_treatmentsheet(Input::all());
        $treatment_sheet->save();
        return redirect(route('treatment_sheet'));
    }
    public function opthalmic_general_examination_form()
    {
        return view('departments.clinical_services.inpatient.patient_file.opthalmic_general_examination_form');
    }
    public function blood_donation_request_form()
    {
        $blood_donation_request_form_results =DB::table('clinicalservices_blood_donation_requestforms')->latest()->get();
        return view('departments.clinical_services.inpatient.patient_file.blood_donation_request_form',['blood_donation_request_form_results' => $blood_donation_request_form_results]);

    }
    public function blood_donation_request_form_post()
    {
        $blood_donation_request_form = new clinicalservices_blood_donation_requestform(Input::all());
        $blood_donation_request_form->save();
        return redirect(route('blood_donation_request_form'));

    }
    public function pharmacy_withdrawal_form()
    {
        $pharmacy_withdrawal_form_results =DB::table('clinical_services_pharmacy_withdrawal_forms')->latest()->get();
        return view('departments.clinical_services.inpatient.patient_file.pharmacy_withdrawal_form',['pharmacy_withdrawal_form_results' => $pharmacy_withdrawal_form_results]);

    }
    public function pharmacy_withdrawal_form_post()
    {
        $pharmacy_withdrawal_form = new clinical_services_pharmacy_withdrawal_form(Input::all());
        $pharmacy_withdrawal_form->save();
        return redirect(route('pharmacy_withdrawal_form'));

    }

    public function nursing_notes()
    {
        $nursing_notes_results =DB::table('clinicalservices_nursings')->latest()->get();
        return view('departments.clinical_services.inpatient.patient_file.nursing_notes',['nursing_notes_results' => $nursing_notes_results]);

    }
    public function nursing_notes_post()
    {
        $nursing_notes = new clinicalservices_nursing(Input::all());
        $nursing_notes->save();
        return redirect(route('nursing_notes'));
    }
    public function pressure_score_card()
    {
        $pressure_score_card_results= DB::table('clinicalservices_presuresorescorecards')->get();
        return view('departments.clinical_services.inpatient.patient_file.pressurescoresrecordcard',[
            'pressure_score_card_results'=>$pressure_score_card_results
        ]);
    }
    public function pressure_score_card_post ()
    {
        $pressure_score_card = new clinicalservices_presuresorescorecard(Input::all());
        $pressure_score_card->save();
        return redirect(route('pressure_score_card'));
    }
    public function pulse_chart()
    {
        return view('departments.clinical_services.inpatient.patient_file.pulse_chart');
    }



    //patient file posts
    public function allergyform_post()
    {
        $allergyform = new clinical_services_allergyform(Input::all());
        $allergyform->save();
        return redirect(route('allergy_form'));
    }
    public function fallassessmentform_post()
    {
        $fallassessmentform = new clinical_services_fallassessmentform(Input::all());
        $fallassessmentform->save();
        return redirect(route('fallassessmentform'));
    }
    public function physicalexaminationonadmission_post()
    {
        $physicalexaminationonadmission = new clinical_services_physicalexaminationonadmission(Input::all());
        $physicalexaminationonadmission->save();
        return redirect(route('physicalexaminationonadmission'));
    }
    public function nursingcareform_post()
    {
        $nursingcareform = new clinicalservices_nursingcareform(Input::all());
        $nursingcareform->save();
        return redirect(route('nursingcareform'));
    }
    public function morphine_post()
    {
        $morphine = new clinicalservices_morhine(Input::all());
        $morphine->save();
        return redirect(route('morphine'));
    }
    public function nursing_post()
    {
        $nursing = new clinicalservices_nursing(Input::all());
        $nursing->save();
        return redirect(route('nursingforms'));
    }
    public function laboratoryrequestform_post()
    {
        $laboratoryrequestform = new clinicalservices_labrequestform(Input::all());
        $laboratoryrequestform->save();
        return redirect(route('laboratoryrequestform'));
    }
    public function prescriptionform_post()
    {
        $prescriptionform = new clinicalservices_prescriptionform(Input::all());
        $prescriptionform->save();
        return redirect(route('prescriptionform'));
    }
    public function inpatient_nutrition_care_register_post()
    {
        $inpatient_nutrition_care_register = new clinicalservices_inpatientnutritioncareregister(Input::all());
        $inpatient_nutrition_care_register->save();
        return redirect(route('inpatient_nutrition_care_register'));
    }

    public function adult_feeding_post()
    {
        $adult = new clinicalservices_adultfeedingchart(Input::all());
        $adult->save();
        return redirect(route('adult_feeding'));
    }



    public function medical_icu_icu_hdu()
    {
        return view('departments.clinical_services.inpatient.medical_services.icu_hdu.medical_icu_hdu');
    }

    public function medical_medical_ward()
    {
        return view('departments.clinical_services.inpatient.medical_services.medical_ward.medical_medical_ward');
    }


    public function maternity_sheet()
    {
        return view('departments/clinical_services/inpatient/paediatric/maternity_sheet');
    }



    //patient file
    public function patient_file_home()
    {
        return view('departments/clinical_services/inpatient/patient_file/patient_file');
    }
























    public function canregdata()
    {
        $cancer_files_results= DB::table('cancer_files')->latest()->get();
        return view('departments.clinical_services.canreg.cancer_file_upload',[
            'cancer_files_results'=>$cancer_files_results
        ]);
    }

    public function canregimport()
    {
        return view('departments.clinical_services.canreg.canregimport');
    }
    public function canregimport_post()
    {
        Excel\Excel::load(Input::file("health_facility_file"),function($reader){
            $reader->each(function($sheet){
                cancer_file::firstOrCreate($sheet->toArray());
            });
        });
    }
    public function canregdata_post(Request $request)
    {

        $uploadedFile = $request->file('health_facility_file');
        //$path=$request->file('health_facility_file')->store('uploads/canreg');

        if ($uploadedFile->isValid()) {
            $fileName=time().'.'.$uploadedFile->getClientOriginalExtension();
            $path = $uploadedFile->storeAs('canreg', $fileName, 'uploads');
            echo $path;
        }

        $cancer_file = new cancer_file(
            [
                'date'=>request('date'),
                'health_facility_name'=>request('health_facility_name'),
                'health_facility_location'=>request('health_facility_location'),
                'health_facility_file'=>$fileName,
            ]
        );
        $cancer_file->save();

        return redirect(route('canregdata'));


    }



    public function clinicalservices_outpatient_home()
    {
        return view('departments.clinical_services.clinicalservices_outpatient');
    }
    public function clinicalservices_outpatient_doctorsoffice()
    {
        return view('departments.clinical_services.clinicalservices_oupatient_doctorsoffice');
    }
    public function clinicalservices_outpatient_emergencydpt()
    {
        return view('departments.clinical_services.clinicalservices_oupatient_emergencydpt');
    }
    public function clinicalservices_outpatient_orthoepedicdpt()
    {
        return view('departments.clinical_services.inpatient.patient_file.patient_file');
    }
    public function clinicalservices_outpatient_nutritiondpt()
    {
        return view('departments.clinical_services.inpatient.patient_file.patient_file');
    }
    public function clinicalservices_outpatient_occupationaldpt()
    {
        return view('departments.clinical_services.inpatient.patient_file.patient_file');
    }
    public function clinicalservices_outpatient_physiotherapy()
    {
        return view('departments.clinical_services.inpatient.patient_file.patient_file');
    }
    public function clinicalservices_outpatient_dental()
{
    return view('departments.clinical_services.inpatient.patient_file.patient_file');
}
    public function wellbabyclinic()
    {
        return view('departments.clinical_services.inpatient.patient_file.patient_file');
    }
    public function earnosethroat()
    {
        return view('departments.clinical_services.inpatient.patient_file.patient_file');
    }
    public function meadicaloutpatient()
    {
        return view('departments.clinical_services.inpatient.patient_file.patient_file');
    }
    public function gynecology()
    {
        return view('departments.clinical_services.inpatient.patient_file.patient_file');
    }
    public function pediatricoutpatient()
    {
        return view('departments.clinical_services.inpatient.patient_file.patient_file');
    }
    public function surgicaloutpatient()
    {
        return view('departments.clinical_services.inpatient.patient_file.patient_file');
    }
    public function opthalmicclinic()
    {
        return view('departments.clinical_services.inpatient.patient_file.patient_file');
    }
    public function tbclinic()
    {
        return view('departments.clinical_services.inpatient.patient_file.patient_file');
    }
    public function clinicalservices_outpatient_outpatientclinic()
{
    return view('departments.clinical_services.clinicalservices_oupatient_outpatientclinic');
}
    public function doctorsoffice_administration()
    {
        return view('departments.clinical_services.doctorsoffice_administration');
    }
    public function doctorsoffice_clinical()
    {
        return view('departments.clinical_services.doctorsoffice_clinical');
    }
    public function doctorsoffice_billing()
    {
        return view('departments.clinical_services.doctorsoffice_billing');
    }
    public function doctorsoffice_patientprofile()
    {
        return view('departments.clinical_services.doctorsoffice_patientprofile');
    }
    public function doctorsoffice_report()
    {
        return view('departments.clinical_services.doctorsoffice_report');
    }
    public function doctors_administration_registration()
    {
        return view('departments.clinical_services.administration_registration');
    }
    public function doctors_administration_scheduling()
    {
        return view('departments.clinical_services.administration_scheduling');
    }
    public function doctors_administration_appointments()
    {
        return view('departments.clinical_services.administration_appointments');
    }
    public function doctors_administration_attendance()
    {
        return view('departments.clinical_services.administration_attendances');
    }
    public function doctors_administration_alerts()
    {
        return view('departments.clinical_services.administration_alerts');
    }
    public function doctors_administration_reminders()
    {
        return view('departments.clinical_services.administration_reminders');
    }
    public function clinical_consultationform()
    {
        return view('departments.clinical_services.clinical_consultationform');
    }
    public function clinical_consultationrequestform()
    {
        return view('departments.clinical_services.clinical_consultationrequestform');
    }
    public function prescriptionform()
    {
        $prescriptionform_results = DB::table('clinicalservices_prescriptionforms')->latest() ->get();
        return view('departments.clinical_services.inpatient.patient_file.prescriptionform',['prescriptionform_results' => $prescriptionform_results]);


    }
    public function clinical_radiologurequest()
    {
        return view('departments.clinical_services.clinical_radiologurequest');
    }
    public function clinical_radiologyreportsheet()
    {
        return view('departments.clinical_services.clinical_radiologyreport');
    }
    public function clinical_labrequest()
    {
        return view('departments.clinical_services.clinical_labrequest');
    }
    public function clinical_labreport()
    {
        return view('departments.clinical_services.clinical_labreport');
    }
    public function doctorsoffice_billling()
    {
        return view('departments.clinical_services.doctorsoffice_billling');
    }
    public function doctorsoffice_invoicing()
    {
        return view('departments.clinical_services.doctorsoffice_invoicing');
    }
    public function triage()
    {
        return view('departments.clinical_services.inpatient.patient_file.patient_file');
    }
    public function immunization_room()
    {
        return view('departments.clinical_services.inpatient.patient_file.patient_file');
    }
    public function injection_room()
    {
        return view('departments.clinical_services.inpatient.patient_file.patient_file');
    }
    public function minor_theatre()
    {
        return view('departments.clinical_services.inpatient.patient_file.patient_file');
    }

    public function clinicalservices_home()
    {
        return view('departments.clinical_services.clinicalservices');
    }



    public function ent_services()
    {
        return view('departments.clinical_services.inpatient.ent_services.ent_services');
    }public function maternity_home()
    {
    return view('departments.clinical_services.inpatient.maternity_services.maternity');
    }
    public function medical_home()
    {
    return view('departments.clinical_services.inpatient.medical_services.medical');
    }
    public function nutrition_home()
    {
    return view('departments.clinical_services.inpatient.nutrition.nutrition');
    }
    public function oncology()
    {
    return view('departments.clinical_services.inpatient.oncology.oncology');
    }
    public function ophthalmic()
    {
    return view('departments.clinical_services.inpatient.ophthalmic.ophthalmic');
    }
    public function ot_home()
    {
    return view('departments.clinical_services.inpatient.ot.ot');
    }
    public function paediatric_home()
    {
    return view('departments.clinical_services.inpatient.paediatric.paediatric');
    }
    public function physiotherapy_home()
    {
    return view('departments.clinical_services.inpatient.physiotherapy.physiotherapy');
    }
    public function renal()
    {
    return view('departments.clinical_services.inpatient.renal.renal');
    }
    public function surgical_home()
    {
        return view('departments.clinical_services.inpatient.surgical.surgical');
    }
    public function canreg_analytics()
    {
        return view('departments.clinical_services.canreg_imports.canreg_analytics');
    }
    public function theater_form()
    {
        return view('departments.clinical_services.inpatient.surgical.anaesthesia.theater_form');
    }
//    public function consent_form(){
//        return view('departments.clinical_services.inpatient.surgical.anaesthesia.consent_form');
//    }
    public function operative_checklist(){
        return view('departments.clinical_services.inpatient.surgical.anaesthesia.operative_checklist');
    }








    public function consultant_clinic(){
        return view('departments.clinical_services.outpatient.consultant_clinic_doctors_office.consultant_clinic');
    }public function general_outpatient(){
    return view('departments.clinical_services.outpatient.general_outpatient.general_outpatient');
    }
    public function outpatient_clinics(){
    return view('departments.clinical_services.outpatient.outpatient_clinics.outpatient_clinics');
    }
    public function adult_feeding(){
    return view('departments.clinical_services.inpatient.nutrition.adult_feeding_chart');
    }
    public function inpatient_nutrition(){
    return view('departments.clinical_services.inpatient.nutrition.inpatient_nutrition_care_register');
    }
    public function moh301(){
    return view('departments.clinical_services.inpatient.nutrition.moh301');}
    public function moh303(){
        return view('departments.clinical_services.inpatient.nutrition.moh301');
    }
    public function moh717(){
    return view('departments.clinical_services.inpatient.nutrition.moh717');
    }
//    public function prescription_form(){
//    return view('departments.clinical_services.inpatient.nutrition.prescription_form');
//    }

    public function morning_and_evening_temp_chart()
    {
        return view('departments.clinical_services.inpatient.patient_file.morning_and_evening_temp_chart');
    }
    public function four_hourly_temp_chart()
    {
        $four_hourly_temp_charts= DB::table('four_hourly_temp_charts')->get();
        return view('departments.clinical_services.inpatient.patient_file.four_hourly_temp_chart',[
            'four_hourly_temp_charts'=>$four_hourly_temp_charts
        ]);
    }

     public function four_hourly_temp_chart_post()
        {
            $four_hourly_temp_chart_var = new four_hourly_temp_chart(Input::all());
            $four_hourly_temp_chart_var->save();
            return redirect(route('four_hourly_temp_chart'));

        }


    public function blood_pressure_chart()
    {
        $blood_pressure_chart= DB::table('blood_pressure_charts')->get();
        return view('departments.clinical_services.inpatient.patient_file.blood_pressure_chart',[
            'blood_pressure_chart'=>$blood_pressure_chart
        ]);

    }
    public function blood_pressure_chart_post()
    {
        $blood_pressure_chart = new blood_pressure_chart(Input::all());
        $blood_pressure_chart->save();
        return redirect(route('blood_pressure_chart'));
    }
    public function patient_charge_sheet_home()
    {
        return view('departments.clinical_services.inpatient.patient_charge_sheet.patient_charge_sheet');
    }
    public function patient_charge_maternity_records()
    {
        $maternity_records = DB::table('patient_file_maternity_records') ->latest() ->get();
        return view('departments.clinical_services.inpatient.patient_file.maternity_record',[
            'maternity_records'=>$maternity_records
        ]);
    }
    public function patient_file_maternity_record_post()
    {
        $banking = new patient_file_maternity_records(Input::all());
        $banking->save();
        return redirect(route('maternity_records'));
    }
    public function patient_file_infant_record_post()
    {
        $banking = new patient_file_infant_record(Input::all());
        $banking->save();
        return redirect(route('infant_record'));
    }
    public function infant_record()
    {
        $infant_record_results = DB::table('patient_file_infant_records')->get();
        return view('departments.clinical_services.inpatient.patient_file.infant_record',[
            'infant_record_results'=>$infant_record_results
        ]);
    }
    public function patient_file_diet_requisition_post()
    {
        $banking = new patient_file_diet_requisition_sheet(Input::all());
        $banking->save();
        return redirect(route('diet_requisition_sheet'));
    }
    public function diet_requisition_sheet()
    {
        $diet_requisition_sheet_results = DB::table('patient_file_diet_requisition_sheets')->get();
        return view('departments.clinical_services.inpatient.patient_file.diet_requisition_sheet',[
            'diet_requisition_sheet_results'=>$diet_requisition_sheet_results
        ]);
    }
    public function patient_file_diet_sheet_post()
    {
        $banking = new patient_file_diet_sheets(Input::all());
        $banking->save();
        return redirect(route('diet_sheet'));
    }
    public function diet_sheet()
    {
        $diet_sheet_results = DB::table('patient_file_diet_sheets')->get();
        return view('departments.clinical_services.inpatient.patient_file.diet_sheet',[
            'diet_sheet_results'=>$diet_sheet_results
        ]);
    }
    public function patient_file_nutrition_care_post()
    {
        $banking = new patient_file_nutrition_care_process_form(Input::all());
        $banking->save();
        return redirect(route('nutrition_care_process_form'));
    }
    public function nutrition_care_process_form()
    {
        $nutrition_care_process_form_results = DB::table('patient_file_nutrition_care_process_forms')->get();
        return view('departments.clinical_services.inpatient.patient_file.nutrition_care_process_form',[
            'nutrition_care_process_form_results'=>$nutrition_care_process_form_results
        ]);
    }
    public function patient_file_occupational_therapy_initial_assessment__post()
    {
        $banking = new patient_file_occupational_therapy_initial_assessment_form(Input::all());
        $banking->save();
        return redirect(route('occupational_therapy_initial_assessment_form'));
    }
    public function occupational_therapy_initial_assessment_form()
    {
        $occupational_therapy_initial_assessment_form_results = DB::table('patient_file_occupational_therapy_initial_assessment_forms')->get();
        return view('departments.clinical_services.inpatient.patient_file.occupational_therapy_initial_assessment_form',[
            'occupational_therapy_initial_assessment_form_results'=>$occupational_therapy_initial_assessment_form_results
        ]);
    }
    public function orthopaedic_examination_form_post()
    {
        $banking = new patient_file_orthopaedic_examination_form(Input::all());
        $banking->save();
        return redirect(route('orthopaedic_examination_form'));
    }
    public function orthopaedic_examination_form()
    {
        return view('departments.clinical_services.inpatient.patient_file.orthopaedic_examination_form');
    }
    public function ear_nose_throat_examination_form_post()
    {
        $banking = new patient_file_ear_nose_throat_examination_form(Input::all());
        $banking->save();
        return redirect(route('ear_nose_throat_examination_form'));
    }
    public function ear_nose_throat_examination_form()
    {
        $ear_nose_throat_examination_form_results = DB::table('patient_file_ear_nose_throat_examination_forms')->get();
        return view('departments.clinical_services.inpatient.patient_file.ear_nose_throat_examination_form',[
            'ear_nose_throat_examination_form_results'=>$ear_nose_throat_examination_form_results
        ]);
    }
    public function dental_examination_form_post()
    {
        $banking = new patient_file_dental_examination_form(Input::all());
        $banking->save();
        return redirect(route('dental_examination_form'));
    }
    public function dental_examination_form()
    {
        $dental_examination_form_results = DB::table('patient_file_dental_examination_forms')->get();
        return view('departments.clinical_services.inpatient.patient_file.dental_examination_form',[
            'dental_examination_form_results'=>$dental_examination_form_results
        ]);
    }
    public function case_death()
    {
        $case_death_results = DB::table('clinicalservices_casedeathsummaries')->get();
        return view('departments.clinical_services.inpatient.patient_file.case_death_summary',[
            'case_death_results'=>$case_death_results
        ]);
    }
    public function case_death_post()
    {
        $banking = new clinicalservices_casedeathsummary(Input::all());
        $banking->save();
        return redirect(route('case_death'));
    }
    public function request_for_palliative_care_post()
    {
        $banking = new patient_file_request_for_palliative_care(Input::all());
        $banking->save();
        return redirect(route('request_for_palliative_care'));
    }
    public function request_for_palliative_care()
    {
        $request_for_palliative_careh_results = DB::table('patient_file_request_for_palliative_cares')->get();
        return view('departments.clinical_services.inpatient.patient_file.request_for_palliative_care',[
            'request_for_palliative_careh_results'=>$request_for_palliative_careh_results
        ]);
    }
    public function request_for_post_modern_examination_post()
    {
        $banking = new patient_file_request_for_mortem_examination(Input::all());
        $banking->save();
        return redirect(route('request_for_post_modern_examination'));
    }
    public function request_for_post_modern_examination()
    {
        $request_for_mortem_examination_results = DB::table('patient_file_request_for_mortem_examinations')->get();
        return view('departments.clinical_services.inpatient.patient_file.request_for_post_modern_examination',[
            'request_for_mortem_examination_results'=>$request_for_mortem_examination_results
        ]);
    }


}
