<?php

namespace Database\Seeders;

use App\Models\Passer;
use App\Models\Apprenant;
use App\Models\Examen;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PasserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $apprenants = Apprenant::all();
        $examens = Examen::all();

        foreach ($examens as $examen) {
          
            
            if ($apprenants->count() > 0) {
                foreach ($apprenants as $apprenant) {
                    // Générer une note aléatoire entre 0 et 20
                    $note = rand(0, 200) / 10; // Pour avoir des notes avec décimales
                    
                    Passer::create([
                        'note' => $note,
                        'date' => Carbon::parse($examen->date_examen)->format('Y-m-d'),
                        'examen_id' => $examen->id,
                        'apprenant_id' => $apprenant->id
                    ]);
                }
            }
        }
    }
}