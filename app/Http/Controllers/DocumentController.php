<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Http\Requests\StoreDocumentRequest;
use App\Http\Requests\UpdateDocumentRequest;
use App\Repositories\IDocumentRepository;


class DocumentController extends Controller
{
    protected $idocumentrepository;

    public function __construct(IDocumentRepository $iDocumentRepository)
    {
        $this->idocumentrepository=$iDocumentRepository;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = $this->idocumentrepository->getAllDocuments();
        //  dd($data);
        $title = "gestion Document";
        $thead =['document'];
        return view('dashboard.admin',compact('data','title','thead'));
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
