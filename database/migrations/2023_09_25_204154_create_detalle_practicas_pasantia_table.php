<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetallePracticasPasantiaTable extends Migration
{
    public function up()
    {
        Schema::create('detalle_practicas_pasantia', function (Blueprint $table) {
            $table->id();
            $table->boolean('realizo_prepracticas');
            $table->string('empresa')->nullable();
            $table->string('ciudad')->nullable();
            $table->date('fecha_inicio')->nullable();
            $table->date('fecha_final')->nullable();
            $table->boolean('remuneracion');
            $table->decimal('valor', 10, 2)->nullable();
            $table->integer('tiempo')->nullable();
            $table->boolean('legalizacion');
            $table->date('fecha_legalizacion')->nullable();
            $table->boolean('sustento');
            $table->boolean('aprobacion_plataforma');
            $table->unsignedBigInteger('opcion_grado_id');
            $table->foreign('opcion_grado_id')->references('id')->on('opcion_grado');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('detalle_practicas_pasantia');
    }
}

