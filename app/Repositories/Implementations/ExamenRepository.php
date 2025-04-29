<?php
namespace App\Repositories\Implementations;

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
        $examen=Examen::create($Data);
        return $examen;
    }

}