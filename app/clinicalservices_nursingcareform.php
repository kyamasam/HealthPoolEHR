<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clinicalservices_nursingcareform extends Model
{
    protected $fillable = ['bio_patient_name',
        'bio_ip_no',
        'bio_date',
        'bio_age',
        'bio_ward',
        'bio_bed_number',
        'bio_sex',
        'name',
        'date',
        'diagnosis',
        'time',
        'assessment',
        'nursing_diagnosis',
        'expected_outcome',
        'implementation',
        'rationale',
        'evaluation',
        'signature'];//
}
