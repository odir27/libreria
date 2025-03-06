<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LIBRERÍA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
</head>
    <body style="background-image: url( https://www.whosedrop.com/cdn/shop/products/lv-608_2000x.jpg?v=1579882972); 
    background-repeat: no-repeat; 
    background-size: cover;
    background-position: center;
    height:74vh; 
    margin: 0;
    padding:0;" >
  
    <div class="container" style=" margin-top: 19%;  width: 35rem; "> 
        <form  method="POST"  action="{{ route('registrar') }}" style="color: white; " >
    <h2 style="font-weight: bold; text-align: center;">REGISTRO DE USUARIO </h2>
    @csrf
    <div class="mb-3" style="text-align: center;">
        <label for="name" class="form-label">Nombre:</label>
        <input type="text" class="form-control" id="name" name="name"  required>
    </div>

    <div class="mb-3" style="text-align: center;">
        <label for="email" class="form-label">Email:</label>
        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" required>
    </div>
    <div class="mb-3" style="text-align: center;">
        <label for="password" class="form-label" >Contraseña:</label>
        <input type="password" class="form-control" id="password" name="password" required>
    </div>
    <div class="mb-3">
        <p style="text-align:center;  font-weight: bold;">¿Ya tienes una cuenta con nosotros? <a href="{{ route('login') }}" style=" color:white; font-weight: bold;">Dale click aquí para acceder. </a>  </p> 
    </div>
    <button type="submit" class="btn btn-primary" style="margin-left: 38%;"> <i class="bi-person-add"></i> REGISTRARSE </button>
</form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
@if (session('success'))
<script>
    alert("{{ session('success') }}")
</script>
@endif
</html>
