<?php

namespace App\Http\Controllers;

use App\Models\Cours;
use App\Http\Requests\StoreCoursRequest;
use App\Http\Requests\UpdateCoursRequest;
use App\Repositories\IClasseRepository;
use App\Repositories\ICoursRepository;


class CoursController extends Controller
{
    protected $iacoursrepository;
    protected $iaclasseRepository;

    public function __construct(ICoursRepository $iCoursRepository,IClasseRepository $iClasseRepository)
    {
        $this->iaclasseRepository=$iClasseRepository;
    
        $this->iacoursrepository=$iCoursRepository;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cours=$this->iacoursrepository->getAllCours();
        $classes=$this->iaclasseRepository->getAllClass();
        // dd($data);
        
        // $title="gestion cours";
        // $thead =['titre','description','caver'];
        // $route='/cours';
        // $column=[
        //     'titre'=>'text',
        //     'description'=>'text',
        //     'caver'=>'file'
        // ];
        // dd($classes);
        return view('cours.index',compact('cours','classes'));
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
    public function store(StoreCoursRequest $request)
    {
        $this->iacoursrepository->createCour($request->all());
        return redirect()->route('cours.index')->with('success','le cours create avec success');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cours $cours)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cours $cours)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCoursRequest $request, Cours $cours)
    {
        $this->iacoursrepository->updateCour($cours->id,$request->all());
        return redirect()->route('cours.index')->with('success','le cours update avec success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cours $cours)
    {
        $this->iacoursrepository->deleteCours($cours->id);
        return redirect()->route('cours.index')->with('success','le cours a été supprimé avec succès');
    }
}
