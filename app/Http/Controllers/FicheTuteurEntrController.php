<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class FicheTuteurEntrController extends Controller
{
  public static $ID_FICHE_AVIS_STAGIAIRE = 1;
  public static $ID_FICHE_VISITE = 2;

  // Point entrée GET des étudiants
  public function index($id = 0)
  {
      $data = [];

      if($id == FicheTuteurEntrController::$ID_FICHE_AVIS_STAGIAIRE){

      }

      return view('tuteurEntreprise.fiche')->with(['id' => $id, 'data' => $data]);
  }

    public function submitFiche(){
      return 'ok';
    }

}
