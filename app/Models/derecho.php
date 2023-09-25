<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Derecho extends Model
{
    use HasFactory;

    protected $fillable = [
        'realizo_examen_suficiencia',
        'observaciones_derecho',
    ];

    public function estudiante()
    {
        return $this->belongsTo(Estudiante::class);
    }
}

