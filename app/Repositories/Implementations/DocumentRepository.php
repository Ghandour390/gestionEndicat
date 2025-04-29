<?php
namespace App\Repositories\Implementations;

use App\Models\Document;
use App\Repositories\IDocumentRepository;

class DocumentRepository implements IDocumentRepository{
    PROTECTED $document;
    public function __construct(){
        $this->document=new Document();
    }
    public function getAllDocuments(){
        return $this->document->all();
    }
    public function deletedocument($id){
        $document=Document::find($id);
        if($document){
            $document->delete();
            return true;
        }
        return false;
    }
    public function createDocument(array $Data){
        $document=$this->document::create($Data);
    }

}