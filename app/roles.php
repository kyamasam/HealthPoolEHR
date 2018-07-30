<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class roles extends Model
{
    protected $fillable =['role_name', 'role_description', 'access_permissions',];


    public function user()
    {
       return $this->hasMany(User::class);
    }

}
