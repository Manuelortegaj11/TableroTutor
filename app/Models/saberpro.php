<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SaberPro extends Model
{
    use HasFactory;

    protected $fillable = [
        'realizo_saber_pro',
        'fecha_realizacion',
        'fecha_proyectada',
        'observaciones_saber_pro',
    ];

    public function estudiante()
    {
        return $this->belongsTo(Estudiante::class);
    }
}

