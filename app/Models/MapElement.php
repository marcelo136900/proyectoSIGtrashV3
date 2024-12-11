<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MapElement extends Model
{
    use HasFactory;

    protected $fillable = ['tipo', 'datos', 'creado_por'];

    
    protected $casts = [
        'datos' => 'array', // Convierte automáticamente el JSON a un array PHP
    ];

    /**
     * Relación con el usuario creador.
     */
    public function usuario()
    {
        return $this->belongsTo(User::class, 'creado_por');
    }
}
