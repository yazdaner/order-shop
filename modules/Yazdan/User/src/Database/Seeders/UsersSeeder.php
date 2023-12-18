<?php

namespace Yazdan\User\Database\Seeders;

use Illuminate\Database\Seeder;
use Yazdan\User\App\Models\User;
use Yazdan\User\Repositories\UserRepository;

class UsersSeeder extends Seeder
{

    public function run()
    {
        foreach(UserRepository::$defaultUsers as $user){

            User::firstOrCreate(['email' => $user['email']],
            [
                'email' => $user['email'],
                'username' => $user['username'],
                'password' => bcrypt($user['password']),
                'key' => 1000,
            ])->assignRole($user['role'])->markEmailAsVerified();

        }

    }
}
