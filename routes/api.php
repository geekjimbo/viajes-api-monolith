<?php

use Illuminate\Http\Request;

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

Route::post('/listar_rutas', 			'API\ViajeController@listar_rutas');
Route::post('/listar_pasajeros', 		'API\ViajeController@listar_pasajeros');
Route::post('/listar_conductores', 		'API\ViajeController@listar_conductores');


Route::post('/crear_ruta', 			'API\ViajeController@store_ruta');
Route::post('/crear_pasajero', 		'API\ViajeController@store_pasajero');
Route::post('/crear_conductor', 	'API\ViajeController@store_conductor');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
