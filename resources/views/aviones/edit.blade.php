<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Editar Avión</title>
</head>

<body>
    <h1>Editar Avión: {{ $avion->modelo }}</h1>

    <form action="{{ route('aviones.update', $avion->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="modelo">Modelo:</label>
        <input type="text" id="modelo" name="modelo" value="{{ $avion->modelo }}" required><br><br>

        <label for="fabricante">Fabricante:</label>
        <input type="text" id="fabricante" name="fabricante" value="{{ $avion->fabricante }}" required><br><br>

        <label for="capacidadPasa">Capacidad Pasajeros:</label>
        <input type="number" id="capacidadPasa" name="capacidadPasa" value="{{ $avion->capacidadPasa }}"
            required><br><br>

        <label for="capacidadCarg">Capacidad Carga:</label>
        <input type="number" id="capacidadCarg" name="capacidadCarg" value="{{ $avion->capacidadCarg }}"
            required><br><br>

        <label for="anioFabr">Año de Fabricación:</label>
        <input type="number" id="anioFabr" name="anioFabr" value="{{ $avion->anioFabr }}" required><br><br>

        <button type="submit">Actualizar Avión</button>
    </form>

    <a href="{{ route('aviones.index') }}">Cancelar</a>
</body>

</html>
