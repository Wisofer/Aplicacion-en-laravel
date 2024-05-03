<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class correo extends Model
{
    protected $table = "correo";
    use HasFactory;

    public function persona()
    {
        return $this->belongsTo('App\Models\Models\Persona', 'persona_id');
    }

}
