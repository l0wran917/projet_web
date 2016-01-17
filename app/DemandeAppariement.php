<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use DB;

class DemandeAppariement extends Model
{
  protected $table = 'demandeAppariement';
  public $timestamps = true;

  public static $STATUS_ATTENTE = -1;
  public static $STATUS_REFUSE = 0;
  public static $STATUS_ACCEPTE = 1;


  public static function infos($idEnseignant){

    $demandes = DB::table('demandeAppariement')
                    ->join('stage', 'stage.id', '=', 'demandeAppariement.idStage')
                    ->join('utilisateur', 'utilisateur.id', '=', 'stage.idEtudiant')
                    ->select('demandeAppariement.status', 'utilisateur.nom', 'utilisateur.prenom')
                    ->get();

    return $demandes;
  }

  public static function getLabelStatus($status){
    if($status == DemandeAppariement::$STATUS_ATTENTE){
      return 'En attente';
    }elseif($status == DemandeAppariement::$STATUS_REFUSE){
      return 'Refusé';
    }elseif($status == DemandeAppariement::$STATUS_ACCEPTE){
      return 'Accepté';
    }
  }

  public static function getClassCssStatus($status){
    if($status == DemandeAppariement::$STATUS_ATTENTE){
      return 'warning';
    }elseif($status == DemandeAppariement::$STATUS_REFUSE){
      return 'danger';
    }elseif($status == DemandeAppariement::$STATUS_ACCEPTE){
      return 'success';
    }
  }
}
