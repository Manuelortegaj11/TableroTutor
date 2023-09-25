<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleDiplomadoProyecto extends Model
{
    use HasFactory;

    protected $fillable = [
        'fecha_inicial',
        'fecha_final',
        'duracion',
        'aprobacion_plataforma',
        'nota',
        'costo',
        'sustentacion',
    ];

    public function opcionGrado()
    {
        return $this->belongsTo(OpcionGrado::class);
    }
}

