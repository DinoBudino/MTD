<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\AreasController;
use App\Http\Controllers\GestionUsuariosController;

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

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');


//muestra pagina registro de usuario
Route::get('register', [RegistroController::class,'registerview'])->name('register');
//muestra landing cuando usaurio esta logeado
Route::get('/landing', [RegistroController::class, 'landingPage'])->name('landinglog')->middleware('auth');





Route::post('/register', [RegistroController::class, 'crearUsuario'])->name('crearUsuario');
Route::post('/landinglog', [RegistroController::class, 'login'])->name('login');
Route::post('/logout' ,[RegistroController::class,'logout'])->name('logout');


// Ruta para la página de áreas accesible solo para usuarios autenticados
Route::get('/areas', [AreasController::class, 'index'])->name('areas')->middleware('auth');



// Ruta para la página de gestión de usuarios, accesible solo por usuarios autenticados
Route::get('/usuarios', [GestionUsuariosController::class, 'index'])->name('gestionusuarios')->middleware('auth');

