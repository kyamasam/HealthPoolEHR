<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clinicalservices_xrayrequestform extends Model
{
    protected $fillable=['date','ip_op_number','ref_no','patient','cell','age','weight','sex','clinical_info','lmp','investigation_required','report','referring_doctor','branch','signature','cell2','reported_by','time'];
}
