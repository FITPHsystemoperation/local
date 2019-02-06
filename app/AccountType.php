<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AccountType extends Model
{
    public function accounts()
    {
    	return $this->hasMany(ComputerAccount::class, 'type_id');
    }
}
