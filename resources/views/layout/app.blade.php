<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('CRUD BÁSICO')</title>
    
    <nav class="navbar navbar-expand-lg bg-success"  >
      <div class="container-fluid">
    <a class="navbar-brand" href="{{ route('login') }}" style="color: white; font-weight: bold;">MEUCLOSITO's LIBRARY</a>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link " aria-current="page"  href="{{ route('libros.index') }}"> <i class="bi bi-table"></i> Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('categorias.index') }}"><i class="bi bi-list-task"></i> Categorias</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('libros.create') }}"> <i class="bi bi-book"></i> Libros</a>
        </li>
       @auth
       <li class="nav-item dropdown"> 
          <a href="#" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="bi bi-person-circle"></i>  {{ Auth::user()->name }}  
        </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li>
                <form action="{{ route('logout') }}" method="POST">
                  @csrf
                  <button type="submit" class="dropdown-item"> <i class="bi bi-box-arrow-left"></i>  Cerrar sesión</button>
                </form>
              </li>
          </ul>
        </li>
       @endauth
      </ul>
    </div>
  </div>
</nav>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
  </head>
  <body >

    @yield('content')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>

<style>
  .nav-link {
    color: white;
    font-weight: bold;
  }
</style>