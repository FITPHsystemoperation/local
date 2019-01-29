<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Software extends Model
{
    protected $guarded = ['id'];

    protected $casts = ['specList' => 'array'];

    public function computers()
    {
        return $this->hasMany(ComputerSoftware::class);
    }
}
