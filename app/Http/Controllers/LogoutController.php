<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogoutController extends Controller
{
//   public function index(){
//        
//        return view('Logout');
//    }
    
    public function logout(Request $request){
        
        auth()->logout();
         
        return redirect()->route('stronagl');
    }
}
