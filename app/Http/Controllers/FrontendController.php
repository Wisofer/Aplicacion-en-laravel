<?php

namespace App\Http\Controllers;

use App\Models\Frontend;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Obtener todos los registros de Frontend desde la base de datos
        $frontends = Frontend::all();

        // Devolver la vista 'Frontend.index' con los datos obtenidos
        return view('frontend.index')->with('frontends', $frontends);
    }

    public function create()
    {
        // Mostrar el formulario para crear un nuevo registro
        return view('frontend.formulario');
    }

    public function store(Request $request)
    {
        $url = $request->input('url');
        $nombre = $request->input('nombre');
        $comentario = $request->input('comentario');
    
        // Crear un nuevo registro en la base de datos
        $frontend = new Frontend();
        $frontend->url = $url;
        $frontend->nombre = $nombre;
        $frontend->comentario = $comentario;
    
        // Insertar los datos en la base de datos
        $frontend->save();
    
        // Redireccionar al usuario a la página de inicio o a una lista de elementos
        return redirect()->route('frontend.index');
    }
    
    
    public function show(Frontend $frontend)
    {
        
    }


    public function edit(Frontend $frontend)
    {
    }


    public function update(Request $request, Frontend $frontend)
    {
        
    }


    public function destroy(Frontend $frontend)
    {
        
    }
}
