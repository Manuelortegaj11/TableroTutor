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
    $programas = [
        'Administración de Empresas',
        'Administración de Empresas Turísticas y Hoteleras',
        'Antropología',
        'Biología',
        'Cine y Audiovisuales',
        'Contaduría Pública',
        'Derecho',
        'Economía',
        'Enfermería',
        'Facultad de Ciencias de la Salud',
        'Gestión Cultural y de Industrias Creativas',
        'Historia y Patrimonio',
        'Ingeniería Agronómica',
        'Ingeniería Ambiental y Sanitaria',
        'Ingeniería Civil',
        'Ingeniería Electrónica',
        'Ingeniería Industrial',
        'Ingeniería Marino-Costera',
        'Ingeniería Pesquera',
        'Ingeniería de Sistemas',
        'Licenciatura en Artes',
        'Licenciatura en Ciencias Naturales y Educación Ambiental',
        'Licenciatura en Educación Campesina y Rural',
        'Licenciatura en Educación Infantil',
        'Licenciatura en Etnoeducación',
        'Licenciatura en Informática',
        'Licenciatura en Lenguas Extranjeras con Énfasis en Inglés',
        'Licenciatura en Literatura y Lengua Castellana',
        'Licenciatura en Matemáticas',
        'Licenciatura en Química',
        'Licenciatura en Tecnología',
        'Medicina',
        'Negocios Internacionales',
        'Odontología',
        'Psicología',
        'Tecnología en Gestión Hotelera y Turística',
    ];
    return view('proximosgraduados.edit', compact('formulario', 'programas'));
    }

}
