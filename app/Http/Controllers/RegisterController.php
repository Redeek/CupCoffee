<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class RegisterController extends Controller
{

//    public function __construct(){
//        $this->middleware(['guest']);
//    }

    public function index(){
        return view('register');
    }

    public function store(Request $request){
        $this->validate($request, [
            'email' => 'required|email|max:100',
            'password' => 'required|confirmed|min:6|max:30',
        ]);

        User::create([
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        auth()->attempt($request->only('email','password'));

        return redirect()->route('Dostawa');

    }
}
