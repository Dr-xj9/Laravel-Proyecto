<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Contactos</title>
</head>
<body>
@extends('layouts.app')

@section('content')
    <h1 class="mb-4">Lista de Contactos</h1>
    
    <!-- Botón para crear un nuevo contacto -->
    <a href="{{ route('contacts.create') }}" class="btn btn-primary mb-3">Crear Nuevo Contacto</a>

    <!-- Mensaje de éxito si existe -->
    @if(session('success'))
        <script>
            Swal.fire({
                title: '¡Éxito!',
                text: '{{ session('success') }}',
                icon: 'success',
                confirmButtonText: 'Aceptar'
            });
        </script>
    @endif

    <!-- Tabla con la lista de contactos -->
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Teléfono</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($contacts as $contact)
                    <tr>
                        <td>{{ $contact->name }}</td>
                        <td>{{ $contact->email }}</td>
                        <td>{{ $contact->phone }}</td>
                        <td class="d-flex">
                            <a href="{{ route('contacts.show', $contact->id) }}" class="btn btn-info btn-sm me-2">Ver</a>
                            <a href="{{ route('contacts.edit', $contact->id) }}" class="btn btn-warning btn-sm me-2">Editar</a>
                            <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST" style="display:inline;" class="delete-form">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection

<script>
    // Confirmación de eliminación con SweetAlert
    document.querySelectorAll('.delete-form').forEach(function(form) {
        form.addEventListener('submit', function(e) {
            e.preventDefault();  // Evitar el envío inmediato del formulario

            Swal.fire({
                title: '¿Estás seguro?',
                text: '¡No podrás revertir esto!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Sí, eliminar',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();  // Si el usuario confirma, enviar el formulario
                }
            });
        });
    });
</script>

<!-- Incluir SweetAlert (JS) al final del body -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.5.0/dist/sweetalert2.all.min.js"></script>

</body>
</html>
