<?php

namespace App\Policies;

use App\User;
use App\Department;
use Illuminate\Auth\Access\HandlesAuthorization;

class DepartmentPolicy
{
    use HandlesAuthorization;

    public function view(User $user, Department $department)
    {
        //
    }

    public function create(User $user)
    {
        return $user->role_id === 2;
    }

    public function update(User $user, Department $department)
    {
        return $user->role_id === 2;
    }

    public function delete(User $user, Department $department)
    {
        //
    }

    public function restore(User $user, Department $department)
    {
        //
    }

    public function forceDelete(User $user, Department $department)
    {
        //
    }
}
