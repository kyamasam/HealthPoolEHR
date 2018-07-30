<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.main');
});

Auth::routes();

Route::get('/home', ['uses'=>'HomeController@index', 'descriptive'=>'This is home page'])->name('home');


Route::prefix('finance')->group(function () {
    Route::get('/','FinanceController@index')->name('finance_home');

    Route::prefix('banking')->group(function(){

        Route::get('/','FinanceController@banking')->name('finance_banking');
        Route::post('/_post','FinanceController@banking_post')->name('finance_banking_post');

        Route::get('/bankandcreditcards','FinanceController@bankandcreditcards')->name('finance_banking_bankandcreditcards');
        Route::post('/bankandcreditcards_post','FinanceController@bankandcreditcards_post')->name('finance_banking_bankandcreditcards_post');

        Route::get('/bankrules','FinanceController@bankrules')->name('finance_banking_bankrules');
        Route::post('/bankrules_post','FinanceController@bankrules_post')->name('finance_banking_bankrules_post');

    });

    Route::get('/billing','FinanceController@billing')->name('finance_billing');
    Route::post('/billing_post','FinanceController@billing_post')->name('finance_billing_post');


    Route::get('/budgets','FinanceController@budgets')->name('finance_budgets');
    Route::get('/budgets_post','FinanceController@budgets_post')->name('finance_budgets_post');

    Route::get('/employees','FinanceController@employees')->name('finance_employees');
    Route::post('/employees_post','FinanceController@employees_post')->name('finance_employees_post');

    Route::prefix('expenses')->group(function (){
        Route::get('/','FinanceController@expenses')->name('finance_expenses');
        Route::post('/_post','FinanceController@expenses_post')->name('finance_expenses_post');

        Route::get('/addsupplier','FinanceController@expenses_addsupplier')->name('finance_expenses_addsupplier');
        Route::post('/addsupplier_post','FinanceController@expenses_addsupplier_post')->name('finance_expenses_addsupplier_post');

        Route::get('/addexpense','FinanceController@expenses_addexpense')->name('finance_expenses_addexpense');
        Route::post('/addexpense_post','FinanceController@expenses_addexpense_post')->name('finance_expenses_addexpense_post');

    });

    Route::get('/insurance','FinanceController@insurance')->name('finance_insurance');
    Route::post('/insurance_post','FinanceController@insurance_post')->name('finance_insurance_post');

    Route::get('/invoice','FinanceController@invoice')->name('finance_invoice');
    Route::post('/invoice_post','FinanceController@invoice_post')->name('finance_invoice_post');

    Route::prefix('sales')->group(function(){
        Route::get('/','FinanceController@sales')->name('finance_sales');
        Route::post('/_post','FinanceController@sales_post')->name('finance_sales_post');

        Route::get('/addcustomer','FinanceController@sales_add_customer')->name('finance_sales_add_customer');
        Route::post('/addcustomer_post','FinanceController@sales_add_customer_post')->name('finance_sales_add_customer_post');

        Route::get('/addproductservice','FinanceController@sales_add_product_service')->name('finance_sales_add_product_service');
        Route::post('/addproductservice_post','FinanceController@sales_add_product_service_post')->name('finance_sales_add_product_service_post');

        Route::get('/invoice','FinanceController@sales_invoice')->name('finance_sales_invoice');
        Route::post('/invoice_post','FinanceController@sales_invoice_post')->name('finance_sales_invoice_post');
    });

    Route::get('/reports','FinanceController@reports')->name('finance_reports');

    Route::prefix('taxes')->group(function (){
        Route::get('/','FinanceController@taxes')->name('finance_taxes');

        Route::get('addtax','FinanceController@add_tax')->name('finance_taxes_add');
        Route::post('addtax_post','FinanceController@add_tax_post')->name('finance_taxes_add_post');

    });

    Route::prefix('accounting')->group(function (){

        Route::get('/','FinanceController@accounting')->name('finance_accounting');

        Route::get('/add_account','FinanceController@add_account')->name('finance_accounting_add');
        Route::post('/add_account_post','FinanceController@add_account_post')->name('finance_accounting_add_post');

    });

});

Route::prefix('publichealth')->group(function () {

    Route::get('/', 'PublicHealthController@index')->name('public_health_home');

    Route::get('/comprehensivecarecentre', 'PublicHealthController@comprehensive_care_centre')->name('comprehensive_care_centre');
    Route::get('/counselling', 'PublicHealthController@counselling')->name('counselling');
    Route::get('/malariasurveillance', 'PublicHealthController@malaria_surveillance')->name('malaria_surveillance');
    Route::get('/cancertreatment_home', 'PublicHealthController@cancertreatment_home')->name('cancertreatment_home');
    Route::prefix('motherandchildhealthclinic')->group(function (){

        Route::get('/', 'PublicHealthController@mother_and_child_health_clinic')->name('mother_and_child_health_clinic');

        Route::prefix('antenatalhealthclinic')->group(function (){
            Route::get('/', 'PublicHealthController@show_anc_home_page')->name('anc_home');
            Route::get('/moh405', 'PublicHealthController@show_moh_405_page')->name('anc_moh_405');
            Route::post('/moh405_post', 'PublicHealthController@moh405_post')->name('moh405_post');
        });

        Route::prefix('childwelfareclinic')->group(function (){
            Route::get('/', 'PublicHealthController@show_cwc_home_page')->name('cwc_home');
            Route::get('/moh511', 'PublicHealthController@show_moh_511_page')->name('cwc_moh_511');
            Route::post('/moh511_post', 'PublicHealthController@show_moh_511_page_post')->name('cwc_moh_511_post');
            Route::get('/moh511cwcregister', 'PublicHealthController@show_moh_511_cwc_register_page')->name('cwc_moh_511_cwc_register');
        });

        Route::prefix('familyplanningclinic')->group(function (){
            Route::get('/', 'PublicHealthController@show_fpc_home_page')->name('fpc_home');
            Route::get('/familyplanning', 'PublicHealthController@show_family_planning_page')->name('fpc_family_planning');
            Route::post('family_planning_post', 'PublicHealthController@show_family_planning_post')->name('family_planning_post');
        });

        Route::prefix('immunizationclinic')->group(function (){
            Route::get('/', 'PublicHealthController@show_ic_home_page')->name('ic_home');
            Route::prefix('coldchainmonitoring')->group(function (){
                Route::get('/', 'PublicHealthController@cold_chain_monitoring')->name('ic_cold_chain_monitoring');
            });
            Route::prefix('immunizationregister')->group(function (){
                Route::get('/', 'PublicHealthController@immunization_register')->name('ic_immunization_register');
                Route::get('/moh510', 'PublicHealthController@show_moh510_page')->name('ic_ir_moh_510');
                Route::post('moh510_page_post', 'PublicHealthController@show_moh510_page_post')->name('moh510_page_post');
                Route::get('/moh510immunizationregisterforchildren', 'PublicHealthController@show_moh510_ir_for_children_page')->name('ic_ir_moh_510_ir_for_children');

                Route::get('/moh702immunizationandvitaminatallysheet', 'PublicHealthController@show_moh702_ir_and_vitamin_a_tally_sheet_page')->name('ic_ir_and_vitamin_a_tally_sheet');
                Route::post('/moh702immunizationandvitaminatallysheet_post', 'PublicHealthController@show_moh702_ir_and_vitamin_a_tally_sheet_page_post')->name('ic_ir_and_vitamin_a_tally_sheet_post');

                Route::get('/moh710immunizationandvitaminasummarysheet', 'PublicHealthController@show_moh710_ir_and_vitamin_a_summary_sheet_page')->name('ic_ir_and_vitamin_a_summary_sheet');
            });
        });
        Route::prefix('postnatalclinic')->group(function (){
            Route::get('/', 'PublicHealthController@show_pnc_home_page')->name('pnc_home');
            Route::get('/moh406pncregister', 'PublicHealthController@show_moh_406_pnc_register_page')->name('pnc_moh_406_post_natal_register');
            Route::post('/moh406pncregister_post', 'PublicHealthController@moh_406_post')->name('pnc_moh_406_post_natal_register_post');
        });

    });
    Route::get('/vaccines', 'PublicHealthController@vaccines')->name('vaccines');
    Route::get('/voluntarycounsellingandtesting', 'PublicHealthController@voluntary_counselling_and_testing')->name('voluntary_counselling_and_testing');
    Route::get('/youthfriendlyclinic', 'PublicHealthController@youth_friendly_clinic')->name('youth_friendly_clinic');
});

Route::prefix('diagnosticservices')->group(function (){
    Route::get('/', 'DiagnosticServicesController@diagnosticservices')->name('diagnosticservices');

    Route::get('/generallabrequestform', 'DiagnosticServicesController@generallabrequestform')->name('generallabrequestform');
    Route::post('/generallabrequestform_post', 'DiagnosticServicesController@generallabrequestform_post')->name('generallabrequestform_post');

    Route::get('/moh240', 'DiagnosticServicesController@moh240')->name('moh240');
    Route::post('/moh240_post', 'DiagnosticServicesController@moh240_post')->name('moh240_post');

    Route::get('/ecgrequestform', 'DiagnosticServicesController@ecgrequestform')->name('ecgrequestform');

    Route::get('/moh209', 'DiagnosticServicesController@moh209')->name('moh209');
    Route::post('/moh209_post', 'DiagnosticServicesController@moh209_post')->name('moh209_post');

    Route::get('/radiologyrequestform', 'DiagnosticServicesController@radiologyrequestform')->name('radiologyrequestform');
    Route::post('/radiologyrequestform_post', 'DiagnosticServicesController@radiologyrequestform_post')->name('radiologyrequestform_post');

  Route::get('blood_donation_unit', 'DiagnosticServicesController@blood_donation_unit')->name('blood_donation_unit');
  Route::post('blood_donation_unit_post', 'DiagnosticServicesController@blood_donation_unit_post')->name('blood_donation_unit');
});

Route::prefix('farewellparlour')->group(function (){
    Route::get('/', 'FarewellPalourController@farewellpalour')->name('farewellparlour');

    Route::get('moh387', 'FarewellPalourController@moh387')->name('moh387');
    Route::post('moh387_post', 'FarewellPalourController@moh387_post')->name('moh387_post');
});

Route::prefix('clinicalservices')->group(function () {

    // CANCER MANAGEMENT
    Route::get('/cancer_management','ClinicalServicesController@clinical_services_cancer_management')->name('cancer_records_management');
    Route::post('/cancer_management_post','ClinicalServicesController@clinical_services_cancer_management_post')->name('cancer_records_management_post');
    Route::get('/canregdata','ClinicalServicesController@canregdata')->name('canregdata');
    Route::post('/canregdata_post','ClinicalServicesController@canregdata_post')->name('canregdata_post');
    Route::get('/canregimport','ClinicalServicesController@canregimport')->name('canregimport');
    Route::post('/canregimport_post','ClinicalServicesController@canregimport_post')->name('canregimport_post');
    Route::get('/canreg_analytics','ClinicalServicesController@canreg_analytics')->name('canreg_analytics');
    //OUTPATIENT NAVIGATION
        Route::prefix('outpatient')->group(function () {
            Route::get('/','ClinicalServicesController@clinicalservices_outpatient_home')->name('clinicalservices_outpatient_home');


            Route::prefix('emergency_dept')->group(function (){
                Route::get('/triage','ClinicalServicesController@patient_file_home')->name('triage');
                Route::get('/immunization_room','ClinicalServicesController@patient_file_home')->name('immunization_room');
                Route::get('/injection_room','ClinicalServicesController@patient_file_home')->name('injection_room');
                Route::get('/minor_theatre','ClinicalServicesController@patient_file_home')->name('minor_theatre');
            });


            Route::prefix('outpatient_clinic')->group(function (){
                Route::get('/wellbabyclinic','ClinicalServicesController@patient_file_home')->name('wellbabyclinic');
                Route::get('/earnosethroat','ClinicalServicesController@patient_file_home')->name('earnosethroat');
                Route::get('/meadicaloutpatient','ClinicalServicesController@patient_file_home')->name('meadicaloutpatient');
                Route::get('/gynecology','ClinicalServicesController@patient_file_home')->name('gynecology');
                Route::get('/pediatricoutpatient','ClinicalServicesController@patient_file_home')->name('pediatricoutpatient');
                Route::get('/surgicaloutpatient','ClinicalServicesController@patient_file_home')->name('surgicaloutpatient');
                Route::get('/opthalmicclinic','ClinicalServicesController@patient_file_home')->name('opthalmicclinic');
                Route::get('/tbclinic','ClinicalServicesController@patient_file_home')->name('tbclinic');
            });
            Route::prefix('doctors_office')->group(function (){
                Route::get('/clinicalservices_outpatient_doctorsoffice','ClinicalServicesController@clinicalservices_outpatient_doctorsoffice')->name('clinicalservices_outpatient_doctorsoffice');

                Route::get('/doctorsoffice_clinical','ClinicalServicesController@doctorsoffice_clinical')->name('doctorsoffice_clinical');
                Route::get('/doctorsoffice_billing','ClinicalServicesController@doctorsoffice_billing')->name('doctorsoffice_billing');
                Route::get('/doctorsoffice_patientprofile','ClinicalServicesController@doctorsoffice_patientprofile')->name('doctorsoffice_patientprofile');
                Route::get('/doctorsoffice_report','ClinicalServicesController@doctorsoffice_report')->name('doctorsoffice_report');


                Route::prefix('doctorsoffice_administration')->group(function (){
                    Route::get('/','ClinicalServicesController@doctorsoffice_administration')->name('doctorsoffice_administration');
                    Route::get('/doctors_administration_registration','ClinicalServicesController@doctors_administration_registration')->name('doctors_administration_registration');
                    Route::get('/doctors_administration_scheduling','ClinicalServicesController@doctors_administration_scheduling')->name('doctors_administration_scheduling');
                    Route::get('/doctors_administration_appointments','ClinicalServicesController@doctors_administration_appointments')->name('doctors_administration_appointments');
                    Route::get('/doctors_administration_attendance','ClinicalServicesController@doctors_administration_attendance')->name('doctors_administration_attendance');
                    Route::get('/doctors_administration_alerts','ClinicalServicesController@doctors_administration_alerts')->name('doctors_administration_alerts');
                    Route::get('/doctors_administration_reminders','ClinicalServicesController@doctors_administration_reminders')->name('doctors_administration_reminders');

                });
                Route::prefix('doctorsoffice_clinical')->group(function (){
                    Route::get('/clinical_consultationform','ClinicalServicesController@clinical_consultationform')->name('clinical_consultationform');
                    Route::get('/clinical_consultationrequestform','ClinicalServicesController@clinical_consultationrequestform')->name('clinical_consultationrequestform');
//                    Route::get('/clinical_prescriptionform','ClinicalServicesController@clinical_prescriptionform')->name('clinical_prescriptionform');
                    Route::get('/clinical_radiologurequest','ClinicalServicesController@clinical_radiologurequest')->name('clinical_radiologurequest');
                    Route::get('/clinical_radiologyreportsheet','ClinicalServicesController@clinical_radiologyreportsheet')->name('clinical_radiologyreportsheet');
                    Route::get('/clinical_labrequest','ClinicalServicesController@clinical_labrequest')->name('clinical_labrequest');
                    Route::get('/clinical_labreport','ClinicalServicesController@clinical_labreport')->name('clinical_labreport');

                });
                Route::prefix('doctorsoffice_billing')->group(function (){
                    Route::get('/doctorsoffice_billling','ClinicalServicesController@doctorsoffice_billling')->name('doctorsoffice_billling');
                    Route::get('/doctorsoffice_invoicing','ClinicalServicesController@doctorsoffice_invoicing')->name('doctorsoffice_invoicing');

                });
            });


            Route::prefix('emergency_department')->group(function (){
                Route::get('/clinicalservices_outpatient_emergencydpt','ClinicalServicesController@clinicalservices_outpatient_emergencydpt')->name('clinicalservices_outpatient_emergencydpt');
            });

            Route::prefix('orthoepedic_department')->group(function (){
                Route::get('/clinicalservices_outpatient_orthoepedicdpt','ClinicalServicesController@clinicalservices_outpatient_orthoepedicdpt')->name('clinicalservices_outpatient_orthoepedicdpt');
            });

            Route::prefix('nutrition_department')->group(function (){
                Route::get('/clinicalservices_outpatient_nutritiondpt','ClinicalServicesController@clinicalservices_outpatient_nutritiondpt')->name('clinicalservices_outpatient_nutritiondpt');
            });

            Route::prefix('occupationaltherapy_department')->group(function (){
                Route::get('/clinicalservices_outpatient_occupationaldpt','ClinicalServicesController@clinicalservices_outpatient_occupationaldpt')->name('clinicalservices_outpatient_occupationaldpt');
            });

            Route::prefix('physiotherapy')->group(function (){
                Route::get('/clinicalservices_outpatient_physiotherapy','ClinicalServicesController@clinicalservices_outpatient_physiotherapy')->name('clinicalservices_outpatient_physiotherapy');
            });

            Route::prefix('dental_service')->group(function (){
                Route::get('/clinicalservices_outpatient_dental','ClinicalServicesController@clinicalservices_outpatient_dental')->name('clinicalservices_outpatient_dental');
            });

            Route::prefix('outpatient_clinic')->group(function (){
                Route::get('/clinicalservices_outpatient_outpatientclinic','ClinicalServicesController@clinicalservices_outpatient_outpatientclinic')->name('clinicalservices_outpatient_outpatientclinic');
            });
    });
    // INPATIENT NAVIGATION
    Route::prefix('inpatient')->group(function () {

        Route::get('/','ClinicalServicesController@clinicalservices_inpatient_home')->name('clinicalservices_inpatient_home');

        Route::prefix('medical_services')->group(function (){
            Route::get('/','ClinicalServicesController@clinicalservices_ms_home')->name('clinicalservices_ms_home');

            Route::get('/medical_ward','ClinicalServicesController@patient_file_home')->name('clinicalservices_ms_medical_ward');
            Route::get('/renal_unit','ClinicalServicesController@patient_file_home')->name('clinicalservices_ms_renal_unit');
            Route::get('/oncology_unit','ClinicalServicesController@patient_file_home')->name('clinicalservices_ms_oncology_unit');
        });

        Route::prefix('surgical_services')->group(function (){
            Route::get('/','ClinicalServicesController@clinicalservices_ss_home')->name('clinicalservices_ss_home');

            Route::get('/surgical_ward','ClinicalServicesController@patient_file_home')->name('clinicalservices_ss_sw');
            Route::get('/burns_unit','ClinicalServicesController@patient_file_home')->name('clinicalservices_ss_bu');
            Route::get('/orthopaedic_unit','ClinicalServicesController@patient_file_home')->name('clinicalservices_ss_ou');
        });

        Route::prefix('paediatric_services')->group(function (){
            Route::get('/','ClinicalServicesController@clinicalservices_ps_home')->name('clinicalservices_ps_home');

            Route::get('/paediatric_ward','ClinicalServicesController@patient_file_home')->name('clinicalservices_ps_pw');
            Route::get('/new_born_unit','ClinicalServicesController@patient_file_home')->name('clinicalservices_ps_nbu');
            Route::get('/neonatal_intensive_care_unit','ClinicalServicesController@patient_file_home')->name('clinicalservices_ps_nicu');
        });

        Route::prefix('maternity_services')->group(function (){
            Route::get('/','ClinicalServicesController@clinicalservices_maternity_home')->name('clinicalservices_maternity_home');

            Route::prefix('labor_ward')->group(function (){
                Route::get('/','ClinicalServicesController@clinicalservices_maternity_lw')->name('clinicalservices_maternity_lw');

                Route::get('/pre_delivery_room','ClinicalServicesController@patient_file_home')->name('clinicalservices_maternity_pdr');
                Route::get('/delivery_room','ClinicalServicesController@patient_file_home')->name('clinicalservices_maternity_dr');
                Route::get('/post_delivery_room','ClinicalServicesController@patient_file_home')->name('clinicalservices_maternity_podr');
            });
            Route::get('/gynaecology_ward','ClinicalServicesController@patient_file_home')->name('clinicalservices_maternity_gw');
        });

        Route::prefix('critical_care_services')->group(function (){
            Route::get('/','ClinicalServicesController@clinicalservices_ccs_home')->name('clinicalservices_ccs_home');

            Route::get('/intensive_care_unit','ClinicalServicesController@patient_file_home')->name('clinicalservices_ccs_icu');
            Route::get('/high_dependency_unit','ClinicalServicesController@patient_file_home')->name('clinicalservices_ccs_hdu');
        });

        Route::prefix('anaesthesia_theatre_services')->group(function (){
            Route::get('/','ClinicalServicesController@clinicalservices_ats_home')->name('clinicalservices_ats_home');

            Route::get('/maternity_theatre','ClinicalServicesController@clinicalservices_ra_or_rr')->name('clinicalservices_ats_mt');
            Route::get('/opthamology','ClinicalServicesController@clinicalservices_ra_or_rr')->name('clinicalservices_ats_opthamology');
            Route::get('/cardiology','ClinicalServicesController@clinicalservices_ra_or_rr')->name('clinicalservices_ats_cardiology');
            Route::get('/ear_nose_throat','ClinicalServicesController@clinicalservices_ra_or_rr')->name('clinicalservices_ats_ent');
            Route::get('/orthopaedics','ClinicalServicesController@clinicalservices_ra_or_rr')->name('clinicalservices_ats_orthopaedics');
            Route::get('/general','ClinicalServicesController@clinicalservices_ra_or_rr')->name('clinicalservices_ats_general');
        });


        Route::group(array('prefix'=>'clinicalregisters'), function () {
            Route::get('/', 'ClinicalRegisterController@registers')->name('registers');
        });
        Route::group(array('prefix'=>'summaryforms'), function () {
            Route::get('/', 'SummaryFormsController@summaryforms')->name('summaryforms');
        });
        Route::group(array('prefix'=>'tallysheets'), function () {
            Route::get('/', 'TallySheetsController@tallysheets')->name('tallysheets');
        });
        Route::group(array('prefix'=>'indexcards'), function () {
            Route::get('/', 'IndexCardsController@indexcards')->name('indexcards');
        });

        Route::group(array('prefix'=>'patient_file'), function () {
            Route::get('/', 'ClinicalServicesController@patient_file_home')->name('patient_file_home');

            Route::get('casedeath', 'GeneralPatientFilesController@general_files_case_death')->name('general_files_case_death');
            Route::post('casedeath_post', 'GeneralPatientFilesController@general_files_case_death_post')->name('general_files_case_death_post');


            Route::get('inpatient_charge_sheet', 'ClinicalServicesController@inpatient_charge_sheet')->name('inpatient_charge_sheet');


            Route::get('investigation_sheet', 'GeneralPatientFilesController@investigation_sheet')->name('investigation_sheet');


            Route::get('secg_request_form', 'GeneralPatientFilesController@secg_request_form')->name('secg_request_form');


            Route::get('audiogram', 'GeneralPatientFilesController@audiogram')->name('audiogram');


//            Route::get('treatment_sheet', 'GeneralPatientFilesController@treatment_sheet')->name('treatment_sheet');
//            Route::post('treatment_sheet_post', 'GeneralPatientFilesController@treatment_sheet_post')->name('treatment_sheet_post');


            Route::get('pressure', 'GeneralPatientFilesController@pressure')->name('pressure');


            Route::get('diabetic_charts', 'GeneralPatientFilesController@diabetic_charts')->name('diabetic_charts');


            Route::get('fluid_in_out_chart', 'GeneralPatientFilesController@fluid_in_out_chart')->name('fluid_in_out_chart');
            Route::post('fluidintake_post', 'GeneralPatientFilesController@fluidintake_post')->name('fluidintake_post');



            Route::get('four_hourly_temp_chart', 'GeneralPatientFilesController@four_hourly_temp_chart')->name('four_hourly_temp_chart');



            Route::get('four_hourly_temp_chart', 'GeneralPatientFilesController@four_hourly_temp_chart')->name('four_hourly_temp_chart');


            Route::get('morning_and_evening_temp_chart', 'GeneralPatientFilesController@morning_and_evening_temp_chart')->name('morning_and_evening_temp_chart');


            Route::get('pulse_chart', 'GeneralPatientFilesController@morning_and_evening_temp_chart')->name('morning_and_evening_temp_chart');


            Route::get('diet_chart', 'GeneralPatientFilesController@diet_chart')->name('diet_chart');

            Route::get('nursing_notes', 'ClinicalServicesController@nursing_notes')->name('nursing_notes');
            Route::post('nursing_notes_post', 'ClinicalServicesController@nursing_notes_post')->name('nursing_notes_post');


            Route::get('allergyform', 'ClinicalServicesController@allergyform')->name('allergyform');
            Route::post('allergyform_post','ClinicalServicesController@allergyform_post')->name('allergyform_post');
            Route::get('fallassessmentform', 'ClinicalServicesController@fallassessmentform')->name('fallassessmentform');
            Route::post('fallassessmentform_post','ClinicalServicesController@fallassessmentform_post')->name('fallassessmentform_post');
            Route::get('pressure_score_card', 'GeneralPatientFilesController@pressure_score_card')->name('pressure_score_card');
            Route::post('pressure_score_card_post', 'GeneralPatientFilesController@pressure_score_card_post')->name('pressure_score_card_post');
            Route::get('nursingcareform', 'ClinicalServicesController@nursingcareform')->name('nursingcareform');
            Route::post('nursingcareform_post','ClinicalServicesController@nursingcareform_post')->name('nursingcareform_post');
            Route::get('morphine', 'GeneralPatientFilesController@morphine')->name('morphine');
            Route::post('morphine_post', 'ClinicalServicesController@morphine_post')->name('morphine_post');
            Route::get('nursing', 'ClinicalServicesController@nursing')->name('nursing');
            Route::post('nursing_post', 'ClinicalServicesController@nursing_post')->name('nursing_post');



            Route::get('anaesthetic_records', 'ClinicalServicesController@anaesthetic_records')->name('anaesthetic_records');
            Route::post('anaesthetic_records','ClinicalServicesController@anaesthetic_records_post')->name('anaesthetic_records_post');

            Route::get('infant_record', 'ClinicalServicesController@infant_record')->name('infant_record');
            Route::post('infant_record_post', 'ClinicalServicesController@infant_record_post')->name('infant_record_post');

            Route::get('fluid_intake_output_chart', 'ClinicalServicesController@fluid_intake_output_chart')->name('fluid_intake');
            Route::post('fluid_intake_output_chart_post', 'ClinicalServicesController@fluid_intake_output_chart_post')->name('fluid_intake_output_chart_post');

//            Route::get('consultation_request_form', 'GeneralPatientFilesController@consultation_request_form')->name('consultation_request_form');
//            Route::post('consultation_request_form_post', 'GeneralPatientFilesController@consultation_request_form_post')->name('consultation_request_form_post');

            Route::get('consent_form', 'ClinicalServicesController@consent_form')->name('consent_form');
            Route::post('consent_form_post', 'ClinicalServicesController@consent_form_post')->name('consent_form_post');

            Route::get('audiogram', 'ClinicalServicesController@audiogram')->name('audiogram');
            Route::post('audiogram_post', 'ClinicalServicesController@audiogram_post')->name('audiogram_post');

            Route::get('blood_transfusion_observation_form', 'ClinicalServicesController@blood_transfusion_observation_form')->name('blood_transfusion_observation_form');
            Route::post('blood_transfusion_observation_form_post', 'ClinicalServicesController@blood_transfusion_observation_form_post')->name('blood_transfusion_observation_form_post');

            Route::get('central_record_registration_form.blade.php', 'ClinicalServicesController@central_record_registration_form.blade.php')->name('central_record_registration_form.blade.php');
            Route::post('central_record_registration_form_post', 'ClinicalServicesController@central_record_registration_form_post')->name('central_record_registration_form_post');


//            Route::get('consultation_request_form', 'ClinicalServicesController@consultation_request_form')->name('consultation_request_form');
//            Route::post('consultation_request_form_post', 'ClinicalServicesController@consultation_request_form_post')->name('consultation_request_form_post');

//            Route::get('continuation_form', 'ClinicalServicesController@continuation_form')->name('continuation_form');

            Route::get('diabetic_charts', 'ClinicalServicesController@diabetic_charts')->name('diabetic_charts');

            Route::get('diet_sheet', 'ClinicalServicesController@diet_sheet')->name('diet_sheet');

            Route::get('diet_requisition_sheet', 'ClinicalServicesController@diet_requisition_sheet')->name('diet_requisition_sheet');

//            Route::get('ecg_form', 'ClinicalServicesController@ecg_form')->name('ecg_form');

//            Route::get('eeg_report', 'ClinicalServicesController@eeg_report')->name('eeg_report');

            Route::get('general_outpatient_card', 'ClinicalServicesController@general_outpatient_card')->name('general_outpatient_card');

            Route::get('head_injury_and_craniotomy_chart_form', 'ClinicalServicesController@head_injury_and_craniotomy_chart_form')->name('head_injury_and_craniotomy_chart_form');

            Route::get('icu_observation_chart', 'ClinicalServicesController@icu_observation_chart')->name('icu_observation_chart');

//            Route::get('initial_nursing_assessment_form', 'ClinicalServicesController@initial_nursing_assessment_form')->name('initial_nursing_assessment_form');

            Route::get('intensive_care_unit_respiratory_sheet', 'ClinicalServicesController@intensive_care_unit_respiratory_sheet')->name('intensive_care_unit_respiratory_sheet');

            Route::get('ipom_chart', 'ClinicalServicesController@ipom_chart')->name('ipom_chart');

//            Route::get('laboratory_report_sheet', 'ClinicalServicesController@laboratory_report_sheet')->name('laboratory_report_sheet');

            Route::get('nutrition_care_process_form', 'ClinicalServicesController@nutrition_care_process_form')->name('nutrition_care_process_form');

            Route::get('occupational_therapy_initial_assessment_form', 'ClinicalServicesController@occupational_therapy_initial_assessment_form')->name('occupational_therapy_initial_assessment_form');

            Route::get('oncology_cbe_results_examination_form', 'ClinicalServicesController@oncology_cbe_results_examination_form')->name('oncology_cbe_results_examination_form');

            //Route::get('', 'ClinicalServicesController@')->name('');

            Route::get('operation_notes', 'ClinicalServicesController@operation_notes')->name('operation_notes');

            Route::get('partograph_form', 'ClinicalServicesController@partograph_form')->name('partograph_form');

            Route::get('patient_assessment_and_progress_card', 'ClinicalServicesController@patient_assessment_and_progress_card')->name('patient_assessment_and_progress_card');

//            Route::get('patient_property_declaration_form', 'ClinicalServicesController@patient_property_declaration_form')->name('patient_property_declaration_form');

            Route::get('pending_patient_file', 'ClinicalServicesController@pending_patient_file')->name('pending_patient_file');

            Route::get('physiotherapy_form', 'ClinicalServicesController@physiotherapy_form')->name('physiotherapy_form');

            Route::get('preoperative_checklist', 'ClinicalServicesController@preoperative_checklist')->name('preoperative_checklist');

            Route::get('radio_therapy_treatment_form', 'ClinicalServicesController@radio_therapy_treatment_form')->name('radio_therapy_treatment_form');

//            Route::get('radiology_report_sheet', 'GeneralPatientFilesController@radiology_report_sheet')->name('radiology_report_sheet');
//            Route::post('radiology_report_sheet_post','GeneralPatientFilesController@radiology_report_sheet_post')->name('radiology_report_sheet_post');

            Route::get('secg_request_form', 'ClinicalServicesController@secg_request_form')->name('secg_request_form');

//            Route::get('treatment_sheet', 'ClinicalServicesController@treatment_sheet')->name('treatment_sheet');

            Route::get('opthalmic_general_examination_form', 'ClinicalServicesController@opthalmic_general_examination_form')->name('opthalmic_general_examination_form');

            //Route::get('', 'ClinicalServicesController@')->name('');
            Route::get('anc_card', 'ClinicalServicesController@anc_card')->name('anc_card');
            Route::post('anc_card_post', 'ClinicalServicesController@anc_card_post')->name('anc_card_post');
            Route::get('maternity_records', 'ClinicalServicesController@patient_charge_maternity_records')->name('maternity_records');
            Route::post('patient_file_maternity_record_post', 'ClinicalServicesController@patient_file_maternity_record_post')->name('patient_file_maternity_record_post');
            Route::get('foetal_kit_chart', 'ClinicalServicesController@foetal_kit_chart')->name('foetal_kit_chart');
            Route::post('foetal_kit_chart_post', 'ClinicalServicesController@foetal_kit_chart_post')->name('foetal_kit_chart_post');
            Route::post('patient_file_infant_record_post', 'ClinicalServicesController@patient_file_infant_record_post')->name('patient_file_infant_record_post');
            Route::post('patient_file_diet_requisition_post', 'ClinicalServicesController@patient_file_diet_requisition_post')->name('patient_file_diet_requisition_post');
            Route::post('patient_file_diet_sheet_post', 'ClinicalServicesController@patient_file_diet_sheet_post')->name('patient_file_diet_sheet_post');
            Route::post('patient_file_nutrition_care_post', 'ClinicalServicesController@patient_file_nutrition_care_post')->name('patient_file_nutrition_care_post');
            Route::post('patient_file_occupational_therapy_initial_assessment__post', 'ClinicalServicesController@patient_file_occupational_therapy_initial_assessment__post')->name('patient_file_occupational_therapy_initial_assessment__post');
            Route::get('orthopaedic_examination_form', 'ClinicalServicesController@orthopaedic_examination_form')->name('orthopaedic_examination_form');
            Route::post('orthopaedic_examination_form_post', 'ClinicalServicesController@orthopaedic_examination_form_post')->name('orthopaedic_examination_form_post');
            Route::get('ear_nose_throat_examination_form', 'ClinicalServicesController@ear_nose_throat_examination_form')->name('ear_nose_throat_examination_form');
            Route::post('ear_nose_throat_examination_form_post', 'ClinicalServicesController@ear_nose_throat_examination_form_post')->name('ear_nose_throat_examination_form_post');
            Route::get('dental_examination_form', 'ClinicalServicesController@dental_examination_form')->name('dental_examination_form');
            Route::post('dental_examination_form_post', 'ClinicalServicesController@dental_examination_form_post')->name('dental_examination_form_post');
            Route::get('request_for_palliative_care', 'ClinicalServicesController@request_for_palliative_care')->name('request_for_palliative_care');
            Route::post('request_for_palliative_care_post', 'ClinicalServicesController@request_for_palliative_care_post')->name('request_for_palliative_care_post');
            Route::get('request_for_post_modern_examination', 'ClinicalServicesController@request_for_post_modern_examination')->name('request_for_post_modern_examination');
            Route::post('request_for_post_modern_examination_post', 'ClinicalServicesController@request_for_post_modern_examination_post')->name('request_for_post_modern_examination_post');




//        Route::get('labrequest', 'GeneralPatientFilesController@labrequest')->name('labrequeoccupational_therapy_initial_assessment_form
//        Route::get('ecgrequest', 'GeneralPatientFilesController@ecgrequest')->name('ecgrequest');
//
//
//        Route::get('general', 'GeneralPatientFilesController@general')->name('general');
//        Route::get('pressure', 'GeneralPatientFilesController@pressure')->name('pressure');

//        Route::get('theatre', 'GeneralPatientFilesController@theatre')->name('theatre');
//
//        Route::get('request_for_appliance', 'GeneralPatientFilesController@request_for_appliance')->name('request_for_appliance');
//        Route::post('request_for_appliance_post', 'GeneralPatientFilesController@request_for_appliance_post')->name('request_for_appliance_post');
//        Route::get('radiology_request_form', 'GeneralPatientFilesController@radiology_request_form')->name('radiology_request_form');
//        Route::post('radiology_request_form_post','GeneralPatientFilesController@radiology_request_form_post')->name('radiology_request_form_post');
//        Route::get('patient_consent', 'GeneralPatientFilesController@patient_consent')->name('patient_consent');
//        Route::get('daily_ward_report', 'GeneralPatientFilesController@daily_ward_report')->name('daily_ward_report');
//
//        //general ward forms
//        Route::get('morphine', 'GeneralPatientFilesController@morphine')->name('morphine');
//        Route::get('nursing', 'GeneralPatientFilesController@nursing')->name('nursing');
//        Route::post('nursing_post','GeneralPatientFilesController@nursing_post')->name('nursing_post');
//
//
//
//        //common forms
//        Route::get('btu', 'GeneralPatientFilesController@btu')->name('btu');
//        Route::post('btu_post', 'GeneralPatientFilesController@btu_post')->name('btu_post');
//
//        Route::get('laboratory', 'GeneralPatientFilesController@laboratory')->name('laboratory');
//        Route::get('moh301', 'GeneralPatientFilesController@moh301')->name('moh301');
//        Route::post('moh301_post', 'GeneralPatientFilesController@moh301_post')->name('moh301_post');
//
//        Route::get('xray_request', 'GeneralPatientFilesController@xray_request')->name('xray_request');
//        Route::post('xray_request_post','GeneralPatientFilesController@xray_request_post')->name('xray_request_post');
//
//        Route::get('radiology_request_form', 'GeneralPatientFilesController@radiology_request_form')->name('radiology_request_form');
//        Route::post('radiology_request_form_post', 'GeneralPatientFilesController@radiology_request_form_post')->name('radiology_request_form_post');
//
//        Route::get('moh333', 'GeneralPatientFilesController@moh333')->name('moh333');
//        Route::post('moh333_post', 'GeneralPatientFilesController@moh333_post')->name('moh333_post');
//
//        Route::get('moh406', 'GeneralPatientFilesController@moh406')->name('moh406');
//        Route::post('moh406_post', 'GeneralPatientFilesController@moh406_post')->name('moh406_post');
//
//        Route::get('moh717', 'GeneralPatientFilesController@moh717')->name('moh717');
//        Route::get('prescription', 'GeneralPatientFilesController@prescription')->name('prescription');
//        Route::get('xray_request', 'GeneralPatientFilesController@xray_request')->name('xray_request');
//        Route::post('xray_request_post','GeneralPatientFilesController@xray_request_post')->name('xray_request_post');
//
//        Route::get('pressure_score_card', 'GeneralPatientFilesController@pressure_score_card')->name('pressure_score_card');
//        Route::post('pressure_score_card_post', 'GeneralPatientFilesController@pressure_score_card_post')->name('pressure_score_card_post');
        });

        Route::group(array('prefix'=>'patient_charge_sheet'), function () {
            Route::get('/', 'ClinicalServicesController@patient_charge_sheet_home')->name('patient_charge_sheet_home');
        });

        //Route::get('medical', 'ClinicalServicesController@medical')->name('medical');
        Route::prefix('medical')->group(function () {
            Route::get('/', function () {
                return view('departments.clinical_services.inpatient.medical_services.medical');
            })->name('medical_home');
            Route::prefix('medical_icu_hdu')->group(function (){
                Route::get('/', 'ClinicalServicesController@medical_icu_icu_hdu')->name('medical_icu_hdu');



            });
            //head injury
            //icu observation
            Route::group(array('prefix'=>'medical_ward'), function () {
                Route::get('/','ClinicalServicesController@medical_medical_ward')->name('medical_medical_ward');
                Route::get('moh301', 'GeneralPatientFilesController@moh301')->name('moh301');
                //patient file
                //moh 301

            });

        });


        Route::group(array('prefix'=>'nutrition'), function () {
            Route::get('/', 'ClinicalServicesController@nutrition_home')->name('nutrition_home');


            //nutrition forms

            Route::get('adult_feeding','ClinicalServicesController@adult_feeding' )->name('adult_feeding');
            Route::post('adult_feeding_post','ClinicalServicesController@adult_feeding_post')->name('adult_feeding_post');

            //no post route specified
            Route::get('inpatient_nutrition','ClinicalServicesController@inpatient_nutrition' )->name('inpatient_nutrition');


        });



        Route::group(array('prefix'=>'ot'), function () {
            //home route
            Route::get('/', 'ClinicalServicesController@ot_home')->name('ot_home');
        });
        Route::group(array('prefix'=>'maternity'), function () {
            //home route
            Route::get('/', 'ClinicalServicesController@maternity_home')->name('maternity_home');
        });

        Route::group(array('prefix'=>'paediatric'), function () {
            //paediatric home
            Route::get('/', 'ClinicalServicesController@paediatric_home')->name('paediatric_home');

            //paediatric forms
            Route::get('maternity_sheet', 'ClinicalServicesController@maternity_sheet')->name('maternity_sheet');

            Route::get('patient_file', 'ClinicalServicesController@patient_file')->name('patient_file');
            Route::get('partograph', 'ClinicalServicesController@partograph')->name('partograph');
            Route::get('foetal_chart', 'ClinicalServicesController@foetal_chart')->name('foetal_chart');

        });
        //physiotherapy/occupational therapy
        Route::group(array('prefix'=>'physiotherapy'), function () {
            Route::get('/', 'ClinicalServicesController@physiotherapy_home')->name('physiotherapy_home');
            Route::get('physiotherapy_form', 'ClinicalServicesController@physiotherapy_form')->name('physiotherapy_form');
//            Route::get('continuation_form', 'ClinicalServicesController@continuation_form')->name('continuation_form');
        });

        Route::group(array('prefix'=>'surgical'), function () {
            //general surgical services
            //home route
            Route::get('/', 'ClinicalServicesController@surgical_home')->name('surgical_home');

            Route::prefix('general_surgical')->group(function () {
                Route::get('/', function () {
                    return view('departments.clinical_services.inpatient.surgical.general_surgical_ward.general_surgical');
                })->name('general_surgical');
            });

            //anaesthesia
            Route::prefix('anaesthesia')->group(function () {
                Route::get('/', function () {
                    return view('departments/clinical_services/inpatient/surgical/anaesthesia/anaesthesia_home');
                })->name('anaesthesia_home');
                Route::get('anaesthetic_record', 'ClinicalServicesController@anaesthetic_record')->name('anaesthetic_record');
                Route::get('theater_form', 'ClinicalServicesController@theater_form')->name('theater_form');
                Route::get('consent_form', 'ClinicalServicesController@consent_form')->name('consent_form');
                Route::get('operative_checklist', 'ClinicalServicesController@operative_checklist')->name('operative_checklist');

            });
            //general surgery
            Route::prefix('generalsurgery')->group(function () {
                Route::get('/', function () {
                    return view('departments.clinical_services.inpatient.surgical.general_surgery.general_surgery');
                })->name('general_surgery');
                //moh 301
                Route::get('moh301', 'GeneralPatientFilesController@moh301_generalsurgery')->name('moh301_generalsurgery');
                Route::post('moh301_post', 'GeneralPatientFilesController@moh301_post_generalsurgery')->name('moh301_post_generalsurgery');

                //surgical ward
                //!not available


            });

            //specialized surgical services

            Route::prefix('specialized_surgical_services')->group(function () {
                //no forms available here
                Route::get('/', function () {
                    return view('departments.clinical_services.inpatient.surgical.specialized_surgical_services.ent_theatre.specialized');
                })->name('specialized_surgical_services');
            });





            Route::get('casedeath', 'GeneralPatientFilesController@general_files_case_death')->name('general_files_case_death');
            Route::get('labrequest', 'GeneralPatientFilesController@labrequest')->name('labrequest');
            Route::get('consultationrequest', 'GeneralPatientFilesController@consultationrequest')->name('consultationrequest');
//            Route::get('ecgrequest', 'GeneralPatientFilesController@ecgrequest')->name('ecgrequest');
            Route::get('fluidintake', 'GeneralPatientFilesController@fluidintake')->name('fluidintake');
            Route::get('general', 'GeneralPatientFilesController@general')->name('general');
            Route::get('pressure', 'GeneralPatientFilesController@pressure')->name('pressure');
            Route::get('xrayrequest', 'GeneralPatientFilesController@xrayrequest')->name('xrayrequest');
            Route::get('theatre', 'GeneralPatientFilesController@theatre')->name('theatre');
//            Route::get('treatment_sheet', 'GeneralPatientFilesController@treatment_sheet')->name('treatment_sheet');
            Route::get('request_for_appliance', 'GeneralPatientFilesController@request_for_appliance')->name('request_for_appliance');
            Route::get('radiology_request_form', 'GeneralPatientFilesController@radiology_request_form')->name('radiology_request_form');
            Route::get('patient_consent', 'GeneralPatientFilesController@patient_consent')->name('patient_consent');
            Route::get('daily_ward_report', 'GeneralPatientFilesController@daily_ward_report')->name('daily_ward_report');

            //general ward forms
            Route::get('pressure', 'GeneralPatientFilesController@pressure')->name('pressure');
            Route::get('morphine', 'GeneralPatientFilesController@morphine')->name('morphine');
            Route::get('nursing', 'GeneralPatientFilesController@nursing')->name('nursing');


            //common forms
            Route::get('btu', 'GeneralPatientFilesController@btu')->name('btu');
            Route::get('laboratory', 'GeneralPatientFilesController@laboratory')->name('laboratory');
            Route::get('moh301', 'GeneralPatientFilesController@moh301')->name('moh301');
            Route::get('moh303', 'GeneralPatientFilesController@moh303')->name('moh303');
            Route::get('moh406', 'GeneralPatientFilesController@moh406')->name('moh406');
            Route::get('moh717', 'GeneralPatientFilesController@moh717')->name('moh717');
//            Route::get('prescription', 'GeneralPatientFilesController@prescription')->name('prescription');
//            Route::get('xray_request', 'GeneralPatientFilesController@xray_request')->name('xray_request');

        });

    });


    Route::get('/','ClinicalServicesController@clinicalservices_home')->name('clinicalservices_home');
    Route::prefix('inpatient')->group(function () {
        Route::get('/','ClinicalServicesController@clinicalservices_inpatient_home')->name('clinicalservices_inpatient_home');






        Route::group(array('prefix'=>'clinicalregisters'), function () {
            Route::get('/', 'ClinicalRegisterController@registers')->name('registers');


        });





        Route::group(array('prefix'=>'summaryforms'), function () {
            Route::get('/', 'SummaryFormsController@summaryforms')->name('summaryforms');


        });


        Route::group(array('prefix'=>'tallysheets'), function () {
            Route::get('/', 'TallySheetsController@tallysheets')->name('tallysheets');


        });
        Route::group(array('prefix'=>'indexcards'), function () {
            Route::get('/', 'IndexCardsController@indexcards')->name('indexcards');


        });















        Route::group(array('prefix'=>'patient_file'), function () {
            Route::get('/', 'ClinicalServicesController@patient_file_home')->name('patient_file_home');

            Route::get('case_death', 'ClinicalServicesController@case_death')->name('case_death');
            Route::post('case_death_post', 'ClinicalServicesController@case_death_post')->name('case_death_post');

            Route::get('morphine_administration_chart', 'ClinicalServicesController@morphine_administration_chart')->name('morphine_administration_chart');
            Route::post('morphine_administration_chart_post', 'ClinicalServicesController@morphine_administration_chart_post')->name('morphine_administration_chart_post');

            Route::get('inpatient_charge_sheet', 'ClinicalServicesController@inpatient_charge_sheet')->name('inpatient_charge_sheet');

            Route::get('allergy_form', 'ClinicalServicesController@allergy_form')->name('allergy_form');
            Route::post('allergyform_post','ClinicalServicesController@allergyform_post')->name('allergyform_post');


            Route::get('investigation_sheet', 'ClinicalServicesController@investigation_sheet')->name('investigation_sheet');

            Route::get('ecg_form', 'ClinicalServicesController@ecg_form')->name('ecg_form');
            Route::post('ecg_form_post', 'ClinicalServicesController@ecg_form_post')->name('ecg_form_post');

            Route::get('secg_request_form', 'ClinicalServicesController@secg_request_form')->name('secg_request_form');


            Route::get('audiogram', 'ClinicalServicesController@audiogram')->name('audiogram');


            Route::get('treatment_sheet', 'ClinicalServicesController@treatment_sheet')->name('treatment_sheet');
            Route::post('treatment_sheet_post', 'ClinicalServicesController@treatment_sheet_post')->name('treatment_sheet_post');


            Route::get('pressure', 'ClinicalServicesController@pressure')->name('pressure');


            Route::get('diabetic_charts', 'ClinicalServicesControllerr@diabetic_charts')->name('diabetic_charts');
            Route::post('diabetic_charts_post', 'ClinicalServicesController@diabetic_charts_post')->name('diabetic_charts_post');


            Route::get('fluid_in_out_chart', 'ClinicalServicesController@fluid_in_out_chart')->name('fluid_in_out_chart');
            Route::post('fluid_in_out_chart_post', 'ClinicalServicesController@fluid_in_out_chart_post')->name('fluid_in_out_chart_post');



            Route::get('four_hourly_temp_chart', 'ClinicalServicesController@four_hourly_temp_chart')->name('four_hourly_temp_chart');
            Route::post('four_hourly_temp_chart_post', 'ClinicalServicesController@four_hourly_temp_chart_post')->name('four_hourly_temp_chart_post');

            Route::get('initial_assessment_form', 'ClinicalServicesController@initial_assessment_form')->name('initial_assessment_form');
            Route::post('initial_assessment_form_post', 'ClinicalServicesController@initial_assessment_form_post')->name('initial_assessment_form_post');



            Route::get('four_hourly_temp_chart', 'ClinicalServicesController@four_hourly_temp_chart')->name('four_hourly_temp_chart');


            Route::get('morning_and_evening_temp_chart', 'ClinicalServicesController@morning_and_evening_temp_chart')->name('morning_and_evening_temp_chart');


            Route::get('pulse_chart', 'ClinicalServicesController@pulse_chart')->name('pulse_chart');


            Route::get('diet_chart', 'ClinicalServicesController@diet_chart')->name('diet_chart');
            Route::get('nursing_notes', 'ClinicalServicesController@nursing_notes')->name('nursing_notes');
//            Route::get('continuation_sheets', 'GeneralPatientFilesController@continuation_sheets')->name('continuation_sheets');

            Route::get('allergyform', 'ClinicalServicesController@allergyform')->name('allergyform');
            Route::post('allergyform_post','ClinicalServicesController@allergyform_post')->name('allergyform_post');

            Route::get('fallassessmentform', 'ClinicalServicesController@fallassessmentform')->name('fallassessmentform');
            Route::post('fallassessmentform_post','ClinicalServicesController@fallassessmentform_post')->name('fallassessmentform_post');

            Route::get('physicalexaminationonadmission', 'ClinicalServicesController@physicalexaminationonadmission')->name('physicalexaminationonadmission');
            Route::post('physicalexaminationonadmission_post','ClinicalServicesController@physicalexaminationonadmission_post')->name('physicalexaminationonadmission_post');

            Route::get('pressure_score_card', 'ClinicalServicesController@pressure_score_card')->name('pressure_score_card');
            Route::post('pressure_score_card_post', 'ClinicalServicesController@pressure_score_card_post')->name('pressure_score_card_post');

            Route::get('nursingcareform', 'ClinicalServicesController@nursingcareform')->name('nursingcareform');
            Route::post('nursingcareform_post','ClinicalServicesController@nursingcareform_post')->name('nursingcareform_post');

            Route::get('morphine', 'ClinicalServicesController@morphine')->name('morphine');
            Route::post('morphine_post', 'ClinicalServicesController@morphine_post')->name('morphine_post');

            Route::get('nursing', 'ClinicalServicesController@nursing')->name('nursing');
            Route::post('nursing_post', 'ClinicalServicesController@nursing_post')->name('nursing_post');



            Route::get('laboratoryrequestform', 'ClinicalServicesController@laboratoryrequestform')->name('laboratoryrequestform');
            Route::post('laboratoryrequestform_post', 'ClinicalServicesController@laboratoryrequestform_post')->name('laboratoryrequestform_post');

            Route::get('maternity_record', 'ClinicalServicesController@maternity_record')->name('maternity_record');

            Route::get('prescriptionform', 'ClinicalServicesController@prescriptionform')->name('prescriptionform');
            Route::post('prescriptionform_post', 'ClinicalServicesController@prescriptionform_post')->name('prescription_form_post');

            Route::get('xray_request_form', 'ClinicalServicesController@xray_request_form')->name('xray_request_form');
            Route::post('xray_request_form_post','ClinicalServicesController@xray_request_form_post')->name('xray_request_form_post');

            Route::get('accident_and_emergency', 'ClinicalServicesController@accident_and_emergency')->name('accident_and_emergency');
            Route::post('accident_and_emergency_post','ClinicalServicesController@accident_and_emergency_post')->name('accident_and_emergency_post');

            Route::get('admission_form', 'ClinicalServicesController@admission_form')->name('admission_form');
            Route::post('admission_form_post','ClinicalServicesController@admission_form_post')->name('admission_form_post');


            Route::get('anaesthetic_records', 'ClinicalServicesController@anaesthetic_records')->name('anaesthetic_records');
            Route::post('anaesthetic_records','ClinicalServicesController@anaesthetic_records_post')->name('anaesthetic_records_post');

            Route::get('infant_record', 'ClinicalServicesController@infant_record')->name('infant_record');
            Route::post('infant_record_post', 'ClinicalServicesController@infant_record_post')->name('infant_record_post');

            Route::get('fluid_intake_output_chart', 'ClinicalServicesController@fluid_intake_output_chart')->name('fluid_intake');
            Route::post('fluid_intake_output_chart_post', 'ClinicalServicesController@fluid_intake_output_chart_post')->name('fluid_intake_output_chart_post');

            Route::get('consent_form', 'ClinicalServicesController@consent_form')->name('consent_form');
            Route::post('consent_form_post', 'ClinicalServicesController@consent_form_post')->name('consent_form_post');

            Route::get('foetal_kit_chart', 'ClinicalServicesController@foetal_kit_chart')->name('foetal_kit_chart');
            Route::post('foetal_kit_chart_post', 'ClinicalServicesController@foetal_kit_chart_post')->name('foetal_kit_chart_post');

            Route::get('anc_card', 'ClinicalServicesController@anc_card')->name('anc_card');
            Route::post('anc_card_post', 'ClinicalServicesController@anc_card_post')->name('anc_card_post');

            Route::get('audiogram', 'ClinicalServicesController@audiogram')->name('audiogram');
            Route::post('audiogram_post', 'ClinicalServicesController@audiogram_post')->name('audiogram_post');

            Route::get('blood_transfusion_observation_form', 'ClinicalServicesController@blood_transfusion_observation_form')->name('blood_transfusion_observation_form');
            Route::post('blood_transfusion_observation_form_post', 'ClinicalServicesController@blood_transfusion_observation_form_post')->name('blood_transfusion_observation_form_post');


            Route::get('consultation_request_form', 'ClinicalServicesController@consultation_request_form')->name('consultation_request_form');
            Route::post('consultation_request_form_post', 'ClinicalServicesController@consultation_request_form_post')->name('consultation_request_form_post');


            Route::get('continuation_form', 'ClinicalServicesController@continuation_form')->name('continuation_form');
            Route::post('continuation_form_post', 'ClinicalServicesController@continuation_form_post')->name('continuation_form_post');


            Route::get('diabetic_charts', 'ClinicalServicesController@diabetic_charts')->name('diabetic_charts');

            Route::get('diet_sheet', 'ClinicalServicesController@diet_sheet')->name('diet_sheet');

            Route::get('diet_requisition_sheet', 'ClinicalServicesController@diet_requisition_sheet')->name('diet_requisition_sheet');

            Route::get('ear_nose_throat_examination_form', 'ClinicalServicesController@ear_nose_throat_examination_form')->name('ear_nose_throat_examination_form');

//            Route::get('ecg_form', 'ClinicalServicesController@ecg_form')->name('ecg_form');

            Route::get('eeg_report', 'ClinicalServicesController@eeg_report')->name('eeg_report');
            Route::post('eeg_report_post', 'ClinicalServicesController@eeg_report_post')->name('eeg_report_post');

            Route::get('general_outpatient_card', 'ClinicalServicesController@general_outpatient_card')->name('general_outpatient_card');

            Route::get('head_injury_and_craniotomy_chart_form', 'ClinicalServicesController@head_injury_and_craniotomy_chart_form')->name('head_injury_and_craniotomy_chart_form');

            Route::get('icu_observation_chart', 'ClinicalServicesController@icu_observation_chart')->name('icu_observation_chart');
            Route::post('icu_observation_chart_post', 'ClinicalServicesController@icu_observation_chart_post')->name('icu_observation_chart_post');

            Route::get('initial_nursing_assessment_form', 'ClinicalServicesController@initial_nursing_assessment_form')->name('initial_nursing_assessment_form');
            Route::post('initial_nursing_assessment_form_post', 'ClinicalServicesController@initial_nursing_assessment_form_post')->name('initial_nursing_assessment_form_post');

            Route::get('intensive_care_unit_respiratory_sheet', 'ClinicalServicesController@intensive_care_unit_respiratory_sheet')->name('intensive_care_unit_respiratory_sheet');
            Route::post('intensive_care_unit_respiratory_sheet_post', 'ClinicalServicesController@intensive_care_unit_respiratory_sheet_post')->name('intensive_care_unit_respiratory_sheet_post');

            Route::get('ipom_chart', 'ClinicalServicesController@ipom_chart')->name('ipom_chart');
            Route::post('ipom_chart_post', 'ClinicalServicesController@ipom_chart_post')->name('ipom_chart_post');

            Route::get('laboratory_report_sheet_patient_file', 'ClinicalServicesController@laboratory_report_sheet_patient_file')->name('laboratory_report_sheet_patient_file');

            Route::get('nutrition_care_process_form', 'ClinicalServicesController@nutrition_care_process_form')->name('nutrition_care_process_form');

            Route::get('occupational_therapy_initial_assessment_form', 'ClinicalServicesController@occupational_therapy_initial_assessment_form')->name('occupational_therapy_initial_assessment_form');

            Route::get('oncology_cbe_results_examination_form', 'ClinicalServicesController@oncology_cbe_results_examination_form')->name('oncology_cbe_results_examination_form');

            //Route::get('', 'ClinicalServicesController@')->name('');

            Route::get('operation_notes', 'ClinicalServicesController@operation_notes')->name('operation_notes');

            Route::get('orthopaedic_examination_form', 'ClinicalServicesController@orthopaedic_examination_form')->name('orthopaedic_examination_form');

            Route::get('partograph_form', 'ClinicalServicesController@partograph_form')->name('partograph_form');

            Route::get('patient_assessment_and_progress_card', 'ClinicalServicesController@patient_assessment_and_progress_card')->name('patient_assessment_and_progress_card');
            Route::post('patient_assessment_and_progress_card_post', 'ClinicalServicesController@patient_assessment_and_progress_card_post')->name('patient_assessment_and_progress_card_post');

            Route::get('patient_property_declaration_form', 'ClinicalServicesController@patient_property_declaration_form')->name('patient_property_declaration_form');
            Route::post('patient_property_declaration_form_post', 'ClinicalServicesController@patient_property_declaration_form_post')->name('patient_property_declaration_form_post');

            Route::get('pending_patient_file', 'ClinicalServicesController@pending_patient_file')->name('pending_patient_file');

            Route::get('physiotherapy_form', 'ClinicalServicesController@physiotherapy_form')->name('physiotherapy_form');

            Route::get('preoperative_checklist', 'ClinicalServicesController@preoperative_checklist')->name('preoperative_checklist');
            Route::post('preoperative_checklist_post', 'ClinicalServicesController@preoperative_checklist_post')->name('preoperative_checklist_post');

            Route::get('radio_therapy_treatment_form', 'ClinicalServicesController@radio_therapy_treatment_form')->name('radio_therapy_treatment_form');

            Route::get('radiology_report_sheet_patient_file', 'ClinicalServicesController@radiology_report_sheet_patient_file')->name('radiology_report_sheet_patient_file');
            Route::post('radiology_report_sheet_patient_file_post','ClinicalServicesController@radiology_report_sheet_patient_file_post')->name('radiology_report_sheet_patient_file_post');

            Route::get('request_for_post_modern_examination', 'ClinicalServicesController@request_for_post_modern_examination')->name('request_for_post_modern_examination');

            Route::get('request_for_palliative_care', 'ClinicalServicesController@request_for_palliative_care')->name('request_for_palliative_care');

            Route::get('secg_request_form', 'ClinicalServicesController@secg_request_form')->name('secg_request_form');

//            Route::get('treatment_sheet', 'ClinicalServicesController@treatment_sheet')->name('treatment_sheet');

            Route::get('opthalmic_general_examination_form', 'ClinicalServicesController@opthalmic_general_examination_form')->name('opthalmic_general_examination_form');

            Route::get('dental_examination_form', 'ClinicalServicesController@dental_examination_form')->name('dental_examination_form');

            Route::get('blood_pressure_chart', 'ClinicalServicesController@blood_pressure_chart')->name('blood_pressure_chart');
            Route::post('blood_pressure_chart_post', 'ClinicalServicesController@blood_pressure_chart_post')->name('blood_pressure_chart_post');

            Route::get('blood_donation_request_form', 'ClinicalServicesController@blood_donation_request_form')->name('blood_donation_request_form');
            Route::post('blood_donation_request_form_post', 'ClinicalServicesController@blood_donation_request_form_post')->name('blood_donation_request_form_post');

            Route::get('pharmacy_withdrawal_form', 'ClinicalServicesController@pharmacy_withdrawal_form')->name('pharmacy_withdrawal_form');
            Route::post('pharmacy_withdrawal_form_post', 'ClinicalServicesController@pharmacy_withdrawal_form_post')->name('pharmacy_withdrawal_form_post');
        });

        Route::group(array('prefix'=>'patient_charge_sheet'), function () {
            Route::get('/', 'ClinicalServicesController@patient_charge_sheet_home')->name('patient_charge_sheet_home');
        });




        //Route::get('medical', 'ClinicalServicesController@medical')->name('medical');
        Route::prefix('medical')->group(function () {
            Route::get('/', function () {
                return view('departments.clinical_services.inpatient.medical_services.medical');
            })->name('medical_home');
            Route::prefix('medical_icu_hdu')->group(function (){
                Route::get('/', 'ClinicalServicesController@medical_icu_icu_hdu')->name('medical_icu_hdu');



            });
            //head injury
            //icu observation
            Route::group(array('prefix'=>'medical_ward'), function () {
                Route::get('/','ClinicalServicesController@medical_medical_ward')->name('medical_medical_ward');
                Route::get('moh301', 'GeneralPatientFilesController@moh301')->name('moh301');
                //patient file
                //moh 301

            });

        });


        Route::group(array('prefix'=>'nutrition'), function () {
            Route::get('/', 'ClinicalServicesController@nutrition_home')->name('nutrition_home');


            //nutrition forms

            Route::get('adult_feeding','ClinicalServicesController@adult_feeding' )->name('adult_feeding');
            Route::post('adult_feeding_post','ClinicalServicesController@adult_feeding_post')->name('adult_feeding_post');

            //no post route specified
            Route::get('inpatient_nutrition','ClinicalServicesController@inpatient_nutrition' )->name('inpatient_nutrition');


        });



        Route::group(array('prefix'=>'ot'), function () {
            //home route
            Route::get('/', 'ClinicalServicesController@ot_home')->name('ot_home');
        });
        Route::group(array('prefix'=>'maternity'), function () {
            //home route
            Route::get('/', 'ClinicalServicesController@maternity_home')->name('maternity_home');
        });



        Route::group(array('prefix'=>'paediatric'), function () {
            //paediatric home
            Route::get('/', 'ClinicalServicesController@paediatric_home')->name('paediatric_home');

            //paediatric forms
            Route::get('maternity_sheet', 'ClinicalServicesController@maternity_sheet')->name('maternity_sheet');

            Route::get('patient_file', 'ClinicalServicesController@patient_file')->name('patient_file');
            Route::get('partograph', 'ClinicalServicesController@partograph')->name('partograph');
            Route::get('foetal_chart', 'ClinicalServicesController@foetal_chart')->name('foetal_chart');

        });


        //physiotherapy/occupational therapy
        Route::group(array('prefix'=>'physiotherapy'), function () {
            Route::get('/', 'ClinicalServicesController@physiotherapy_home')->name('physiotherapy_home');
            Route::get('physiotherapy_form', 'ClinicalServicesController@physiotherapy_form')->name('physiotherapy_form');
//            Route::get('continuation_form', 'ClinicalServicesController@continuation_form')->name('continuation_form');
        });

        Route::group(array('prefix'=>'surgical'), function () {
            //general surgical services
            //home route
            Route::get('/', 'ClinicalServicesController@surgical_home')->name('surgical_home');

            Route::prefix('general_surgical')->group(function () {
                Route::get('/', function () {
                    return view('departments.clinical_services.inpatient.surgical.general_surgical_ward.general_surgical');
                })->name('general_surgical');
            });

            //anaesthesia
            Route::prefix('anaesthesia')->group(function () {
                Route::get('/', function () {
                    return view('departments/clinical_services/inpatient/surgical/anaesthesia/anaesthesia_home');
                })->name('anaesthesia_home');
                Route::get('anaesthetic_record', 'ClinicalServicesController@anaesthetic_record')->name('anaesthetic_record');
                Route::get('theater_form', 'ClinicalServicesController@theater_form')->name('theater_form');
                Route::get('consent_form', 'ClinicalServicesController@consent_form')->name('consent_form');
                Route::get('operative_checklist', 'ClinicalServicesController@operative_checklist')->name('operative_checklist');

            });
            //general surgery
            Route::prefix('generalsurgery')->group(function () {
                Route::get('/', function () {
                    return view('departments.clinical_services.inpatient.surgical.general_surgery.general_surgery');
                })->name('general_surgery');
                //moh 301
                Route::get('moh301', 'GeneralPatientFilesController@moh301_generalsurgery')->name('moh301_generalsurgery');
                Route::post('moh301_post', 'GeneralPatientFilesController@moh301_post_generalsurgery')->name('moh301_post_generalsurgery');

                //surgical ward
                //!not available


            });

            //specialized surgical services

            Route::prefix('specialized_surgical_services')->group(function () {
                //no forms available here
                Route::get('/', function () {
                    return view('departments.clinical_services.inpatient.surgical.specialized_surgical_services.ent_theatre.specialized');
                })->name('specialized_surgical_services');
            });





//            Route::get('casedeath', 'GeneralPatientFilesController@general_files_case_death')->name('general_files_case_death');
            Route::get('labrequest', 'GeneralPatientFilesController@labrequest')->name('labrequest');
            Route::get('consultationrequest', 'GeneralPatientFilesController@consultationrequest')->name('consultationrequest');
//            Route::get('ecgrequest', 'GeneralPatientFilesController@ecgrequest')->name('ecgrequest');
            Route::get('fluidintake', 'GeneralPatientFilesController@fluidintake')->name('fluidintake');
            Route::get('general', 'GeneralPatientFilesController@general')->name('general');
            Route::get('pressure', 'GeneralPatientFilesController@pressure')->name('pressure');
            Route::get('xrayrequest', 'GeneralPatientFilesController@xrayrequest')->name('xrayrequest');
            Route::get('theatre', 'GeneralPatientFilesController@theatre')->name('theatre');
//            Route::get('treatment_sheet', 'GeneralPatientFilesController@treatment_sheet')->name('treatment_sheet');
            Route::get('request_for_appliance', 'GeneralPatientFilesController@request_for_appliance')->name('request_for_appliance');
            Route::get('radiology_request_form', 'GeneralPatientFilesController@radiology_request_form')->name('radiology_request_form');
            Route::get('patient_consent', 'GeneralPatientFilesController@patient_consent')->name('patient_consent');
            Route::get('daily_ward_report', 'GeneralPatientFilesController@daily_ward_report')->name('daily_ward_report');

            //general ward forms
            Route::get('pressure', 'GeneralPatientFilesController@pressure')->name('pressure');

            Route::get('nursing', 'GeneralPatientFilesController@nursing')->name('nursing');


            //common forms
            Route::get('btu', 'GeneralPatientFilesController@btu')->name('btu');
            Route::get('laboratory', 'GeneralPatientFilesController@laboratory')->name('laboratory');
            Route::get('moh301', 'GeneralPatientFilesController@moh301')->name('moh301');
            Route::get('moh303', 'GeneralPatientFilesController@moh303')->name('moh303');
            Route::get('moh406', 'GeneralPatientFilesController@moh406')->name('moh406');
            Route::get('moh717', 'GeneralPatientFilesController@moh717')->name('moh717');
//            Route::get('prescription', 'GeneralPatientFilesController@prescription')->name('prescription');
//            Route::get('xray_request', 'GeneralPatientFilesController@xray_request')->name('xray_request');

        });

    });

    Route::get('outpatient_clinics', 'ClinicalServicesController@outpatient_clinics')->name('outpatient_clinics');
    Route::prefix('outpatient_clinics')->group(function () {
        Route::prefix('cardiology_clinic')->group(function () {
            Route::get('/', function () {
                return view('departments/clinical_services/outpatient/outpatient_clinics/cardiology_clinic');
            })->name('cardiology_clinic');
        });

        Route::prefix('dental_clinic')->group(function () {
            Route::get('/', function () {
                return view('departments.clinical_services.outpatient.outpatient_clinics.dental_clinic');
            })->name('dental_clinic');
        });
        Route::prefix('ent_clinic')->group(function () {
            Route::get('/', function () {
                return view('departments.clinical_services.outpatient.outpatient_clinics.ent_clinic');
            })->name('ent_clinic');
        });

        Route::prefix('eye_ophthalmology_clinic')->group(function () {
            Route::get('/', function () {
                return view('departments.clinical_services.outpatient.outpatient_clinics.eye_ophthalmology_clinic');
            })->name('eye_ophthalmology_clinic');
        });
        Route::prefix('mopc_clinic')->group(function () {
            Route::get('/', function () {
                return view('departments.clinical_services.outpatient.outpatient_clinics.mopc_clinic');
            })->name('mopc_clinic');
        });
        Route::prefix('obs_gyne_clinic')->group(function () {
            Route::get('/', function () {
                return view('departments.clinical_services.outpatient.outpatient_clinics.obs_gyne_clinic');
            })->name('obs_gyne_clinic');
        });
        Route::prefix('orthopedic_clinic')->group(function () {
            Route::get('/', function () {
                return view('departments.clinical_services.outpatient.outpatient_clinics.orthopedic_clinic');
            })->name('orthopedic_clinic');
        });
        Route::prefix('ot_clinic')->group(function () {
            Route::get('/', function () {
                return view('departments.clinical_services.outpatient.outpatient_clinics.ot_clinic');
            })->name('ot_clinic');
        });
        Route::prefix('physiotherapy_clinic')->group(function () {
            Route::get('/', function () {
                return view('departments.clinical_services.outpatient.outpatient_clinics.physiotherapy_clinic');
            })->name('physiotherapy_clinic');
        });
        Route::prefix('popc_clinic')->group(function () {
            Route::get('/', function () {
                return view('departments.clinical_services.outpatient.outpatient_clinics.popc_clinic');
            })->name('popc_clinic');
        });
        Route::prefix('sopc_surgical_clinic')->group(function () {
            Route::get('/', function () {
                return view('departments.clinical_services.outpatient.outpatient_clinics.sopc_surgical_clinic');
            })->name('sopc_surgical_clinic');
        });
        Route::prefix('tb')->group(function () {
            Route::get('/', function () {
                return view('departments.clinical_services.outpatient.outpatient_clinics.tb');
            })->name('tb');
        });


        Route::prefix('gynecology')->group(function () {
            Route::get('/', function () {
                return view('departments.clinical_services.outpatient.outpatient_clinics.gynecology');
            })->name('gynecology');
        });

        Route::get('consultant_clinic', 'ClinicalServicesController@consultant_clinic')->name('consultant_clinic');
        Route::group(array('prefix'=>'consultant_clinic'), function () {

        });



        Route::get('general_outpatient', 'ClinicalServicesController@general_outpatient')->name('general_outpatient');
        Route::group(array('prefix'=>'general_outpatient'), function () {

        });

        Route::prefix('doctors_office')->group(function () {
            Route::get('/', function () {
                return view('departments.clinical_services.outpatient.outpatient_clinics.doctors_office_home');
            })->name('doctors_office_home');
        });
        Route::prefix('well_baby')->group(function () {
            Route::get('/', function () {
                return view('departments.clinical_services.outpatient.outpatient_clinics.well_baby');
            })->name('well_baby');
        });


        //emergency department
        Route::prefix('emergency')->group(function () {
            Route::get('/', function () {
                return view('departments/clinical_services/outpatient/outpatient_clinics/emergency/emergency');
            })->name('emergency_home');
        });








        //links to forms
        //nesting multiple groups
    });

});

Route::prefix('administration')->group(function () {
    Route::get('/','AdministrationController@administration_home')->name('administration_home');
    Route::get('/billing', 'AdministrationController@billing')->name('billing');
    Route::post('/billing_post', 'administrationController@billing_post')->name('billing_post');
    Route::get('/official_use', 'AdministrationController@official_use')->name('official_use');
    Route::get('/attendances', 'AdministrationController@attendances')->name('attendances');
    Route::post('/attendances_post', 'AdministrationController@attendances_post')->name('attendances_post');
    Route::post('/official_use_post', 'administrationController@official_use_post')->name('official_use_post');
    Route::get('/patient_information', 'AdministrationController@patient_information')->name('patient_information');
    Route::post('/patient_information_post', 'administrationController@patient_information_post')->name('patient_information_post');
    Route::get('/patient_information_a', 'AdministrationController@patient_information_a')->name('patient_information_a');

    Route::get('/employees', 'AdministrationController@employees')->name('employees');
    Route::post('/employees_post', 'AdministrationController@employees_post')->name('employees_post');

    Route::get('recruitment', 'AdministrationController@recruitment')->name('recruitment');
    Route::post('recruitments_post', 'AdministrationController@recruitments_post')->name('recruitments_post');

});

Route::prefix('stores')->group(function () {
    Route::get('/','StoresController@stores_home')->name('stores_home');
    Route::get('/inventory', 'InventoryController@inventory')->name('stores_inventory');
    Route::prefix('inventory')->group(function () {
        Route::get('/inventoryadjustments', 'InventoryController@inventoryadjustments')->name('inventoryadjustments');
        Route::post('/inventoryadjustments_post', 'InventoryController@inventoryadjustments_post')->name('inventoryadjustments_post');
        Route::get('/reorderingrules', 'InventoryController@reorderingrules')->name('reorderingrules');
        Route::post('/reorderingrules_post', 'InventoryController@reorderingrules_post')->name('reorderingrules_post');
        Route::get('/scraporders', 'InventoryController@scraporders')->name('scraporders');
        Route::post('/scraporders_post', 'InventoryController@scraporders_post')->name('scraporders_post');
        Route::get('/stockoperations', 'InventoryController@stockoperations')->name('stockoperations');
        Route::post('/stockoperations_post', 'InventoryController@stockoperations_post')->name('stockoperations_post');
    });

    Route::prefix('purchases')->group(function (){

        Route::get('/','StoresController@stores_purchases')->name('stores_purchases');

        Route::prefix('purchase')->group(function (){

            Route::get('/','StoresController@stores_purchase')->name('stores_purchases_purchase');

            Route::prefix('request_for_quotation')->group(function (){

                Route::get('/','StoresController@stores_request_for_quotation')->name('stores_request_for_quotation');

                Route::get('new_products','StoresController@stores_rfq_new_products')->name('stores_rfq_new_products');

                Route::get('new_deliveries_and_invoices','StoresController@stores_rfq_new_deliveries_and_invoices')->name('stores_rfq_new_deliveries_and_invoices');

                Route::post('new_products_post','StoresController@stores_rfq_new_products_post')->name('stores_rfq_new_products_post');

                Route::post('new_deliveries_and_invoices_post','StoresController@stores_rfq_new_deliveries_and_invoices_post')->name('stores_rfq_new_deliveries_and_invoices_post');

            });

            Route::prefix('purchase_orders')->group(function (){
                Route::get('/','StoresController@stores_purchases_purchase_orders')->name('stores_purchases_purchase_orders');

                Route::get('new_products','StoresController@stores_po_new_products')->name('stores_po_new_products');
                Route::post('new_products_post','StoresController@stores_po_new_products_post')->name('stores_po_new_products_post');
                Route::get('new_deliveries_and_invoices','StoresController@stores_po_new_deliveries_and_invoices')->name('stores_po_new_deliveries_and_invoices');
                Route::post('new_deliveries_and_invoices_post','StoresController@stores_po_new_deliveries_and_invoices_post')->name('stores_po_new_deliveries_and_invoices_post');
            });


            Route::get('vendors','StoresController@stores_purchase_vendors')->name('stores_purchase_vendors');
            Route::post('vendors_post','StoresServicesController@stores_purchase_vendors_post')->name('stores_purchase_vendors_post');

            Route::get('products','StoresController@stores_purchase_products')->name('stores_purchase_products');
            Route::post('products_post','StoresServicesController@stores_purchase_products_post')->name('stores_purchase_products_post');

        });

        Route::prefix('control')->group(function (){

            Route::get('/','StoresController@stores_control')->name('stores_purchases_control');

            Route::get('incoming_products','StoresController@stores_control_incoming_products')->name('stores_control_incoming_products');
            Route::post('incoming_products_post','StoresController@stores_control_incoming_products_post')->name('stores_control_incoming_products_post');
            Route::get('vendor_bills','StoresController@stores_control_vendor_bills')->name('stores_control_vendor_bills');
            Route::post('vendor_bills_post','StoresController@stores_control_vendor_bills_post')->name('stores_control_vendor_bills_post');


        });

        Route::prefix('reporting')->group(function (){
            Route::get('/','StoresController@stores_reporting')->name('stores_purchases_reporting');
        });

    });



    Route::get('/requests', 'StoresController@requests')->name('requests');
    Route::post('/requests_post', 'StoresController@requests_post')->name('requests_post');

    Route::get('/suppliers', 'StoresController@suppliers')->name('suppliers');
    Route::post('/suppliers_post', 'StoresController@suppliers_post')->name('suppliers_post');

    Route::get('/requisitions', 'StoresController@requisitions')->name('requisitions');
    Route::post('/requisitions_post', 'StoresController@requisitions_post')->name('requisitions_post');
});

Route::prefix('pharmaceutical_services')->group(function () {
    Route::get('/','PharmaceuticalServicesController@pharmacy_home')->name('pharmaceuticalservices');
    Route::get('/inventory', 'PharmaceuticalServicesController@inventory_home')->name('pharmacy_inventory');
    Route::prefix('inventory')->group(function () {
        Route::get('/inventoryadjustments', 'PharmaceuticalServicesController@inventoryadjustments')->name('pharmacy_inventoryadjustments');
        Route::post('/inventoryadjustments_post', 'PharmaceuticalServicesController@inventoryadjustments_post')->name('pharmacy_inventoryadjustments_post');
        Route::get('/reorderingrules', 'PharmaceuticalServicesController@reorderingrules')->name('pharmacy_reorderingrules');
        Route::post('/reorderingrules_post', 'PharmaceuticalServicesController@reorderingrules_post')->name('pharmacy_reorderingrules_post');
        Route::get('/scraporders', 'PharmaceuticalServicesController@scraporders')->name('pharmacy_scraporders');
        Route::post('/scraporders_post', 'PharmaceuticalServicesController@scraporders_post')->name('pharmacy_scraporders_post');
        Route::get('/stockoperations', 'PharmaceuticalServicesController@stockoperations')->name('pharmacy_stockoperations');
        Route::post('/stockoperations_post', 'PharmaceuticalServicesController@stockoperations_post')->name('pharmacy_stockoperations_post');
//        Route::get('pharmacy_withdrawal_form', 'PharmaceuticalServicesController@pharmacy_withdrawal_form')->name('pharmacy_withdrawal_form');
//        Route::post('pharmacy_withdrawal_form_post', 'PharmaceuticalServicesController@pharmacy_withdrawal_form_post')->name('pharmacy_withdrawal_form_post');
    });

    Route::prefix('purchases')->group(function (){

        Route::get('/','PharmaceuticalServicesController@pharmacy_purchases')->name('pharmacy_purchases');

        Route::prefix('purchase')->group(function (){

            Route::get('/','PharmaceuticalServicesController@pharmacy_purchase')->name('pharmacy_purchases_purchase');

            Route::prefix('request_for_quotation')->group(function (){

                Route::get('/','PharmaceuticalServicesController@pharmacy_request_for_quotation')->name('pharmacy_request_for_quotation');

                Route::get('new_products','PharmaceuticalServicesController@pharmacy_rfq_new_products')->name('pharmacy_rfq_new_products');
                Route::post('new_products_post','PharmaceuticalServicesController@pharmacy_rfq_new_products_post')->name('pharmacy_rfq_new_products_post');

                Route::get('new_deliveries_and_invoices','PharmaceuticalServicesController@pharmacy_rfq_new_deliveries_and_invoices')->name('pharmacy_rfq_new_deliveries_and_invoices');
                Route::post('new_deliveries_and_invoices_post','PharmaceuticalServicesController@pharmacy_rfq_new_deliveries_and_invoices_post')->name('pharmacy_rfq_new_deliveries_and_invoices_post');

            });

            Route::prefix('purchase_orders')->group(function (){
                Route::get('/','PharmaceuticalServicesController@pharmacy_purchases_purchase_orders')->name('pharmacy_purchases_purchase_orders');

                Route::get('new_products','PharmaceuticalServicesController@pharmacy_po_new_products')->name('pharmacy_po_new_products');
                Route::post('new_products_post','PharmaceuticalServicesController@pharmacy_po_new_products_post')->name('pharmacy_po_new_products_post');
                Route::get('new_deliveries_and_invoices','PharmaceuticalServicesController@pharmacy_po_new_deliveries_and_invoices')->name('pharmacy_po_new_deliveries_and_invoices');
                Route::post('new_deliveries_and_invoices_post','PharmaceuticalServicesController@pharmacy_po_new_deliveries_and_invoices_post')->name('pharmacy_po_new_deliveries_and_invoices_post');
            });

            Route::get('vendors','PharmaceuticalServicesController@pharmacy_purchase_vendors')->name('pharmacy_purchase_vendors');
            Route::post('vendors_post','PharmaceuticalServicesController@pharmacy_purchase_vendors_post')->name('pharmacy_purchase_vendors_post');

            Route::get('products','PharmaceuticalServicesController@pharmacy_purchase_products')->name('pharmacy_purchase_products');
            Route::post('products_post','PharmaceuticalServicesController@pharmacy_purchase_products_post')->name('pharmacy_purchase_products_post');

        });

        Route::prefix('control')->group(function (){

            Route::get('/','PharmaceuticalServicesController@pharmacy_control')->name('pharmacy_purchases_control');

            Route::get('incoming_products','PharmaceuticalServicesController@pharmacy_control_incoming_products')->name('pharmacy_control_incoming_products');
            Route::post('incoming_products_post','PharmaceuticalServicesController@pharmacy_control_incoming_products_post')->name('pharmacy_control_incoming_products_post');
            Route::get('vendor_bills','PharmaceuticalServicesController@pharmacy_control_vendor_bills')->name('pharmacy_control_vendor_bills');
            Route::post('vendor_bills_post','PharmaceuticalServicesController@pharmacy_control_vendor_bills_post')->name('pharmacy_control_vendor_bills_post');


        });

        Route::prefix('reporting')->group(function (){
            Route::get('/','PharmaceuticalServicesController@pharmacy_reporting')->name('pharmacy_purchases_reporting');
        });

    });
});


Route::prefix('patient_profile')->group(function () {

    Route::get('login','PatientProfileController@login')->name('patient_login');
    Route::post('login_post','PatientProfileController@login_post')->name('patient_login_post');

    Route::get('register','PatientProfileController@register')->name('patient_register');
    Route::post('register_post','PatientProfileController@register_post')->name('patient_register_post');

    Route::post('patient_logout','PatientProfileController@logout')->name('patient_logout');

    Route::get('patient_appointments', 'PatientProfileController@patient_appointments')->name('patient_appointments');
    Route::get('emergency_services', 'PatientProfileController@emergency_services')->name('emergency_services');
    Route::get('patient_homebased', 'PatientProfileController@patient_homebased')->name('patient_homebased');
    Route::get('patient_home', 'PatientProfileController@patient_home')->name('patient_home');
    Route::get('patient_cards', 'PatientProfileController@patient_cards')->name('patient_cards');
    Route::get('patient_forms', 'PatientProfileController@patient_forms')->name('patient_forms');
    Route::get('patient_booklets', 'PatientProfileController@patient_booklets')->name('patient_booklets');
    Route::get('case_summary', 'PatientProfileController@case_summary')->name('case_summary');
//    Route::get('prescription_form', 'PatientProfileController@prescription_form')->name('prescription_form');
//    Route::get('allergy_form', 'PatientProfileController@allergy_form')->name('allergy_form');
//    Route::get('laboratory_report_sheet', 'PatientProfileController@laboratory_report_sheet')->name('laboratory_report_sheet');
//    Route::get('radiology_report_sheet', 'PatientProfileController@radiology_report_sheet')->name('radiology_report_sheet');
    Route::get('childhealthcard1', 'PatientProfileController@childhealthcard1')->name('childhealthcard1');
    Route::get('physical', 'PatientProfileController@physical')->name('physical');
    Route::get('presentpregnancy', 'PatientProfileController@presentpregnancy')->name('presentpregnancy');
    Route::get('weightchart', 'PatientProfileController@weightchart')->name('weightchart');
    Route::get('childmonitoring', 'PatientProfileController@childmonitoring')->name('childmonitoring');
    Route::get('previouspregnancy', 'PatientProfileController@previouspregnancy')->name('previouspregnancy');
    Route::get('immunization', 'PatientProfileController@immunization')->name('immunization');
    Route::get('attendancecard', 'PatientProfileController@attendancecardcard')->name('attendancecardcard');
    Route::get('telemedicine', 'PatientProfileController@telemedicine')->name('telemedicine');
    Route::get('ambulance', 'PatientProfileController@ambulance')->name('ambulance');
    Route::get('firstaid', 'PatientProfileController@firstaid')->name('firstaid');
    Route::get('hospitals', 'PatientProfileController@hospitals')->name('hospitals');
    Route::get('agencies', 'PatientProfileController@agencies')->name('agencies');
    Route::get('nurse', 'PatientProfileController@nurse')->name('nurse');
//    Route::get('prescription', 'PatientProfileController@prescription')->name('prescription');
    Route::get('yellow', 'PatientProfileController@yellow')->name('yellow');
    Route::get('registration', 'PatientProfileController@registration')->name('registration');
    Route::get('registration_data', 'PatientProfileController@registration_data')->name('registration_data');
    Route::get('medical_surgical', 'PatientProfileController@medical_surgical')->name('medical_surgical');
    Route::get('previous_pregnancy', 'PatientProfileController@previous_pregnancy')->name('previous_pregnancy');
    Route::get('general_information', 'PatientProfileController@general_information')->name('general_information');
    Route::get('weight', 'PatientProfileController@weight')->name('weight');
    Route::get('present_pregnancy', 'PatientProfileController@present_pregnancy')->name('present_pregnancy');
    Route::get('anc_generalinformation', 'PatientProfileController@anc_generalinformation')->name('anc_generalinformation');
    Route::get('preventive_services', 'PatientProfileController@preventive_services')->name('preventive_services');
    Route::get('delivery', 'PatientProfileController@delivery')->name('delivery');
    Route::get('postnatal_examination', 'PatientProfileController@postnatal_examination')->name('postnatal_examination');
    Route::get('family_planning', 'PatientProfileController@family_planning')->name('family_planning');
    Route::get('clinical_notes', 'PatientProfileController@clinical_notes')->name('clinical_notes');

    Route::get('immunization_card', 'PatientProfileController@immunization_card')->name('immunization_card');
    Route::get('vit_a', 'PatientProfileController@vit_a')->name('vit_a');
    Route::get('supplemental_vaccines', 'PatientProfileController@supplemental_vaccines')->name('supplemental_vaccines');
    Route::get('milestones_chart', 'PatientProfileController@milestones_chart')->name('milestones_chart');
    Route::get('id_children', 'PatientProfileController@id_children')->name('id_children');
    Route::get('co_trimoxazole', 'PatientProfileController@co_trimoxazole')->name('co_trimoxazole');
    Route::get('immunologic', 'PatientProfileController@immunologic')->name('immunologic');
    Route::get('health_worker', 'PatientProfileController@health_worker')->name('health_worker');

});

Route::prefix('/manage_accounts')->group(function () {
    Route::get('/profile', 'AccountsManagementController@profile')->name('profile');
    Route::post('/profile_avatar_post', 'AccountsManagementController@profile_avatar_post')->name('profile_avatar_post');
    Route::post('/profile_cover_post', 'AccountsManagementController@profile_cover_post')->name('profile_cover_post');
});

//hospital page
Route::prefix('/hospital_admin')->group(function () {
    Route::get('/hospital_profile', 'InstitutionController@hospital_profile')->name('hospital_profile');
    Route::post('/update_hospital_profile', 'InstitutionController@update_hospital_profile')->name('update_hospital_profile');
    Route::get('/manage_users', 'InstitutionController@manage_users')->name('manage_users');
    Route::post('/manage_users/{user_id}', 'InstitutionController@admin_update_profile')->name('admin_update_profile');
    Route::post('/set_logo', 'InstitutionController@set_logo')->name('set_logo');
    Route::post('/delete_profile/{user_id}', 'InstitutionController@delete_profile')->name('delete_profile');
    Route::post('/make_admin/{user_id}', 'InstitutionController@make_admin')->name('make_admin');
    Route::post('/remove_admin/{user_id}', 'InstitutionController@remove_admin')->name('remove_admin');
});

Route::prefix('/register')->group(function () {
    Route::get('/institution', 'InstitutionController@register_institution')->name('institution');
    Route::post('/institution_post', 'InstitutionController@create')->name('institution_post');
});

 Route::get('/import', 'ImportController@getImport')->name('import');
Route::post('/import_parse', 'ImportController@parseImport')->name('import_parse');
Route::post('/import_process', 'ImportController@processImport')->name('import_process');
Route::get('/contact', 'ImportController@contact')->name('contact');