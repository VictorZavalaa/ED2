<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>


<body>

    <h1>Registro de usuarios</h1>

    <form action="{{ route('registro.store') }}" method="POST">

        @csrf

        <input type="text" name="name" placeholder="Nombre" class="form-control" required>
        <br>
        <input type="email" name="email" placeholder="Correo" class="form-control" required>
        <br>
        <input type="text" name="phone" placeholder="Telefono" class="form-control" required>
        <br>
        <input type="password" name="password" placeholder="Contraseña" class="form-control" required>
        <br>
        <input type="password" name="password_confirmation" placeholder="Confirmar Contraseña" class="form-control"
            required>
        <br>

        <div class="form-check">
            <input type="checkbox" name="is_admin" value="1">
            <lable>Es administrador</lable>
        </div>


        <button type="submit" class="btn btn-success">Guardar</button>

    </form>

</body>

</html>
