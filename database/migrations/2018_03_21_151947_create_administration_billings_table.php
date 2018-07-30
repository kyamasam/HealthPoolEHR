<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdministrationBillingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('administration_billings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_of_person_responsible_for_bill');
            $table->string('address');
            $table->string('phone_number');
            $table->string('occupational');
            $table->string('employer');
            $table->string('employers_address');
            $table->string('employers_phone_no');
            $table->string('contributers_relationship_to_patient');
            $table->string('primary_insurance');
            $table->integer('deposit_paid');
            $table->string('payment_method');
            $table->string('receipt_number');
            $table->string('previous_account_balance');
            $table->string('customer_type');
            $table->string('patient_guardian_signature');
            $table->date('date');
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
        Schema::dropIfExists('administration_billings');
    }
}
