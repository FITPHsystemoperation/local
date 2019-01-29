<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Software extends Model
{
    protected $guarded = ['id'];

    public function computers()
    {
        return $this->belongsToMany(Computer::class);
    }
}
