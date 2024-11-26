<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Contacto</title>
</head>
<body>
@extends('layouts.app')

@section('content')
    <h1 class="mb-4">Editar Contacto</h1>

    <!-- Mostrar el formulario de edición -->
    <div class="card">
        <div class="card-header">
            Editar Información del Contacto
        </div>
        <div class="card-body">
            <form action="{{ route('contacts.update', $contact->id) }}" method="POST">
                @csrf
                @method('PUT')

                <!-- Nombre -->
                <div class="mb-3">
                    <label for="name" class="form-label">Nombre</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $contact->name) }}" required>
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Correo -->
                <div class="mb-3">
                    <label for="email" class="form-label">Correo</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email', $contact->email) }}" required>
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Teléfono -->
                <div class="mb-3">
                    <label for="phone" class="form-label">Teléfono</label>
                    <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" value="{{ old('phone', $contact->phone) }}" required>
                    @error('phone')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Botones para guardar o cancelar -->
                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-success">Guardar Cambios</button>
                    <a href="{{ route('contacts.index') }}" class="btn btn-secondary">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
@endsection

</body>
</html>
