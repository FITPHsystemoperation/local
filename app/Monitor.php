<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Monitor extends Model
{
    protected $guarded = [];

    public function computer()
    {
    	return $this->belongsTo(Computer::class);
    }
}
