<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClinicalMoh303sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clinical_moh_303s', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date');
            $table->integer('anc_visists');
            $table->string('inpatient_no');
            $table->string('full_names');
            $table->integer('age');
            $table->string('marital_status');
            $table->string('sub_location');
            $table->string('village');
            $table->string('parity');
            $table->string('gravidae');
            $table->string('lmp');
            $table->string('edd');
            $table->string('gestation_at_birth');
            $table->string('diagnosis');
            $table->date('date_of_delivery');
            $table->integer('duration_from_onset_of_labor');
            $table->string('mode_of_delivery');
            $table->string('apgar');
            $table->string('baby_life');
            $table->string('baby_weight');
            $table->string('sex_of_baby');
            $table->string('mothers_condition_after_delivery');
            $table->integer('blood_loss');
            $table->binary('placenta_complete');
            $table->binary('counseled_and_tested_anc');
            $table->binary('counseled_and_tested_mat');
            $table->integer('partner_status');
            $table->string('vdlr_serology_status');
            $table->binary('avr_drud_given_mother');
            $table->binary('avr_drud_given_baby');
            $table->binary('vit_a_supplementation_mother');
            $table->integer('food_options_baby');
            $table->string('delivery_conducted_by');
            $table->string('birth_notification');
            $table->string('date_of_discharge');
            $table->string('condition_of_baby_discharge');
            $table->string('comments');


            //diagnosis

            $table->string('no_with_aph');
            $table->string('no_with_pph');
            $table->string('no_with_eclampsia');
            $table->string('no_with_ruptured_uterus');
            $table->string('no_with_obstructed_labor');
            $table->string('no_with_sepsis');
            $table->string('no_of_normal_deliveries');
            $table->string('no_of_cesarean_sections');
            $table->string('no_of_breech_deliveries');
            $table->string('no_of_assisted_vaginal_deliveries');
            $table->string('total_live_births');
            $table->string('no_of_still_births');
            $table->string('no_of_uderweight');
            $table->string('no_of_preterm');
            $table->string('no_of_discharged_alive');
            $table->string('no_of_referrals');
            $table->string('no_of_neonatal_deaths');
            $table->string('no_of_maternal_death');
            $table->string('no_counselled_of_hiv');
            $table->string('no_tested_with_hiv');
            $table->string('no_of_hiv');
            $table->string('no_issued_with_arvs');
            $table->string('no_of_infants_nevirapine');
            $table->string('no_of_deliveries_from_hiv_women');
            $table->string('no_initiated_cotrimoxaxole_infants');
            $table->string('no_referred_follow_up_mothers');
            $table->string('no_referred_follow_up_partners');
            $table->string('department');


            $table->string('remarks');


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
        Schema::dropIfExists('clinical_moh_303s');
    }
}
