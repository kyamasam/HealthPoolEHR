<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class icu_observation_chart extends Model
{
    protected $fillable =[
        'name_of_patient',
        'ip_number',
        'date',
        'dob',
        'sex',
        'day_in_unit',
        'diagnosis',
        'treatment',
        'time',
    ];
}
