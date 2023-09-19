<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class proximosGraduadosController extends Controller
{
    public function index()
    {
        return view('proximosgraduados.index');
    }
}
