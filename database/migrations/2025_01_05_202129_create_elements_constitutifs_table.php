<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateElementsConstitutifsTable extends Migration
{
    public function up()
    {
        Schema::create('elements_constitutifs', function (Blueprint $table) {
            $table->id();
            $table->string('code'); // Code de l'EC (ex: EC1)
            $table->string('nom');  // Nom de l'EC (ex: Algorithmique)
            $table->integer('coefficient'); // Coefficient de l'EC
            $table->foreignId('ue_id')->constrained('unites_enseignement')->onDelete('cascade'); // UE associée
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('elements_constitutifs');
    }
}
