<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TuteurEnseignant extends Model
{
    protected $table = 'tuteur';
    protected $primaryKey = 'idUtilisateur';
    public $timestamps = true;
}
