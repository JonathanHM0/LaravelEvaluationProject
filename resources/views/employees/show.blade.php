<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <title>Employee</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-warning">
        <div class="container-fluid">
            <a class="navbar-brand h1" href="{{ route('employees.index') }}">Empleados</a>
            <div class="justify-end">
                <div class="col">
                    <a class="btn btn-sm btn-success" href="{{ route('employees.create') }}">Agregar buena</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container h-100 mt-5">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">{{ $employee->name }}</h5>
                </div>
                <div class="card-body">
                    <p class="card-text"><strong>Email:</strong> {{ $employee->email }}</p>
                    <p class="card-text"><strong>Phone:</strong> {{ $employee->phone }}</p>
                    <p class="card-text"><strong>Position:</strong> {{ $employee->position }}</p>
                    <p class="card-text"><strong>Salary:</strong> ${{ $employee->salary }}</p>
                </div>
                <div class="card-footer d-flex gap-2">
                    <a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-primary btn-sm">Edit</a>
                    <form action="{{ route('employees.destroy', $employee->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
