<?php

 Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**use
     * Run the migrations.
     */
    public function up()
{
    Schema::create('notes', function (Blueprint $table) {
        $table->id();
        $table->foreignId('etudiant_id')->constrained(); // Clé étrangère vers les étudiants
        $table->foreignId('ec_id')->constrained('elements_constitutifs')->onDelete('cascade'); // Clé étrangère vers elements_constitutifs
        $table->decimal('note', 5, 2); // Note de l'étudiant
        $table->enum('session', ['normale', 'rattrapage']); // Session (normale ou rattrapage)
        $table->date('date_evaluation'); // Date de l'évaluation
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notes');
    }
};
