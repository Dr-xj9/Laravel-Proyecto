<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Contactos</title>
</head>
<body>
    <h1>Lista de Contactos</h1>

    @if(session('success'))
        <div style="color: green;">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('contacts.create') }}">Crear nuevo contacto</a>

    <ul>
        @foreach($contacts as $contact)
            <li>
                <strong>{{ $contact->name }}</strong> - {{ $contact->email }}
                <a href="{{ route('contacts.show', $contact->id) }}">Ver</a>
                <a href="{{ route('contacts.edit', $contact->id) }}">Editar</a>
                <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>
