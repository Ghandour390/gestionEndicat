<?php
namespace App\Repositories;

interface IClasseRoomRepository{
    public function getAllClassRooms();
    public function deleteClasse($id);
    public function createClasseroom(array $Data);
    public function updateClasseroom($id, array $data);
}