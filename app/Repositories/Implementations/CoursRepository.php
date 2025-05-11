<?php
namespace App\Repositories\Implementations;

use App\Models\Classe;
use App\Models\Cours;
use App\Repositories\ICoursRepository;

class CoursRepository implements ICoursRepository {
    protected $cours;
    
    public function __construct() {
        $this->cours = new Cours();
    }

    public function getAllCours() {
        return $this->cours::all();
    }

    public function deleteCours($id) {
        $cour = Cours::find($id);
        if($cour) {
            $cour->delete();
            return true;
        }
        return false;
    }

    public function createCour(array $data) {
        $cour = new Cours();
       if (isset($data['couver']) && $data['couver'] instanceof \Illuminate\Http\UploadedFile) {
      // dd($data['photo']);
        $cloudinary = new \Cloudinary\Cloudinary([
            'cloud' => [
                'cloud_name' => env('CLOUDINARY_CLOUD_NAME'),
                'api_key' => env('CLOUDINARY_API_KEY'),
                'api_secret' => env('CLOUDINARY_API_SECRET'),
            ],
        ]);

        $upload = $cloudinary->uploadApi()->upload($data['couver']->getRealPath(), [

            'folder' => 'cours',
            'resource_type' => 'image',
            'http_options' => [
                'verify' => false, 
            ],
        ]);


        $cour->couver = $upload['secure_url'];
        $cour->titre = $data['titre'];  
        $cour->description = $data['description'];
        
        $classe = Classe::where('id', $data['classe_id'])->first();
        $cour->classe()->associate($classe);
        $cour->save();
        return $cour;
    }
}



    public function updateCour($id, array $data)
     {
        $cour = Cours::find($id);
        if($cour) {
             if (isset($data['couver']) && $data['couver'] instanceof \Illuminate\Http\UploadedFile) {
      // dd($data['photo']);
        $cloudinary = new \Cloudinary\Cloudinary([
            'cloud' => [
                'cloud_name' => env('CLOUDINARY_CLOUD_NAME'),
                'api_key' => env('CLOUDINARY_API_KEY'),
                'api_secret' => env('CLOUDINARY_API_SECRET'),
            ],
        ]);
    
        $upload = $cloudinary->uploadApi()->upload($data['couver']->getRealPath(), [

            'folder' => 'cours',
            'resource_type' => 'image',
            'http_options' => [
                'verify' => false, 
            ],
        ]);
    }
    
        $cour->couver = $upload['secure_url'];
        $cour->titre = $data['titre'];  
        $cour->description = $data['description'];
        
        $classe = Classe::where('id', $data['classe_id'])->first();
        $cour->classe()->associate($classe);
        $cour->save();
        return $cour;
        }
  
        return null;
    }       

}