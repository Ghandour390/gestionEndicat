<?php
namespace App\Repositories\Implementations;

use App\Models\Cours;
use App\Models\Examen;
use App\Repositories\IExamenRepository;

class ExamenRepository implements IExamenRepository{
    protected $examen;
    public function __construct(){
        $this->examen=new Examen();
    }

    public function getAllExamens(){
        return $this->examen::all();
    }
    public function deleteExamen($id){
        $examen=Examen::find($id);
        if($examen){
            $examen->delete();
            return true;
        }
        return false;
    }
    public function createExamen(array $Data){
        $examen=new Examen();
        $examen->date_examen=$Data['date_examen'];
        $examen->heure_debut=$Data['heure_debut'];
        $examen->heure_fin=$Data['heure_fin'];
        $cours = Examen::where('id', $Data['cours_id'])->first();
        $examen->cours()->associate($cours);
        $examen->save();
        return $examen;
    }
    public function updateExamen($id, array $data){
        $examen=Examen::find($id);
        if($examen){
            $examen->date_examen=$data['date_examen'];
            $examen->heure_debut=$data['heure_debut'];
            $examen->heure_fin=$data['heure_fin'];
            $cours = Cours::where('id', $data['cours_id'])->first();
            $examen->cours()->associate($cours);
            $examen->save();
            return $examen;
        }
        return null;
    }

}