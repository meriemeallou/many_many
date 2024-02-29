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
    public function update_etudiant($id){
        $etudiants = Etudiant::find($id);
        $modules = $etudiants->modules()->get();
        
        return view('update', compact('etudiants','modules'));
    }
    public function update_etudiant_traitement(Request $request){
        $request->validate([
            'name' =>'required',
            'surname' =>'required',
            'age' =>'required',
        ]);

        $etudiant =Etudiant::find($request->id);
        $etudiant->name =$request->name;
        $etudiant->surname =$request->surname;
        $etudiant->age =$request->age;

        


        $etudiant->update();

        return redirect('/etudiant')->with('status', 'Etudiant a bien ete modifie avec succes');
    }}
