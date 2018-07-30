<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClinicalservicesEegReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clinicalservices_eeg_reports', function (Blueprint $table) {
            $table->increments('id');

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
        Schema::dropIfExists('clinicalservices_eeg_reports');
    }
}
