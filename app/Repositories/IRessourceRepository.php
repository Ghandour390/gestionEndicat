<?php
namespace App\Repositories;
interface IRessourceRepository{
 public function getallRessources();
 public function delete($id);
 public function createRessource(array $Data);
}