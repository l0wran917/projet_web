<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Stage;

use Request;
use Input;


/*
 *
 * /!\ ATTENTION /!\
 * Les requests sont géré par la facade dans cette page (a cause des rqts ajax)
 *
*/

class FicheTuteurEntrController extends Controller
{
  public static $ID_STAGIAIRES = 1;
  public static $ID_FICHE_AVIS_STAGIAIRE = 2;
  public static $ID_FICHE_VISITE = 3;

  // Point entrée GET des étudiants
  public function index($id = 0)
  {
      $data = [];

      // Si fiche "Mes Stagiaires"
      if($id == FicheTuteurEntrController::$ID_STAGIAIRES){
        $stages = Stage::infosByTuteur(session('uid'));

        $data['nbStagiaires'] = $stages->count();
        $data['stages'] = $stages->get();

      // Si vue "Fiche d'appreciation du stagiaire"
      }else if($id == FicheTuteurEntrController::$ID_FICHE_AVIS_STAGIAIRE){
        $nbStagiaires = Stage::infosByTuteur(session('uid'))->count();

        // S'il y en a plus d'un, on fait choisir dans la liste
        if($nbStagiaires > 1){
          $stages = Stage::infosByTuteur(session('uid'))->get();

          return view('tuteurEntreprise.choixStagiaire')->with(['id' => $id, 'stages' => $stages, 'route' => 'dashboard']);
        }

      }

      return view('tuteurEntreprise.fiche')->with(['id' => $id, 'data' => $data]);
  }

  public function submitFiche($id){
    // Si fiche avis sur le stagiaire
    if($id == FicheTuteurEntrController::$ID_FICHE_AVIS_STAGIAIRE){
      return $this->traitementSubmitAvisEtudiant($id);
    }
  }

  public function traitementSubmitAvisEtudiant($id){
    // Viens de la vue choix du stagiaire
    if(Request::get('idStagiaire') != null){
      session(['idEtudiantFocus' => Request::get('idStagiaire')]);
      return view('tuteurEntreprise.fiche')->with(['id' => $id]);
    }else{
      $stage = Stage::where('idEtudiant', session('idEtudiantFocus'))->first();
      dd($stage);

      dd(Request::All());
    }

  }

  public function ajaxDetailEtudiant(){
    if(Request::ajax()){
      $data = Request::All();

      $stages = Stage::infosByTuteur(session('uid'))->where('idEtudiant', $data['id'])->get();

      return $stages;
    }else{
      return "Error.";
    }
  }

  public function ajaxChangerStatusStage(){
    if(Request::ajax()){
      $data = Request::All();

      $stage = Stage::where('idTuteur', session('uid'))->where('idEtudiant', $data['id'])->first();

      if($data['status'] == "0"){
        $stage->tuteurValide = false;
      }else{
        $stage->tuteurValide = true;
      }

      $stage->save();

      return "1";
    }else{
      return "Error.";
    }
  }

}
