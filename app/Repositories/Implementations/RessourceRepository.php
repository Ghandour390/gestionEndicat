<?php
namespace App\Repositories\Implementations;

use App\Models\Cours;
use App\Models\Ressource;
use App\Repositories\IRessourceRepository;

class RessourceRepository implements IRessourceRepository {
    public function getAllRessources() {
        return Ressource::with('cours')->get();
    }

    public function getRessourceById($id) {
        return Ressource::with(['cours'])->find($id);
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
       $ressource = new Ressource();
        $ressource->titre = $Data['titre'];
        $ressource->description = $Data['description'];
        $cours =Cours::where('id', $Data['cours_id'])->first();
        $ressource->cours()->associate($cours);
        $ressource->save();
        return $ressource;
    }

    public function updateRessource($id, array $data) {
        $ressource = Ressource::find($id);
        if($ressource) {
            $ressource->titre = $data['titre'];
            $ressource->description = $data['description'];
            $cours = Cours::where('id', $data['cours_id'])->first();
            $ressource->cours()->associate($cours);
            $ressource->save();
            return $ressource;
        }
        return null;
    }
}