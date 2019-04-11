<?php

namespace App\Observers;

use App\Role;
use App\User;

class UserObserver
{
    public function creating(User $user)
    {
        $user->api_token = bin2hex(\openssl_random_pseudo_bytes(30));
        $user->user_dongle_id = "00" . strval(bin2hex(openssl_random_pseudo_bytes(7)));
    }

    public function created(User $user)
    {
        $role_id = Role::where('name', 'user')->first()->id;
        $user->roles()->sync($role_id);
    }
}
