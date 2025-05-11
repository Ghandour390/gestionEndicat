<?php

namespace App\Http\Controllers;

use App\Models\Apprenant;
use App\Http\Requests\StoreApprenantRequest;
use App\Http\Requests\UpdateApprenantRequest;
use App\Repositories\IApprenantRepository;
use App\Repositories\ICoursRepository;
use App\Repositories\IRessourceRepository;


class ApprenantController extends Controller
{
    protected $iapprenantRepository;
    protected $iCoursRepository;
     protected $iRessourceRepository;

    public function __construct(IApprenantRepository $iApprenantRepository,ICoursRepository $iCoursRepository ,IRessourceRepository $iRessourceRepository)
    {
        $this->iapprenantRepository=$iApprenantRepository;
        $this->iCoursRepository=$iCoursRepository;
        $this->iRessourceRepository=$iRessourceRepository;
    }
    public function index()
    {
       $data= $this->iapprenantRepository->getAllApprenants();
    // //    dd($data);
    //    $title="gestion des apprenant";
    //    $thead = ['numerodebadge','lastname','firstname','phone','email'];
    //    $route='/apprenants';
       return view('dashboard.admin',compact('data','title','thead','apprenants'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function getAllCourses()
    {
        $courses=$this->iCoursRepository->getAllCours();
        return view('courses.courses',compact('courses'));
    }

    public function getAllResourcesTypeVedioByCourse($coursId)
    {
    
       
        

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
