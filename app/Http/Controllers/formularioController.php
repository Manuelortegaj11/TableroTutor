<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
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

    public function store(Request $request)
    {
        $datosFormularioAG = $request->except('_token');
        Estudiante::create($datosFormularioAG);
        return response()->json($datosFormularioAG);
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
