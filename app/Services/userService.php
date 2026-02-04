<?php

namespace App\Services;

use App\Models\User;
use Hash;

class UserService
{
    /**
     * Create a new class instance.
     */
    public function createUser(array $data){
        $user=User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role' => 'client',
        ]);
        return $user;
    }
}
