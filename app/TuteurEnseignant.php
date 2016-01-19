<?php

namespace App;
// SI
use Illuminate\Database\Eloquent\Model;

class TuteurEnseignant extends Model
{
    protected $table = 'tuteurEnseignant';
    protected $primaryKey = 'idUtilisateur';
    public $timestamps = true;

    public static function make($user, $attributes){
      $enseignant = new TuteurEnseignant;
      $enseignant->idUtilisateur = $user->id;
      $enseignant->save();

      return $enseignant;
    }
}
