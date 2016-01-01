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
      DB::statement("CREATE VIEW tuteur_v AS
                     SELECT u.id as idUtilisateur,
                            u.nom as nom,
                            u.prenom as prenom,
                            u.email as email,
                            u.dateNaissance as dateNaissance,
                            u.adresse as adresse,
                            u.tel as tel,
                            u.telPortable as telPortable,
                            2 as type,
                            u.created_at as createdDateUser,
                            e.id as idEntreprise,
                            e.nom as nomEntreprise,
                            e.rue as adresseEntreprise,
                            e.cp as codePostalEntreprise,
                            e.ville as villeEntreprise
                     FROM tuteur t, entreprise e, utilisateur u
                     WHERE t.idEntreprise = e.id
                     AND t.idUtilisateur = u.id  ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('DROP VIEW tuteur_v');
    }
}
