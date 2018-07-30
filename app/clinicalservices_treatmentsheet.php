<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clinicalservices_treatmentsheet extends Model
{
    protected $fillable = [

        'name',
'ip_no',
'sex',
'age',
'ward',
'bed',
'consultant',
'date',
'drug',
'dose',
'rate',
'frequency_duration',
'name_signature',
'time',
'dates',
'drug_takens',
'doses',
'rates',
'frequency_durations',
'name_signatures',
'times'
    ];
}
