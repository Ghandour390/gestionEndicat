<?php

namespace App\Http\Controllers;

use App\Enums\Roles;
use App\DTOs\userDTO;
use App\Repositories\IUserRepository;
use App\Services\IUser;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    protected IUserRepository $iUserRepository;
    public function  __construct(IUserRepository $iUserRepository)
    {
        $this->iUserRepository = $iUserRepository;
    }
public function index(){


return view("auth.login");
}  
  public function login(LoginRequest $request)
    {
        // dd($request);
        // if (!$request) {
        //     return back();
        // }

// dd(Auth::attempt(['email' => $request->email,'password' => $request->password]));
// dd($request->password);

        if (!Auth::attempt(['email' => $request->email,'password' => $request->password])) {
// dd(['email' => $request->email,'password' => $request->password]);

            $user =   $this->iUserRepository->findByEmail($request->email);
       

            Auth::login($user);
           
            $request->session()->regenerate();
    
            return redirect("/dashboard")->with('succuss','login sucessful');
        }
 
     
        return redirect('/')->with('success', 'Login not successful');
    }
 
    public function logout(Request $request)
    {
        dd("ifdhds");
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function register(RegisterRequest $request)
    {
        

        if (!$request->validated()) {
            return redirect()->route('register')->with('errour','validie les champ');
        }
       

       try {
        $data = $request->all();
        $data['role_id'] = 3;
        // dd($data);

        $data['password'] =Hash::make($data['password']);

        $this->iUserRepository->createUser($data);

        return redirect("/login");
       } catch (\Throwable $th) {
        return redirect('/register')->with('errour','$th');
       }
    }
}
