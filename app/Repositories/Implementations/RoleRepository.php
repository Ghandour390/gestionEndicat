<?php
namespace App\Repositories\Implementations;

use App\Models\Role;
use App\Repositories\IRoleRepository;               

class RoleRepository implements IRoleRepository{

    public function getAllRoles(){
        return Role::all();
    }
    public function deleteRole($id){
        $role=Role::find($id);
        if($role){
            $role->delete();
            return true ;
        }
        return false;
    }
    public function createRole(array $Data){
        $role=Role::create($Data);
        return $role;
    }


}