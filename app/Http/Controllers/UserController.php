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
}


}
