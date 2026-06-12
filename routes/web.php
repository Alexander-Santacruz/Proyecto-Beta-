<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OperacionesController;
use App\Http\Controllers\CategoryController;

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


// Route::get('/consulta',[ConsultasController::class,'consulta']);
// Route::get('/sumar/{num1}/{num2}',[OperacionesController::class,'sumar']);
// Route::get('/areatriangulo/{base}/{altura}',[OperacionesController::class,'areaTriangulo']);
// Route::get('/saludofuncion',[OperacionesController::class,'saludar']);

Route::get('category/create',[CategoryController::class,'create']);
Route::post('category/store',[CategoryController::class,'store'])->name('category.store');
