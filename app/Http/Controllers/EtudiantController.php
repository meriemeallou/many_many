<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etudiant;
use App\Models\Module;



class EtudiantController extends Controller
{
    public function show(Request $request){
        $etudiants = Etudiant::with('modules')->get();
        // dd($etudiants[0]->modules);
        return view('etudiant', compact('etudiants'));
    }
}
