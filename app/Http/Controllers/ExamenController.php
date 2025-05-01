<?php

namespace App\Http\Controllers;

use App\Models\Examen;
use App\Http\Requests\StoreExamenRequest;
use App\Http\Requests\UpdateExamenRequest;
use App\Repositories\IExamenRepository;
use App\Repositories\ICoursRepository;

class ExamenController extends Controller
{
    protected $iExamenRepository;
    protected $iCoursRepository;
    
    public function __construct(IExamenRepository $iExamenRepository, ICoursRepository $iCoursRepository)
    {
        $this->iExamenRepository = $iExamenRepository;
        $this->iCoursRepository = $iCoursRepository;
    }

    public function index()
    {
        $data = $this->iExamenRepository->getAllExamens();
        $title = "Gestion des examens";
        $thead = ['note', 'date_examen', 'heure_debut', 'heure_fin', 'status', 'cour_id'];
        $route = '/examens'; 
        $column = [
            'note' => 'number',
            'date_examen' => 'date',
            'heure_debut' => 'time',
            'heure_fin' => 'time',
            'status' => [
                'select' => ['pinding'=>'pinding', 'encoure'=>'encoure', 'annule'=>'annule']
            ],
            'cour_id' => [
                'select' => $this->iCoursRepository->getAllCours()
            ]
        ];
        
        return view('dashboard.admin', compact('data', 'title', 'thead', 'route', 'column'));
    }

    public function create()
    {
        //
    }

    public function store(StoreExamenRequest $request)
    {
        $this->iExamenRepository->createExamen($request->validated());
        return redirect()->back()->with('success', 'Examen créé avec succès');
    }

    public function show(Examen $examen)
    {
        //
    }

    public function edit(Examen $examen)
    {
        return response()->json($examen);
    }

    public function update(UpdateExamenRequest $request, Examen $examen)
    {
        $examen->update($request->validated());
        return redirect()->back()->with('success', 'Examen mis à jour avec succès');
    }

    public function destroy($id)
    {
        if($this->iExamenRepository->deleteExamen($id)) {
            return redirect()->back()->with('success', 'Examen supprimé avec succès');
        }
        return redirect()->back()->with('error', 'Une erreur est survenue');
    }
}
