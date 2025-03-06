@extends('layout.app')

@section('title', 'LISTADO DE CATEGORÍAS')

@section('content')

<div class="container">
                <h1 class="text-center" style="margin: 25px ; ">  LISTADO DE CATEGORÍAS</h1>

             <div class="btns">
                 <a href="{{ route('libros.index') }}" class="btn btn-secondary" style="margin-bottom: 20px;"> <i class="bi bi-arrow-left"></i>  VOLVER A INICIO</a>
                <a href="{{route('categorias.create') }} " class="btn btn-success" style="margin-bottom: 20px; align-items: end; float: right;"> AGREGAR CATEGORÍA</a>
            </div>
            
                <table class="table text-center" >
                                                <thead  class="table-dark" >
                                                    <tr >
                                                    <th scope="col">ID</th>
                                                    <th scope="col">CATEGORÍAS</th>
                                                    <th scope="col">OPCIONES</th>
                                                    </tr>
                                                </thead>
                                                <tbody style="padding-bottom: 20px;">
                                                        @if($categorias->isNotEmpty())
                                                                    @foreach ( $categorias as  $categoria )
                                                                    <th scope="row">{{ $categoria->id }}</th>
                                                                    <td>{{ $categoria->nombre }}</td>
                                                                    <td>
                                                                        <a href="{{ route('categorias.show', $categoria->id) }}" class="btn btn-primary" style="display: inline-block; margin-right:10px;"> <i class="bi bi-eye"></i>  INFO</a>
                                                                        <a href="{{ route('categorias.edit', $categoria->id) }}" class="btn btn-success" style="display: inline-block; margin-right:10px;"> <i class="bi bi-pencil-square"></i> EDITAR</a>
                                                                        <form action="{{ route('categorias.destroy', $categoria->id) }}" method="POST" style="display: inline-block;">
                                                                            @csrf
                                                                            @method('DELETE')
                                                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Estás seguro de que quieres eliminar?')"> <I class="bi bi-trash"></I> ELIMINAR</button>
                                                                        </form>
                                                                    </td>
                                                                </tr>
                                                                <tr>                                                    
                                                                @endforeach
                                                            @else 
                                                                   <tr>
                                                                    <td colspan="3"> <h3> NO HAY CATEGORÍAS REGISTRADAS.</h3></td>
                                                                   </tr>
                                                        @endif
                                                </tbody>
                    </table>
</div>
    @if (session('sucess'))
        <script>
                alert("{{ session('sucess') }}");
        </script>
    @endif
@endsection