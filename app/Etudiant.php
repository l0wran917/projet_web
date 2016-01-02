<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{

    protected $table = 'etudiant';
    protected $primaryKey = 'idUtilisateur';
    public $timestamps = true;

    public function details(){
      return $this->hasOne('App\Utilisateur', 'id', 'idUtilisateur');
      // return $this->hasOne();
    }
}
