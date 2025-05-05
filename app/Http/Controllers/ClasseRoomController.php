<?php

namespace App\Http\Controllers;

use App\Models\ClasseRoom;
use App\Http\Requests\StoreClasseRoomRequest;
use App\Http\Requests\UpdateClasseRoomRequest;
use App\Repositories\IClasseRoomRepository;


class ClasseRoomController extends Controller
{
    protected $iaclassroomrepository;


    public function __construct(IClasseRoomRepository $iClasseRoomRepository)
    {
        $this->iaclassroomrepository=$iClasseRoomRepository;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data= $this->iaclassroomrepository->getAllClassRooms();
        // dd($data);
        $title="gestion classerooms";
        $thead =['capacite','name','numero'];
        $route='/classeroom';
        $column=[
            'capacite'=>'text',
            'name'=>'texte',
            'numero'=>'numeric'

        ];
        return view('dashboard.admin',compact('data','title','thead','column','route'));
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
    public function store(StoreClasseRoomRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ClasseRoom $classeRoom)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ClasseRoom $classeRoom)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateClasseRoomRequest $request, ClasseRoom $classeRoom)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ClasseRoom $classeRoom)
    {
        //
    }
}
