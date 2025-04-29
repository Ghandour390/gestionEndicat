<?php

namespace Database\Seeders;

use App\Models\Classe;
use App\Models\ClasseRoom;
use App\Models\Admin;
use App\Models\Formateur;
use Illuminate\Database\Seeder;

class ClasseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $salles = ClasseRoom::all();
        $admin = Admin::first();
        $formateurs = Formateur::all();

        $classes = [
            [
                'name' => 'Première Année Informatique',
                'classeRoom_id' => $salles->where('numero', 101)->first()->id,
                'createdBy' => $admin->id
            ],
            [
                'name' => 'Deuxième Année Informatique',
                'classeRoom_id' => $salles->where('numero', 102)->first()->id,
                'createdBy' => $admin->id
            ],
            [
                'name' => 'Première Année Sciences',
                'classeRoom_id' => $salles->where('numero', 201)->first()->id,
                'createdBy' => $admin->id
            ],
            [
                'name' => 'Deuxième Année Sciences',
                'classeRoom_id' => $salles->where('numero', 201)->first()->id,
                'createdBy' => $admin->id
            ],
            [
                'name' => 'Première Année Langues',
                'classeRoom_id' => $salles->where('numero', 202)->first()->id,
                'createdBy' => $admin->id
            ],
            [
                'name' => 'Deuxième Année Langues',
                'classeRoom_id' => $salles->where('numero', 202)->first()->id,
                'createdBy' => $admin->id
            ],
            [
                'name' => 'Première Année Arts',
                'classeRoom_id' => $salles->where('numero', 401)->first()->id,
                'createdBy' => $admin->id
            ],
            [
                'name' => 'Deuxième Année Arts',
                'classeRoom_id' => $salles->where('numero', 402)->first()->id,
                'createdBy' => $admin->id
            ]
        ];

        foreach ($classes as $index => $classeData) {
            $classe = Classe::create($classeData);
            
            // Associer des formateurs à chaque classe
            $formateursForClasse = $formateurs->random(rand(2, 4));
            foreach ($formateursForClasse as $formateur) {
                $classe->formateurs()->attach($formateur->id);
            }
        }
    }
}