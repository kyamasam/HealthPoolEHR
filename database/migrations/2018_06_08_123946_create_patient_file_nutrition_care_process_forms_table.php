<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientFileNutritionCareProcessFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_file_nutrition_care_process_forms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('patient_name');
            $table->date('doa');
            $table->date('dod');
            $table->string('ward');
            $table->string('bed');
            $table->integer('ip_no');
            $table->integer('age');
            $table->string('sex');
            $table->string('principle_diagnosis');
            $table->integer('height');
            $table->integer('weight');
            $table->integer('bmi');
            $table->integer('muac');
            $table->integer('z_score');
            $table->string('others');
            $table->string('physical_exam');
            $table->string('medications');
            $table->string('procedures');
            $table->string('prescribed_diet');
            $table->string('problem1');
            $table->string('etiology');
            $table->string('problem2');
            $table->string('etiology1');
            $table->string('signs_symptoms');
            $table->string('nutrition_prescription');
            $table->string('prescribed_diet1');
            $table->integer('prot');
            $table->integer('chos');
            $table->integer('fat');
            $table->integer('kcals');
            $table->string('others1');
            $table->string('route_of_administration');
            $table->string('other_interventions');
            $table->string('nutritionist');
            $table->string('sign');
            $table->date('date');
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
        Schema::dropIfExists('patient_file_nutrition_care_process_forms');
    }
}
