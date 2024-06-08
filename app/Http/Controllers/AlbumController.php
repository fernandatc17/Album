<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Album;
use App\Models\User;

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
        $users = User::all(); //SELECT * FROM user
        //Enviamos la varible $users a la vista  create.blade.php
        return view('albums/create', compact('users'));
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
        $users = User::all();
        $album= Album::find($id);// SELECT * FROM album WHERE id=$id
        // dd($album);//Muestra el detalle de album a la vista albums/edit
        // Enviamos las variables $album y $users a la vista edit.blade.php
        return view('albums/edit', compact('album','users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $album = Album::find($request->id);// SELECT * FROM album WHERE id=$id
        //Asignamos al campo usuario_id 
        $album ->usuario_id= $request->usuario ; //obtendremos el valor de la caja con name usuario
        $album->album_nombre= $request->nombre ;
        $album->album_descripcion= $request->descripcion;
        $album->save();// Guardamos en la base de datos
        return redirect('/albums');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try{
            $album = Album::find($id);
            $album->delete();
            return redirect('/albums');
        } catch(\Throwable $th){
            return redirect('/albums')->with('error', 'No se puedo eliminar el registro');
        }
    }
}
