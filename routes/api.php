<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\CodigosCuiSnipController;
use App\Http\Controllers\ObraTercerosController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


//ESTE ES TU EJEMPLO PARA QUE TE GUIES EN CREAR OTRAS APIS
// Route::get('/home', [DashboardController::class, 'index'])->name('home');
Route::get('/usuarios', [UsuariosController::class, 'index']);
Route::post('/guardarUsuario', [UsuariosController::class, 'guardarUsuario']);
Route::get('/buscarUsuario', [UsuariosController::class, 'buscarUsuario']);
Route::get('/borrarUsuario', [UsuariosController::class, 'borrarUsuario']);

Route::get('/buscarCuiSnip', [CodigosCuiSnipController::class, 'index']);

Route::get('/ObraTerceros', [ObraTercerosController::class, 'index']);
Route::post('/guardarObraTerceros', [ObraTercerosController::class, 'guardarObraTerceros']);
Route::get('/buscarObraTerceros', [ObraTercerosController::class, 'buscarObraTerceros']);
Route::get('/borrarObraTerceros', [ObraTercerosController::class, 'borrarObraTerceros']);

//
////rutas de Obra Contrata
//Route::get('/ObraContrata',[ObraContrataController::class,'index']);
//Route::post('/GuardarObraContrata',[ObraContrataController::class,'GuardarObraContrata']);
//Route::get('/BuscarObraContrata',[ObraContrataController::class,'BuscarObraContrata']);
//Route::get('/BorrarObraContrata',[ObraContrataController::class,'BorrarObraContrata']);
////rutas de Obra Administracion
//Route::get('/ObraAdministracionDirecta',[ObraAdministracionDirectaController::class,'index']);
//Route::post('/GuardarObraAdministracionDirecta',[ObraAdministracionDirectaController::class,'GuardarObraAdministracionDirecta']);
//Route::get('/BuscarObraAdministracionDirecta',[ObraAdministracionDirectaController::class,'BuscarObraAdministracionDirecta']);
//Route::get('/BorrarObraAdministracionDirecta',[ObraAdministracionDirectaController::class,'BorrarObraAdministracionDirecta']);
//

// Route::get('/', function () {
//     return ['some' => 123412];
// });


