<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Etudiant;

class FicheTuteurEnsController extends Controller
{

    public static $ID_FICHE_APPARIEMENT = 2;

    public function index($id)
    {
      $data = [];

      if($id == FicheTuteurEnsController::$ID_FICHE_APPARIEMENT){
        $etudiants = Etudiant::infos()->orderBy('nom')->orderBy('prenom')->select('idEtudiant', 'nom', 'prenom')->get();

        $data['etudiants'] = $etudiants;
      }

      return view('tuteurEnseignant.fiche')->with(['id'=>$id, 'data'=>$data]);
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

}
