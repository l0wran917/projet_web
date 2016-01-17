<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Stage extends Model
{
  protected $table = 'stage';
  public $timestamps = true;

  public static function infos($id){
    $stage = DB::table('stage_v')->where('idEtudiant', $id)->first();

    return $stage;
  }

  public static function infosByTuteur($id){
    $stage = DB::table('stage_v')->where('idTuteurEntr', $id);

    return $stage;
  }


  public static function appreciationStagiaire($idEtudiant){
    $appreciation = DB::table('avis_stagiaire_v')->where('idEtudiant', $idEtudiant)->first();

    return $appreciation;
  }

  public static function checkStageExiste($stage){
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
    return $stage;
  }
}
