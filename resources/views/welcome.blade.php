<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Página Principal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

@auth
    <h1 class="mb-4">Bienvenido, {{ auth()->user()->name }}</h1>

    <div class="mb-3">
        <a href="{{ route('employees.index') }}" class="btn btn-primary">Ir al CRUD de Empleados</a>
        <a href="{{ route('pokemons.index') }}" class="btn btn-success">Ir a la API de Pokémon</a>
    </div>

    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="btn btn-danger">Cerrar sesión</button>
    </form>
@endauth

@guest
    <h1>No tienes acceso a esta página.</h1>
    <a href="{{ route('login') }}" class="btn btn-primary">Iniciar sesión</a>
@endguest

</body>
</html>
