<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clinicalservices_eeg_report extends Model
{
    protected $fillable=['patient_name',
'unit_number',
'age',
'sex',
'ward_clinic',
'bed',
'previous_ecg',
'report_to_be_sent_to',
'medication',
'diuretics',
'provisional_diagnosis',
'date',
'signed',
'printed'];
}
