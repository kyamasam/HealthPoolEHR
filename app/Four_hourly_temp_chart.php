<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Four_hourly_temp_chart extends Model
{
    protected $fillable=['patient_name','dob','lp_number','date_of_admission','date_of_disease','time_for_measurement','r','p','t','pulse','resp','bowels','urine'];
}
