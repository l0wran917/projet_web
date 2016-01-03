<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Views extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

      DB::statement("CREATE VIEW etudiant_v AS
                     SELECT u.id as idEtudiant,
                            et.tp as tp,
                            u.nom as nom,
                            u.prenom as prenom,
                            u.email as email,
                            et.emailPerso as emailPerso,
                            u.dateNaissance as dateNaissance,
                            u.adresse as adresse,
                            u.tel as tel,
                            u.telPortable as telPortable,
                            et.telEntrepriseEtudiant as telEntrepriseEtudiant,
                            1 as typeUtilisateur,
                            u.created_at as createdDateUser
                     FROM etudiant et, utilisateur u
                     WHERE et.idUtilisateur = u.id ");

      DB::statement("CREATE VIEW stage_v AS
                      SELECT  st.idEtudiant as idEtudiant,
                              st.id as idStage,
                              u.nom as nomTuteur,
                              u.prenom as prenomTuteur,
                              u.email as emailTuteur,
                              u.tel as telTuteur,
                              u.telPortable as telPortableTuteur,
                              e.nom as nomEntreprise,
                              e.rue as rueEntreprise,
                              e.cp as codePostalEntreprise,
                              e.ville as villeEntreprise,
                              st.sujet as sujet,
                              st.planAcces as planAcces
                      FROM stage st, tuteur t, entreprise e, utilisateur u
                      WHERE st.idTuteur = t.idUtilisateur
                      AND t.idEntreprise = e.id
                      AND t.idUtilisateur = u.id ");

  //  DB::statement("CREATE VIEW etudiant_fv AS
  //                SELECT u.id as idEtudiant,
  //                       et.tp as tp,
  //                       u.nom as nomEtudiant,
  //                       u.prenom as prenomEtudiant,
  //                       u.email as emailEtudiant,
  //                       u.dateNaissance as dateNaissanceEtudiant,
  //                       u.adresse as adresseEtudiant,
  //                       u.tel as telEtudiant,
  //                       u.telPortable as telPortableEtudiant,
  //                       1 as typeUtilisateur,
  //                       ut.nom as nomTuteur,
  //                       ut.prenom as prenomTuteur,
  //                       ut.tel as telTuteur,
  //                       ut.telPortable as telPortableTuteur,
  //                       ut.email as emailTuteur,
  //                       e.nom as nomEntreprise,
  //                       e.rue as rueEntreprise,
  //                       e.ville as villeEntreprise,
  //                       e.cp as codePostalEntreprise
  //                FROM etudiant et, utilisateur u LEFT JOIN stage st ON st.idUtilisateur = u.id , tuteur t, utilisateur ut, entreprise e
  //                WHERE et.idUtilisateur = u.id
  //                AND st.idTuteur = t.idUtilisateur
  //                AND t.idUtilisateur = ut.id
  //                AND e.id = t.idEntreprise");
   //
  //   DB::statement("CREATE VIEW tuteur_v AS
  //                  SELECT u.id as idUtilisateur,
  //                         u.nom as nom,
  //                         u.prenom as prenom,
  //                         u.email as email,
  //                         u.dateNaissance as dateNaissance,
  //                         u.adresse as adresse,
  //                         u.tel as tel,
  //                         u.telPortable as telPortable,
  //                         2 as type,
  //                         u.created_at as createdDateUser,
  //                         e.id as idEntreprise,
  //                         e.nom as nomEntreprise,
  //                         e.rue as adresseEntreprise,
  //                         e.cp as codePostalEntreprise,
  //                         e.ville as villeEntreprise
  //                  FROM tuteur t, entreprise e, utilisateur u
  //                  WHERE t.idEntreprise = e.id
  //                  AND t.idUtilisateur = u.id  ");
  }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('DROP VIEW etudiant_v');
        DB::statement('DROP VIEW stage_v');
        // DB::statement('DROP VIEW etudiant_fv');
        // DB::statement('DROP VIEW tuteur_v');
    }
}
