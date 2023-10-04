<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequisitoIngles extends Model
{
    use HasFactory;

    protected $fillable = [
        'gano_requisito',
        'como_gano',
        'observaciones_ingles',
    ];

    public function estudiante()
    {
        return $this->belongsTo(Estudiante::class);
    }
}

