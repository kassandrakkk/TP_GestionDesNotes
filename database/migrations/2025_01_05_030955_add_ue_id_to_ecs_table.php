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
        Schema::table('ecs', function (Blueprint $table) {
            $table->foreignId('ue_id')->constrained('ues')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('ecs', function (Blueprint $table) {
            $table->dropForeign(['ue_id']);
             $table->dropColumn('ue_id');
        });
    }
};
