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
Route::post('/enseignant/create', 'enseignantController@store');
Route::get('/enseignant/edit/{id}', 'enseignantController@edit');
Route::post('/enseignant/update/{id}', 'enseignantController@update');
Route::delete('/enseignant/delete/{id}', 'enseignantController@delete');
Route::get('/enseignants', 'enseignantController@index');

Route::post('/groupe/create', 'groupeController@store');
Route::get('/groupe/edit/{id}', 'groupeController@edit');
Route::get('/groupe/afficher', 'groupeController@index');
Route::post('/groupe/update/{id}', 'groupeController@update');
Route::delete('/groupe/delete/{id}', 'groupeController@delete');
Route::get('/groupes', 'groupeController@index');
