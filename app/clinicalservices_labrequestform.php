<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clinicalservices_labrequestform extends Model
{


    protected $fillable=['bio_patient_name',
        'bio_ip_no',
        'bio_date',
        'bio_age',
        'bio_ward',
        'bio_bed_number',
        'bio_sex',
        'date',
        'ipnumber',
        'patient',
        'cell',
        'location',
        'age',
        'weight',
        'sex',
        'clinicalnotes',
        'refferingdoctor',
        'branch',
        'signature',
        'cellb',
        'technologists',
        'time',
        'timeofspecimen',
        'accounts'];//
}
