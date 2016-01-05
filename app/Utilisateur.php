<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Utilisateur extends Model
{
  public static $ETUDIANT = '1';

  protected $table = 'utilisateur';
  public $timestamps = true;

}
