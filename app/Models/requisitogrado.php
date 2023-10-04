<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequisitoGrado extends Model
{
    use HasFactory;

    protected $fillable = [
        'gano_requisito',
        'observaciones_requisito',
        'periodo_finalizacion',
        'fecha_prevista_grado',
        'nivel_estudiante',
        'observaciones_generales',
    ];

    public function estudiante()
    {
        return $this->belongsTo(Estudiante::class);
    }
}

