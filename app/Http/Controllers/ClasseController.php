<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use App\Http\Requests\StoreClasseRequest;
use App\Http\Requests\UpdateClasseRequest;
use App\Repositories\IClasseRepository;



class ClasseController extends Controller
{
    protected $iclassrapository;

    public function __construct(IClasseRepository $iClasseRepository)
    {
        $this->iclassrapository= $iClasseRepository;
    }
    public function index()
    {
        $data=$this->iclassrapository->getAllClass();
       $title="gestion des classes";
       $thead = ['nom'];
       $route='/classes';
        return view("dashboard.admin",compact("data",'title','thead','route'));
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
    public function store(StoreClasseRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Classe $classe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Classe $classe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateClasseRequest $request, Classe $classe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Classe $classe)
    {
        //
    }
}
