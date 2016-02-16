<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AllEtudiants extends Migration
{
    public function up()
    {
/*
      DB::table('utilisateur')->insert(
        [
          'id' => 1,
          'nom' =>  'bette-gadioux',
          'prenom' => 'adrien',
          'email' => 'adrien.bette-gadioux@u-psud.fr',
          'dateNaissance' => '1996-01-20'
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 1,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 2,
          'nom' =>  'mariathas',
          'prenom' => 'alain',
          'email' => 'alain.mariathas@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 2,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 3,
          'nom' =>  'dolsa',
          'prenom' => 'alexandre',
          'email' => 'alexandre.dolsa@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 3,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 4,
          'nom' =>  'issa',
          'prenom' => 'alexandre',
          'email' => 'alexandre.issa@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 4,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 5,
          'nom' =>  'kouyoumdjian',
          'prenom' => 'alexandre',
          'email' => 'alexandre.kouyoumdjian@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 5,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 6,
          'nom' =>  'morat',
          'prenom' => 'alexandre',
          'email' => 'alexandre.morat@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 6,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 7,
          'nom' =>  'morcrette',
          'prenom' => 'alexandre',
          'email' => 'alexandre.morcrette@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 7,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 8,
          'nom' =>  'noret',
          'prenom' => 'alexandre',
          'email' => 'alexandre.noret@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 8,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 9,
          'nom' =>  'bour',
          'prenom' => 'alexis',
          'email' => 'alexis.bour@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 9,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 10,
          'nom' =>  'pokorski',
          'prenom' => 'alexis',
          'email' => 'alexis.pokorski@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 10,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 11,
          'nom' =>  'balde',
          'prenom' => 'alhassana',
          'email' => 'alhassana.balde@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 11,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 12,
          'nom' =>  'punel',
          'prenom' => 'amaury',
          'email' => 'amaury.punel@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 12,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 13,
          'nom' =>  'efomi',
          'prenom' => 'andy',
          'email' => 'andy.efomi@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 13,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 14,
          'nom' =>  'etienne',
          'prenom' => 'angelique',
          'email' => 'angelique.etienne@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 14,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 15,
          'nom' =>  'radja',
          'prenom' => 'anita',
          'email' => 'anita.radja@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 15,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 16,
          'nom' =>  'poels',
          'prenom' => 'anthony',
          'email' => 'anthony.poels@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 16,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 17,
          'nom' =>  'faller',
          'prenom' => 'antoine',
          'email' => 'antoine.faller@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 17,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 18,
          'nom' =>  'toutin',
          'prenom' => 'antoine',
          'email' => 'antoine.toutin@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 18,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 19,
          'nom' =>  'milovanov',
          'prenom' => 'anton',
          'email' => 'anton.milovanov@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 19,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 20,
          'nom' =>  'biswas',
          'prenom' => 'arindam',
          'email' => 'arindam.biswas@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 20,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 21,
          'nom' =>  'dubois',
          'prenom' => 'arsene',
          'email' => 'arsene.dubois@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 21,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 22,
          'nom' =>  'binello',
          'prenom' => 'arthur',
          'email' => 'arthur.binello@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 22,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 23,
          'nom' =>  'panetto',
          'prenom' => 'arthur',
          'email' => 'arthur.panetto@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 23,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 24,
          'nom' =>  'atamna',
          'prenom' => 'asma',
          'email' => 'asma.atamna@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 24,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 25,
          'nom' =>  'roy',
          'prenom' => 'aurelien',
          'email' => 'aurelien.roy@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 25,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 26,
          'nom' =>  'terrain',
          'prenom' => 'aurelien',
          'email' => 'aurelien.terrain@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 26,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 27,
          'nom' =>  'ewango',
          'prenom' => 'aymeric',
          'email' => 'aymeric.ewango@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 27,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 28,
          'nom' =>  'moinereau',
          'prenom' => 'baptiste',
          'email' => 'baptiste.moinereau@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 28,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 29,
          'nom' =>  'gy',
          'prenom' => 'bastien',
          'email' => 'bastien.gy@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 29,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 30,
          'nom' =>  'pujos',
          'prenom' => 'bastien',
          'email' => 'bastien.pujos@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 30,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 31,
          'nom' =>  'dississa  ndoulou',
          'prenom' => 'belverin jophilga',
          'email' => 'belverin-jophilga.dississa-ndoulou@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 31,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 32,
          'nom' =>  'aparicio',
          'prenom' => 'benjamin',
          'email' => 'benjamin.aparicio@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 32,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 33,
          'nom' =>  'annic',
          'prenom' => 'charles',
          'email' => 'charles.annic@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 33,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 34,
          'nom' =>  'blot',
          'prenom' => 'charles',
          'email' => 'charles.blot@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 34,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 35,
          'nom' =>  'ecollan',
          'prenom' => 'charles',
          'email' => 'charles.ecollan@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 35,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 36,
          'nom' =>  'guitton',
          'prenom' => 'charles',
          'email' => 'charles.guitton@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 36,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 37,
          'nom' =>  'chalumeau',
          'prenom' => 'charlotte',
          'email' => 'charlotte.chalumeau@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 37,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 38,
          'nom' =>  'ragon',
          'prenom' => 'clemence',
          'email' => 'clemence.ragon@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 38,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 39,
          'nom' =>  'condette',
          'prenom' => 'clement',
          'email' => 'clement.condette@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 39,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 40,
          'nom' =>  'mazeau',
          'prenom' => 'clement',
          'email' => 'clement.mazeau@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 40,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 41,
          'nom' =>  'sauvard',
          'prenom' => 'clément',
          'email' => 'clément.sauvard@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 41,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 42,
          'nom' =>  'bouchaudon',
          'prenom' => 'corentin',
          'email' => 'corentin.bouchaudon@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 42,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 43,
          'nom' =>  'filoche',
          'prenom' => 'corentin',
          'email' => 'corentin.filoche@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 43,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 44,
          'nom' =>  'crebouw',
          'prenom' => 'cyril',
          'email' => 'cyril.crebouw@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 44,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 45,
          'nom' =>  'declerck',
          'prenom' => 'david',
          'email' => 'david.declerck@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 45,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 46,
          'nom' =>  'ha',
          'prenom' => 'david',
          'email' => 'david.ha@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 46,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 47,
          'nom' =>  'boulme',
          'prenom' => 'davy',
          'email' => 'davy.boulme@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 47,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 48,
          'nom' =>  'nguyen',
          'prenom' => 'duc trung arnaud',
          'email' => 'duc-trung-arnaud.nguyen@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 48,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 49,
          'nom' =>  'bui',
          'prenom' => 'emeric quang-thang',
          'email' => 'emeric-quang-thang.bui@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 49,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 50,
          'nom' =>  'correia',
          'prenom' => 'emmanuelle',
          'email' => 'emmanuelle.correia@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 50,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 51,
          'nom' =>  'blaudez',
          'prenom' => 'eric',
          'email' => 'eric.blaudez@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 51,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 52,
          'nom' =>  'martelot',
          'prenom' => 'eric',
          'email' => 'eric.martelot@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 52,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 53,
          'nom' =>  'simon',
          'prenom' => 'ewen',
          'email' => 'ewen.simon@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 53,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 54,
          'nom' =>  'pavot',
          'prenom' => 'fabien',
          'email' => 'fabien.pavot@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 54,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 55,
          'nom' =>  'cirelli',
          'prenom' => 'fabio',
          'email' => 'fabio.cirelli@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 55,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 56,
          'nom' =>  'rajan',
          'prenom' => 'fernand',
          'email' => 'fernand.rajan@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 56,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 57,
          'nom' =>  'le niger',
          'prenom' => 'florent',
          'email' => 'florent.le-niger@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 57,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 58,
          'nom' =>  'allermoz',
          'prenom' => 'florian',
          'email' => 'florian.allermoz@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 58,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 59,
          'nom' =>  'barriere',
          'prenom' => 'florian',
          'email' => 'florian.barriere@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 59,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 60,
          'nom' =>  'minolien',
          'prenom' => 'floriane',
          'email' => 'floriane.minolien@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 60,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 61,
          'nom' =>  'rousselet',
          'prenom' => 'francois',
          'email' => 'francois.rousselet@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 61,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 62,
          'nom' =>  'chaumeny',
          'prenom' => 'françois',
          'email' => 'françois.chaumeny@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 62,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 63,
          'nom' =>  'carmelli',
          'prenom' => 'guillaume',
          'email' => 'guillaume.carmelli@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 63,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 64,
          'nom' =>  'cherpentier',
          'prenom' => 'antoine',
          'email' => 'antoine.cherpentier@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 64,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 65,
          'nom' =>  'mare',
          'prenom' => 'benjamin',
          'email' => 'benjamin.mare@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 65,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 66,
          'nom' =>  'boros',
          'prenom' => 'emanuela',
          'email' => 'emanuela.boros@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 66,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 67,
          'nom' =>  'de koker',
          'prenom' => 'guillaume',
          'email' => 'guillaume.de-koker@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 67,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 68,
          'nom' =>  'gras',
          'prenom' => 'johan',
          'email' => 'johan.gras@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 68,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 69,
          'nom' =>  'darre',
          'prenom' => 'laurent',
          'email' => 'laurent.darre@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 69,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 70,
          'nom' =>  'trellet',
          'prenom' => 'mikael',
          'email' => 'mikael.trellet@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 70,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 71,
          'nom' =>  'cordier',
          'prenom' => 'paul',
          'email' => 'paul.cordier@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 71,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 72,
          'nom' =>  'cart',
          'prenom' => 'robin',
          'email' => 'robin.cart@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 72,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 73,
          'nom' =>  'androny',
          'prenom' => 'thibault',
          'email' => 'thibault.androny@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 73,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 74,
          'nom' =>  'witon',
          'prenom' => 'valentin',
          'email' => 'valentin.witon@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 74,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 75,
          'nom' =>  'marotte',
          'prenom' => 'guillaume',
          'email' => 'guillaume.marotte@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 75,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 76,
          'nom' =>  'martinez',
          'prenom' => 'guillaume',
          'email' => 'guillaume.martinez@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 76,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 77,
          'nom' =>  'assous',
          'prenom' => 'hakim',
          'email' => 'hakim.assous@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 77,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 78,
          'nom' =>  'zhang',
          'prenom' => 'haoyu',
          'email' => 'haoyu.zhang@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 78,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 79,
          'nom' =>  'mukhtar',
          'prenom' => 'hassan',
          'email' => 'hassan.mukhtar@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 79,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 80,
          'nom' =>  'mouginot',
          'prenom' => 'hubert',
          'email' => 'hubert.mouginot@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 80,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 81,
          'nom' =>  'avellino martinez',
          'prenom' => 'ignacio martin',
          'email' => 'ignacio-martin.avellino-martinez@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 81,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 82,
          'nom' =>  'hadi',
          'prenom' => 'ismail',
          'email' => 'ismail.hadi@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 82,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 83,
          'nom' =>  'bouchama',
          'prenom' => 'james',
          'email' => 'james.bouchama@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 83,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 84,
          'nom' =>  'mohamed',
          'prenom' => 'jean  pierre',
          'email' => 'jean-pierre.mohamed@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 84,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 85,
          'nom' =>  'angles dauriac',
          'prenom' => 'jean-alexandre',
          'email' => 'jean-alexandre.angles-dauriac@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 85,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 86,
          'nom' =>  'guyenne',
          'prenom' => 'jean-baptiste',
          'email' => 'jean-baptiste.guyenne@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 86,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 87,
          'nom' =>  'tatibouet',
          'prenom' => 'jeremie',
          'email' => 'jeremie.tatibouet@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 87,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 88,
          'nom' =>  'wang',
          'prenom' => 'jiayang',
          'email' => 'jiayang.wang@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 88,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 89,
          'nom' =>  'gao',
          'prenom' => 'jingyi',
          'email' => 'jingyi.gao@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 89,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 90,
          'nom' =>  'de oliveira',
          'prenom' => 'joe',
          'email' => 'joe.de-oliveira@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 90,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 91,
          'nom' =>  'hospice',
          'prenom' => 'johann',
          'email' => 'johann.hospice@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 91,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 92,
          'nom' =>  'nadarajah',
          'prenom' => 'johnathan',
          'email' => 'johnathan.nadarajah@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 92,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 93,
          'nom' =>  'robillard',
          'prenom' => 'jonathan',
          'email' => 'jonathan.robillard@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 93,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 94,
          'nom' =>  'zhang',
          'prenom' => 'juexiao',
          'email' => 'juexiao.zhang@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 94,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 95,
          'nom' =>  'couleaud',
          'prenom' => 'julie',
          'email' => 'julie.couleaud@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 95,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 96,
          'nom' =>  'lacroix',
          'prenom' => 'julien',
          'email' => 'julien.lacroix@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 96,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 97,
          'nom' =>  'rembinski',
          'prenom' => 'julien',
          'email' => 'julien.rembinski@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 97,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 98,
          'nom' =>  'tourille',
          'prenom' => 'julien',
          'email' => 'julien.tourille@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 98,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 99,
          'nom' =>  'li',
          'prenom' => 'jun hui',
          'email' => 'jun-hui.li@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 99,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 100,
          'nom' =>  'vang foua',
          'prenom' => 'jérémie',
          'email' => 'jérémie.vang-foua@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 100,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 101,
          'nom' =>  'cochoy',
          'prenom' => 'jérémy',
          'email' => 'jérémy.cochoy@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 101,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 102,
          'nom' =>  'besoli',
          'prenom' => 'killian',
          'email' => 'killian.besoli@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 102,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 103,
          'nom' =>  'martin',
          'prenom' => 'killian',
          'email' => 'killian.martin@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 103,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 104,
          'nom' =>  'hing',
          'prenom' => 'kunborribo',
          'email' => 'kunborribo.hing@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 104,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 105,
          'nom' =>  'demay',
          'prenom' => 'lancelot',
          'email' => 'lancelot.demay@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 105,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 106,
          'nom' =>  'bassin',
          'prenom' => 'laurent',
          'email' => 'laurent.bassin@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 106,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 107,
          'nom' =>  'charlier',
          'prenom' => 'leo',
          'email' => 'leo.charlier@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 107,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 108,
          'nom' =>  'zhong',
          'prenom' => 'linzhou',
          'email' => 'linzhou.zhong@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 108,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 109,
          'nom' =>  'palmisano',
          'prenom' => 'liviana',
          'email' => 'liviana.palmisano@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 109,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 110,
          'nom' =>  'plantet',
          'prenom' => 'loic',
          'email' => 'loic.plantet@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 110,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 111,
          'nom' =>  'mangematin',
          'prenom' => 'lucas',
          'email' => 'lucas.mangematin@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 111,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 112,
          'nom' =>  'salvato',
          'prenom' => 'lucas',
          'email' => 'lucas.salvato@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 112,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 113,
          'nom' =>  'bechade',
          'prenom' => 'lucile',
          'email' => 'lucile.bechade@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 113,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 114,
          'nom' =>  'roussard',
          'prenom' => 'ludovic',
          'email' => 'ludovic.roussard@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 114,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 115,
          'nom' =>  'ould ouali',
          'prenom' => 'lydia',
          'email' => 'lydia.ould-ouali@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 115,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 116,
          'nom' =>  'ouldouali',
          'prenom' => 'lydia',
          'email' => 'lydia.ouldouali@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 116,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 117,
          'nom' =>  'pheulpin',
          'prenom' => 'marceau',
          'email' => 'marceau.pheulpin@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 117,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 118,
          'nom' =>  'cauwet',
          'prenom' => 'marie-liesse',
          'email' => 'marie-liesse.cauwet@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 118,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 119,
          'nom' =>  'doisneau',
          'prenom' => 'mathieu',
          'email' => 'mathieu.doisneau@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 119,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 120,
          'nom' =>  'rêve',
          'prenom' => 'mathieu',
          'email' => 'mathieu.rêve@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 120,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 121,
          'nom' =>  'excoffier',
          'prenom' => 'mathilde',
          'email' => 'mathilde.excoffier@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 121,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 122,
          'nom' =>  'sukho',
          'prenom' => 'matthieu',
          'email' => 'matthieu.sukho@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 122,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 123,
          'nom' =>  'xu',
          'prenom' => 'minghao',
          'email' => 'minghao.xu@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 123,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 124,
          'nom' =>  'ben jannet',
          'prenom' => 'mohamed ameur',
          'email' => 'mohamed-ameur.ben-jannet@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 124,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 125,
          'nom' =>  'hadjadj',
          'prenom' => 'mohamed',
          'email' => 'mohamed.hadjadj@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 125,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 126,
          'nom' =>  'feurte',
          'prenom' => 'morgan',
          'email' => 'morgan.feurte@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 126,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 127,
          'nom' =>  'meftah',
          'prenom' => 'naida',
          'email' => 'naida.meftah@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 127,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 128,
          'nom' =>  'rivoherinjakanavalona',
          'prenom' => 'nathalie',
          'email' => 'nathalie.rivoherinjakanavalona@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 128,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 129,
          'nom' =>  'garnaud',
          'prenom' => 'nathan',
          'email' => 'nathan.garnaud@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 129,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 130,
          'nom' =>  'da silva',
          'prenom' => 'nicolas',
          'email' => 'nicolas.da-silva@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 130,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 131,
          'nom' =>  'duhamel',
          'prenom' => 'nicolas',
          'email' => 'nicolas.duhamel@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 131,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 132,
          'nom' =>  'dulac',
          'prenom' => 'nicolas',
          'email' => 'nicolas.dulac@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 132,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 133,
          'nom' =>  'sauvage',
          'prenom' => 'nicolas',
          'email' => 'nicolas.sauvage@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 133,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 134,
          'nom' =>  'maudet',
          'prenom' => 'nolwenn',
          'email' => 'nolwenn.maudet@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 134,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 135,
          'nom' =>  'nguyen',
          'prenom' => 'pascal',
          'email' => 'pascal.nguyen@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 135,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 136,
          'nom' =>  'warchol',
          'prenom' => 'patryk',
          'email' => 'patryk.warchol@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 136,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 137,
          'nom' =>  'arcas',
          'prenom' => 'paul',
          'email' => 'paul.arcas@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 137,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 138,
          'nom' =>  'chaumeil',
          'prenom' => 'paul',
          'email' => 'paul.chaumeil@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 138,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 139,
          'nom' =>  'lagree',
          'prenom' => 'paul',
          'email' => 'paul.lagree@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 139,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 140,
          'nom' =>  'bentegeac',
          'prenom' => 'philippe',
          'email' => 'philippe.bentegeac@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 140,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 141,
          'nom' =>  'gilain',
          'prenom' => 'pierre',
          'email' => 'pierre.gilain@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 141,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 142,
          'nom' =>  'mennesson',
          'prenom' => 'pierre',
          'email' => 'pierre.mennesson@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 142,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 143,
          'nom' =>  'straëbler',
          'prenom' => 'pierre',
          'email' => 'pierre.straëbler@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 143,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 144,
          'nom' =>  'courilleau',
          'prenom' => 'pierrick',
          'email' => 'pierrick.courilleau@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 144,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 145,
          'nom' =>  'overzee',
          'prenom' => 'pieter',
          'email' => 'pieter.overzee@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 145,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 146,
          'nom' =>  'xu',
          'prenom' => 'qin',
          'email' => 'qin.xu@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 146,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 147,
          'nom' =>  'bresson',
          'prenom' => 'quentin',
          'email' => 'quentin.bresson@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 147,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 148,
          'nom' =>  'guyet',
          'prenom' => 'quentin',
          'email' => 'quentin.guyet@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 148,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 149,
          'nom' =>  'vias',
          'prenom' => 'quentin',
          'email' => 'quentin.vias@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 149,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 150,
          'nom' =>  'bonaque',
          'prenom' => 'raphael',
          'email' => 'raphael.bonaque@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 150,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 151,
          'nom' =>  'uzan',
          'prenom' => 'raphaël',
          'email' => 'raphaël.uzan@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 151,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 152,
          'nom' =>  'kecira',
          'prenom' => 'rayan',
          'email' => 'rayan.kecira@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 152,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 153,
          'nom' =>  'kebaili',
          'prenom' => 'remi',
          'email' => 'remi.kebaili@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 153,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 154,
          'nom' =>  'lapeyre',
          'prenom' => 'remi',
          'email' => 'remi.lapeyre@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 154,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 155,
          'nom' =>  'paxion',
          'prenom' => 'robin',
          'email' => 'robin.paxion@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 155,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 156,
          'nom' =>  'beaumont',
          'prenom' => 'romain',
          'email' => 'romain.beaumont@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 156,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 157,
          'nom' =>  'coispel',
          'prenom' => 'romain',
          'email' => 'romain.coispel@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 157,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 158,
          'nom' =>  'scohy',
          'prenom' => 'romain',
          'email' => 'romain.scohy@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 158,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 159,
          'nom' =>  'chrifi alaoui',
          'prenom' => 'samy',
          'email' => 'samy.chrifi-alaoui@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 159,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 160,
          'nom' =>  'wang',
          'prenom' => 'shuishan',
          'email' => 'shuishan.wang@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 160,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 161,
          'nom' =>  'fouchier',
          'prenom' => 'simon',
          'email' => 'simon.fouchier@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 161,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 162,
          'nom' =>  'lemonnier',
          'prenom' => 'simon',
          'email' => 'simon.lemonnier@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 162,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 163,
          'nom' =>  'teixeira',
          'prenom' => 'simon',
          'email' => 'simon.teixeira@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 163,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 164,
          'nom' =>  'dahou',
          'prenom' => 'sofian',
          'email' => 'sofian.dahou@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 164,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 165,
          'nom' =>  'jeanson',
          'prenom' => 'solene',
          'email' => 'solene.jeanson@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 165,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 166,
          'nom' =>  'kichenaradjou',
          'prenom' => 'sourithi',
          'email' => 'sourithi.kichenaradjou@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 166,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 167,
          'nom' =>  'pourouchottamane',
          'prenom' => 'srivatsa',
          'email' => 'srivatsa.pourouchottamane@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 167,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 168,
          'nom' =>  'cissé',
          'prenom' => 'steeve',
          'email' => 'steeve.cissé@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 168,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 169,
          'nom' =>  'kui',
          'prenom' => 'stephane',
          'email' => 'stephane.kui@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 169,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 170,
          'nom' =>  'serre',
          'prenom' => 'thibaud',
          'email' => 'thibaud.serre@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 170,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 171,
          'nom' =>  'ruby',
          'prenom' => 'thibault',
          'email' => 'thibault.ruby@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 171,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 172,
          'nom' =>  'blessing',
          'prenom' => 'thomas',
          'email' => 'thomas.blessing@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 172,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 173,
          'nom' =>  'bonis',
          'prenom' => 'thomas',
          'email' => 'thomas.bonis@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 173,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 174,
          'nom' =>  'havard',
          'prenom' => 'thomas',
          'email' => 'thomas.havard@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 174,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 175,
          'nom' =>  'huppé',
          'prenom' => 'thomas',
          'email' => 'thomas.huppé@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 175,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 176,
          'nom' =>  'schmid',
          'prenom' => 'thomas',
          'email' => 'thomas.schmid@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 176,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 177,
          'nom' =>  'tournoux',
          'prenom' => 'thomas',
          'email' => 'thomas.tournoux@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 177,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 178,
          'nom' =>  'jardim da fonseca',
          'prenom' => 'tiago',
          'email' => 'tiago.jardim-da-fonseca@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 178,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 179,
          'nom' =>  'perinet',
          'prenom' => 'timothe',
          'email' => 'timothe.perinet@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 179,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 180,
          'nom' =>  'aubourg',
          'prenom' => 'timothee',
          'email' => 'timothee.aubourg@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 180,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 181,
          'nom' =>  'janmot',
          'prenom' => 'timothée',
          'email' => 'timothée.janmot@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 181,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 182,
          'nom' =>  'giraud',
          'prenom' => 'tom',
          'email' => 'tom.giraud@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 182,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 183,
          'nom' =>  'vang',
          'prenom' => 'tony',
          'email' => 'tony.vang@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 183,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 184,
          'nom' =>  'detcheberry',
          'prenom' => 'valentin',
          'email' => 'valentin.detcheberry@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 184,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 185,
          'nom' =>  'gaultier',
          'prenom' => 'valentin',
          'email' => 'valentin.gaultier@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 185,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 186,
          'nom' =>  'mercadier',
          'prenom' => 'valentin',
          'email' => 'valentin.mercadier@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 186,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 187,
          'nom' =>  'pham',
          'prenom' => 'van cam',
          'email' => 'van-cam.pham@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 187,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 188,
          'nom' =>  'michaux',
          'prenom' => 'victor',
          'email' => 'victor.michaux@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 188,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 189,
          'nom' =>  'pancrate',
          'prenom' => 'victor',
          'email' => 'victor.pancrate@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 189,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 190,
          'nom' =>  'commelin',
          'prenom' => 'vincent',
          'email' => 'vincent.commelin@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 190,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 191,
          'nom' =>  'le gallic',
          'prenom' => 'vincent',
          'email' => 'vincent.le-gallic@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 191,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 192,
          'nom' =>  'letard',
          'prenom' => 'vincent',
          'email' => 'vincent.letard@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 192,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 193,
          'nom' =>  'ogez',
          'prenom' => 'william',
          'email' => 'william.ogez@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 193,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 194,
          'nom' =>  'martinez',
          'prenom' => 'xavier',
          'email' => 'xavier.martinez@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 194,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 195,
          'nom' =>  'villelegier',
          'prenom' => 'xavier',
          'email' => 'xavier.villelegier@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 195,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 196,
          'nom' =>  'senechal',
          'prenom' => 'yael',
          'email' => 'yael.senechal@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 196,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 197,
          'nom' =>  'wajih',
          'prenom' => 'yanis',
          'email' => 'yanis.wajih@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 197,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 198,
          'nom' =>  'mesmoudi',
          'prenom' => 'yassine',
          'email' => 'yassine.mesmoudi@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 198,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 199,
          'nom' =>  'boukari',
          'prenom' => 'yedoubouam',
          'email' => 'yedoubouam.boukari@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 199,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 200,
          'nom' =>  'chen',
          'prenom' => 'yiqing',
          'email' => 'yiqing.chen@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 200,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 201,
          'nom' =>  'haddou',
          'prenom' => 'yohann',
          'email' => 'yohann.haddou@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 201,
          'tp' => '1K'
        ]
      );


      DB::table('utilisateur')->insert(
        [
          'id' => 202,
          'nom' =>  'lasme',
          'prenom' => 'yolaine',
          'email' => 'yolaine.lasme@u-psud.fr',
          'dateNaissance' => '1996-01-20',
          'adresse' => '18 Rue des templiers',
          'telPortable' => '0650403020',
          'password' => Hash::make('password'),
          'type' => 1
        ]
      );

      DB::table('etudiant')->insert(
        [
          'idUtilisateur' => 202,
          'tp' => '1K'
        ]
      );


  DB::table('utilisateur')->insert(
    [
      'id' => 204,
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
      'id' => 205,
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
      'idUtilisateur' => 204,
      'idEntreprise' => '1'
    ]
  );


  DB::table('tuteurEnseignant')->insert(
    [
        'idUtilisateur' => 205
    ]
  );
*/
    }

    public function down()
    {    }
}

?>
