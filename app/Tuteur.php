<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use DB;

class Tuteur extends Model
{
    protected $table = 'tuteur';
    protected $primaryKey = 'idUtilisateur';
    public $timestamps = true;

    public function details(){
      return $this->hasOne('App\Utilisateur', 'id', 'idUtilisateur');
    }

    public static function infos($id){
      $tuteur = DB::table('tuteur_v')->where('idUtilisateur', $id)->first();

      return $tuteur;
    }

    public static function existeInDBByEntreprise($nomTuteur, $idEntreprise){
      $tuteursIdentique = [];

      // Order by est obligatoire !
      // Si un tuteur est créer entre temps, cela n'infue pas les id dans les formulaires des autres
      $tuteurs = Tuteur::where('idEntreprise', $idEntreprise)->orderBy('idUtilisateur')->get();

      foreach ($tuteurs as $tuteur) {
        if(soundex($nomTuteur) == soundex($tuteur->details->nom)){
          array_push($tuteursIdentique, $tuteur);
        }
      }

      return $tuteursIdentique;
    }

    public static function make($user, $attributes){
      $tuteur = new Tuteur;
      $tuteur->idUtilisateur = $user->id;
      $tuteur->save();

      return $tuteur;
    }
}
