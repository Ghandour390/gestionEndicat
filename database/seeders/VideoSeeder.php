<?php

namespace Database\Seeders;

use App\Models\Video;
use App\Models\Cours;
use Illuminate\Database\Seeder;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $cours = Cours::all();

        // $videoTitles = [
        //     'Introduction au cours',
        //     'Concepts fondamentaux',
        //     'Démonstration pratique',
        //     'Exercices guidés',
        //     'Étude de cas',
        //     'Révision et synthèse'
        // ];

        // foreach ($cours as cour) {
        //     // Créer 2 à 5 vidéos par cours
        //     $nbVideos = rand(2, $cours);
            
        //     for ($i = 0; $i < $nbVideos; $i++) {
        //         Video::create([
        //             'titre' => $videoTitles[$i % count($videoTitles)] . ' - ' . $cours->titre,
        //             'contenu' => 'video_' . $cours->id . '_' . ($i + 1) . '.mp4',
        //             'description' => 'Vidéo ' . ($i + 1) . ' pour le cours ' . $cours->titre,
        //             'cours_id' => $cours->id
        //         ]);
        //     }
        // }
    }
}