<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ipom_chart extends Model
{
    protected $fillable =
        [
            'name',
            'ip_number',
            'date',
            'dob',
            'ward',
            'bed',
            'sex',
            'time',
            'gcs',
            'bp',
            'hr',
            'rr',
            't',
            'bleeding',
            'feeding',
            'pain',
            'ivfs',
            'medication',
        ];
}
