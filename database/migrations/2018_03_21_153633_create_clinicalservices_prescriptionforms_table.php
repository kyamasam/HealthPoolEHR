<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClinicalservicesPrescriptionformsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clinicalservices_prescriptionforms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('bio_patient_name')->nullable();
            $table->string('bio_ip_no')->nullable();
            $table->date('bio_date')->nullable();
            $table->string('bio_age')->nullable();
            $table->string('bio_ward')->nullable();
            $table->string('bio_bed_number')->nullable();
            $table->string('bio_sex')->nullable();
            $table->date('date')->nullable();
            $table->string('patient')->nullable();
            $table->string('cell')->nullable();
            $table->string('location')->nullable();
            $table->string('other_names')->nullable();
            $table->string('sex')->nullable();
            $table->string('allergies')->nullable();
            $table->integer('age')->nullable();
            $table->string('weight')->nullable();
            $table->string('report')->nullable();
            $table->string('substitute')->nullable();
            $table->string('dont_substitute')->nullable();
            $table->string('doctors_name')->nullable();
            $table->time('time')->nullable();
            $table->string('signature')->nullable();
            $table->string('branch')->nullable();
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
        Schema::dropIfExists('clinicalservices_prescriptionforms');
    }
}
