<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etudiant;
use App\Models\Module;

class ModuleController extends Controller
{
    public function show(Request $request){
        $modules = Module::with('etudiants')->get();
        return view('module', compact('modules'));
    }
}
