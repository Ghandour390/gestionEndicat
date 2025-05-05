<?php
namespace App\Repositories\Implementations;

use App\Models\Ressource;
use App\Models\Video;
use App\Repositories\IVideoRepository;

class VideoRepository implements IVideoRepository{
    protected $video;

        public function __construct(){$this->video= new Video();}
    public function getAllVideos(){
        return $this->video::all();
    }

    public function deleteVideos($id){
        $video=Video::find($id);
        if($video){
            $video->delete();
            return true;
        }
        return false ;
    }

    public function createVideo($Data){
        $Video=new Video();
        $Video->contenu=$Data['contenu'];
        $ressource = Ressource::where('id', $Data['ressource_id'])->first();
        $Video->ressource()->associate($ressource);
        $Video->save();
        return $Video;
    }

    public function updateVideo($id, array $data){
        $video=Video::find($id);
        if($video){
            $video->update($data);
            return $video;
        }
        return null;
    }

}