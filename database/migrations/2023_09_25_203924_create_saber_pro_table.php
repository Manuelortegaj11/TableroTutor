<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSaberProTable extends Migration
{
    public function up()
    {
        Schema::create('saber_pro', function (Blueprint $table) {
            $table->id();
            $table->boolean('realizo_saber_pro');
            $table->date('fecha_realizacion')->nullable();
            $table->date('fecha_proyectada')->nullable();
            $table->text('observaciones_saber_pro')->nullable();
            $table->unsignedBigInteger('estudiante_id');
            $table->foreign('estudiante_id')->references('id')->on('estudiantes');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('saber_pro');
    }
}

