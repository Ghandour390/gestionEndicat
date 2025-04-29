<?php

namespace Database\Seeders;

use App\Models\Document;
use App\Models\Cours;
use Illuminate\Database\Seeder;

class DocumentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $cours = Cours::all();

        // $documentTypes = [
        //     'Syllabus du cours',
        //     'Support de présentation',
        //     'Exercices pratiques',
        //     'Corrigés des exercices',
        //     'Documentation technique',
        //     'Références bibliographiques',
        //     'Étude de cas'
        // ];

        // foreach ($cours as $cours) {
        //     // Créer 3 à 7 documents par cours
        //     $nbDocuments = rand(3, 7);
            
        //     for ($i = 0; $i < $nbDocuments; $i++) {
        //         Document::create([
        //             'titre' => $documentTypes[$i % count($documentTypes)] . ' - ' . $cours->titre,
        //             'document' => 'document_' . $cours->id . '_' . ($i + 1) . '.pdf',
        //             'cours_id' => $cours->id
        //         ]);
        //     }
        // }
    }
}