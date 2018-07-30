<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clinicalservices_ecgform extends Model
{

    protected $fillable = [

        'bio_patient_name',
        'bio_ip_no',
        'bio_date',

        'bio_ward',
        'bio_bed_number',
        'bio_place_of_birth',
        'bio_age',
        'bio_sex',
        'bio_telephone_number',
        'bio_address',
        'bio_bed_nationality',
        'bio_bed_date',
        'bio_bed_time',
        'patient_name',
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
        'printed'
    ];
}
