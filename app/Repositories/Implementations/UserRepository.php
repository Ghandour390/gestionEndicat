<?php
namespace App\Repositories\Implementations;
use App\Models\Admin;
use App\Models\Apprenant;
use App\Models\Formateur;
use App\Models\Role;
use App\Models\User;
use App\Repositories\IUserRepository;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Hash;


class UserRepository implements IUserRepository
{

  protected User $user;
  public function __construct()
  {
    $this->user = new User();
  }


  public function findAllusers()
  {
    return $this->user::with('roles')->paginate(10);
  }

  public function deleteUser($id)
  {
    $user = User::find($id);
    if ($user) {
      $user->delete();
      return true;
    }
    return false;
  }
  public function createUser(array $data)
  {
//  dd($data);
    $user = new User();
    $user->firstname = $data['firstname'];
    
    $user->lastname = $data['lastname'];
    $user->email = $data['email'];
    $user->password = Hash::make($data['password']);
    $user->phone = $data['phone'];
    $user->dateNaissance = $data['dateNaissance'];
    // dd($user->dateNaissance );

    if (isset($data['photo']) && $data['photo'] instanceof \Illuminate\Http\UploadedFile) {
      // dd($data['photo']);
        $cloudinary = new \Cloudinary\Cloudinary([
            'cloud' => [
                'cloud_name' => env('CLOUDINARY_CLOUD_NAME'),
                'api_key' => env('CLOUDINARY_API_KEY'),
                'api_secret' => env('CLOUDINARY_API_SECRET'),
            ],
        ]);

        $upload = $cloudinary->uploadApi()->upload($data['photo']->getRealPath(), [

            'folder' => 'courses',
            'resource_type' => 'image',
            'http_options' => [
                'verify' => false, 
            ],
        ]);


        $user->photo = $upload['secure_url'];
      
    }
     $user->role_id=$data['role_id'];
    $user->save(); 

    $role = Role::find($data['role_id']);
    if ($role) {
        $user->roles()->associate($role);
    }

    if ($user->roles->name == "formateur") {
        $formateur = Formateur::firstOrNew(['user_id' => $user->id]);
        $formateur->specialite = $data['specialite'];
        $formateur->save();
    }

    if ($user->roles->name == "apprenant") {
        $apprenant = Apprenant::firstOrNew(['user_id' => $user->id]);
        $apprenant->nemerodebadge = $data['numerodebadge'];
        $apprenant->save();
    }

    if ($user->roles->name == "admin") {
        $admin = Admin::firstOrNew(['user_id' => $user->id]);
        $admin->peutGerer = $data['peutGerer'] ?? true;
        $admin->save();
    }

    return $user;
}


  public function findByEmail($email)
  {
    return $this->user::where('email', $email)->first();
  }
  public function getById($id)
  {
    $user = $this->user->where('id', $id)->first();
    return $user;
  }

  public function updateUser($id, array $data)
{
  // dd(vars: 'reppoo');
  // dd('id');
  $user = User::find($id);
  // dd(vars: $user);



    if (!$user) return null;

    $user->firstname = $data['firstname'];
    
    $user->lastname = $data['lastname'];
    $user->email = $data['email'];
    $user->password = Hash::make($data['password']);
    $user->phone = $data['phone'];
    $user->dateNaissance = $data['dateNaissance'];
    // dd($user->dateNaissance );

    if (isset($data['photo']) && $data['photo'] instanceof \Illuminate\Http\UploadedFile) {
      // dd($data['photo']);
        $cloudinary = new \Cloudinary\Cloudinary([
            'cloud' => [
                'cloud_name' => env('CLOUDINARY_CLOUD_NAME'),
                'api_key' => env('CLOUDINARY_API_KEY'),
                'api_secret' => env('CLOUDINARY_API_SECRET'),
            ],
        ]);
        // dd($cloudinary);

        $upload = $cloudinary->uploadApi()->upload($data['photo']->getRealPath(), [

            'folder' => 'courses',
            'resource_type' => 'image',
            'http_options' => [
                'verify' => false, 
            ],
        ]);
        // dd($upload);

        $user->photo = $upload['secure_url'];
        // dd($user->photo);
        // dd($data['photo']);
    }
    $user->role_id=$data['role_id'];

    $user->save(); 

    $role = Role::find($data['role_id']);
    if ($role) {
        $user->roles()->associate($role);
    }

    if ($user->roles->name == "formateur") {
        $formateur = Formateur::firstOrNew(['user_id' => $user->id]);
        $formateur->specialite = $data['specialite'];
        $formateur->save();
    }

    if ($user->roles->name == "apprenant") {
        $apprenant = Apprenant::firstOrNew(['user_id' => $user->id]);
        $apprenant->nemerodebadge = $data['numerodebadge'];
        $apprenant->save();
    }

    if ($user->roles->name == "admin") {
        $admin = Admin::firstOrNew(['user_id' => $user->id]);
        $admin->peutGerer = $data['peutGerer'] ?? true;
        $admin->save();
    }

    return $user;
  }

  public function register(array $data)
  {
    $user = new User();
    $user->lastname = $data['lastname'];
    $user->firstname = $data['firstname'];
    $user->email = $data['email'];
    $user->password = hash::make($data['password']);
    $user->phone = $data['phone'];
    $user->role_id = $data['role_id'];
    $user->save();
    return $user;
  }



}