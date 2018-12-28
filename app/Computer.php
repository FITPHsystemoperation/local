<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Computer extends Model
{
    protected $guarded = [];

    public function mouse()
    {
    	return $this->hasOne('App\Mouse', 'computer_id');
    }
}
