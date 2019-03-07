<?php

namespace App\Policies;

use App\User;
use App\ComputerAccount;
use Illuminate\Auth\Access\HandlesAuthorization;

class ComputerAccountPolicy
{
    use HandlesAuthorization;

    public function create(User $user)
    {
        return
            $user->role_id === 2;
    }

    public function update(User $user, ComputerAccount $computerAccount)
    {
        return
            $user->role_id === 2;
    }

    public function viewPassword(User $user, ComputerAccount $computerAccount)
    {
        return $computerAccount->type_id != 1 || $user->role_id === 2;
    }
}
