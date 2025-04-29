<?php

namespace App\Http\Controllers;

use App\Repositories\IRoleRepository;
use App\Repositories\IUserRepository;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $IuserRepository;
    protected IRoleRepository $iRoleRepository;


    public function __construct(IUserRepository $iUserRepository,IRoleRepository $iRoleRepository){
        $this->IuserRepository=$iUserRepository;
        $this->iRoleRepository=$iRoleRepository;
    }

    public function index()
{
    // dd($this->IuserRepository->findAllusers());
    $item = $this->IuserRepository->findAllusers()->laod('roles');
    $columns = ['lastname','firstname','email', 'roles.name'];
    

    return view('datashow',  [
        'title' => 'Liste des Utilisateurs',
        'thead' => ['lastname','firstname','email', 'roles.name'],
        'items' => $item,
        'columns' => $columns,
        'relations' => [
            'roles' => $this->iRoleRepository->getAllRoles(),
        ],
        'routeName' => 'users',
    ]);


}


}
