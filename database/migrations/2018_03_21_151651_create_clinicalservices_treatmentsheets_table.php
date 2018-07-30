<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClinicalservicesTreatmentsheetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clinicalservices_treatmentsheets', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name')->nullable();
            $table->string('ip_no')->nullable();
            $table->string('sex')->nullable();
            $table->integer('age')->nullable();
            $table->string('ward')->nullable();
            $table->string('bed')->nullable();
            $table->string('consultant')->nullable();

            $table->date('date')->nullable();
            $table->string('drug')->nullable();
            $table->string('dose')->nullable();
            $table->string('rate')->nullable();
            $table->string('frequency_duration')->nullable();
            $table->string('name_signature')->nullable();
            $table->string('time')->nullable();

            $table->date('dates')->nullable();
            $table->string('drug_takens')->nullable();
            $table->string('doses')->nullable();
            $table->string('rates')->nullable();
            $table->string('frequency_durations')->nullable();
            $table->string('name_signatures')->nullable();

            $table->string('times')->nullable();


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
        Schema::dropIfExists('clinicalservices_treatmentsheets');
    }
}
