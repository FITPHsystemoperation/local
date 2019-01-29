<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ComputerSoftware extends Model
{
    protected $guarded = ['id'];

    protected $table = 'computer_software';

    protected $casts = ['specs' => 'array'];

    public function computer()
    {
    	return $this->belongsTo(Computer::class);
    }

    public function software()
    {
    	return $this->belongsTo(Software::class);
    }
}
