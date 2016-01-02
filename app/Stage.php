<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Stage extends Model
{
  protected $table = 'stage';
  public $timestamps = true;

  public static function infos($id){
    return DB::table('stage_v')->where('idEtudiant', $id)->first();
  }
}
