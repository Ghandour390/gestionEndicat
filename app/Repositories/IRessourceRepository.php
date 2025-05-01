<?php
namespace App\Repositories;

interface IRessourceRepository {
    public function getAllRessources();
    public function getRessourceById($id);
    public function getAvailableCours();
    public function delete($id);
    public function createRessource(array $Data);
}