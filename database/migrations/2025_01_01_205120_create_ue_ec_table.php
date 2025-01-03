<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('unites_enseignement', function (Blueprint $table) {
            $table->id();
            $table->string('code', 4)->unique();
            $table->string('nom');
            $table->integer('credits_ects');
            $table->integer('semestre');
            $table->timestamps();

        });

        Schema::create('elements_constitutifs', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique();
            $table->string('nom');
            $table->integer('coefficient');
            $table->foreignId('ue_id');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('unites_enseignement');
        Schema::dropIfExists('elements_constitutifs');
    }
};
