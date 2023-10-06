<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormularioTable extends Migration
{
    public function up()
    {
        Schema::create('formularios', function (Blueprint $table) {
            $table->id();
            $table->date('fecha_realizacion')->nullable();
            $table->string('nombre_completo')->nullable();
            $table->string('codigo_estudiantil')->nullable();
            $table->string('programa_cursado')->nullable();
            $table->string('telefono')->nullable();
            $table->string('correo_institucional')->nullable();
            $table->string('ubicacion_residencia')->nullable();
            $table->boolean('realizo_saber_pro')->nullable();
            $table->string('fecha_realizo_saber_pro')->nullable();
            $table->text('observaciones_saber_pro')->nullable();
            $table->boolean('realizo_examen_suficiencia')->nullable();
            $table->text('observaciones_examen_suficiencia')->nullable();
            $table->boolean('ganador_requisito_ingles')->nullable();
            $table->string('como_gano_requisito_ingles')->nullable();
            $table->text('observaciones_gano_requisito_ingles')->nullable();
            $table->string('opcion_grado')->nullable();
            $table->text('realizacion_prepracticas')->nullable();
            $table->string('empresa_prepracticas')->nullable();
            $table->string('ciudad_prepracticas')->nullable();
            $table->date('fecha_inicio_prepracticas')->nullable();
            $table->date('fecha_final_prepracticas')->nullable();
            $table->boolean('remuneracion_prepracticas')->nullable();
            $table->string('tiempo_prepracticas')->nullable();
            $table->boolean('legalizacion_prepracticas')->nullable();
            $table->date('fecha_legalizacion_prepracticas')->nullable();
            $table->boolean('sustento_prepracticas')->nullable();
            $table->boolean('aprobacion_plataforma_prepracticas')->nullable();
            $table->date('fecha_aprobacion_plataforma_prepracticas')->nullable();
            $table->date('fecha_inicial_diplomado_proyecto')->nullable();
            $table->date('fecha_final_diplomado_proyecto')->nullable();
            $table->string('tiempo_diplomado_proyecto')->nullable();
            $table->boolean('aprobacion_plataforma_diplomado_proyecto')->nullable();
            $table->float('nota_diplomado_proyecto', 4, 2)->nullable();
            $table->float('costo_diplomado_proyecto', 10, 2)->nullable();
            $table->boolean('sustentacion_diplomado_proyecto')->nullable();
            $table->text('exoneracion_resultados_saber_pro')->nullable();
            $table->float('puntaje_saber_pro')->nullable();
            $table->integer('puesto_saber_pro')->nullable();
            $table->boolean('ganador_requisito_grado')->nullable();
            $table->text('observaciones_ganador_requisito_grado')->nullable();
            $table->integer('periodo_finalizacion_academica')->nullable();
            $table->date('fecha_prevista_grado')->nullable();
            $table->integer('nivel_estudiante')->nullable();
            $table->text('observaciones_generales')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('formularios');
    }
}

