<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clinical_services_pharmacy_withdrawal_form extends Model
{
    protected $fillable=[
        'bio_patient_name',
'bio_ip_no',
'bio_date',
'bio_age',
'bio_ward',
'bio_bed_number',
'bio_sex',
'name',
'sex',
'age',
'ward',
'doa',
'dod',
'unit_no',
'date_a',
'description',
'total_returned',
'unit_price',
'total_cost',
'ward_withdrawal',
'sign',
'name_a',
'designation',
'sign_a',
'department',
'name_b',
'sign_b'
    ];

}
