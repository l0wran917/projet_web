<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Contact;

class Entreprise extends Model
{
    protected $table = 'entreprise';
    public $timestamps = true;

    public static function existeInDBByCP($nomEtablissement, $codePostal){
      $entreprisesIdentique = [];

      // Order by est obligatoire !
      // Si une entreprise est créer entre temps, cela n'infue pas les id dans les formulaires des autres
      $entreprises = Entreprise::where('cp', $codePostal)->orderBy('id')->get();

      foreach ($entreprises as $entreprise) {
        if(soundex($nomEtablissement) == soundex($entreprise->nom)){
          array_push($entreprisesIdentique, $entreprise);
        }
      }

      return $entreprisesIdentique;
    }

    public static function contact($idEntreprise){
      $contact = Contact::where('idEntreprise', $idEntreprise)->orderBy('type')->get();

      return $contact;
    }

    public static function getByID($id){
      return Entreprise::where('id', $id)->first();
    }

    public static function make($attributes){
      $entreprise = new Entreprise;

      $entreprise->nom = $attributes['nomEtablissement'];
      $entreprise->rue = $attributes['rueEtablissement'];
      $entreprise->cp = $attributes['codePostalEtablissement'];
      $entreprise->ville = $attributes['villeEtablissement'];

      $entreprise->save();

      return $entreprise;
    }

}
