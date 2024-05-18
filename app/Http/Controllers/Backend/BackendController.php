<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend;
use Illuminate\Http\Request;


class BackendController extends Controller
{

    public function index()
    {
        return view('Backend.index');
    }


    public function create()
    {
        //

        return view('Backend.formulario');
    }


    public function store(Request $request)
    {
        //
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
