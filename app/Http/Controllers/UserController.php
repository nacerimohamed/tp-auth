<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getRegister(){
        return view('register');
    }

    public function getLogin(){
       return view('login');
    }
    
    public function getDashboard(){
        return view('dasboard');
    }



    public function register(Request $request){
        $data=$request->validate([
            'name' => 'required|string|max:155',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        
        User::create($data);
        return redirect()->route('login');
    }
}

