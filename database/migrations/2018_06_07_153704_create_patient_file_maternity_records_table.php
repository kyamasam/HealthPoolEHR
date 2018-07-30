<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientFileMaternityRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_file_maternity_records', function (Blueprint $table) {
            $table->increments('id');
            $table->text('name');
            $table->integer('ip_number');
            $table->date('date_of_admission');
            $table->integer('age');
            $table->text('marital_status');
            $table->text('residence');
            $table->text('education_level');
            $table->text('occupation');
            $table->text('next_of_kin');
            $table->integer('telephone_number_of_kin');
            $table->text('present_history');
            $table->text('pastt_history');
            $table->text('menarchy');
            $table->integer('cycle');
            $table->integer('duration');
            $table->integer('flow');
            $table->text('fp');
            $table->text('anc');
            $table->text('tt');
            $table->text('hb');
            $table->text('vdrl');
            $table->text('blood_group');
            $table->text('hiv');
            $table->text('hiv_status_of_partner');
            $table->text('lmp');
            $table->text('edd');
            $table->string('med');
            $table->string('parity');
            $table->string('gravida');
            $table->integer('year');
            $table->string('place_of_delivery');
            $table->string('type_of_delivery');
            $table->string('sex');
            $table->integer('weight');
            $table->date('date');
            $table->string('peuperium');
            $table->integer('year1');
            $table->string('place_of_delivery1');
            $table->string('type_of_delivery1');
            $table->string('sex1');
            $table->integer('weight1');
            $table->date('date1');
            $table->string('peuperium1');
            $table->integer('bp');
            $table->integer('pulse');
            $table->integer('rr');
            $table->integer('temperature');
            $table->integer('fh_rate');
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
        Schema::dropIfExists('patient_file_maternity_records');
    }
}
