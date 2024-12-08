<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibroController;
use App\Http\Controllers\UsuarioController;

// RUTAS LIBROS

// INDEX
Route::get('/',[LibroController::class,'index'])->name('libro.index');

// SHOW
Route::get('/libros/{id}/show',[LibroController::class,'show'])->where('id','[0-9]+')->name('libro.show');

// CREATE Y STORE
Route::get('/libros/crear',[LibroController::class,'create'])->name('libro.crear');
Route::post('/libros/crear',[LibroController::class,'store'])->name('libro.store');

// EDIT
Route::get('/libros/{id}/editar',[LibroController::class,'edit'])->whereNumber('id')->name('libro.editar');
Route::put('/libros/{id}/editar',[LibroController::class,'update'])->whereNumber('id')->name('libro.update');

//DELETE
Route::delete('/libros/{id}/borrar',[LibroController::class,'destroy'])->whereNumber('id')->name('libro.borrar');

// RUTAS USUARIOS

// INDEX
Route::get('/usuarios',[UsuarioController::class,'index'])->name('usuario.index');