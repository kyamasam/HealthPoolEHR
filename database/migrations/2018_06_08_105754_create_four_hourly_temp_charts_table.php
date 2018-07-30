<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFourHourlyTempChartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('four_hourly_temp_charts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('patient_name');
            $table->date('dob');
            $table->string('lp_number');
            $table->date('date_of_admission');
            $table->string('date_of_disease');
            $table->time('time_for_measurement');
            $table->string('r');
            $table->string('p');
            $table->string('t');
            $table->string('pulse');
            $table->string('resp');
            $table->string('bowels');
            $table->string('urine');

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
        Schema::dropIfExists('four_hourly_temp_charts');
    }
}
