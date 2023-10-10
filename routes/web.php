<?php

use App\Http\Controllers\antesGradoController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\egresadosController;
use App\Http\Controllers\formularioController;
use App\Http\Controllers\proximosGraduadosController;
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

Route::get('/', function () {return view('welcome');});

Route::get('/',[homeController::class, 'index'])->name('home');
Route::resource('formularios',formularioController::class);
Route::resource('antesgrado',antesGradoController::class);
Route::resource('/listado-proximo-graduado/$id',proximosGraduadosController::class);
Route::resource('/lista-egresados',egresadosController::class);
