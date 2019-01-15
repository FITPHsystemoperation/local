<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $guarded = ['id'];

    public function employmentStat()
    {
    	return $this->belongsTo(EmploymentStat::class, 'employmentStat_id');
    }

    public function jobTitle()
    {
    	return $this->belongsTo(JobTitle::class, 'jobTitle_id');
    }

    public function department()
    {
    	return $this->belongsTo(Department::class);
    }
}
