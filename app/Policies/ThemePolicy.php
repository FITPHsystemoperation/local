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
        return $user->role_id === 1;
    }

    public function create(User $user)
    {
        return $user->role_id === 1;
    }

    public function update(User $user, Theme $theme)
    {
        return $user->role_id === 1;
    }
}
