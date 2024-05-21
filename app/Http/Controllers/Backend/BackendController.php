<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend;
use Illuminate\Http\Request;


class BackendController extends Controller
{

    public function index()
    {
        // Obtener todos los registros de Frontend desde la base de datos
        $backends = Backend::all();
        

        // Devolver la vista 'Frontend.index' con los datos obtenidos
        return view('backend.index')->with('backends', $backends);
    }


    public function create()
    {
        
        return view('Backend.formulario');
    }


    public function store(Request $request)
    {
        $url = $request->input('url');
        $nombre = $request->input('nombre');
        $comentario = $request->input('comentario');

        try {
            // Crear un nuevo registro en la base de datos
            $backend = new Backend();
            $backend->url = $url;
            $backend->nombre = $nombre;
            $backend->comentario = $comentario;
            // Insertar los datos en la base de datos
            $backend->save();

            // Redireccionar al usuario a la página de inicio o a una lista de elementos
            return redirect()->route('backend.index');
        } catch (\Exception $e) {
            // En caso de error, mostrar un mensaje de error y redireccionar a una página de error
            return back()->with('error', 'Error al guardar los datos: ' . $e->getMessage())->withInput();
        }
    }


    public function show(Backend $backend)
    {
        //
    }


    public function edit(Backend $backend)
    {
        //
    }


    public function update(Request $request, Backend $backend)
    {
        //
    }


    public function destroy(Backend $backend)
    {
        //
    }
}
