<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

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

//TaskController es el controlador, y seleccionamos 
//la clase index para CONTROLAR que recibimos por url.
// Muestra el todo list
Route::get('/', [TaskController::class,'index']);

// Recibe los datos del metodo post e ingresen a la function storage
// del TaskController
// Manipulamos los datos en el store de TaskController 
Route::post('/', [TaskController::class,'store']);

//Borrar tasca por id
Route::delete('/{id}', [TaskController::class,'destroy'])->name('task.destroy');

