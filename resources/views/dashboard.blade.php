<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

@extends('layouts.app')

@section('content')
<div class="container py-5 d-flex flex-column align-items-center">
    <div class="bg-light border rounded p-4 shadow-sm text-center" style="max-width: 480px; width: 100%;">
        <p class="fs-4 mb-4">¡Hola, <strong>{{ auth()->user()->name }}</strong>! Has iniciado sesión correctamente.</p>
        <a href="{{ route('welcome') }}" class="btn btn-primary btn-lg rounded-pill px-4">
            Explorar Aplicacion
        </a>
    </div>
</div>
@endsection
