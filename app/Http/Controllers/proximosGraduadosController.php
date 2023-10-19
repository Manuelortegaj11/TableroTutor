<?php

namespace App\Http\Controllers;
use App\Models\Formulario;
use App\Exports\FormAntGraExport;
use Maatwebsite\Excel\Facades\Excel;

class proximosGraduadosController extends Controller
{
    public function index()
    {
        $datos['formularios']=Formulario::paginate(10);
        return view('home.proximosgraduados.index', $datos);
    }
    public function show($id)
    {
        $formulario = Formulario::findOrFail($id);
        return view('home.proximosgraduados.show', compact('formulario'))->with('mensaje', 'Terminaste revisión👀');
    }
    public function edit($id)
    {
        $formulario = Formulario::findOrFail($id);
        return view('home.proximosgraduados.edit', compact('formulario'));
    }
    public function update($id)
    {
        $formulario = Formulario::findOrFail($id);
        $datosFormulario = request()->except(['_token', '_method']);
        $formulario->update($datosFormulario);
        return redirect('listado-proximo-graduado')->with('mensaje','Formulario Antes del grado modificado 🖍');
    }
public function destroy($id)
    {
        $formulario = Formulario::findOrFail($id);
        $formulario->delete();
        return redirect('listado-proximo-graduado')->with('mensaje', 'Formulario eliminado correctamente ☒');
    }
    public function export()
    {
        return Excel::download(new FormAntGraExport, 'Antes_grado.xlsx');
    }
}

