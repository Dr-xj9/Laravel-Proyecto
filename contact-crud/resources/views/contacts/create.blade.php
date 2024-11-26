<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Contacto</title>
</head>
<body>
    <h1>Crear Contacto</h1>
    <form action="{{ route('contacts.store') }}" method="POST">
        @csrf
        <label for="name">Nombre:</label>
        <input type="text" id="name" name="name" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br>
        <label for="phone">Teléfono:</label>
        <input type="text" id="phone" name="phone" required>
        <br>
        <button type="submit">Guardar</button>
    </form>
    <a href="{{ route('contacts.index') }}">Volver a la lista</a>
</body>
</html>
