<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ClinicaController;
use App\Http\Controllers\MedicoController;
use App\Http\Controllers\EspecialidadController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PermisoController;
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

Route::get('/', function () {
    return view('login');
});

Route::resource('/user', UserController::class);
Route::resource('/clinica', ClinicaController::class);
Route::resource('/medico', MedicoController::class);
Route::resource('/especialidad', EspecilidadController::class);
Route::resource('/role', RoleController::class);
Route::resource('/user', PermisoController::class);





