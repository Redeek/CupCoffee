<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    public function index(){
        
        return view('Loginin');
    }
    
    public function login(Request $request){
        
        $this->validate($request,[
            'email' => 'required|email',
            'password' => 'required'
        ]);
        
        if(!auth()->attempt($request->only('email','password'))){
         
            return back()->with('status', 'Niewłaściwe dane');
        }
        
        return redirect()->route('Dostawa');
    }
}
