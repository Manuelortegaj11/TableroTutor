<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExoneracionSaberProTable extends Migration
{
    public function up()
    {
        Schema::create('exoneracion_saber_pro', function (Blueprint $table) {
            $table->id();
            $table->decimal('puntuacion', 5, 2);
            $table->string('puesto');
            $table->unsignedBigInteger('opcion_grado_id');
            $table->foreign('opcion_grado_id')->references('id')->on('opcion_grado');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('exoneracion_saber_pro');
    }
}

