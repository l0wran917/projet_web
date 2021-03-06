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
        $table->integer('idEntreprise')->unsigned()->nullable();
        $table->integer('joursDispoRencontre');
        $table->timestamps();

        $table->primary('idUtilisateur');
        $table->foreign('idUtilisateur')->references('id')->on('utilisateur');
        $table->foreign('idEntreprise')->references('id')->on('entreprise');

      });

      Schema::create('tuteurEnseignant', function (Blueprint $table) {
        $table->integer('idUtilisateur')->unsigned();
        $table->integer('joursDispoRencontre');
        $table->timestamps();

        $table->primary('idUtilisateur');
        $table->foreign('idUtilisateur')->references('id')->on('utilisateur');
      });

      Schema::create('stage', function (Blueprint $table) {
        $table->increments('id');
        $table->integer('idEtudiant')->unsigned();
        $table->integer('idTuteur')->unsigned()->nullable();
        $table->integer('idEnseignant')->unsigned()->nullable();
        $table->string('sujet');
        $table->string('planAcces');
        $table->integer('remunerationStage')->default(-1);
        $table->float('montantRemuneration');
        $table->integer('encadrageInformaticien')->default(-1);
        $table->integer('appelInformaticien')->default(-1);
        $table->integer('travailSeul')->default(-1);
        $table->integer('tailleEquipe')->default(-1);
        $table->string('typeMateriel');
        $table->integer('typeSysteme')->default(-1);
        $table->string('typeSystemeAutre');
        $table->string('langagesStage');
        $table->integer('objetPrincipal')->default(-1);
        $table->string('objetPrincipalAutre');
        $table->integer('satisactionStage')->default(-1);
        $table->string('pourquoiSatisaction');
        $table->integer('satisactionObjectif')->default(-1);
        $table->string('pourquoiObjectif');
        $table->integer('satisactionCours')->default(-1);
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

        $table->integer('deplacementEnseignantVisite')->default(-1);
        $table->date('dateDeplacementEnseignantVisite')->nullable();

        $table->string('nomResponsableVisite');
        $table->string('prenomResponsableVisite');
        $table->string('fonctionResponsableVisite');

        // Dupliqué : 1 pour fiche bilan stage et 1 pour visite
          $table->integer('encadrageInformaticienVisite')->default(-1);
          $table->integer('appelInformaticienVisite')->default(-1);
          $table->integer('travailSeulVisite')->default(-1);
          $table->integer('tailleEquipeVisite')->default(-1);

          $table->integer('objetPrincipalVisite')->default(-1);
          $table->string('objetPrincipalAutreVisite');

          $table->integer('avisTravailComportementVisite')->default(-1);

          $table->integer('formationManquanteVisite')->default(-1);
          $table->string('formationManquanteDetailsVisite');

          $table->string('avisStageVisite');
          $table->integer('accueilNouveauxEtudiantVisite')->default(-1);
          $table->string('precautionAcceuilNouveauxVisite');
        //

        $table->timestamps();

        $table->foreign('idEtudiant')->references('idUtilisateur')->on('etudiant');
        $table->foreign('idTuteur')->references('idUtilisateur')->on('tuteur');
        $table->foreign('idEnseignant')->references('idUtilisateur')->on('tuteurEnseignant');
      });

      Schema::create('demandeAppariement', function (Blueprint $table) {
        $table->integer('idEnseignant')->unsigned();
        $table->integer('idStage')->unsigned();
        $table->integer('status')->default(-1);
        $table->timestamps();

        $table->primary(['idEnseignant', 'idStage']);
        $table->foreign('idEnseignant')->references('idUtilisateur')->on('tuteurEnseignant');
        $table->foreign('idStage')->references('id')->on('stage');
      });

      Schema::create('disponibilite', function (Blueprint $table) {
        $table->integer('idUtilisateur')->unsigned();
        $table->integer('debutMinute')->unsigned();
        $table->integer('numJour')->unsigned();

        $table->primary(['idUtilisateur', 'debutMinute', 'numJour']);
        $table->foreign('idUtilisateur')->references('id')->on('utilisateur');
      });


      Schema::create('constante', function (Blueprint $table) {
        $table->integer('id')->unsigned();
        $table->string('valeur');
        $table->timestamps();
      });
  }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::drop('constante');
      Schema::drop('disponibilite');
      Schema::drop('demandeAppariement');
      Schema::drop('stage');
      Schema::drop('tuteurEnseignant');
      Schema::drop('tuteur');
      Schema::drop('contact');
      Schema::drop('entreprise');
      Schema::drop('etudiant');
      Schema::drop('utilisateur');

    }
}
