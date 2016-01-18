<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\TuteurEnseignant;
use App\Utilisateur;
use App\Etudiant;
use App\Tuteur;
use App\Stage;

class DashboardController extends Controller
{

    public function index(){

      if(session('typeUtilisateur') == Utilisateur::$ETUDIANT){
        return $this->indexEtudiant();
      }elseif(session('typeUtilisateur') == Utilisateur::$TUTEUR_ENTREPRISE){
        return $this->indexTuteurEntr();
      }elseif(session('typeUtilisateur') == Utilisateur::$TUTEUR_ENSEIGNANT){
        return $this->indexTuteurEns();
      }
      else{
        return 'Error.';
      }

    }

    public function indexEtudiant()
    {
      $dashboardInfos = [];

      $etudiant = Etudiant::infos(session('uid'));
      $dashboardInfos['etudiant'] = $etudiant;

      $stage = Stage::infos(session('uid'));
      $stage = Stage::checkStageExiste($stage);

      $tuteur = Utilisateur::where('id', $stage->idEnseignant)->select('nom', 'prenom')->first();
      if(count($tuteur) == 0){
        $tuteur = new Utilisateur;
        $tuteur->nom = "-";
        $tuteur->prenom = "";
      }

      $dashboardInfos['tuteur'] = $tuteur;

      $dashboardInfos['stage'] = $stage;

      return view("dashboard.dashboard")->with('dashboardInfos', $dashboardInfos);
    }

    public function indexTuteurEntr(){

      $dashboardInfos = [];

      $tuteur = Tuteur::infos(session('uid'));
      $dashboardInfos['tuteur'] = $tuteur;

      $stages = Stage::infosByTuteur(session('uid'));
      $dashboardInfos['nbStagiaire'] = $stages->count();
      $dashboardInfos['nbStagiaireValide'] = $stages->where('tuteurValide', "1")->count();

      return view("dashboard.dashboard")->with('dashboardInfos', $dashboardInfos);
    }

    public function indexTuteurEns(){

      $dashboardInfos = [];

      return view('dashboard.dashboard')->with('dashboardInfos', $dashboardInfos);
    }
}
