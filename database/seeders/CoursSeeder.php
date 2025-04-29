<?php

namespace Database\Seeders;

use App\Models\Cours;
use App\Models\Ressource;
use App\Models\Formateur;
use App\Models\Classe;
use Illuminate\Database\Seeder;

class CoursSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ressources = Ressource::all();
        $formateurs = Formateur::all();
        $classes = Classe::all();

        $cours = [
            [
                'titre' => 'Introduction à la Programmation en Python',
                'description' => 'Cours d\'introduction à la programmation avec Python'
            ],
            [
                'titre' => 'Structures de Données et Algorithmes',
                'description' => 'Étude des structures de données et algorithmes fondamentaux'
            ],
            [
                'titre' => 'Bases de Données Relationnelles',
                'description' => 'Conception et utilisation des bases de données SQL'
            ],
            [
                'titre' => 'Développement Web Frontend',
                'description' => 'HTML, CSS et JavaScript pour le développement web'
            ],
            [
                'titre' => 'Développement Web Backend',
                'description' => 'Développement côté serveur avec PHP et Laravel'
            ],
            [
                'titre' => 'Introduction à l\'Intelligence Artificielle',
                'description' => 'Concepts fondamentaux de l\'IA'
            ],
            [
                'titre' => 'Réseaux et Protocoles',
                'description' => 'Étude des réseaux informatiques et protocoles de communication'
            ],
            [
                'titre' => 'Sécurité des Systèmes d\'Information',
                'description' => 'Principes et pratiques de la cybersécurité'
            ],
            [
                'titre' => 'Développement d\'Applications Mobiles',
                'description' => 'Création d\'applications pour Android et iOS'
            ],
            [
                'titre' => 'Cloud Computing et Services Web',
                'description' => 'Utilisation des services cloud et architectures web modernes'
            ],
            [
                'titre' => 'DevOps et Intégration Continue',
                'description' => 'Pratiques DevOps et outils d\'intégration continue'
            ],
            [
                'titre' => 'Programmation Orientée Objet',
                'description' => 'Concepts et pratiques de la POO'
            ]
        ];

        foreach ($cours as $index => $coursData) {
            // Associer une ressource aléatoire
            $ressource = $ressources->random();
            
            // Associer un formateur aléatoire
            $formateur = $formateurs->random();
            
            $cours = Cours::create([
                'titre' => $coursData['titre'],
                'description' => $coursData['description'],
                'ressource_id' => $ressource->id,
                'formateur_id' => $formateur->id
            ]);
            
            // Associer des classes aléatoires à ce cours
            $classesForCours = $classes->random(rand(1, 3));
            foreach ($classesForCours as $classe) {
                $cours->classes()->attach($classe->id);
            }
        }
    }
}