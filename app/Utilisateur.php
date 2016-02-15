<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Hash;

class Utilisateur extends Model
{
  public static $ETUDIANT = '1';
  public static $TUTEUR_ENTREPRISE = '2';
  public static $TUTEUR_ENSEIGNANT = '3';

  protected $table = 'utilisateur';
  public $timestamps = true;

  public static function make($attributes, $type){
    $user = new Utilisateur;
    $user->nom = $attributes['nom'];
    $user->prenom = $attributes['prenom'];
    $user->email = $attributes['email'];
    if(isset($attributes['tel'])){
      $user->tel = $attributes['tel'];
    }
    if(isset($attributes['telPort'])){
      $user->telPortable = $attributes['telPort'];
    }
    $user->civilite = $attributes['civilite'];
    $user->password = Hash::make($attributes['pwd']);

    $user->type = $type;

    $user->save();

    return $user;
  }

  public static function getByID($id){
    return Utilisateur::where('id', $id)->first();
  }

  public function isActive(){
    return $this->password != "";
  }

  public function setPassword($pwd){
    $this->password = Hash::make($pwd);
    $this->save();

    return true;
  }

}
