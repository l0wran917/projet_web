pathImg = "/home/laurent/Documents/Cours/IUT/S3/Web/projet/public/img/etudiants"
pathMigration = "/home/laurent/Documents/Cours/IUT/S3/Web/projet/database/migrations/2016_01_15_073942_allEtudiants.php"

migrateFile = File.open(pathMigration, "w")

migrateFile.puts "
<?php

use Illuminate\\Database\\Schema\\Blueprint;
use Illuminate\\Database\\Migrations\\Migration;

class AllEtudiants extends Migration
{
    public function up()
    {
"

cpt = 1

Dir.foreach(pathImg){ |file|

  if(file != "." && file != "..")
    prenom = file.split(".")[0].to_s
    nom = file.split(".")[1].to_s
    # puts prenom.to_s + " ".to_s + nom.to_s

    email = prenom.gsub(/\s+/, '-') + "." + nom.gsub(/\s+/, '-') + "@u-psud.fr"

    email = email.gsub(/\'/, '')
    nom = nom.gsub(/\'/, '')

    migrateFile.puts "
      DB::table('utilisateur')->insert(
        [
          'id' => " + cpt.to_s + ",
          'nom' =>  '" + nom.to_s + "',
          'prenom' => '" + prenom.to_s + "',
          'email' => '" + email.to_s + "',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => " + cpt.to_s + ",
          'tp' => '1K'
        ]
      );
    "
    cpt += 1
  end

}

migrateFile.puts "
  DB::table('utilisateur')->insert(
    [
      'id' => " + (cpt+1).to_s + ",
      'nom' => 'lacaille',
      'prenom' => 'loic',
      'email' => 'loic.lacaille@u-psud.fr',
      'dateNaissance' => '1996-01-01',
      'adresse' => '1 Rue des patates',
      'telPortable' => '0102030405',
      'password' => Hash::make('password'),
      'type' => 2
    ]
  );

  DB::table('utilisateur')->insert(
    [
      'id' => " + (cpt+2).to_s + ",
      'nom' => 'morterol',
      'prenom' => 'martin',
      'email' => 'martin.morterol@u-psud.fr',
      'dateNaissance' => '1992-01-01',
      'adresse' => '2 Rue des patates',
      'telPortable' => '0102030405',
      'password' => Hash::make('password'),
      'type' => 3
    ]
  );

  DB::table('entreprise')->insert(
    [
      'id' => 1,
      'nom' => 'Mx Data',
      'rue' => '19 rue du 4 septembre',
      'cp' => '75002',
      'ville' => 'Paris 2e'
    ]
  );

  DB::table('tuteur')->insert(
    [
      'idUtilisateur' => " + (cpt+1).to_s + ",
      'idEntreprise' => '1'
    ]
  );


  DB::table('tuteurEnseignant')->insert(
    [
        'idUtilisateur' => "+(cpt+2).to_s+"
    ]
  );
"


migrateFile.puts "
    }

    public function down()
    {    }
}
"

migrateFile.close
