<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotesTable extends Migration
{
    public function up()
    {
        Schema::create('notes', function (Blueprint $table) {
            $table->id();
            $table->string('etudiant_nom');
            $table->string('etudiant_prenom');
            $table->string('annee_etude');
            $table->string('filiere');
            $table->integer('credit');
            $table->string('semestre');
            $table->integer('coefficient');
            $table->date('date_evaluation');
            $table->float('note', 4, 2);
            $table->string('session');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('notes');
    }
}
