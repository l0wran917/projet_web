<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use DB;

class DemandeAppariement extends Model
{
  protected $table = 'demandeAppariement';
  public $timestamps = true;

  public static function infos($idEnseignant){

    $demandes = DB::table('demandeAppariement')->join('utilisateur', 'utilisateur.id', '=', 'demandeAppariement.idEtudiant')->select('utilisateur.*', "demandeAppariement.*")->get();

    dd($demandes);
  }
}
