<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<div class="container h-100 mt-5">
  <div class="row h-100 justify-content-center align-items-center">
    <div class="col-10 col-md-8 col-lg-6">
      <h3>Agregar Nuevo empleado</h3>
      <form action="{{ route('employees.store') }}" method="POST">
        @csrf
        <div class="form-group mb-3">
          <label for="name">Nombre</label>
          <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group mb-3">
          <label for="email">Correo</label>
          <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group mb-3">
          <label for="phone">Telefono</label>
          <input type="text" class="form-control" id="phone" name="phone" required>
        </div>
        <div class="form-group mb-3">
          <label for="position">Puesto</label>
          <input type="text" class="form-control" id="position" name="position" required>
        </div>
        <div class="form-group mb-3">
          <label for="salary">Salario</label>
          <input type="number" step="0.01" class="form-control" id="salary" name="salary" required>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Create Employee</button>
      </form>
    </div>
  </div>
</div>
