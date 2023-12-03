<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use app\Models\pokemodel;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pokemon', function (Blueprint $table) {
            $table->id();
            $table->string('Nombre');
            $table->string('Tipo');
            $table->string('Tamaño');
            $table->float('Peso');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pokemon');
    }
};
