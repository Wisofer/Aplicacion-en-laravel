<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Backend extends Model
{
    use HasFactory;

    protected $table = 'backends'; // Nombre de la tabla en la base de datos

    protected $fillable = [
        'url',
        'nombre',
        'comentario', 
    ];
}
