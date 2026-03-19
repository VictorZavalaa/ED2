<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <h1>Registro de aviones</h1>
    <form action="{{ route('aviones.store') }}" method="POST">
        @csrf

        <input type="text" id="modelo" name="Modelo" required>
        <br><br>

        <input type="text" id="fabricante" name="Fabricante" required>
        <br><br>

        <input type="number" id="capacidadPasa" name="Capacidad de pasajeros" required>
        <br><br>


        <input type="number" id="capacidadCarg" name="Capacidad de carga" required>
        <br><br>

        <input type="text" id="anioFabr" name="Año de fabricación" required>
        <br><br>


        <button type="submit">Registrar</button>

</body>

</html>
