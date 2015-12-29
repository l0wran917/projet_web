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

Route::get('/', 'LoginController@index');
Route::post('/login', ['as' => 'login', 'uses' => 'LoginController@login']);

Route::get('/dashboard', ['as' => 'dashboard', 'uses' => 'DashboardController@index']);

Route::get('/dev', 'LoginController@test');



// Route::get('/test', 'controllerAccueil');
