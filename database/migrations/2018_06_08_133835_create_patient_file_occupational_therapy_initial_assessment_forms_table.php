<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientFileOccupationalTherapyInitialAssessmentFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_file_occupational_therapy_initial_assessment_forms', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('age');
            $table->date('date_referred');
            $table->string('sex');
            $table->date('date_of_asessment');
            $table->string('occupational');
            $table->string('diagnosis');
            $table->integer('ot_no');
            $table->string('adressed_by');
            $table->string('referred_by');
            $table->string('signature');
            $table->string('main_complaint');
            $table->string('personal_history');
            $table->string('history');
            $table->string('relevant');
            $table->string('occupational_entail');
            $table->string('activities');
            $table->string('typical_day');
            $table->string('leisure_time');
            $table->string('priorities_in_life');
            $table->string('impairement_prevent');
            $table->string('communicational_skills');
            $table->string('planning');
            $table->string('memory');
            $table->string('organization');
            $table->string('problem_solving');
            $table->string('sensory_processing');
            $table->string('physical_ability');
            $table->string('clients_posture');
            $table->string('clients_mobility');
            $table->string('co_ordination');
            $table->string('clients_muscle');
            $table->string('adls');
            $table->string('barriers');
            $table->string('assistive_devices');
            $table->string('social_support');
            $table->string('eating_skills');
            $table->string('dressing_skils');
            $table->string('hygiene_skills');
            $table->string('domestic_living');
            $table->string('comm_skills');
            $table->string('other');
            $table->string('fine_motor');
            $table->string('handwriting');
            $table->string('gross_motor');
            $table->string('socializing_skills');
            $table->string('pre_vocational');
            $table->string('others');
            $table->string('play_leisure');
            $table->string('no_clear');
            $table->string('intevention');
            $table->string('needforot');
            $table->string('need_extensive');
            $table->string('referral');
            $table->string('ot_issues');
            $table->string('intervention_plan');
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
        Schema::dropIfExists('patient_file_occupational_therapy_initial_assessment_forms');
    }
}
