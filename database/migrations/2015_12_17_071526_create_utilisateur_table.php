<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

// use Hash;

class CreateUtilisateurTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('utilisateurs', function (Blueprint $table) {
        $table->increments('id');
        $table->string('nom');
        $table->string('prenom');
        $table->string('email');
        $table->date('dateNaissance');
        $table->string('adresse');
        $table->string('tel');
        $table->string('telPortable');
        $table->string('password');
        $table->integer('type');
        $table->timestamps();
      });

      DB::table('utilisateurs')->insert(
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

      DB::table('utilisateurs')->insert(
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
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('utilisateurs');
    }
}
