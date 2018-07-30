<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClinicalservicesNursingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clinicalservices_nursings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('bio_patient_name')->nullable();
            $table->string('bio_ip_no')->nullable();
            $table->string('bio_date')->nullable();
            $table->string('bio_age')->nullable();
            $table->string('bio_ward')->nullable();
            $table->string('bio_bed_number')->nullable();
            $table->string('bio_sex')->nullable();

            $table->string('nutrition_day')->nullable();
            $table->string('nutrition_night')->nullable();
            $table->string('psychological_day')->nullable();
            $table->string('psychological_night')->nullable();
            $table->string('hygiene_day')->nullable();
            $table->string('hygiene_night')->nullable();
            $table->string('exercises_day')->nullable();
            $table->string('exercises_night')->nullable();
            $table->string('waste_day')->nullable();
            $table->string('waste_night')->nullable();
            $table->string('safety_day')->nullable();
            $table->string('safety_night')->nullable();
            $table->string('sociology_day')->nullable();
            $table->string('sociology_night')->nullable();
            $table->string('health_day')->nullable();
            $table->string('health_night')->nullable();
            $table->string('rest_day')->nullable();
            $table->string('rest_night')->nullable();
            $table->string('infection_day')->nullable();
            $table->string('infection_night')->nullable();
            $table->string('visit_day')->nullable();
            $table->string('visit_night')->nullable();
            $table->string('nurse_day')->nullable();
            $table->string('nurse_night')->nullable();
            $table->string('hod_day')->nullable();
            $table->string('hod_night')->nullable();

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
        Schema::dropIfExists('clinicalservices_nursings');
    }
}
