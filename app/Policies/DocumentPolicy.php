<?php

namespace App\Policies;

use App\User;
use App\Document;
use Illuminate\Auth\Access\HandlesAuthorization;

class DocumentPolicy
{
    use HandlesAuthorization;

    public function view(User $user, Document $document)
    {
        //
    }

    public function create(User $user)
    {
        return $user->role_id === 2;
    }

    public function update(User $user, Document $document)
    {
        return $user->role_id === 2;
    }

    public function delete(User $user, Document $document)
    {
        //
    }

    public function restore(User $user, Document $document)
    {
        //
    }

    public function forceDelete(User $user, Document $document)
    {
        //
    }
}
