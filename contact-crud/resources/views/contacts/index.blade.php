<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Contactos</title>
</head>
<body>
    <h1>Lista de Contactos</h1>
    <a href="{{ route('contacts.create') }}">Crear Nuevo Contacto</a>

    <ul>
        @foreach ($contacts as $contact)
            <li>
                {{ $contact->name }} - {{ $contact->email }} - {{ $contact->phone }}
                <a href="{{ route('contacts.show', $contact) }}">Ver</a>
                <a href="{{ route('contacts.edit', $contact) }}">Editar</a>
                <form action="{{ route('contacts.destroy', $contact) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </li>
        @endforeach
    </ul>
    <?php
        echo env('APP_URL');
    ?>
</body>
</html>
