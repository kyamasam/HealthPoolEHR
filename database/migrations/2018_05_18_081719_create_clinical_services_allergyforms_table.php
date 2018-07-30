<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClinicalServicesAllergyformsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clinical_services_allergyforms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('bio_patient_name')->nullable();
            $table->string('bio_ip_no')->nullable();
            $table->string('bio_date')->nullable();
            $table->string('bio_age')->nullable();
            $table->string('bio_ward')->nullable();
            $table->string('bio_bed_number')->nullable();
            $table->string('bio_sex')->nullable();
            $table->string('admissiondate')->nullable();
            $table->string('ward')->nullable();
            $table->string('penincillin')->nullable();
            $table->string('allergy')->nullable();
            $table->string('hydrocortisone')->nullable();
            $table->string('signature')->nullable();
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
        Schema::dropIfExists('clinical_services_allergyforms');
    }
}
