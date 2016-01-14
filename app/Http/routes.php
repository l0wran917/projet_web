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
    Route::post('/dashboard/etudiant/fiche/{id}', ['as' => 'ficheEtudiant', 'uses' => 'FicheEtudiantController@submitFiche'])->where(['id' => '[0-9]+']);

    Route::post('/dashboard/etudiant/fiche/{id}/entreprise',
                ['as' => 'ficheEtudiantLocalisationEntrepriseCorresp',
                 'uses' => 'FicheEtudiantController@traitementSubmitLocalisationEntreprise'])
                ->where(['id' => '[0-9]+']);

    Route::post('/dashboard/etudiant/fiche/{id}/tuteur',
                ['as' => 'ficheEtudiantLocalisationTuteurCorresp',
                 'uses' => 'FicheEtudiantController@traitementSubmitLocalisationTuteurs'])
                ->where(['id' => '[0-9]+']);

  });

  Route::group(['middleware' => ['tuteurEntreprise']], function(){

    Route::get('/dashboard/tuteur/entreprise/fiche/{id}', ['as' => 'ficheTuteurEntre', 'uses' => 'FicheTuteurEntrController@index'])->where(['id' => '[0-9]+']);
    Route::post('/dashboard/tuteur/entreprise/fiche/{id}', ['as' => 'ficheTuteurEntre', 'uses' => 'FicheTuteurEntrController@submitFiche'])->where(['id' => '[0-9]+']);

    Route::post('/dashboard/tuteur/entreprise/fiche/detailEtudiant', ['as' => 'detailEtudiant', 'uses' => 'FicheTuteurEntrController@ajaxDetailEtudiant']);
    Route::post('/dashboard/tuteur/entreprise/fiche/changerStatusStage', ['as' => 'changerStatusStage', 'uses' => 'FicheTuteurEntrController@ajaxChangerStatusStage']);
  });

  Route::group(['middleware' => ['tuteurEnseignant']], function(){

    Route::get('/dashboard/tuteur/enseignant/fiche/{id}', ['as' => 'ficheTuteurEns', 'uses' => 'FicheTuteurEnsController@index'])->where(['id' => '[0-9]+']);
    Route::post('/dashboard/tuteur/enseignant/fiche/{id}', ['as' => 'ficheTuteurEns', 'uses' => 'FicheTuteurEnsController@submitFiche'])->where(['id' => '[0-9]+']);
  });

});
