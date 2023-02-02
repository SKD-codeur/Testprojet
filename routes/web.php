<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EcoleController;
use App\Http\Controllers\EleveController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [EcoleController::class, "index"]);
Route::post("/ecole/create", [EcoleController::class, "store"]);
Route::get("/ecole/delete/{id}", [EcoleController::class, "destroy"]);



/* Route::get('/index', function () {
    return view('index');
}); */

/* Route::get('/formulaire', function () {
    return view('formulaire');
}); */


Route::get('/eleve', [EleveController::class, "index"]);
Route::post("/eleve/create",[EleveController::class,"store"]);
Route::get("/eleve/create/{id}",[EleveController::class,"destroy"]);
