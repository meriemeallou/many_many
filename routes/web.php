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
Route::post('/etudiant/update', [EtudiantController::class, 'update_etudiant_traitement'])->name('update_etudiant_traitement');
Route::get('/etudiant/update/{id}', [EtudiantController::class, 'update_etudiant'])->name('update_etudiant');
Route::get('/delete-etudiant/{id}', [EtudiantController::class, 'delete_etudiant']);