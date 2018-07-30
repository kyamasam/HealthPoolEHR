<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClinicalservicesCasedeathsummariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clinicalservices_casedeathsummaries', function (Blueprint $table) {
            $table->increments('id');

            $table->string('op_ip_no');
            $table->string('name');
            $table->string('age');
            $table->string('address');
            $table->string('clinic_ward');
            $table->string('date_of_admission');
            $table->string('date_of_discharge');
            $table->string('consultants');
            $table->string('diagnosis');

            $table->string('complaints');
            $table->string('physical_findings');
            $table->string('investigations');
            $table->string('management');
            $table->string('outcome_discharge_instructions');
            $table->string('name_of_clinic');
            $table->string('firm');
            $table->string('day');
            $table->date('date');
            $table->time('time');
            $table->string('doctors_name');
            $table->string('sign');
            $table->string('department');

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
        Schema::dropIfExists('clinicalservices_casedeathsummaries');
    }
}
