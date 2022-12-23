<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function loginAdmin()
    {
        // if(auth()->check()){
        //     return redirect()->to(path:'home');
        // }
        return view('login_in');
    }
    public function postloginAdmin(Request $request) 
    {
        // dd($request->has('remember_me') ? true : false);
        $remember = $request->has('remember_me') ? true : false;
        if (auth()->attempt([
            'email' => $request->email,
            'password' => $request->password,
        ], $remember)){
            return redirect()-> to('end-users.homepage'); 
        }
    }

    public function signupAdmin(){
        return view('sign_in');
    }
}
