<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Zamowienia;

class ZamowienieController extends Controller
{
   public function index() {
        return view('Zamow');
    }
      
    public function store(Request $request) {
       
        //dd($request);
        $this->validate($request, [
        'imie' => 'required|max:255',
        'nazwisko' => 'required|max:255',
        'email' => 'required|email|max:255',
        'nrtel' => 'required|max:255',
        'ulica' => 'required|max:255',
        'kodpczt' => 'required|max:255',
        'miasto' => 'required|max:255',
        'uwagi' => 'max:255|min:0',
        'kawa' => 'required|max:255',
        'ciastko' => 'required|max:255',
        'sniadanie' => 'required|max:255',
        'dodatki' => 'max:255',
        'platnosc' => 'required',
        ]);
        //$myCheckboxes = $request->input('dodatki');
        //dd($myCheckboxes);
        
        Zamowienia::create([
        'imie' => $request->imie,
        'nazwisko' => $request->nazwisko ,
        'email' => $request->email,
        'nrtel' => $request->nrtel,
        'ulica' => $request->ulica,
        'kodpczt' => $request->kodpczt,
        'miasto' => $request->miasto,
        'uwagi' => json_encode($request->uwagi),
        'kawa' => $request->kawa,
        'ciastko' => $request->ciastko,
        'sniadanie' => $request->sniadanie,
        'dodatki' => json_encode($request->dodatki),
        'platnosc' => $request->platnosc,
        ]);
        
        return redirect()->route('Info');
        
    }
}
