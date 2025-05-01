<?php

namespace App\Repositories\Implementations;

use App\Models\Classe;
use App\Models\ClasseRoom;
use App\Repositories\IClasseRoomRepository;

class ClassRoomRepository implements IClasseRoomRepository{
    public function getAllClassRooms(){
        // dd( ClasseRoom::all());
        $classeroom= ClasseRoom::all();
        return $classeroom ;

    }
    public function deleteClasse($id){
        $classe=Classe::find($id);
        if($classe){
            $classe->delete();
            return true;
        }
        return false;
    }
    public function createClasseroom(array $Data){
        $classeroom=ClasseRoom::create($Data);
        return $classeroom;
    }

}