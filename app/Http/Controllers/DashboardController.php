<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Utilisateur;
use App\Etudiant;
use App\Stage;

class DashboardController extends Controller
{


    public function index()
    {
      $dashboardInfos = [];

      if(session('typeUtilisateur') == Utilisateur::$ETUDIANT){
        $etudiant = Etudiant::infos(session('uid'));
        $dashboardInfos['etudiant'] = $etudiant;

        $stage = Stage::infos(session('uid'));
        if(count($stage) == 0){
          $stage = new Stage;
          $stage->nomEntreprise = '-';
          $stage->nomTuteur = '-';
          $stage->prenomTuteur = '';
          $stage->telPortableTuteur = '-';
          $stage->emailTuteur = '-';
          $stage->rueEntreprise = '-';
          $stage->codePostalEntreprise = '';
          $stage->villeEntreprise = '';
        }
        $dashboardInfos['stage'] = $stage;

      }
      // return view('test');

      return view("dashboard.dashboard")->with('dashboardInfos', $dashboardInfos);
    }
}
