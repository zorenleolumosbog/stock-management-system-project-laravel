<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'Admin',
                'email'          => 'admin@gmail.com',
                'password'       => bcrypt('$2y$10$OWUV6yEXXe54rqullHe9QufPyPXNHmKiwzyOLq7PfJK.8W2snaBNi'),
                'remember_token' => null,
            ],
        ];

        User::insert($users);

    }
}
