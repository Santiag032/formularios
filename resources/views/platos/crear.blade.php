<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Plato</title>
</head>
<body>

    <h1>Registrar nuevo plato</h1>

    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <form action="{{ route('platos.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div>
            <label>Nombre del plato:</label>
            <input type="text" name="nombre" value="{{ old('nombre') }}">
            @error('nombre')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <br>

        <div>
            <label>Precio:</label>
            <input type="number" name="precio" step="0.01" value="{{ old('precio') }}">
            @error('precio')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <br>

        <div>
            <label>Descripción:</label>
            <textarea name="descripcion">{{ old('descripcion') }}</textarea>
            @error('descripcion')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <br>

        <div>
            <label>Imagen:</label>
            <input type="file" name="imagen" accept=".jpg,.jpeg,.png,.webp">
            @error('imagen')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <br>

        <button type="submit">Guardar plato</button>
        <a href="{{ route('platos.index') }}">Volver</a>
    </form>

</body>
</html>