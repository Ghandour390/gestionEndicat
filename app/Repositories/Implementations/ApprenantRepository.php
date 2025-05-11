<?php
namespace App\Repositories\Implementations;

use App\Models\Apprenant;
use App\Repositories\IApprenantRepository;
use Illuminate\Database\Eloquent\Model;

class ApprenantRepository implements IApprenantRepository{

    // protected  $apprenant;

    // public function __constract(){
    //     $this->apprenant=new Apprenant();
    // }

    public function getAllApprenants(){return Apprenant::all();}

    // public function courses(){

    // }

}