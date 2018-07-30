<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClinicalservicesBloodDonationRequestformsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clinicalservices_blood_donation_requestforms', function (Blueprint $table) {
            $table->increments('id');

           $table->string('patient_name')->nullable();
           $table->string('ward')->nullable();
           $table->string('ip_no')->nullable();
           $table->string('requesting')->nullable();
           $table->date('date')->nullable();
           $table->text('comments')->nullable();







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
        Schema::dropIfExists('clinicalservices_blood_donation_requestforms');
    }
}
