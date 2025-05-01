<?php
namespace App\Repositories\Implementations;

use App\Models\Ressource;
use App\Repositories\IRessourceRepository;

class RessourceRepository implements IRessourceRepository {
    public function getAllRessources() {
        return Ressource::with('cours')->get();
    }

    public function getRessourceById($id) {
        return Ressource::with('cours')->find($id);
    }

    public function getAvailableCours() {
        return \App\Models\Cours::all();
    }

    public function delete($id) {
        $ressource = Ressource::find($id);
        if($ressource) {
            $ressource->delete();
            return true;
        }
        return false;
    }

    public function createRessource(array $Data) {
        $ressource = Ressource::create($Data);
        return $ressource;
    }
}