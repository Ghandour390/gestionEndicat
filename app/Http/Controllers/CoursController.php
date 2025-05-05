<?php

namespace App\Http\Controllers;

use App\Models\Cours;
use App\Http\Requests\StoreCoursRequest;
use App\Http\Requests\UpdateCoursRequest;
use App\Repositories\ICoursRepository;


class CoursController extends Controller
{
    protected $iacoursrepository;

    public function __construct(ICoursRepository $iCoursRepository)
    {
        $this->iacoursrepository=$iCoursRepository;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=$this->iacoursrepository->getAllCours();
        // dd($data);
        
        $title="gestion cours";
        $thead =['titre','description','caver'];
        $route='/cours';
        $column=[
            'titre'=>'text',
            'description'=>'text',
            'caver'=>'file'
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
    public function store(StoreCoursRequest $request)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cours $cours)
    {
        //
    }
}
