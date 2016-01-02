<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Utilisateur;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      if(session('typeUtilisateur') == Utilisateur::$ETUDIANT){
        // echo 'oui';
      }

      return view("dashboard.dashboard");
    }
}
