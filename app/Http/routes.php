<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', ['as' => 'login', 'uses' => 'LoginController@index']);
Route::get('/login', ['as' => 'login', 'uses' => 'LoginController@index']);
Route::post('/login', ['as' => 'loginPost', 'uses' => 'LoginController@login']);


Route::group(['middleware' => ['auth']], function(){
  Route::get('/dashboard', ['as' => 'dashboard', 'uses' => 'DashboardController@index']);


  Route::group(['middleware' => ['etudiant']], function(){
    Route::get('/dashboard/etudiant/fiche/{id}', ['as' => 'ficheEtudiant', 'uses' => 'FicheEtudiantController@index'])->where(['id' => '[0-9]+']);
  });
});
