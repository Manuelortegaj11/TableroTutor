<?php

namespace App\Http\Controllers;


use App\Models\Formulario;
use Illuminate\Http\Request;

class formularioController extends Controller
{
    public function index()
    {
    return view('formulario.index');
    }
    public function create()
    {

    return view('formulario.create');
    }

    public function store(Request $request){
        $formulario = $request->except('_token');

        // Crea una instancia del modelo Formulario con los datos del formulario
    // Completa la instancia del modelo Formulario con los datos del formulario

    $formulario = new Formulario([
        'fecha_realizacion' => $request->input('fecha_realizacion'),
        'nombre_completo' => $request->input('nombre_completo'),
        'codigo_estudiantil' => $request->input('codigo_estudiantil'),
        'programa_cursado' => $request->input('programa_cursado'),
        'telefono' => $request->input('telefono'),
        'correo_institucional' => $request->input('correo_institucional'),
        'ubicacion_residencia' => $request->input('ubicacion_residencia'),
        'realizo_saber_pro' => $request->input('realizo_saber_pro'),
        'fecha_realizo_saber_pro' => $request->input('fecha_realizo_saber_pro'),
        'observaciones_saber_pro' => $request->input('observaciones_saber_pro'),
        'realizo_examen_suficiencia' => $request->input('realizo_examen_suficiencia'),
        'observaciones_examen_suficiencia' => $request->input('observaciones_examen_suficiencia'),
        'ganador_requisito_ingles' => $request->input('ganador_requisito_ingles'),
        'como_gano_requisito_ingles' => $request->input('como_gano_requisito_ingles'),
        'observaciones_gano_requisito_ingles' => $request->input('observaciones_gano_requisito_ingles'),
        'opcion_grado' => $request->input('opcion_grado'),
        'realizacion_prepracticas' => $request->input('realizacion_prepracticas'),
        'empresa_pracpas' => $request->input('empresa_pracpas'),
        'ciudad_pracpas' => $request->input('ciudad_pracpas'),
        'remuneracion_pracpas' => $request->input('remuneracion_pracpas'),
        'fecha_inicio_pracpas' => $request->input('fecha_inicio_pracpas'),
        'fecha_final_pracpas' => $request->input('fecha_final_pracpas'),
        'cantidad_remuneracion_pracpas' => $request->input('cantidad_remuneracion_pracpas'),
        'tiempo_pracpas' => $request->input('tiempo_pracpas'),
        'legalizacion_pracpas' => $request->input('legalizacion_pracpas'),
        'fecha_legalizacion_pracpas' => $request->input('fecha_legalizacion_pracpas'),
        'sustento_pracpas' => $request->input('sustento_pracpas'),
        'aprobacion_plataforma_pracpas' => $request->input('aprobacion_plataforma_pracpas'),
        'fecha_inicial_diplomado_proyecto' => $request->input('fecha_inicial_diplomado_proyecto'),
        'fecha_final_diplomado_proyecto' => $request->input('fecha_final_diplomado_proyecto'),
        'tiempo_diplomado_proyecto' => $request->input('tiempo_diplomado_proyecto'),
        'nota_diplomado_proyecto' => $request->input('nota_diplomado_proyecto'),
        'aprobacion_plataforma_diplomado_proyecto' => $request->input('aprobacion_plataforma_diplomado_proyecto'),
        'costo_diplomado_proyecto' => $request->input('costo_diplomado_proyecto'),
        'sustentacion_diplomado_proyecto' => $request->input('sustentacion_diplomado_proyecto'),
        'puntaje_saber_pro' => $request->input('puntaje_saber_pro'),
        'puesto_saber_pro' => $request->input('puesto_saber_pro'),
        'requisito_grado' => $request->input('requisito_grado'),
        'observaciones_requisito_grado' => $request->input('observaciones_requisito_grado'),
        'periodo_finalizacion_academica' => $request->input('periodo_finalizacion_academica'),
        'fecha_prevista_grado' => $request->input('fecha_prevista_grado'),
        'nivel_estudiante' => $request->input('nivel_estudiante'),
        'observaciones_generales' => $request->input('observaciones_generales'),
    ]);


    // Guarda el registro en la base de datos
    $formulario->save();

    // Puedes redirigir al usuario a una página de éxito o realizar otra acción aquí
    return redirect('/listado-proximo-graduado')->with('success', 'Los datos se han guardado correctamente');
    // return response()->json($datosFormularioAG);
}

    public function show()
    {
    }
    public function edit()
    {
    }
    public function update()
    {
    }
    public function destroy()
    {
    }
}
