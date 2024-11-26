<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Contacto</title>
</head>
<body>
    <h1>Editar Contacto</h1>

    <form action="{{ route('contacts.update', $contact->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="name">Nombre:</label>
        <input type="text" id="name" name="name" value="{{ old('name', $contact->name) }}" required>
        <br><br>

        <label for="email">Correo Electrónico:</label>
        <input type="email" id="email" name="email" value="{{ old('email', $contact->email) }}" required>
        <br><br>

        <label for="phone">Teléfono:</label>
        <input type="text" id="phone" name="phone" value="{{ old('phone', $contact->phone) }}" required>
        <br><br>

        <label for="address">Dirección (opcional):</label>
        <input type="text" id="address" name="address" value="{{ old('address', $contact->address) }}">
        <br><br>

        <button type="submit">Actualizar Contacto</button>
    </form>

    <br>
    <a href="{{ route('contacts.index') }}">Volver a la lista</a>
</body>
</html>
