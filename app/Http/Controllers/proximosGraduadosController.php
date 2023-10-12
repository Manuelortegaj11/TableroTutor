<?php

namespace App\Http\Controllers;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Http\Controllers\response;
use App\Models\Formulario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class proximosGraduadosController extends Controller
{
    public function index()
    {
        $datos['formularios']=Formulario::paginate(3);
        return view('home.proximosgraduados.index', $datos);
    }
    public function show($id)
    {
        $formulario = Formulario::findOrFail($id);


return view('home.proximosgraduados.show', compact('formulario'))
    ->with('mensaje', 'Terminaste revisión👀');

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
}

