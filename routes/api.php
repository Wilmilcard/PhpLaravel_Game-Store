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
    Route::get('estado', "{$controller_estado}getEstadoAll");
    Route::get('estado/{id}', "{$controller_estado}getEstado");
    Route::post('addEstado',"{$controller_estado}postEstado");
    Route::put('updateEstado/{id}',"{$controller_estado}putEstado");
    Route::delete('removeEstado/{id}',"{$controller_estado}deleteEstado");
});


