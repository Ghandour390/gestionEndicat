<?php

namespace Database\Seeders;

use Database\Seeders\RoleSeeder;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
 

        
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            AdminSeeder::class,
            FormateurSeeder::class,
            ApprenantSeeder::class,
            ClasseRoomSeeder::class,
            ClasseSeeder::class,
            RessourceSeeder::class,
            CoursSeeder::class,
            VideoSeeder::class,
            DocumentSeeder::class,
            ExamenSeeder::class,
            EtudierSeeder::class,
            PasserSeeder::class,
        ]);
    }
}