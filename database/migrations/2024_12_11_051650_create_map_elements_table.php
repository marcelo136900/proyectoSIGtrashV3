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
        Schema::create('map_elements', function (Blueprint $table) {
            $table->id();
            $table->enum('tipo', ['marcador', 'ruta', 'forma']);
            $table->json('datos'); // Coordenadas y otros datos
            $table->timestamps();
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
