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
        $classe=new Classe();
        $classe->name=$Data['name'];
        $classeroom = Classe::where('id', $Data['classroom_id'])->first();
        $classe->classRoom()->associate($classeroom);
        $classe->save();
        return $classe;
    }
    public function deleteClass($id){
        $class=Classe::find($id);
        if($class){
            $class->delete();
            return true;
        }
        return false;
    }
    public function getById($id){
        $class=Classe::find($id);
        if($class){
            return $class;
        }
        return null;
    }
    public function updateClass($id, array $data){
        $class=Classe::find($id);
        if($class){
            $class->name=$data['name'];
            $classeroom = Classe::where('id', $data['classroom_id'])->first();
            $class->classRoom()->associate($classeroom);
            $class->save();
            return $class;
        }
        return null;
    }

}