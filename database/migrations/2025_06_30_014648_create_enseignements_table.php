<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('enseignements', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->text('contenu');
            $table->string('img')->nullable();
            $table->string('hastag')->nullable();
            $table->boolean('est_publie')->default(false);
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // auteur
            $table->foreignId('categorie_id')->constrained()->onDelete('cascade'); // relation avec table catégories
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enseignements');
    }
};
