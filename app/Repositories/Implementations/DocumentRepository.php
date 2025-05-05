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
        $document=new Document();
        if (isset($Data['document']) && $Data['document'] instanceof UploadedFile) {
            $document->document = $Data['document']->store('documents', 'public');
        }
        $ressource = Document::where('id', $Data['resource_id'])->first();
        $document->ressource()->associate($ressource);
        $document->save();
        return $document;
    }

    public function updateDocument($id, array $data){
        $document=Document::find($id);
        if($document){
            if (isset($data['document']) && $data['document'] instanceof UploadedFile) {
                $document->document = $data['document']->store('documents', 'public');
            }
            $ressource = Document::where('id', $data['resource_id'])->first();
            $document->ressource()->associate($ressource);
            return $document;
        }
        return null;
    }
    public function getById($id){
        $document=$this->document->where('$id')->first();
        return $document;
    }


}