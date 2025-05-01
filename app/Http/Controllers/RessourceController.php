<?php

namespace App\Http\Controllers;

use App\Models\Ressource;
use App\Http\Requests\StoreRessourceRequest;
use App\Http\Requests\UpdateRessourceRequest;
use App\Repositories\IRessourceRepository;


class RessourceController extends Controller
{
    protected $iRessourceRepository;

    public function __construct(IRessourceRepository $iRessourceRepository)
    {
        $this->iRessourceRepository = $iRessourceRepository;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cours = $this->iRessourceRepository->getAllCours();
        $ressources = $this->iRessourceRepository->getAllRessources();
        $title = "Gestion des ressources";
        $thead = ['titre', 'description', 'cours_id'];
        $route = '/ressources';
        $column = [
            'titre' => 'text',
            'description' => 'text',
            'select' => [
                'cours_id' => $cours
            ]
        ];
        
        return view('dashboard.admin', compact('ressources', 'title', 'thead', 'route', 'column'));
    }

    /**
     * Get the details of a specific resource.
     */
    public function getDetails($id)
    {
        $ressource = $this->iRessourceRepository->getRessourceById($id);
        return response()->json($ressource);
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
    public function store(StoreRessourceRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Ressource $ressource)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ressource $ressource)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRessourceRequest $request, Ressource $ressource)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ressource $ressource)
    {
        //
    }
}
