<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Empleados</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
    <div class="container">
      <a class="navbar-brand" href="{{ route('employees.index') }}">Gestión de Empleados</a>
      <div class="ms-auto">
        <a href="{{ route('employees.create') }}" class="btn btn-outline-light btn-sm">+ Agregar empleado</a>
      </div>
    </div>
  </nav>

  <!-- Contenedor principal -->
  <div class="container my-5">

    <!-- Alerta de éxito -->
    @if (session('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Cerrar"></button>
      </div>
    @endif
<a href="{{ route('welcome') }}" class="btn btn-primary mb-4">Regresar</a>

    <!-- Lista de empleados -->
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
      @foreach ($employees as $employee)
        <div class="col">
          <div class="card h-100">
            <div class="card-header bg-primary text-white">
              {{ $employee->name }}
            </div>
            <div class="card-body">
              <p class="mb-1"><strong>Correo:</strong> {{ $employee->email }}</p>
              <p class="mb-1"><strong>Teléfono:</strong> {{ $employee->phone }}</p>
              <p class="mb-1"><strong>Puesto:</strong> {{ $employee->position }}</p>
              <p class="mb-0"><strong>Salario:</strong> ${{ number_format($employee->salary, 2) }}</p>
            </div>
            <div class="card-footer d-flex justify-content-between">
              <a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-sm btn-outline-primary">Editar</a>
              <form action="{{ route('employees.destroy', $employee->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-sm btn-outline-danger">Eliminar</button>
              </form>
            </div>
          </div>
        </div>
      @endforeach
    </div>

  </div>

  <!-- Scripts de Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
