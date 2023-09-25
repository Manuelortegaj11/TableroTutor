<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDerechoTable extends Migration
{
    public function up()
    {
        Schema::create('derecho', function (Blueprint $table) {
            $table->id();
            $table->boolean('realizo_examen_suficiencia');
            $table->text('observaciones_derecho')->nullable();
            $table->unsignedBigInteger('estudiante_id');
            $table->foreign('estudiante_id')->references('id')->on('estudiantes');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('derecho');
    }
}

