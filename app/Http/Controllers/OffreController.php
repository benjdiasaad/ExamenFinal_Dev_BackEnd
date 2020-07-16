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

}
