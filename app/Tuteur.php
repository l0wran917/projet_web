<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tuteur extends Model
{
    protected $table = 'tuteur_v';
    public $timestamps = true;

    public function utilisateur(){
      return $this->hasOne('App\Utilisateur', 'id', 'idUtilisateur');
    }
}
