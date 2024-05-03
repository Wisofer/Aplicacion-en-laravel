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
        //Extrayendo los datos de la Base De Datos

       // $listaFrontend = \App\Models\Frontend::todoAll(); 
       //return view("Frontend.acerca", compact('datos'));

       $datos = Frontend::todoAll();
       return view('Frontend.acerca')->with('datos', $datos);

    

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        // Aqui vamos a crear el formulario de frontend
        $id = $request->input('id');
        $imagen = $request->input('imagen');
        $nombre = $request->input('nombre');
        $comentario = $request->input('comentario');


        return view('Frontend.formulario', compact('mensaje'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Frontend $frontend)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Frontend $frontend)
    {


    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Frontend $frontend)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Frontend $frontend)
    {
        //
    }
}
