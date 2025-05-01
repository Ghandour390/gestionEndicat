<?php
namespace App\Repositories\Implementations;

use App\Models\Cours;
use App\Repositories\ICoursRepository;

class CoursRepository implements ICoursRepository {
    protected $cours;
    
    public function __construct() {
        $this->cours = new Cours();
    }

    public function getAllCours() {
        return $this->cours::all()->map(function($cours) {
            return [
                'id' => $cours->id,
                'titre' => $cours->titre
            ];
        });
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
        $cour = $this->cours::create($Data);
        return $cour;
    }
}