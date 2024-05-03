<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    public function correos()
    {
        return $this->hasMany('App\Models\Models\correo', 'persona_id');
    }
    use HasFactory;
}
