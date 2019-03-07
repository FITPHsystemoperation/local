<?php

namespace App\Policies;

use App\User;
use App\Computer;
use Illuminate\Auth\Access\HandlesAuthorization;

class ComputerPolicy
{
    use HandlesAuthorization;

    public function view(User $user, Computer $computer)
    {
        //
    }

    public function create(User $user)
    {
        return
            $user->role_id === 2;
    }
    
    public function update(User $user, Computer $computer)
    {
        return
            $user->role_id === 2;
    }
}
