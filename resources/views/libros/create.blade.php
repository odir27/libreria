@extends('layout.app')

@section('title', 'REGISTRAR NUEVO LIBRO')

@section('content')

@if($errors->any())
    <div class="alert alert-danger" style="margin-top: 20px; width: 70%;  justify-content: center; margin-left: 15%;">
        <ul>
            @foreach ($errors->all() as $error)
                <li> <h1> {{ $error }}</h1></li>
            @endforeach
        </ul>
    </div>
@endif
<div class="container">
        <h1 style="text-align: center; margin-top: 20px;"> REGISTRAR NUEVO LIBRO </h1>
        <form action="{{ route('libros.store') }}" method="POST" style="width: 70%; justify-content: center; margin-left: 15%;">
        <a href="{{ route('libros.index') }}" class="btn btn-secondary" style="margin-bottom: 20px;"> <i class="bi bi-arrow-left"></i>  VOLVER A INICIO</a>
            @csrf
            <div class="mb-3">
                <label for="titulo" class="form-label">Título:</label>
                <input type="text" class="form-control" id="titulo" name="titulo" required>
            </div>
            <div class="mb-3">
                <label for="autor" class="form-label">Autor:</label>
                <input type="text" class="form-control" id="autor" name="autor" required>
            </div>
            <div class="mb-3">
                <label for="editorial" class="form-label">Editorial:</label>
                <input type="text" class="form-control" id="editorial" name="editorial" required>
            </div>
            <div class="mb-3">
                <label for="fk_categoria" class="form-label">Categoría:</label>
                <select class="form-select" id="fk_categoria" name="fk_categoria" required>
                    <option value="fk_categoria"></option>
                    @foreach ($categorias as $categoria)
                        <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="año" class="form-label">Año:</label>
                <input type="text" class="form-control" id="año" name="año" required>
            </div>
            <button type="submit" class="btn btn-primary" >REGISTRAR</button>
        </form>           
</div>

@endsection