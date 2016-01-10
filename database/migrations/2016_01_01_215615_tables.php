<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Tables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('utilisateur', function (Blueprint $table) {
        $table->increments('id');
        $table->string('nom');
        $table->string('prenom');
        $table->string('email');
        $table->date('dateNaissance');
        $table->string('adresse');
        $table->string('tel');
        $table->string('telPortable');
        $table->enum('civilite', ['0', '1', '2']);
        $table->string('password');
        $table->integer('type');
        $table->timestamps();
      });

      Schema::create('etudiant', function (Blueprint $table) {
        $table->integer('idUtilisateur')->unsigned();
        $table->string('tp');
        $table->string('telEntrepriseEtudiant');
        $table->string('emailPerso');
        $table->timestamps();

        $table->primary('idUtilisateur');
        $table->foreign('idUtilisateur')->references('id')->on('utilisateur');
      });

      Schema::create('entreprise', function (Blueprint $table) {
        $table->increments('id')->unsigned();
        $table->string('nom');
        $table->string('rue');
        $table->integer('cp');
        $table->string('ville');
        $table->timestamps();
      });

      Schema::create('tuteur', function (Blueprint $table) {
        $table->integer('idUtilisateur')->unsigned();
        $table->integer('idEntreprise')->unsigned();
        $table->integer('joursDispoRencontre');
        $table->timestamps();

        $table->primary('idUtilisateur');
        $table->foreign('idUtilisateur')->references('id')->on('utilisateur');
        $table->foreign('idEntreprise')->references('id')->on('entreprise');

      });

      Schema::create('stage', function (Blueprint $table) {
        $table->increments('id');
        $table->integer('idEtudiant')->unsigned();
        $table->integer('idTuteur')->unsigned();;
        $table->string('sujet');
        $table->string('planAcces');
        $table->boolean('remunerationStage');
        $table->boolean('encadrageInfomaticien');
        $table->boolean('appelInformaticien');
        $table->boolean('travailSeul');
        $table->integer('tailleEquipe');
        //$table->boolean('typeMateriel');
        $table->string('typeSysteme');
        $table->string('langagesStage');
        $table->integer('objetPrincipal');

        $table->boolean('tuteurValide')->default(0);

        $table->timestamps();

        $table->foreign('idEtudiant')->references('idUtilisateur')->on('etudiant');
        $table->foreign('idTuteur')->references('idUtilisateur')->on('tuteur');
      });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::drop('stage');
      Schema::drop('tuteur');
      Schema::drop('entreprise');
      Schema::drop('etudiant');
      Schema::drop('utilisateur');

    }
}
