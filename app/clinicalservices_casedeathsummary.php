<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clinicalservices_casedeathsummary extends Model
{
    //
    protected $fillable = [
        'op_ip_no',
        'name',
        'age',
        'address',
        'clinic_ward',
        'date_of_admission',
        'date_of_discharge',
        'consultants',
        'diagnosis',
        'complaints',
        'physical_findings',
        'investigations',
        'management',
        'outcome_discharge_instructions',
        'name_of_clinic',
        'firm',
        'day',
        'date',
        'time',
        'doctors_name',
        'sign',
        'department',
    ];
}
