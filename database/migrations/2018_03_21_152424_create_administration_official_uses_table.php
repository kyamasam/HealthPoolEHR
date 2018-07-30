<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdministrationOfficialUsesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('administration_official_uses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('admitting_doctor');
            $table->string('ward');
            $table->string('bed_number');
            $table->string('referred_from');
            $table->string('diagnosis');
            $table->string('charge_sheet');
            $table->date('date_of_admission');
            $table->integer('unit_number');
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
        Schema::dropIfExists('administration_official_uses');
    }
}
