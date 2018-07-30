<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class administration_official_use extends Model
{
    protected $fillable= ['admitting_doctor','ward','bed_number','referred_from','diagnosis','charge_sheet','date_of_admission','unit_number'];
}
