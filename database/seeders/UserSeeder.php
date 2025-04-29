<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'firstname' => 'Alice',
                'lastname' => 'Martin',
                'dateNaissance' => '1992-03-15',
                'email' => str::random(10).'@examole.com',
                'password' => Hash::make('password123'),
                'photo' => 'default.jpg',
                'phone' => '0600000001',
                'role_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'firstname' => 'Bob',
                'lastname' => 'Durand',
                'dateNaissance' => '1988-07-21',
                'email' => str::random(10).'@examole.com',
                'password' => Hash::make('password123'),
                'photo' => 'default.jpg',
                'phone' => '0600000002',
                'role_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
