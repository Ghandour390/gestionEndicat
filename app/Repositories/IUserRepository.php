<?php
namespace App\Repositories;
interface IUserRepository{

    public function findAllusers();
    public function deleteUser($id);
    public function createUser(array $Data);
    public function findByEmail($email);
    public function getById($id);
    public function updateUser($id, array $data);
    
}