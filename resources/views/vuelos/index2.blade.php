<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>VUELOS DISPONIBLES</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Hora de Salida</th>
                <th>Hora de Llegada</th>
                <th>Terminal de Salida</th>
                <th>Termina de lLlegada</th>
                <th>Ciudad de Salida</th>
                <th>Ciudad de Llegada</th>
                <th>Nombre del Piloto</th>
            </tr>
        </thead>
    </table>
    <tbody>
        @foreach ($aviones as $avion)
            <tr>
                <td>{{ $vuelo->horaSalidaTerminal }}</td>
                <td>{{ $vuelo->horaEstimadaLlegada }}</td>
                <td>{{ $vuelo->terSalida }}</td>
                <td>{{ $vuelo->terLlegada }}</td>
                <td>{{ $vuelo->ciudadSalida }}</td>
                <td>{{ $vuelo->ciudadLlegada }}</td>
                <td>{{ $vuelo->nomPiloto }}</td>
                <td>
                    <a href="">
                        <button>EDITAR</button>
                    </a>
                    <a href="">
                        <button>ELIMINAR</button>
                    </a>
                </td>
            </tr>
        @endforeach
    </tbody>

</body>

</html>