<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiagnosticServicesRadiologyRequestFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diagnostic_services_radiology_request_forms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('patient_name');
            $table->integer('hospital_no');
            $table->date('dob');
            $table->integer('age');
            $table->string('gender');
            $table->string('wd_clinic_pvt');
            $table->integer('pt_tel_no');
            $table->string('appointment_date');
            $table->time('time');
            $table->string('portable');
            $table->integer('xray_no');
            $table->integer('int_no');
            $table->integer('charges');
            $table->integer('invoice_no');
            $table->integer('receipt_no');
            $table->integer('nhif_no');
            $table->string('brief_clinical_summary');
            $table->date('date_of_lmp');
            $table->string('1');
            $table->string('1_specification');
            $table->string('1_charge');
            $table->string('2');
            $table->string('2_specification');
            $table->string('2_charge');
            $table->string('3');
            $table->string('3_specification');
            $table->string('3_charge');
            $table->string('4');
            $table->string('4_specification');
            $table->string('4_charge');
            $table->string('5');
            $table->string('5_specification');
            $table->string('5_charge');
            $table->string('6');
            $table->string('6_specification');
            $table->string('6_charge');
            $table->string('7');
            $table->string('7_specification');
            $table->string('7_charge');
            $table->string('8');
            $table->string('8_name');
            $table->string('8_specification');
            $table->string('8_charge');
            $table->string('doctor_name');
            $table->string('signature');
            $table->date('date');
            $table->integer('req_doc_tel_no');
            $table->string('radiographer_name');
            $table->string('signature_radiographer');
            $table->date('date_radiographer');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('diagnostic_services_radiology_request_forms');
    }
}
