<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Computer extends Model
{
    protected $guarded = [];

    public function mouse()
    {
    	return $this->hasMany('App\Mouse', 'computer_id');
    }

    public function keyboard()
    {
    	return $this->hasMany('App\Keyboard', 'computer_id');
    }

    public function monitor()
    {
    	return $this->hasMany('App\Monitor', 'computer_id');
    }

    public function charger()
    {
        return $this->hasMany('App\Charger', 'computer_id');
    }
}
