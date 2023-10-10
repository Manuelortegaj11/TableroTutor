<?php

namespace App\Http\Controllers;

use App\Http\Controllers\response;
use App\Models\Formulario;
use Illuminate\Http\Request;


class proximosGraduadosController extends Controller
{
    public function index()
    {
        $datos['formularios']=Formulario::paginate(2);
        return view('proximosgraduados.index', $datos);
    }

public function edit($id)
    {
    $formulario = Formulario::findOrFail($id);
    return view('proximosgraduados.edit', compact('formulario'));
    }

}
