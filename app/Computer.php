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

    public function keyboard()
    {
    	return $this->hasOne('App\Keyboard', 'computer_id');
    }

    public function monitor()
    {
    	return $this->hasOne('App\Monitor', 'computer_id');
    }

    public function charger()
    {
        return $this->hasOne('App\Charger', 'computer_id');
    }
}
