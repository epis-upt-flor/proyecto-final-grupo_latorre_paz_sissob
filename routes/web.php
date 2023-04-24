<?php

use Illuminate\Support\Facades\Route;


use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\CodigosCuiSnipController;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/usuarios', [UsuariosController::class, 'index']);
Route::post('/guardarUsuario', [UsuariosController::class, 'guardarUsuario']);
Route::get('/buscarUsuario', [UsuariosController::class, 'buscarUsuario']);
Route::get('/borrarUsuario', [UsuariosController::class, 'borrarUsuario']);
Route::get('/cui-snip', [CodigosCuiSnipController::class, 'listar'])->name('cui-snip');

Route::get('/ObraTerceros', [ObraTercerosController::class, 'index']);
Route::post('/guardarObraTerceros', [ObraTercerosController::class, 'guardarObraTerceros']);
Route::get('/buscarObraTerceros', [ObraTercerosController::class, 'buscarObraTerceros']);
Route::get('/borrarUObraTerceros', [ObraTercerosController::class, 'borrarUObraTerceros']);
