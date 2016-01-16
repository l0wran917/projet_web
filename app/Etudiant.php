<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Etudiant extends Model
{

    protected $table = 'etudiant';
    protected $primaryKey = 'idUtilisateur';
    public $timestamps = true;

    public function details(){
      return $this->hasOne('App\Utilisateur', 'id', 'idUtilisateur');
    }

    // public static function infos_fv($id){
    //   return DB::table('etudiant_fv')->where('idEtudiant', $id)->first();
    // }

    public static function infos($id = null){
      if($id == null){
        return DB::table('etudiant_v');
      }else{
        return DB::table('etudiant_v')->where('idEtudiant', $id)->first();
      }

    }
}
