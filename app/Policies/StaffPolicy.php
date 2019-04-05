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
        return $user->staff->department_id === 1;
    }

    public function create(User $user)
    {
        return $user->staff->department_id === 1;
    }

    public function update(User $user, Staff $staff)
    {
        return $user->staff->department_id === 1;
    }
}
