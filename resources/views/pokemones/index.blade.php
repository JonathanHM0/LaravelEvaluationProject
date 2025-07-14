<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POKEAPI</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>
    <a href="{{ route('welcome') }}" class="btn btn-primary mb-4">Regresar</a>

    <div class="container my-5">
        <h1 class="mb-4">Mostrando Pokémones</h1>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach($pokemones as $pokemon)
            <div class="col">
                <div class="card h-100">
                    <img src="{{ $pokemon['sprite'] }}" class="card-img-top" alt="{{ $pokemon['name'] }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ ucfirst($pokemon['name']) }}</h5>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

</body>
</html>