<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clinical_services_allergyform extends Model
{
    protected $fillable=['bio_patient_name','bio_ip_no','bio_date','bio_age','bio_ward','bio_bed_number','bio_sex','admissiondate','ward','penincillin','allergy','hydrocortisone','signature'];//
}
