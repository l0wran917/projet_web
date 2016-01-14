<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Contact extends Model
{
  protected $table = 'contact';
  public $incrementing = false;
  public $timestamps = true;

  public function __construct($value = null, array $attributes = array())
  {
    if($value != null){
      $this->idEntreprise = $value['idEntreprise'];
      $this->type = $value['type'];
      $this->nom = $value['nom'];
      $this->email = $value['email'];
      $this->telephone = $value['telephone'];
    }

      parent::__construct($attributes);
  }

   /**
   * Set the keys for a save update query.
   * This is a fix for tables with composite keys
   *
   * @param  \Illuminate\Database\Eloquent\Builder  $query
   * @return \Illuminate\Database\Eloquent\Builder
   */
  protected function setKeysForSaveQuery(Builder $query)
  {
      $query
          //Put appropriate values for your keys here:
          ->where('idEntreprise', '=', $this->idEntreprise)
          ->where('type', '=', $this->type);

      return $query;
  }

}
