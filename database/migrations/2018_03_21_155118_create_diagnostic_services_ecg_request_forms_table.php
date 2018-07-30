<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiagnosticServicesEcgRequestFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diagnostic_services_ecg_request_forms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('patient_name');
            $table->integer('unit_number');
            $table->integer('age');
            $table->string('ward_clinic');
            $table->integer('bed_no');
            $table->string('sex');
            $table->string('previous_ecg');
            $table->string('report_to_be_sent_to');
            $table->string('medication');
            $table->integer('digoxin_diuretics_others');
            $table->string('relevant_history');
            $table->date('date');
            $table->string('signed_by');
            $table->string('printed');
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
        Schema::dropIfExists('diagnostic_services_ecg_request_forms');
    }
}
