<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dowoz;

class DowozController extends Controller
{
    public function index() {
        $dowozyadmin = Dowoz::all();
        
        return view('Dowoz',["dowozyadmin"=>$dowozyadmin]);
    }
    
    public static function gdzie() {
        $dowozy = Dowoz::all();
        //dd($dowozy);
        return view('Dowoz',["dowozy"=>$dowozy]);
    }
    
    public function dodaj(Request $request) {
    
    $this->validate($request, [
        'miasto' => 'required|max:255',
        'ulica' => 'required|max:255'
        ]);
    
//    dd($request);
    
    Dowoz::create([
        'miasto' => $request->miasto,
        'ulica' => $request->ulica
        ]);
    $dowozyadmin = Dowoz::all();
    return view('Dowoz',["dowozyadmin"=>$dowozyadmin]);
    }
    
    public function usun(Dowoz $dowoz){
        
        $dowoz->delete();
        $dowozyadmin = Dowoz::all();
        return back();
    }
   
}


