<?php

namespace App\Policies;

use App\User;
use App\LanCable;
use Illuminate\Auth\Access\HandlesAuthorization;

class LanCablePolicy
{
    use HandlesAuthorization;

    public function view(User $user, LanCable $lanCable)
    {
        //
    }

    public function create(User $user)
    {
        return $user->role_id === 2;
    }

    public function update(User $user, LanCable $lanCable)
    {
        return $user->role_id === 2;
    }

    public function delete(User $user, LanCable $lanCable)
    {
        //
    }

    public function restore(User $user, LanCable $lanCable)
    {
        //
    }

    public function forceDelete(User $user, LanCable $lanCable)
    {
        //
    }
}
