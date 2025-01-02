<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateElementsConstitutifsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('elements_constitutifs', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique(); 
            $table->string('nom');
            $table->decimal('coefficient', 4, 2); 
            $table->foreignId('ue_id')->constrained('unites_enseignement')->onDelete('cascade'); 
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('elements_constitutifs');
    }
};
