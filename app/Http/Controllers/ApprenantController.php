<?php

namespace App\Http\Controllers;

use App\Models\Apprenant;
use App\Http\Requests\StoreApprenantRequest;
use App\Http\Requests\UpdateApprenantRequest;
use App\Repositories\IApprenantRepository;


class ApprenantController extends Controller
{
    protected $iapprenantRepository;

    public function __construct(IApprenantRepository $iApprenantRepository)
    {
        $this->iapprenantRepository=$iApprenantRepository;
    }
    public function index()
    {
       $data= $this->iapprenantRepository->getAllApprenants();
    //    dd($data);
       $title="gestion des apprenant";
       $thead = ['numerodebadge','lastname','firstname','phone','email'];
       $route='/apprenants';
       return view('dashboard.admin',compact('data','title','thead','apprenants'));
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
    public function store(StoreApprenantRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Apprenant $apprenant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Apprenant $apprenant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateApprenantRequest $request, Apprenant $apprenant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Apprenant $apprenant)
    {
        //
    }
}
