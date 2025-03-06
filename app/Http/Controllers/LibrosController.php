<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libros;
use App\Models\Categorias;


class LibrosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //  MOSTRAR TODOS LOS LIBROS 
            $libros = Libros::with('categoria')->get();
            return view('libros.index', compact('libros'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //  MOSTRAR FORMULARIO PARA CREAR LIBRO
            $categorias = Categorias::all();
            return view('libros.create', compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // HACER VALIDACIONES
            $request->validate([
                'titulo' => 'required',
                'autor' => 'required',
                'editorial' => 'required',
                'fk_categoria' => 'required',
                'año' => 'required | numeric | digits:4',
            ]);

        // GUARDAR LIBRO
        Libros::create($request->all());

        return redirect()->route('libros.index')->with('success', 'El libro se ha creado con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show(Libros $libro)
    {
        //
        $libro->load('categoria');
        return view('libros.show', compact('libro'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Libros $libro)
    {
        //  MOSTRAR FORMULARIO PARA EDITAR LIBRO
            $categorias = Categorias::all();
            return view('libros.edit', compact('libro', 'categorias'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Libros $libro)
    {
        // HACER VALIDACIONES
            $request->validate([
                'titulo' => 'required',
                'autor' => 'required',
                'editorial' => 'required',
                'fk_categoria' => 'required',
                'año' => 'required | numeric | digits:4',
            ]);

        // ACTUALIZAR LIBRO
        $libro->titulo = $request->titulo;
        $libro->autor = $request->autor;
        $libro->editorial = $request->editorial;
        $libro->fk_categoria = $request->fk_categoria;
        $libro->año = $request->año;
        $libro->save();

        return redirect()->route('libros.index')->with('success', 'El libro se ha actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Libros $libro)
    {
        // ELIMINAR LIBRO
        $libro->delete();
        return redirect()->route('libros.index')->with('success', 'El libro se ha eliminado con éxito');
    }
}
