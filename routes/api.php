<?php

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['namespace'=>'App\Http\Controllers'],function(){
    //Estado
    $controller_estado = 'EstadoController@';
    Route::get('estado', "{$controller_estado}index");
    Route::get('estado/{id}', "{$controller_estado}show");
    Route::post('estado/create',"{$controller_estado}create");
    Route::put('estado/{id}',"{$controller_estado}update");
    Route::patch('protagonista/{id}',"{$controller_estado}update");
    Route::delete('estado/{id}',"{$controller_estado}destroy");

    //Protagonista
    $controller_protagonista ='ProtagonistaController@';
    Route::get('protagonista', "{$controller_protagonista}index");
    Route::get('protagonista/{id}', "{$controller_protagonista}show");
    Route::post('protagonista/create',"{$controller_protagonista}create");
    Route::put('protagonista/{id}',"{$controller_protagonista}update");
    Route::patch('protagonista/{id}',"{$controller_protagonista}update");
    Route::delete('protagonista/{id}',"{$controller_protagonista}destroy");

    //Marca
    $controller_marca ='MarcaController@';
    Route::get('marca', "{$controller_marca}index");
    Route::get('marca/{id}', "{$controller_marca}show");
    Route::post('marca/create',"{$controller_marca}create");
    Route::put('marca/{id}',"{$controller_marca}update");
    Route::patch('marca/{id}',"{$controller_marca}update");
    Route::delete('marca/{id}',"{$controller_marca}destroy");

    //Plataforma
    $controller_plataforma ='PlataformaController@';
    Route::get('plataforma', "{$controller_plataforma}index");
    Route::get('plataforma/{id}', "{$controller_plataforma}show");
    Route::post('plataforma/create',"{$controller_plataforma}create");
    Route::put('plataforma/{id}',"{$controller_plataforma}update");
    Route::patch('plataforma/{id}',"{$controller_plataforma}update");
    Route::delete('plataforma/{id}',"{$controller_plataforma}destroy");

    //Cliente
    $controller_cliente ='ClienteController@';
    Route::get('cliente', "{$controller_cliente}index");
    Route::get('cliente/{nit}', "{$controller_cliente}show");
    Route::post('cliente/create',"{$controller_cliente}create");
    Route::put('cliente/{id}',"{$controller_cliente}update");
    Route::patch('cliente/{id}',"{$controller_cliente}update");
    Route::delete('cliente/{id}',"{$controller_cliente}destroy");
});


