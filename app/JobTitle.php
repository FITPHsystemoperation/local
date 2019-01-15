<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobTitle extends Model
{
    public function staffs()
    {
    	return $this->hasMany(Staff::class);
    }
}
