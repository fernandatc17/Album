<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\AlbumController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', [UsuarioController::class,'index'])->name('user.index');
Route::get('/albums', [AlbumController::class,'index'])->name('album.index');
Route::get('/albums/create', [AlbumController::class,'create'])->name('album.create');
Route::post('/albums/store', [AlbumController::class,'store'])->name('album.store');

// Route::get('/users/create', [UsuarioController::class,'create']);

// Route::get('/users/create', function () {
//     echo "ruta users/create";
// });