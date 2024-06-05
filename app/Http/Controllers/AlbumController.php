<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Album;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $albums = Album::all() ; //SELECT * FROM album
        //Enviamos la varible $albums a la vista  index.blade.php
        return view('albums/index',compact('albums'));
        // echo "desde index";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('albums/create');
        // echo  "desde create";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $album = new Album;
        //Asignamos al campo usuario_id 
        $album ->usuario_id= $request->usuario ; //obtendremos el valor de la caja con name usuario
        $album->album_nombre= $request->nombre ;
        $album->album_descripcion= $request->descripcion;
        $album->save();
        return redirect('/albums');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
