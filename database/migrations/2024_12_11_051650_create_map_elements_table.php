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
        Schema::create('elementos_mapa', function (Blueprint $table) {
            $table->id(); // Crea una columna 'id' como clave primaria
            $table->enum('tipo', ['marcador', 'ruta', 'forma']); // Tipo del elemento
            $table->json('datos'); // Column JSON para almacenar coordenadas y propiedades
            $table->foreignId('creado_por')->constrained('usuarios')->onDelete('cascade'); // Relación con usuarios
            $table->timestamps(); // Agrega columnas 'created_at' y 'updated_at'
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('map_elements');
    }
};
