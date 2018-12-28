<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Keyboard extends Model
{
    protected $guarded = [];

    public function computer()
    {
    	return $this->belongsTo('App\Computer');
    }
}
