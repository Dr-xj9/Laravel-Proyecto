<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Contacto</title>
</head>
<body>
    <h1>Editar Contacto</h1>
    <form action="{{ route('contacts.update', $contact) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Nombre:</label>
        <input type="text" id="name" name="name" value="{{ $contact->name }}" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="{{ $contact->email }}" required>
        <br>
        <label for="phone">Teléfono:</label>
        <input type="text" id="phone" name="phone" value="{{ $contact->phone }}" required>
        <br>
        <button type="submit">Actualizar</button>
    </form>
    <a href="{{ route('contacts.index') }}">Volver a la lista</a>
</body>
</html>
