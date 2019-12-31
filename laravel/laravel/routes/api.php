<?php

use Illuminate\Http\Request;
use APP\Controller\GroupeController;

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
Route::put('/enseignant/modifier/{id}', 'enseignantController@update');
Route::delete('/enseignant/supprimer/{id}', 'enseignantController@delete');
Route::get('/enseignants', 'enseignantController@index');

Route::get('/afficher', 'GroupeController@listgroup');
Route::put('/groupe/modifier/{id}', 'GroupeController@update');
Route::delete('/groupe/supprimer/{id}', 'GroupeController@delete');
Route::post('/create', 'GroupeController@store');


