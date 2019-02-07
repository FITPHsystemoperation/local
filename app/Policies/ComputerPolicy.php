<?php

namespace App\Policies;

use App\User;
use App\Computer;
use Illuminate\Auth\Access\HandlesAuthorization;

class ComputerPolicy
{
    use HandlesAuthorization;

    // public function viewPassword(User $user, Computer $computer)
    // {
    //     return true;
    // }

    /**
     * Determine whether the user can view the computer.
     *
     * @param  \App\User  $user
     * @param  \App\Computer  $computer
     * @return mixed
     */
    public function view(User $user, Computer $computer)
    {
        //
    }

    /**
     * Determine whether the user can create computers.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->role_id === 1;
    }

    /**
     * Determine whether the user can update the computer.
     *
     * @param  \App\User  $user
     * @param  \App\Computer  $computer
     * @return mixed
     */
    public function update(User $user, Computer $computer)
    {
        //
    }

    /**
     * Determine whether the user can delete the computer.
     *
     * @param  \App\User  $user
     * @param  \App\Computer  $computer
     * @return mixed
     */
    public function delete(User $user, Computer $computer)
    {
        //
    }

    /**
     * Determine whether the user can restore the computer.
     *
     * @param  \App\User  $user
     * @param  \App\Computer  $computer
     * @return mixed
     */
    public function restore(User $user, Computer $computer)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the computer.
     *
     * @param  \App\User  $user
     * @param  \App\Computer  $computer
     * @return mixed
     */
    public function forceDelete(User $user, Computer $computer)
    {
        //
    }

    public function viewPassword(User $user)
    {
        return $user->role_id === 1 || $user->role_id === 2;
    }
}
