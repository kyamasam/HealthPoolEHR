<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clinicalservices_blood_donation_requestform extends Model
{
    protected $fillable=[
        'patient_name',
'ward',
'ip_no',
'requesting',
'date',
'comments'
    ];
}
