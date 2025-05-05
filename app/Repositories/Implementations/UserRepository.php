<?php
namespace App\Repositories\Implementations;
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
    public function createUser(array $Data){
    $user = new User();
    $user->firstname = $Data['firstname'];
    $user->lastname = $Data['lastname'];  
    $user->email = $Data['email'];
    $user->password = bcrypt($Data['password']);
    $user->phone = $Data['phone'];
    $role = Role::where('id', $Data['role_id'])->first();
    $user->roles()->associate($role);
      $user->save();
        return $user;
    }

    public function findByEmail($email){
        return $this->user::where('email', $email)->first();
    }
    public function getById($id){
      $user=$this->user->where('$id')->first();
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
          $user->phone = $data['phone'];
          $role = Role::where('id', $data['role_id'])->first();
          $user->roles()->associate($role);
            $user->save();
            return $user;
        }
        return null;
    }
    


}