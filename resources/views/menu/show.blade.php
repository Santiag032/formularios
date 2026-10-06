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
        width="400"
        alt="{{ $plato->nombre }}"
    >

    <h2>Descripción</h2>

    <p>{{ $plato->descripcion }}</p>

    <h2>Precio</h2>

    <p>
        ${{ number_format($plato->precio, 2, ',', '.') }}
    </p>

    <a href="{{ route('menu') }}">
        Volver al menú
    </a>

</body>
</html>