@extends('layout.app')

@section('title', 'INFO DE LA CATEGORÍA')

@section('content') 

<div class="container">
    <a href="{{ route('categorias.index') }}" class="btn btn-secondary" style="margin-top: 20px;"> <i class="bi bi-arrow-left"></i> VOLVER AL INICIO </a>
    <br>
    <br>
      <div class="card" style="width: 50%;  text-align: center;">
      <h1 class="text-center" style="margin: 25px;">INFO DE LA CATEGORÍA</h1>
        <div class="mb-3">
            <b> ID:</b> {{ $categoria->id }}
         </div>
         <div class="mb-3">
            <b> NOMBRE:</b> {{ $categoria->nombre }}
         </div>   
         <div class="mb-3">
            <b> DESCRIPCION:</b> {{ $categoria->descripcion }}
         </div>
      </div>
</div>

@endsection