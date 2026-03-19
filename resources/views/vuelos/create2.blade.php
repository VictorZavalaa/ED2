<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Vuelos</title>
</head>

<body>
    
    <h1>Registro de Vuelos</h1>

    <form action="{{ route('vuelos.store')}}" method="post">

        @csrf

        <input type="text" name="horaSalidaTerminal" placeholder="HoraSalida">
        <br><br>
        <input type="text" name="horaEstimadaLlegada" placeholder="HoraLlegada">
        <br><br>
        <input type="text" name="terSalida" placeholder="TerminalSalida">
        <br><br>
        <input type="text" name="terLlegada" placeholder="TerminalLlegada">
        <br><br>
        <input type="text" name="ciudadSalida" placeholder="CiudadSalida">
        <br><br>
        <input type="text" name="ciudadLlegada" placeholder="CiudadLlegada">
        <br><br>
        <input type="text" name="nomPiloto" placeholder="NomPiloto">
        <br><br>

        <button type="button">Guardar</button>

    </form>

</body>

</html>