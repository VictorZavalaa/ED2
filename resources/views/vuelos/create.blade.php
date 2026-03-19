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

        <input type="text" name="horaSalidaTerminal" placeholder="Hora de Salida">
        <br><br>
        <input type="text" name="horaEstimadaLlegada" placeholder="Hora de Llegada">
        <br><br>
        <input type="text" name="terSalida" placeholder="Terminal de Salida">
        <br><br>
        <input type="text" name="terLlegada" placeholder="Termina de lLlegada">
        <br><br>
        <input type="text" name="ciudadSalida" placeholder="Ciudad de Salida">
        <br><br>
        <input type="text" name="ciudadLlegada" placeholder="Ciudad de Llegada">
        <br><br>
        <input type="text" name="nomPiloto" placeholder="Nombre del Piloto">
        <br><br>

        <button type="button">Registrar</button>

    </form>

</body>

</html>