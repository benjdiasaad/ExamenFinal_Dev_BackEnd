<?php

namespace App\Http\Controllers;

use App\Models\Demande;
use Illuminate\Http\Request;

class DemandeController extends Controller
{
    public function demand(){

        $demande = Demande::all();
        return view('template.blog')->with('demande', $demande);  
     }

     public function demande($coordonnees)
     {
         $demande = Demande::where('coordonnees', $coordonnees)->firstOrFail();
         return view('template.details')->with('demande', $demande);
     } 
     public function store(Request $request)
       {

        $message = \App\Models\Demande::create([
            'coordonnees' => $request->coord,
            'budMax' => $request->max,
            'comments' => $request->comm
        ]);
    

        return redirect()->route('template.index')->with('success', 'votre Demande bien envoyé');
       }
     
}
