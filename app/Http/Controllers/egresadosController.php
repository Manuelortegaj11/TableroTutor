<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class egresadosController extends Controller
{
    public function index()
    {
        return view('listaegresados.index');
    }
}
