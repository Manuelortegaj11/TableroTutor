<?php

namespace App\Http\Controllers;
use App\Models\Formulario;
use Illuminate\Http\Request;

class antesGradoController extends Controller
{
    public function create()
    {
        return view('home.formularios.antesdelgrado.create');
    }
}
