<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etudiant;
use App\Models\Module;



class EtudiantController extends Controller
{
    public function show(Request $request){
        $etudiants = Etudiant::with('modules')->get();
        return view('etudiant', compact('etudiants'));
    }
    public function update_etudiant($id)
    {
        $etudiant = Etudiant::with('modules')->find($id);
        return view('update_etudiant', compact('etudiant'));
    }

    public function update_etudiant_traitement(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'age' => 'required',
            'note' => 'required',
        ]);

        $etudiant = Etudiant::find($request->id);
        $etudiant->name = $request->name;
        $etudiant->surname = $request->surname;
        $etudiant->age = $request->age;
        $module = $etudiant->modules->first();
        $etudiant->modules()->updateExistingPivot($module->id, ['note' => $request->note]);

        $etudiant->save();

        return redirect('/etudiant')->with('status', 'Etudiant a bien ete modifie avec succes');
    }

    public function delete_etudiant($id){
        $etudiant = Etudiant::find($id);
        $etudiant->delete();
        return redirect('/etudiant')->with('status', 'Etudiant a bien ete supprime avec succes');

    }
}