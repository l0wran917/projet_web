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

      Schema::create('contact', function (Blueprint $table) {
        $table->integer('idEntreprise')->unsigned();
        $table->integer('type')->unsigned();
        $table->string('nom');
        $table->string('email');
        $table->string('telephone');
        $table->timestamps();

        $table->primary(['idEntreprise', 'type']);
        $table->foreign('idEntreprise')->references('id')->on('entreprise');
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
        $table->float('montantRemuneration');
        $table->boolean('encadrageInfomaticien');
        $table->boolean('appelInformaticien');
        $table->boolean('travailSeul');
        $table->integer('tailleEquipe')->default(-1);
        $table->string('typeMateriel');
        $table->integer('typeSysteme')->default(-1);
        $table->string('typeSystemeAutre');
        $table->string('langagesStage');
        $table->integer('objetPrincipal')->default(-1);
        $table->string('objetPrincipalAutre');
        $table->boolean('satisactionStage');
        $table->string('pourquoiSatisaction');
        $table->boolean('satisactionObjectif');
        $table->string('pourquoiObjectif');
        $table->boolean('satisactionCours');
        $table->string('pourquoiCours');
        $table->string('apportStage');

        $table->integer('niveauConnaissance')->default(-1);
        $table->integer('niveauOrganisation')->default(-1);
        $table->integer('niveauInitiative')->default(-1);
        $table->integer('niveauPerseverance')->default(-1);
        $table->integer('niveauEfficacite')->default(-1);
        $table->integer('niveauInteret')->default(-1);

        $table->integer('niveauPresentation')->default(-1);
        $table->integer('niveauPonctualite')->default(-1);
        $table->integer('niveauAssiduite')->default(-1);
        $table->integer('niveauExpression')->default(-1);
        $table->integer('niveauSociabilite')->default(-1);
        $table->integer('niveauCommunication')->default(-1);

        $table->integer('embaucheEtudiant')->default(-1);
        $table->string('embauchePourquoi');
        $table->integer('tuteurPresentSoutenance')->default(-1);

        $table->boolean('tuteurValide')->default(0);

        $table->timestamps();

        $table->foreign('idEtudiant')->references('idUtilisateur')->on('etudiant');
        $table->foreign('idTuteur')->references('idUtilisateur')->on('tuteur');
      });

      Schema::create('tuteurEntreprise', function (Blueprint $table) {
        $table->integer('idUtilisateur')->unsigned();
        $table->integer('joursDispoRencontre');
        $table->timestamps();

        $table->primary('idUtilisateur');
        $table->foreign('idUtilisateur')->references('id')->on('utilisateur');
      });

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
      // Schema::drop('contact');
      Schema::drop('etudiant');
      Schema::drop('utilisateur');

    }
}
