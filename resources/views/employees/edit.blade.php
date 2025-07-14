<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<div class="container h-100 mt-5">
  <div class="row h-100 justify-content-center align-items-center">
    <div class="col-10 col-md-8 col-lg-6">
      <h3>Editar Empleado</h3>
      <form action="{{ route('employees.update', $employee->id) }}" method="post">
        @csrf
        @method('PATCH')
        <div class="form-group mb-3">
          <label for="name">Nombre</label>
          <input type="text" class="form-control" id="name" name="name"
            value="{{ $employee->name }}" required>
        </div>
        <div class="form-group mb-3">
          <label for="email">Correo</label>
          <input type="email" class="form-control" id="email" name="email"
            value="{{ $employee->email }}" required>
        </div>
        <div class="form-group mb-3">
          <label for="phone">Telefono</label>
          <input type="text" class="form-control" id="phone" name="phone"
            value="{{ $employee->phone }}" required>
        </div>
        <div class="form-group mb-3">
          <label for="position">Puesto</label>
          <input type="text" class="form-control" id="position" name="position"
            value="{{ $employee->position }}" required>
        </div>
        <div class="form-group mb-3">
          <label for="salary">Salario</label>
          <input type="number" step="0.01" class="form-control" id="salary" name="salary"
            value="{{ $employee->salary }}" required>
        </div>
        <button type="submit" class="btn mt-3 btn-primary">Update Employee</button>
      </form>
    </div>
  </div>
</div>