<?php

namespace App\Policies;

use App\User;
use App\ComputerSoftware;
use Illuminate\Auth\Access\HandlesAuthorization;

class ComputerSoftwarePolicy
{
    use HandlesAuthorization;

    public function create(User $user)
    {
        return
            $user->role_id === 2;
    }

    public function update(User $user, ComputerSoftware $computerSoftware)
    {
        return
            $user->role_id === 2;
    }

    public function viewPassword(User $user, ComputerSoftware $computerSoftware)
    {
        return
            $user->role_id === 2;
    }

}
