<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiagnosticServicesMoh209sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diagnostic_services_moh209s', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date');
            $table->integer('opd_no');
            $table->integer('xray_no');
            $table->string('full_names');
            $table->integer('age_in_years');
            $table->string('sex');
            $table->string('sub_location');
            $table->string('village_estate');
            $table->string('address');
            $table->string('xray_examination_type');
            $table->string('referral');
            $table->integer('amount_charged');
            $table->string('remarks');
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
        Schema::dropIfExists('diagnostic_services_moh209s');
    }
}
