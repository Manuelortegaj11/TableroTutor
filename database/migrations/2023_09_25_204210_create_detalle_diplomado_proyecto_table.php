<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleDiplomadoProyectoTable extends Migration
{
    public function up()
    {
        Schema::create('detalle_diplomado_proyecto', function (Blueprint $table) {
            $table->id();
            $table->date('fecha_inicial')->nullable();
            $table->date('fecha_final')->nullable();
            $table->integer('duracion')->nullable();
            $table->boolean('aprobacion_plataforma');
            $table->decimal('nota', 5, 2)->nullable();
            $table->decimal('costo', 10, 2)->nullable();
            $table->boolean('sustentacion');
            $table->unsignedBigInteger('opcion_grado_id');
            $table->foreign('opcion_grado_id')->references('id')->on('opcion_grado');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('detalle_diplomado_proyecto');
    }
}

