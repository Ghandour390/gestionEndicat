<?php

namespace App\Http\Controllers;


use App\Enums\Specialite;
use App\Models\Admin;
use App\Models\User;
use App\Repositories\IRoleRepository;
use App\Repositories\IUserRepository;
use App\Repositories\IAdminRepository;

use App\Http\Requests\StoreAdminRequest;
use App\Http\Requests\UpdateAdminRequest;
use Cloudinary\Cloudinary;
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


        $users = $this->iUserRepository->findAllusers();
        $roles= $this->iRoleRepository->getAllRoles();
        $specialites=Specialite::cases();
    
    return view('users.index',compact('users','roles','specialites'));
 

    }
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAdminRequest $request)
    {
       
          

            $userData = $request->all();
            if(!$userData['peutGerer']){$userData['peutGerer']=1;}

            $this->iUserRepository->createUser($userData);
            return redirect()->route('dashboard.admin')->with('success', 'Utilisateur créé avec succès');

       
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
    public function update(UpdateAdminRequest $request, $id)
    {
        // dd($id);
        // dd($request->id);
            $userData = $request->all();
            $this->iUserRepository->updateUser($id, $userData);
            return redirect()->route('dashboard.admin')->with('success', 'Utilisateur mis à jour avec succès');
            
    }
    /**
     * Remove the specified resource from storage.
*/
    public function destroy($id)
    {
        // dd($id);
        $this->iUserRepository->deleteUser($id);
        return redirect()->route('dashboard.admin')->with('uccess','le user suprimie avec success');
    }
}
