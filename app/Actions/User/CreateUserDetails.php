<?php

namespace App\Actions\User;

use App\Models\User;

class CreateUserDetails
{
    protected User $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function create()
    {

    }
}
