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
        Schema::create('Usuarios', function (Blueprint $table) {
            $table->string('Nick');
            $table->string('Email');
            $table->string('Nombre');
            $table->string('Apellidos');
            $table->string('id');
            $table->date('Fecha_nacimiento');
            $table->string('Contrasena');
            $table->string('Rol');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
