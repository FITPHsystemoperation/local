<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $guarded = [];

    public function staffs()
    {
    	return $this->hasMany(Staff::class);
    }
}
