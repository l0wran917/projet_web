<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Data extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      DB::table('utilisateur')->insert(
        [
          'nom' => 'bassin',
          'prenom' => 'laurent',
          'email' => 'laurent.bassin@u-psud.fr',
          'dateNaissance' => '1996-08-14',
          'adresse' => '6 Allee Olivier Messiaen',
          'telPortable' => '0671420739',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('utilisateur')->insert(
        [
          'nom' => 'boukari',
          'prenom' => 'yedoubouam',
          'email' => 'yedoubouam.boukari@u-psud.fr',
          'dateNaissance' => '1996-01-01',
          'adresse' => '1 Rue des patates',
          'telPortable' => '0102030405',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('entreprise')->insert(
        [
          'nom' => 'Mx Data',
          'rue' => '19 rue du 4 septembre',
          'cp' => '75002',
          'ville' => 'Paris 2e'
        ]
      );

      DB::table('tuteur')->insert(
        [
          'idUtilisateur' => '2',
          'idEntreprise' => '1'
        ]
      );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
