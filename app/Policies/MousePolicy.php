<?php

namespace App\Policies;

use App\User;
use App\Mouse;
use Illuminate\Auth\Access\HandlesAuthorization;

class MousePolicy
{
    use HandlesAuthorization;

    public function view(User $user, Mouse $mouse)
    {
        //
    }

    public function create(User $user)
    {
        return $user->role_id === 2;
    }

    public function update(User $user, Mouse $mouse)
    {
        return $user->role_id === 2;
    }

    public function delete(User $user, Mouse $mouse)
    {
        //
    }

    public function restore(User $user, Mouse $mouse)
    {
        //
    }

    public function forceDelete(User $user, Mouse $mouse)
    {
        //
    }
}
