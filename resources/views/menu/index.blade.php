<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Menú</title>
</head>
<body>

    <h1>Menú del restaurante</h1>

    @forelse($platos as $plato)

        <div>
            <h2>{{ $plato->nombre }}</h2>

            <p>
                <strong>
                    ${{ number_format($plato->precio, 2, ',', '.') }}
                </strong>
            </p>

            <a href="{{ route('menu.show', $plato) }}">
                Ver Detalle
            </a>
        </div>

        <hr>

    @empty
        <p>No hay platos disponibles.</p>
    @endforelse

</body>
</html>