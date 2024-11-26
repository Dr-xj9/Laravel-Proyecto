<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Contacto</title>
</head>
<body>
    <h1>Crear Nuevo Contacto</h1>

    <form action="{{ route('contacts.store') }}" method="POST">
        @csrf

        <label for="name">Nombre:</label>
        <input type="text" id="name" name="name" required>
        <br><br>

        <label for="email">Correo Electrónico:</label>
        <input type="email" id="email" name="email" required>
        <br><br>

        <label for="phone">Teléfono:</label>
        <input type="text" id="phone" name="phone" required>
        <br><br>

        <button type="submit">Guardar Contacto</button>
    </form>

    <br>
    <a href="{{ route('contacts.index') }}">Volver a la lista</a>
</body>
</html>
