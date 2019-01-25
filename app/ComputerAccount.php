<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ComputerAccount extends Model
{
	protected $guarded = ['id'];

    public function computer()
    {
    	return $this->belongsTo(Computer::class);
    }
}
