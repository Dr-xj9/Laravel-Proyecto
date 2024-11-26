<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle del Contacto</title>
</head>
<body>
    <h1>Detalle del Contacto</h1>
    <p><strong>Nombre:</strong> {{ $contact->name }}</p>
    <p><strong>Email:</strong> {{ $contact->email }}</p>
    <p><strong>Teléfono:</strong> {{ $contact->phone }}</p>
    <a href="{{ route('contacts.index') }}">Volver a la lista</a>
</body>
</html>
