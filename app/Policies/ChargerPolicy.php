<?php

namespace App\Policies;

use App\User;
use App\Charger;
use Illuminate\Auth\Access\HandlesAuthorization;

class ChargerPolicy
{
    use HandlesAuthorization;

    public function view(User $user, Charger $charger)
    {
        //
    }

    public function create(User $user)
    {
        return $user->role_id === 2;
    }

    public function update(User $user, Charger $charger)
    {
        return $user->role_id === 2;
    }

    public function delete(User $user, Charger $charger)
    {
        //
    }

    public function restore(User $user, Charger $charger)
    {
        //
    }

    public function forceDelete(User $user, Charger $charger)
    {
        //
    }
}
