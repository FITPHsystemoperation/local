<?php

namespace App\Policies;

use App\User;
use App\Keyboard;
use Illuminate\Auth\Access\HandlesAuthorization;

class KeyboardPolicy
{
    use HandlesAuthorization;

    public function view(User $user, Keyboard $keyboard)
    {
        //
    }

    public function create(User $user)
    {
        return $user->role_id === 2;
    }

    public function update(User $user, Keyboard $keyboard)
    {
        return $user->role_id === 2;
    }

    public function delete(User $user, Keyboard $keyboard)
    {
        //
    }

    public function restore(User $user, Keyboard $keyboard)
    {
        //
    }

    public function forceDelete(User $user, Keyboard $keyboard)
    {
        //
    }
}
