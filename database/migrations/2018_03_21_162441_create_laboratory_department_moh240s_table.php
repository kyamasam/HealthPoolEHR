<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLaboratoryDepartmentMoh240sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laboratory_department_moh240s', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date');
            $table->string('opd_ip_ref_no');
            $table->integer('lab_no');
            $table->string('revisit');
            $table->string('full_names');
            $table->integer('age_in_years');
            $table->string('sex');
            $table->string('village_estate');
            $table->string('address');
            $table->string('clinical_diagnosis');
            $table->string('prior_treatment');
            $table->string('type_of_specimen');
            $table->string('condition_specimen');
            $table->string('investigation_required');
            $table->date('date_sample_collected');
            $table->date('date_sample_received');
            $table->string('clinician_name');
            $table->date('date_sample_analyzed');
            $table->string('results');
            $table->date('date_results_dispatched');
            $table->integer('amount_charged');
            $table->string('comments');
            $table->string('name_of_analyzing_officer');
            $table->string('signature');
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
        Schema::dropIfExists('laboratory_department_moh240s');
    }
}
