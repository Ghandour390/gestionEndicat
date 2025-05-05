<?php

namespace App\Http\Controllers;

use App\Models\Ressource;
use App\Http\Requests\StoreRessourceRequest;
use App\Http\Requests\UpdateRessourceRequest;
use App\Repositories\IRessourceRepository;
use App\Repositories\ICoursRepository;


class RessourceController extends Controller
{
    protected $iRessourceRepository;
    protected $iCoursRepositoryRepository;

    public function __construct(IRessourceRepository $iRessourceRepository,ICoursRepository $iCoursRepositoryRepository)
    {
        $this->iRessourceRepository = $iRessourceRepository;
        $this->iCoursRepositoryRepository=$iCoursRepositoryRepository;
    }

    public function index()
    {
        $cours = $this->iCoursRepositoryRepository->getAllCours();
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

    public function edit($id)
    {
        $ressource = $this->iRessourceRepository->getRessourceById($id);
        if (!$ressource) {
            return response()->json(['error' => 'Ressource non trouvée'], 404);
        }
        $ressource->load('cours');
        return response()->json($ressource);
    }

    public function update(UpdateRessourceRequest $request, $id)
    {
        $ressource = Ressource::findOrFail($id);
        $ressource->update($request->validated());
        return redirect()->back()->with('success', 'Ressource mise à jour avec succès');
    }

    public function destroy($id)
    {
       if( $this->iRessourceRepository->delete($id)){

           return redirect()->back()->with('success', 'Ressource supprimée avec succès');
       }
       return redirect()->back()->with('succuss',"le resouce n'est pas disponible dans databas");
    }

    public function getDetails($id)
    {
        $ressource = $this->iRessourceRepository->getRessourceById($id);
        return response()->json($ressource);
    }
}
