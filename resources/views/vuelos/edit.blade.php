<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Vuelo</title>
</head>
<body>
    
     <h1>Editar Vuelo</h1>

    <form action="{{ route('vuelos.update', $vuelo) }}" method="post">

        @csrf
        @method('PUT')

        <input type="text" name="horaSalidaTerminal" value="{{ $vuelo->horaSalidaTerminal }}" placeholder="Hora de Salida">
        <br><br>
        <input type="text" name="horaEstimadaLlegada" value="{{ $vuelo->horaEstimadaLlegada }}" placeholder="Hora de Llegada">
        <br><br>
        <input type="text" name="terSalida" value="{{ $vuelo->terSalida }}" placeholder="Terminal de Salida">
        <br><br>
        <input type="text" name="terLlegada" value="{{ $vuelo->terLlegada }}" placeholder="Termina de lLlegada">
        <br><br>
        <input type="text" name="ciudadSalida" value="{{ $vuelo->ciudadSalida }}" placeholder="Ciudad de Salida">
        <br><br>
        <input type="text" name="ciudadLlegada" value="{{ $vuelo->ciudadLlegada }}" placeholder="Ciudad de Llegada">
        <br><br>
        <input type="text" name="nomPiloto" value="{{ $vuelo->nomPiloto }}" placeholder="Nombre del Piloto">
        <br><br>

        <button type="button" class="btn btn-success">Guardar</button>

    </form>
    <div class="d-flex justify-content-end">
        <a href="{{ route('vuelos.index') }}" class="btn btn-success">
            Volver
        </a>
    </div>


</body>
</html>