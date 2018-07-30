<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiabeticChartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diabetic_charts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('patient_name');
            $table->string('ip_number');
            $table->date('date_of_recording');
            $table->time('time_of_recording');
            $table->string('sugar_testing');
            $table->string('has_acetone');
            $table->string('insulin_dose');
            $table->string('oral_drug_dose');
            $table->string('blood_sugar_dose');
            $table->string('weight_dose');
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
        Schema::dropIfExists('diabetic_charts');
    }
}
