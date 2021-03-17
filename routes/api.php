<?php

use App\Http\Controllers\Api\CidadesController;
use App\Http\Controllers\Api\EnderecoController;
use App\Http\Controllers\Api\EstadosController;
use App\Http\Controllers\Api\UsuarioController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// // Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::get('enderecos', [EnderecoController::class, "index"]);
Route::get('enderecos/{id}', [EnderecoController::class, "show"]);

Route::get('cidades', [CidadesController::class, "index"]);
Route::get('cidades/totalusuarios', [CidadesController::class, "somaUsuariosCidades"]);
Route::get('cidades/{id}', [CidadesController::class, "show"]);


Route::get('estados', [EstadosController::class, "index"]);
Route::get('estados/totalusuarios', [EstadosController::class, "somaUsuariosEstados"]);
Route::get('estados/{id}', [EstadosController::class, "show"]);

Route::get('usuario', [UsuarioController::class, "index"]);
Route::post('usuario', [UsuarioController::class, "store"]);
Route::get('usuario/{id}', [UsuarioController::class, "show"]);
Route::put('usuario/{id}', [UsuarioController::class, "update"]);
Route::delete('usuario/{id}', [UsuarioController::class, "destroy"]);

