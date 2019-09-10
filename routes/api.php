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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/noticias', 'NoticiasController@index');
Route::get('/noticias/{id}', 'NoticiasController@show');
Route::get('/noticias/limit/{size}', 'NoticiasController@limitSize');
Route::post('/noticias', 'NoticiasController@save');
Route::put('/noticias', 'NoticiasController@update');
Route::delete('/noticias/{id}', 'NoticiasController@destroy');
