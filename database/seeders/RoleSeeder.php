<?php
namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        $roles = [
            [
                'name' => 'formateur',
                'description' => 'Formateur/Enseignant',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'apprenant',
                'description' => 'Étudiant/Apprenant',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ];

        DB::table('roles')->insert($roles);
    }
}
