@extends('layout.app')

@section('title', 'INFORMACIÓN DEL LIBRO')

@section('content')

<div class="container">
            <a href="{{ route('libros.index') }}" class="btn btn-secondary" style="margin-top: 20px;"> <i class="bi-arrow-left"> </i> VOLVER A INICIO</a>

        <div class="card" style="margin-top: 25px; width: 50rem; margin-left: 12%;">
            <div class="card-body">
                    <div class="card-title">        
                         <h1 style="text-align: center;"> INFORMACIÓN DEL LIBRO:</h1>
                         <hr>
                        </div>
                    <div class="card-text" style="text-align: center;">
                                <p><strong>ID:</strong> {{ $libro->id }}</p>
                                <hr>
                                <p><strong>Título:</strong> {{ $libro->titulo }}</p>
                                <hr>
                                <p><strong>Autor:</strong> {{ $libro->autor }}</p> <hr>
                                <p><strong>Editorial:</strong> {{ $libro->editorial }}</p> <hr>
                                <p><strong>Categoría:</strong> {{ $libro->categoria->nombre }}</p> <hr>
                                <p><strong>Año:</strong> {{ $libro->año }}</p> 
                    </div>
            </div>
        </div>

</div>
@endsection