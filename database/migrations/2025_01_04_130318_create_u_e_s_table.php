<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUESTable extends Migration
{
    /**
     * Exécuter les migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('u_e_s', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->string('nom');
            $table->integer('credits_ects');
            $table->integer('semestre');
            $table->timestamps();
        });
    }

    /**
     * Rétablir la migration.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('u_e_s');
    }
}
