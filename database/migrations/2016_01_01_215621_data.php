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
      //
      // DB::table('utilisateur')->insert(
      //   [
      //     'id' => 1,
      //     'nom' => 'bassin',
      //     'prenom' => 'laurent',
      //     'email' => 'laurent.bassin@u-psud.fr',
      //     'dateNaissance' => '1996-08-14',
      //     'adresse' => '6 Allee Olivier Messiaen',
      //     'telPortable' => '0671420739',
      //     'password' => Hash::make('password'),
      //     'type' => 1
      //   ]
      // );
      //
      // DB::table('utilisateur')->insert(
      //   [
      //     'id' => 2,
      //     'nom' => 'boukari',
      //     'prenom' => 'yedoubouam',
      //     'email' => 'yedoubouam.boukari@u-psud.fr',
      //     'dateNaissance' => '1996-08-14',
      //     'adresse' => '10 avenue des hameaux',
      //     'telPortable' => '0602275689',
      //     'password' => Hash::make('password'),
      //     'type' => 1
      //   ]
      // );
      //
      // DB::table('utilisateur')->insert(
      //   [
      //     'id' => 3,
      //     'nom' => 'lacaille',
      //     'prenom' => 'loic',
      //     'email' => 'loic.lacaille@u-psud.fr',
      //     'dateNaissance' => '1996-01-01',
      //     'adresse' => '1 Rue des patates',
      //     'telPortable' => '0102030405',
      //     'password' => Hash::make('password'),
      //     'type' => 2
      //   ]
      // );
      //
      // DB::table('utilisateur')->insert(
      //   [
      //     'id' => 4,
      //     'nom' => 'morterol',
      //     'prenom' => 'martin',
      //     'email' => 'martin.morterol@u-psud.fr',
      //     'dateNaissance' => '1992-01-01',
      //     'adresse' => '2 Rue des patates',
      //     'telPortable' => '0102030405',
      //     'password' => Hash::make('password'),
      //     'type' => 3
      //   ]
      // );
      //
      // DB::table('entreprise')->insert(
      //   [
      //     'nom' => 'Mx Data',
      //     'rue' => '19 rue du 4 septembre',
      //     'cp' => '75002',
      //     'ville' => 'Paris 2e'
      //   ]
      // );
      //
      // DB::table('tuteur')->insert(
      //   [
      //     'idUtilisateur' => '3',
      //     'idEntreprise' => '1'
      //   ]
      // );
      //
      //
      // DB::table('tuteurEnseignant')->insert(
      //   [
      //       'idUtilisateur' => '4'
      //   ]
      // );
      //
      // DB::table('etudiant')->insert(
      //   [
      //     'idUtilisateur' => '1',
      //     'tp' => '1K'
      //   ]
      // );
      //
      // DB::table('etudiant')->insert(
      //   [
      //     'idUtilisateur' => '2',
      //     'tp' => '1K'
      //   ]
      // );
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
