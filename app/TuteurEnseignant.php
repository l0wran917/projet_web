<?php

namespace App;
// SI
use Illuminate\Database\Eloquent\Model;

class TuteurEnseignant extends Model
{
    protected $table = 'tuteur';
    protected $primaryKey = 'idUtilisateur';
    public $timestamps = true;
}
