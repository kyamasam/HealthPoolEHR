<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConsentFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consent_forms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ipno');
            $table->string('name');
            $table->string('number');
            $table->string('address');
            $table->string('clinic_ward');
            $table->date('date_of_admission');
            $table->date('date_of_discharge');
            $table->string('meal');
            $table->string('day');
            $table->string('comments');
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
        Schema::dropIfExists('consent_forms');
    }
}
