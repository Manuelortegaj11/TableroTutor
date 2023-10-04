<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequisitoGradoTable extends Migration
{
    public function up()
    {
        Schema::create('requisito_grado', function (Blueprint $table) {
            $table->id();
            $table->boolean('gano_requisito');
            $table->text('observaciones_requisito')->nullable();
            $table->integer('periodo_finalizacion');
            $table->date('fecha_prevista_grado')->nullable();
            $table->integer('nivel_estudiante');
            $table->text('observaciones_generales')->nullable();
            $table->unsignedBigInteger('estudiante_id');
            $table->foreign('estudiante_id')->references('id')->on('estudiantes');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('requisito_grado');
    }
}

