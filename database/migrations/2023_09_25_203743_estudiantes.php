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
        Schema::create('estudiantes', function (Blueprint $table) {
        $table->id();
        $table->date('fecha_realizacion');
        $table->string('nombre_completo');
        $table->string('codigo_estudiantil');
        $table->string('programa_cursado');
        $table->string('telefono');
        $table->string('correo_institucional');
        $table->string('ubicacion_residencia');
        $table->timestamps(); // Columnas created_at y updated_at
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estudiantes');
    }
};
