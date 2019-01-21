<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $guarded = ['id'];

    public function user()
    {
        return $this->hasOne(User::class);
    }

    public function employmentStat()
    {
    	return $this->belongsTo(EmploymentStat::class);
    }

    public function jobTitle()
    {
    	return $this->belongsTo(JobTitle::class);
    }

    public function department()
    {
    	return $this->belongsTo(Department::class);
    }
}
