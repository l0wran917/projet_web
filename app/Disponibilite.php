<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disponibilite extends Model
{
  protected $table = 'disponibilite';
  public $timestamps = false;

  public static function getDureeMinute(){
    return [60, 60]; // 1h
  }

  public static function getDebutMinute(){
    return [60*8, 60*9]; // 8h
  }

  public static function getFinMinute(){
    return [60*17, 60*18]; // 18h
  }

  public static function getDate(){
    return ["Mardi 05 Juin", "Mercredi 07 Juin"];
  }

  public static function deleteDispoByUser($idUtilisateur){
    Disponibilite::where('idUtilisateur', $idUtilisateur)->delete();
  }

  public static function heureDispoToArray($numJour){
    $dispos = Disponibilite::where('idUtilisateur', session('uid'))->where('numJour', $numJour)->get()->toArray();
    $data = [];

    foreach ($dispos as $dispo) {
      // $data[$dispo['debutMinute']] = true;
      array_push($data, $dispo['debutMinute']);
    }

    return $data;
  }

  public static function make($uid, $heure, $numjour){
    $dispo = new Disponibilite;
    $dispo->idUtilisateur = $uid;
    $dispo->debutMinute = $heure;
    $dispo->numJour = $numjour;
    $dispo->save();
  }

}
