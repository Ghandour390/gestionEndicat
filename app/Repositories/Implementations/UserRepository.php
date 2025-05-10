<?php
namespace App\Repositories\Implementations;
use App\Models\Apprenant;
use App\Models\Formateur;
use App\Models\Role;
use App\Models\User;
use App\Repositories\IUserRepository;


class UserRepository implements IUserRepository{

    protected User $user;
  public function __construct(){
    $this->user=new User();
  }


    public function findAllusers(){
       return $this->user::with('roles')->paginate(10);
    }

    public function deleteUser( $id ){
      $user=User::find($id);
      if($user){
        $user->delete();
        return true;
      }
      return false;
    }
    public function createUser(array $data){
    $user = new User();
          $user->firstname = $data['firstname'];
          $user->lastname = $data['lastname'];  
          $user->email = $data['email'];
          $user->password = bcrypt($data['password']);
          if ($data['photo']->hasFile('photo')) {
            $path = $data['phone']->file('photo')->store('photos', 'public');
            $user->photo = $path;}
          $user->phone = $data['phone'];
          
          $role = Role::where('id', $data['role_id'])->first();
          $user->roles()->associate($role);
          if($user->roles->name=="formateur"){
            $formateur= new Formateur();
            $formateur->user_id=$user->id;
            $formateur->specialite=$data['specialite'];
          }
          if($user->roles->name=="apprenant"){
            $aprenant=new Apprenant();
            $aprenant->user_id=$user->id;
            $aprenant->nemerodebadge=$data['nemerodebadge'];
          }
            $user->save();
            return $user;
        }
      
      

    public function findByEmail($email){
        return $this->user::where('email', $email)->first();
    }
    public function getById($id){
      $user=$this->user->where('id',$id)->first();
      return $user;
    }

    public function updateUser($id, array $data){
        $user = User::find($id);
        if ($user) {
          $user = new User();
          $user->firstname = $data['firstname'];
          $user->lastname = $data['lastname'];  
          $user->email = $data['email'];
          $user->password = bcrypt($data['password']);
          if ($data['photo']->hasFile('photo')) {
            $path = $data['phone']->file('photo')->store('photos', 'public');
            $user->photo = $path;}
          $user->phone = $data['phone'];
          $user->dateNaissance=['dateNaissance'];
          
          $role = Role::where('id', $data['role_id'])->first();
          $user->roles()->associate($role);
          if($user->roles->name=="formateur"){
            $formateur= new Formateur();
            $formateur->user_id=$user->id;
            $formateur->specialite=$data['specialite'];
          }
          if($user->roles->name=="apprenant"){
            $aprenant=new Apprenant();
            $aprenant->user_id=$user->id;
            $aprenant->nemerodebadge=$data['nemerodebadge'];
          }
            $user->save();
            return $user;
        }
        return null;
    }
    


}