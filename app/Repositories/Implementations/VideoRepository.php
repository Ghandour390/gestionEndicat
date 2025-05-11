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

    public function createVideo($data){
        $video=new Video();
        if (isset($data['contenu']) && $data['contenu'] instanceof \Illuminate\Http\UploadedFile) {
      // dd($data['photo']);
        $cloudinary = new \Cloudinary\Cloudinary([
            'cloud' => [
                'cloud_name' => env('CLOUDINARY_CLOUD_NAME'),
                'api_key' => env('CLOUDINARY_API_KEY'),
                'api_secret' => env('CLOUDINARY_API_SECRET'),
            ],
        ]);

        $upload = $cloudinary->uploadApi()->upload($data['contenu']->getRealPath(), [

            'folder' => 'video',
            'resource_type' => 'video',
            'http_options' => [
                'verify' => false, 
            ],
        ]);


        $video->contenu = $upload['secure_url'];
        $ressource = Ressource::where('id', $data['ressource_id'])->first();
        $video->ressource()->associate($ressource);
        $video->save();
        return $video;
    }
}


 public function getAllVideosByCours($coursId)
{
   
    $resources = Ressource::where('cours_id', $coursId)
                         ->with('videos')
                         ->get();

  
    $videos = $resources->flatMap(function ($resource) {
        return $resource->videos;
    });

    return $videos;
}
    public function updateVideo($id, array $data){
        $video=Video::find($id);
        if($video){
            if (isset($data['contenu']) && $data['contenu'] instanceof \Illuminate\Http\UploadedFile) {
      // dd($data['photo']);
        $cloudinary = new \Cloudinary\Cloudinary([
            'cloud' => [
                'cloud_name' => env('CLOUDINARY_CLOUD_NAME'),
                'api_key' => env('CLOUDINARY_API_KEY'),
                'api_secret' => env('CLOUDINARY_API_SECRET'),
            ],
        ]);

        $upload = $cloudinary->uploadApi()->upload($data['contenu']->getRealPath(), [

            'folder' => 'video',
            'resource_type' => 'video',
            'http_options' => [
                'verify' => false, 
            ],
        ]);


        $video->contenu = $upload['secure_url'];
        $ressource = Ressource::where('id', $data['ressource_id'])->first();
        $video->ressource()->associate($ressource);
        $video->save();
      
    }
            return $video;
        }
        return null;
    }

}