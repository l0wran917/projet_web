<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

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
      }else{
        return 'Error.';
      }

    }

    public function indexEtudiant()
    {
      $dashboardInfos = [];

      $etudiant = Etudiant::infos(session('uid'));
      $dashboardInfos['etudiant'] = $etudiant;

      $stage = Stage::infos(session('uid'));
      $dashboardInfos['stage'] = $stage;

      return view("dashboard.dashboard")->with('dashboardInfos', $dashboardInfos);
    }

    public function indexTuteurEntr(){

      $dashboardInfos = [];

      $tuteur = Tuteur::infos(session('uid'));
      $dashboardInfos['tuteur'] = $tuteur;

      $stages = Stage::infosByTuteur(session('uid'));
      $dashboardInfos['nbStagiaire'] = $stages->count();

      return view("dashboard.dashboard")->with('dashboardInfos', $dashboardInfos);
    }
}
