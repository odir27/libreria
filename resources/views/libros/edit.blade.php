@extends('layout.app')

@section('title', 'EDITAR LIBRO')

@section('content')

<div class="container">
        <a href="{{ route('libros.index') }}" class="btn btn-secondary" style=" margin-top: 20px;"> <i class="bi-arrow-left"></i> VOLVER A INICIO </a>

        <div class="content">
            <h1 style="text-align: center; margin-top: 20px;"> EDITAR LIBRO </h1>

                <form action="{{ route('libros.update', $libro->id) }}" method="POST" style=" justify-content: center; margin-left: 15px;">
                    @csrf
                    @method('PATCH')
                        <div class="mb-3"></div>
                            <h4> ID: {{ $libro->id }} </h4>
                        </div>
                        <div class="mb-3">
                            <label for="nombre">Título:</label>
                            <input type="text" name="titulo" id="titulo" value="{{ $libro->titulo }}" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="autor">Autor:</label>
                            <input type="text" name="autor" id="autor" value="{{ $libro->autor }}" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="editorial">Editorial:</label>
                            <input type="text" name="editorial" id="editorial" value="{{ $libro->editorial }}" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="fk_categoria" class="form-label">Categoría:</label>
                            <select class="form-select" name="fk_categoria" id="fk_categoria" required>
                                @foreach ($categorias as $categoria)
                                    <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="año">Año:</label>
                            <input type="text" name="año" id="año" value="{{ $libro->año }}" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary" style="margin-top: 20px;"> ACTUALIZAR </button>
                </form>
        </div>
</div>
@endsection