<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FluidInOutChart extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fluid_in_out_charts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('op_ip_number');
            $table->string('ward_clinic');
            $table->date('date');
            $table->string('operation');
            $table->string('anaesthetists');
            $table->string('surgeons');
            $table->string('type_of_premedication');
            $table->string('time_given');
            $table->string('effect');
            $table->integer('weight');
            $table->integer('height');
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
        Schema::dropIfExists('fluid_in_out_charts');
    }
}
