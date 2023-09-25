<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre_completo',
        'codigo_estudiantil',
        'programa_cursado',
        'telefono',
        'correo_institucional',
        'ubicacion_residencia',
    ];

    public function saberPro()
    {
        return $this->hasOne(SaberPro::class);
    }

    public function derecho()
    {
        return $this->hasOne(Derecho::class);
    }

    public function requisitoIngles()
    {
        return $this->hasOne(RequisitoIngles::class);
    }

    public function opcionGrado()
    {
        return $this->hasOne(OpcionGrado::class);
    }

    public function requisitoGrado()
    {
        return $this->hasOne(RequisitoGrado::class);
    }
}

