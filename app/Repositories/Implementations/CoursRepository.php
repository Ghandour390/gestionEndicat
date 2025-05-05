<?php
namespace App\Repositories\Implementations;

use App\Models\Classe;
use App\Models\Cours;
use App\Repositories\ICoursRepository;

class CoursRepository implements ICoursRepository {
    protected $cours;
    
    public function __construct() {
        $this->cours = new Cours();
    }

    public function getAllCours() {
        return $this->cours::all();
    }

    public function deleteCours($id) {
        $cour = Cours::find($id);
        if($cour) {
            $cour->delete();
            return true;
        }
        return false;
    }

    public function createCour(array $Data) {
        $cour = new Cours();
        $cour->titre = $Data['titre'];  
        $cour->description = $Data['description'];
        $classe = Classe::where('id', $Data['classe_id'])->first();
        $cour->classe()->associate($classe);
        $cour->save();
        return $cour;
    }
    public function updateCour($id, array $data) {
        $cour = Cours::find($id);
        if($cour) {
            $cour->titre = $data['titre'];
            $cour->description = $data['description'];
            $classe = Classe::where('id', $data['classe_id'])->first();
            $cour->classe()->associate($classe);
            $cour->save();
            return $cour;
        }
        return null;
    }
}