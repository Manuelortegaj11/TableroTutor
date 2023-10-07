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
            $table->string('realizo_saber_pro')->nullable();
            $table->string('fecha_realizo_saber_pro')->nullable();
            $table->text('observaciones_saber_pro')->nullable();
            $table->text('realizo_examen_suficiencia')->nullable();
            $table->text('observaciones_examen_suficiencia')->nullable();
            $table->text('ganador_requisito_ingles')->nullable();
            $table->string('como_gano_requisito_ingles')->nullable();
            $table->text('observaciones_gano_requisito_ingles')->nullable();
            $table->string('opcion_grado')->nullable();
            $table->text('realizacion_prepracticas')->nullable();
            $table->string('empresa_pracpas')->nullable();
            $table->string('ciudad_pracpas')->nullable();
            $table->string('remuneracion_pracpas')->nullable();
            $table->date('fecha_inicio_pracpas')->nullable();
            $table->date('fecha_final_pracpas')->nullable();
            $table->string('cantidad_remuneracion_pracpas')->nullable();
            $table->string('tiempo_pracpas')->nullable();
            $table->text('legalizacion_pracpas')->nullable();
            $table->date('fecha_legalizacion_pracpas')->nullable();
            $table->text('sustento_pracpas')->nullable();
            $table->text('aprobacion_plataforma_pracpas')->nullable();
            $table->date('fecha_inicial_diplomado_proyecto')->nullable();
            $table->date('fecha_final_diplomado_proyecto')->nullable();
            $table->string('tiempo_diplomado_proyecto')->nullable();
            $table->text('aprobacion_plataforma_diplomado_proyecto')->nullable();
            $table->string('nota_diplomado_proyecto')->nullable();
            $table->string('costo_diplomado_proyecto')->nullable();
            $table->text('sustentacion_diplomado_proyecto')->nullable();
            $table->string('puntaje_saber_pro')->nullable();
            $table->string('puesto_saber_pro')->nullable();
            $table->string('requisito_grado')->nullable();
            $table->text('observaciones_requisito_grado')->nullable();
            $table->string('periodo_finalizacion_academica')->nullable();
            $table->date('fecha_prevista_grado')->nullable();
            $table->string('nivel_estudiante')->nullable();
            $table->text('observaciones_generales')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('formularios');
    }
}

