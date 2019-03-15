<?php

namespace App\Policies;

use App\User;
use App\Monitor;
use Illuminate\Auth\Access\HandlesAuthorization;

class MonitorPolicy
{
    use HandlesAuthorization;

    public function view(User $user, Monitor $monitor)
    {
        //
    }

    public function create(User $user)
    {
        return $user->role_id === 2;
    }

    public function update(User $user, Monitor $monitor)
    {
        return $user->role_id === 2;
    }

    public function delete(User $user, Monitor $monitor)
    {
        //
    }

    public function restore(User $user, Monitor $monitor)
    {
        //
    }

    public function forceDelete(User $user, Monitor $monitor)
    {
        //
    }
}
