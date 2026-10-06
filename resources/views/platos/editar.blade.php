<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Plato</title>
</head>
<body>

    <h1>Editar plato</h1>

    <form
        action="{{ route('platos.update', $plato) }}"
        method="POST"
        enctype="multipart/form-data"
    >
        @csrf
        @method('PUT')

        <div>
            <label>Nombre:</label>
            <input
                type="text"
                name="nombre"
                value="{{ old('nombre', $plato->nombre) }}"
            >

            @error('nombre')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <br>

        <div>
            <label>Precio:</label>
            <input
                type="number"
                name="precio"
                step="0.01"
                value="{{ old('precio', $plato->precio) }}"
            >

            @error('precio')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <br>

        <div>
            <label>Descripción:</label>
            <textarea name="descripcion">{{ old('descripcion', $plato->descripcion) }}</textarea>

            @error('descripcion')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <br>

        <div>
            <p>Imagen actual:</p>

            <img
                src="{{ asset('storage/' . $plato->imagen) }}"
                width="200"
                alt="{{ $plato->nombre }}"
            >
        </div>

        <br>

        <div>
            <label>Nueva imagen (opcional):</label>
            <input type="file" name="imagen" accept=".jpg,.jpeg,.png,.webp">

            @error('imagen')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <br>

        <button type="submit">Actualizar plato</button>

        <a href="{{ route('platos.index') }}">Cancelar</a>
    </form>

</body>
</html>