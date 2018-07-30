<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class patient_file_dental_examination_form extends Model
{
    protected $fillable=['name','address','date','estimate','remarks'];
}
