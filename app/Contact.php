<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
  protected $table = 'contact';
  public $incrementing = false;
  public $timestamps = true;

  public function __construct($value = null, array $attributes = array())
  {
      // $this->value = $value;
      $this->idEntreprise = $value['idEntreprise'];
      $this->type = $value['type'];
      $this->nom = $value['nom'];
      $this->email = $value['email'];
      $this->telephone = $value['telephone'];

      parent::__construct($attributes);
  }

}
