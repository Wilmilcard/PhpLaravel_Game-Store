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
    Route::post('estado/create',"{$controller_estado}create");
    Route::get('estado/{id}', "{$controller_estado}show");
    Route::put('estado/{id}',"{$controller_estado}update");
    Route::delete('estado/{id}',"{$controller_estado}destroy");
});


