<?php

namespace App\Policies;

use App\User;
use App\Password;
use Illuminate\Auth\Access\HandlesAuthorization;

class PasswordPolicy
{
    use HandlesAuthorization;

    public function view(User $user)
    {
        return $user->role_id === 2;
    }

    public function create(User $user)
    {
        return $user->role_id === 2;
    }

    public function update(User $user, Password $password)
    {
        return $user->role_id === 2;
    }

    public function delete(User $user, Password $password)
    {
        //
    }

    public function restore(User $user, Password $password)
    {
        //
    }

    public function forceDelete(User $user, Password $password)
    {
        //
    }
}
