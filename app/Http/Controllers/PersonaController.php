<?php

namespace App\Http\Controllers;

use App\Models\Models\Persona;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function Laravel\Prompts\confirm;

class PersonaController extends Controller
{
    public function index()
    {
        //Lista personas
       // $listaPersonas = \App\Models\Persona::listaAll(); 
       //$listaPersonas = DB::table('personas')->get();
       $listaPersonas = Persona::all();

        $menssage = "";
        return view("persona.index", compact("listaPersonas", "menssage"));
    }


    public function store(Request $request)
    {
        $id = $request->input('id');
        $nombre = $request->input('nombre');
        $edad = $request->input('edad');
    
        // // Crear un array asociativo con los datos de la persona
        // $personaData = [
        //     'id' => $id,
        //     'nombre' => $nombre,
        //     'edad' => $edad
        // ];
    
        // // Insertar los datos en la base de datos
        // $affected = DB::table('personas')->insert($personaData);

        $persona = new Persona();
        $persona-> nombre = $nombre;
        $persona-> edad = $edad;
    
        // Insertar los datos en la base de datos
        $affected = $persona->save();
    
        // Verificar si la inserción fue exitosa
        if($affected > 0){
            $menssage = "Dato agregado perfectamente";
        } else {
            $menssage = "Dato no agregado";
        }
        
        // Obtener la lista actualizada de personas
        $listaPersonas = Persona::all();
    
        return view('persona.index', compact("listaPersonas", "menssage"));
    }
    

    public function show($id)
    {
        // Obtener la lista de todas las personas
        //$listaPersonas = \App\Models\Persona::listaAll();
       // $listaPersonas = DB::table('personas')->where('id',$id)->get()[0];
        $listaPersonas = Persona::find($id);

        // Buscar la persona por su ID en la lista
        // $persona = null;
        // foreach ($listaPersonas as $p) {
        //     if ($p->id == $id) {
        //         $persona = $p;
        //         break;
        //     } 
        // }

        // // Verificar si la persona existe
        // if (!$persona) {
        //     // Si no se encuentra la persona, puedes manejar el error adecuadamente aquí, por ejemplo, redirigiendo a una página de error.
        //     abort(404, 'Persona no encontrada');
        // }

        // Retornar la vista 'Persona.show' con la persona encontrada
        return view('persona.show', compact('listaPersonas'));
    }

    public function edit($id)
    {
        //$listaPersonas = DB::table('personas')->where('id',$id)->get()[0];
        $listaPersonas = Persona::find($id);
        return view('persona.edit', compact('listaPersonas'));
    }

    public function update(Request $request ,$id)
    {
        $nombre = $request->input('nombre');
        $edad = $request->input('edad');

      //  $affected = DB::table('personas')->where('id',$id)->update(['nombre'=>$nombre, 'edad' =>$edad]);

      $persona =  Persona::find($id);
      $persona-> nombre = $nombre; 
      $persona-> edad = $edad;
        $affected = $persona->save();

        if($affected  > 0){
            $menssage = "Datos actualizado correctamente joder :D";

        }else{
            $menssage = "Datos no actualizado correctamente joder :D";

        }
        $listaPersonas =  Persona::all();
       
        return view('persona.index', compact('listaPersonas','menssage'));


    }

    public function destroy($id)
    {
        //$affected = DB::table('personas')->where('id',$id)->delete();
        $affected = Persona::find($id)->delete();
        if($affected  > 0){
            $menssage = "Datos Eliminado ";

        }else{
            $menssage = "Datos no Eliminado lo siento mi pana";

        }
        $listaPersonas =  Persona::all();

        return view('persona.index', compact('listaPersonas', 'menssage'));


    }




    public function navbar()
    {

        return view('persona.navbar');
    }
    public function inicio()
    {
        return view('persona.inicio');
    }
    public function acerca()
    {
        return view('persona.acerca');
    }

    public function create()
    {
        return view('persona.create');
    }
    public function contacto()
    {
        return view('persona.contacto');
    }
}
