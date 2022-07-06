<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'Admin',
                'email'          => 'almas@makeducation.com',
                'password'       => bcrypt('Arrow321!'),
                'remember_token' => null,
            ],
        ];

        User::insert($users);
    }
}