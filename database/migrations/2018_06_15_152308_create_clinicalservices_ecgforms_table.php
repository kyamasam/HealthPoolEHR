<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClinicalservicesEcgformsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clinicalservices_ecgforms', function (Blueprint $table) {
            $table->increments('id');


            $table->string( 'bio_patient_name')->nullable();
            $table->string('bio_ip_no')->nullable();
            $table->date('bio_date')->nullable();
            $table->string('bio_ward')->nullable();
            $table->string('bio_bed_number')->nullable();
            $table->string('bio_place_of_birth')->nullable();
            $table->integer('bio_age')->nullable();
            $table->string('bio_sex')->nullable();
            $table->string('bio_telephone_number')->nullable();
            $table->string('bio_address')->nullable();
            $table->string('bio_bed_nationality')->nullable();
            $table->date('bio_bed_date')->nullable();
            $table->time('bio_bed_time')->nullable();

            $table->string('patient_name')->nullable();
            $table->string('unit_number')->nullable();
            $table->integer('age')->nullable();
            $table->string('sex')->nullable();
            $table->string('ward_clinic')->nullable();
            $table->string('bed')->nullable();
            $table->string('previous_ecg')->nullable();
            $table->text('report_to_be_sent_to')->nullable();
            $table->string('medication')->nullable();
            $table->string('diuretics')->nullable();
            $table->string('provisional_diagnosis')->nullable();
            $table->date('date')->nullable();
            $table->string('signed')->nullable();
            $table->string('printed')->nullable();




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
        Schema::dropIfExists('clinicalservices_ecgforms');
    }
}
