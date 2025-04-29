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
       return $this->user::with('roles')->get();
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
    


}