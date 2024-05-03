<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Models\correo;
use App\Models\Models\Persona;


class CorreoController extends Controller
{
    //Funciones que ocuparemo store y destroys

    public function store(Request $request)
    {
        $direccion = $request->input('direccion');
        $id_persona = $request->input('id_persona');

        //Creamos un nuevo objeto

        $correo = new correo();
        $correo->direccion = $direccion;
        $correo->persona_id = $id_persona;

        //Guaradamos los datos

        $affected = $correo->save();
        $listaPersonas = Persona::find($id_persona);

        //Mostramos la direccion de la interfaz    
    
        return view('Persona.show', compact("listaPersonas"));
    }

    public function destroy($id_correo, $id_persona)
    {
        $affected = Correo::find($id_correo)->delete();
        $listaPersonas = Persona::find($id_persona);




        return view('Persona.show', compact('listaPersonas'));


    }   

}
