<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>{{ $plato->nombre }}</title>
</head>
<body>

    <h1>{{ $plato->nombre }}</h1>

    <img
        src="{{ asset('storage/' . $plato->imagen) }}"
        width="300"
        alt="{{ $plato->nombre }}"
    >

    <p><strong>Descripción:</strong></p>
    <p>{{ $plato->descripcion }}</p>

    <p>
        <strong>Precio:</strong>
        ${{ number_format($plato->precio, 2, ',', '.') }}
    </p>

    <a href="{{ route('platos.index') }}">Volver</a>

</body>
</html>