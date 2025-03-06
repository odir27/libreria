<?php

use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\LibrosController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth/login');
});



//RUTAS PARA LOGIN Y REGISTROS
Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class,'index'])->name('login');
    Route::get('/registro', [LoginController::class,'registro'])->name('registro');
    Route::post('/registrar', [LoginController::class,'registrar'])->name('registrar');
    Route::post('/login', [LoginController::class,'login']) ->name('login');
    
});

//RUTAS PARA EL LOGOUT
Route::middleware('auth')->group(function () {
    Route::get('/categorias', [CategoriasController::class,'index'])->name('categorias.index');
    Route::get('/categorias/create', [CategoriasController::class,'create'])->name('categorias.create');
    Route::get('/categorias/{categoria}', [CategoriasController::class,'show'])->name('categorias.show');
    Route::get('/categorias/{categoria}/edit', [CategoriasController::class, 'edit'])->name('categorias.edit');
    
    //RUTAS PARA CONTRO.AR EL FORMULARIO
    Route::post('/categorias/store', [CategoriasController::class,'store'])->name('categorias.store');
    Route::patch('/categorias/{categoria}/update', [CategoriasController::class,'update'])->name('categorias.update');
    Route::delete('/categorias/{categoria}', [CategoriasController::class,'destroy'])->name('categorias.destroy');
    
    //RUTAS PARA LIBROS
    Route::get('/libros', [LibrosController::class,'index'])->name('libros.index');
    Route::get('/libros/create', [LibrosController::class,'create'])->name('libros.create');
    Route::get('/libros/{libro}', [LibrosController::class,'show'])->name('libros.show');
    Route::get('/libros/{libro}/edit', [LibrosController::class, 'edit'])->name('libros.edit');
    
    //RUTAS PARA CONTRO.AR EL FORMULARIO DE LIBROS
    Route::post('/libros/store', [LibrosController::class,'store'])->name('libros.store');
    Route::patch('/libros/{libro}/update', [LibrosController::class,'update'])->name('libros.update');
    Route::delete('/libros/{libro}', [LibrosController::class,'destroy'])->name('libros.destroy');

    Route::post('/logout', [LoginController::class,'logout'])->name('logout');
});

