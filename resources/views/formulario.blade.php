<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Formulario de contacto</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f4f7;
            margin: 0;
            padding: 40px;
        }

        .contenedor {
            width: 500px;
            margin: auto;
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
        }

        h1 {
            text-align: center;
            color: #2c3e50;
        }

        label {
            display: block;
            margin-top: 15px;
            margin-bottom: 5px;
            font-weight: bold;
            color: #34495e;
        }

        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 15px;
        }

        textarea {
            height: 120px;
            resize: vertical;
        }

        input[type="file"] {
            margin-top: 5px;
        }

        button {
            width: 100%;
            margin-top: 20px;
            padding: 12px;
            background-color: #3498db;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #2980b9;
        }
    </style>
</head>

<body>

    <div class="contenedor">

        <h1>Formulario de contacto</h1>

        <form action="#" method="POST" enctype="multipart/form-data">

            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre">

            <label for="email">Email:</label>
            <input type="email" id="email" name="email">

            <label for="mensaje">Mensaje:</label>
            <textarea id="mensaje" name="mensaje"></textarea>

            <label for="foto">Foto:</label>
            <input type="file" id="foto" name="foto">

            <button type="submit">Enviar</button>

        </form>

    </div>

</body>
</html>