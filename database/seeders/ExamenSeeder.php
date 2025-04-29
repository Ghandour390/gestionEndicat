<?php

namespace Database\Seeders;

use App\Models\Examen;
use App\Models\Cours;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ExamenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cours = Cours::all();

        foreach ($cours as $cour) {
            // Créer 2 examens par cours (un passé, un futur)
            
            // Examen passé
            $datePasse = Carbon::now()->subDays(rand(10, 60));
            Examen::create([
                'date_examen' => $datePasse->format('Y-m-d'),
                'heure_debut' => $datePasse->format('H:i:s'),
                'heure_fin' => $datePasse->addHours(2)->format('H:i:s'),
                'status' => 'terminé',
                'cour_id' => $cour->id
            ]);
            
            // Examen futur
            $dateFuture = Carbon::now()->addDays(rand(10, 60));
            Examen::create([
                'date_examen' => $dateFuture->format('Y-m-d'),
                'heure_debut' => $dateFuture->format('H:i:s'),
                'heure_fin' => $dateFuture->addHours(2)->format('H:i:s'),
                'status' => 'planifié',
                'cours_id' => $cours->id
            ]);
        }
    }
}