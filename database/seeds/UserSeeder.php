<?php

use App\User;
use Illuminate\Database\Seeder;
use Faker\Factory;

class UserSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'name'                => 'admin',
                'nim'                 => null,
                'username'            => 'admin',
                'password'            => password_hash('admin', PASSWORD_DEFAULT),
                'password_nohash'     => 'admin',
                'classroom_id'        => null,
                'level'               => 'admin'
            ],
            [
                'name'                => 'Mahasiswa 1',
                'nim'                 => random_int(11111111, 99999999),
                'username'            => 'username1',
                'password'            => password_hash('password1', PASSWORD_DEFAULT),
                'password_nohash'     => 'password1',
                'classroom_id'        => 1,
                'level'               => 'mahasiswa'
            ],
            [
                'name'                => 'Mahasiswa 2',
                'nim'                 => random_int(11111111, 99999999),
                'username'            => 'username2',
                'password'            => password_hash('password2', PASSWORD_DEFAULT),
                'password_nohash'     => 'password2',
                'classroom_id'        => 2,
                'level'               => 'mahasiswa'
            ],
            [
                'name'                => 'Mahasiswa 3',
                'nim'                 => random_int(11111111, 99999999),
                'username'            => 'username3',
                'password'            => password_hash('password3', PASSWORD_DEFAULT),
                'password_nohash'     => 'password3',
                'classroom_id'        => 3,
                'level'               => 'mahasiswa'
            ]
        ];

        foreach ($users as $user) :
            User::create($user);
        endforeach;
    }
}
