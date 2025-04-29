<?php
namespace App\Repositories;
interface IExamenRepository{
    public function getAllExamens();
    public function deleteExamen($id);
    public function createExamen(array $Data);

}