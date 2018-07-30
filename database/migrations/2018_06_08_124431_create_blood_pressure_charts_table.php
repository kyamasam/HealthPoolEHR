<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBloodPressureChartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blood_pressure_charts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('bio_patient_name');
            $table->string('bio_ip_no');
            $table->date('bio_date');
            $table->date('dob');
            $table->string('bio_ward');
            $table->integer('bio_bed_number');
            $table->string('bio_sex');
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
        Schema::dropIfExists('blood_pressure_charts');
    }
}
