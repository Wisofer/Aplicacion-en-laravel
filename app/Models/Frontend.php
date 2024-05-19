<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Frontend extends Model
{
    use HasFactory;

    protected $table = 'frontends'; // Nombre de la tabla en la base de datos

    protected $fillable = [
        'url',
        'nombre',
        'comentario', 
    ];
}
