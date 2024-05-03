<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    public $id;
    public $nombre;
    public $edad;

    public function __construct($i = 0, $n = "", $e = 0)
    {
        $this->id = $i;
        $this->nombre = $n;
        $this->edad = $e;
    }

    public static function listaAll()
    {
        // Implementa la lógica para obtener la lista de personas
        $listaPersonas = array();
        array_push($listaPersonas, new Persona(1,"william Borge",21));
        array_push($listaPersonas, new Persona(2,"wisofer Borge",21));
        array_push($listaPersonas, new Persona(3,"will Borge",21));

        return $listaPersonas;

    }   
}


