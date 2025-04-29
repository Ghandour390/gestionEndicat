<?php
namespace App\Repositories;

interface IRoleRepository{
    public function getAllRoles();
//     public function getRoleId();
    public function deleteRole($id);
    public function createRole(array $dData);
}