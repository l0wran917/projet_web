<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Stage;

use Request;
use Input;

class FicheTuteurEntrController extends Controller
{
  public static $ID_STAGIAIRES = 1;
  public static $ID_FICHE_AVIS_STAGIAIRE = 2;
  public static $ID_FICHE_VISITE = 3;

  // Point entrée GET des étudiants
  public function index($id = 0)
  {
      $data = [];

      if($id == FicheTuteurEntrController::$ID_STAGIAIRES){
        $stages = Stage::infosByTuteur(session('uid'));

        $data['nbStagiaires'] = $stages->count();
        $data['stages'] = $stages->get();
      }

      return view('tuteurEntreprise.fiche')->with(['id' => $id, 'data' => $data]);
  }

    public function submitFiche(){
      return 'ok';
    }

    public function ajaxListeEtudiant(){
      if(Request::ajax()){
        $data = Request::All();

        $stages = Stage::infosByTuteur(session('uid'))->where('idEtudiant', $data['id'])->get();

        return $stages;
      }else{
        return "Error.";
      }
    }

}
