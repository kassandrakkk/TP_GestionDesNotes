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
        Schema::dropIfExists('unites_enseignements');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::create('unites_enseignements', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->string('nom');
            $table->integer('credits_ects');
            $table->tinyInteger('semestre');
            // Autres colonnes ici
            $table->timestamps();
        });
    }
};
