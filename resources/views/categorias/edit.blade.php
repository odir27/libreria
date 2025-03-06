@extends('layout.app')

@section('title', 'AGREGAR CATEGORÍA')

@section('content')

<div class="container">
  <h1 class="text-center" style=" margin: 25px 25px"> ACTUALIZAR CATEGORÍAS </h1>
            <form action ="{{ route('categorias.update', $categoria->id) }}" method="POST"    style="width: 70%; justify-content: center; margin-left: 15%; text-align:center;" >
            @csrf
            @method('PATCH')
            <br>
            <div class="mb-3">
            <b> ID:</b> {{ $categoria->id }}
         </div>
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre: </label>
                <input type="text" class="form-control"  name="nombre" placeholder="Coloque el nombre de la categoría por favor" value="{{ $categoria->nombre }}">
            </div>
            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción:</label>
                <textarea name="descripcion" id="descripcion"  class="form-control" rows="3" placeholder="Coloque la descripción de la categoria">{{ $categoria->descripcion }}</textarea>
            </div>
            <div class="text-center">
            <button type="submit" class="btn btn-primary" ><i class="bi bi-bag-plus-fill"></i> ACTUALIZAR</button>
            </div>
            </form>
</div>
<br>
@if ($errors->any())
    <div class="alert alert-danger">
            <ul>
                    @foreach ( $errors->all() as $error )
                        <li> {{ $error }}</li>
                    @endforeach
            </ul>
    </div>
@endif

@endsection