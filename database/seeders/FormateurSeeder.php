<?php

namespace Database\Seeders;

use App\Models\Formateur;
use App\Models\User;
use App\Models\Role;
use App\Models\Specialite;
use Illuminate\Database\Seeder;

class FormateurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $formateurRole = Role::where('name', 'formateur')->first();
        $formateurUsers = User::whereHas('roles', function ($query) use ($formateurRole) {
            $query->where('role_id', $formateurRole->id);
        })->get();

        $specialites = ["java","pyton","js","c","c#","c++"];

        foreach ($formateurUsers as $user) {
            $i=random_int(0,max: 5);
            $specialite = $specialites[$i];
            
            Formateur::create([
                'user_id' => $user->id ,
                'specialite' => $specialite
            ]);
        }
    }
}