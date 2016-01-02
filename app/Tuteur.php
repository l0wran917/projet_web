<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tuteur extends Model
{
    protected $table = 'tuteur';
    protected $primaryKey = 'idUtilisateur';
    public $timestamps = true;

    public function details(){
      return $this->hasOne('App\Utilisateur', 'id', 'idUtilisateur');
    }

    // public function save(){
    //   echo 'oui';
    // }
}
