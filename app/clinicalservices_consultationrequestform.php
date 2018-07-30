<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clinicalservices_consultationrequestform extends Model
{

protected $fillable=[

    'bio_patient_name',
'bio_ip_no',
'bio_date',
'bio_age',
'bio_ward',
'bio_bed_number',
'bio_sex',
'dr_mr',
'in_the',
'full_name_of_patient',
'referred_from_ward',
'bed_number',
'clinic',
'unit_no',
'casualty_no',
'others',
'diagnosis',
'reasons_for_consultations',
'urgent',
'signature',
'name_printed'

];

}
