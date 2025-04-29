<?php
namespace App\Repositories;
interface ICoursRepository{
    public function getAllCours();
    public function deleteCours($id);
    public function createCour(array $Data);

}