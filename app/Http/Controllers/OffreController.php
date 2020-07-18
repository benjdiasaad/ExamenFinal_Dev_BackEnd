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

    public function show($adresse)
    {
        $offre = Offre::where('adresse', $adresse)->firstOrFail();
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

    public function search()
    {
        
        request()->validate([
            'q' => 'required|min:3'
        ]);
       
        $q = request()->input('q');
        
        $offres = Offre::where('adresse', 'like', "%$q%")
                ->paginate(6);

          return view('template.search')->with('offres', $offres);
    }

}
