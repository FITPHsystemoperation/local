<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'idNumber', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function staff()
    {
        return $this->belongsTo(Staff::class);
    }

    public function role()
    {
        return $this->belongsTo(UserRole::class, 'role_id');
    }

    public function isDev()
    {
        return $this->role_id <= 1;
    }

    public function isAdmin()
    {
        return $this->role_id <= 2;
    }

    public function isUser1()
    {
        return $this->role_id <= 3;
    }

    public function isUser2()
    {
        return $this->role_id <= 4;
    }
}
