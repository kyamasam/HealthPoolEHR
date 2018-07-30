<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class consent_form extends Model
{
    protected $fillable = ['ipno','name','number','address','clinic_ward','date_of_admission','date_of_discharge','meal','day','comments'];
}
