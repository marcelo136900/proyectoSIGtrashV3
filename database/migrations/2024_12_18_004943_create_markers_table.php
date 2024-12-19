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
        Schema::create('markers', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion'); // Descripción del marcador
            $table->string('tipo');        // Tipo: basureros, contenedores, etc.
            $table->string('estado')->nullable(); // Estado: lleno, vacío, etc.
            $table->string('capacidad')->nullable(); // Ejemplo: 50kg
            $table->decimal('latitud', 10, 6); // Coordenada de latitud
            $table->decimal('longitud', 10, 6); // Coordenada de longitud
            $table->timestamps(); // created_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('markers');
    }
};
