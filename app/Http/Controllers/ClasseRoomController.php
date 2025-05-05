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
        $classerooms= $this->iaclassroomrepository->getAllClassRooms();
        
        // dd($data);
        // $title="gestion classerooms";
        // $thead =['capacite','name','numero'];
        // $route='/classeroom';
        // $column=[
        //     'capacite'=>'text',
        //     'name'=>'texte',
        //     'numero'=>'numeric'

        // ];
        // return view('dashboard.admin',compact('data','title','thead','column','route'));
        return view('classeroom.index',compact('classerooms'));
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
        // dd($request->all());
        $this->iaclassroomrepository->createClasseroom($request->all());
        return $this->index()->with('success','classeroom create avec saccess');
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
        // dd($request->all());
        $this->iaclassroomrepository->updateClasseroom($request->all(),$request->id);
        return $this->index()->with('success','classeroom update avec saccess');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ClasseRoom $classeRoom)
    {
        $this->iaclassroomrepository->deleteClasse($classeRoom->id);
        return $this->index()->with('success','classeroom suprimie avec success');
    }
}
