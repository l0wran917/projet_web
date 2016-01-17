<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Request;
use Input;
use App\Stage;
use App\Tuteur;
use App\Etudiant;
use App\Entreprise;

class AjaxController extends Controller
{
    public function detailsEtudiantByTuteurEntr(){
      if(Request::ajax()){
        $data = Request::All();

        $stages = Stage::infosByTuteur(session('uid'))->where('idEtudiant', $data['id'])->get();

        return $stages;
      }else{
        return "Error.";
      }
    }

    public function detailsEtudiantByEtudiant(){
      if(Request::ajax()){
        $data = Request::All();

        $stagiaire = [];

        $etudiant = Etudiant::infos($data['idEtudiant']);
        $stagiaire['etudiant'] = $etudiant;

        $stage = Stage::where('idEtudiant', $etudiant->idEtudiant)->select('sujet', 'idTuteur')->first();
        if(count($stage) == 0){
          $stage = new Stage;
          $tuteur = new Tuteur;
          $entreprise = new Entreprise;

          $entreprise->nom = "-";
          $tuteur->nomTuteur = "-";
          $tuteur->prenomTuteur = "";
          $stage->sujet = "-";
        }else{
          $tuteur = Tuteur::infos($stage->idTuteur);
          $entreprise = Entreprise::where('id', $tuteur->idEntreprise)->select('nom')->first();
        }

        $stagiaire['stage'] = $stage;
        $stagiaire['tuteur'] = $tuteur;
        $stagiaire['entreprise'] = $entreprise;


        return $stagiaire;
      }else{
        return "Error.";
      }
    }
}
