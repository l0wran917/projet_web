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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $dashboardInfos = [];

      if(session('typeUtilisateur') == Utilisateur::$ETUDIANT){
        $etudiant = Etudiant::infos_v(session('uid'));
        $dashboardInfos['etudiant'] = $etudiant;

        $stage = Stage::infos(session('uid'));
        if(count($stage) == 0){
          $stage = new Stage;
        }
        $dashboardInfos['stage'] = $stage;

      }

      return view("dashboard.dashboard")->with('dashboardInfos', $dashboardInfos);
    }
}
