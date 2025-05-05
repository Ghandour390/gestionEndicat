<?php

namespace App\Http\Controllers;

use App\Models\Video;
use App\Http\Requests\StoreVideoRequest;
use App\Http\Requests\UpdateVideoRequest;
use App\Repositories\IRessourceRepository;
use App\Repositories\IVideoRepository;


class VideoController extends Controller
{
    protected $iVideoRepository;
    protected $iRessourceRepository;

    public function __construct(IVideoRepository $iVideoRepository,IRessourceRepository $iRessourceRepository)
    {
        $this->iVideoRepository=$iVideoRepository;
        $this->iRessourceRepository=$iRessourceRepository;

    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vidieo=$this->iVideoRepository->getAllVideos();
        $ressource=$this->iRessourceRepository->getallRessources();
        // $title="gestion videos";
        // $thead =['contenu','titre'];
        // $route="/videos";
        // $column=[
        //     'titre'=>'text',
        //     'contenu'=>'file',
        //     'select'=>[
        //         'ressource_id'=>$ressource
        //     ]
        // ];
        // return view('dashboard.admin',compact('data','title','thead','route','column'));
        return view('video.index',compact('vidieo','ressource'));
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
    public function store(StoreVideoRequest $request)
    {
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Video $video)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Video $video)
    {
        return response()->json($video);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateVideoRequest $request, Video $video)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $this->iVideoRepository->deleteVideos($id);
        return $this->index()->with('success','le vidieo suprimie avec success');
    }
}
