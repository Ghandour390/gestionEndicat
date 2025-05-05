<?php
namespace App\Repositories\Implementations;

use App\Models\Apprenant;
use App\Models\Classe;
use App\Models\Etudier;
use App\Repositories\IAdminRepository;
use DateTime;

class AdminRepository implements IAdminRepository{
    

    public function enroller($id, $idclass, $nv) {
        $classe=Classe::find($idclass);
        $aprenant=Apprenant::find($id);
        if($classe && $aprenant){
      $etuduer = new Etudier();
      $etuduer->niveux=$nv;
      $etuduer->aprenant_id=$id;
      $date = new DateTime();
      $annee = $date->format("Y");
      $etuduer->annee=$annee;
      return $etuduer;
        }
        return null;

    }
    


}