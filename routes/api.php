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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route:: get('sucursal','App\Http\Controllers\sucursalController@getSucursal');

Route:: get('sucursal/{id}','App\Http\Controllers\sucursalController@getIdSucursal');

Route:: post('addSucursal','App\Http\Controllers\sucursalController@insertSucursal');

Route:: put('updateSucursal/{id}','App\Http\Controllers\sucursalController@updateSucursal');

Route:: delete('deleteSucursal/{id}','App\Http\Controllers\sucursalController@deleteSucursal');