<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequisitoInglesTable extends Migration
{
    public function up()
    {
        Schema::create('requisito_ingles', function (Blueprint $table) {
            $table->id();
            $table->boolean('gano_requisito');
            $table->string('como_gano')->nullable();
            $table->text('observaciones_ingles')->nullable();
            $table->unsignedBigInteger('estudiante_id');
            $table->foreign('estudiante_id')->references('id')->on('estudiantes');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('requisito_ingles');
    }
}

