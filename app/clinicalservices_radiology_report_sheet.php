<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clinicalservices_radiology_report_sheet extends Model
{
    protected $fillable=['bio_patient_name'
,'bio_ip_no'
,'bio_date'
,'bio_age'
,'bio_ward'
,'bio_bed_number'
,'bio_sex'
,'patient_name'
,'hosp_no'
,'d_o_b'
,'age'
,'gender'
,'wd_clinic_pvt'
,'pt_tel_no'
,'appointment_date'
,'time'
,'portable'
,'xray_no'
,'int_no'
,'charges'
,'invoice_number'
,'receipt_cs_no'
,'nhif_no'
,'brief_clinical_summary'
,'date_of_lmp'
,'tick'
,'specification'
,'doctors_name'
,'signature'
,'date_a'
,'radiographer_name'
,'signature_a'
,'date_b'
    ];
}
