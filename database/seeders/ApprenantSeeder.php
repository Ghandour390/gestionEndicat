<?php

namespace Database\Seeders;

use App\Models\Apprenant;
use App\Models\User;
use App\Models\Role;
use Illuminate\Database\Seeder;

class ApprenantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $apprenantRole = Role::where('name', 'apprenant')->first();
        $apprenantUsers = User::whereHas('roles', function ($query) use ($apprenantRole) {
            $query->where('role_id', $apprenantRole->id);
        })->get();

        foreach ($apprenantUsers as $index => $user) {
            Apprenant::create([
                'user_id' => $user->id,
                'numeroDeBadge' => 10000 + $index
            ]);
        }
    }
}