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

        <input type="number" id="id" name="id" required>
        <br><br>

        <input type="text" id="modelo" name="modelo" required>
        <br><br>

        <input type="text" id="capacidadPasa" name="modelo" required>
        <br><br>


        <input type="number" id="capacidadCarg" name="pasajeros" required>
        <br><br>

        <input type="number" id="carga" name="carga" required>
        <br><br>

        <input type="number" id="year" name="year" required>
        <br><br>

        <button type="submit">Registrar</button>

</body>

</html>
