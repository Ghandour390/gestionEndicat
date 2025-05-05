<?php
namespace App\Repositories\Implementations;

use App\Models\Apprenant;
use App\Models\Classe;
use App\Models\ClasseRoom;
use App\Models\Etudier;
use App\Repositories\IClasseRepository;
use Auth;
use DateTime;

class ClasseRepository implements IClasseRepository{
    public function getAllClass(){
        
         $call = Classe::with('classRoom')->get();
        //  dd($call);
            return $call;
    }
    public function createClass($Data){
        $classe=new Classe();
        $classe->name=$Data['name'];
        $classe->createdBy=Auth::user()->id;
        $classeroom = Classe::where('id', $Data['classroom_id'])->first();
        $classe->classRoom()->associate($classeroom);
        // $classe->apprenants()->attach($Data['apprenantsIds']);
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
        $classe=Classe::find($id);
        if($classe){
            $classe->name=$data['name'];
            $classeroom = ClasseRoom::where('id', $data['classroom_id'])->first();
            // $classe->apprenants()->attach($data['apprenantsIds']);
            $classe->classRoom()->associate($classeroom);
            $classe->save();
            return $classe;
        }
        return null;
    }

   
   

}