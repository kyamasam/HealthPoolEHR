<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class blood_pressure_chart extends Model
{
    protected $fillable=['bio_patient_name','bio_ip_no','bio_date','dob','bio_ward','bio_bed_number','bio_sex'];//
}
