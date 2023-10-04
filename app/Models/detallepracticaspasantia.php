<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetallePracticasPasantia extends Model
{
    use HasFactory;

    protected $fillable = [
        'realizo_prepracticas',
        'empresa',
        'ciudad',
        'fecha_inicio',
        'fecha_final',
        'remuneracion',
        'valor',
        'tiempo',
        'legalizacion',
        'fecha_legalizacion',
        'sustento',
        'aprobacion_plataforma',
    ];

    public function opcionGrado()
    {
        return $this->belongsTo(OpcionGrado::class);
    }
}

