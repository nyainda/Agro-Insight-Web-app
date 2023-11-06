<?php

namespace App\Policies;

use App\Models\User;

class AnimalPolicy
{
    /**
     * Create a new policy instance.
     */
    public function view(User $user, Animal $animal)
{
    return $user->id === $animal->user_id;
}

}
