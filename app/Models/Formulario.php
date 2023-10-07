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
        'realizo_saber_pro',
        'fecha_realizo_saber_pro',
        'observaciones_saber_pro',
        'realizo_examen_suficiencia',
        'observaciones_examen_suficiencia',
        'ganador_requisito_ingles',
        'como_gano_requisito_ingles',
        'observaciones_gano_requisito_ingles',
        'opcion_grado',
        'realizacion_prepracticas',
        'empresa_pracpas',
        'ciudad_pracpas',
        'remuneracion_pracpas',
        'fecha_inicio_pracpas',
        'fecha_final_pracpas',
        'cantidad_remuneracion_pracpas',
        'tiempo_pracpas',
        'legalizacion_pracpas',
        'fecha_legalizacion_pracpas',
        'sustento_pracpas',
        'aprobacion_plataforma_pracpas',
        'fecha_inicial_diplomado_proyecto',
        'fecha_final_diplomado_proyecto',
        'tiempo_diplomado_proyecto',
        'nota_diplomado_proyecto',
        'aprobacion_plataforma_diplomado_proyecto',
        'costo_diplomado_proyecto',
        'sustentacion_diplomado_proyecto',
        'puntaje_saber_pro',
        'puesto_saber_pro',
        'requisito_grado',
        'observaciones_requisito_grado',
        'periodo_finalizacion_academica',
        'fecha_prevista_grado',
        'nivel_estudiante',
        'observaciones_generales',
    ];
}

