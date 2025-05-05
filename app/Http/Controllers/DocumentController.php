<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Http\Requests\StoreDocumentRequest;
use App\Http\Requests\UpdateDocumentRequest;
use App\Repositories\IDocumentRepository;
use App\Repositories\IRessourceRepository;


class DocumentController extends Controller
{
    protected $idocumentrepository;
    protected $iressourcerepository;

    public function __construct(IDocumentRepository $iDocumentRepository,IRessourceRepository $iressourcerepository)
    {
        $this->idocumentrepository=$iDocumentRepository;
        $this->iressourcerepository=$iressourcerepository;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $documents = $this->idocumentrepository->getAllDocuments();
        $ressources=$this->iressourcerepository->getallRessources();
        // $title = "gestion Document";
        // $thead =['document'];
        // $route='documents';
        // $column=[
        //     'document'=>'texte',
        //     'select'=>[
        //         'ressource_id'=>$ressources
        //     ]
        //     ];
      
        // return view('dashboard.admin',compact('data','title','thead','route','column'));
        return view('document.index',compact('documents','ressources'));
       
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDocumentRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Document $document)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Document $document)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDocumentRequest $request, Document $document)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Document $document)
    {
        //
    }
}
