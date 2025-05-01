<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use App\Http\Requests\StoreClasseRequest;
use App\Http\Requests\UpdateClasseRequest;
use App\Repositories\IClasseRepository;
use App\Repositories\IClasseRoomRepository;



class ClasseController extends Controller
{
    protected $iclassrapository;
    protected $iClasseroomRepository;

    public function __construct(IClasseRepository $iClasseRepository,IClasseRoomRepository $iClasseroomRepository)
    {
        $this->iclassrapository= $iClasseRepository;
        $this->iClasseroomRepository=$iClasseroomRepository;
    }
    public function index()
    {
        $data=$this->iclassrapository->getAllClass();
        $classerooms= $this->iClasseroomRepository->getAllClassRooms();
        // dd($classeroom);
    //   dd($classerooms);
       $title="gestion des classes";
       $thead = ['name'];
       $route='/classes';
       $column=[
        'name'=>'text',
        'select'=>[
            'classeroom_id'=>[
                $classerooms
            ]
        ]

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
