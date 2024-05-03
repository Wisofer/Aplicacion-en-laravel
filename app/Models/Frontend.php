<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Frontend extends Model
{
    use HasFactory;

    public $id;
    public $imagen;
    public $nombre;
    public $comentario;

    public function __construct($id = 0, $imagen = "", $nombre = "", $comentario = "") {
        parent::__construct();
        $this->id = $id;
        $this->imagen = $imagen;
        $this->nombre = $nombre;
        $this->comentario = $comentario;
    }


    public static function todoAll(){

        $listaFrontend = array(
            array("id" => 1, "imagen" => "https://upload.wikimedia.org/wikipedia/commons/thumb/c/cf/Angular_full_color_logo.svg/1200px-Angular_full_color_logo.svg.png", "nombre" => "Angular", "comentario" => "Angular es un marco de trabajo completo con una arquitectura basada en el patrón MVC. Es ideal para proyectos grandes y complejos debido a su estructura opinionada y todas las herramientas integradas que ofrece."),
            array("id" => 2, "imagen" => "https://upload.wikimedia.org/wikipedia/commons/thumb/4/47/React.svg/1200px-React.svg.png", "nombre" => "Reactjs", "comentario" => "React es una biblioteca de JavaScript centrada en la construcción de interfaces de usuario. Se destaca por su enfoque en componentes reutilizables y su eficiencia en la construcción de aplicaciones de una sola página.."),
            array("id" => 3, "imagen" => "https://upload.wikimedia.org/wikipedia/commons/thumb/9/95/Vue.js_Logo_2.svg/1920px-Vue.js_Logo_2.svg.png", "nombre" => "Vuejs", "comentario" => "Vue.js es un marco de trabajo progresivo que combina las mejores características de Angular y React. Es conocido por su flexibilidad, su bajo tamaño de archivo y su curva de aprendizaje suave, lo que lo hace ideal para proyectos pequeños o medianos.")
        );
    
        return $listaFrontend;



    }
}
