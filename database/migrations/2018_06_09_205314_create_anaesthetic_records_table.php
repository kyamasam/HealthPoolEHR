<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnaestheticRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anaesthetic_records', function (Blueprint $table) {
            $table->increments('id');
            $table->string('op_ip_number');
            $table->string('ward_clinic');
            $table->date('date');
            $table->string('operation');
            $table->string('anaesthetists');
            $table->string('surgeons');
            $table->string('type_of_premedication');
            $table->time('time_given');
            $table->string('effect');
            $table->integer('weight');
            $table->integer('height');
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
        Schema::dropIfExists('anaesthetic_records');
    }
}
