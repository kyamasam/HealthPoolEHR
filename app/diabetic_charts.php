<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class diabetic_charts extends Model
{
    protected $fillable=[
        'patient_name','ip_number','date_of_recording','time_of_recording','sugar_testing','has_acetone','insulin_dose','oral_drug_dose','blood_sugar_dose','weight_dose'];
}
