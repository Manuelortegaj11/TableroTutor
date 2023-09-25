<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExoneracionSaberPro extends Model
{
    use HasFactory;

    protected $fillable = [
        'puntuacion',
        'puesto',
    ];

    public function opcionGrado()
    {
        return $this->belongsTo(OpcionGrado::class);
    }
}

