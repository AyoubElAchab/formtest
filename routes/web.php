<?php

use Illuminate\Support\Facades\Route;

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

// pour afficher tout les modules
Route::get('/', '\App\Http\Controllers\c1@getDataFromDB');

// pour afficher les form pour add new module
Route::get('/ajouter','\App\Http\Controllers\c1@getFormAddModule');

// pour ajouter un module
Route::post('/saveAjout','\App\Http\Controllers\c1@InsertNewModule');

// pour update un module
// Afficher la form de update with parametre "c"
Route::get('/modifier/{c}','\App\Http\Controllers\c1@FormUpdateModule');
 // save module after update

Route::post('/saveUpdate','\App\Http\Controllers\c1@saveUpdateModule');

// pour delete un module ;
 Route::get('/supprimer/{c}','\App\Http\Controllers\c1@deleteModule');