<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientFileDietSheetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_file_diet_sheets', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('op_ip_no');
            $table->string('name');
            $table->integer('age');
            $table->string('address');
            $table->string('clinic_ward');
            $table->date('date_of_admission');
            $table->date('date_of_discharge');
            $table->string('comments');
            $table->string('mondayBREAKFAST');
            $table->string('tuesdayBREAKFAST');
            $table->string('wednesdayBREAKFAST');
            $table->string('thursdayBREAKFAST');
            $table->string('fridayBREAKFAST');
            $table->string('saturdayBREAKFAST');
            $table->string('sundayBREAKFAST');
            $table->string('mondaySNACK');
            $table->string('tuesdaySNACK');
            $table->string('wednesdaySNACK');
            $table->string('thursdaySNACK');
            $table->string('fridaySNACK');
            $table->string('saturdaySNACK');
            $table->string('sundaySNACK');
            $table->string('mondayLUNCH');
            $table->string('tuesdayLUNCH');
            $table->string('wednesdayLUNCH');
            $table->string('thursdayLUNCH');
            $table->string('fridayLUNCH');
            $table->string('saturdayLUNCH');
            $table->string('sundayLUNCH');
            $table->string('mondaySNACK1');
            $table->string('tuesdaySNACK1');
            $table->string('wednesdaySNACK1');
            $table->string('thursdaySNACK1');
            $table->string('fridaySNACK1');
            $table->string('saturdaySNACK1');
            $table->string('sundaySNACK1');
            $table->string('mondayDINNER');
            $table->string('tuesdayDINNER');
            $table->string('wednesdayDINNER');
            $table->string('thursdayDINNER');
            $table->string('fridayDINNER');
            $table->string('saturdayDINNER');
            $table->string('sundayDINNER');
            $table->string('mondayBEDTIME');
            $table->string('tuesdayBEDTIME');
            $table->string('wednesdayBEDTIME');
            $table->string('thursdayBEDTIME');
            $table->string('fridayBEDTIME');
            $table->string('saturdayBEDTIME');
            $table->string('sundayBEDTIME');
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
        Schema::dropIfExists('patient_file_diet_sheets');
    }
}
