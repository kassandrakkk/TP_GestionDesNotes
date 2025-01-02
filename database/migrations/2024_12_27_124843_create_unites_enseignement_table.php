<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnitesEnseignementTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('unites_enseignement', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->string('nom');
            $table->integer('credits_ects');
            $table->tinyInteger('semestre');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('unites_enseignement');
    }
};