<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Computer extends Model
{
    protected $guarded = [];

    public function mouses()
    {
    	return $this->hasMany(Mouse::class);
    }

    public function keyboards()
    {
    	return $this->hasMany(Keyboard::class);
    }

    public function monitors()
    {
    	return $this->hasMany(Monitor::class);
    }

    public function chargers()
    {
        return $this->hasMany(Charger::class);
    }
}
