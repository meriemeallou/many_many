<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\ModuleController;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function(){
    return view('welcome');
});
Route::get('/etudiant', [EtudiantController::class, 'show']);
Route::get('/module', [ModuleController::class, 'show']);
Route::get('/update-etudiant/{id}', [EtudiantController::class, 'update_etudiant']);
Route::put('/update/traitement', [EtudiantController::class, 'update_etudiant_traitement']);


