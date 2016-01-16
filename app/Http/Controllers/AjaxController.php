<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Request;
use Input;
use App\Stage;


class AjaxController extends Controller
{
    public function detailsEtudiant(){
      if(Request::ajax()){
        $data = Request::All();

        $stages = Stage::infosByTuteur(session('uid'))->where('idEtudiant', $data['id'])->get();

        return $stages;
      }else{
        return "Error.";
      }
    }
}
