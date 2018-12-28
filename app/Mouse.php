<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mouse extends Model
{
	protected $table = 'mouses';
	protected $guarded = [];

    public function computer()
    {
    	return $this->belongsTo('App\Computer');
    }
}
