<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIcuObservationChartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('icu_observation_charts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_of_patient');
            $table->string('ip_number');
            $table->date('date');
            $table->date('dob');
            $table->string('sex');
            $table->string('day_in_unit');
            $table->string('diagnosis');
            $table->string('treatment');
            $table->time('time');
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
        Schema::dropIfExists('icu_observation_charts');
    }
}
