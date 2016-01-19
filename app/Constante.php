<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Constante extends Model
{
  protected $table = 'constante';
  public $timestamps = true;

  public static $ID_PWD_SIGNUP_ETUDIANT = 1;
  public static $ID_PWD_SIGNUP_ENSEIGNANT = 2;
  public static $ID_PWD_SIGNUP_ENTREPRISE = 3;

  public static function getPwdSignupEtudiant(){
    return Constante::where('id', Constante::$ID_PWD_SIGNUP_ETUDIANT)->select('valeur')->first()->valeur;
  }

  public static function getPwdSignupEnseignant(){
    return Constante::where('id', Constante::$ID_PWD_SIGNUP_ENSEIGNANT)->select('valeur')->first()->valeur;
  }

  public static function getPwdSignupEntreprise(){
    return Constante::where('id', Constante::$ID_PWD_SIGNUP_ENTREPRISE)->select('valeur')->first()->valeur;
  }

}
