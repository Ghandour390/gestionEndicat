<?php
namespace App\Repositories;

interface IRessourceRepository {
    public function getAllRessources();
    public function getRessourceById($id);
    public function delete($id);
    public function createRessource(array $Data);
    public function updateRessource($id, array $data);
}