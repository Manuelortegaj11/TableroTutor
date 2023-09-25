<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOpcionGradoTable extends Migration
{
    public function up()
    {
        Schema::create('opcion_grado', function (Blueprint $table) {
            $table->id();
            $table->string('opcion');
            $table->unsignedBigInteger('estudiante_id');
            $table->foreign('estudiante_id')->references('id')->on('estudiantes');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('opcion_grado');
    }
}

