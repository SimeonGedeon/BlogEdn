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
        Schema::create('pensees', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // auteur
            $table->string('titre');
            $table->string('verset');
            $table->text('contenu');
            $table->text('exhortation')->nullable();
            $table->string('hashtags')->nullable();
            $table->string('image')->nullable();
            $table->boolean('est_publie')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pensees');
    }
};
