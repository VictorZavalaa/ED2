<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Consulta</title>
</head>

<body>



    <h1>AVIONES DISPONIBLES</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Modelo</th>
                <th>Fabricante</th>
                <th>Capacidad de pasajeros</th>
                <th>Capacidad de carga</th>
                <th>Año de fabricacion</th>
            </tr>
        </thead>
    </table>
    <tbody>
        @foreach ($aviones as $avion)
            <tr>
                <td>{{ $avion->modelo }}</td>
                <td>{{ $avion->fabricante }}</td>
                <td>{{ $avion->capacidadPasa }}</td>
                <td>{{ $avion->capacidadCarg }}</td>
                <td>{{ $avion->anioFabr }}</td>
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
