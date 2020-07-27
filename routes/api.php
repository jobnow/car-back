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

/**
 * CRUD API DE VEICULOS
 */

Route::namespace('Api')->group(function() {
    Route::get('veiculos', 'VeiculoController@index');
    Route::get('veiculo/{id}', 'VeiculoController@show');
    Route::post('veiculo', 'VeiculoController@store');
    Route::put('veiculo/{id}', 'VeiculoController@update');
    Route::delete('veiculo/{id}', 'VeiculoController@delete');
});


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
