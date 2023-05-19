<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Grade;
use App\Models\Group;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $group_name = ['admin', 'users'];

        for ($i = 0; $i < count($group_name); $i++) {
            Group::insert([
                'name'          => $group_name[$i],
                'created_at'    => date('Y-m-d'),
                'updated_at'    => date('Y-m-d')
            ]);
        }

        User::insert([
            'group_id'      => 1,
            'grade_id'      => null,
            'name'          => 'Admin',
            'email'         => 'admin@gmail.com',
            'password'      => bcrypt('12345678'),
            'photos'        => 'default-2.jpg',
            'created_at'    => date('Y-m-d'),
            'updated_at'    => date('Y-m-d')
        ]);

        Grade::insert([
            'x'             => 5,
            'y'             => 13,
            'z'             => 14,
            'w'             => 7,
            'created_at'    => date('Y-m-d'),
            'updated_at'    => date('Y-m-d')
        ]);

        User::insert([
            'group_id'      => 2,
            'grade_id'      => 1,
            'name'          => 'Jaya',
            'email'         => 'jaya@gmail.com',
            'password'      => null,
            'photos'        => 'default-2.jpg',
            'created_at'    => date('Y-m-d'),
            'updated_at'    => date('Y-m-d')
        ]);

        Grade::insert([
            'x'             => 4,
            'y'             => 3,
            'z'             => 12,
            'w'             => 13,
            'created_at'    => date('Y-m-d'),
            'updated_at'    => date('Y-m-d')
        ]);

        User::insert([
            'group_id'      => 2,
            'grade_id'      => 2,
            'name'          => 'Sinaga',
            'email'         => 'sinaga@gmail.com',
            'password'      => null,
            'photos'        => 'default-3.jpg',
            'created_at'    => date('Y-m-d'),
            'updated_at'    => date('Y-m-d')
        ]);
    }
}
