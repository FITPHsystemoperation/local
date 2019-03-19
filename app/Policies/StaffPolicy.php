<?php

namespace App\Policies;

use App\User;
use App\Staff;
use Illuminate\Auth\Access\HandlesAuthorization;

class StaffPolicy
{
    use HandlesAuthorization;

    public function view(User $user, Staff $staff)
    {
        return $user->role_id === 2 || $user->staff->id === $staff->id ;
    }

    public function create(User $user)
    {
        return $user->role_id === 2 ;
    }

    public function update(User $user, Staff $staff)
    {
        return $user->role_id === 2 ;
    }
}
