<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClinicalServicesPharmacyWithdrawalFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clinical_services_pharmacy_withdrawal_forms', function (Blueprint $table) {
            $table->increments('id');

            $table->string('bio_patient_name')->nullable();
            $table->string('bio_ip_no')->nullable();
            $table->date('bio_date')->nullable();
            $table->integer('bio_age')->nullable();
            $table->string('bio_ward')->nullable();
            $table->string('bio_bed_number')->nullable();
            $table->string('bio_sex')->nullable();
            $table->string('name')->nullable();
            $table->string('sex')->nullable();
            $table->integer('age')->nullable();
            $table->string('ward')->nullable();
            $table->string('doa')->nullable();
            $table->string('dod')->nullable();
            $table->string('unit_no')->nullable();
            $table->date('date_a')->nullable();
            $table->string('description')->nullable();
            $table->integer('total_returned')->nullable();
            $table->integer('unit_price')->nullable();
            $table->integer('total_cost')->nullable();
            $table->string('ward_withdrawal')->nullable();
            $table->string('sign')->nullable();
            $table->string('name_a')->nullable();
            $table->string('designation')->nullable();
            $table->string('sign_a')->nullable();
            $table->string('department')->nullable();
            $table->string('name_b')->nullable();
            $table->string('sign_b')->nullable();



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
        Schema::dropIfExists('clinical_services_pharmacy_withdrawal_forms');
    }
}
