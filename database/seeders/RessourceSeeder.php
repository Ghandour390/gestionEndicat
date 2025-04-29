<?php

namespace Database\Seeders;

use App\Models\Ressource;
use Illuminate\Database\Seeder;

class RessourceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ressources = [
            [
                'titre' => 'Introduction à la Programmation',
                'description' => 'Ressources pour apprendre les bases de la programmation'
            ],
            [
                'titre' => 'Algorithmes Avancés',
                'description' => 'Ressources pour comprendre les algorithmes complexes'
            ],
            [
                'titre' => 'Bases de Données',
                'description' => 'Ressources sur les systèmes de gestion de bases de données'
            ],
            [
                'titre' => 'Développement Web',
                'description' => 'Ressources pour apprendre le développement web'
            ],
            [
                'titre' => 'Intelligence Artificielle',
                'description' => 'Ressources sur l\'IA et le machine learning'
            ],
            [
                'titre' => 'Réseaux Informatiques',
                'description' => 'Ressources sur les réseaux et protocoles'
            ],
            [
                'titre' => 'Sécurité Informatique',
                'description' => 'Ressources sur la cybersécurité'
            ],
            [
                'titre' => 'Développement Mobile',
                'description' => 'Ressources pour le développement d\'applications mobiles'
            ],
            [
                'titre' => 'Cloud Computing',
                'description' => 'Ressources sur les technologies cloud'
            ],
            [
                'titre' => 'DevOps',
                'description' => 'Ressources sur les pratiques DevOps'
            ]
        ];

        foreach ($ressources as $ressource) {
            Ressource::create($ressource);
        }
    }
}