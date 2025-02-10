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
        Schema::create('centros', function(BluePrint $tabla) {
            $tabla->id();
            $tabla->string('nombre');
            $tabla->string('email')->unique();
            $tabla->string('password');
            $tabla->string('direccion');
            $tabla->string('telefono');
            $tabla->string('poblacion');
            $tabla->string('provincia');
            $tabla->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('centros');
    }
};
