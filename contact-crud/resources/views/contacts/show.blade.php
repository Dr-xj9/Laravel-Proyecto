<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Contacto</title>
</head>
<body>
@extends('layouts.app')

@section('content')
    <h1 class="mb-4">Detalles del Contacto</h1>

    <!-- Mostrar detalles del contacto -->
    <div class="card">
        <div class="card-header">
            Información del Contacto
        </div>
        <div class="card-body">
            <h5 class="card-title">{{ $contact->name }}</h5>
            <p class="card-text"><strong>Correo:</strong> {{ $contact->email }}</p>
            <p class="card-text"><strong>Teléfono:</strong> {{ $contact->phone }}</p>
            
            <!-- Botones de acción -->
            <div class="d-flex justify-content-between">
                <a href="{{ route('contacts.edit', $contact->id) }}" class="btn btn-warning">Editar</a>
                <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Botón de volver a la lista de contactos -->
    <a href="{{ route('contacts.index') }}" class="btn btn-secondary mt-3">Volver a la lista</a>
@endsection

</body>
</html>
