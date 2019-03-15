<?php

namespace App\Policies;

use App\User;
use App\Software;
use Illuminate\Auth\Access\HandlesAuthorization;

class SoftwarePolicy
{
    use HandlesAuthorization;

    public function view(User $user, Software $software)
    {
        //
    }

    public function create(User $user)
    {
        return $user->role_id === 2;
    }

    public function update(User $user, Software $software)
    {
        return $user->role_id === 2;
    }

    public function delete(User $user, Software $software)
    {
        //
    }

    public function restore(User $user, Software $software)
    {
        //
    }

    public function forceDelete(User $user, Software $software)
    {
        //
    }
}
