<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClinicalservicesContinuationFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clinicalservices_continuation_forms', function (Blueprint $table) {
            $table->increments('id');

            $table->string('bio_patient_name')->nullable();
            $table->string('bio_ip_no')->nullable();
            $table->date('bio_date')->nullable();
            $table->integer('bio_age')->nullable();
            $table->string('bio_ward')->nullable();
            $table->string('bio_bed_number')->nullable();
            $table->string('bio_sex')->nullable();
            $table->string('ip_op_no')->nullable();
            $table->string('name')->nullable();
            $table->integer('age')->nullable();
            $table->string('sex')->nullable();
            $table->string('ward_clinic')->nullable();
            $table->date('date_a')->nullable();
            $table->text('notes')->nullable();



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
        Schema::dropIfExists('clinicalservices_continuation_forms');
    }
}
