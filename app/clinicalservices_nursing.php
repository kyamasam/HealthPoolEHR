<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clinicalservices_nursing extends Model
{
    protected $fillable=['bio_patient_name',
        'bio_ip_no',
        'bio_date',
        'bio_age',
        'bio_ward',
        'bio_bed_number',
        'bio_sex',
        'nutrition_day'
,'nutrition_night'
,'psychological_day'
,'psychological_night'
,'hygiene_day'
,'hygiene_night'
,'exercises_day'
,'exercises_night'
,'waste_day'
,'waste_night'
,'safety_day'
,'safety_night'
,'sociology_day'
,'sociology_night'
,'health_day'
,'health_night'
,'rest_day'
,'rest_night'
,'infection_day'
,'infection_night'
,'visit_day'
,'visit_night'
,'nurse_day'
,'nurse_night'
        ,'hod_day',
        'hod_night'
    ];
}
