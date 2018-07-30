<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIpomChartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ipom_charts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('ip_number');
            $table->date('date');
            $table->string('dob');
            $table->string('ward');
            $table->string('bed');
            $table->string('sex');
            $table->string('time');
            $table->string('gcs');
            $table->string('bp');
            $table->string('hr');
            $table->string('rr');
            $table->string('t');
            $table->string('bleeding');
            $table->string('feeding');
            $table->string('pain');
            $table->string('ivfs');
            $table->string('medication');
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
        Schema::dropIfExists('ipom_charts');
    }
}
