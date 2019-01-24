<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ComputerAccount extends Model
{
    public function computer()
    {
    	return $this->belongsTo(Computer::class);
    }
}
