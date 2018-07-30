<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clinicalservices_prescriptionform extends Model
{
    protected $fillable=['bio_patient_name',
        'bio_ip_no',
        'bio_date',
        'bio_age',
        'bio_ward',
        'bio_bed_number',
        'bio_sex',
        'date',
        'patient',
        'cell',
        'location',
        'other_names',
        'sex',
        'allergies',
        'age',
        'weight',
        'report',
        'substitute',
        'dont_substitute',
        'doctors_name',
        'time',
        'signature',
        'branch'];  //
}
