<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClinicalservicesConsultationrequestformsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clinicalservices_consultationrequestforms', function (Blueprint $table) {
            $table->increments('id');

            $table->string('bio_patient_name')->nullable();
            $table->string('bio_ip_no')->nullable();
            $table->date('bio_date')->nullable();
            $table->integer('bio_age')->nullable();
            $table->string('bio_ward')->nullable();
            $table->string('bio_bed_number')->nullable();
            $table->string('bio_sex')->nullable();
            $table->string('dr_mr')->nullable();
            $table->string('in_the')->nullable();
            $table->string('full_name_of_patient')->nullable();
            $table->string('referred_from_ward')->nullable();
            $table->string('bed_number')->nullable();
            $table->string('clinic')->nullable();
            $table->string('unit_no')->nullable();
            $table->string('casualty_no')->nullable();
            $table->string('others')->nullable();
            $table->string('diagnosis')->nullable();
            $table->string('reasons_for_consultations')->nullable();
            $table->string('urgent')->nullable();
            $table->string('signature')->nullable();
            $table->string('name_printed')->nullable();

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
        Schema::dropIfExists('clinicalservices_consultationrequestforms');
    }
}
