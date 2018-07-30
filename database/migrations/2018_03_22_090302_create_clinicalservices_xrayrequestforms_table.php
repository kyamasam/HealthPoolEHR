<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClinicalservicesXrayrequestformsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clinicalservices_xrayrequestforms', function (Blueprint $table) {
            $table->increments('id');

            $table->date('date')->nullable();
            $table->string('ip_op_number')->nullable();
            $table->string('ref_no')->nullable();
            $table->string('patient')->nullable();
            $table->string('cell')->nullable();
            $table->string('age')->nullable();
            $table->string('weight')->nullable();
            $table->string('sex')->nullable();
            $table->string('clinical_info')->nullable();
            $table->string('lmp')->nullable();
            $table->string('investigation_required')->nullable();
            $table->string('report')->nullable();
            $table->string('referring_doctor')->nullable();
            $table->string('branch')->nullable();
            $table->string('signature')->nullable();
            $table->string('cell2')->nullable();
            $table->string('reported_by')->nullable();
            $table->time('time')->nullable();


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
        Schema::dropIfExists('clinicalservices_xrayrequestforms');
    }
}
