<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Platos</title>
</head>
<body>

    <h1>Listado de platos</h1>

    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <a href="{{ route('platos.create') }}">+ Crear nuevo plato</a>

    <br><br>

    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>ID</th>
                <th>Imagen</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody>
            @forelse($platos as $plato)
                <tr>
                    <td>{{ $plato->id }}</td>

                    <td>
                        <img
                            src="{{ asset('storage/' . $plato->imagen) }}"
                            width="100"
                            alt="{{ $plato->nombre }}"
                        >
                    </td>

                    <td>{{ $plato->nombre }}</td>

                    <td>${{ number_format($plato->precio, 2, ',', '.') }}</td>

                    <td>
                        <a href="{{ route('platos.edit', $plato) }}">
                            Editar
                        </a>

                        |

                        <form
                            action="{{ route('platos.destroy', $plato) }}"
                            method="POST"
                            style="display:inline"
                            onsubmit="return confirm('¿Está seguro de eliminar este plato?')"
                        >
                            @csrf
                            @method('DELETE')

                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">No hay platos registrados.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <br>

    <a href="{{ route('menu') }}">Ver menú público</a>

</body>
</html>