<?php

namespace App\Http\Controllers;

use App\Models\Examen;
use App\Http\Requests\StoreExamenRequest;
use App\Http\Requests\UpdateExamenRequest;
use App\Repositories\IExamenRepository;


class ExamenController extends Controller
{
    protected $iExamenRepository;
    public function __construct(IExamenRepository $iExamenRepository)
    {
        $this->iExamenRepository=$iExamenRepository;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data= $this->iExamenRepository->getAllExamens();
        // dd($data);
        $title ="gestion Examen";
        $thead =['note','date_examen','heure_debut','heure_fin','status'];
        $route='/examen';
        $status=['pinding', 'encoure', 'annule'];
        $column=[
            'date_examen'=>'date',
            'heure_debut'=>'time',
            'heure_fin'=>'time',
            'select'=>['status'=>$status],
        ];
        return view('dashboard.admin',compact('data','title','thead','route','column'));
      
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
    public function store(StoreExamenRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Examen $examen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Examen $examen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateExamenRequest $request, Examen $examen)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Examen $examen)
    {
        //
    }
}
