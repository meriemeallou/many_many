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
            'note' => 'required',
        ]);

        $etudiant =Etudiant::find($request->id)->with('modules')->get();
        $etudiant->name =$request->name;
        $etudiant->surname =$request->surname;
        $etudiant->age =$request->age;
        $module->pivot->note =$request->note;
    
        $etudiant->update();
        $module->pivot->update();
        

        return redirect('/etudiant')->with('status', 'Etudiant a bien ete modifie avec succes');
    }
    public function delete_etudiant($id){
        $etudiant = Etudiant::find($id);
        $etudiant->delete();
        return redirect('/etudiant')->with('status', 'Etudiant a bien ete supprime avec succes');

    }
}
