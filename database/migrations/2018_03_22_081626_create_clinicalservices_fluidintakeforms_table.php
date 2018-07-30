<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClinicalservicesFluidintakeformsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clinicalservices_fluidintakeforms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('ip_no');
            $table->string('age');
            $table->string('sex');
            $table->string('ward');
            $table->string('bed');
            $table->string('sex2');
            $table->date('date');
            $table->string('body_weight');
            $table->string('balance_yesterday');
            $table->time('time');
            $table->string('systole');
            $table->string('type_of_fluid');
            $table->string('litra');
            $table->string('oral');
            $table->string('noso_gastric_sunction');
            $table->string('vomitous');
            $table->string('dried');
            $table->string('departments');
            $table->string('total_output');
            $table->string('total_intake');
            $table->string('balance_for_today');


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
        Schema::dropIfExists('clinicalservices_fluidintakeforms');
    }
}
