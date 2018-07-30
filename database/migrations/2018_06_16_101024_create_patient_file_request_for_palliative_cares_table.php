<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientFileRequestForPalliativeCaresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_file_request_for_palliative_cares', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date');
            $table->string('name_of_patient');
            $table->string('unit_no');
            $table->string('dob');
            $table->integer('age');
            $table->string('gender');
            $table->date('date1');
            $table->string('referred_from');
            $table->string('bed_no');
            $table->string('previous_treatment');
            $table->string('current_medication');
            $table->string('reason_for_referral');
            $table->string('urgent');
            $table->string('referred_by1');
            $table->string('designation1');
            $table->string('signature1');
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
        Schema::dropIfExists('patient_file_request_for_palliative_cares');
    }
}
