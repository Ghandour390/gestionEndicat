<?php

namespace App\Http\Controllers;

use AdminRepository;
use App\Models\Admin;
use App\Repositories\IRoleRepository;
use App\Repositories\IUserRepository;
use App\Repositories\IAdminRepository;

use App\Http\Requests\StoreAdminRequest;
use App\Http\Requests\UpdateAdminRequest;
use Exception;
use Illuminate\Http\Request;
use function Laravel\Prompts\select;

class AdminController extends Controller
{
   
    protected $IAdminRepository;
    protected $iUserRepository;
    protected $iRoleRepository;


    public function __construct(IAdminRepository $iAdminRepository,IUserRepository $iUserRepository,IRoleRepository $iRoleRepository){
         $this->IAdminRepository=$iAdminRepository;
        $this->iUserRepository=$iUserRepository;
        $this->iRoleRepository=$iRoleRepository;
        
        }
    public function index()
    {


        $user = $this->iUserRepository->findAllusers();
        
    //     $title = "gestion des utilisateurs";
    //     $thead = ['lastname','firstname','phone','email','role'];
        $roles= $this->iRoleRepository->getAllRoles();
    //     $route = "admin";

    //     // dd($roles);
    //     $column=[
    //         'lastename'=>'texte',
    //         'firstname'=>'texte',
    //         'email'=>'email',
    //         'phone'=>'Number',
    //         'password'=>'password',
    //         'select'=> [
    //             'role_id'=>$roles
    //             ]
    //     ];

    //     // dd($column);
    //    return view('dashboard.admin', compact('data', 'title', 'thead','route','column'));
    return view('user.index',compact('users','roles'));
    }
    public function getbyId($id){
        $edit=$this->iUserRepository->getById($id);
        return response()->json($edit);
    }

  
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    // dd($request->all());
       $this->iUserRepository->createUser($request->all());
        return $this->index()->with('success','user create avec saccess');
 
    }

    /**
     * Display the specified resource.
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAdminRequest $request)
    {
        // dd($request->all());
        $this->iUserRepository->updateUser($request->all(),$request->id);
        return $this->index()->with('success','user update avec saccess');
    }
   
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $this->iUserRepository->deleteUser($id);
        return $this->index()->with('uccess','le user suprimie avec success');
    }
}
