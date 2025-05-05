<?php

namespace App\Http\Controllers;

use App\Models\Formateur;
use App\Models\Role;
use Illuminate\Http\Request;
use App\Enums\Specialite;
class FormateurController extends UserController
{
    public function __construct()
    {
        $this->model = Formateur::class;
        $this->relations = ['role', 'specialite'];
        $this->routePrefix = '/formateurs';
        
        // Définir les colonnes et leurs types/relations
        $this->columns = [
            'name' => 'text',
            'email' => 'email',
            'specialite' => [
                'select' => Specialite::cases(),
               
            ],
            'role_id' => [
                'select' => Role::where('name', 'formateur')->get()
            ]
        ];
    }

    // Si vous avez besoin de logique spécifique aux formateurs,
    // vous pouvez surcharger les méthodes du BaseController ici
}
