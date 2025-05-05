<?php
namespace App\Repositories;
interface IDocumentRepository{
    PUBLIC FUNCTION GETALLDOCUMENTS();
    public function deletedocument($id);
    public function createDocument(array $Data);
    public function updateDocument($id, array $data);

}