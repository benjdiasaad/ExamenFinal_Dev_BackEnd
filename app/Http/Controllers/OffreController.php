<?php

namespace App\Http\Controllers;
use App\Models\Offre;

use Illuminate\Http\Request;

class OffreController extends Controller
{
    public function index(){

       $offre = Offre::all();
       return view('template.index')->with('offre', $offre);  
    }

    public function show($typlog)
    {
        $offre = Offre::where('typlog', $typlog)->firstOrFail();
        return view('template.product')->with('offre', $offre);
    }

    public function storage(Request $request)
       {

        $message = \App\Models\Offre::create([
            'typlog' => $request->typ,
            'des' => $request->des,
            'adresse' => $request->addr,
            'prix' => $request->prix,
            'capacite' => $request->cpt,
            'privilege' => $request->prv,
            'superficie' => $request->spc,
            'imgPath' => $request->img
            
        ]);
    

        return redirect()->route('template.index')->with('success', 'votre offre a été bien envoyé');
       }

}
