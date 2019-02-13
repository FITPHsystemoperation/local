<?php

namespace App\Policies;

use App\User;
use App\Theme;
use Illuminate\Auth\Access\HandlesAuthorization;

class ThemePolicy
{
    use HandlesAuthorization;

    public function index(User $user)
    {
        return $user->role_id === 1;
    }
    
    public function view(User $user, Theme $theme)
    {
        return true;
    }

    /**
     * Determine whether the user can create themes.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->role_id === 1;
    }

    /**
     * Determine whether the user can update the theme.
     *
     * @param  \App\User  $user
     * @param  \App\Theme  $theme
     * @return mixed
     */
    public function update(User $user, Theme $theme)
    {
        //
    }

    /**
     * Determine whether the user can delete the theme.
     *
     * @param  \App\User  $user
     * @param  \App\Theme  $theme
     * @return mixed
     */
    public function delete(User $user, Theme $theme)
    {
        //
    }

    /**
     * Determine whether the user can restore the theme.
     *
     * @param  \App\User  $user
     * @param  \App\Theme  $theme
     * @return mixed
     */
    public function restore(User $user, Theme $theme)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the theme.
     *
     * @param  \App\User  $user
     * @param  \App\Theme  $theme
     * @return mixed
     */
    public function forceDelete(User $user, Theme $theme)
    {
        //
    }
}
