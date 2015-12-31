<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Entreprise extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('entreprises', function (Blueprint $table) {
        $table->increments('id');
        $table->string('nom');
        $table->string('rue');
        $table->integer('cp');
        $table->string('ville');
        // $table->string('tel');
        $table->timestamps();
      });

      // DB::table('entreprises')->insert(
      //   [
      //     'nom' => 'Mx data',
      //     'rue' => '19 rue quatre septembre',
      //     'cp' => '75002',
      //     'ville' => 'Paris 2e',
      //     'tel' => '0102030405'
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
        Schema::drop('entreprises');
    }
}
