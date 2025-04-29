<?php

namespace Database\Seeders;

use App\Models\Etudier;
use App\Models\Apprenant;
use App\Models\Classe;
use Illuminate\Database\Seeder;

class EtudierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $apprenants = Apprenant::all();
        $classes = Classe::all();

        // Répartir les apprenants dans les classes
        foreach ($apprenants as $apprenant) {
            // Chaque apprenant est inscrit à 1-3 classes
            $nbClasses = rand(1, 3);
            $classesForApprenant = $classes->random($nbClasses);
            
            foreach ($classesForApprenant as $classe) {
                Etudier::create([
                    'apprenant_id' => $apprenant->id,
                    'classe_id' => $classe->id,
                    'niveau' => rand(1, 3), // Niveau de l'étudiant dans cette classe
                    'annee' => '2023-2024', // Année scolaire
                ]);
            }
        }
    }
}