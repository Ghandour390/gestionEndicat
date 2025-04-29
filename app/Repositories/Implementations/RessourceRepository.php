<?php
namespace App\Repositories\Implementations;

use App\Models\Ressource;
use App\Repositories\IRessourceRepository;

class RessourceRepository implements IRessourceRepository{
    public function getallRessources(){
        return Ressource::all();
    }

    public function delete($id){
        $ressource=Ressource::find($id);
        if($ressource){
            $ressource->delete();
            return true;
        }
        return false;
    }
    public function createRessource(array $Data){
            $ressource=Ressource::create($Data);
            return $ressource;
    }
    
}