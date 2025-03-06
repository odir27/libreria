<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorias;

class CategoriasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorias = Categorias::all();
        return view('categorias.index', compact('categorias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categorias.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //VALIDACIÓN DEL REGISTRO DE CATEGORÍAS
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required'
        ]);

        //GUARDAR EL REGISTRO DE CATEGORÍAS
        $categoria = New Categorias();
        $categoria-> nombre = $request->nombre;
        $categoria-> descripcion = $request->descripcion;
        $categoria -> save();

        return redirect()->route('categorias.index')->with('sucess', 'Categoría creada correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Categorias $categoria)
    {
        //MOSTRAR VISTA CATEGORÍAS
        return view ('categorias.show', compact('categoria'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Categorias $categoria)
    {
        //MOSTRAR VISTA EDITAR CATEGORÍAS
            if(!$categoria){
                return redirect()->route('categorias.index')->with('error', 'Categoría no encontrada');
            }

        return view ('categorias.edit', compact('categoria'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Categorias $categoria)
    {
        //ACTUALIZAR REGISTRO DE CATEGORÍAS
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required'
        ]);

        //GUARDAR LA ACTUALIZACIÓN DE CATEGORÍAS
        $categoria-> nombre = $request->nombre;
        $categoria-> descripcion = $request->descripcion;
        $categoria -> save();

        return redirect()->route('categorias.index')->with('sucess', 'Categoría actualizada correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categorias $categoria)
    {
        //ELIMINAR REGISTRO DE CATEGORÍAS
        $categoria->delete();
        return redirect()->route('categorias.index')->with('sucess', 'Categoría eliminada correctamente');
    }
}
