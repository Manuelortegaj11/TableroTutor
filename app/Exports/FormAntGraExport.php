<?php

namespace App\Exports;

use App\Models\Formulario; // Asegúrate de importar el modelo correcto
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class FormAntGraExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function headings(): array
    {
        return [
        'Fecha de Realización',
        'Nombre Completo',
        'Código Estudiantil',
        'Programa Cursado',
        'Teléfono',
        'Correo Institucional',
        'Ubicación de Residencia',
        'Realizó Saber Pro',
        'Fecha Realizó Saber Pro',
        'Observaciones Saber Pro',
        'Realizó Examen de Suficiencia',
        'Observaciones Examen de Suficiencia',
        'Ganador Requisito Inglés',
        'Cómo Ganó Requisito Inglés',
        'Observaciones Ganó Requisito Inglés',
        'Opción de Grado',
        'Realización de Preprácticas',
        'Empresa de Prácticas Profesionales',
        'Ciudad de Prácticas Profesionales',
        'Remuneración de Prácticas Profesionales',
        'Fecha de Inicio de Prácticas Profesionales',
        'Fecha Final de Prácticas Profesionales',
        'Cantidad de Remuneración de Prácticas Profesionales',
        'Tiempo de Prácticas Profesionales',
        'Legalización de Prácticas Profesionales',
        'Fecha de Legalización de Prácticas Profesionales',
        'Sustento de Prácticas Profesionales',
        'Aprobación en Plataforma de Prácticas Profesionales',
        'Fecha Inicial de Diplomado/Proyecto',
        'Fecha Final de Diplomado/Proyecto',
        'Tiempo de Diplomado/Proyecto',
        'Nota de Diplomado/Proyecto',
        'Aprobación en Plataforma de Diplomado/Proyecto',
        'Costo de Diplomado/Proyecto',
        'Sustentación de Diplomado/Proyecto',
        'Puntaje Saber Pro',
        'Puesto Saber Pro',
        'Requisito de Grado',
        'Observaciones Requisito de Grado',
        'Periodo de Finalización Académica',
        'Fecha Prevista de Grado',
        'Nivel de Estudiante',
        'Observaciones Generales',        ];
    }

    public function collection()
    {
        // Obtén los datos del modelo Formulario
        $formularios = Formulario::all([
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
            'observaciones_generales']);

        // Transforma los datos en una colección para la exportación
        $data = collect($formularios)->map(function ($formulario) {
            return [
                'fecha_realizacion' => $formulario->fecha_realizacion,
                'nombre_completo' => $formulario->nombre_completo,
                'codigo_estudiantil' => $formulario->codigo_estudiantil,
                'programa_cursado' => $formulario->programa_cursado,
                'telefono' => $formulario->telefono,
                'correo_institucional' => $formulario->correo_institucional,
                'ubicacion_residencia' => $formulario->ubicacion_residencia,
                'realizo_saber_pro' => $formulario->realizo_saber_pro,
                'fecha_realizo_saber_pro' => $formulario->fecha_realizo_saber_pro,
                'observaciones_saber_pro' => $formulario->observaciones_saber_pro,
                'realizo_examen_suficiencia' => $formulario->realizo_examen_suficiencia,
                'observaciones_examen_suficiencia' => $formulario->observaciones_examen_suficiencia,
                'ganador_requisito_ingles' => $formulario->ganador_requisito_ingles,
                'como_gano_requisito_ingles' => $formulario->como_gano_requisito_ingles,
                'observaciones_gano_requisito_ingles' => $formulario->observaciones_gano_requisito_ingles,
                'opcion_grado' => $formulario->opcion_grado,
                'realizacion_prepracticas' => $formulario->realizacion_prepracticas,
                'empresa_pracpas' => $formulario->empresa_pracpas,
                'ciudad_pracpas' => $formulario->ciudad_pracpas,
                'remuneracion_pracpas' => $formulario->remuneracion_pracpas,
                'fecha_inicio_pracpas' => $formulario->fecha_inicio_pracpas,
                'fecha_final_pracpas' => $formulario->fecha_final_pracpas,
                'cantidad_remuneracion_pracpas' => $formulario->cantidad_remuneracion_pracpas,
                'tiempo_pracpas' => $formulario->tiempo_pracpas,
                'legalizacion_pracpas' => $formulario->legalizacion_pracpas,
                'fecha_legalizacion_pracpas' => $formulario->fecha_legalizacion_pracpas,
                'sustento_pracpas' => $formulario->sustento_pracpas,
                'aprobacion_plataforma_pracpas' => $formulario->aprobacion_plataforma_pracpas,
                'fecha_inicial_diplomado_proyecto' => $formulario->fecha_inicial_diplomado_proyecto,
                'fecha_final_diplomado_proyecto' => $formulario->fecha_final_diplomado_proyecto,
                'tiempo_diplomado_proyecto' => $formulario->tiempo_diplomado_proyecto,
                'nota_diplomado_proyecto' => $formulario->nota_diplomado_proyecto,
                'aprobacion_plataforma_diplomado_proyecto' => $formulario->aprobacion_plataforma_diplomado_proyecto,
                'costo_diplomado_proyecto' => $formulario->costo_diplomado_proyecto,
                'sustentacion_diplomado_proyecto' => $formulario->sustentacion_diplomado_proyecto,
                'puntaje_saber_pro' => $formulario->puntaje_saber_pro,
                'puesto_saber_pro' => $formulario->puesto_saber_pro,
                'requisito_grado' => $formulario->requisito_grado,
                'observaciones_requisito_grado' => $formulario->observaciones_requisito_grado,
                'periodo_finalizacion_academica' => $formulario->periodo_finalizacion_academica,
                'fecha_prevista_grado' => $formulario->fecha_prevista_grado,
                'nivel_estudiante' => $formulario->nivel_estudiante,
                'observaciones_generales' => $formulario->observaciones_generales,
            ];
        });

        return $data;
    }
}
