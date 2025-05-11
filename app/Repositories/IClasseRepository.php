<?php
namespace App\Repositories;

interface IClasseRepository{
    public function getAllClass();
    public function createClass(array $Data);
    public function updateClass($id, array $data);
     public function deleteClass($id);
}