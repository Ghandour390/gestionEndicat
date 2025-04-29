<?php
namespace App\Repositories\Implementations;

use App\Models\Classe;
use App\Repositories\IClasseRepository;

class ClasseRepository implements IClasseRepository{
    public function getAllClass(){
        
         $call = Classe::with('classRoom')->get();
        //  dd($call);
            return $call;
    }
    public function createClass($Data){
        $classe=Classe::create($Data);
        return $classe;
    }

}