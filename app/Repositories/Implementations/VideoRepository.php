<?php
namespace App\Repositories\Implementations;

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
        $Video=$this->video->create( $Data);
        return $Video;
    }

}