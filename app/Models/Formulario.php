<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formulario extends Model
{
    protected $fillable = [
        'fecha_realizacion',
        'nombre_completo',
        'codigo_estudiantil',
        'programa_cursado',
        'telefono',
        'correo_institucional',
        'ubicacion_residencia',
        // PRIMERO
        'realizo_saber_pro',
        'fecha_realizo_saber_pro',
        'observaciones_saber_pro',
        'realizo_examen_suficiencia',
        'observaciones_examen_suficiencia',
        // SEGUNDO
        'ganador_requisito_ingles',
        'como_gano_requisito_ingles',
        'observaciones_gano_requisito_ingles',
        'opcion_grado',
        'realizacion_prepracticas',
        'empresa_prepracticas',
        'ciudad_prepracticas',
        'fecha_inicio_prepracticas',
        'fecha_final_prepracticas',
        'remuneracion_prepracticas',
        'tiempo_prepracticas',
        'legalizacion_prepracticas',
        'fecha_legalizacion_prepracticas',
        'sustento_prepracticas',
        'aprobacion_plataforma_prepracticas',
        'fecha_aprobacion_plataforma_prepracticas',
        'fecha_inicial_diplomado_proyecto',
        'fecha_final_diplomado_proyecto',
        'tiempo_diplomado_proyecto',
        'aprobacion_plataforma_diplomado_proyecto',
        'nota_diplomado_proyecto',
        'costo_diplomado_proyecto',
        'sustentacion_diplomado_proyecto',
        'exoneracion_resultados_saber_pro',
        'puntaje_saber_pro',
        'puesto_saber_pro',
        'ganador_requisito_grado',
        'observaciones_ganador_requisito_grado',
        'periodo_finalizacion_academica',
        'fecha_prevista_grado',
        'nivel_estudiante',
        'observaciones_generales',
    ];
}

