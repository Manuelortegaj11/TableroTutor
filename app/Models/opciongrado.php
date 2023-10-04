<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OpcionGrado extends Model
{
    use HasFactory;

    protected $fillable = [
        'opcion',
    ];

    public function estudiante()
    {
        return $this->belongsTo(Estudiante::class);
    }

    public function detallePracticasPasantia()
    {
        return $this->hasOne(DetallePracticasPasantia::class);
    }

    public function detalleDiplomadoProyecto()
    {
        return $this->hasOne(DetalleDiplomadoProyecto::class);
    }

    public function exoneracionSaberPro()
    {
        return $this->hasOne(ExoneracionSaberPro::class);
    }
}

