<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Contacto</title>
</head>
<body>
    <h1>Detalles del Contacto</h1>

    <p><strong>Nombre:</strong> {{ $contact->name }}</p>
    <p><strong>Correo Electrónico:</strong> {{ $contact->email }}</p>
    <p><strong>Teléfono:</strong> {{ $contact->phone }}</p>
    <p><strong>Dirección:</strong> {{ $contact->address ?? 'No disponible' }}</p>

    <br>
    <a href="{{ route('contacts.index') }}">Volver a la lista</a>
</body>
</html>
