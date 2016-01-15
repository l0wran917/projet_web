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
    "
  end

}

migrateFile.puts "
    }

    public function down()
    {    }
}
"

migrateFile.close
