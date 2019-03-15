<?php

namespace App\Policies;

use App\User;
use App\DocumentCategory;
use Illuminate\Auth\Access\HandlesAuthorization;

class DocumentCategoryPolicy
{
    use HandlesAuthorization;

    public function view(User $user, DocumentCategory $documentCategory)
    {
        //
    }

    public function create(User $user)
    {
        return $user->role_id === 2;
    }

    public function update(User $user, DocumentCategory $documentCategory)
    {
        return $user->role_id === 2;
    }

    public function delete(User $user, DocumentCategory $documentCategory)
    {
        //
    }

    public function restore(User $user, DocumentCategory $documentCategory)
    {
        //
    }

    public function forceDelete(User $user, DocumentCategory $documentCategory)
    {
        //
    }
}
