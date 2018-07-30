<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class diagnostic_services_moh209 extends Model
{
    protected $fillable=['date','opd_no','xray_no','full_names','age_in_years','sex','sub_location','village_estate','address','xray_examination_type','referral','amount_charged','remarks'];
}
