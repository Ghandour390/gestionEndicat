<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void{
    Schema::create('etudier', function (Blueprint $table) {

        $table->foreignId('apprenant_id')->constrained('apprenants')->onDelete('cascade');
        $table->foreignId('classe_id')->constrained('classes')->onDelete('cascade');
        $table->string('niveau');
        $table->string('annee');
        $table->timestamps();
    });
    
    }
    /**
     * Reverse the migrations.
     */
    
    public function down(): void
    {
        Schema::dropIfExists('etudier');
    }
};
