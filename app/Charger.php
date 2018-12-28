<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Charger extends Model
{
    protected $guarded = [];

    public function computer()
    {
    	return $this->belongsTo('App\Computer');
    }
}
