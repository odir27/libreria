@extends('layout.app')

@section('title', 'GESTIÓN DE LIBROS')

@section('content')

<div class="container">
            <h1 style="text-align: center; margin-top: 20px;">GESTIÓN DE LIBROS</h1>
           <div class="text-end">
           <a href="{{ route('libros.create') }}" class="btn btn-success"> <i class="bi bi-plus-circle"></i> REGISTRAR NUEVO LIBRO </a>
           </div>

            <table class="table text-center" style="margin-top: 25px;"> 
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>TÍTULO </th>
                            <th>CATEGORIA</th>
                            <th>OPCIONES</th>
                        </tr>
                    </thead >
                        <tbody>
                                @if ($libros->isEmpty()) 
                                <tr>
                                    <td colspan="4"> <h3> NO HAY LIBROS REGISTRADOS.</h3></td>
                                </tr>             
                                @else 
                                @foreach ( $libros as $libro )
                                        <tr>
                                            <th> {{ $libro->id }}</th>
                                            <td> {{ $libro->titulo }}</td>
                                            <td> {{ $libro->categoria->nombre }}</td>
                                            <td>
                                                <a href="{{ route('libros.show', $libro->id) }}" class="btn btn-primary"> <i class="bi bi-eye" style="display: inline-block;"></i> INFO</a>
                                                <a href="{{ route('libros.edit', $libro->id) }}" class="btn btn-success"> <i class="bi bi-pencil-square" style="display:inline-block"></i> EDITAR</a>
                                                <form action="{{ route('libros.destroy', $libro->id) }}" method="POST" style="display: inline-block;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Estás seguro de que quieres eliminar?')"> <I class="bi bi-trash"></I> ELIMINAR</button>
                                            </td>
                                        </tr>  
                                        @endforeach 
                                @endif
                        </tbody>
            </table>
</div>

@if (session('success'))
    <script>
        alert("{{ session('success') }}");
    </script>
@endif

@endsection