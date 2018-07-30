<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fluid_in_out_chart extends Model
{
    protected $fillable = ['op_ip_number','ward_clinic','date','operation','anaesthetists','surgeons','type_of_premedication','time_given','effect','weight','height','bio_sex'];
}
